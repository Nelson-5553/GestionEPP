<x-app-layout>
    <div class=" max-w-7xl mx-auto py-12 px-6 sm:px-6 lg:px-8">
        <p class="text-xl font-bold text-gray-900 dark:text-gray-200 md:-ml-5 ml-0">
            Gestion Salud Areas
        </p>
        <div
            class="flex flex-col sm:flex-row justify-between items-center w-auto h-auto mt-8 p-5 bg-[#F1F2F7] dark:bg-neutral-800 rounded-md">
            <x-search-areas />

            <x-register-modal name=area>
                <form action="{{route('area.store')}}" method="POST" enctype="multipart/form-data" class="p-6 w-96">
                    @csrf
                    <label class="block text-gray-700 dark:text-neutral-50 text-left font-medium">Nombre de Area</label>
                    <input type="text" name="name" value="{{ old('name') }}"
                        class="w-full p-2 border border-gray-300 dark:border-gray-700 dark:bg-gray-900 rounded-md mb-3 focus:outline-none focus:ring-2 focus:ring-purple-500"
                        placeholder="Nombre de Area">

                    <label for="sede_id"
                        class="block text-gray-700 dark:text-neutral-50 text-left font-medium">Sede</label>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="absolute pointer-events-none right-4 top-8 size-5">
                        <path fill-rule="evenodd"
                            d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                            clip-rule="evenodd" />
                    </svg>
                    <select id="sede_id" name="sede_id"
                        class="w-full appearance-none border border-gray-300 dark:border-gray-700 dark:bg-gray-900 rounded-md mb-3 focus:outline-none focus:ring-2 focus:ring-purple-500">
                        @if ($sedes->isEmpty())
                            <option value="">No hay sedes disponibles</option>
                        @else
                        <option value="" disabled selected hidden>Selecciona una sede</option>
                            @foreach ($sedes as $sede)
                                <option value="{{ $sede->id }}">{{ $sede->name }}</option>
                            @endforeach
                        @endif


                    </select>

                    <label
                        class="block text-gray-700 text-left dark:text-neutral-50 font-medium mt-4">Descripción</label>
                    <textarea name="description"
                        class="w-full h-32 p-2 border border-gray-300 dark:border-gray-700 dark:bg-gray-900 rounded-md mb-3 focus:outline-none focus:ring-2 focus:ring-purple-500"
                        placeholder="Algo que añadir...">{{ old('description') }}</textarea>

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

        <div class="flex flex-row mt-4 bg-[#F1F2F7] dark:bg-neutral-800 p-6 rounded-lg">
            @livewire('search-areas')
        </div>

    </div>

</x-app-layout>
