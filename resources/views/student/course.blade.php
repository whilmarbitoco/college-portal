@extends('layouts.student')

@section('content')
    <div>
        <x-header head="My Courses" body="Courses you are currently enrolled" />
        <section class="p-6 rounded-md shadow-md bg-secondary-bg">
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
        </section>
    </div>
@endsection
