<x-app-layout>
    <x-slot name="header">
        <h5 class="font-semibold text-x1 text-gray-800 leading-tight text-center" >
            {{ __('compra de productos ' ) }}  

        </h5>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-x1 sm:rounded-lg">
                <h1>fsdgvfs</h1>


                <div class="flex flex-wrap -mx-9">
                    @foreach($id_producto as $producto)
                    <div class="w-full md:w-1/2 xl:w-1/3 px-4">
                       <div class="bg-white rounded-lg overflow-hidden mb-10">
                          <img
                             src="/imagen/{{$producto->imagen}}" max-heigth: 300px; alt="image" class="w-full"
                             />
                          <div class="p-8 sm:p-9 md:p-7 xl:p-9 text-center">
                             <h3>
                                <a
                                    class="font-semibold text-dark text-xl sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px]  mb-4 block hover:text-primary" >
                               Nombre :
                               <br>
                               {{$producto->nombre}}
                                </a>
                             </h3>
                             <p class="text-base text-body-color leading-relaxed mb-7">
                              {{$producto->description}}
                             </p>
                             <p class="text-xl font-black text-gray-800">
                              precio $  {{$producto->precio}}
                              <span class="font-normal text-gray-600 text-base"></span>
                           </p>
                          </div>
                       </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
