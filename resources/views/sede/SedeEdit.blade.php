<x-app-layout>
    <div class="max-w-7xl mx-auto py-12 px-6 lg:px-8">
        <p class="text-xl font-bold text-gray-900 dark:text-gray-200 md:-ml-5">
            Editar Información de la Sede
        </p>

        <x-error-menssage />

        <div class="mt-8 bg-[#F1F2F7] dark:bg-neutral-800 p-6 rounded-lg w-auto">
            <form method="POST" action="{{route('sede.update', $sede->id)}}">
                @csrf
                @method('PUT')

                <div class="flex flex-col space-y-6">
                    <div>
                        <div class="flex flex-row justify-start items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-[#5A67BA]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
                            </svg>
                            <label for="name" class="block text-gray-900 dark:text-gray-200 font-semibold">Nombre</label>
                        </div>
                        <input type="text" id="name" name="name" value="{{ $sede->name }}"
                            class="w-full mt-1 p-2 border rounded-lg bg-white dark:bg-neutral-700 text-gray-900 dark:text-gray-200" >
                    </div>

                    <div>
                        <div class="flex flex-row justify-start items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-[#5A67BA]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                            </svg>
                            <label for="direction" class="block text-gray-900 dark:text-gray-200 font-semibold">Dirección</label>
                        </div>
                        <input type="text" id="direction" name="direction" value="{{ $sede->direction }}"
                            class="w-full mt-1 p-2 border rounded-lg bg-white dark:bg-neutral-700 text-gray-900 dark:text-gray-200" >
                    </div>

                    <div>
                        <div class="flex flex-row justify-start items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-[#5A67BA]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            <label for="description" class="block text-gray-900 dark:text-gray-200 font-semibold">Descripción</label>
                        </div>
                        <textarea id="description" name="description" rows="3"
                            class="w-full mt-1 p-2 border rounded-lg bg-white dark:bg-neutral-700 text-gray-900 dark:text-gray-200" >{{ $sede->description }}</textarea>
                    </div>
                </div>

                <div class="mt-6 flex justify-end">
                    <button type="submit"
                        class="flex flex-row px-4 py-2 bg-[#5A67BA] text-white font-semibold rounded-lg hover:bg-[#4C56A5] gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                          </svg>

                        Actualizar
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
