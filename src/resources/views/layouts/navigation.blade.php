<nav x-data="{ open: false }" class="w-full bg-white dark:bg-black/80 shadow-b-lg z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-0">
        <div class="flex items-center justify-between h-16 sm:h-20">
            <a href="{{ route('home') }}" class="flex sm:items-center space-x-4">
                <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                <h1 class="hidden sm:flex text-black/80 dark:text-white/80">
                    {{ config('app.name', 'Template') }}
                </h1>
            </a>

            <ul class="hidden lg:flex items-center gap-4">
                <li>
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                        {{ __('Accueil') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('uikit')" :active="request()->routeIs('uikit')">
                        {{ __('UI Kit') }}
                    </x-nav-link>
                </li>
                @auth
                    <li>
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
                            {{ __('Profil') }}
                        </x-nav-link>
                    </li>
                @endauth
            </ul>

            @guest
                <div class="hidden lg:flex items-center gap-2">
                    <x-secondary-link :href="route('register')">
                        {{ __('Inscription') }}
                    </x-secondary-link>
                    <x-primary-link :href="route('login')">
                        {{ __('Connexion') }}
                    </x-primary-link>
                </div>
            @endguest

            @auth
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profil') }}
                            </x-dropdown-link>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Déconnexion') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            @endauth

            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
            <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
                @auth
                    <div class="mb-3">
                        <div>{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>

                    <div class="space-y-1">
                        <x-responsive-nav-link :href="route('profile.edit')">
                            {{ __('Profil') }}
                        </x-responsive-nav-link>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                {{ __('Déconnexion') }}
                            </x-responsive-nav-link>
                        </form>
                    </div>
                @endauth
                @guest
                    <div class="space-y-1">
                        <x-responsive-nav-link :href="route('register')">
                            {{ __('Inscription') }}
                        </x-responsive-nav-link>

                        <x-responsive-nav-link :href="route('login')">
                            {{ __('Connexion') }}
                        </x-responsive-nav-link>
                    </div>
                @endguest
            </div>
        </div>
    </div>

    <div class="block lg:hidden fixed bottom-0 left-0 w-full h-20 bg-white dark:bg-black z-10">
        <div class="h-full px-4 py-2 flex items-center justify-around">
            <x-responsive-tab-link :href="route('home')" :active="request()->routeIs('home')">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-home h-8">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                <p class="text-sm">Accueil</p>
            </x-responsive-tab-link>
            <x-responsive-tab-link :href="route('uikit')" :active="request()->routeIs('uikit')">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-home h-8">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                <p class="text-sm">UI Kit</p>
            </x-responsive-tab-link>
            @auth
                <x-responsive-tab-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-user h-8">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <p class="text-sm">Dashboard</p>
                </x-responsive-tab-link>
                <x-responsive-tab-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-user h-8">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <p class="text-sm">Profil</p>
                </x-responsive-tab-link>
            @endauth
        </div>
    </div>
</nav>
