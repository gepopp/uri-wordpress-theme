<div class="fixed fixed-top w-full z-50 bg-white">
    <div class="relative" x-data="{ show: false }">
        <div class="shadow-sm shadow-logo-dark flex justify-between z-50">
            <div class="container py-6 flex justify-between">
                <div class="w-3/4 lg:w-1/3 flex justify-between border-r border-logo-light">
                    <a href="<?php echo home_url() ?>">
                        <div class="flex items-center">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo-icon.svg" class="h-12 w-auto pr-4">
                            <div class="flex flex-col">
                                <h1 class="text-xl md:text-2xl lg:text-3xl font-serif font-semibold flex justify-between">
                                    <span class="text-logo-light leading-5">Christina </span>
                                    <span class="text-logo-dark leading-5">Kuri</span>
                                </h1>
                                <p class="hidden md:block text-xs text-logo-dark leading-none">Psychotherapeutin in Ausbildung unter</p>
                                <p class="hidden md:block text-xs text-logo-dark leading-none">Supervision, Hypnosepsychotherapie</p>
                            </div>
                        </div>
                    </a>
                    <div class="hidden md:flex lg:hidden xl:flex grow text-center justify-center items-center">
                        <a href="tel:+43670/2085532" class="flex space-x-3 text-logo-medium">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <span>0670/2085532</span>
                        </a>
                    </div>
                </div>

                <nav class="hidden lg:flex space-x-5 items-center text-logo-dark">
                    <a href="<?php echo home_url() ?>#start">Start</a>
                    <a href="<?php echo home_url() ?>#method">Methode</a>
                    <a href="<?php echo home_url() ?>#focus">Schwerpunkte</a>
                    <a href="<?php echo home_url() ?>#setting">Rahmenbedingungen</a>
                </nav>

                <div class="hidden lg:flex items-center">
                    <a href="#contact" class="flex border border-logo-medium rounded-2xl text-center text-logo-medium py-2 px-16">Kontakt</a>
                </div>

                <div class="lg:hidden grow flex justify-center items-center text-logo-medium" @click="show = !show">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </div>

            </div>
        </div>
        <div class="absolute top-full left-0 w-full bg-white z-50 p-5 border-b border-logo-dark drop-shadow-md"
             x-show="show"
             x-cloak
             x-transition:enter="transition ease-out duration-500"
             x-transition:enter-start="opacity-0 scale-90"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-300"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-90">
            <nav class="flex flex-col items-center text-logo-dark">

                <a href="<?php echo home_url() ?>#start" class="block w-full text-center py-3 border-b border-logo-dark pb-3" @click="show = false">Start</a>
                <a href="<?php echo home_url() ?>#method" class="block w-full text-center py-3 border-b border-logo-dark pb-3" @click="show = false">Methode</a>
                <a href="<?php echo home_url() ?>#focus" class="block w-full text-center py-3 border-b border-logo-dark pb-3" @click="show = false">Schwerpunkte</a>
                <a href="<?php echo home_url() ?>#setting" class="block w-full text-center py-3 border-b border-logo-dark pb-3" @click="show = false">Rahmenbedingungen</a>

            </nav>

            <div class="flex items-center w-full my-10" @click="show = false">
                <a href="#contact" class="block border border-logo-medium rounded-2xl text-center text-logo-medium py-2 w-full">Kontakt</a>
            </div>

            <div class="pt-10">
                <a href="tel:+43670/2085532" class="flex justify-center text-2xl text-logo-medium">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    <span>0670/2085532</span>
                </a>
            </div>
        </div>
    </div>
</div>