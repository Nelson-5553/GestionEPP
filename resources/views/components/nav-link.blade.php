@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex items-center rounded-sm gap-2 bg-black/10 px-2 py-1.5 text-sm font-medium text-indigo-500 underline-offset-2 focus-visible:underline focus:outline-hidden dark:bg-white/10 dark:text-indigo-500'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-700 hover:text-[#5A6ACF] hover:border-gray-300 focus:outline-none focus:text-[#5A6ACF] focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
