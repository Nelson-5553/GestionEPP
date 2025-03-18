<div>

    <x-form-section submit="updatePassword">
        <x-slot name="title">
            <span class="dark:text-gray-200"> {{ __('Update Signature') }}</span>
        </x-slot>

        <x-slot name="description">
            <span class="dark:text-gray-200">{{ __('Update your digital signature to ensure a secure and professional identity in your documents. Make sure to use a clear and up-to-date signature to enhance the authenticity and validity of your records.') }}</span>
        </x-slot>

        <x-slot name="form">
           FUNCION EN PROGRESO
        </x-slot>

        <x-slot name="actions">
            <x-action-message class="me-3 dark:text-green-400" on="saved">
                {{ __('Saved.') }}
            </x-action-message>

            <x-button class="dark:bg-indigo-600 dark:text-gray-200 dark:hover:bg-indigo-700">
                {{ __('Save') }}
            </x-button>
        </x-slot>
    </x-form-section>
</div>
