<x-app-layout>
    <div class=" max-w-7xl mx-auto py-12 sm:px-6 lg:px-8">
        <p class="text-xl font-bold text-gray-900 dark:text-gray-200 -ml-7">
            Gestion Salud Sedes
        </p>
        <div
            class="flex flex-row justify-between items-center w-auto h-24 mt-8 p-5 bg-[#F1F2F7] dark:bg-neutral-800 rounded-md">
            <x-search-input />
            <x-register-modal name=sede>
                <form action="{{ route('sede.store') }}" method="POST" enctype="multipart/form-data" class="p-6 w-96">
                    @csrf
                    <label class="block text-gray-700 text-left font-medium">Nombre de Sede</label>
                    <input type="text" name="name"
                        class="w-full p-2 border border-gray-300 rounded-md mb-3 focus:outline-none focus:ring-2 focus:ring-purple-500">

                    <label class="block text-gray-700 text-left font-medium">Dirección</label>
                    <input type="text" name="direction"
                        class="w-full p-2 border border-gray-300 rounded-md mb-3 focus:outline-none focus:ring-2 focus:ring-purple-500">

                    <label class="block text-gray-700 text-left font-medium">Descripción</label>
                    <textarea name="description"
                        class="w-full h-32 p-2 border border-gray-300 rounded-md mb-3 focus:outline-none focus:ring-2 focus:ring-purple-500"></textarea>

                    <div class="mb-3">
                        <!-- Input oculto -->
                        <input type="file" id="fileUpload" name="image" accept="image/*" class="hidden">

                        <!-- Botón para activar el input -->
                        <label for="fileUpload"
                            class="cursor-pointer bg-[#5A6ACF] text-white px-4 py-2 rounded-md hover:bg-[#5A6ACF]0">
                            ⬆️ Subir foto
                        </label>
                    </div>
                    <div class="flex items-center justify-center border-neutral-300 p-4 dark:border-neutral-700">
                        <button type="submit"
                            class="w-full whitespace-nowrap rounded-md border border-[#5A6ACF] bg-[#5A6ACF] px-4 py-2 text-center text-sm font-semibold tracking-wide text-white transition hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#5A6ACF] active:opacity-100 active:outline-offset-0">Registrar</button>
                    </div>
                </form>
            </x-register-modal>
        </div>
     @if (session('success'))
        <div class="p-4 mt-4 text-sm text-green-700 bg-green-100 rounded-lg" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if ($errors->any())
    <div class="p-4 mt-4 text-sm text-red-700 bg-red-100 rounded-lg" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="grid grid-cols-1 gap-4 mt-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3">

        @foreach ( $Sede as $sede )
            <div class="bg-white dark:bg-neutral-800 shadow-lg rounded-lg overflow-hidden">
                <img class="w-full h-56 object-cover object-center" src="{{ asset('storage/sedes/' . $sede->image) }}" alt="avatar">
                <div class="px-4 py-2">
                    <h1 class="text-2xl font-bold text-[#5A6ACF] dark:text-white">{{ $sede->name }}</h1>
                    <p class="mt-1 text-[#5A6ACF] dark:text-white">{{ $sede->direction }}</p>
                    <div class="mt-3">
                        {{-- <a href=""
                            class="px-4 py-2 bg-sky-500 text-white rounded-md hover:bg-sky-600">Ver</a>
                        <a href=""
                            class="px-4 py-2 bg-yellow-500 text-white rounded-md hover:bg-yellow-600">Editar</a>
                        <form action="" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600">Eliminar</button>
                        </form> --}}
                    </div>
                </div>

            </div>

    {{-- <tr>
        <td class="p-4">{{$sede->id}}</td>
            <td class="p-4">{{$sede->name}}</td>
            <td class="p-4">{{$sede->direction}}</td>
            <img src="{{ asset('storage/sedes/' . $sede->image) }}" alt="Imagen de la sede">
            <td class="p-4"><button type="button" class="whitespace-nowrap rounded-sm bg-transparent p-0.5 font-semibold text-black outline-black hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0 dark:text-white dark:outline-white">Edit</button></td>
        </tr> --}}
        @endforeach
    </div>

    </div>

</x-app-layout>
