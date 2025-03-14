<div class="relative my-4 flex w-full max-w-xs flex-col gap-1 text-neutral-600 dark:text-neutral-300">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none"
        stroke-width="2"
        class="absolute left-2 top-1/2 size-5 -translate-y-1/2 text-neutral-600/50 dark:text-neutral-300/50"
        aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round"
            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
    </svg>
    <input type="text"
    {{ $attributes->merge(['class' => 'w-full border border-neutral-300 rounded-md bg-white dark:bg-gray-900 px-2 py-1.5 pl-9 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-950/50 dark:focus-visible:outline-white']) }}
    placeholder="Buscar..."
    oninput="debouncedSearch(this.value)" />
</div>

{{-- searchChangedEpp --}}
<script>
    let debounceTimer;
    function debouncedSearch(value) {
        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(() => {
            Livewire.dispatch('searchChangedEpp', { value });
        }, 400); // 400ms de espera
    }
</script>
