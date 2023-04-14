@extends('layaoutprincipal')
<div class="create-contenedor">
  
    
    <h1 class="titulo-create">Nueva Publicación</h1>
    <br>
    <form action="{{route('imagenes.store')}}" method="POST" class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center" id="dropzone">
      @csrf
      </form>
      @error('imagen')
            <p class="bg-red-600 text-white my-2 text-sm p-2 text-center">{{$message}}</p>
          @enderror
      <form action="{{route("publicaciones.store")}}" method="POST">
        @csrf
<div class="relative mb-4 flex w-full flex-wrap items-stretch">
    <span
      class="flex items-center whitespace-nowrap rounded-l border border-r-0 border-solid border-neutral-300 px-3 py-[0.25rem] text-center text-base font-normal leading-[1.6] text-neutral-700 dark:border-neutral-600 dark:bg-zinc-800 dark:text-neutral-200 dark:placeholder:text-neutral-200"
      id="basic-addon1"
      >Título</span
    >
    <input
      name="titulo"
      type="text"
      class="relative m-0 block w-[1px] min-w-0 flex-auto rounded-r border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition ease-in-out focus:z-[3] focus:border-primary-600 focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200"
      placeholder="Título de la publiación"
      aria-label="Username"
      aria-describedby="basic-addon1" />
      <br>
      @error('titulo')
            <p class="bg-red-600 text-white my-2 text-sm p-2 text-center">{{$message}}</p>
      @enderror
  </div>
  
  
  <div class="relative flex w-full flex-wrap items-stretch">
    <span
      class="flex items-center whitespace-nowrap rounded-l border border-r-0 border-solid border-neutral-300 px-3 py-[0.25rem] text-center text-base font-normal leading-[1.6] text-neutral-700 dark:border-neutral-600 dark:bg-zinc-800 dark:text-neutral-200 dark:placeholder:text-neutral-200"
      >Descripción</span
    >
    <textarea
      class="relative m-0 block w-[1px] min-w-0 flex-auto rounded-r border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition ease-in-out focus:z-[3] focus:border-primary-600 focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200"
      name = "descripcion"
      aria-label="With textarea"></textarea>
      <br>
      @error('descripcion')
      <p class="bg-red-600 text-white my-2 text-sm p-2 text-center">{{$message}}</p>
    @enderror
    
  </div>
  <input 
  value = "{{old ('imagen')}}"
  name="imagen"
  type="hidden">
  <br>
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
        >Subir Publicación</button>
      </form>
</div>
