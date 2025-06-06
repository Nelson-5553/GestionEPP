
    <div class="bg-white dark:bg-gray-800 text-gray-900 dark:text-white {{$altura}} p-6 rounded-lg shadow-lg col-span-1">
        <h2 class="text-2xl font-bold">Solicitudes Recientes</h2>
        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">Últimas solicitudes registradas en el sistema</p>

    <div class="overflow-y-auto {{$scroll}}">

        @if ($recentsolicitudes->isEmpty())
        <div class="flex flex-col justify-center items-center mb-4 space-y-2">
        <p class="text-xl text-gray-800 dark:text-gray-100 mb-4">No hay solicitudes</p>
            <x-button-create route="{{route('solicitud.create')}}" name="Solicitud" />
        </div>
        @else
        @foreach ($recentsolicitudes as $solicitud)
        <div class="flex items-center justify-between p-3 bg-gray-100 dark:bg-gray-700 rounded-lg mb-2">
            <div class="flex items-center">
                    <div>
                        <p class="font-semibold">{{ $solicitud->user?->name ?? 'Usuario desconocido' }}</p>
                        <p class="text-gray-500 dark:text-gray-400 text-sm">
                            {{ $solicitud->area?->name ?? 'Área desconocida' }} -
                            {{ $solicitud->sede?->name ?? 'Sede desconocida' }}
                        </p>
                    </div>
                </div>
                @php
                $colores = [
                    'Pendiente' => 'border-yellow-500 text-black bg-yellow-500',
                    'Aprobado' => 'border-green-500 text-white bg-green-500',
                    'Rechazado' => 'border-red-500 text-white bg-red-500',
                ];
                $clase = $colores[$solicitud->state] ?? 'border-gray-500 text-gray-500 bg-gray-500';
                @endphp
                <span class="px-3 py-1 text-sm font-semibold rounded-full
                {{$clase}}">
                {{ $solicitud->state }}
            </span>
        </div>
        @endforeach
        @endif
    </div>
    </div>

