<x-app-layout>
    <div class=" max-w-7xl mx-auto py-12 px-6 sm:px-6 lg:px-8">
        <p class="text-xl font-bold text-gray-900 dark:text-gray-200 md:-ml-5 ml-0">
            Gestion Salud Sedes
        </p>
        <div
        class="flex flex-col sm:flex-row justify-between items-center w-auto h-auto mt-8 p-5 bg-[#F1F2F7] dark:bg-neutral-800 rounded-md">
            {{-- <x-search-input /> --}}

            <x-register-modal name=sede>
                <form action="{{ route('sede.store') }}" method="POST" enctype="multipart/form-data" class="p-6 w-96">
                    @csrf
                    <label class="block text-gray-700 dark:text-neutral-50 text-left font-medium">Nombre de Sede</label>
                    <input type="text" name="name"
                        class="w-full p-2 border border-gray-300 dark:border-gray-700 dark:bg-gray-900 rounded-md mb-3 focus:outline-none focus:ring-2 focus:ring-purple-500"
                        placeholder="Nombre de sede">

                    <label class="block text-gray-700 text-left dark:text-neutral-50 font-medium">Dirección</label>
                    <input type="text" name="direction"
                        class="w-full p-2 border border-gray-300 dark:border-gray-700 dark:bg-gray-900 rounded-md mb-3 focus:outline-none focus:ring-2 focus:ring-purple-500"
                        placeholder="Dirección">

                    <label class="block text-gray-700 text-left dark:text-neutral-50 font-medium">Descripción</label>
                    <textarea name="description"
                        class="w-full h-32 p-2 border border-gray-300 dark:border-gray-700 dark:bg-gray-900 rounded-md mb-3 focus:outline-none focus:ring-2 focus:ring-purple-500"
                        placeholder="Algo que añadir..."></textarea>

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
        {{-- nensaje de exito --}}
        <x-success-menssage />
        {{-- mensaje de error --}}
        <x-error-menssage />

        <div class="grid grid-cols-1 gap-4 mt-8 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3">

            @foreach ($Sede as $sede)
                <div class="bg-white dark:bg-neutral-800 shadow-lg rounded-lg overflow-hidden">
                    <img class="w-full h-56 object-cover object-center"
                        src="{{ asset('storage/sedes/' . $sede->image) }}" alt="avatar">
                    <div class="px-4 py-2">
                        <h1 class="text-2xl font-bold text-[#5A6ACF] dark:text-white">{{ $sede->name }}</h1>
                        <p class="mt-1 text-[#5A6ACF] dark:text-white truncate">{{ $sede->direction }}</p>
                        <div class="flex justify-end mt-1 space-x-3">
                            <a href="{{ route('sede.show', $sede) }}"
                            class="text-green-500 hover:text-green-600">
                             <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 shrink-0" viewBox="0 0 24 24">
                                 <path fill="currentColor" d="M12 9a3 3 0 0 1 3 3a3 3 0 0 1-3 3a3 3 0 0 1-3-3a3 3 0 0 1 3-3m0-4.5c5 0 9.27 3.11 11 7.5c-1.73 4.39-6 7.5-11 7.5S2.73 16.39 1 12c1.73-4.39 6-7.5 11-7.5M3.18 12a9.821 9.821 0 0 0 17.64 0a9.821 9.821 0 0 0-17.64 0"/>
                             </svg>
                         </a>

                         <a href=""
                            class="text-blue-500 hover:text-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 shrink-0" viewBox="0 0 32 32"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m30 7l-5-5L5 22l-2 7l7-2Zm-9-1l5 5ZM5 22l5 5Z"/></svg>
                         </a>

                         <form action="{{ route("sede.destroy", $sede)}}" method="POST" class="inline">
                             @csrf
                             @method('DELETE')
                             <x-delete-modal name="sede">
                                <h3 id="dangerModalTitle" class="mb-2 font-semibold tracking-wide text-neutral-900 dark:text-white">Eliminar sede</h3>
                <p>Estas a punto de eliminar esta sede  ¿estas seguro que la quieres eliminar?</p>
                             </x-delete-modal>
                            </form>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>

    </div>

</x-app-layout>
