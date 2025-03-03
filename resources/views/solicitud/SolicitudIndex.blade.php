<x-app-layout>
    <div class=" max-w-7xl mx-auto py-12 px-6 sm:px-6 lg:px-8">
        <p class="text-xl font-bold text-gray-900 dark:text-gray-200 md:-ml-5 ml-0">
            Gestion Salud Solicitudes
        </p>
        <div
        class="flex flex-col sm:flex-row justify-between items-center w-auto h-auto mt-8 p-5 bg-[#F1F2F7] dark:bg-neutral-800 rounded-md">
            {{-- <x-search-input /> --}}

            <x-button-create name="solicitud" route="{{route('solicitud.create')}}"/>

        </div>
        {{-- nensaje de exito --}}
        <x-success-menssage />
        {{-- mensaje de error --}}
        <x-error-menssage />

        @livewire('search-solicitud')

        {{-- <div class="grid grid-cols-1 gap-4 mt-8 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4">


            <div class="flex flex-col justify-between aspect-video rounded-lg bg-blue-500 text-blue-800 dark:bg-blue-700 dark:text-blue-200 font-bold text-2xl p-6">
                Total
                <p>12</p>
            </div>
            <div class="flex flex-col justify-between aspect-video rounded-lg bg-green-500 text-green-800 dark:bg-green-700 dark:text-green-200 font-bold text-2xl p-6">
                Aprobadas
                <p>12</p>
            </div>
            <div class="flex flex-col justify-between aspect-video rounded-lg bg-red-500 text-red-800 dark:bg-red-700 dark:text-red-200 font-bold text-2xl p-6">
                Rechazadas
                <p>0</p>
            </div>
            <div class="flex flex-col justify-between aspect-video rounded-lg bg-yellow-500 text-yellow-800 dark:bg-yellow-700 dark:text-yellow-200 font-bold text-2xl p-6">
                Pendientes
                <p>34</p>
            </div>

        </div>
            <div class="overflow-hidden w-full overflow-x-auto rounded-lg border border-neutral-300 dark:border-neutral-700 mt-12">
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
                            <td class="p-4"><span class="inline-flex overflow-hidden rounded-sm border border-yellow-500 px-1 py-0.5 text-xs font-medium text-yellow-500 bg-yellow-500/10">{{$solicitud->state}}</span></td>
                            <td class="p-4"><button type="button" class="whitespace-nowrap rounded-sm bg-transparent p-0.5 font-semibold text-black outline-black hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0 dark:text-white dark:outline-white">Edit</button></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table> --}}

            {{-- <ul>
                @foreach ($solicitudes as $solicitud)

                <li>
                    {{$solicitud->epp->name}}
                </li>
                @endforeach
            </ul> --}}


    </div>

</x-app-layout>
