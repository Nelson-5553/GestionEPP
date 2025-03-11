<x-app-layout>
    <div class="max-w-7xl mx-auto py-12 px-6 lg:px-8">
        <p class="text-2xl font-bold text-gray-900 dark:text-gray-200 md:-ml-5 border-b-2 border-gray-300 dark:border-gray-700 pb-2">
            Gestión Salud Usuarios
        </p>

        <div class="mt-8 bg-white dark:bg-neutral-800 shadow-lg rounded-xl p-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <div class="flex flex-row items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-[#5A67BA]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                          </svg>


                    <p class="text-lg font-semibold text-gray-900 dark:text-gray-200">Nombre del Usuario:</p>
                </div>
                    <p class="text-gray-700 dark:text-gray-400 bg-gray-100 dark:bg-gray-700 rounded-md p-2">
                        <span class="font-bold text-md">{{$user->name}}</span> <br> {{$user->card}}
                    </p>
                </div>
                <div>
                    <div class="flex flex-row items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-[#5A67BA]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 1 0-2.636 6.364M16.5 12V8.25" />
                          </svg>

                    <p class="text-lg font-semibold text-gray-900 dark:text-gray-200">Correo Electronica:</p>
                    </div>
                    <p class="text-gray-700 dark:text-gray-400 bg-gray-100 dark:bg-gray-700 rounded-md p-2">
                        {{$user->email}}
                    </p>
                </div>
                <div class="col-span-2">
                    <div class="flex flex-row items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-[#5A67BA]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                          </svg>

                        <p class="text-lg font-semibold text-gray-900 dark:text-gray-200">Rol:</p>
                    </div>
                    <p class="text-gray-700 dark:text-gray-400 bg-gray-100 dark:bg-gray-700 rounded-md p-2">
                        @foreach ($user->roles as $role)
                        <td class="p-4">{{$role->name}}</td>
                    @endforeach
                    </p>
                </div>
            </div>
            <div class="flex justify-end mt-6 gap-3">

                
                {{-- <a href="" class="text-blue-500 hover:text-blue-600 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 shrink-0" viewBox="0 0 32 32">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m30 7l-5-5L5 22l-2 7l7-2Zm-9-1l5 5ZM5 22l5 5Z"/>
                    </svg>
                </a>
                <form action="" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <x-delete-modal name="area">
                        <h3 class="mb-2 text-lg font-semibold tracking-wide text-neutral-900 dark:text-white">
                            Eliminar Área
                        </h3>
                        <p class="text-gray-700 dark:text-gray-300">
                            Estás a punto de eliminar esta área. ¿Estás seguro de que deseas proceder?
                        </p>
                    </x-delete-modal>
                </form> --}}
            </div>
        </div>
    </div>
</x-app-layout>
