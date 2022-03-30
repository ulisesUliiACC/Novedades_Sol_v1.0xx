<x-app-layout>
    <x-slot name="header">
        <h5 class="font-semibold text-x1 text-gray-800 leading-tight text-center" >
            {{ __('Editar producto ' ) }}  

        </h5>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-x1 sm:rounded-lg">


                <form action="{{ route('zapatos.update', $zapato->id_zapato) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="bg-green-200 py-32 px-5 min">
                        <!--   tip; mx-auto -- jagab ilusti keskele  -->
                        <div class="bg-white p-10 md:w-3/4 lg:w-1/2 mx-auto">
                            <!--       flex - asjad korvuti, nb! flex-1 - element kogu ylejaanud laius -->

                            <div class="flex items-center  mb-5">
                                <!--         tip - here neede inline-block , but why? -->
                                <label class="inline-block w-20 mr-6   font-bold text-gray-600">Nombre</label>
                                <input name="nombre" type="text" value="{{ $zapato->nombre }}"
                                    placeholder="Nombre del Producto"
                                    class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 placeholder-gray-400 outline-none"
                                    required>
                            </div>

                            <div class="grid grid-cols-1 mt-5 mx-7 justify-center">
                                <img src="/imagen/{{ $zapato->imagen }}" width="200px" id="imagenSeleccionada">
                            </div>
                            <br>
                            <!-- inicio de la parte del imagen -->
                            <div class="flex items-center mb-5">
                                <label
                                    class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">agregar
                                    imagen</label>
                                <div class='flex items-center justify-center mb-5 w-full'>
                                    <label
                                        class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                                        <div class='flex flex-col items-center justify-center pt-7'>
                                            <svg class="mx-auto h-12 w-12 text-black" stroke="currentColor" fill="none"
                                                viewBox="0 0 48 48" aria-hidden="true">
                                                <path
                                                    d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <p
                                                class='text-sm text-gray-400 group-hover:text-purple pt-1 tracting-wider'>
                                                Seleciona la imagen</p>
                                        </div>
                                        <input name="imagen" id="imagen" type='file' class="hidden" />
                                    </label>
                                </div>
                            </div>
                            <!-- final de la parte del imagen -->

                            <div class="flex items-center mb-5">
                                <label
                                    class="inline-block w-20 mr-6 text-right font-bold text-gray-600">Descripcion</label>
                                <input type="text" name="descripcion" placeholder="Name"
                                    value="{{ $zapato->descripcion }}" required>

                                <!---- agregar la descripcion -->
                                <!--<textarea name="descripcion"  id="descripcion" value="{{ $zapato->descripcion }}"
                                      class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-800 rounded-md white:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 white:focus:border-blue-500 focus:outline-none focus:ring">
                                      </textarea>-->

                                <!---- agregar la descripcion -->

                            </div>
                            <div class="flex items-center mb-5">
                                <!--         tip - here neede inline-block , but why? -->
                                <label class="inline-block w-20 mr-6 text-right  font-bold text-gray-600">Precio</label>
                                <input type="number" name="precio" value="{{ $zapato->precio }}" id="Precio"
                                    placeholder="Precio "
                                    class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 placeholder-gray-400 outline-none">
                            </div>
                            <!--botones de cancelar y guardar :3 -->
                            <div class='flex items-center justify-center md:gap-8 gap-4 pt-5 '>
                                <a href="{{ route('zapatos.index') }}"
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
