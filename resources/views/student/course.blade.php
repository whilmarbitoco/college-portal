@extends('layouts.student')

@section('content')
    <div>
        <x-header head="My Courses" body="Courses you are currently enrolled" />

        <x-tab>
            <x-tab-head>
                <x-tab-item name="Enrolled" tab="default" />
                <x-tab-item name="Finished" tab="finished-course" />
                <x-tab-item name="Failed" tab="failed-course" />
            </x-tab-head>

            <x-tab-content id="default">
                <x-card>
                    <h2 class="mb-6 text-2xl font-semibold text-primary-text">
                        Currently Enrolled
                    </h2>
                    <x-table>
                        <x-table-head>
                            <x-table-cell name="Course Name" />
                            <x-table-cell name="Course Code" />
                            <x-table-cell name="Instructor" />
                            <x-table-cell name="Action" />
                        </x-table-head>
                        <x-table-body>

                            <x-table-item>
                                <x-table-data>Introduction to Computing</x-table-data>
                                <x-table-data>CS101</x-table-data>
                                <x-table-data>Prof. Jane Doe</x-table-data>
                                <x-table-data>
                                    <a href="/student/course/1" class="button-text text-accent hover:text-accent-light">
                                        View</a>
                                </x-table-data>
                            </x-table-item>
                        </x-table-body>
                    </x-table>
                </x-card>
            </x-tab-content>

            <x-tab-content id="finished-course">
                <h2 class="mb-6 text-2xl font-semibold text-primary-text">
                    Finished Courses
                </h2>
                <div class="flex-1 space-y-4">
                    <x-grade id="ac1" course="Advance Algorithm" code="CS101" instructor="Prof. Eleanor Vance" />
                    <x-grade id="ac2" course="Data Structure" code="CS101" instructor="Prof. Eleanor Vance" />
                </div>
            </x-tab-content>

            <x-tab-content id="failed-course">
                <p class="text-sm text-center shadow-sm text-success border-success-light">
                    Congratulations! You have no failed courses. Keep up the excellent work!
                </p>

            </x-tab-content>
        </x-tab>
    </div>
@endsection
