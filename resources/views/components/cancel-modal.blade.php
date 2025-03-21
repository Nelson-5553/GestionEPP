<div>
    <div x-data="{ dangerModalIsOpen: false }">
        <button x-on:click="dangerModalIsOpen = true" type="button" class="flex flex-row justify-center w-full mt-1 py-2 px-6 border rounded-lg bg-red-600 text-white hover:bg-red-700 dark:bg-red-500 dark:hover:bg-red-600 gap-2.5">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
              </svg>

            Cancelar Entrega
        </button>
        <div x-cloak x-show="dangerModalIsOpen" x-transition.opacity.duration.200ms x-trap.inert.noscroll="dangerModalIsOpen" x-on:keydown.esc.window="dangerModalIsOpen = false" x-on:click.self="dangerModalIsOpen = false" class="fixed inset-0 z-30 flex items-end justify-center bg-black/20 p-4 pb-8 backdrop-blur-md sm:items-center lg:p-8" role="dialog" aria-modal="true" aria-labelledby="dangerModalTitle">
            <!-- Modal Dialog -->
            <div x-show="dangerModalIsOpen" x-transition:enter="transition ease-out duration-200 delay-100 motion-reduce:transition-opacity" x-transition:enter-start="opacity-0 scale-50" x-transition:enter-end="opacity-100 scale-100" class="flex max-w-lg flex-col gap-4 overflow-hidden rounded-sm border border-neutral-300 bg-white text-neutral-600 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300">
                <!-- Dialog Header -->
                <div class="flex items-center justify-between border-b border-neutral-300 bg-neutral-50/60 px-4 py-2 dark:border-neutral-700 dark:bg-neutral-950/20">
                    <div class="flex items-center justify-center rounded-full bg-red-500/20 text-red-500 p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-6" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16ZM8.28 7.22a.75.75 0 0 0-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 1 0 1.06 1.06L10 11.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L11.06 10l1.72-1.72a.75.75 0 0 0-1.06-1.06L10 8.94 8.28 7.22Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <button x-on:click="dangerModalIsOpen = false" aria-label="close modal">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" stroke="currentColor" fill="none" stroke-width="1.4" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
                <!-- Dialog Body -->
                <div class="px-4 text-center">
                    <h3 id="dangerModalTitle" class="mb-2 font-semibold tracking-wide text-neutral-900 dark:text-white">Cancelar entrega</h3>
                    <p>Estas a punto de cancelar esta entrega ¿estas seguro que la quieres cancelar?</p>
                </div>
                <!-- Dialog Footer -->
                <div class="flex items-center justify-center border-neutral-300 p-4 dark:border-neutral-700">
                    <button x-on:click="dangerModalIsOpen = false" type="submit" class="w-full whitespace-nowrap rounded-sm border border-red-500 bg-red-500 px-4 py-2 text-center text-sm font-semibold tracking-wide text-white transition hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500 active:opacity-100 active:outline-offset-0">Cancelar Entrega</button>
                </div>
            </div>
        </div>
    </div>
</div>
