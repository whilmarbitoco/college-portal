<x-app-layout>
    <div class="flex flex-col min-h-screen leading-normal font-inter bg-primary-bg text-primary-text">
        @include('navbar')
        <main class="flex-grow">
            <section
                class="overflow-hidden relative py-24 text-center bg-gradient-to-br from-primary-bg to-secondary-bg md:py-32">
                <div class="absolute inset-0 opacity-10"
                    style="
          background-image: url('/background.jpg');
          background-size: cover;
          background-repeat: no-repeat;
        ">
                </div>
                <h1 class="mb-4 text-4xl font-extrabold drop-shadow-lg md:text-5xl lg:text-6xl text-primary-text">
                    Welcome to the <span class="text-accent">Nebula College Portal</span>
                </h1>
                <p class="mx-auto mb-10 max-w-2xl text-lg md:text-xl text-tertiary-text">
                    Your centralized hub for accessing grades, class schedules,
                    announcements, and important academic resources.
                </p>
                <a href="/login"
                    class="inline-flex justify-center items-center px-8 py-3 text-lg font-bold rounded-full shadow-lg transition-all duration-300 transform cursor-pointer hover:scale-105 bg-accent text-primary-bg hover:bg-accent-darker active:bg-accent-darkest active:shadow-inner focus:shadow-focus-accent">
                    Access Your Portal
                    <svg class="ml-2 w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z" />
                    </svg>
                </a>
            </section>

            <section class="py-16 bg-secondary-bg md:py-20">
                <div class="container px-6 mx-auto md:px-8">
                    <h2 class="mb-12 text-3xl font-bold text-center md:text-4xl text-primary-text">
                        Your Academic Journey, Simplified
                    </h2>
                    <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                        <div
                            class="flex flex-col items-center p-8 text-center rounded-xl border shadow-lg transition-transform duration-300 transform bg-primary-bg hover:scale-105 border-border">
                            <div class="p-3 mb-4 rounded-full text-accent bg-tertiary-bg">
                                <svg class="w-16 h-16" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h10v2H4z" />
                                </svg>
                            </div>
                            <h3 class="mb-3 text-2xl font-semibold text-primary-text">
                                Class Schedule
                            </h3>
                            <p class="text-tertiary-text">
                                Effortlessly view your personalized weekly schedule, enrolled
                                subjects, and classroom assignments.
                            </p>
                        </div>

                        <div
                            class="flex flex-col items-center p-8 text-center rounded-xl border shadow-lg transition-transform duration-300 transform bg-primary-bg hover:scale-105 border-border">
                            <div class="p-3 mb-4 rounded-full text-accent bg-tertiary-bg">
                                <svg class="w-16 h-16" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M3 13h2v-2H3v2zm4 0h14v-2H7v2z" />
                                </svg>
                            </div>
                            <h3 class="mb-3 text-2xl font-semibold text-primary-text">
                                Grades Overview
                            </h3>
                            <p class="text-tertiary-text">
                                Keep track of your performance with a comprehensive overview of
                                your grades and academic progress.
                            </p>
                        </div>

                        <div
                            class="flex flex-col items-center p-8 text-center rounded-xl border shadow-lg transition-transform duration-300 transform bg-primary-bg hover:scale-105 border-border">
                            <div class="p-3 mb-4 rounded-full text-accent bg-tertiary-bg">
                                <svg class="w-16 h-16" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M4 4h16v2H4zm0 6h16v2H4zm0 6h10v2H4z" />
                                </svg>
                            </div>
                            <h3 class="mb-3 text-2xl font-semibold text-primary-text">
                                Important Announcements
                            </h3>
                            <p class="text-tertiary-text">
                                Stay informed with real-time updates on school events, deadlines,
                                and important notices.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="py-8 mt-auto text-sm text-center border-t bg-secondary-bg text-tertiary-text border-border">
            <div class="container px-6 mx-auto md:px-8">
                <p>&copy; 2025 Nebula College Portal. All rights reserved.</p>
                <p class="mt-1">Developed by Whilmar M. Bitoco</p>
            </div>
        </footer>
</x-app-layout>
