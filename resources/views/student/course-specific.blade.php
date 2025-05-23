@extends('layouts.student')

@section('content')
    <div>
        <x-header head="Advanced Algorithms" body="CS 401 - Instructor: Prof. Eleanor Vance" />

        <x-tab>
            <x-tab-item name="Overview" tab="tab1" />
            <x-tab-item name="Announcement" tab="tab2" />
            <x-tab-item name="Grade" tab="tab3" />
            <x-tab-item name="Attendance" tab="tab4" />
        </x-tab>

        <x-tab-body>
            <x-tab-content id="tab1">
                <x-card>
                    <h2 class="mb-6 text-2xl font-semibold text-primary-text">
                        Schedule Overview
                    </h2>
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 text-primary-text">
                        <div>
                            <p class="text-tertiary-text">Class Time(s) & Day(s):</p>
                            <p class="text-lg font-medium">
                                Mon, Wed, Fri | 10:00 AM - 11:30 AM
                            </p>
                        </div>
                        <div>
                            <p class="text-tertiary-text">Room / Venue:</p>
                            <p class="text-lg font-medium">CS Building, Room 305</p>
                        </div>
                        <div>
                            <p class="text-tertiary-text">Duration / Units:</p>
                            <p class="text-lg font-medium">1.5 hours / 3 Units</p>
                        </div>
                    </div>
                </x-card>
            </x-tab-content>

            <x-tab-content id="tab2">
                <x-card>
                    <h2 class="mb-6 text-2xl font-semibold text-primary-text">
                        Course Announcements
                    </h2>
                    <div class="space-y-4">
                        <div class="p-4 rounded-md border bg-primary-bg border-border">
                            <h3 class="mb-1 text-lg font-semibold text-primary-text">
                                Project 1 Grading Update
                            </h3>
                            <p class="mb-2 text-sm text-tertiary-text">
                                Posted: May 22, 2025 at 10:30 AM
                            </p>
                            <p class="text-secondary-text line-clamp-2">
                                Dear students, Project 1 grades have been finalized and are now
                                available in the Grades section. Please review your feedback
                                carefully...
                            </p>
                            <button class="mt-2 text-sm button-text text-accent">
                                Read More
                            </button>
                        </div>
                        <div class="p-4 rounded-md border bg-primary-bg border-border">
                            <h3 class="mb-1 text-lg font-semibold text-primary-text">
                                Midterm Exam Review Session
                            </h3>
                            <p class="mb-2 text-sm text-tertiary-text">
                                Posted: May 15, 2025 at 03:00 PM
                            </p>
                            <p class="text-secondary-text line-clamp-2">
                                A review session for the upcoming midterm exam will be held on
                                Monday, May 19th, from 5:00 PM to 6:30 PM in Room 305...
                            </p>
                            <button class="mt-2 text-sm button-text text-accent">
                                Read More
                            </button>
                        </div>
                        <div class="p-4 rounded-md border bg-primary-bg border-border">
                            <h3 class="mb-1 text-lg font-semibold text-primary-text">
                                Welcome to Advanced Algorithms!
                            </h3>
                            <p class="mb-2 text-sm text-tertiary-text">
                                Posted: May 01, 2025 at 09:00 AM
                            </p>
                            <p class="text-secondary-text line-clamp-2">
                                Welcome to CS 401! This course will explore advanced concepts in
                                algorithm design and analysis. Please make sure to read the
                                syllabus...
                            </p>
                            <button class="mt-2 text-sm button-text text-accent">
                                Read More
                            </button>
                        </div>
                    </div>
                </x-card>
            </x-tab-content>

            <x-tab-content id="tab3">
                <x-card>
                    <h2 class="mb-6 text-2xl font-semibold text-primary-text">My Grades</h2>

                    <div class="mb-6">
                        <p class="text-lg font-medium text-tertiary-text">
                            Current Overall Grade:
                            <span class="ml-2 text-3xl font-bold text-accent">91.67%</span>
                        </p>
                    </div>

                    <x-table>
                        <x-table-head>
                            <x-table-cell name="Item" />
                            <x-table-cell name="Score" />
                            <x-table-cell name="Max Score" />
                            <x-table-cell name="Weight (%)" />
                        </x-table-head>
                        <x-table-body>
                            <x-table-item>
                                <x-table-data>Prelim</x-table-data>
                                <x-table-data>91</x-table-data>
                                <x-table-data>100</x-table-data>
                                <x-table-data>20
                                </x-table-data>
                            </x-table-item>
                            <x-table-item>
                                <x-table-data>Prelim</x-table-data>
                                <x-table-data>91</x-table-data>
                                <x-table-data>100</x-table-data>
                                <x-table-data>20
                                </x-table-data>
                            </x-table-item>
                        </x-table-body>
                    </x-table>
                </x-card>
            </x-tab-content>

            <x-tab-content id="tab4">
                <section class="p-6 rounded-md shadow-md bg-secondary-bg">
                    <h2 class="mb-6 text-2xl font-semibold text-primary-text">
                        Course Attendance
                    </h2>

                    <x-table>
                        <x-table-head>
                            <x-table-cell name="Course" />
                            <x-table-cell name="Date" />
                            <x-table-cell name="Status" />
                        </x-table-head>
                        <x-table-body>
                            <x-table-item>
                                <x-table-data> Advanced Algorithms </x-table-data>
                                <x-table-data>2025-04-01</x-table-data>
                                <x-table-data>
                                    <span
                                        class="inline-flex px-2 py-1 text-xs font-semibold leading-5 text-gray-400 bg-gray-700 rounded-full">Absent</span>
                                    </td>
                                </x-table-data>

                            </x-table-item>
                        </x-table-body>
                    </x-table>
                </section>
            </x-tab-content>

        </x-tab-body>
    </div>
@endsection
