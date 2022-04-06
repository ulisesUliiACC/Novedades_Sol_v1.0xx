<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-x4 text-gray-800 leading-tight text-center">
            {{ __('categorias') }}
        </h2>

        <div class="max-w-7 x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-x1 sm:rounded-lg">

                <a href="{{ route('categorias.create') }}"
                    class="py-3 px-12 text-white rounded-lg bg-purple-600 shadow-lg block md:inline-block">crear
                    categorias</a>

                <table class="table-fixed w-full">
                    <thead>
                        <tr class="bg-gray-800 text-white">
                            <th>ID</th>
                            <th class="border px-4 py-2">NOMBRE</th>
                            <th class="border px-4 py-2">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categorias as $categoria)
                            <tr>
                                <td class="border px-4 py-2 text-center">{{ $categoria->id }}</td>
                                <td class="border px-4 py-2 text-center">{{ $categoria->nombre }}</td>

                                <td class="border px-4 py-2">
                                    <div class="flex justify-center rounded-lg text-lg" role="group">
                                        <!-- BOTON DE EDITAR -->
                                       

                                            <a href="{{ route('categorias.update', $categoria->id) }} "
                                                class="rounded bg-gray-500 hover:bg-gray-600 
                                            text-white font-bold py-2 px-3">EDITAR</a>

                                            <!--- BOTON DE BORRAR-->
                                            <form action="{{ route('categorias.destroy', $categoria->id) }}"
                                                method="POST" class="formEliminar">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="bg-indigo-500 px-2 py-2 rounded text-gray-200 font-semibold hover:bg-indigo-800 transition duration-200 each-in-out">BORRAR</button>

                                            </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>

        </div>

    </x-slot>

</x-app-layout>
