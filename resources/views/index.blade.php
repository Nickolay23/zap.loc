<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Главная
        </h2>
    </x-slot>
    <x-slot name="content">
        <!-- Account Management -->
        <div class="block px-4 py-2 text-xs text-gray-400">
            {{ __('Manage Account') }}
        </div>

        <x-jet-dropdown-link href="{{ route('profile.show') }}">
            {{ __('Profile') }}
        </x-jet-dropdown-link>

        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
            <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                {{ __('API Tokens') }}
            </x-jet-dropdown-link>
        @endif

        <div class="border-t border-gray-100"></div>

        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-jet-dropdown-link href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-jet-dropdown-link>
        </form>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                Текст
            </div>
        </div>
    </div>
</x-app-layout>
