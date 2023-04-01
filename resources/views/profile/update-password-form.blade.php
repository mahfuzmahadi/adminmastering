<x-jet-form-section submit="updatePassword">
    <x-slot name="title" class="font-bold text-xl mb-4">
        {{ __('Update Password') }}
    </x-slot>

    <x-slot name="description" class="text-gray-600 mb-4">
        {{ __('Ensure your account is using a long, random password to stay secure.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4 mb-4">
            <x-jet-label for="current_password" value="{{ __('Current Password') }}" class="block font-semibold text-gray-700 mb-2" />
            <x-jet-input id="current_password" type="password" class="mt-1 block w-full border-gray-400 rounded py-2 px-3" wire:model.defer="state.current_password" autocomplete="current-password" />
            <x-jet-input-error for="current_password" class="mt-2 text-sm text-red-600" />
        </div>

        <div class="col-span-6 sm:col-span-4 mb-4">
            <x-jet-label for="password" value="{{ __('New Password') }}" class="block font-semibold text-gray-700 mb-2" />
            <x-jet-input id="password" type="password" class="mt-1 block w-full border-gray-400 rounded py-2 px-3" wire:model.defer="state.password" autocomplete="new-password" />
            <x-jet-input-error for="password" class="mt-2 text-sm text-red-600" />
        </div>

        <div class="col-span-6 sm:col-span-4 mb-6">
            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" class="block font-semibold text-gray-700 mb-2" />
            <x-jet-input id="password_confirmation" type="password" class="mt-1 block w-full border-gray-400 rounded py-2 px-3" wire:model.defer="state.password_confirmation" autocomplete="new-password" />
            <x-jet-input-error for="password_confirmation" class="mt-2 text-sm text-red-600" />
        </div>
    </x-slot>

    <x-slot name="actions" class="flex justify-end">
        <x-jet-action-message class="mr-3 text-green-600" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
