@extends('layaoutprincipal')
<div class="contenedor">

<div class="block p-6 rounded-lg shadow-lg bg-white">
    <form action="/registro" method="POST">
      @csrf
      <div class="grid grid-cols-2 gap-4">  
        <div class="form-group mb-6">
          <input type="text" class="form-control
            block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput123"
            aria-describedby="emailHelp123" placeholder="Nombre"
            name="name">
            @error('name')
            <p class="bg-red-600 text-white my-2 text-sm p-2 text-center">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group mb-6">
          <input type="text" class="form-control
            block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput124"
            aria-describedby="emailHelp124" placeholder="Apellido"
            name="lastname">
            @error('lastname')
            <p class="bg-red-600 text-white my-2 text-sm p-2 text-center">{{$message}}</p>
            @enderror
        </div>
      </div>
      <div class="form-group mb-6">
        <input type="email" class="form-control block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-gray-700
          bg-white bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-0
          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput125"
          placeholder="Correo"
          name="email">
          @error('email')
            <p class="bg-red-600 text-white my-2 text-sm p-2 text-center">{{$message}}</p>
          @enderror
      </div>
      <div class="form-group mb-6">
        <input type="password" class="form-control block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-gray-700
          bg-white bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-0
          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput126"
          placeholder="Contraseña"
          name="pass">
          @error('pass')
            <p class="bg-red-600 text-white my-2 text-sm p-2 text-center">{{$message}}</p>
          @enderror
      </div>
      
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
        >Registrarse</button>
    </form>
  </div>

</div>

</div>