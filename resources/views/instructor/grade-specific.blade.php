@extends('layouts.instructor')

@section('content')
    <div>
        <x-header head="Gradebook" body="Advanced Algorithms (CS 401) - Instructor: Professor Eleanor Vance" />

        <section class="p-6 rounded-md shadow-md bg-secondary-bg">
            <div class="flex justify-between items-center">
                <h2 class="mb-6 text-2xl font-semibold text-primary-text">
                    Student Grades Overview
                </h2>
                <button class="button button-text text-accent hover:text-accent-light">
                    Save All
                </button>
            </div>

            <x-table>
                <x-table-head>
                    <x-table-cell name="Student Name" />
                    <x-table-cell name="Student ID" />
                    <x-table-cell name="Prelim" />
                    <x-table-cell name="Midterm" />
                    <x-table-cell name="Finals" />
                    <x-table-cell name="Overall" />
                    <x-table-cell name="Status" />
                </x-table-head>

                <x-table-body>

                    <x-table-item>
                        <x-table-data>Alice Johnson</x-table-data>
                        <x-table-data>2023-001</x-table-data>
                        <x-table-data>
                            <input type="number" min="0" max="100" value="92"
                                class="text-center w-15 form-input bg-primary-bg" />
                        </x-table-data>
                        <x-table-data>
                            <input type="number" min="0" max="100" value="92"
                                class="text-center w-15 form-input bg-primary-bg" />
                        </x-table-data>
                        <x-table-data>
                            <input type="number" min="0" max="100" value="92"
                                class="text-center w-15 form-input bg-primary-bg" />
                        </x-table-data>
                        <x-table-data>
                            <span class="px-6 py-4 font-bold text-accent">91.67</span>
                        </x-table-data>
                        <x-table-data>
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 text-xs font-medium rounded-full bg-success-light text-success">Complete</span>
                        </x-table-data>
                    </x-table-item>

                    <x-table-item>
                        <x-table-data>Alice Johnson</x-table-data>
                        <x-table-data>2023-001</x-table-data>
                        <x-table-data>
                            <input type="number" min="0" max="100" value="92"
                                class="text-center w-15 form-input bg-primary-bg" />
                        </x-table-data>
                        <x-table-data>
                            <input type="number" min="0" max="100" value="92"
                                class="text-center w-15 form-input bg-primary-bg" />
                        </x-table-data>
                        <x-table-data>
                            <input type="number" min="0" max="100" value="92"
                                class="text-center w-15 form-input bg-primary-bg" />
                        </x-table-data>
                        <x-table-data>
                            <span class="px-6 py-4 font-bold text-warning">Pending</span>
                        </x-table-data>
                        <x-table-data>
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 text-xs font-medium rounded-full bg-warning-light text-warning">Incomplete</span>

                        </x-table-data>
                    </x-table-item>
                </x-table-body>
            </x-table>
        </section>
    </div>
@endsection
