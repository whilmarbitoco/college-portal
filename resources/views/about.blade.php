<x-app-layout>
    <div class="flex flex-col min-h-screen leading-normal font-inter bg-primary-bg text-primary-text">
        @include('navbar')

        <main class="flex-grow">
            <section class="overflow-hidden relative py-24 bg-gradient-to-br from-primary-bg to-secondary-bg md:py-32">
                <div class="absolute inset-0 opacity-10"
                    style="
          background-image: url('{{ $background == null ? './background.jpg' : 'alt' }}');
          background-size: cover;
          background-repeat: no-repeat;
        ">
                </div>
                <div class="container px-6 mx-auto max-w-5xl md:px-8">
                    <h1 class="mb-12 text-4xl font-extrabold text-center drop-shadow-lg md:text-5xl text-primary-text">
                        About <span class="text-accent">{{ $name }}</span>
                    </h1>

                    <section class="p-8 mb-12 rounded-xl border shadow-lg drop-shadow-lg bg-secondary-bg border-border">
                        <h2 class="pb-3 mb-6 text-3xl font-bold border-b text-primary-text border-border">
                            Our Story
                        </h2>
                        <div class="text-lg leading-relaxed text-tertiary-text">
                            {!! $story !!}
                        </div>
                    </section>

                    <div class="grid grid-cols-1 gap-8 mb-12 drop-shadow-lg md:grid-cols-2">
                        <section class="p-8 rounded-xl border shadow-lg bg-secondary-bg border-border">
                            <h2 class="pb-3 mb-6 text-3xl font-bold border-b text-primary-text border-border">
                                Our Mission
                            </h2>
                            <div class="text-lg leading-relaxed text-tertiary-text">
                                {!! $mission !!}
                            </div>
                        </section>

                        <section class="p-8 rounded-xl border shadow-lg bg-secondary-bg border-border">
                            <h2 class="pb-3 mb-6 text-3xl font-bold border-b text-primary-text border-border">
                                Our Vision
                            </h2>
                            <div class="text-lg leading-relaxed text-tertiary-text">
                                {!! $vision !!}
                            </div>
                        </section>
                    </div>

                    <section class="p-8 rounded-xl border shadow-lg drop-shadow-lg bg-secondary-bg border-border">
                        <h2 class="pb-3 mb-6 text-3xl font-bold border-b text-primary-text border-border">
                            Our Core Values
                        </h2>
                        <div class="text-lg leading-relaxed text-tertiary-text">
                            {!! $values !!}
                        </div>
                    </section>
                </div>
            </section>

        </main>
        <footer class="py-8 mt-auto text-sm text-center border-t bg-secondary-bg text-tertiary-text border-border">
            <div class="container px-6 mx-auto md:px-8">
                <p>&copy; {{ date('Y') }} {{ $name }} Portal. All rights reserved.</p>
                <p class="mt-1">Developed by Whilmar M. Bitoco</p>
            </div>
        </footer>
    </div>

</x-app-layout>
