@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex items-center rounded-sm gap-2 bg-black/10 px-2 py-1.5 text-sm font-medium text-[#5A6ACF] underline-offset-2 focus-visible:underline focus:outline-hidden dark:bg-white/10 dark:text-[#5A67BA]'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
