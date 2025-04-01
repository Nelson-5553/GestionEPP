@props(['name', 'route'])

<a
    href="{{ $route }}"
    class="sm:w-44 w-auto max-w-full border border-[#5A6ACF] rounded-md bg-[#5A6ACF] px-4 py-2 text-center text-sm font-medium tracking-wide text-white transition hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#5A6ACF] active:opacity-100 active:outline-offset-0 break-words text-wrap">
    Registrar {{ $name }}
</a>
