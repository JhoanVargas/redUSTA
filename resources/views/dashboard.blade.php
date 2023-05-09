@extends('layaoutprincipal')
<div class="left-seccion">

    <div class="bg-[#20354b] rounded-2xl px-8 py-6 shadow-lg">

            <h2 class="text-white font-bold text-2xl tracking-wide">Bienvenido, {{$user->name}}</h2>

        <p class="text-emerald-400 font-semibold mt-2.5" >
            <a>@</a>{{$user->username}}
        </p>
        <br>
        <p style="color:lightyellow">0 publicaciones</p>
        <p style="color:lightyellow">0 seguidores</p>
        <p style="color:lightyellow">0 seguidos</p>
        <br>
        <p class="text-emerald-400 font-semibold mt-2.5" >
            {{$user->email}}
        </p>
        <p class="text-emerald-400 font-semibold mt-2.5" >
            Programa Academico: {{$user->programa}}
        </p>
        <p class="text-emerald-400 font-semibold mt-2.5" >
            Semestre Actual: {{$user->semestre}}
        </p>
        <p class="text-emerald-400 font-semibold mt-2.5" >
            Celular: {{$user->celular}}
        </p>
        <p class="text-emerald-400 font-semibold mt-2.5" >
            Direccion: {{$user->direccion}}
        </p>
        <p class="text-emerald-400 font-semibold mt-2.5" >
           Sobre mi:
        </p>
        <p style="color: lightyellow">
            {{$user->presentacion}}
        </p>
        <p class="text-emerald-400 font-semibold mt-2.5" >
            Género: {{$user->genero}}
        </p>
        <br><br>
        @auth
        <form action="{{route('logout')}}" method="POST">
            @csrf
        <button type="submit" class="
        w-full
        px-6
        py-2.5
        bg-blue-600
        text-white
        font-medium
        text-xs
        leading-tight
        uppercase
        rounded
        shadow-md
        hover:bg-blue-700 hover:shadow-lg
        focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
        active:bg-blue-800 active:shadow-lg
        transition
        duration-150
        ease-in-out"
        >Cerrar Sesión</button>
        <br><br>
        <a href="{{route('publicaciones.create')}}"
        class="
        w-full
        px-6
        py-2.5
        bg-blue-600
        text-white
        font-medium
        text-xs
        leading-tight
        uppercase
        rounded
        shadow-md
        hover:bg-blue-700 hover:shadow-lg
        focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
        active:bg-blue-800 active:shadow-lg
        transition
        duration-150
        ease-in-out"
        >
        Nueva Publicación
    </a>
    </form>
    @endauth
    </div>

</div>
<br>
<div class="left-seccion1">
    @foreach ($posts as $post)
    <div class="imagen_xd">
        <br>
    <h1 class="tituloImagen">
        {{$post->titulo}}
    </h1>
    <br>
<a href="{{route('publicaciones.show',['post'=>$post,'user'=>$user])}}">
    <img src="{{asset('uploads').'/'.$post->imagen}}" class="imagen">
</a>
<br>
<h4>
    {{$post->descripcion}}
</h4>
<br>
</div>
    @endforeach
</div>
<div class="paginador">
    {{$posts->links('pagination::tailwind')}}
</div>
