@extends('layouts.student')

@section('content')
    <div>

        <x-header head="Welcome, Alex Johnson!" body="">
            <div class="flex items-center space-x-4">
                {{-- {{ route('profile') }} --}}
                <a href="#"
                    class="flex justify-center items-center w-10 h-10 text-lg font-semibold rounded-full bg-accent text-primary-text"
                    aria-label="User Profile">
                    AJ
                </a>
            </div>
        </x-header>



        <section class="grid grid-cols-1 gap-6 lg:grid-cols-2 xl:grid-cols-3">
            <x-card>
                <h2 class="mb-4 text-xl font-semibold card-title">Enrolled Courses</h2>
                <ul class="space-y-3">
                    <li class="flex justify-between items-center text-base">
                        <span>Introduction to Web Development</span>
                        <span class="text-sm text-tertiary-text">CS 101</span>
                    </li>
                    <li class="flex justify-between items-center text-base">
                        <span>Database Management Systems</span>
                        <span class="text-sm text-tertiary-text">IT 205</span>
                    </li>
                    <li class="flex justify-between items-center text-base">
                        <span>Object-Oriented Programming</span>
                        <span class="text-sm text-tertiary-text">CS 203</span>
                    </li>
                    <li class="flex justify-between items-center text-base">
                        <span>Calculus I</span>
                        <span class="text-sm text-tertiary-text">MA 101</span>
                    </li>
                </ul>
                <button class="mt-4 button button-text text-accent">
                    View All Courses
                </button>
            </x-card>

            <x-card>
                <h2 class="mb-4 text-xl font-semibold card-title">
                    Upcoming Classes (Today)
                </h2>
                <ul class="space-y-4">
                    <li class="flex items-center">
                        <div class="flex-shrink-0 mr-3 w-2 h-2 rounded-full bg-accent"></div>
                        <div>
                            <p class="text-base font-medium">
                                Object-Oriented Programming (CS 203)
                            </p>
                            <p class="text-sm text-tertiary-text">
                                10:00 AM - 11:30 AM | Room 201 | Professor Smith
                            </p>
                        </div>
                    </li>
                    <li class="flex items-center">
                        <div class="flex-shrink-0 mr-3 w-2 h-2 rounded-full bg-accent"></div>
                        <div>
                            <p class="text-base font-medium">
                                Database Management Systems (IT 205)
                            </p>
                            <p class="text-sm text-tertiary-text">
                                2:00 PM - 3:30 PM | Lab 3 | Professor Garcia
                            </p>
                        </div>
                    </li>
                </ul>
                <button class="mt-4 button button-text text-accent">
                    View Full Weekly Schedule
                </button>
            </x-card>

            <x-card>
                <h2 class="mb-4 text-xl font-semibold card-title">Current GPA</h2>
                <div class="flex justify-between items-baseline mb-2">
                    <span class="text-4xl font-bold text-accent">3.85</span>
                    <span class="text-sm text-tertiary-text">out of 4.0</span>
                </div>
                <p class="text-sm text-primary-text">
                    No new grade alerts. Keep up the great work!
                </p>
                <button class="mt-4 button button-text text-accent">
                    View Full Transcript
                </button>
            </x-card>

            <x-card>
                <h2 class="mb-4 text-xl font-semibold card-title">
                    Latest Announcements
                </h2>
                <ul class="space-y-4">
                    <li class="pb-3 border-b border-border last:border-b-0">
                        <p class="text-base font-medium">
                            <span class="text-accent">Important:</span> Midterm Exam Schedule
                            Release
                        </p>
                        <p class="mt-1 text-sm text-tertiary-text">
                            The updated midterm exam schedule for all departments is now
                            available on the portal. Please check your course pages for
                            details.
                        </p>
                        <p class="mt-2 text-xs text-tertiary-text">
                            May 20, 2025 | Department of Academics
                        </p>
                    </li>
                    <li class="pb-3 border-b border-border last:border-b-0">
                        <p class="text-base font-medium">
                            Campus-wide Maintenance Advisory
                        </p>
                        <p class="mt-1 text-sm text-tertiary-text">
                            Network services will experience intermittent disruptions on May
                            25 from 10 PM to 2 AM for scheduled maintenance.
                        </p>
                        <p class="mt-2 text-xs text-tertiary-text">
                            May 18, 2025 | IT Department
                        </p>
                    </li>
                </ul>
                <button class="mt-4 button button-text text-accent">
                    View All Announcements
                </button>
            </x-card>
        </section>
    </div>
@endsection
