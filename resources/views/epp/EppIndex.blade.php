<x-app-layout>
    <div class=" max-w-7xl mx-auto py-12 px-6 sm:px-6 lg:px-8">
        <p class="text-xl font-bold text-gray-900 dark:text-gray-200 md:-ml-5 ml-0">
            Gestion Salud Epp
        </p>
        <div
        class="flex flex-col sm:flex-row justify-between items-center w-auto h-auto mt-8 p-5 bg-[#F1F2F7] dark:bg-neutral-800 rounded-md">
            <x-search-epp />

            <x-register-modal name=Epp>
                <form action="{{ route('epp.store') }}" method="POST" enctype="multipart/form-data" class="flex flex-col justify-start p-6 w-full">
                    @csrf
                    <label class="block text-gray-700 dark:text-neutral-50 text-left font-medium">Nombre de Epp</label>
                    <input type="text" name="name" {{ old('name') }}
                        class="w-full p-2 border border-gray-300 dark:border-gray-700 dark:bg-gray-900 rounded-md mb-3 focus:outline-none focus:ring-2 focus:ring-purple-500"
                        placeholder="Nombre de epp">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- Cantidad -->
                            <div class="flex flex-col justify-center gap-4 ">
                                <div x-data="{
                                    currentVal: 1,
                                    minVal: 0,
                                    maxVal: Infinity,
                                    decimalPoints: 0,
                                    incrementAmount: 1
                                }"
                                class="flex flex-col gap-1">

                                <label for="counterInput" class="pl-1 text-sm text-neutral-600 dark:text-neutral-300">
                                    Cantidad
                                </label>

                                <div x-on:dblclick.prevent class="flex items-center">
                                    <!-- Botón de restar -->
                                    <button type="button"
                                        x-on:click="currentVal = Math.max(minVal, currentVal - incrementAmount)"
                                        class="flex h-10 items-center justify-center rounded-l-sm border border-neutral-300 bg-neutral-50 px-4 py-2 text-neutral-600 hover:opacity-75 focus-visible:z-10 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:opacity-100 active:outline-offset-0 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300 dark:focus-visible:outline-white"
                                        aria-label="subtract">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" stroke="currentColor" fill="none" stroke-width="2" class="size-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15"/>
                                        </svg>
                                    </button>

                                    <!-- Input editable -->
                                    <input x-model="currentVal"
                                        x-on:input="currentVal = $event.target.value.replace(/[^0-9.]/g, '')"
                                        x-on:blur="currentVal = Math.max(minVal, Math.min(maxVal, parseFloat(currentVal) || minVal))"
                                        name="cantidad"
                                        id="counterInput"
                                        type="text"
                                        class="border-x-none h-10 w-20 rounded-none border-y border-neutral-300 bg-neutral-50/50 text-center text-neutral-900 focus-visible:z-10 focus-visible:outline-2 focus-visible:outline-black dark:border-neutral-700 dark:bg-neutral-900/50 dark:text-white dark:focus-visible:outline-white" />

                                    <!-- Botón de sumar -->
                                    <button type="button"
                                        x-on:click="currentVal = Math.min(maxVal, currentVal + incrementAmount)"
                                        class="flex h-10 items-center justify-center rounded-r-sm border border-neutral-300 bg-neutral-50 px-4 py-2 text-neutral-600 hover:opacity-75 focus-visible:z-10 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:opacity-100 active:outline-offset-0 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300 dark:focus-visible:outline-white"
                                        aria-label="add">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" stroke="currentColor" fill="none" stroke-width="2" class="size-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            </div>

                            <!-- Tipo de Unidad -->
                            <div class="flex flex-col gap-4">
                                <div>
                                    <label class="block text-gray-700 text-left dark:text-neutral-50 font-medium">Tipo de Unidad</label>
                                    <select name="unity" class="w-full p-2 border border-gray-300 dark:border-gray-700 dark:bg-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500">
                                        <option value="unidad">Unidad</option>
                                        <option value="paquete">Paquete</option>
                                        <option value="caja">Caja</option>
                                        <option value="docena">Docena</option>
                                        <option value="pares">Pares</option>
                                    </select>

                                </div>
                            </div>
                        </div>


                    <label class="block text-gray-700 text-left dark:text-neutral-50 font-medium">Descripción</label>
                    <textarea name="description"
                        class="w-full h-32 p-2 border border-gray-300 dark:border-gray-700 dark:bg-gray-900 rounded-md mb-3 focus:outline-none focus:ring-2 focus:ring-purple-500"
                        placeholder="Algo que añadir...">{{ old('description') }}</textarea>

                    <div class="mb-3">
                        <!-- Input oculto -->
                        <div class="relative flex w-full max-w-sm flex-col gap-1">
                            <label class="w-fit pl-0.5 text-sm text-[#5A6ACF] font-bold" for="fileInput">Subir foto</label>
                            <input type="file" id="fileUpload" name="image" accept="image/*"
                                class="w-full overflow-clip rounded-sm border border-[#5A6ACF] bg-[#5A6ACF]/10 text-sm text-[#5A6ACF]
                                file:mr-4 file:border-none file:bg-[#5A6ACF]/20 file:px-4 file:py-2 file:font-medium file:text-[#5A6ACF]
                                focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#5A6ACF]
                                disabled:cursor-not-allowed disabled:opacity-75 dark:border-[#5A6ACF] dark:bg-[#5A6ACF]/20
                                dark:text-[#5A6ACF] dark:file:bg-[#5A6ACF]/30 dark:file:text-white dark:focus-visible:outline-white" />
                        </div>
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


        @livewire('search-epp')
    </div>

</x-app-layout>
