@props(['tab' => null, 'name'])

<button x-on:click="active = '{{ $tab }}'" :class="active === '{{ $tab }}' ? 'tab-active' : ''"
    class="flex-1 px-4 py-3 font-medium text-center rounded-md transition-colors tab-button text-primary-text hover:bg-primary-bg hover:text-accent focus:outline-none focus:ring-2 focus:ring-accent-light">
    {{ $name }}
</button>
