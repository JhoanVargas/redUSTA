@extends('layaoutprincipal')
<div class="contenedorShow">
<div  class="post-seccion">
<h1>{{$post->titulo}}</h1>
<h1>Publicacion de : <strong>{{$user->username}}</strong></h1>
<br>
<img src="{{asset('uploads').'/'.$post->imagen}}" class="imagenPost">
<p>{{$likes}} me gusta</p>
<strong>Descripcion:</strong>
<p>{{$post->descripcion}}</p>
<strong>{{$post->created_at->diffForHumans()}}</strong>
<form action="{{ route('like.store') }}" method="POST">
    @csrf
    <input type="hidden" name="post_id" value="{{ $post->id }}">
    <button type="submit" class="botonAdd">Me gusta</button>
</form>
@auth
@if($post->user_id == auth()->user()->id)
<form action="{{ route('publicaciones.destroy',$post) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="botonAdd">Eliminar Publicación</button>
</form>
@endif
@endauth
</div>
<div class="post-seccion">
    <br>
    <form action="{{route('comentarios.store',['user'=>$user,'post'=>$post])}}" method="POST">
        @csrf
        <h1>Añadir comentario</h1>
        <input type="hidden" name="post_id" value="{{ $post->id }}">
        <input type="hidden" name="post" value="{{ $post }}">
        <input type="text" class="form-control block
              w-3/4
              font-normal
              text-gray-700
              bg-white bg-clip-padding
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput125"
              placeholder=""
              name="texto">

          @error('texto')
          <br>
          <p class="bg-red-600 text-white my-2 text-sm p-2 text-center">{{$message}}</p>
        @enderror
        <button type="submit" class="botonAdd"
            >Añadir</button>
    </form>
    <br>
    <strong>Comentarios:</strong>
    <br>
    @foreach ($comentarios as $comentario)
    <br>
        <h1><a href="{{route('dash',['user'=>$comentario->user])}}"><strong>{{$comentario->user->username}} </strong></a>: {{$comentario->texto}} </h1>
        <strong>{{$comentario->created_at->diffForHumans()}}</strong>
        <form action="{{ route('comentarios.destroy', [$comentario->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="texto-rojo">Eliminar</button>
        </form>

        <br>
        @endforeach
        <br>
</div>
</div>
