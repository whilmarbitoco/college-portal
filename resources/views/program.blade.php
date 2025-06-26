<x-app-layout>
    @include('navbar')

    <main class="flex-grow">
        <section class="overflow-hidden relative py-24 bg-gradient-to-br from-primary-bg to-secondary-bg">
            <div class="absolute inset-0 opacity-10" style="
          background-image: url('{{ $site->background == null ? './background.jpg' : asset('storage/' . $siteInfo->background) }}');
          background-size: cover;
          background-repeat: no-repeat;
        ">
            </div>
            <main class="flex-grow">
                <div class="container px-6 mx-auto max-w-6xl md:px-8">
                    <h1 class="mb-12 text-4xl font-extrabold text-center md:text-5xl text-primary-text">
                        Our Academic <span class="text-accent">Programs</span>
                    </h1>

                    <section class="mb-16">
                        <h2 class="pb-4 mb-8 text-2xl font-bold border-b text-primary-text border-border">
                            Undergraduate Programs
                        </h2>
                        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                            <x-program-card />
                            <x-program-card />
                            <x-program-card />
                        </div>
                    </section>

                    <section>
                        <h2 class="pb-4 mb-8 text-2xl font-bold border-b text-primary-text border-border">
                            Graduate Programs
                        </h2>
                        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                            <x-program-card />
                            <x-program-card />
                        </div>
                    </section>

                </div>
            </main>
        </section>


        <footer class="py-8 mt-auto text-sm text-center border-t bg-secondary-bg text-tertiary-text border-border">
            <div class="container px-6 mx-auto md:px-8">
                <p>&copy; {{ date('Y') }} {{ $site->name }} Portal. All rights reserved.</p>
                <p class="mt-1">Developed by Whilmar M. Bitoco</p>
            </div>
        </footer>
</x-app-layout>