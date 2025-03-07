<x-app-layout>
    <div class="max-w-7xl mx-auto py-12 px-6 lg:px-8">
        <p class="text-xl font-bold text-gray-900 dark:text-gray-200 md:-ml-5">
            Detalles de la Entrega
        </p>

        <div class="mt-8 bg-[#F1F2F7] dark:bg-neutral-800 p-6 rounded-lg">

            <h1 class="text-xl font-bold text-gray-900 dark:text-gray-200">Informacion</h1>
            <br>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="text-gray-900 dark:text-gray-200">
                    <p class="font-semibold">Usuario:</p>
                    <p class="text-gray-700 dark:text-gray-300">{{$entrega->solicitud->user->name}} <br> {{$entrega->solicitud->user->card}} </p>
                </div>
                <div class="text-gray-900 dark:text-gray-200">
                    <p class="font-semibold">Sede/Area:</p>
                    <p class="text-gray-700 dark:text-gray-300">{{ $entrega->solicitud->sede->name ?? 'No especificado' }} <br> {{ $entrega->solicitud->area->name ?? 'No especificado' }} </p>
                </div>
                <div class="text-gray-900 dark:text-gray-200">
                    <p class="font-semibold">Epp:</p>
                    <p class="text-gray-700 dark:text-gray-300">{{ $entrega->solicitud->epp->name ?? 'No hay descripción disponible' }}</p>
                </div>
                <div class="text-gray-900 dark:text-gray-200">
                    <p class="font-semibold">Cantidad:</p>
                    <p class="text-gray-700 dark:text-gray-300">{{ $entrega->solicitud->cantidad ?? 'No hay descripción disponible' }}</p>
                </div>
                <div class="text-gray-900 dark:text-gray-200">
                    <p class="font-semibold">Estado:</p>
                    <p class="text-gray-700 dark:text-gray-300">{{ ucfirst($entrega->state) }}</p>
                </div>
            </div>
            <br>
            <h1 class="text-xl font-bold text-gray-900 dark:text-gray-200">Confirmar entrega</h1>
            <br>
            <x-error-menssage />
        <form action="{{route('entrega.update', $entrega)}}" method="POST">
            @csrf
            @method('PATCH')
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-3">
                <div>
                    <label class="block text-gray-900 dark:text-gray-200 font-semibold">Inicio de turno</label>
                    <input name="start_time_labor" type="time" class="w-full mt-1 p-2 border rounded-lg dark:bg-neutral-700 dark:text-gray-200"/>

                </div>
                <div>
                    <label class="block text-gray-900 dark:text-gray-200 font-semibold">Fin de turno</label>
                    <input name="end_time_labor" type="time" class="w-full mt-1 p-2 border rounded-lg dark:bg-neutral-700 dark:text-gray-200"/>
                </div>
                <div class="col-span-2">
                    <label class="block text-gray-900 dark:text-gray-200 font-semibold">Observación</label>
                    <textarea name="observations" class="w-full mt-1 p-2 border rounded-lg dark:bg-neutral-700 dark:text-gray-200" rows="4" placeholder="Colocar alguna observacion del Epp (Opcional)"></textarea>
                </div>
                <div>
                    <button type="submit" class="w-full mt-1 p-2 border rounded-lg bg-blue-600 text-white hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600">
                        Entregar EPP
                    </button>
                </div>
            </form>
            </div>


            <div class="flex justify-end mt-6 gap-4">
                {{-- Botón de edición --}}
                {{-- <a href="{{ route('entrega.edit', $entrega) }}"
                   class="text-blue-500 hover:text-blue-600 flex items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 32 32">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m30 7l-5-5L5 22l-2 7l7-2Zm-9-1l5 5ZM5 22l5 5Z"/>
                    </svg>
                    Editar
                </a> --}}

                {{-- Botón de eliminación con modal de confirmación --}}
                {{-- <form action="{{ route('entrega.destroy', $entrega) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <x-delete-modal name="entrega">
                        <h3 id="dangerModalTitle" class="mb-2 font-semibold tracking-wide text-neutral-900 dark:text-white">
                            Eliminar Entrega
                        </h3>
                        <p>¿Estás seguro de que deseas eliminar esta entrega? Esta acción no se puede deshacer.</p>
                    </x-delete-modal>
                </form> --}}
            </div>
        </div>
    </div>
</x-app-layout>
