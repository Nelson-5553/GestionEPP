<div class="w-full">
    <span class="text-left text-2xl font-bold mt-4 text-black dark:text-white">
        Areas
    </span>
    <div class="mb-4 mt-4">
        {{ $areas->links() }}
    </div>
    <!-- Tabla -->
    <div
        class="overflow-hidden w-full overflow-x-auto rounded-md border border-neutral-300 dark:border-neutral-700 mt-4">

        <table wire:loading.table class="w-full text-left text-sm text-neutral-600 dark:text-neutral-300 animate-pulse">
            <thead class="border-b border-[#5A6ACF] bg-[#5A6ACF] text-sm text-white">
                <tr>
                    <th scope="col" class="p-4">Nombre</th>
                    <th scope="col" class="p-4">Sede</th>
                    <th scope="col" class="p-4 col-span-2">Descripción</th>
                    <th scope="col" class="p-4">Acción</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-neutral-300 dark:divide-neutral-700">
                @for ($i = 0; $i < 4; $i++)
                    <tr class="animate-pulse">
                        <td class="p-4">
                            <div class="h-4 w-20 bg-gray-300 dark:bg-gray-700 rounded"></div>
                        </td>
                        <td class="p-4">
                            <div class="h-4 w-16 bg-gray-300 dark:bg-gray-700 rounded"></div>
                        </td>

                        <td class="p-4">
                            <div class="h-4 w-64 bg-gray-300 dark:bg-gray-700 rounded col-span-2"></div>
                        </td>
                        <td class="flex flex-row justify-center space-x-3 p-4">
                            <div class="w-8 h-8 bg-gray-300 dark:bg-gray-700 rounded"></div>
                            <div class="w-8 h-8 bg-gray-300 dark:bg-gray-700 rounded"></div>
                            <div class="w-8 h-8 bg-gray-300 dark:bg-gray-700 rounded"></div>
                        </td>
                    </tr>
                @endfor
            </tbody>
        </table>

        <table wire:loading.remove class="w-full text-left text-sm text-neutral-600 dark:text-neutral-300">
            <thead class="border-b border-[#5A6ACF] bg-[#5A6ACF] text-sm text-white">
                <tr>
                    <th scope="col" class="p-4">Nombre</th>
                    <th scope="col" class="p-4">Sede</th>
                    <th scope="col" class="p-4">Descripción</th>
                    <th scope="col" class="p-4">Acción</th>

                </tr>
            </thead>
            <tbody class="divide-y divide-neutral-300 dark:divide-neutral-700">
                @if ($areas->isEmpty())
                    <tr>
                        <td colspan="4" class="p-4 text-center text-gray-500 dark:text-gray-400">No hay áreas
                            relacionadas.</td>
                    </tr>
                @else
                    @foreach ($areas as $area)
                        <tr class="bg-white dark:bg-neutral-900">
                            <td class="p-2">{{ $area->name }}</td>
                            <td class="p-2">{{ $area->sede->name }}</td>
                            <td class="p-2 truncate col-span-2">{{ $area->description }}</td>
                            <td class="p-2">
                                <div class="flex justify-center mt-1 space-x-3">
                                    <a href="{{ route('area.show', $area) }}"
                                        class="text-green-500 hover:text-green-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 shrink-0"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M12 9a3 3 0 0 1 3 3a3 3 0 0 1-3 3a3 3 0 0 1-3-3a3 3 0 0 1 3-3m0-4.5c5 0 9.27 3.11 11 7.5c-1.73 4.39-6 7.5-11 7.5S2.73 16.39 1 12c1.73-4.39 6-7.5 11-7.5M3.18 12a9.821 9.821 0 0 0 17.64 0a9.821 9.821 0 0 0-17.64 0" />
                                        </svg>
                                    </a>

                                    <a href="{{ route('area.edit', $area) }}" class="text-blue-500 hover:text-blue-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 shrink-0"
                                            viewBox="0 0 32 32">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="m30 7l-5-5L5 22l-2 7l7-2Zm-9-1l5 5ZM5 22l5 5Z" />
                                        </svg>
                                    </a>

                                    <form action="{{ route('area.destroy', $area) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <x-delete-modal name="area">
                                            <h3 id="dangerModalTitle"
                                                class="mb-2 font-semibold tracking-wide text-neutral-900 dark:text-white">
                                                Eliminar Area</h3>
                                            <p>Estas a punto de eliminar esta area ¿estas seguro que la quieres
                                                eliminar?</p>
                                        </x-delete-modal>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>


</div>
