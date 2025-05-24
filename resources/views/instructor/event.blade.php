@extends('layouts.instructor')

@section('content')
    <div>
        <header class="flex justify-between items-start mb-6 md:mb-4">
            <div class="mb-6 md:mb-8">
                <h1 class="text-3xl font-bold md:text-4xl text-primary-text">
                    Academic Events
                </h1>
                <p class="text-lg text-tertiary-text">
                    Explore upcoming academic activities.
                </p>
            </div>
            <a href="{{ route('instructor.event.add') }}"
                class="inline-flex justify-center items-center px-4 py-2 font-semibold no-underline rounded-md border-none transition-colors cursor-pointer outline-none bg-accent text-primary-text hover:bg-accent-darker active:bg-accent-darkest active:shadow-inner focus:shadow-focus-accent">
                <svg class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" />
                </svg>
                Add New Event
            </a>
        </header>
        <x-tab>
            <x-tab-head>
                <x-tab-item name="All Events" tab="default" />
                <x-tab-item name="My Events" tab="t2" />
            </x-tab-head>

            <x-tab-content id="default">
                <section class="space-y-4">
                    <x-event id="event1" event="University Holiday - Labor Day"
                        content="Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore necessitatibus nisi, ex suscipit ab quam."
                        type="Holiday" date="May 1, 2025" time="All Day" location="University-wide" />
                </section>
            </x-tab-content>

            <x-tab-content id="t2">
                <p class="text-sm text-center text-gray-500 shadow-sm border-success-light">
                    You haven't posted any events.
                </p>
            </x-tab-content>
        </x-tab>


    </div>
@endsection
