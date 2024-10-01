<x-app-layout>
    <div class="py-12 min-h-[calc(100vh-80px)]">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 space-y-4">
                    <h1>Titre</h1>
                    <h2>Sous titre</h2>
                    <h3>Sous sous titre</h3>
                    <p>Texte de corps</p>
                    <x-primary-button>Bouton 1</x-primary-button>
                    <x-secondary-button>Bouton 2</x-secondary-button>
                    <x-primary-link :href="route('dashboard')">Lien 1</x-primary-link>
                    <x-secondary-link :href="route('dashboard')">Lien 2</x-secondary-link>
                    <a href="#" class="block underline text-primary">Lien 3</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
