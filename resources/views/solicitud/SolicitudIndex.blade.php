<x-app-layout>
    <div class=" max-w-7xl mx-auto py-12 px-6 sm:px-6 lg:px-8">
        <p class="text-xl font-bold text-gray-900 dark:text-gray-200 md:-ml-5 ml-0">
            Gestion Salud Sedes
        </p>
        <div
        class="flex flex-col sm:flex-row justify-between items-center w-auto h-auto mt-8 p-5 bg-[#F1F2F7] dark:bg-neutral-800 rounded-md">
            {{-- <x-search-input /> --}}

            <x-register-modal name="solicitud">
                <form action="" method="POST" enctype="multipart/form-data" class="p-6 w-96">
                    @csrf
                    <label class="block text-gray-700 dark:text-neutral-50 text-left font-medium">Nombre de Sede</label>
                    <input type="text" name="name"
                        class="w-full p-2 border border-gray-300 dark:border-gray-700 dark:bg-gray-900 rounded-md mb-3 focus:outline-none focus:ring-2 focus:ring-purple-500"
                        placeholder="Nombre de sede">

                    <label class="block text-gray-700 text-left dark:text-neutral-50 font-medium">Dirección</label>
                    <input type="text" name="direction"
                        class="w-full p-2 border border-gray-300 dark:border-gray-700 dark:bg-gray-900 rounded-md mb-3 focus:outline-none focus:ring-2 focus:ring-purple-500"
                        placeholder="Dirección">

                    <label class="block text-gray-700 text-left dark:text-neutral-50 font-medium">Descripción</label>
                    <textarea name="description"
                        class="w-full h-32 p-2 border border-gray-300 dark:border-gray-700 dark:bg-gray-900 rounded-md mb-3 focus:outline-none focus:ring-2 focus:ring-purple-500"
                        placeholder="Algo que añadir..."></textarea>

                    <div class="mb-3">
                        <!-- Input oculto -->
                        <input type="file" id="fileUpload" name="image" accept="image/*" class="hidden">

                        <!-- Botón para activar el input -->
                        <label for="fileUpload"
                            class="cursor-pointer bg-[#5A6ACF] text-white px-4 py-2 rounded-md hover:bg-[#5A6ACF]0">
                            ⬆️ Subir foto
                        </label>
                    </div>
                    <div class="flex items-center justify-center border-neutral-300 p-4 dark:border-neutral-700">
                        <button type="submit"
                            class="w-full whitespace-nowrap rounded-md border border-[#5A6ACF] bg-[#5A6ACF] px-4 py-2 text-center text-sm font-semibold tracking-wide text-white transition hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#5A6ACF] active:opacity-100 active:outline-offset-0">Registrar</button>
                    </div>
                </form>
            </x-register-modal>
        </div>
        {{-- nensaje de exito --}}
        <x-success-menssage />
        {{-- mensaje de error --}}
        <x-error-menssage />

        <div class="grid grid-cols-1 gap-4 mt-8 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4">


            <div class="flex flex-col justify-between aspect-video rounded-lg bg-blue-500 text-blue-800 dark:bg-blue-700 dark:text-blue-200 font-bold text-2xl p-6">
                Total
                <p>12</p>
            </div>
            <div class="flex flex-col justify-between aspect-video rounded-lg bg-green-500 text-green-800 dark:bg-green-700 dark:text-green-200 font-bold text-2xl p-6">
                Aprobadas
                <p>12</p>
            </div>
            <div class="flex flex-col justify-between aspect-video rounded-lg bg-red-500 text-red-800 dark:bg-red-700 dark:text-red-200 font-bold text-2xl p-6">
                Rechazadas
                <p>0</p>
            </div>
            <div class="flex flex-col justify-between aspect-video rounded-lg bg-yellow-500 text-yellow-800 dark:bg-yellow-700 dark:text-yellow-200 font-bold text-2xl p-6">
                Pendientes
                <p>34</p>
            </div>


    </div>

</x-app-layout>
