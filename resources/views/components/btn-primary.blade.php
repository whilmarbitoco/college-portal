 @props(['name', 'type' => 'button'])

 <button type="{{ $type }}" class="button-text text-accent hover:text-accent-light">
     {{ $name }}
 </button>
