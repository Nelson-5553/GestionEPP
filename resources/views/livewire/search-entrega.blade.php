<div class="mt-6">

    {{ $entregas->links() }}

    <div
        class="overflow-hidden w-full overflow-x-auto rounded-lg border border-neutral-300 dark:border-neutral-700 mt-6">
        <table wire:loading.table class="w-full text-left text-sm text-neutral-600 dark:text-neutral-300 animate-pulse">
            <thead class="border-b border-[#5A6ACF] bg-[#5A6ACF] text-sm text-white">
                <tr>
                    <th scope="col" class="p-4">User</th>
                    <th scope="col" class="p-4">Epp</th>
                    <th scope="col" class="p-4">Sede/Area</th>
                    <th scope="col" class="p-4">Cantidad</th>
                    <th scope="col" class="p-4">Fecha de Actualización</th>
                    <th scope="col" class="p-4">Estado</th>
                    <th scope="col" class="p-4">Accion</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-neutral-300 dark:divide-neutral-700">
                @for ($i = 0; $i < 5; $i++)
                    <tr class="animate-pulse">
                        <td class="p-4">
                            <div class="flex w-max items-center gap-2">
                                <div class="flex flex-col">
                                    <div class="h-4 w-24 bg-gray-300 dark:bg-gray-700 rounded"></div>
                                    <div class="h-3 w-16 bg-gray-300 dark:bg-gray-700 rounded mt-1"></div>
                                </div>
                            </div>
                        </td>
                        <td class="p-4">
                            <div class="h-4 w-16 bg-gray-300 dark:bg-gray-700 rounded"></div>
                        </td>

                        <td class="p-4">
                            <div class="flex w-max items-center gap-2">
                                <div class="flex flex-col">
                                    <div class="h-4 w-24 bg-gray-300 dark:bg-gray-700 rounded"></div>
                                    <div class="h-3 w-16 bg-gray-300 dark:bg-gray-700 rounded mt-1"></div>
                                </div>
                            </div>
                        </td>
                        <td class="p-4">
                            <div class="h-4 w-20 bg-gray-300 dark:bg-gray-700 rounded"></div>
                        </td>
                        <td class="p-4">
                            <div class="h-4 w-16 bg-gray-300 dark:bg-gray-700 rounded"></div>
                        </td>

                        <td class="p-4">
                            <div class="h-4 w-12 bg-gray-300 dark:bg-gray-700 rounded"></div>
                        </td>
                        <td class="flex flex-row justify-center space-x-3 p-4">
                            <div class="w-8 h-4 bg-gray-300 dark:bg-gray-700 rounded"></div>
                        </td>
                    </tr>
                @endfor
            </tbody>
        </table>
        <table wire:loading.remove class="w-full text-left text-sm text-neutral-600 dark:text-neutral-300">
            <thead class="border-b border-[#5A6ACF] bg-[#5A6ACF] text-sm text-white">
                <tr>
                    <th scope="col" class="p-4">User</th>
                    <th scope="col" class="p-4">Epp</th>
                    <th scope="col" class="p-4">Sede/Area</th>
                    <th scope="col" class="p-4">Cantidad</th>
                    <th scope="col" class="p-4">Fecha de Actualización</th>
                    <th scope="col" class="p-4">Estado</th>
                    {{-- @can('ver solicitud detalle') --}}
                    <th scope="col" class="p-4">Accion</th>
                    {{-- @endcan --}}
                </tr>
            </thead>
            <tbody class="divide-y divide-neutral-300 dark:divide-neutral-700">
                <tr>
                    {{-- @if($entregas->isEmpty())
                    <tr>
                        <td colspan="7" class="p-4 text-center text-gray-500 dark:text-gray-400">No hay entrega relacionadas.</td>
                    </tr>
                    @else --}}
                    @foreach ($entregas as $entrega)
                        <td class="p-4">
                            <div class="flex w-max items-center gap-2">
                                <div class="flex flex-col">
                                    <span
                                        class="text-neutral-900 dark:text-white font-bold">{{ $entrega->solicitud->user->name }}</span>
                                    <span
                                        class="text-sm text-neutral-600 opacity-85 dark:text-neutral-300">{{ $entrega->solicitud->user->card }}</span>
                                </div>
                            </div>
                        </td>
                        <td class="p-4">{{ $entrega->solicitud->epp->name }}</td>
                        <td class="p-4"><span class="font-bold">{{ $entrega->solicitud->sede->name }}</span>
                            <br>{{ $entrega->solicitud->area->name }} </td>
                        <td class="p-4"><span class="font-bold">{{ $entrega->solicitud->cantidad }}</td>
                        @if ($entrega->state === 'Entregado' || $entrega->state === 'Cancelado')
                            <td class="p-4"><span class="font-bold">{{ $entrega->updated_at->format('d-m-Y') }}</td>
                        @else
                            <td class="p-4"><span class="font-bold">Solicitud pendiente</td>
                        @endif
                        <td class="p-4">
                            @php
                                $colores = [
                                    'Pendiente' => 'border-yellow-500 text-yellow-500 bg-yellow-500/10',
                                    'Entregado' => 'border-green-500 text-green-500 bg-green-500/10',
                                    'Cancelado' => 'border-red-500 text-red-500 bg-red-500/10',
                                ];
                                $clase = $colores[$entrega->state] ?? 'border-gray-500 text-gray-500 bg-gray-500/10';
                            @endphp
                            <span
                                class="inline-flex overflow-hidden rounded-sm border px-1 py-0.5 text-xs font-medium {{ $clase }}">
                                {{ ucfirst($entrega->state) ?: 'No hay estado' }}
                            </span>
                        </td>
                        {{-- @can('ver solicitud detalles') --}}
                        <td class="p-4"><a href="{{ route('entrega.show', $entrega) }}"
                                class="whitespace-nowrap rounded-sm bg-transparent p-0.5 font-semibold text-black outline-black hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0 dark:text-white dark:outline-white">Revisar</a>
                        </td>
                        {{-- @endcan --}}
                </tr>
                @endforeach
                {{-- @endif --}}
            </tbody>
        </table>
    </div>

</div>
