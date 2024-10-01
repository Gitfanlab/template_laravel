<footer class="bg-white dark:bg-black/80 text-dark dark:text-white/80 pt-8 sm:pb-8 mb-20 sm:mb-0 shadow-t-lg">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex flex-wrap justify-between items-start">
            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <x-application-logo class="block h-24 w-auto fill-current text-black/80 dark:text-white/80 mb-4" />
                <p class="mb-2">Copyright &copy; {{ date('Y') }} - {{ config('app.name', 'Template') }}
                </p>
                <p>Site web créé par le FANLab Toulon</p>
            </div>

            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <h3 class="mb-3">Contactez-nous</h3>
                <a href="mailto:alfan-fanlab-toulon.accueil.fct@intradef.gouv.fr" class="block mb-2 underline text-primary">alfan-fanlab-toulon.accueil.fct@intradef.gouv.fr</a>
                <p>864 73 23 522 / 04 22 42 35 22</p>
                <a href="mailto:laetitia.collodet@intradef.gouv.fr" class="block mb-2 underline text-primary">laetitia.collodet@intradef.gouv.fr</a>
                <p>864 73 23 577 / 06 86 92 47 75</p>
                <a href="mailto:fanlab.toulon@gmail.com" class="block mb-4 underline text-primary">fanlab.toulon@gmail.com</a>
                <div class="flex space-x-4">
                    <a href="https://www.facebook.com/example" class="text-dark hover:text-black dark:hover:text-white"
                        target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-facebook h-6 w-6">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/example" class="text-dark hover:text-black dark:hover:text-white"
                        target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-instagram h-6 w-6">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <h3 class="mb-3">Informations</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('mentions-legales') }}" class="hover:underline">Mentions Légales</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
