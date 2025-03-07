<x-app-layout>
    <div class=" max-w-7xl mx-auto py-12 px-6 sm:px-6 lg:px-8">
        <p class="text-xl font-bold text-gray-900 dark:text-gray-200 md:-ml-5 ml-0">
            Gestion Salud Entregas
        </p>
        <div
        class="flex flex-col sm:flex-row justify-between items-center w-auto h-auto mt-8 p-5 bg-[#F1F2F7] dark:bg-neutral-800 rounded-md">
            {{-- <x-search-input /> --}}

            {{-- <x-button-create name="solicitud" route=""/> --}}

        </div>
        {{-- nensaje de exito --}}
        <x-success-menssage />
        {{-- mensaje de error --}}
        <x-error-menssage />


            <div class="mt-6">

            </div>

                <div class="overflow-hidden w-full overflow-x-auto rounded-lg border border-neutral-300 dark:border-neutral-700 mt-6">
                    <table class="w-full text-left text-sm text-neutral-600 dark:text-neutral-300">
                        <thead class="border-b border-neutral-300 bg-neutral-50 text-sm text-neutral-900 dark:border-neutral-700 dark:bg-neutral-900 dark:text-white">
                            <tr>
                                <th scope="col" class="p-4">User</th>
                                <th scope="col" class="p-4">Epp</th>
                                <th scope="col" class="p-4">Sede/Area</th>
                                <th scope="col" class="p-4">Cantidad</th>
                                <th scope="col" class="p-4">Estado</th>
                                <th scope="col" class="p-4">Accion</th>

                            </tr>
                        </thead>
                        <tbody class="divide-y divide-neutral-300 dark:divide-neutral-700">
                            <tr>

                                <td class="p-4">
                                    <div class="flex w-max items-center gap-2">
                                        <div class="flex flex-col">
                                            <span class="text-neutral-900 dark:text-white">ok</span>
                                            <span class="text-sm text-neutral-600 opacity-85 dark:text-neutral-300">ok</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-4">Ok</td>
                                <td class="p-4"><span class="font-bold">ok</span> <br> ok</td>
                                <td class="p-4"><span class="font-bold">ok</td>
                                    <td class="p-4">
                                        @php
                                            $colores = [
                                                'Pendiente' => 'border-yellow-500 text-yellow-500 bg-yellow-500/10',
                                                'Entregado' => 'border-green-500 text-green-500 bg-green-500/10',
                                                'Cancelado' => 'border-red-500 text-red-500 bg-red-500/10',
                                            ];
                                            // $clase = $colores[$solicitud->state] ?? 'border-gray-500 text-gray-500 bg-gray-500/10'; {{ $clase }}
                                        @endphp
                                        <span class="inline-flex overflow-hidden rounded-sm border px-1 py-0.5 text-xs font-medium ">
                                            {{-- {{ ucfirst($solicitud->state) }} --}}
                                        </span>
                                    </td>

                            </tr>

                        </tbody>
                    </table>
        </div>


</x-app-layout>
