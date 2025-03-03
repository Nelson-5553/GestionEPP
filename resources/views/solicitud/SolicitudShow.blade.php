<x-app-layout>
    <div class="max-w-7xl mx-auto py-12 px-6 lg:px-8">
        <p class="text-xl font-bold text-gray-900 dark:text-gray-200 md:-ml-5">
            Gestión Salud Áreas
        </p>

        <div class="mt-8 bg-[#F1F2F7] dark:bg-neutral-800 p-6 rounded-lg">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="text-gray-900 dark:text-gray-200">
                    <p class="font-semibold">Nombre</p>
                    <p class="text-gray-700 dark:text-gray-300">{{ $solicitud->user->name }}</p>
                </div>

                <div class="text-gray-900 dark:text-gray-200">
                    <p class="font-semibold">Sede/Area:</p>
                    <p class="text-gray-700 dark:text-gray-300"><span class="font-bold">{{$solicitud->sede->name}}</span> <br> {{$solicitud->area->name}}</p>
                </div>

                <div class="text-gray-900 dark:text-gray-200">
                    <p class="font-semibold">EPP solicitado:</p>
                    <p class="text-gray-700 dark:text-gray-300">{{$solicitud->epp->name}}</p>
                </div>

                <div class="text-gray-900 dark:text-gray-200">
                    <p class="font-semibold">Cantidad:</p>
                    <p class="text-gray-700 dark:text-gray-300">{{$solicitud->cantidad}}</p>
                </div>
                <div class="text-gray-900 dark:text-gray-200">
                    <p class="font-semibold">Estado:</p>
                    <form action="{{ route('solicitud.update', $solicitud->id) }}" method="POST">
                        @method('PATCH')
                        @csrf
                        <select name="state" id="state" class="w-full p-2 border border-gray-300 dark:border-gray-700 dark:bg-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500">
                            <option value="" disabled>Seleccione un estado</option>
                            <option value="Pendiente" @selected($solicitud->state == 'Pendiente')>Pendiente</option>
                            <option value="Aprobado" @selected($solicitud->state == 'Aprobado')>Aprobado</option>
                            <option value="Rechazado" @selected($solicitud->state == 'Rechazado')>Rechazado</option>
                        </select>
                        <button type="submit" class="mt-2 px-4 py-2 bg-purple-500 text-white rounded-md hover:bg-purple-600 transition">
                            Actualizar
                        </button>
                    </form>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>
