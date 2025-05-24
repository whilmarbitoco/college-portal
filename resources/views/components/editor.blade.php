@props(['xname'])

<div
    class="overflow-scroll w-full rounded-md border transition-all outline-none max-h-[20rem] bg-secondary-bg text-primary-text  placeholder:text-tertiary-text placeholder:opacity-70 focus:border-accent focus:shadow-focus-accent">
    <div id="{{ $xname }}" class="overflow-scroll w-full h-[10rem]"></div>

</div>

<script>
    let pass = @json(value: $xname);
    // const quill = new Quill(`#${pass}`, {
    //     theme: 'snow',
    // });
</script>
