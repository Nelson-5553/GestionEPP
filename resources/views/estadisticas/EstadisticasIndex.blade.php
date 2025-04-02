<x-app-layout>
    <div class=" max-w-7xl mx-auto py-12 px-6 sm:px-6 lg:px-8">
        <p class="text-xl font-bold text-gray-900 dark:text-gray-200 md:-ml-5 ml-0">
            Dashboard
        </p>
        {{-- nensaje de exito --}}
        <x-success-menssage />
        {{-- mensaje de error --}}
        <x-error-menssage />

        {{-- <div class="flex flex-col sm:flex-row justify-between items-center mt-6 gap-3">
            <div>
                <label for="sede" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleciona una Sede</label>
                <select id="sede"
                class="min-w-[200px] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Todos</option>
                @foreach ($sedes as $sede)
                <option value="{{$sede->image}}">{{$sede->image}}</option>
                @endforeach
                </select>
            </div>

            <div class="flex flex-col sm:flex-row gap-3">
                <div>
                    <label for="date-start" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha de inicio</label>
                    <input type="date" id="date-start"
                     class="min-w-[200px] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                </div>
                <div>
                    <label for="date-end" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha Fin</label>
                    <input type="date" id="date-end"
                    class="min-w-[200px] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                </div>
            </div>
         </div> --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mt-6">
                <div class="rounded-lg sm:col-span-1 md:col-span-1 lg:col-span-2 shadow-lg p-3 bg-white dark:bg-[#1e1e1e]"
                    id="chart" data-categories='@json($categories)'
                    data-solicitudes='@json($solicitudesData)' data-entregas='@json($entregasData)'>
                </div>


                @livewire('epp-count')
                <livewire:solicitud-recent altura="h-[21.5rem]" scroll="max-h-56" />

            </div>
            <div class="flex flex-col lg:flex-row justify-between items-center mt-5">
                <x-search-tablepdf />
                <div class="flex flex-col md:flex-row gap-5">
                    <a href="{{ route('download.excel') }}"
                        class="flex items-center w-auto bg-emerald-700 text-white text-md p-2 rounded-md gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6" viewBox="0 0 48 48">
                            <defs>
                                <mask id="ipTExcel0">
                                    <g fill="none" stroke="#fff" stroke-linecap="round" stroke-width="4">
                                        <path stroke-linejoin="round"
                                            d="M8 15V6a2 2 0 0 1 2-2h28a2 2 0 0 1 2 2v36a2 2 0 0 1-2 2H10a2 2 0 0 1-2-2v-9" />
                                        <path d="M31 15h3m-6 8h6m-6 8h6" />
                                        <path fill="#555555" stroke-linejoin="round" d="M4 15h18v18H4z" />
                                        <path stroke-linejoin="round" d="m10 21l6 6m0-6l-6 6" />
                                    </g>
                                </mask>
                            </defs>
                            <path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipTExcel0)" />
                        </svg>
                        Descargar Excel
                    </a>
                    <a href="{{ route('download.pdf') }}"
                        class="flex items-center w-auto bg-red-700 text-white text-md p-2 rounded-md gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M7.503 13.002a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 1 0v-.5H8.5a1.5 1.5 0 0 0 0-3zm.997 2h-.497v-1H8.5a.5.5 0 1 1 0 1m6.498-1.5a.5.5 0 0 1 .5-.5h1.505a.5.5 0 1 1 0 1h-1.006l-.001 1.002h1.007a.5.5 0 0 1 0 1h-1.007l.002.497a.5.5 0 0 1-1 .002l-.003-.998v-.002zm-3.498-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h.498a2 2 0 0 0 0-4zm.5 3v-2a1 1 0 0 1 0 2M20 20v-1.164c.591-.281 1-.884 1-1.582V12.75c0-.698-.409-1.3-1-1.582v-1.34a2 2 0 0 0-.586-1.414l-5.829-5.828l-.049-.04l-.036-.03a2 2 0 0 0-.219-.18a1 1 0 0 0-.08-.044l-.048-.024l-.05-.029c-.054-.031-.109-.063-.166-.087a2 2 0 0 0-.624-.138q-.03-.002-.059-.007L12.172 2H6a2 2 0 0 0-2 2v7.168c-.591.281-1 .884-1 1.582v4.504c0 .698.409 1.3 1 1.582V20a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2m-2 .5H6a.5.5 0 0 1-.5-.5v-.996h13V20a.5.5 0 0 1-.5.5m.5-10.5v1h-13V4a.5.5 0 0 1 .5-.5h6V8a2 2 0 0 0 2 2zm-1.122-1.5H14a.5.5 0 0 1-.5-.5V4.621zm-12.628 4h14.5a.25.25 0 0 1 .25.25v4.504a.25.25 0 0 1-.25.25H4.75a.25.25 0 0 1-.25-.25V12.75a.25.25 0 0 1 .25-.25" />
                        </svg>
                        Descargar pdf
                    </a>
                </div>
            </div>

            @livewire('table-pdf')
        </div>
</x-app-layout>
