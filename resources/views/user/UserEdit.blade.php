<x-app-layout>
    <div class="max-w-7xl mx-auto py-12 px-6 lg:px-8">
        <p class="text-2xl font-bold text-gray-900 dark:text-gray-200 md:-ml-5 border-b-2 border-gray-300 dark:border-gray-700 pb-2">
            Gestión Salud Usuarios
        </p>

        <div class="mt-8 bg-white dark:bg-neutral-800 shadow-lg rounded-xl p-6">
            <!-- Ajuste para una sola columna en móviles y dos columnas en pantallas grandes -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                <!-- Nombre del Usuario -->
                <div class="w-full">
                    <div class="flex flex-row items-center space-x-3 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-[#5A67BA]">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                    <p class="text-lg font-semibold text-gray-900 dark:text-gray-200">Nombre del Usuario:</p>
                </div>
                    <div class="flex flex-row items-center space-x-3 bg-gray-100 dark:bg-gray-700 rounded-md p-2">
                        <p><span class="font-bold text-md">{{$user->name}}</span><br> {{$user->card}}</p>
                    </div>
                </div>

                <!-- Correo Electrónico -->
                <div class="w-full">
                    <div class="flex flex-row items-center space-x-3 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-[#5A67BA]">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 1 0-2.636 6.364M16.5 12V8.25" />
                    </svg>
                    <p class="text-lg font-semibold text-gray-900 dark:text-gray-200">Correo Electrónico:</p>
                </div>
                    <div class="flex flex-row items-center space-x-3 bg-gray-100 dark:bg-gray-700 rounded-md p-2">
                        <p>{{$user->email}}</p>
                    </div>
                </div>

                <!-- Rol del Usuario -->
                <div class="col-span-1 sm:col-span-2">
                    <p class="text-lg font-semibold text-gray-900 dark:text-gray-200">Rol:</p>
                    <form action="{{route('user.update', $user->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <select name="role" class="text-gray-700 dark:text-gray-400 bg-gray-100 dark:bg-gray-700 rounded-md p-2 w-full">
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}" @if($user->roles->contains('id', $role->id)) selected @endif>
                                    {{ $role->name }}
                                </option>
                            @endforeach
                        </select>

                        <!-- Botón de actualizar -->
                        <div class="flex justify-start mt-6">
                            <button type="submit" class="whitespace-nowrap rounded-lg bg-neutral-900 border border-neutral-900 px-4 py-2 text-base font-medium tracking-wide text-white transition hover:opacity-75 text-center focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-neutral-900 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-neutral-50 dark:border-neutral-50 dark:text-neutral-900 dark:focus-visible:outline-neutral-50">
                                Actualizar Rol
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
