<x-app-layout>
    <div class=" max-w-7xl mx-auto py-12 px-6 sm:px-6 lg:px-8">
        <p class="text-xl font-bold text-gray-900 dark:text-gray-200 md:-ml-5 ml-0">
           Dashboard
        </p>
        {{-- nensaje de exito --}}
        <x-success-menssage />
        {{-- mensaje de error --}}
        <x-error-menssage />
        <div class="mt-5" id="chart" data-categories='@json($categories)'
            data-solicitudes='@json($solicitudesData)' data-entregas='@json($entregasData)'>
        </div>

        <a href="{{route('download.report')}}">Descargar pdf</a>

    </div>
</x-app-layout>
