<x-app-layout>
    <div class="max-w-7xl mx-auto py-12 px-6 lg:px-8">
        <p class="text-xl font-bold text-gray-900 dark:text-gray-200 md:-ml-5">
            Gestión Salud Solicitud
        </p>

        <div class="mt-8 bg-[#F1F2F7] dark:bg-neutral-800 p-6 rounded-lg">
            <form action="" method="POST">
                @method('POST')
                @csrf


                <div class="mt-4">
                    <label class="block text-gray-900 dark:text-gray-200 font-semibold">Nombre de Rol</label>
                    <input type="number" name="role"
                    class="w-full mt-1 p-2 border rounded-lg dark:bg-neutral-700 dark:text-gray-200" required>
                </div>

                <div class="grid grid-cols-3 md:grid-cols-4 gap-4 mt-6">
                    @foreach ($permissions as $permission)
                        <div class="flex items-center gap-2 px-4 py-3 border border-gray-700 rounded-lg text-gray-700 dark:text-gray-300 bg-gray-200/50 dark:bg-gray-800/50">
                            <input type="checkbox" name="permissions[]" value="{{ $permission->id }}" class="w-5 h-5 text-[#5A67BA]">
                            {{ $permission->name }}
                        </div>
                    @endforeach
                </div>


                </div>

                <div class="mt-6">
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                        Guardar Rol
                    </button>
            </form>
        </div>
    </div>
</x-app-layout>
