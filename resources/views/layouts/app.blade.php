<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Gestion EPP') }}</title>
<!-- Favicon -->
<link rel="icon" type="image/svg+xml" href="{{ asset('icon.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <div x-data="{ showSidebar: false }" class="relative flex w-full flex-col md:flex-row">
        <!-- This allows screen readers to skip the sidebar and go directly to the main content. -->
        <a class="sr-only" href="#main-content">skip to the main content</a>

        <!-- dark overlay for when the sidebar is open on smaller screens  -->
        <div x-cloak x-show="showSidebar" class="fixed inset-0 z-10 bg-neutral-950/10 backdrop-blur-xs md:hidden"
            aria-hidden="true" x-on:click="showSidebar = false" x-transition.opacity></div>

        <nav x-cloak
            class="fixed left-0 z-20 flex h-svh w-60 shrink-0 flex-col border-r border-neutral-300 bg-neutral-50 dark:bg-gray-950 p-4 transition-transform duration-300 md:w-64 md:translate-x-0 md:relative dark:border-neutral-700"
            x-bind:class="showSidebar ? 'translate-x-0' : '-translate-x-60'" aria-label="sidebar navigation">

            <!-- logo  -->
            <div class="flex flex-row items-center gap-1 mb-6">
                <div>
                    <x-logo-icon class="size-12"/>
                 </div>
                <div class="flex flex-col text-start items-center">
                    <a href="{{route('dashboard')}}" class="ml-2 w-fit text-2xl font-bold text-[#5A67BA]">
                    <h1 class="">Gestion EPP</h1>
                </a>
                <p class="text-start text-sm dark:text-white">Sistema de Gestion</p>
                </div>
            </div>

            <!-- sidebar links  -->
            <div class="flex flex-col gap-2 overflow-y-auto pb-6">
                <p class="prose dark:prose-invert text-[#5A6ACF] font-bold">Menu</p>

                {{-- Inicio --}}
                <x-nav-link
                    class="flex items-center rounded-sm gap-2 px-2 py-1.5 text-sm font-medium text-neutral-600 underline-offset-2 hover:bg-black/5 hover:text-[#5A6ACF] focus-visible:underline focus:outline-hidden dark:text-neutral-300 dark:hover:bg-white/5 dark:hover:text-[#5A6ACF]"
                    href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                      </svg>

                      {{ __('Home') }}
                </x-nav-link>

                {{-- dashboard --}}
                @can('ver dashboard')
                <x-nav-link
                    class="flex items-center rounded-sm gap-2 px-2 py-1.5 text-sm font-medium text-neutral-600 underline-offset-2 hover:bg-black/5 hover:text-[#5A6ACF] focus-visible:underline focus:outline-hidden dark:text-neutral-300 dark:hover:bg-white/5 dark:hover:text-[#5A6ACF]"
                    href="{{ route('dashboard.index') }}" :active="request()->routeIs('dashboard.index')">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="size-5 shrink-0" aria-hidden="true">
                        <path
                            d="M15.5 2A1.5 1.5 0 0 0 14 3.5v13a1.5 1.5 0 0 0 1.5 1.5h1a1.5 1.5 0 0 0 1.5-1.5v-13A1.5 1.5 0 0 0 16.5 2h-1ZM9.5 6A1.5 1.5 0 0 0 8 7.5v9A1.5 1.5 0 0 0 9.5 18h1a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 10.5 6h-1ZM3.5 10A1.5 1.5 0 0 0 2 11.5v5A1.5 1.5 0 0 0 3.5 18h1A1.5 1.5 0 0 0 6 16.5v-5A1.5 1.5 0 0 0 4.5 10h-1Z" />
                    </svg>
                    {{ __('Dashboard') }}
                </x-nav-link>
                @endcan

                {{-- solicitudes --}}

                @can('ver solicitud')
                <x-nav-link
                    class="flex items-center rounded-sm gap-2 px-2 py-1.5 text-sm font-medium text-neutral-600 underline-offset-2 hover:bg-black/5 hover:text-[#5A6ACF] focus-visible:underline focus:outline-hidden dark:text-neutral-300 dark:hover:bg-white/5 dark:hover:text-[#5A6ACF]"
                    href="{{ route('solicitud.index') }}" :active="request()->routeIs('solicitud.index', 'solicitud.show', 'solicitud.create')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5 shrink-0" viewBox="0 0 48 48"><g fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="4"><path stroke-linecap="round" d="M40.04 22v20h-32V22"/><path fill="currentColor" d="M5.842 13.777C4.312 17.737 7.263 22 11.51 22c3.314 0 6.019-2.686 6.019-6a6 6 0 0 0 6 6h1.018a6 6 0 0 0 6-6c0 3.314 2.706 6 6.02 6c4.248 0 7.201-4.265 5.67-8.228L39.234 6H8.845z"/></g></svg>
                    <span>Solicitar</span>
                </x-nav-link>
                @endcan

                {{-- entregas --}}

                @can('ver entrega')
                <x-nav-link
                    class="flex items-center rounded-sm gap-2 px-2 py-1.5 text-sm font-medium text-neutral-600 underline-offset-2 hover:bg-black/5 hover:text-[#5A6ACF] focus-visible:underline focus:outline-hidden dark:text-neutral-300 dark:hover:bg-white/5 dark:hover:text-[#5A6ACF]"
                    href="{{ route('entrega.index') }}" :active="request()->routeIs('entrega.index', 'entrega.show')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5 shrink-0" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="m9.564 8.73l.515 1.863c.485 1.755.727 2.633 1.44 3.032c.713.4 1.618.164 3.428-.306l1.92-.5c1.81-.47 2.715-.705 3.127-1.396c.412-.692.17-1.57-.316-3.325l-.514-1.862c-.485-1.756-.728-2.634-1.44-3.033c-.714-.4-1.619-.164-3.429.307l-1.92.498c-1.81.47-2.715.706-3.126 1.398c-.412.691-.17 1.569.315 3.324" />
                        <path fill="currentColor"
                            d="M2.277 5.247a.75.75 0 0 1 .924-.522l1.703.472A2.71 2.71 0 0 1 6.8 7.075l2.151 7.786l.158.547a2.96 2.96 0 0 1 1.522 1.267l.31-.096l8.87-2.305a.75.75 0 1 1 .378 1.452l-8.837 2.296l-.33.102c-.006 1.27-.883 2.432-2.21 2.776c-1.59.414-3.225-.502-3.651-2.044s.518-3.129 2.108-3.542q.119-.03.237-.052L5.354 7.474a1.21 1.21 0 0 0-.85-.831L2.8 6.17a.75.75 0 0 1-.523-.923" />
                    </svg>
                    <span>Entrega</span>
                    {{-- <span class="sr-only">active</span> --}}
                </x-nav-link>
                @endcan

                {{-- Elementeos de proteccion personal --}}

                @can('ver epp')
                <x-nav-link
                    class="flex items-center rounded-sm gap-2 px-2 py-1.5 text-sm font-medium text-neutral-600 underline-offset-2 hover:bg-black/5 hover:text-[#5A6ACF] focus-visible:underline focus:outline-hidden dark:text-neutral-300 dark:hover:bg-white/5 dark:hover:text-[#5A6ACF]"
                    href="{{ route('epp.index') }}" :active="request()->routeIs('epp.index', 'epp.show')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                        <path fill="currentColor"
                            d="m16 12l-1.4-6.7c-.2-.7-.9-1.3-1.7-1.3H11V2.8c0-1-.8-1.8-1.8-1.8H6.8C5.8 1 5 1.8 5 2.8V4H3.1c-.8 0-1.5.6-1.7 1.3L0 12c-.2 1 .6 2 1.7 2h12.5c1.2 0 2-1 1.8-2M6 2.8c0-.4.4-.8.8-.8h2.4c.4 0 .8.4.8.8V4H6zm5 7.2H9v2H7v-2H5V8h2V6h2v2h2z" />
                    </svg>
                    <span>EPP</span>
                </x-nav-link>
                @endcan
                <p class="prose dark:prose-invert text-[#5A6ACF] font-bold">Otros</p>

                @can('ver sede')

                {{-- Sedes --}}

                <x-nav-link
                    class="flex items-center rounded-sm gap-2 px-2 py-1.5 text-sm font-medium text-neutral-600 underline-offset-2 hover:bg-black/5 hover:text-[#5A6ACF] focus-visible:underline focus:outline-hidden dark:text-neutral-300 dark:hover:bg-white/5 dark:hover:text-[#5A6ACF]"
                    href="{{ route('sede.index') }}" :active="request()->routeIs('sede.index', 'sede.show')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5 shrink-0" viewBox="0 0 448 512">
                        <path fill="currentColor"
                            d="M128 244v-40c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12m140 12h40c6.627 0 12-5.373 12-12v-40c0-6.627-5.373-12-12-12h-40c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12m-76 84v-40c0-6.627-5.373-12-12-12h-40c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12h40c6.627 0 12-5.373 12-12m76 12h40c6.627 0 12-5.373 12-12v-40c0-6.627-5.373-12-12-12h-40c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12m180 124v36H0v-36c0-6.627 5.373-12 12-12h19.5V85.035C31.5 73.418 42.245 64 55.5 64H144V24c0-13.255 10.745-24 24-24h112c13.255 0 24 10.745 24 24v40h88.5c13.255 0 24 9.418 24 21.035V464H436c6.627 0 12 5.373 12 12M79.5 463H192v-67c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v67h112.5V112H304v24c0 13.255-10.745 24-24 24H168c-13.255 0-24-10.745-24-24v-24H79.5zM266 64h-26V38a6 6 0 0 0-6-6h-20a6 6 0 0 0-6 6v26h-26a6 6 0 0 0-6 6v20a6 6 0 0 0 6 6h26v26a6 6 0 0 0 6 6h20a6 6 0 0 0 6-6V96h26a6 6 0 0 0 6-6V70a6 6 0 0 0-6-6" />
                    </svg>
                    <span>Sedes</span>
                </x-nav-link>
                @endcan

                {{-- Areas --}}

                @can('ver area')
                <x-nav-link
                    class="flex items-center rounded-sm gap-2 px-2 py-1.5 text-sm font-medium text-neutral-600 underline-offset-2 hover:bg-black/5 hover:text-[#5A6ACF] focus-visible:underline focus:outline-hidden dark:text-neutral-300 dark:hover:bg-white/5 dark:hover:text-[#5A6ACF]"
                    href="{{ route('area.index') }}" :active="request()->routeIs('area.index', 'area.show')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5 shrink-0" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><path d="m12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036q-.016-.004-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092q.019.005.029-.008l.004-.014l-.034-.614q-.005-.019-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M9 5a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v4h4a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-4v4a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-4H5a2 2 0 0 1-2-2v-2a2 2 0 0 1 2-2h4z"/></g></svg>
                    <span>Area</span>
                </x-nav-link>
                @endcan

                {{-- Perfil --}}

                <x-nav-link
                    class="flex items-center rounded-sm gap-2 px-2 py-1.5 text-sm font-medium text-neutral-600 underline-offset-2 hover:bg-black/5 hover:text-[#5A6ACF] focus-visible:underline focus:outline-hidden dark:text-neutral-300 dark:hover:bg-white/5 dark:hover:text-[#5A6ACF]"
                    href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    <svg xmlns="http://www.w3.org/2000/svg viewBox="0 0 20 20" fill="currentColor"
                        class="size-5 shrink-0" aria-hidden="true">
                        <path
                            d="M10 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM3.465 14.493a1.23 1.23 0 0 0 .41 1.412A9.957 9.957 0 0 0 10 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 0 0-13.074.003Z" />
                    </svg>
                    {{ __('Cuenta') }}
                </x-nav-link>

                {{-- Informacion --}}

                <x-nav-link
                    class="flex items-center rounded-sm gap-2 px-2 py-1.5 text-sm font-medium text-neutral-600 underline-offset-2 hover:bg-black/5 hover:text-[#5A6ACF] focus-visible:underline focus:outline-hidden dark:text-neutral-300 dark:hover:bg-white/5 dark:hover:text-[#5A6ACF]"
                    href="{{ route('dashboard') }}" :active="request()->routeIs('')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5 shrink-0" viewBox="0 0 24 24"><path fill="currentColor" d="M9.367 2.25c-1.092 0-1.958 0-2.655.057c-.714.058-1.317.18-1.868.46a4.75 4.75 0 0 0-2.076 2.077c-.281.55-.403 1.154-.461 1.868c-.057.697-.057 1.563-.057 2.655v5.266c0 1.092 0 1.958.057 2.655c.058.714.18 1.317.46 1.869a4.75 4.75 0 0 0 2.077 2.075c.55.281 1.154.403 1.868.461c.697.057 1.563.057 2.655.057h5.266c1.092 0 1.958 0 2.655-.057c.714-.058 1.317-.18 1.869-.46a4.75 4.75 0 0 0 2.075-2.076c.281-.552.403-1.155.461-1.869c.057-.697.057-1.563.057-2.655V9.367c0-1.092 0-1.958-.057-2.655c-.058-.714-.18-1.317-.46-1.868a4.75 4.75 0 0 0-2.076-2.076c-.552-.281-1.155-.403-1.869-.461c-.697-.057-1.563-.057-2.655-.057zm2.633 5a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-1.5 0V8a.75.75 0 0 1 .75-.75M10.75 16a.75.75 0 0 1 .5-.707v-3.586a.75.75 0 0 1 .25-1.457h.5a.75.75 0 0 1 .75.75v4.293a.75.75 0 0 1-.25 1.457h-1a.75.75 0 0 1-.75-.75"/></svg>
                    <span>Informacion</span>
                </x-nav-link>

            </div>

           <x-button-theme/>
        </nav>

        <!-- main content  -->
        <div id="main-content" class="h-svh w-full overflow-y-auto bg-white ">
            <x-banner />

            <div class="min-h-screen bg-gray-50 dark:bg-gray-900">
                @livewire('navigation-menu')

                <!-- Page Heading -->
                @if (isset($header))
                    <header class="text-black dark:text-[#5A6ACF] bg-white dark:bg-slate-900 shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif

                <!-- Page Content -->
                <main>
                    <x-loader>

                    {{ $slot }}
                    </x-loader>
                </main>
            </div>
        </div>

        <!-- toggle button for small screen  -->

    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>
