<x-app-layout>
    <div class="max-w-7xl mx-auto py-12 px-6 lg:px-8">
        <p class="text-xl font-bold text-gray-900 dark:text-gray-200 md:-ml-5">
            Gestión Salud Sede
        </p>

        <div class="mt-8 bg-[#F1F2F7] dark:bg-neutral-800 p-6 rounded-lg">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
               <div class="text-gray-900 dark:text-gray-200">
                    <p class="font-semibold">Nombre de la Sede
                    <p class="text-gray-700 dark:text-gray-300">{{$sede->name}}</p>
                </div>
                <div class="text-gray-900 dark:text-gray-200">
                    <p class="font-semibold">Direccion:</p>
                    <p class="text-gray-700 dark:text-gray-300">{{$sede->direction}}</p>
                </div>
                <div class="col-span-2 text-gray-900 dark:text-gray-200">
                    <p class="font-semibold">Descripción:</p>
                    <p class="text-gray-700 dark:text-gray-300">{{$sede->description}}</p>
                </div>

                <div class="col-span-2 text-gray-900 dark:text-gray-200">
                    <p class="font-semibold text-center mb-12">Áreas relacionadas a esta sede:</p>

                    <ul class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 list-none justify-center">
                        @foreach ($sede->areas as $areas)
                            <li class="flex justify-center">
                                <span class="inline-flex overflow-hidden rounded-md border border-purple-500 bg-white text-xs font-medium text-purple-500 dark:border-purple-500 dark:bg-neutral-950 dark:text-purple-500 transition-colors hover:bg-purple-500 hover:text-white px-4 py-2">
                                    {{$areas->name}}
                                </span>
                            </li>
                        @endforeach
                    </ul>


                </div>
            </div>
            <div class="flex justify-end mt-6 gap-2">
                <a href=""
                class="text-blue-500 hover:text-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 shrink-0" viewBox="0 0 32 32"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m30 7l-5-5L5 22l-2 7l7-2Zm-9-1l5 5ZM5 22l5 5Z"/></svg>
             </a>
                <form action="{{route('sede.destroy', $sede )}}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <x-delete-modal name="area">
                       <h3 id="dangerModalTitle" class="mb-2 font-semibold tracking-wide text-neutral-900 dark:text-white">Eliminar Area</h3>
                       <p>Estas a punto de eliminar esta area  ¿estas seguro que la quieres eliminar?</p>
                    </x-delete-modal>
                   </form>
            </div>
        </div>
    </div>
</x-app-layout>
