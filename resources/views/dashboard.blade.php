<x-app-layout>
    <div class=" px-8 md:px-48 py-12 space-y-6">
        <h1 class="text-2xl font-bold text-black dark:text-white md:-ml-8">
            Bienvenido al Sistema de Gestión EPP
        </h1>

        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @php
                $fullWidth = !Gate::allows('ver dashboard') ? 'col-span-3' : 'col-span-2';
            @endphp

            <div class="bg-white dark:bg-gray-800 text-gray-900 dark:text-white py-6 rounded-lg shadow-lg {{ $fullWidth }}">
                <div class="border-b border-indigo-400 px-6 pb-4">
                    <span class="text-xl text-indigo-500 font-bold">Menú</span>
                </div>

                <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-6">

                    <x-card-menu route="{{ route('dashboard') }}">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                            </svg>
                            Inicio
                     </x-card-menu>

                     <x-card-menu route="{{ route('dashboard.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75ZM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 0 1-1.875-1.875V8.625ZM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 0 1 3 19.875v-6.75Z" />
                          </svg>
                             Panel
                      </x-card-menu>

                    <x-card-menu route="{{ route('solicitud.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6 shrink-0" viewBox="0 0 48 48"><g fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="4"><path stroke-linecap="round" d="M40.04 22v20h-32V22"/><path fill="currentColor" d="M5.842 13.777C4.312 17.737 7.263 22 11.51 22c3.314 0 6.019-2.686 6.019-6a6 6 0 0 0 6 6h1.018a6 6 0 0 0 6-6c0 3.314 2.706 6 6.02 6c4.248 0 7.201-4.265 5.67-8.228L39.234 6H8.845z"/></g></svg>
                            Solicitud
                     </x-card-menu>

                    <x-card-menu route="{{ route('entrega.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6 shrink-0" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="m9.564 8.73l.515 1.863c.485 1.755.727 2.633 1.44 3.032c.713.4 1.618.164 3.428-.306l1.92-.5c1.81-.47 2.715-.705 3.127-1.396c.412-.692.17-1.57-.316-3.325l-.514-1.862c-.485-1.756-.728-2.634-1.44-3.033c-.714-.4-1.619-.164-3.429.307l-1.92.498c-1.81.47-2.715.706-3.126 1.398c-.412.691-.17 1.569.315 3.324" />
                            <path fill="currentColor"
                                d="M2.277 5.247a.75.75 0 0 1 .924-.522l1.703.472A2.71 2.71 0 0 1 6.8 7.075l2.151 7.786l.158.547a2.96 2.96 0 0 1 1.522 1.267l.31-.096l8.87-2.305a.75.75 0 1 1 .378 1.452l-8.837 2.296l-.33.102c-.006 1.27-.883 2.432-2.21 2.776c-1.59.414-3.225-.502-3.651-2.044s.518-3.129 2.108-3.542q.119-.03.237-.052L5.354 7.474a1.21 1.21 0 0 0-.85-.831L2.8 6.17a.75.75 0 0 1-.523-.923" />
                        </svg>
                            Entrega
                     </x-card-menu>
                    <x-card-menu route="{{ route('epp.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6 shrink-0" viewBox="0 0 16 16">
                            <path fill="currentColor"
                                d="m16 12l-1.4-6.7c-.2-.7-.9-1.3-1.7-1.3H11V2.8c0-1-.8-1.8-1.8-1.8H6.8C5.8 1 5 1.8 5 2.8V4H3.1c-.8 0-1.5.6-1.7 1.3L0 12c-.2 1 .6 2 1.7 2h12.5c1.2 0 2-1 1.8-2M6 2.8c0-.4.4-.8.8-.8h2.4c.4 0 .8.4.8.8V4H6zm5 7.2H9v2H7v-2H5V8h2V6h2v2h2z" />
                        </svg>
                            EPP
                     </x-card-menu>
                </div>
                <div class="border-y border-indigo-400 px-6 py-4">
                    <span class="text-xl text-indigo-500 font-bold">Otros</span>
                </div>
                <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-6">

                    <x-card-menu route="{{ route('sede.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5 shrink-0" viewBox="0 0 448 512">
                            <path fill="currentColor"
                                d="M128 244v-40c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12m140 12h40c6.627 0 12-5.373 12-12v-40c0-6.627-5.373-12-12-12h-40c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12m-76 84v-40c0-6.627-5.373-12-12-12h-40c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12h40c6.627 0 12-5.373 12-12m76 12h40c6.627 0 12-5.373 12-12v-40c0-6.627-5.373-12-12-12h-40c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12m180 124v36H0v-36c0-6.627 5.373-12 12-12h19.5V85.035C31.5 73.418 42.245 64 55.5 64H144V24c0-13.255 10.745-24 24-24h112c13.255 0 24 10.745 24 24v40h88.5c13.255 0 24 9.418 24 21.035V464H436c6.627 0 12 5.373 12 12M79.5 463H192v-67c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v67h112.5V112H304v24c0 13.255-10.745 24-24 24H168c-13.255 0-24-10.745-24-24v-24H79.5zM266 64h-26V38a6 6 0 0 0-6-6h-20a6 6 0 0 0-6 6v26h-26a6 6 0 0 0-6 6v20a6 6 0 0 0 6 6h26v26a6 6 0 0 0 6 6h20a6 6 0 0 0 6-6V96h26a6 6 0 0 0 6-6V70a6 6 0 0 0-6-6" />
                        </svg>
                            Sede
                     </x-card-menu>

                     <x-card-menu route="{{ route('area.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5 shrink-0" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><path d="m12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036q-.016-.004-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092q.019.005.029-.008l.004-.014l-.034-.614q-.005-.019-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M9 5a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v4h4a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-4v4a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-4H5a2 2 0 0 1-2-2v-2a2 2 0 0 1 2-2h4z"/></g></svg>
                             Area
                      </x-card-menu>

                </div>
            </div>

            @can('ver dashboard')
                @livewire('solicitud-recent')
            @endcan
        </section>
    </div>
</x-app-layout>


