@extends('layaoutprincipal')
<div class="create-contenedor">
    
    <h1 class="titulo-create">Nueva Publicación</h1>
    <br>
    <form action="/file-upload" class="dropzone">
        <div class="fallback">
          <input name="file" type="file" multiple />
        </div>
      </form>

<div class="relative mb-4 flex w-full flex-wrap items-stretch">
    <span
      class="flex items-center whitespace-nowrap rounded-l border border-r-0 border-solid border-neutral-300 px-3 py-[0.25rem] text-center text-base font-normal leading-[1.6] text-neutral-700 dark:border-neutral-600 dark:bg-zinc-800 dark:text-neutral-200 dark:placeholder:text-neutral-200"
      id="basic-addon1"
      >Título</span
    >
    <input
      type="text"
      class="relative m-0 block w-[1px] min-w-0 flex-auto rounded-r border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition ease-in-out focus:z-[3] focus:border-primary-600 focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200"
      placeholder="Título de la publiación"
      aria-label="Username"
      aria-describedby="basic-addon1" />
  </div>
  
  
  <div class="relative flex w-full flex-wrap items-stretch">
    <span
      class="flex items-center whitespace-nowrap rounded-l border border-r-0 border-solid border-neutral-300 px-3 py-[0.25rem] text-center text-base font-normal leading-[1.6] text-neutral-700 dark:border-neutral-600 dark:bg-zinc-800 dark:text-neutral-200 dark:placeholder:text-neutral-200"
      >Descripción</span
    >
    <textarea
      class="relative m-0 block w-[1px] min-w-0 flex-auto rounded-r border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition ease-in-out focus:z-[3] focus:border-primary-600 focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200"
      aria-label="With textarea"></textarea>
  </div>
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
</div>
