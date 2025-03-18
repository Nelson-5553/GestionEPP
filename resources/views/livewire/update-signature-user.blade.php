<div>

    <x-form-section submit="updatePassword">
        <x-slot name="title">
            <span class="dark:text-gray-200"> {{ __('Update Signature') }}</span>
        </x-slot>

        <x-slot name="description">
            <span class="dark:text-gray-200">{{ __('Update your digital signature to ensure a secure and professional identity in your documents. Make sure to use a clear and up-to-date signature to enhance the authenticity and validity of your records.') }}</span>
        </x-slot>

        <x-slot name="form">
            <div class="flex flex-col items-start space-y-2">
                <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                    {{ $signature ? __('La firma está habilitada') : __('No hay firma habilitada') }}
                </h3>

                @if ($signature)
                    <img src="{{ asset('storage/Signature/' . $signature) }}" class="w-44 border rounded-md shadow-md" alt="Firma">
                @else
                    <span class="text-sm text-gray-500 dark:text-gray-400">No se ha registrado una firma.</span>
                @endif
            </div>

        </x-slot>

        <x-slot name="actions">
            <x-action-message class="me-3 dark:text-green-400" on="saved">
                {{ __('Saved.') }}
            </x-action-message>
            @if (is_null($signature))
            <a href="{{ route('user.signature', auth()->user()) }}"
                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                Firmar
            </a>
        @else
            <button disabled
                class="inline-flex items-center px-4 py-2 bg-gray-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest opacity-50 cursor-not-allowed">
                Firmado
            </button>
        @endif

        </x-slot>
    </x-form-section>
</div>
