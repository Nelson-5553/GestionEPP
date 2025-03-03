<x-app-layout>
    <div class="max-w-7xl mx-auto py-12 px-6 lg:px-8">
        <p class="text-xl font-bold text-gray-900 dark:text-gray-200 md:-ml-5">
            Gestión Salud Solicitud
        </p>

        <div class="mt-8 bg-[#F1F2F7] dark:bg-neutral-800 p-6 rounded-lg">
            <form action="" method="POST">
                @csrf

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-900 dark:text-gray-200 font-semibold">Nombre</label>
                        <input type="text" name="user_id" class="w-full mt-1 p-2 border rounded-lg dark:bg-neutral-700 dark:text-gray-200" value="">
                        <select name="user_id" class="w-full mt-1 p-2 border rounded-lg dark:bg-neutral-700 dark:text-gray-200">
                            {{-- @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach --}}
                        </select>
                    </div>

                    <div>
                        <label class="block text-gray-900 dark:text-gray-200 font-semibold">EPP</label>
                        <select name="epp_id" class="w-full mt-1 p-2 border rounded-lg dark:bg-neutral-700 dark:text-gray-200">
                            {{-- @foreach($epps as $epp)
                                <option value="{{ $epp->id }}">{{ $epp->nombre }}</option>
                            @endforeach --}}
                        </select>
                    </div>

                    <div>
                        <label class="block text-gray-900 dark:text-gray-200 font-semibold">Sede</label>
                        <select name="sede_id" class="w-full mt-1 p-2 border rounded-lg dark:bg-neutral-700 dark:text-gray-200">
                            {{-- @foreach($sedes as $sede)
                                <option value="{{ $sede->id }}">{{ $sede->nombre }}</option>
                            @endforeach --}}
                        </select>
                    </div>

                    <div>
                        <label class="block text-gray-900 dark:text-gray-200 font-semibold">Área</label>
                        <select name="area_id" class="w-full mt-1 p-2 border rounded-lg dark:bg-neutral-700 dark:text-gray-200">
                            {{-- @foreach($areas as $area)
                                <option value="{{ $area->id }}">{{ $area->nombre }}</option>
                            @endforeach --}}
                        </select>
                    </div>

                    <div>
                        <label class="block text-gray-900 dark:text-gray-200 font-semibold">Cantidad</label>
                        <input type="number" name="cantidad" class="w-full mt-1 p-2 border rounded-lg dark:bg-neutral-700 dark:text-gray-200" required>
                    </div>

                    {{-- <div>
                        <label class="block text-gray-900 dark:text-gray-200 font-semibold">Estado</label>
                        <select name="state" class="w-full mt-1 p-2 border rounded-lg dark:bg-neutral-700 dark:text-gray-200">
                            <option value="pendiente">Pendiente</option>
                            <option value="aprobado">Aprobado</option>
                            <option value="rechazado">Rechazado</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-gray-900 dark:text-gray-200 font-semibold">Aprobado por</label>
                        <select name="aprobado_por_id" class="w-full mt-1 p-2 border rounded-lg dark:bg-neutral-700 dark:text-gray-200">
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div> --}}
                </div>

                <div class="mt-6">
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                        Guardar Solicitud
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
