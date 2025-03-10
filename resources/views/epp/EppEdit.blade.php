<x-app-layout>
    <div class="max-w-7xl mx-auto py-12 px-6 lg:px-8">
        <p class="text-xl font-bold text-gray-900 dark:text-gray-200 md:-ml-5">
            Editar Información de la Sede
        </p>

        <x-error-menssage />

        <div class="mt-8 bg-[#F1F2F7] dark:bg-neutral-800 p-6 rounded-lg w-auto">
            <form method="POST" action="{{route('epp.update', $epp->id)}}">
                @csrf
                @method('PUT')

                <div class="flex flex-col space-y-6">
                    <div>
                        <div class="flex flex-row justify-start items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-[#5A67BA]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                              </svg>

                            <label for="name" class="block text-gray-900 dark:text-gray-200 font-semibold">Nombre</label>
                        </div>
                        <input type="text" id="name" name="name" value="{{ $epp->name }}"
                            class="w-full mt-1 p-2 border rounded-lg bg-white dark:bg-neutral-700 text-gray-900 dark:text-gray-200" >
                    </div>

                    <div>
                        <div class="flex flex-row justify-start items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-[#5A67BA]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 14.25v2.25m3-4.5v4.5m3-6.75v6.75m3-9v9M6 20.25h12A2.25 2.25 0 0 0 20.25 18V6A2.25 2.25 0 0 0 18 3.75H6A2.25 2.25 0 0 0 3.75 6v12A2.25 2.25 0 0 0 6 20.25Z" />
                              </svg>

                            <label for="cantidad" class="block text-gray-900 dark:text-gray-200 font-semibold">Cantidad</label>
                        </div>
                        <input type="number" id="cantidad" name="cantidad" value="{{ $epp->cantidad }}"
                            class="w-full mt-1 p-2 border rounded-lg bg-white dark:bg-neutral-700 text-gray-900 dark:text-gray-200" >
                    </div>
                    <div>
                        <div class="flex flex-row justify-start items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-[#5A67BA]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                            </svg>
                            <label class="block text-gray-900 dark:text-gray-200 font-semibold">Tipo de Unidad</label>
                        </div>
                        <select name="unity" class="w-full mt-1 p-2 border rounded-lg bg-white dark:bg-neutral-700 text-gray-900 dark:text-gray-200 ">
                            <option value="unidad">Unidad</option>
                            <option value="paquete">Paquete</option>
                            <option value="caja">Caja</option>
                            <option value="docena">Docena</option>
                            <option value="pares">Pares</option>
                        </select>
                    </div>

                    <div>
                        <div class="flex flex-row justify-start items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-[#5A67BA]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                              </svg>

                            <label for="description" class="block text-gray-900 dark:text-gray-200 font-semibold">Descripción</label>
                        </div>
                        <textarea id="description" name="description" rows="3"
                            class="w-full mt-1 p-2 border rounded-lg bg-white dark:bg-neutral-700 text-gray-900 dark:text-gray-200" >{{ $epp->description }}</textarea>
                    </div>
                </div>

                <div class="mt-6 flex justify-end">
                    <button type="submit"
                        class="flex flex-row px-4 py-2 bg-[#5A67BA] text-white font-semibold rounded-lg hover:bg-[#4C56A5] gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                          </svg>

                        Actualizar
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
