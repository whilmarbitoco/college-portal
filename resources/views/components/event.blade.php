@props(['id', 'event', 'type', 'content', 'date', 'time', 'location'])

<x-card>
    <div x-data="{ open: false }">
        <div class="flex justify-between items-center accordion-header" tabindex="0">
            <h2 class="text-xl font-semibold text-primary-text">
                {{ $event }}
                <span
                    class="px-2 py-1 ml-2 text-xs font-medium rounded-full bg-danger-light text-danger">{{ $type }}</span>
            </h2>
            <div class="flex items-start space-x-4">
                <span class="text-sm text-tertiary-text">{{ $date }}</span>
                <button x-on:click="open = !open" :class="open == true ? 'rotate-180' : ''">
                    <svg class="w-6 h-6 transition-transform duration-300 transform text-primary-text accordion-icon"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 15.41L8.59 12 7.18 13.41 12 18.23l4.82-4.82L15.41 12z" />
                    </svg>
                </button>
            </div>
        </div>
        <div x-show="open" class="pt-4 mt-4 border-t border-border">
            <p class="mb-2 text-tertiary-text">
                {{ $content }}
            </p>

            <div class="flex justify-between items-center mt-4">
                <div class="flex space-x-2">
                    <p class="text-sm text-tertiary-text">
                        <strong class="text-primary-text">Date:</strong> {{ $date }}<br />
                    </p>
                    <p class="text-sm text-tertiary-text">
                        <strong class="text-primary-text">Time:</strong>{{ $time }}<br />
                    </p>

                    <p class="text-sm text-tertiary-text">
                        <strong class="text-primary-text">Location:</strong>
                        {{ $location }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-card>
