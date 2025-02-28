<div class="w-full">
    <!-- Campo de búsqueda -->
    {{-- <input type="text" wire:model.live.debounce.150ms="search"
    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-purple-500"
    placeholder="Buscar área..."> --}}

     <!-- Paginación -->

     <span class="text-left text-2xl font-bold mt-4 text-black dark:text-white">
        Areas
    </span>
     <div class="mb-4 mt-4">
        {{ $areas->links() }}
    </div>
    <!-- Tabla -->
    <div class="overflow-hidden w-full overflow-x-auto rounded-md border border-neutral-300 dark:border-neutral-700 mt-4">
        <table class="w-full text-left text-sm text-neutral-600 dark:text-neutral-300">
            <thead
                class="border-b border-[#5A6ACF] bg-[#5A6ACF] text-sm text-white">
                <tr>
                    <th scope="col" class="p-4">Nombre</th>
                    <th scope="col" class="p-4">Sede</th>
                    <th scope="col" class="p-4">Descripción</th>
                    <th scope="col" class="p-4">Acción</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-neutral-300 dark:divide-neutral-700">
                @foreach ($areas as $area)
                    <tr class="bg-white dark:bg-neutral-800">
                        <td class="p-4">{{ $area->name }}</td>
                        <td class="p-4">{{ $area->sede->name }}</td>
                        <td class="p-4">{{ $area->description }}</td>
                        <td class="p-4">
                            <button type="button"
                                class="whitespace-nowrap rounded-sm bg-transparent p-0.5 font-semibold text-black outline-black hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0 dark:text-white dark:outline-white">
                                Editar
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</div>
