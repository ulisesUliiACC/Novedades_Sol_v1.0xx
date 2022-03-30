<x-app-layout>
   <x-slot name="header">
       <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
           {{ __(' VIsta de usuarios y clientes ') }}
       </h2>
       <div class="py-12 ">
       
         <div class="max-w-12x2 mx-auto sm:px-12 lg:px-12 auto-rows-auto">
             <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <section class="pt-20 lg:pt-[120px] pb-10 lg:pb-20 bg-[rgb(18,19,20)]">
                 <div class="container">
                    <div class="flex flex-wrap -mx-9">
                       @foreach($Categorias as $categoria)
                       <div class="w-full md:w-1/2 xl:w-1/3 px-4">
                          <div class="bg-white rounded-lg overflow-hidden mb-10">
                             <img
                                src="/imagen/{{$categoria->imagen}}" max-heigth: 300px; alt="image" class="w-full"/>
                             <div class="p-8 sm:p-9 md:p-7 xl:p-9 text-center">
                                <h3>
                                   <a
                                       class="font-semibold text-dark text-xl sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px]  mb-4 block hover:text-primary" >
                                  Nombre :
                                  <br>
                                  {{$categoria->nombre}}
                                   </a>
                                </h3>
                                <p class="text-base text-body-color leading-relaxed mb-7">
                                 {{$categoria->description}}
                                </p>
                                <p class="text-xl font-black text-gray-800">
                                 precio $  {{$categoria->precio}}
                                 <span class="font-normal text-gray-600 text-base"></span>
                              </p>
                                <a
                                   href="detalleventas "
                                   class="inline-block  py-2   px-7 border border-[#E5E7EB] rounded-full  text-base text-body-color font-medium hover:border-primary hover:bg-primary hover:text-white transition ">
                                comprar :)
                                </a>

                             </div>
                          </div>
                       </div>
                       
                     
                       @endforeach
                    </div>
                    <div>
                     {!! $Categorias->links() !!}
                 </div>
                 </div>
              </section>
             </div>
         </div>
     </div>
   </x-slot>

   
</x-app-layout>