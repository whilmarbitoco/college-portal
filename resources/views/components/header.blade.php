@props(['head', 'body'])

<header class="flex justify-between items-start mb-6 md:mb-8">
    <div>
        <h1 class="text-3xl font-bold md:text-4xl text-primary-text">
            {{ $head }}
        </h1>
        <p class="text-lg text-tertiary-text">
            {{ $body }}
        </p>
    </div>

    {{ $slot }}
</header>
