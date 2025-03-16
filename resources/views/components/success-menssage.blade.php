<div>
    @if (session('success'))
        <div
            x-data="{ show: true }"
            x-init="setTimeout(() => show = false, 3000)"
            x-show="show"
            x-transition.opacity.duration.1000ms
            class="p-4 mt-4 text-sm text-green-700 bg-green-100 rounded-lg"
            role="alert"
            wire:ignore
        >
            {{ session('success') }}
        </div>
    @endif
</div>
