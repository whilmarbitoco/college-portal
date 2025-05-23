@props(['id'])

<div {{ $attributes->merge(['id' => $id]) }} class="hidden tab-content">
    {{ $slot }}
</div>
