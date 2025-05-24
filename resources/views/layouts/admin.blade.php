<x-app-layout>
    <div class="flex">
        @include('partials.admin-sidebar')
        <main class="overflow-y-auto flex-grow p-6 md:p-8">
            @yield('content')
        </main>
    </div>
</x-app-layout>
