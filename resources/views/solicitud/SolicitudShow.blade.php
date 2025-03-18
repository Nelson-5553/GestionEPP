<x-app-layout>
    <div class="max-w-7xl mx-auto py-12 px-6 lg:px-8">

        @php
            $colores = [
                'Pendiente' => 'border-yellow-500 text-yellow-500 bg-yellow-500/10',
                'Aprobado' => 'border-green-500 text-green-500 bg-green-500/10',
                'Rechazado' => 'border-red-500 text-red-500 bg-red-500/10',
            ];
            $clase = $colores[$solicitud->state] ?? 'border-gray-500 text-gray-500 bg-gray-500/10';
        @endphp

<div class="flex flex-col sm:flex-row sm:justify-between bg-[#f9f9fa] dark:bg-neutral-800 border-2 border-gray-300 dark:border-gray-600 w-full rounded-t-lg p-3 sm:p-4 mt-6 sm:mt-8">
    <h1 class="text-lg sm:text-xl font-bold text-gray-900 dark:text-gray-200">Información de Solicitud</h1>
    <span class="w-fit inline-flex overflow-hidden rounded-full border bg-white text-xs sm:text-sm font-medium dark:bg-neutral-950 {{ $clase }}">
        <span class="px-2 py-1 sm:px-3 sm:py-2">{{ ucfirst($solicitud->state) }}</span>
    </span>
</div>


        <div class=" bg-[#f9f9fa] dark:bg-neutral-800 border border-gray-300 dark:border-gray-600 p-7 rounded-b-lg">
            <br>
            <div class="grid grid-cols-1 md:grid-cols-2  gap-8">
                <!-- Informacion de usuario -->
                <div class="flex flex-col text-gray-900 dark:text-gray-200 space-y-4">
                    <div class="flex flex-row items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5 text-[#5A67BA]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>
                        <p class="font-semibold text-sm md:text-base">INFORMACIÓN DE USUARIO:</p>
                    </div>
                    <div class="bg-slate-300/50 dark:bg-slate-600/50 rounded-lg p-4">
                        <label class="text-gray-900 dark:text-gray-400 text-xs">Nombre</label>
                        <p class="text-sm">{{ $solicitud->user->name }}</p>
                        <label class="text-gray-900 dark:text-gray-400 text-xs">Identificación</label>
                        <p class="text-sm">{{ $solicitud->user->card }}</p>
                    </div>
                </div>

                <!-- Ubicación -->
                <div class="flex flex-col text-gray-900 dark:text-gray-200 space-y-4">
                    <div class="flex flex-row items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5 text-[#5A67BA]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                        </svg>
                        <p class="font-semibold text-sm md:text-base">UBICACIÓN:</p>
                    </div>
                    <div class="bg-slate-300/50 dark:bg-slate-600/50 rounded-lg p-4">
                        <label class="text-gray-900 dark:text-gray-400 text-xs">Sede</label>
                        <p class="text-sm">{{ $solicitud->sede->name ?? 'No especificado' }}</p>
                        <label class="text-gray-900 dark:text-gray-400 text-xs">Área</label>
                        <p class="text-sm">{{ $solicitud->area->name ?? 'No especificado' }}</p>
                    </div>
                </div>

                <!-- Elemento de Protección Personal -->
                <div class="flex flex-col text-gray-900 dark:text-gray-200 space-y-4">
                    <div class="flex flex-row items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5 text-[#5A67BA]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                        </svg>
                        <p class="font-semibold text-sm md:text-base">ELEMENTO DE PROTECCIÓN PERSONAL:</p>
                    </div>
                    <div class="flex flex-row bg-slate-300/50 dark:bg-slate-600/50 rounded-lg p-4 space-x-4">
                        <div>
                            <label class="text-gray-900 dark:text-gray-400 text-xs">Tipo</label>
                            <p class="text-sm">{{ $solicitud->epp->name ?? 'No hay EPP disponible' }}</p>
                        </div>
                        <div>
                            <label class="text-gray-900 dark:text-gray-400 text-xs">Cantidad</label>
                            <p class="text-sm">{{ $solicitud->cantidad ?? 'No hay Cantidad disponible' }}</p>
                        </div>
                    </div>
                </div>

                <!-- Turnos -->
                <div class="flex flex-col text-gray-900 dark:text-gray-200 space-y-4">
                    <div class="flex flex-row items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5 text-[#5A67BA]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>

                        <p class="font-semibold text-sm md:text-base">ACTUALIZAR ESTADO:</p>
                    </div>
                    <div class="flex flex-row justify-center w-full bg-slate-300/50 dark:bg-slate-600/50 rounded-lg p-4">
                        <div class="text-gray-900 dark:text-gray-200 w-full">
                            @if ($solicitud->state === 'Aprobado')
                                <p class="text-center">Ya la solicitud ha sido aprobada</p>
                            @else
                                <form action="{{ route('solicitud.update', $solicitud->id) }}" method="POST" class="flex flex-col md:flex-row justify-center items-center w-full space-y-2 md:space-y-0 md:space-x-2">
                                    @method('PATCH')
                                    @csrf
                                    <select name="state" id="state" class="w-full md:w-auto flex-grow p-2 border border-gray-300 dark:border-gray-700 dark:bg-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500">
                                        <option value="" disabled>Seleccione un estado</option>
                                        <option value="Pendiente" @selected($solicitud->state == 'Pendiente')>Pendiente</option>
                                        <option value="Aprobado" @selected($solicitud->state == 'Aprobado')>Aprobado</option>
                                        <option value="Rechazado" @selected($solicitud->state == 'Rechazado')>Rechazado</option>
                                    </select>
                                    <button type="submit" class="w-full md:w-auto px-4 py-2 bg-purple-500 text-white rounded-md hover:bg-purple-600 transition">
                                        Actualizar
                                    </button>
                                </form>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
</x-app-layout>
