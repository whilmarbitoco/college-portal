<x-app-layout>
    <div class="flex flex-col min-h-screen leading-normal font-inter bg-primary-bg text-primary-text">
        @include('navbar')


        <section class="overflow-hidden relative py-24 bg-gradient-to-br from-primary-bg to-secondary-bg">
            <div class="absolute inset-0 opacity-10"
                style="
   background-image: url('{{ $site->background == null ? '../background.jpg' : 'alt' }}');
          background-size: cover;
          background-repeat: no-repeat;
        ">
            </div>
            <main class="flex-grow">
                <div class="container px-6 mx-auto max-w-4xl drop-shadow-lg md:px-8">
                    <div class="p-6 rounded-xl border shadow-lg bg-secondary-bg border-border md:p-8">
                        <div class="mb-6">
                            <a href="/announcements"
                                class="inline-flex items-center font-semibold transition-colors text-tertiary-text hover:text-accent">
                                <svg class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z" />
                                </svg>
                                Back to Announcements
                            </a>
                        </div>

                        <h1 class="mb-4 text-3xl font-extrabold leading-tight md:text-4xl text-primary-text">
                            Annual University Sports Fest Grand Opening
                        </h1>

                        <div class="flex flex-wrap items-center mb-6 space-x-4 text-sm text-tertiary-text">
                            <span class="font-medium">
                                <svg class="inline-block mr-1 w-4 h-4 align-text-bottom" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z" />
                                </svg>
                                May 24, 2025
                            </span>
                            <span
                                class="px-3 py-1 text-xs font-semibold rounded-full bg-accent-darker text-primary-text">
                                Target: Whole School
                            </span>
                        </div>

                        <div class="overflow-hidden mb-8 rounded-lg">
                            <img src="../../card.png" alt="Annual University Sports Fest Banner"
                                class="w-full h-auto max-h-[400px] object-cover" />
                        </div>

                        <article class="max-w-none text-lg leading-relaxed prose text-tertiary-text">
                            <p class="mb-4">
                                Get ready for the most awaited event of the year! Nebula College is
                                thrilled to announce the official opening of our Annual University
                                Sports Fest, kicking off on This year's Sports Fest promises to be
                                bigger and better, bringing together students, faculty, and staff
                                from all departments for a week of friendly competition,
                                camaraderie, and unforgettable memories. We encourage everyone to
                                participate, whether as an athlete or a passionate supporter. Let's
                                celebrate sportsmanship, teamwork, and the vibrant spirit of Nebula
                                College. Your presence will undoubtedly make this event a resounding
                                success. For more details on the full schedule of games, venues, and
                                team registrations, please visit the official Sports Fest section on
                                the student portal or contact the Student Affairs Office.
                            </p>
                            <p class="italic font-semibold text-primary-text">
                                See you there, and let the games begin!
                            </p>
                        </article>
                    </div>
                </div>
            </main>
        </section>





        <footer class="py-8 mt-auto text-sm text-center border-t bg-secondary-bg text-tertiary-text border-border">
            <div class="container px-6 mx-auto md:px-8">
                <p>&copy; {{ date('Y') }} {{ $site->name }} Portal. All rights reserved.</p>
                <p class="mt-1">Developed by Whilmar M. Bitoco</p>
            </div>
        </footer>
    </div>

</x-app-layout>
