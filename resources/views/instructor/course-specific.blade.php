@extends('layouts.instructor')

@section('content')
    <div>
        <x-header head="Advanced Algorithms (CS 401)" body="Instructor: Professor Eleanor Vance" />


        <x-tab>
            <x-tab-head>
                <x-tab-item name="Student List" tab="default" />
                <x-tab-item name="Gradebook" tab="t2" />
                <x-tab-item name="Course Announcements" tab="t3" />
            </x-tab-head>

            <x-tab-content id="default">
                <x-card>
                    <h2 class="mb-6 text-2xl font-semibold text-primary-text">
                        Student List & Attendance
                    </h2>
                    <div class="flex justify-between items-center mb-4">
                        <p class="text-sm text-tertiary-text">
                            Mark attendance for today, May 23, 2025
                        </p>
                        <button class="button button-text text-accent hover:text-accent-light">
                            Mark All Present
                        </button>
                    </div>


                    <x-table>
                        <x-table-head>
                            <x-table-cell name="Present" />
                            <x-table-cell name="Student Name" />
                            <x-table-cell name="Student Email" />
                            <x-table-cell name="Student Id" />
                        </x-table-head>
                        <x-table-body>
                            <x-table-item>
                                <x-table-data>
                                    <input type="checkbox"
                                        class="inline-block mr-2 w-4 h-4 align-middle rounded-sm border transition-all appearance-none cursor-pointer bg-secondary-bg border-border checked:bg-accent checked:border-accent checked:bg-no-repeat checked:bg-center checked:bg-full focus:shadow-focus-offset-accent"
                                        checked />
                                </x-table-data>
                                <x-table-data>
                                    Alice Johnson
                                </x-table-data>
                                <x-table-data>
                                    alice@nebula.com
                                </x-table-data>
                                <x-table-data>
                                    2023-001
                                </x-table-data>
                            </x-table-item>

                            <x-table-item>
                                <x-table-data>
                                    <input type="checkbox"
                                        class="inline-block mr-2 w-4 h-4 align-middle rounded-sm border transition-all appearance-none cursor-pointer bg-secondary-bg border-border checked:bg-accent checked:border-accent checked:bg-no-repeat checked:bg-center checked:bg-full focus:shadow-focus-offset-accent"
                                        checked />
                                </x-table-data>
                                <x-table-data>
                                    Alice Johnson
                                </x-table-data>
                                <x-table-data>
                                    alice@nebula.com
                                </x-table-data>
                                <x-table-data>
                                    2023-001
                                </x-table-data>
                            </x-table-item>

                            <x-table-item>
                                <x-table-data>
                                    <input type="checkbox"
                                        class="inline-block mr-2 w-4 h-4 align-middle rounded-sm border transition-all appearance-none cursor-pointer bg-secondary-bg border-border checked:bg-accent checked:border-accent checked:bg-no-repeat checked:bg-center checked:bg-full focus:shadow-focus-offset-accent"
                                        checked />
                                </x-table-data>
                                <x-table-data>
                                    Alice Johnson
                                </x-table-data>
                                <x-table-data>
                                    alice@nebula.com
                                </x-table-data>
                                <x-table-data>
                                    2023-001
                                </x-table-data>
                            </x-table-item>
                        </x-table-body>
                    </x-table>

                    <div class="mt-6 text-right">
                        <button
                            class="inline-flex justify-center items-center px-4 py-2 font-semibold no-underline rounded-md border-none transition-colors cursor-pointer outline-none bg-accent text-primary-text hover:bg-accent-darker active:bg-accent-darkest active:shadow-inner focus:shadow-focus-accent">
                            Save Attendance</button>
                    </div>
                </x-card>
            </x-tab-content>

            <x-tab-content id="t2">
                <x-card>
                    <h2 class="mb-6 text-2xl font-semibold text-primary-text">Gradebook</h2>

                    <x-table>
                        <x-table-head>
                            <x-table-cell name="Student Name" />
                            <x-table-cell name="Prelim" />
                            <x-table-cell name="Midterm" />
                            <x-table-cell name="Finals" />
                            <x-table-cell name="Overall" />
                        </x-table-head>
                        <x-table-body>

                            <x-table-item>
                                <x-table-data>Alice Johnson</x-table-data>
                                <x-table-data>
                                    <input type="number" min="0" max="100" value="95"
                                        class="text-center w-15 form-input bg-primary-bg" />
                                </x-table-data>
                                <x-table-data>
                                    <input type="number" min="0" max="100" value="95"
                                        class="text-center w-15 form-input bg-primary-bg" />
                                </x-table-data>
                                <x-table-data>
                                    <input type="number" min="0" max="100" value="95"
                                        class="text-center w-15 form-input bg-primary-bg" />
                                </x-table-data>
                                <x-table-data>
                                    <p class="px-6 py-4 font-bold text-accent">91.67</p>
                                </x-table-data>
                            </x-table-item>
                        </x-table-body>
                    </x-table>


                    <div class="mt-6 text-right">
                        <button
                            class="inline-flex justify-center items-center px-4 py-2 font-semibold no-underline rounded-md border-none transition-colors cursor-pointer outline-none bg-accent text-primary-text hover:bg-accent-darker active:bg-accent-darkest active:shadow-inner focus:shadow-focus-accent">
                            Save Grades</button>
                    </div>
                </x-card>
            </x-tab-content>

            <x-tab-content id="t3">

                <section id="announcements" class="p-6 rounded-md shadow-md tab-content bg-secondary-bg">
                    <h2 class="mb-6 text-2xl font-semibold text-primary-text">
                        Course Announcements
                    </h2>

                    <div class="p-4 mb-8 rounded-md border border-border bg-primary-bg">
                        <h3 class="mb-3 text-lg font-semibold text-primary-text">
                            Post New Announcement
                        </h3>
                        <form class="space-y-4">
                            <div>
                                <label for="announcement-title" class="sr-only">Announcement Title</label>
                                <input type="text" id="announcement-title"
                                    class="px-4 py-3 w-full rounded-md border transition-all outline-none bg-secondary-bg text-primary-text border-border placeholder:text-tertiary-text placeholder:opacity-70 focus:border-accent focus:shadow-focus-accent"
                                    placeholder="Announcement Title" required />
                            </div>
                            <div>
                                <label for="announcement-content" class="sr-only">Announcement Content</label>
                                <textarea id="announcement-content" rows="5"
                                    class="px-4 py-3 w-full rounded-md border transition-all outline-none bg-secondary-bg text-primary-text border-border placeholder:text-tertiary-text placeholder:opacity-70 focus:border-accent focus:shadow-focus-accent"
                                    placeholder="Write your announcement here..." required></textarea>
                            </div>
                            <div class="text-right">
                                <button type="submit"
                                    class="inline-flex justify-center items-center px-4 py-2 font-semibold no-underline rounded-md border-none transition-colors cursor-pointer outline-none bg-accent text-primary-text hover:bg-accent-darker active:bg-accent-darkest active:shadow-inner focus:shadow-focus-accent">
                                    Post Announcement
                                </button>
                            </div>
                        </form>
                    </div>

                    <div>
                        <h3 class="mb-3 text-lg font-semibold text-primary-text">
                            Existing Announcements
                        </h3>
                        <ul class="space-y-4">
                            <li class="p-4 rounded-md border bg-primary-bg border-border">
                                <div class="flex justify-between items-start mb-2">
                                    <h4 class="text-lg font-bold text-primary-text">
                                        Midterm Exam Review Session
                                    </h4>
                                    <div class="space-x-2">
                                        <button class="button-text text-accent hover:text-accent-light">
                                            Edit
                                        </button>
                                        <button class="button-text text-danger hover:text-danger-light">
                                            Delete
                                        </button>
                                    </div>
                                </div>
                                <p class="mb-2 text-tertiary-text">
                                    A review session for the midterm exam will be held on Monday, May
                                    27th, at 5 PM in Room 203. We'll cover topics from Modules 1-5.
                                </p>
                                <p class="text-xs text-tertiary-text">
                                    Posted: May 20, 2025 by Professor Eleanor Vance
                                </p>
                            </li>

                        </ul>
                    </div>
                </section>
            </x-tab-content>
        </x-tab>
    </div>
@endsection
