<x-app-layout>
    <div class="max-w-7xl mx-auto py-12 px-6 lg:px-8">
        <p class="text-xl font-bold text-gray-900 dark:text-gray-200 md:-ml-5">
            Gestión Salud Solicitud
        </p>

        <div class="mt-8 bg-[#F1F2F7] dark:bg-neutral-800 p-6 rounded-lg">
            <form action="{{route('solicitud.store')}}" method="POST">
                @method('POST')
                @csrf

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-900 dark:text-gray-200 font-semibold">Nombre</label>
                        <!-- Campo visible con el nombre del usuario -->
                        <input type="text"
                            class="w-full mt-1 p-2 border rounded-lg bg-gray-200 dark:bg-neutral-700 dark:text-gray-400 cursor-not-allowed opacity-70"
                            value="{{ auth()->user()->name }}" disabled>

                        <!-- Campo oculto con el ID del usuario -->
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

                    </div>

                    <div>
                        <label class="block text-gray-900 dark:text-gray-200 font-semibold">EPP</label>
                        <select name="epp_id"
                            class="w-full mt-1 p-2 border rounded-lg dark:bg-neutral-700 dark:text-gray-200">
                            <option value="" disabled selected hidden>Selecciona una Epp</option>
                            @foreach ($epps as $epp)
                                <option value="{{ $epp->id }}">{{ $epp->name }}</option>
                            @endforeach
                        </select>
                    </div>


                </div>
                @livewire('filtrar-areas')

                <div class="mt-4">
                    <label class="block text-gray-900 dark:text-gray-200 font-semibold">Cantidad</label>
                    <input type="number" name="cantidad"
                    class="w-full mt-1 p-2 border rounded-lg dark:bg-neutral-700 dark:text-gray-200" required>
                </div>

                </div>

                <div class="mt-6">
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                        Guardar Solicitud
                    </button>
            </form>
        </div>
    </div>
</x-app-layout>
