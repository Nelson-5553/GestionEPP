<x-app-layout>
    <div class="max-w-7xl mx-auto py-12 px-6 lg:px-8">
        <p class="text-xl font-bold text-gray-900 dark:text-gray-200 md:-ml-5">
            Gestión Salud Epp
        </p>

        <div class="mt-8 bg-[#F1F2F7] dark:bg-neutral-800 p-6 rounded-lg">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="flex flex-col text-gray-900 dark:text-gray-200 space-y-4">
                    <div class="flex flex-row items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-[#5A67BA]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                          </svg>
                      <p class="font-semibold text-sm md:text-base">NOMBRE DE EPP:</p>
                    </div>
                    <div class="bg-slate-300/50 dark:bg-slate-600/50 rounded-lg p-4">

                      <p class="text-sm">{{$epp->name}}</p>
                    </div>
                  </div>
                  <div class="flex flex-col text-gray-900 dark:text-gray-200 space-y-4">
                    <div class="flex flex-row items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-[#5A67BA]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z" />
                          </svg>
                      <p class="font-semibold text-sm md:text-base">CANTIDAD:</p>
                    </div>
                    <div class="bg-slate-300/50 dark:bg-slate-600/50 rounded-lg p-4">

                      <p class="text-sm">{{$epp->cantidad}}</p>
                    </div>
                  </div>
                  <div class="flex flex-col text-gray-900 dark:text-gray-200 space-y-4">
                    <div class="flex flex-row items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-[#5A67BA]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                          </svg>
                      <p class="font-semibold text-sm md:text-base">UNIDAD:</p>
                    </div>
                    <div class="bg-slate-300/50 dark:bg-slate-600/50 rounded-lg p-4">

                      <p class="text-sm">{{$epp->unity}}</p>
                    </div>
                  </div>
                  <div class="flex flex-col text-gray-900 dark:text-gray-200 space-y-4 col-span-2">
                    <div class="flex flex-row items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-[#5A67BA]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                        </svg>
                      <p class="font-semibold text-sm md:text-base">DESCRIPCION</p>
                    </div>
                    <div class="bg-slate-300/50 dark:bg-slate-600/50 rounded-lg p-4">
                      <p class="text-sm">{{$epp->description ?? 'No hay descripcion Disponible'}}</p>
                    </div>
                  </div>
            </div>
            <div class="flex justify-end mt-6 gap-2">
                <a href="{{route('epp.edit', $epp)}}"
                class="text-blue-500 hover:text-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 shrink-0" viewBox="0 0 32 32"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m30 7l-5-5L5 22l-2 7l7-2Zm-9-1l5 5ZM5 22l5 5Z"/></svg>
             </a>
                <form action="{{route('epp.destroy', $epp )}}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <x-delete-modal name="epp">
                       <h3 id="dangerModalTitle" class="mb-2 font-semibold tracking-wide text-neutral-900 dark:text-white">Eliminar Epp</h3>
                       <p>Estas a punto de eliminar esta Epp  ¿estas seguro que la quieres eliminar?</p>
                    </x-delete-modal>
                   </form>
            </div>
        </div>
    </div>
</x-app-layout>
