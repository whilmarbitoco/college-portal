@props(['course', 'code', 'instructor', 'prelim' => '--', 'midterm' => '--', 'finals' => '--', 'id' => null])

<x-card>
    <div x-data="{ open: false }">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="text-xl font-semibold text-primary-text">
                    {{ $course }}
                    <span class="ml-2 text-base text-tertiary-text">({{ $code }})</span>
                </h2>
                <span class="text-sm text-tertiary-text">Instructor: {{ $instructor }}</span>
            </div>
            <div class="flex items-center space-x-4">
                <span class="text-2xl font-bold text-accent">91.67%</span>
                <button x-on:click="open = !open" :class="open == true ? 'rotate-180' : ''">
                    <svg class="w-6 h-6 transition-transform duration-300 transform text-primary-text accordion-icon"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 15.41L8.59 12 7.18 13.41 12 18.23l4.82-4.82L15.41 12z" />
                    </svg>
                </button>
            </div>
        </div>
        <div x-show="open" class="pt-4 mt-4 border-t accordion-content border-border">
            <h3 class="mb-4 text-lg font-semibold text-primary-text">
                Grade Breakdown:
            </h3>
            <x-table>
                <x-table-head>
                    <x-table-cell name="Item" />
                    <x-table-cell name="Score" />
                    <x-table-cell name="Max Score" />
                    <x-table-cell name="Weight" />
                    <x-table-cell name="Status" />
                </x-table-head>
                <x-table-body>
                    <x-table-item>
                        <x-table-data>Prelim</x-table-data>
                        <x-table-data>{{ $prelim }}</x-table-data>
                        <x-table-data>100</x-table-data>
                        <x-table-data>20%</x-table-data>

                        <x-table-data>
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 text-xs font-medium rounded-full bg-success-light text-success">
                                Graded
                            </span>
                        </x-table-data>
                    </x-table-item>

                    <x-table-item>
                        <x-table-data>Midterm</x-table-data>
                        <x-table-data>{{ $midterm }}</x-table-data>
                        <x-table-data>100</x-table-data>
                        <x-table-data>30%</x-table-data>

                        <x-table-data>
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 text-xs font-medium rounded-full bg-success-light text-success">
                                Graded
                            </span>
                        </x-table-data>
                    </x-table-item>

                    <x-table-item>
                        <x-table-data>Finals</x-table-data>
                        <x-table-data>{{ $finals }}</x-table-data>
                        <x-table-data>100</x-table-data>
                        <x-table-data>50%</x-table-data>
                        <x-table-data>
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 text-xs font-medium rounded-full bg-info-light text-info">
                                Upcoming
                            </span>
                        </x-table-data>
                    </x-table-item>
                </x-table-body>
            </x-table>

        </div>
    </div>
</x-card>
