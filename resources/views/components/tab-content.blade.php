@props(['id'])

<div x-show="active === '{{ $id }}'" x-cloak class="tab-content" x-transition>
    {{ $slot }}
</div>
