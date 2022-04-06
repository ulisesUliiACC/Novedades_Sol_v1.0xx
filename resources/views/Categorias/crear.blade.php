<x-app-layout>
    <title>ulises</title>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Vista de  los productos ') }}
        </h2>
        <br>
        <form action="{{route('categorias.Store') }}" method="POST">
            {{  @csrf_field()}}
        <div class="bg-white  flex items-center justify-center">
    <card class="border-2 border-gray-300 rounded-2xl p-5 w-96">
      <p class="text-2xl text-center font-bold text-gray-700">Creacion de categorias</p>
      <label class="inline-block w-20 mr-6   font-bold text-gray-600">Nombre de la categoria</label>
      <input name="nombre" type="text"  placeholder="Nombre del Producto"
         class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 placeholder-gray-400 outline-none">
         <a href="{{ route('categorias.index') }}"
         class="py-3 px-6 text-white rounded-lg bg-red-500 shadow-lg block md:inline-block">Cancelar</a>              
      <button type="submit"
       class="bg-green-400 delay-75 duration-100 text-white text-sm font-bold rounded-2xl w-full 
       py-3 mt-7 border-b-4 border-b-green-600">Creacion de categoria</button>
    </card>
  </div>
</form>
       
    </x-slot>
</x-app-layout>
