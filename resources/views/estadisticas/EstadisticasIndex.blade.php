<x-app-layout>
    <div class=" max-w-7xl mx-auto py-12 px-6 sm:px-6 lg:px-8">
        <p class="text-xl font-bold text-gray-900 dark:text-gray-200 md:-ml-5 ml-0">
           Dashboard
        </p>
        {{-- nensaje de exito --}}
        <x-success-menssage />
        {{-- mensaje de error --}}
        <x-error-menssage />
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mt-12">
        <div class="rounded-lg" id="chart" data-categories='@json($categories)'
            data-solicitudes='@json($solicitudesData)' data-entregas='@json($entregasData)'>
        </div>
        <div class="bg-white dark:bg-gray-800 text-gray-900 dark:text-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold">Solicitudes Recientes</h2>
            <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">Últimas solicitudes registradas en el sistema</p>

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
                    <span class="px-3 py-1 text-sm font-semibold rounded-full
                        @if ($solicitud->state === 'Aprobado') bg-green-500 dark:bg-green-600 text-white @endif
                        @if ($solicitud->state === 'Pendiente') bg-yellow-400 dark:bg-yellow-500 text-black @endif
                        @if ($solicitud->state === 'Entregado') bg-blue-500 dark:bg-blue-600 text-white @endif
                        @if ($solicitud->state === 'Rechazado') bg-red-500 dark:bg-red-600 text-white @endif">
                        {{ $solicitud->state }}
                    </span>
                </div>
            @endforeach
        </div>



    </div>
   <div class="flex flex-col lg:flex-row justify-between items-center mt-5">
    <x-search-tablepdf/>
        <a href="{{route('download.report')}}" class="flex items-center w-44 bg-red-500 text-white text-md p-2 rounded-md gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
              </svg>
            Descargar pdf
        </a>
    </div>

        @livewire('table-pdf')
    </div>
</x-app-layout>
