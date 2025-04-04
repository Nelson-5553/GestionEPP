<div x-data="{ isOpen: false, openedWithKeyboard: false, leaveTimeout: null }" x-on:mouseleave.prevent="leaveTimeout = setTimeout(() => { isOpen = false }, 750)"
    x-on:mouseenter="leaveTimeout ? clearTimeout(leaveTimeout) : true"
    x-on:keydown.esc.prevent="isOpen = false, openedWithKeyboard = false"
    x-on:click.outside="isOpen = false, openedWithKeyboard = false" class="relative w-fit">
    <!-- Toggle Button -->
    <button type="button" x-on:click="isOpen = true" x-on:keydown.space.prevent="openedWithKeyboard = true"
        x-on:keydown.enter.prevent="openedWithKeyboard = true" x-on:keydown.down.prevent="openedWithKeyboard = true"
        class="flex items-center justify-center rounded-full border border-neutral-300 bg-neutral-50 p-1 text-sm font-medium transition hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-neutral-800 dark:border-neutral-700 dark:bg-neutral-900 dark:focus-visible:outline-neutral-300"
        x-bind:class="isOpen || openedWithKeyboard ? 'text-neutral-900 dark:text-white' : 'text-neutral-600 dark:text-neutral-300'"
        x-bind:aria-expanded="isOpen || openedWithKeyboard" aria-haspopup="true">

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" fill="currentColor"
            class="size-5">
            <path fill-rule="evenodd"
                d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z"
                clip-rule="evenodd" />
        </svg>

        <span class="sr-only">notifications</span>
        @php
            $newNotifications = \App\Models\Solicitud::whereIn('state', ['Aprobado', 'Rechazado'])
                ->where('user_id', auth()->id())
                ->where('updated_at', '>', now()->subMinutes(10)) // Notificaciones de los últimos 10 minutos
                ->count();
        @endphp

        @if ($newNotifications > 0)
            <span
                class="absolute left-6 -top-1 rounded-full size-4 bg-red-500 px-1 leading-4 text-xs font-medium text-white">
                {{ $newNotifications }}
            </span>
        @endif
    </button>

    <!-- Dropdown Menu -->
    <div x-cloak x-show="isOpen || openedWithKeyboard" x-transition x-trap="openedWithKeyboard"
        x-on:click.outside="isOpen = false, openedWithKeyboard = false" x-on:keydown.down.prevent="$focus.wrap().next()"
        x-on:keydown.up.prevent="$focus.wrap().previous()"
        class="absolute top-11 -right-4  md:right-3 lg:right-6 flex w-fit min-w-80 flex-col z-40 overflow-hidden rounded-md border border-neutral-300 bg-neutral-50 p-4 dark:border-neutral-700 dark:bg-neutral-900"
        role="menu">

        @if ($notifications->isEmpty())
            <p class="text-center text-gray-500 dark:text-gray-400">No hay notificaciones</p>
        @else
            @foreach ($notifications as $notification)
                <div class="space-y-4 mt-4">
                    <div class="flex items-center space-x-3">
                        <img class="w-8 h-8 rounded-full" src="{{ Storage::url('epp/' . $notification->epp->image) }}"
                            alt="image" />
                        <div class="text-sm font-normal">
                            <span class="block text-sm font-semibold text-gray-900 dark:text-white">
                                {{ $notification->epp->name }}
                            </span>
                            <div class="text-sm text-gray-900 dark:text-white">
                                Tu solicitud ha sido {{ $notification->state }}
                            </div>
                        </div>
                        <div>
                            <a href="{{ route('solicitud.index') }}"
                                class="inline-flex px-2.5 py-1.5 text-xs font-medium text-center text-green-600">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <hr class="border-gray-300 dark:border-gray-700">
                </div>
            @endforeach
        @endif



    </div>
</div>
