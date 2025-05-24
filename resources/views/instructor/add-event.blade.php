@extends('layouts.instructor')

@section('content')
    <div>
        <x-header head="Add New Event" body="Create new upcoming academic events" />

        <x-card>
            <div class="p-4 bg-secondary-bg">
                <form class="space-y-4">
                    <div class="mb-4">
                        <label for="name" class="block mb-1 text-sm font-medium text-primary-text">Name</label>
                        <input type="text" id="name" placeholder="Your Name"
                            class="px-3 py-2 w-full rounded-md border transition-all outline-none bg-secondary-bg text-primary-text border-border placeholder:text-tertiary-text placeholder:opacity-70 focus:border-accent focus:shadow-focus-accent disabled:bg-gray-700 disabled:text-gray-400 disabled:cursor-not-allowed disabled:border-gray-700" />
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="event-date" class="block mb-1 text-sm font-medium text-primary-text">Date</label>
                            <input type="date" id="event-date"
                                class="px-3 py-2 w-full rounded-md border transition-all outline-none bg-secondary-bg text-primary-text border-border placeholder:text-tertiary-text placeholder:opacity-70 focus:border-accent focus:shadow-focus-accent disabled:bg-gray-700 disabled:text-gray-400 disabled:cursor-not-allowed disabled:border-gray-700"
                                required />
                        </div>
                        <div>
                            <label for="event-time" class="block mb-1 text-sm font-medium text-primary-text">Time
                                (Optional)</label>
                            <input type="time" id="event-time"
                                class="px-3 py-2 w-full rounded-md border transition-all outline-none bg-secondary-bg text-primary-text border-border placeholder:text-tertiary-text placeholder:opacity-70 focus:border-accent focus:shadow-focus-accent disabled:bg-gray-700 disabled:text-gray-400 disabled:cursor-not-allowed disabled:border-gray-700" />
                        </div>
                    </div>
                    <div>
                        <label for="event-type" class="block mb-1 text-sm font-medium text-primary-text">Event
                            Type</label>
                        <select id="event-type"
                            class="px-3 py-2 w-full rounded-md border transition-all outline-none bg-secondary-bg text-primary-text border-border placeholder:text-tertiary-text placeholder:opacity-70 focus:border-accent focus:shadow-focus-accent disabled:bg-gray-700 disabled:text-gray-400 disabled:cursor-not-allowed disabled:border-gray-700">
                            <option value="general">General Event</option>
                            <option value="holiday">Holiday</option>
                            <option value="symposium">Symposium</option>
                            <option value="exam">Exam/Assessment</option>
                            <option value="deadline">Deadline</option>
                            <option value="meeting">Meeting</option>
                        </select>
                    </div>
                    <div>
                        <label for="event-location" class="block mb-1 text-sm font-medium text-primary-text">Location
                            (Optional)</label>
                        <input type="text" id="event-location"
                            class="px-3 py-2 w-full rounded-md border transition-all outline-none bg-secondary-bg text-primary-text border-border placeholder:text-tertiary-text placeholder:opacity-70 focus:border-accent focus:shadow-focus-accent disabled:bg-gray-700 disabled:text-gray-400 disabled:cursor-not-allowed disabled:border-gray-700"
                            placeholder="e.g., Room 101, Online" />
                    </div>
                    <div>
                        <label for="event-description"
                            class="block mb-1 text-sm font-medium text-primary-text">Description</label>
                        <textarea id="event-description" rows="3"
                            class="px-3 py-2 w-full rounded-md border transition-all outline-none bg-secondary-bg text-primary-text border-border placeholder:text-tertiary-text placeholder:opacity-70 focus:border-accent focus:shadow-focus-accent disabled:bg-gray-700 disabled:text-gray-400 disabled:cursor-not-allowed disabled:border-gray-700"
                            placeholder="Brief description of the event..."></textarea>
                    </div>
                    <div class="space-x-3 text-right">
                        <button
                            class="inline-flex justify-center items-center px-4 py-2 font-semibold no-underline bg-transparent rounded-md border border-none transition-colors cursor-pointer outline-none text-accent border-accent hover:bg-accent hover:text-primary-text active:bg-accent-darkest focus:shadow-focus-accent">
                            Cancel
                        </button>
                        <button type="submit"
                            class="inline-flex justify-center items-center px-4 py-2 font-semibold no-underline rounded-md border-none transition-colors cursor-pointer outline-none bg-accent text-primary-text hover:bg-accent-darker active:bg-accent-darkest active:shadow-inner focus:shadow-focus-accent">
                            Save Event
                        </button>
                    </div>
                </form>
            </div>
        </x-card>
    </div>
@endsection
