<x-app-layout>
    <div class="py-12 min-h-[calc(100vh-80px)]">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @guest
                        {{ __('Connectez-vous pour accéder à votre profil.') }}
                    @endguest
                    @auth
                        @if (auth()->user()->can('administrer'))
                            {{ __("Vous êtes connecté en tant qu'admin. Ceci est la page d'accueil.") }}
                        @else
                            {{ __("Vous êtes connecté en tant qu'user. Ceci est la page d'accueil.") }}
                        @endif
                    @endauth
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
