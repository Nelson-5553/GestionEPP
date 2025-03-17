<div>
    @if ($errors->any())
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" x-transition.opacity.duration.2000ms
            class="p-4 mt-4 text-sm text-red-700 bg-red-100 rounded-lg" role="alert" wire:ignore>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
