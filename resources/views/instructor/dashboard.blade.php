@extends('layouts.instructor')

@section('content')
    <x-header head=" Welcome, Professor Eleanor Vance!" body="">
        <div class="flex items-center space-x-4">
            {{-- {{ route('profile') }} --}}
            <a href="#"
                class="flex justify-center items-center w-10 h-10 text-lg font-semibold rounded-full bg-accent text-primary-text"
                aria-label="User Profile">
                EV
            </a>
        </div>
    </x-header>


    <section class="grid grid-cols-1 gap-6 lg:grid-cols-2 xl:grid-cols-3">
        <x-card>
            <h2 class="mb-4 text-xl font-semibold card-title">Courses Teaching</h2>
            <ul class="space-y-3">
                <li class="flex justify-between items-center text-base">
                    <span>Advanced Algorithms</span>
                    <span class="text-sm text-tertiary-text">CS 401</span>
                </li>
                <li class="flex justify-between items-center text-base">
                    <span>Machine Learning Fundamentals</span>
                    <span class="text-sm text-tertiary-text">AI 302</span>
                </li>
                <li class="flex justify-between items-center text-base">
                    <span>Data Structures</span>
                    <span class="text-sm text-tertiary-text">CS 301</span>
                </li>
            </ul>
            <button class="mt-4 button button-text text-accent">
                Manage All Courses
            </button>
        </x-card>

        <x-card>
            <h2 class="mb-4 text-xl font-semibold card-title">Attendance Status</h2>
            <div class="space-y-3">
                <div class="flex justify-between items-center">
                    <span>Advanced Algorithms (CS 401)</span>
                    <span class="text-sm font-medium text-success">Marked Today</span>
                </div>
                <div class="flex justify-between items-center">
                    <span>Machine Learning (AI 302)</span>
                    <span class="text-sm font-medium text-warning">Pending</span>
                </div>
                <div class="flex justify-between items-center">
                    <span>Data Structures (CS 301)</span>
                    <span class="text-sm font-medium text-success">Marked Yesterday</span>
                </div>
            </div>
            <button class="mt-4 button button-primary">
                Mark Attendance for AI 302
            </button>
        </x-card>

        <x-card>
            <h2 class="mb-4 text-xl font-semibold card-title">
                Unsubmitted Grades
            </h2>
            <div class="space-y-3">
                <div class="flex justify-between items-center">
                    <span>CS 401 - Assignment 2</span>
                    <span class="text-sm font-medium text-danger">35 Students</span>
                </div>
                <div class="flex justify-between items-center">
                    <span>AI 302 - Quiz 1</span>
                    <span class="text-sm font-medium text-danger">28 Students</span>
                </div>
            </div>
            <p class="mt-3 text-sm text-tertiary-text">
                Please review and submit grades for these pending items.
            </p>
            <button class="mt-4 button button-primary">Go to Gradebook</button>
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
                            Machine Learning Fundamentals (AI 302)
                        </p>
                        <p class="text-sm text-tertiary-text">
                            1:00 PM - 2:30 PM | Room 405 | Lab Session
                        </p>
                    </div>
                </li>
                <li class="flex items-center">
                    <div class="flex-shrink-0 mr-3 w-2 h-2 rounded-full bg-accent"></div>
                    <div>
                        <p class="text-base font-medium">Advanced Algorithms (CS 401)</p>
                        <p class="text-sm text-tertiary-text">
                            3:00 PM - 4:30 PM | Online | Lecture
                        </p>
                    </div>
                </li>
            </ul>
            <button class="mt-4 button button-text text-accent">
                View Full Teaching Schedule
            </button>
        </x-card>
    </section>
@endsection
