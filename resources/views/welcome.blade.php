<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gestion EPP</title>

    <!-- Fonts -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('icon.png') }}">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased">
    <div class="bg-slate-100">
        <header class="absolute inset-x-0 top-0 z-50">
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <x-logo-icon class="size-8"/>
                </div>
                <div class="flex ">
                    <div class="lg:flex lg:flex-1 lg:justify-end">

                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                                        Dashboard
                                    </a>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                                        {{ __('Login') }}
                                    </a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                                            {{ __('Register') }}
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </div>
            </nav>


        </header>

        <div class="relative isolate px-6 pt-14 lg:px-8">
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
                aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            <div class="mx-auto max-w-4xl py-32 sm:py-48 lg:py-56">
                <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                    <div
                        class="relative rounded-full px-3 py-1 text-sm/6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                        Trabajo en proceso <a href="#" class="font-semibold text-indigo-600"><span
                                class="absolute inset-0" aria-hidden="true"></span>Read more <span
                                aria-hidden="true">&rarr;</span></a>
                    </div>
                </div>
                <div class="text-center">
                    <div class="flex flex-col justify-center items-center gap-2 mb-6">
                        {{-- <span
                            class="flex size-12 md:size-24 items-center justify-center overflow-hidden rounded-full bg-[#5A67BA] text-white text-xl md:text-6xl font-bold tracking-wider text-on-danger/80 mb-12">G</span> --}}
                        <x-logo-icon class="size-44 mb-10"/>
                            <a href="#" class="ml-2 w-fit  text-3xl  md:text-6xl font-bold text-[#5A67BA]">
                            <h1 class="">Gestion EPP</h1>
                        </a>
                    </div>
                    <p class="mt-8 text-pretty text-lg font-medium text-gray-500 sm:text-xl/8">La solución eficiente
                        para el control de Equipos de Protección Personal en Gestión Salud. Optimiza la administración,
                        asegura el cumplimiento y lleva un registro preciso en un solo lugar.</p>
                    <div class="flex justify-center mt-4" x-data="{ videoModalIsOpen: false }">
                        <button x-on:click="videoModalIsOpen = true, $refs.video.play()" type="button"
                            class="flex flex-row rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"
                                fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd"
                                    d="M4.5 5.653c0-1.426 1.529-2.33 2.779-1.643l11.54 6.348c1.295.712 1.295 2.573 0 3.285L7.28 19.991c-1.25.687-2.779-.217-2.779-1.643V5.653z"
                                    clip-rule="evenodd" />
                            </svg>
                            Play Video
                        </button>
                        <div x-cloak x-show="videoModalIsOpen" x-transition.opacity.duration.200ms
                            x-trap.inert.noscroll="videoModalIsOpen"
                            x-on:keydown.esc.window="videoModalIsOpen = false, $refs.video.pause()"
                            x-on:click.self="videoModalIsOpen = false, $refs.video.pause()"
                            class="fixed inset-0 z-30 flex items-center justify-center bg-black/20 p-4 backdrop-blur-md lg:p-8"
                            role="dialog" aria-modal="true" aria-labelledby="videoModalTitle">
                            <!-- Modal Dialog -->
                            <div x-show="videoModalIsOpen"
                                x-transition:enter="transition ease-out duration-300 delay-200"
                                x-transition:enter-start="opacity-0 translate-y-8"
                                x-transition:enter-end="opacity-100 translate-y-0" class="max-w-2xl w-full relative">
                                <!-- Close Button -->
                                <button type="button" x-show="videoModalIsOpen"
                                    x-on:click="videoModalIsOpen = false, $refs.video.pause()"
                                    x-transition:enter="transition ease-out duration-200 delay-500"
                                    x-transition:enter-start="opacity-0 scale-0"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    class="absolute -top-12 right-0 flex items-center justify-center rounded-full bg-neutral-50 p-1.5 text-neutral-900 hover:opacity-75 active:opacity-100 dark:bg-neutral-900 dark:text-white"
                                    aria-label="close modal">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"
                                        stroke="currentColor" fill="none" stroke-width="1.4" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                                <!-- Video -->
                                <video x-ref="video" class="w-full max-w-7xl rounded-md aspect-video" controls>
                                    <track default kind="captions" srclang="en" src="" />
                                    <source src="https://penguinui.s3.amazonaws.com/component-assets/peng.webm"
                                        type="video/webm">
                                    <source src="https://penguinui.s3.amazonaws.com/component-assets/peng.mp4"
                                        type="video/mp4">
                                    Your browser does not support HTML video.
                                </video>
                            </div>
                        </div>
                    </div>


                    <div class="grid grid-cols-1 lg:grid-cols-3 w-full gap-4 mt-12">
                        <div class="bg-white p-6 rounded-xl shadow-md">
                            <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-4 mx-auto">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-indigo-600"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                              >
                                <path
                                  strokeLinecap="round"
                                  strokeLinejoin="round"
                                  strokeWidth={2}
                                  d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"
                                />
                              </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-2 text-gray-800">Cumplimiento Normativo</h3>
                            <p class="text-gray-600">Asegura el cumplimiento de normativas de seguridad y salud ocupacional.</p>
                          </div>
                          <div class="bg-white p-6 rounded-xl shadow-md">
                            <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-4 mx-auto">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-indigo-600"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                              >
                                <path
                                  strokeLinecap="round"
                                  strokeLinejoin="round"
                                  strokeWidth={2}
                                  d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"
                                />
                              </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-2 text-gray-800">Análisis y Reportes</h3>
                            <p class="text-gray-600">Obtén informes detallados para tomar decisiones basadas en datos.</p>
                          </div>
                          <div class="bg-white p-6 rounded-xl shadow-md">
                            <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-4 mx-auto">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 text-indigo-600"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                              >
                                <path
                                  strokeLinecap="round"
                                  strokeLinejoin="round"
                                  strokeWidth={2}
                                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                                />
                              </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-2 text-gray-800">Control Eficiente</h3>
                            <p class="text-gray-600">Gestiona inventarios y asignaciones de EPP con facilidad y precisión.</p>
                          </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>
