@props(['head', 'body'])

<header class="mb-6 md:mb-8">
    <h1 class="text-3xl font-bold md:text-4xl text-primary-text">
        {{ $head }}
    </h1>
    <p class="text-lg text-tertiary-text">
        {{ $body }}
    </p>
</header>
