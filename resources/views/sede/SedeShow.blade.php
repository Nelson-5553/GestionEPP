
<x-app-layout>
    <div class="max-w-7xl mx-auto py-12 px-6 lg:px-8">
        <p class="text-xl font-bold text-gray-900 dark:text-gray-200 md:-ml-5">
            Gestión Salud Sede
        </p>

        <div class="mt-8 bg-[#F1F2F7] dark:bg-neutral-800 p-6 rounded-lg">
            <div class="flex flex-row justify-start items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-8 text-[#5A67BA]">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
                </svg>
                <h1 class="text-xl font-bold text-gray-900 dark:text-gray-200">{{ $sede->name }}</h1>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-8">
                <div class="flex flex-col justify-start">
                    <div class="flex flex-row justify-start items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6 text-[#5A67BA]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                        </svg>
                        <label class="block text-gray-900 dark:text-gray-200 font-semibold">Direccion</label>
                    </div>

                    <p class="text-gray-700 dark:text-gray-300 ml-8 mt-1">{{ $sede->direction }}</p>
                </div>
                <div class="flex flex-col justify-start">
                    <div class="flex flex-row justify-start items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6 text-[#5A67BA]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                        </svg>

                        <label class="block text-gray-900 dark:text-gray-200 font-semibold">Descripcion</label>
                    </div>

                    <p class="text-gray-700 dark:text-gray-300 ml-8 mt-1">{{ $sede->description }}</p>
                </div>
            </div>
            {{-- linea de separacion --}}
            <div class="flex justify-center mt-12 p-3">
                <div class="flex justify-center w-full border border-gray-400/50 dark:border-gray-200">
                </div>
            </div>

            <div class="flex flex-col justify-start mt-6">
                <div class="flex flex-row justify-start items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6 text-[#5A67BA]">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                    </svg>


                    <label class="block text-gray-900 dark:text-gray-200 font-semibold">Areas relacionadas</label>
                </div>

                <div class="grid grid-cols-3 md:grid-cols-4 gap-4 mt-6">
                  @foreach ($sede->areas as $areas)
                    <div
                        class="flex items-center gap-2 px-4 py-3 border border-gray-700 rounded-lg text-gray-700 dark:text-gray-300 bg-gray-200/50 dark:bg-gray-800/50">
                        <svg class="w-5 h-5 text-[#5A67BA]" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2">
                            </circle>
                        </svg>
                        {{$areas->name}}
                    </div>
                    @endforeach
                </div>


            </div>

            <div class="flex justify-end mt-6 gap-2">
                <a href="{{ route('sede.edit', $sede)}}" class="text-blue-500 hover:text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 shrink-0" viewBox="0 0 32 32">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" d="m30 7l-5-5L5 22l-2 7l7-2Zm-9-1l5 5ZM5 22l5 5Z" />
                    </svg>
                </a>
                <form action="{{ route('sede.destroy', $sede) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <x-delete-modal name="area">
                        <h3 id="dangerModalTitle"
                            class="mb-2 font-semibold tracking-wide text-neutral-900 dark:text-white">Eliminar Area</h3>
                        <p>Estas a punto de eliminar esta area ¿estas seguro que la quieres eliminar?</p>
                    </x-delete-modal>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
