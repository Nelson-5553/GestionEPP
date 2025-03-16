<x-form-section submit="updatePassword">
    <x-slot name="title">
        <span class="dark:text-gray-200"> {{ __('Update Password') }}</span>
    </x-slot>

    <x-slot name="description">
        <span class="dark:text-gray-200">{{ __('Ensure your account is using a long, random password to stay secure.') }}</span>
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-label for="current_password" value="{{ __('Current Password') }}" class="dark:text-gray-300" />
            <x-input id="current_password" type="password" class="mt-1 block w-full bg-white dark:bg-gray-800 dark:text-gray-200" wire:model="state.current_password" autocomplete="current-password" />
            <x-input-error for="current_password" class="mt-2 dark:text-red-400" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="password" value="{{ __('New Password') }}" class="dark:text-gray-300" />
            <x-input id="password" type="password" class="mt-1 block w-full bg-white dark:bg-gray-800 dark:text-gray-200" wire:model="state.password" autocomplete="new-password" />
            <x-input-error for="password" class="mt-2 dark:text-red-400" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" class="dark:text-gray-300" />
            <x-input id="password_confirmation" type="password" class="mt-1 block w-full bg-white dark:bg-gray-800 dark:text-gray-200" wire:model="state.password_confirmation" autocomplete="new-password" />
            <x-input-error for="password_confirmation" class="mt-2 dark:text-red-400" />
        </div>
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
