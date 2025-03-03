<div>
    <<div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
        <div wire:click="setEstado(null)" class="cursor-pointer flex flex-col justify-between aspect-video rounded-lg bg-blue-500 text-blue-800 dark:bg-blue-700 dark:text-blue-200 font-bold text-2xl p-4 lg:p-6">
            Total
            <p>{{ \App\Models\Solicitud::count() }}</p>
        </div>

        <div wire:click="setEstado('Aprobada')" class="cursor-pointer flex flex-col justify-between aspect-video rounded-lg bg-green-500 text-green-800 dark:bg-green-700 dark:text-green-200 font-bold text-2xl p-4 lg:p-6">
            Aprobadas
            <p>{{ \App\Models\Solicitud::where('state', 'Aprobada')->count() }}</p>
        </div>

        <div wire:click="setEstado('Rechazado')" class="cursor-pointer flex flex-col justify-between aspect-video rounded-lg bg-red-500 text-red-800 dark:bg-red-700 dark:text-red-200 font-bold text-2xl p-4 lg:p-6">
            Rechazadas
            <p>{{ \App\Models\Solicitud::where('state', 'Rechazado')->count() }}</p>
        </div>

        <div wire:click="setEstado('Pendiente')" class="cursor-pointer flex flex-col justify-between aspect-video rounded-lg bg-yellow-500 text-yellow-800 dark:bg-yellow-700 dark:text-yellow-200 font-bold text-2xl p-4 lg:p-6">
            Pendientes
            <p>{{ \App\Models\Solicitud::where('state', 'Pendiente')->count() }}</p>
        </div>
    </div>

    <div class="mt-6">
    {{ $solicitudes->links() }}
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
                        @foreach ($solicitudes as $solicitud)
                        <td class="p-4">
                            <div class="flex w-max items-center gap-2">
                                <div class="flex flex-col">
                                    <span class="text-neutral-900 dark:text-white">{{$solicitud->user->name}}</span>
                                    <span class="text-sm text-neutral-600 opacity-85 dark:text-neutral-300">{{$solicitud->user->card}}</span>
                                </div>
                            </div>
                        </td>
                        <td class="p-4">{{$solicitud->epp->name}}</td>
                        <td class="p-4"><span class="font-bold">{{$solicitud->sede->name}}</span> <br> {{$solicitud->area->name}}</td>
                        <td class="p-4"><span class="font-bold">{{$solicitud->cantidad}}</td>
                            <td class="p-4">
                                @php
                                    $colores = [
                                        'Pendiente' => 'border-yellow-500 text-yellow-500 bg-yellow-500/10',
                                        'Aprobado' => 'border-green-500 text-green-500 bg-green-500/10',
                                        'Rechazado' => 'border-red-500 text-red-500 bg-red-500/10',
                                    ];
                                    $clase = $colores[$solicitud->state] ?? 'border-gray-500 text-gray-500 bg-gray-500/10';
                                @endphp
                                <span class="inline-flex overflow-hidden rounded-sm border px-1 py-0.5 text-xs font-medium {{ $clase }}">
                                    {{ ucfirst($solicitud->state) }}
                                </span>
                            </td>
                        <td class="p-4"><a href="{{ route('solicitud.show', $solicitud) }}" class="whitespace-nowrap rounded-sm bg-transparent p-0.5 font-semibold text-black outline-black hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0 dark:text-white dark:outline-white">Revisar</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
</div>
