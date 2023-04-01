<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

            <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                <div class="text-2xl">
                    {{ __('Update Profile Information') }}
                </div>

                @livewire('profile.update-profile-information-form')
            </div>

            <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                <div class="text-2xl">
                    {{ __('Update Password') }}
                </div>

                @livewire('profile.update-password-form')
            </div>

            <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                <div class="text-2xl">
                    {{ __('Two Factor Authentication') }}
                </div>

                @livewire('profile.two-factor-authentication-form')
            </div>

            <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                <div class="text-2xl">
                    {{ __('Logout Other Browser Sessions') }}
                </div>

                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
            <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                <div class="text-2xl">
                    {{ __('Delete Account') }}
                </div>

                @livewire('profile.delete-user-form')
            </div>
            @endif

        </div>
    </div>
</x-app-layout>
