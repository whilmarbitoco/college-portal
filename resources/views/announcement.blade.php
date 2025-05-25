<x-app-layout>
    <div class="flex flex-col min-h-screen leading-normal font-inter bg-primary-bg text-primary-text">
        @include('navbar')


        <section class="overflow-hidden relative py-24 bg-gradient-to-br from-primary-bg to-secondary-bg md:py-32">
            <div class="absolute inset-0 opacity-10"
                style="
          background-image: url('{{ $background == null ? './background.jpg' : 'alt' }}');
          background-size: cover;
          background-repeat: no-repeat;
        ">
            </div>
            <main class="flex-grow">
                <div class="container px-6 mx-auto max-w-6xl md:px-8">
                    <h1 class="mb-12 text-4xl font-extrabold text-center md:text-5xl text-primary-text">
                        Latest <span class="text-accent">Announcements</span>
                    </h1>

                    <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">

                        <x-announcement-card />
                        <x-announcement-card />
                        <x-announcement-card />
                        <x-announcement-card />
                        <x-announcement-card />

                    </div>
                </div>
            </main>
        </section>



        <footer class="py-8 mt-auto text-sm text-center border-t bg-secondary-bg text-tertiary-text border-border">
            <div class="container px-6 mx-auto md:px-8">
                <p>&copy; {{ date('Y') }} {{ $name }} Portal. All rights reserved.</p>
                <p class="mt-1">Developed by Whilmar M. Bitoco</p>
            </div>
        </footer>
    </div>

</x-app-layout>
