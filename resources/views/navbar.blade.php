<header class="p-6 shadow-md bg-secondary-bg md:px-8">
    <nav class="container flex justify-between items-center mx-auto">
        <div class="flex items-center">
            <svg class="mr-2 w-8 h-8 text-accent" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
            </svg>
            <div class="text-2xl font-bold text-primary-text">{{ $siteInfo->acronym }}</div>
        </div>

        <div class="flex items-center space-x-6">
            <ul class="hidden space-x-6 md:flex">
                <li>
                    <a href="/"
                        class="{{ Request::path() == '/' ? 'text-accent' : 'text-primary-text' }} text-md font-medium transition-colors  hover:text-accent">Home</a>
                </li>
                <li>
                    <a href="/about"
                        class="{{ Request::path() == 'about' ? 'text-accent' : 'text-primary-text' }} text-md font-medium transition-colors hover:text-accent">About</a>
                </li>

                <li>
                    <a href="/program"
                        class="{{ Request::path() == 'program' ? 'text-accent ' : 'text-primary-text' }} text-md font-medium transition-colors hover:text-accent">Program</a>
                </li>
                <li>
                    <a href="/announcements"
                        class="{{ Request::path() == 'announcements' ? 'text-accent' : 'text-primary-text' }} text-md font-medium transition-colors hover:text-accent">Announcements</a>
                </li>
            </ul>


            <a href="/login"
                class="inline-flex justify-center items-center px-6 py-2 font-semibold no-underline rounded-full border-none transition-colors transform cursor-pointer outline-none bg-accent text-primary-text hover:bg-accent-darker active:bg-accent-darkest active:shadow-inner focus:shadow-focus-accent hover:scale-105">
                {{ Auth::check() ? 'Dashboard' : 'Login' }}
            </a>

        </div>

        <button class="md:hidden text-primary-text focus:outline-none">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>
    </nav>
</header>