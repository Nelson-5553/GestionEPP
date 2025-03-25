<x-app-layout>
    <div class=" max-w-7xl mx-auto py-12 px-6 sm:px-6 lg:px-8">
        <p class="text-xl font-bold text-gray-900 dark:text-gray-200 md:-ml-5 ml-0">
            Gestion Salud Roles y Permisos
        </p>
        <div
            class="flex flex-col sm:flex-row justify-between items-center w-auto h-auto mt-8 p-5 bg-[#F1F2F7] dark:bg-neutral-800 rounded-md">
            <x-button-create name="rol" route="{{route('role.create')}}" />



        </div>
        {{-- nensaje de exito --}}
        <x-success-menssage />
        {{-- mensaje de error --}}
        <x-error-menssage />


        <div class="mt-6">
            <div class="flex flex-row mt-6  rounded-lg">
                <div class="overflow-hidden w-full overflow-x-auto rounded-xl border border-neutral-300 dark:border-neutral-700">
                    <table class="w-full text-left text-sm text-neutral-600 dark:text-neutral-300">
                        <thead class="border-b border-[#5A6ACF] bg-[#5A6ACF] text-sm text-white">
                            <tr>
                                <th scope="col" class="p-4">ID</th>
                                <th scope="col" class="p-4">Nombre</th>
                                <th scope="col" class="p-4">Revisar</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y bg-[#ffffff] dark:bg-neutral-800  divide-neutral-300 dark:divide-neutral-700">
                            @foreach ($roles as $role)
                                <tr>

                                    <td class="p-4">{{$role->id}}</td>
                                    <td class="p-4">{{$role->name}}</td>

                                    <td class="p-4"><a  href="{{route('role.show', $role)}}" class="whitespace-nowrap rounded-sm bg-transparent p-0.5 font-semibold text-black outline-black hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0 dark:text-white dark:outline-white">Revisar</a></td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>


        </div>

    </div>

</x-app-layout>
