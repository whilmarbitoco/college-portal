<x-app-layout>
    <div class="flex flex-col min-h-screen leading-normal font-inter bg-primary-bg text-primary-text">
        @include('navbar')



        <main class="flex-grow py-16 md:py-20">
            <div class="container px-6 mx-auto max-w-5xl md:px-8">
                <h1 class="mb-12 text-4xl font-extrabold text-center md:text-5xl text-primary-text">
                    About <span class="text-accent">Nebula College</span>
                </h1>

                <section class="p-8 mb-12 rounded-xl border shadow-lg bg-secondary-bg border-border">
                    <h2 class="pb-3 mb-6 text-3xl font-bold border-b text-primary-text border-border">
                        Our Story
                    </h2>
                    <p class="mb-4 text-lg leading-relaxed text-tertiary-text">
                        Established in 20XX, Nebula College has rapidly grown into a beacon of
                        academic excellence and innovation in the Davao Region, Philippines.
                        We are committed to fostering a dynamic learning environment that
                        prepares students for the challenges and opportunities of a rapidly
                        evolving global landscape.
                    </p>
                    <p class="text-lg leading-relaxed text-tertiary-text">
                        Our institution was founded on the principle that quality education
                        should be accessible and transformative, empowering individuals to
                        achieve their full potential and contribute meaningfully to society.
                    </p>
                </section>

                <div class="grid grid-cols-1 gap-8 mb-12 md:grid-cols-2">
                    <section class="p-8 rounded-xl border shadow-lg bg-secondary-bg border-border">
                        <h2 class="pb-3 mb-6 text-3xl font-bold border-b text-primary-text border-border">
                            Our Mission
                        </h2>
                        <p class="text-lg leading-relaxed text-tertiary-text">
                            To provide high-quality, accessible, and innovative education that
                            empowers students with knowledge, skills, and values essential for
                            personal growth, professional success, and responsible global
                            citizenship. We are dedicated to fostering critical thinking,
                            creativity, and a lifelong passion for learning.
                        </p>
                    </section>

                    <section class="p-8 rounded-xl border shadow-lg bg-secondary-bg border-border">
                        <h2 class="pb-3 mb-6 text-3xl font-bold border-b text-primary-text border-border">
                            Our Vision
                        </h2>
                        <p class="text-lg leading-relaxed text-tertiary-text">
                            To be a leading educational institution recognized for academic
                            distinction, groundbreaking research, and community engagement,
                            shaping future leaders and innovators who drive positive change in
                            the Philippines and beyond.
                        </p>
                    </section>
                </div>

                <section class="p-8 rounded-xl border shadow-lg bg-secondary-bg border-border">
                    <h2 class="pb-3 mb-6 text-3xl font-bold border-b text-primary-text border-border">
                        Our Core Values
                    </h2>
                    <ul class="space-y-2 text-lg list-disc list-inside text-tertiary-text">
                        <li>
                            <strong class="text-accent">Excellence:</strong> Striving for the
                            highest standards in education, research, and service.
                        </li>
                        <li>
                            <strong class="text-accent">Integrity:</strong> Upholding honesty,
                            ethics, and transparency in all endeavors.
                        </li>
                        <li>
                            <strong class="text-accent">Innovation:</strong> Embracing
                            creativity and forward-thinking approaches to learning and
                            problem-solving.
                        </li>
                        <li>
                            <strong class="text-accent">Community:</strong> Fostering a
                            supportive, inclusive, and collaborative environment.
                        </li>
                        <li>
                            <strong class="text-accent">Empowerment:</strong> Equipping
                            individuals with the tools and confidence to realize their
                            potential.
                        </li>
                    </ul>
                </section>
            </div>
        </main>
        <footer class="py-8 mt-auto text-sm text-center border-t bg-secondary-bg text-tertiary-text border-border">
            <div class="container px-6 mx-auto md:px-8">
                <p>&copy; 2025 Nebula College Portal. All rights reserved.</p>
                <p class="mt-1">Developed by Whilmar M. Bitoco</p>
            </div>
        </footer>
    </div>

</x-app-layout>
