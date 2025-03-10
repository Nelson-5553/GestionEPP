<x-app-layout>
    <div class=" max-w-7xl mx-auto py-12 px-6 sm:px-6 lg:px-8">
        <p class="text-xl font-bold text-gray-900 dark:text-gray-200 md:-ml-5 ml-0">
            Gestion Salud Areas
        </p>
        <div
            class="flex flex-col sm:flex-row justify-between items-center w-auto h-auto mt-8 p-5 bg-[#F1F2F7] dark:bg-neutral-800 rounded-md">
            {{-- <x-search-areas /> --}}


        </div>
        {{-- nensaje de exito --}}
        <x-success-menssage />
        {{-- mensaje de error --}}
        <x-error-menssage />



            @livewire('search-user')
        </div>

    </div>

</x-app-layout>
