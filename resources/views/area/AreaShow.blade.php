<x-app-layout>
    <div class="max-w-7xl mx-auto py-12 px-6 lg:px-8">
        <p class="text-2xl font-bold text-gray-900 dark:text-gray-200 md:-ml-5 border-b-2 border-gray-300 dark:border-gray-700 pb-2">
            Gestión Salud Áreas
        </p>

        <div class="mt-8 bg-white dark:bg-neutral-800 shadow-lg rounded-xl p-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <div class="flex flex-row items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-[#5A67BA]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                          </svg>

                    <p class="text-lg font-semibold text-gray-900 dark:text-gray-200">Nombre del Área:</p>
                </div>
                    <p class="text-gray-700 dark:text-gray-400 bg-gray-100 dark:bg-gray-700 rounded-md p-2">
                        {{ $area->name }}
                    </p>
                </div>
                <div>
                    <div class="flex flex-row items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-[#5A67BA]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
                          </svg>
                    <p class="text-lg font-semibold text-gray-900 dark:text-gray-200">Sede:</p>
                    </div>
                    <p class="text-gray-700 dark:text-gray-400 bg-gray-100 dark:bg-gray-700 rounded-md p-2">
                        {{ $area->sede->name }}
                    </p>
                </div>
            </div>
            <div class="flex flex-row items-center space-x-3 mt-6">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-[#5A67BA]">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                    </svg>
                    <p class="text-lg font-semibold text-gray-900 dark:text-gray-200">Descripción:</p>
                </div>
                <p class="text-gray-700 dark:text-gray-400 bg-gray-100 dark:bg-gray-700 rounded-md p-2">
                    {{ $area->description }}
                </p>
            <div class="flex justify-end mt-6 gap-3">
                <a href="{{route('area.edit', $area)}}" class="text-blue-500 hover:text-blue-600 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 shrink-0" viewBox="0 0 32 32">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m30 7l-5-5L5 22l-2 7l7-2Zm-9-1l5 5ZM5 22l5 5Z"/>
                    </svg>
                </a>
                <form action="{{route('area.destroy', $area )}}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <x-delete-modal name="area">
                        <h3 class="mb-2 text-lg font-semibold tracking-wide text-neutral-900 dark:text-white">
                            Eliminar Área
                        </h3>
                        <p class="text-gray-700 dark:text-gray-300">
                            Estás a punto de eliminar esta área. ¿Estás seguro de que deseas proceder?
                        </p>
                    </x-delete-modal>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
