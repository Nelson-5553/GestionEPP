@props(['name'])

<div x-data="{ infoModalIsOpen: false }">
    <button x-on:click="infoModalIsOpen = true" type="button" class="w-36 border border-[#5A6ACF] whitespace-nowrap rounded-md bg-[#5A6ACF] px-4 py-2 text-center text-sm font-medium tracking-wide text-white transition hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#5A6ACF] active:opacity-100 active:outline-offset-0">Registrar {{ $name }}</button>
    <div x-cloak x-show="infoModalIsOpen" x-transition.opacity.duration.200ms x-trap.inert.noscroll="infoModalIsOpen" x-on:keydown.esc.window="infoModalIsOpen = false" x-on:click.self="infoModalIsOpen = false" class="fixed inset-0 z-30 flex items-end justify-center bg-black/20 p-4 pb-8 backdrop-blur-md sm:items-center lg:p-8" role="dialog" aria-modal="true" aria-labelledby="infoModalTitle">
        <!-- Modal Dialog -->
        <div x-show="infoModalIsOpen" x-transition:enter="transition ease-out duration-200 delay-100 motion-reduce:transition-opacity" x-transition:enter-start="opacity-0 scale-50" x-transition:enter-end="opacity-100 scale-100" class="flex max-w-lg flex-col gap-4 overflow-hidden rounded-lg border border-neutral-300 bg-white text-neutral-600 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300">
            <!-- Dialog Header -->
            <div class="flex items-center justify-between border-b  border-neutral-300 bg-neutral-50/60 px-4 py-2 dark:border-neutral-700 dark:bg-neutral-950/20">
                <div class="flex items-center justify-center rounded-full bg-purple-500/20 text-purple-500 p-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z"/></svg>
                </div>
                <button x-on:click="infoModalIsOpen = false" aria-label="close modal">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" stroke="currentColor" fill="none" stroke-width="1.4" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <!-- Dialog Body -->
            <div class="px-4 text-center">
                {{ $slot }}
            </div>
            <!-- Dialog Footer -->

        </div>
    </div>
</div>
