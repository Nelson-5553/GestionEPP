<x-app-layout>
    <div class=" max-w-7xl mx-auto py-12 px-6 sm:px-6 lg:px-8">
        <p class="text-xl font-bold text-gray-900 dark:text-gray-200 md:-ml-5 ml-0">
            Gestion Salud Areas
        </p>
        <div
        class="flex flex-col sm:flex-row justify-between items-center w-auto h-auto mt-8 p-5 bg-[#F1F2F7] dark:bg-neutral-800 rounded-md">
            <x-search-input />

            <x-register-modal name=area>
                <form action="" method="POST" enctype="multipart/form-data" class="p-6 w-96">
                    @csrf
                    <label class="block text-gray-700 dark:text-neutral-50 text-left font-medium">Nombre de Area</label>
                    <input type="text" name="name"
                        class="w-full p-2 border border-gray-300 dark:border-gray-700 dark:bg-gray-900 rounded-md mb-3 focus:outline-none focus:ring-2 focus:ring-purple-500"
                        placeholder="Nombre de Area">

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

        <div class="flex flex-row mt-8">

            <div class="overflow-hidden w-full overflow-x-auto rounded-sm border border-neutral-300 dark:border-neutral-700">
                <table class="w-full text-left text-sm text-neutral-600 dark:text-neutral-300">
                    <thead class="border-b border-neutral-300 bg-neutral-50 text-sm text-neutral-900 dark:border-neutral-700 dark:bg-neutral-900 dark:text-white">
                        <tr>
                            <th scope="col" class="p-4">CustomerID</th>
                            <th scope="col" class="p-4">Name</th>
                            <th scope="col" class="p-4">Email</th>
                            <th scope="col" class="p-4">Membership</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-neutral-300 dark:divide-neutral-700">
                            <tr>
                                <td class="p-4">2335</td>
                                <td class="p-4">Alice Brown</td>
                                <td class="p-4">alice.brown@gmail.com</td>
                                <td class="p-4"><button type="button" class="whitespace-nowrap rounded-sm bg-transparent p-0.5 font-semibold text-black outline-black hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0 dark:text-white dark:outline-white">Edit</button></td>
                            </tr>
                            <tr>
                                <td class="p-4">2338</td>
                                <td class="p-4">Bob Johnson</td>
                                <td class="p-4">johnson.bob@outlook.com</td>
                                <td class="p-4"><button type="button" class="whitespace-nowrap rounded-sm bg-transparent p-0.5 font-semibold text-black outline-black hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0 dark:text-white dark:outline-white">Edit</button></td>
                            </tr>
                            <tr>
                                <td class="p-4">2342</td>
                                <td class="p-4">Sarah Adams</td>
                                <td class="p-4">s.adams@gmail.com</td>
                                <td class="p-4"><button type="button" class="whitespace-nowrap rounded-sm bg-transparent p-0.5 font-semibold text-black outline-black hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0 dark:text-white dark:outline-white">Edit</button></td>
                            </tr>
                    </tbody>
                </table>
            </div>

        </div>

    </div>

</x-app-layout>
