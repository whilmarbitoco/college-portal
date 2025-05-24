@extends('layouts.student')

@section('content')
    <div>
        <header class="flex justify-between items-center mb-6 md:mb-8">
            <div>
                <h1 class="text-3xl font-bold md:text-4xl text-primary-text">
                    Academic Transcript
                </h1>
                <p class="text-lg text-tertiary-text">
                    Your official record of courses and grades.
                </p>
            </div>

            <button onclick="window.print()" class="flex items-center button-text text-accent hover:text-accent-light">
                <svg class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M19 8H5c-1.66 0-3 1.34-3 3v6h4v4h12v-4h4v-6c0-1.66-1.34-3-3-3zm-3 11H8v-5h8v5zm3-7c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm1-9H4c-1.1 0-2 .9-2 2v2h20V4c0-1.1-.9-2-2-2z" />
                </svg>
                Print Transcript
            </button>

        </header>

        <x-card>
            <h2 class="mb-4 text-2xl font-semibold text-primary-text">
                Student Information
            </h2>
            <div class="grid grid-cols-1 gap-y-4 gap-x-8 sm:grid-cols-2 lg:grid-cols-3">
                <div>
                    <p class="text-sm font-medium text-tertiary-text">Student Name:</p>
                    <p class="font-semibold text-primary-text">Alex Johnson</p>
                </div>
                <div>
                    <p class="text-sm font-medium text-tertiary-text">Student ID:</p>
                    <p class="text-primary-text">2023001234</p>
                </div>
                <div>
                    <p class="text-sm font-medium text-tertiary-text">Program:</p>
                    <p class="text-primary-text">
                        Bachelor of Science in Computer Science
                    </p>
                </div>
                <div>
                    <p class="text-sm font-medium text-tertiary-text">Date of Birth:</p>
                    <p class="text-primary-text">January 15, 2005</p>
                </div>
                <div>
                    <p class="text-sm font-medium text-tertiary-text">Enrollment Date:</p>
                    <p class="text-primary-text">September 1, 2023</p>
                </div>
                <div>
                    <p class="text-sm font-medium text-tertiary-text">Status:</p>
                    <p class="text-primary-text">Active</p>
                </div>
            </div>
            <div class="pt-4 mt-6 border-t border-border">
                <p class="text-lg font-semibold text-primary-text">
                    Cumulative GPA: <span class="text-2xl text-accent">3.75</span>
                </p>
                <p class="text-lg font-semibold text-primary-text">
                    Total Earned Credits: <span class="text-2xl text-accent">60</span>
                </p>
            </div>
        </x-card>

        <section class="space-y-10">
            <div class="p-6 rounded-md shadow-md bg-secondary-bg">
                <h2 class="mb-4 text-2xl font-semibold text-primary-text">
                    Academic Year 2023-2024
                </h2>

                <h3 class="pb-2 mb-3 text-xl font-medium border-b text-primary-text border-border">
                    First Semester
                </h3>
                <div class="overflow-x-auto mb-6 rounded-md border table-container border-border">
                    <table class="table w-full border-collapse text-primary-text">
                        <thead class="table-header bg-primary-bg">
                            <tr>
                                <th
                                    class="py-3 px-6 text-left text-xs font-semibold text-primary-text uppercase tracking-wider min-w-[120px]">
                                    Course Code
                                </th>
                                <th
                                    class="py-3 px-6 text-left text-xs font-semibold text-primary-text uppercase tracking-wider min-w-[200px]">
                                    Course Title
                                </th>
                                <th
                                    class="py-3 px-6 text-left text-xs font-semibold text-primary-text uppercase tracking-wider min-w-[80px]">
                                    Units
                                </th>
                                <th
                                    class="py-3 px-6 text-left text-xs font-semibold text-primary-text uppercase tracking-wider min-w-[80px]">
                                    Grade
                                </th>
                                <th
                                    class="py-3 px-6 text-left text-xs font-semibold text-primary-text uppercase tracking-wider min-w-[80px]">
                                    Remarks
                                </th>
                            </tr>
                        </thead>
                        <tbody class="table-body">
                            <tr class="border-b table-row-hover border-border">
                                <td class="px-6 py-4 whitespace-nowrap">CS 101</td>
                                <td class="px-6 py-4">Introduction to Programming</td>
                                <td class="px-6 py-4">3</td>
                                <td class="px-6 py-4">1.0</td>
                                <td class="px-6 py-4 text-success">Passed</td>
                            </tr>
                            <tr class="border-b table-row-hover border-border">
                                <td class="px-6 py-4 whitespace-nowrap">MATH 101</td>
                                <td class="px-6 py-4">College Algebra</td>
                                <td class="px-6 py-4">3</td>
                                <td class="px-6 py-4">1.25</td>
                                <td class="px-6 py-4 text-success">Passed</td>
                            </tr>
                            <tr class="border-b table-row-hover border-border">
                                <td class="px-6 py-4 whitespace-nowrap">GE 101</td>
                                <td class="px-6 py-4">Understanding the Self</td>
                                <td class="px-6 py-4">3</td>
                                <td class="px-6 py-4">1.5</td>
                                <td class="px-6 py-4 text-success">Passed</td>
                            </tr>
                            <tr class="table-row-hover">
                                <td class="px-6 py-4 whitespace-nowrap">PE 1</td>
                                <td class="px-6 py-4">Physical Education 1</td>
                                <td class="px-6 py-4">2</td>
                                <td class="px-6 py-4">1.0</td>
                                <td class="px-6 py-4 text-success">Passed</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="text-sm text-right text-tertiary-text">
                    Semester GPA:
                    <span class="font-semibold text-primary-text">1.23</span> | Earned
                    Credits: <span class="font-semibold text-primary-text">11</span>
                </div>

                <h3 class="pb-2 mt-8 mb-3 text-xl font-medium border-b text-primary-text border-border">
                    Second Semester
                </h3>
                <div class="overflow-x-auto mb-6 rounded-md border table-container border-border">
                    <table class="table w-full border-collapse text-primary-text">
                        <thead class="table-header bg-primary-bg">
                            <tr>
                                <th
                                    class="py-3 px-6 text-left text-xs font-semibold text-primary-text uppercase tracking-wider min-w-[120px]">
                                    Course Code
                                </th>
                                <th
                                    class="py-3 px-6 text-left text-xs font-semibold text-primary-text uppercase tracking-wider min-w-[200px]">
                                    Course Title
                                </th>
                                <th
                                    class="py-3 px-6 text-left text-xs font-semibold text-primary-text uppercase tracking-wider min-w-[80px]">
                                    Units
                                </th>
                                <th
                                    class="py-3 px-6 text-left text-xs font-semibold text-primary-text uppercase tracking-wider min-w-[80px]">
                                    Grade
                                </th>
                                <th
                                    class="py-3 px-6 text-left text-xs font-semibold text-primary-text uppercase tracking-wider min-w-[80px]">
                                    Remarks
                                </th>
                            </tr>
                        </thead>
                        <tbody class="table-body">
                            <tr class="border-b table-row-hover border-border">
                                <td class="px-6 py-4 whitespace-nowrap">CS 102</td>
                                <td class="px-6 py-4">Data Structures and Algorithms</td>
                                <td class="px-6 py-4">3</td>
                                <td class="px-6 py-4">1.25</td>
                                <td class="px-6 py-4 text-success">Passed</td>
                            </tr>
                            <tr class="border-b table-row-hover border-border">
                                <td class="px-6 py-4 whitespace-nowrap">IT 205</td>
                                <td class="px-6 py-4">Database Management Systems</td>
                                <td class="px-6 py-4">3</td>
                                <td class="px-6 py-4">1.75</td>
                                <td class="px-6 py-4 text-success">Passed</td>
                            </tr>
                            <tr class="border-b table-row-hover border-border">
                                <td class="px-6 py-4 whitespace-nowrap">GE 102</td>
                                <td class="px-6 py-4">Readings in Philippine History</td>
                                <td class="px-6 py-4">3</td>
                                <td class="px-6 py-4">1.5</td>
                                <td class="px-6 py-4 text-success">Passed</td>
                            </tr>
                            <tr class="table-row-hover">
                                <td class="px-6 py-4 whitespace-nowrap">PE 2</td>
                                <td class="px-6 py-4">Physical Education 2</td>
                                <td class="px-6 py-4">2</td>
                                <td class="px-6 py-4">1.0</td>
                                <td class="px-6 py-4 text-success">Passed</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="text-sm text-right text-tertiary-text">
                    Semester GPA:
                    <span class="font-semibold text-primary-text">1.46</span> | Earned
                    Credits: <span class="font-semibold text-primary-text">11</span>
                </div>
            </div>

            <div class="p-6 mb-6 rounded-md shadow-md bg-secondary-bg">
                <h2 class="mb-4 text-2xl font-semibold text-primary-text">
                    Academic Year 2024-2025
                </h2>

                <h3 class="pb-2 mb-3 text-xl font-medium border-b text-primary-text border-border">
                    First Semester
                </h3>
                <div class="overflow-x-auto mb-6 rounded-md border table-container border-border">
                    <table class="table w-full border-collapse text-primary-text">
                        <thead class="table-header bg-primary-bg">
                            <tr>
                                <th
                                    class="py-3 px-6 text-left text-xs font-semibold text-primary-text uppercase tracking-wider min-w-[120px]">
                                    Course Code
                                </th>
                                <th
                                    class="py-3 px-6 text-left text-xs font-semibold text-primary-text uppercase tracking-wider min-w-[200px]">
                                    Course Title
                                </th>
                                <th
                                    class="py-3 px-6 text-left text-xs font-semibold text-primary-text uppercase tracking-wider min-w-[80px]">
                                    Units
                                </th>
                                <th
                                    class="py-3 px-6 text-left text-xs font-semibold text-primary-text uppercase tracking-wider min-w-[80px]">
                                    Grade
                                </th>
                                <th
                                    class="py-3 px-6 text-left text-xs font-semibold text-primary-text uppercase tracking-wider min-w-[80px]">
                                    Remarks
                                </th>
                            </tr>
                        </thead>
                        <tbody class="table-body">
                            <tr class="border-b table-row-hover border-border">
                                <td class="px-6 py-4 whitespace-nowrap">CS 203</td>
                                <td class="px-6 py-4">Object-Oriented Programming</td>
                                <td class="px-6 py-4">3</td>
                                <td class="px-6 py-4">1.0</td>
                                <td class="px-6 py-4 text-success">Passed</td>
                            </tr>
                            <tr class="border-b table-row-hover border-border">
                                <td class="px-6 py-4 whitespace-nowrap">CS 204</td>
                                <td class="px-6 py-4">Discrete Mathematics</td>
                                <td class="px-6 py-4">3</td>
                                <td class="px-6 py-4">1.5</td>
                                <td class="px-6 py-4 text-success">Passed</td>
                            </tr>
                            <tr class="border-b table-row-hover border-border">
                                <td class="px-6 py-4 whitespace-nowrap">GE 103</td>
                                <td class="px-6 py-4">The Contemporary World</td>
                                <td class="px-6 py-4">3</td>
                                <td class="px-6 py-4">1.25</td>
                                <td class="px-6 py-4 text-success">Passed</td>
                            </tr>
                            <tr class="table-row-hover">
                                <td class="px-6 py-4 whitespace-nowrap">PE 3</td>
                                <td class="px-6 py-4">Physical Education 3</td>
                                <td class="px-6 py-4">2</td>
                                <td class="px-6 py-4">1.0</td>
                                <td class="px-6 py-4 text-success">Passed</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="text-sm text-right text-tertiary-text">
                    Semester GPA:
                    <span class="font-semibold text-primary-text">1.19</span> | Earned
                    Credits: <span class="font-semibold text-primary-text">11</span>
                </div>

                <h3 class="pb-2 mt-8 mb-3 text-xl font-medium border-b text-primary-text border-border">
                    Second Semester (Current)
                </h3>
                <div class="overflow-x-auto mb-6 rounded-md border table-container border-border">
                    <table class="table w-full border-collapse text-primary-text">
                        <thead class="table-header bg-primary-bg">
                            <tr>
                                <th
                                    class="py-3 px-6 text-left text-xs font-semibold text-primary-text uppercase tracking-wider min-w-[120px]">
                                    Course Code
                                </th>
                                <th
                                    class="py-3 px-6 text-left text-xs font-semibold text-primary-text uppercase tracking-wider min-w-[200px]">
                                    Course Title
                                </th>
                                <th
                                    class="py-3 px-6 text-left text-xs font-semibold text-primary-text uppercase tracking-wider min-w-[80px]">
                                    Units
                                </th>
                                <th
                                    class="py-3 px-6 text-left text-xs font-semibold text-primary-text uppercase tracking-wider min-w-[80px]">
                                    Grade
                                </th>
                                <th
                                    class="py-3 px-6 text-left text-xs font-semibold text-primary-text uppercase tracking-wider min-w-[80px]">
                                    Remarks
                                </th>
                            </tr>
                        </thead>
                        <tbody class="table-body">
                            <tr class="border-b table-row-hover border-border">
                                <td class="px-6 py-4 whitespace-nowrap">CS 401</td>
                                <td class="px-6 py-4">Advanced Algorithms</td>
                                <td class="px-6 py-4">3</td>
                                <td class="px-6 py-4">1.0</td>
                                <td class="px-6 py-4 text-success">Passed</td>
                            </tr>
                            <tr class="border-b table-row-hover border-border">
                                <td class="px-6 py-4 whitespace-nowrap">IT 301</td>
                                <td class="px-6 py-4">Web Development</td>
                                <td class="px-6 py-4">3</td>
                                <td class="px-6 py-4">--</td>
                                <td class="px-6 py-4 text-info">In Progress</td>
                            </tr>
                            <tr class="border-b table-row-hover border-border">
                                <td class="px-6 py-4 whitespace-nowrap">GE 104</td>
                                <td class="px-6 py-4">Ethics</td>
                                <td class="px-6 py-4">3</td>
                                <td class="px-6 py-4">--</td>
                                <td class="px-6 py-4 text-info">In Progress</td>
                            </tr>
                            <tr class="table-row-hover">
                                <td class="px-6 py-4 whitespace-nowrap">PE 4</td>
                                <td class="px-6 py-4">Physical Education 4</td>
                                <td class="px-6 py-4">2</td>
                                <td class="px-6 py-4">--</td>
                                <td class="px-6 py-4 text-info">In Progress</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="text-sm text-right text-tertiary-text">
                    Semester GPA:
                    <span class="font-semibold text-primary-text">N/A (In Progress)</span>
                    | Earned Credits:
                    <span class="font-semibold text-primary-text">3 (so far)</span>
                </div>
            </div>

            <div class="p-6 text-sm rounded-md shadow-md bg-secondary-bg text-tertiary-text">
                <h3 class="mb-2 text-lg font-semibold text-primary-text">
                    Grading System Legend:
                </h3>
                <div class="grid grid-cols-2 gap-2 md:grid-cols-3">
                    <p>
                        <span class="font-semibold text-primary-text">1.00:</span> Excellent
                    </p>
                    <p>
                        <span class="font-semibold text-primary-text">1.25:</span> Very Good
                    </p>
                    <p><span class="font-semibold text-primary-text">1.50:</span> Good</p>
                    <p>
                        <span class="font-semibold text-primary-text">1.75:</span> Very
                        Satisfactory
                    </p>
                    <p>
                        <span class="font-semibold text-primary-text">2.00:</span>
                        Satisfactory
                    </p>
                    <p>
                        <span class="font-semibold text-primary-text">2.25:</span> Fairly
                        Satisfactory
                    </p>
                    <p>
                        <span class="font-semibold text-primary-text">2.50:</span> Passed
                    </p>
                    <p>
                        <span class="font-semibold text-primary-text">2.75:</span>
                        Conditional Passed
                    </p>
                    <p>
                        <span class="font-semibold text-primary-text">3.00:</span> Barely
                        Passed
                    </p>
                    <p>
                        <span class="font-semibold text-primary-text">5.00:</span> Failed
                    </p>
                    <p>
                        <span class="font-semibold text-primary-text">INC:</span> Incomplete
                    </p>
                    <p>
                        <span class="font-semibold text-primary-text">DRP:</span> Dropped
                    </p>
                    <p>
                        <span class="font-semibold text-primary-text">W:</span> Withdrawn
                    </p>
                </div>
                <p class="mt-4">
                    Cumulative GPA is calculated based on all completed, graded courses.
                </p>
            </div>
        </section>
    </div>
@endsection
