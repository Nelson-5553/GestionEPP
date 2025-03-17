<x-app-layout>
    <div class="max-w-7xl mx-auto py-12 px-6 lg:px-8">
        <p class="text-xl font-bold text-gray-900 dark:text-gray-200 md:-ml-5">
            Gestión Salud Roles
        </p>

         {{-- mensaje de error --}}
         <x-error-menssage />

        <div class="mt-8 bg-[#F1F2F7] dark:bg-neutral-800 p-6 rounded-lg">



                <div class="mt-4">
                   <h1 class="font-bold text-3xl text-neutral-800 dark:text-slate-100">{{$role->name}}</h1>
                </div>
                <p class="text-lg font-bold text-gray-900 dark:text-gray-200 mt-4">
                   Lista de permisos
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2  md:grid-cols-3 lg:grid-cols-4 gap-4 mt-6">
                    @foreach ($role->permissions as $permission)
                        <div class="flex items-center gap-2 px-4 py-3 border border-gray-700 rounded-lg text-gray-700 dark:text-gray-300 bg-gray-200/50 dark:bg-gray-800/50">
                            {{ $permission->name }}
                        </div>
                    @endforeach
                </div>


                </div>


        </div>
    </div>
</x-app-layout>
