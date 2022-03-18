<h4>hol aulsdvds</h4><x-app-layout>
    <x-slot name="header">
        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear productos') }}
        </h2>
        <div class="py-12">
            <div class="max-w-7 x1 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-x1 sm:rounded-lg">
                    

                    <form action="{{ route('cliente.store') }}" method="POST" enctype="multipart/form-data">
                      {{  @csrf_field()}}
                        <div class="bg-green-200 py-32 px-5 min">
                            <!--   tip; mx-auto -- jagab ilusti keskele  -->
                            <div class="bg-white p-10 md:w-3/4 lg:w-1/2 mx-auto">
                                <!--       flex - asjad korvuti, nb! flex-1 - element kogu ylejaanud laius -->

                                <div class="flex items-center  mb-5">
                                    <!--         tip - here neede inline-block , but why? -->
                                    <label
                                        class="inline-block w-20 mr-6   font-bold text-gray-600">Nombre</label>
                                    <input name="nombre" type="text"  placeholder="Nombre"
                                        class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 placeholder-gray-400 outline-none">
                                </div>

                                <div class="flex items-center  mb-5">
                                    <!--         tip - here neede inline-block , but why? -->
                                    <label
                                        class="inline-block w-20 mr-6   font-bold text-gray-600">Apellido paterno</label>
                                    <input name="apellido_pa" type="text"  placeholder="Apellido paterno"
                                        class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 placeholder-gray-400 outline-none">
                                </div>

                                <div class="flex items-center  mb-5">
                                    <!--         tip - here neede inline-block , but why? -->
                                    <label
                                        class="inline-block w-20 mr-6   font-bold text-gray-600">Apellido materno</label>
                                    <input name="apellido_ma" type="text"  placeholder="Apellido materno"
                                        class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 placeholder-gray-400 outline-none">
                                </div>

                                <div class="grid grid-cols-1 mt-5 mx-7 justify-center">
                                    <img id="imagenSeleccionada" style="max-heigth: 300px;">

                                </div>
                                <br>

                                <div class="flex items-center mb-5">
                                    <label
                                        class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">agregar
                                        imagen</label>
                                    <div class='flex items-center justify-center mb-5 w-full'>
                                        <label
                                            class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                                            <div class='flex flex-col items-center justify-center pt-7'>
                                                <svg class="mx-auto h-12 w-12 text-black" stroke="currentColor"
                                                    fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                    <path
                                                        d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <p
                                                    class='text-sm text-gray-400 group-hover:text-purple pt-1 tracting-wider'>
                                                    Seleciona la imagen</p>
                                            </div>
                                            <input id="imagen" name="imagen" id="imagen" type='file' class="hidden" />
                                        </label>
                                    </div>
                                </div>

                                <div class="flex items-center  mb-5">
                                    <label
                                        class="inline-block w-20 mr-6   font-bold text-gray-600">Correo Electronico</label>
                                    <input name="correo" type="email" 
                                        class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 placeholder-gray-400 outline-none">
                                </div>
                                    <!-- check de genero -->
                                <div class="flex items-center  mb-5">
                                    <label class="inline-block w-20 mr-6   font-bold text-gray-600">genero</label>
                                    <label class="inline-flex items-center mt-3">
                                        <input type="radio" class="form-radio h-5 w-5 text-purple-600" name="genero" value="masculino" checked><span class="ml-2 text-gray-700">Masculino</span>
                                    </label>
                                 </div>
                                 <div class="flex items-center  mb-5">
                                    <label class="inline-block w-20 mr-6   font-bold text-gray-600"></label>
                                    <label class="inline-flex items-center mt-3">
                                        <input type="radio" class="form-radio h-5 w-5 text-purple-600" name="genero" value="femenino" checked><span class="ml-2 text-gray-700">Femenino</span>
                                    </label>
                                 </div>
                                 <!-- check de genero -->
                               
                                 <div class="flex items-center  mb-5">
                                    <label
                                        class="inline-block w-20 mr-6   font-bold text-gray-600">Fecha de Nacimiento</label>
                                    <input name="fecha_de_naci" type="date"  value="fecha_de_naci"
                                        class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 placeholder-gray-400 outline-none">
                                </div>
                                
                                
                                <div class='flex items-center justify-center md:gap-8 gap-4 pt-5 '>
                                    <a href="{{ route('cliente.index') }}"
                                      class="py-3 px-6 text-white rounded-lg bg-red-500 shadow-lg block md:inline-block">Cancelar</a>
                                    <button type="submit "
                                    class="py-3 px-6 text-white rounded-lg bg-purple-600 shadow-lg block md:inline-block">Guardar</button>

                                </div>

                            </div>
                            
                        </div>
                        
                    </form>


                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
    $(document).ready(function(e) {
        $('#imagen ').change(function() {
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#imagenSeleccionada').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    });
</script>
