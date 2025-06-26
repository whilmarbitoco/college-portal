@props([
    'id' => 'editor-' . md5($attributes->get('name') ?? uniqid()),
    'label' => '',
    'name' => '',
    'help' => '',
    'value' => '',
])
<div 
    x-data="{
        content:  $el.dataset.content,
        quill: null,
        init() {
        if (this.quill) return;

        this.quill = new Quill('#{{ $id }}', {
            theme: 'snow',
        });

        this.quill.root.innerHTML = this.content;

        this.quill.on('text-change', () => {
            this.content = this.quill.root.innerHTML;
        });
    }

    }"
    data-content="{!! $value !!}"
    x-init="init()"
>
    @if($label)
        <label class="block mb-1 text-sm font-medium text-tertiary-text">
            {{ $label }}
        </label>
    @endif

    <input x-model="content" type="hidden" name="{{ $name }}">

    <div
        class="overflow-auto w-full rounded-md border transition-all outline-none max-h-[20rem] bg-secondary-bg text-white">
        <div id="{{ $id }}" class="overflow-auto w-full h-[10rem]"></div>
    </div>

    @if($help)
        <p class="mt-1 text-xs text-tertiary-text">
            {{ $help }}
        </p>
    @endif

    @error($name)
        <span class="text-red-500">
            {{ $message }}
        </span>
    @enderror
</div>
