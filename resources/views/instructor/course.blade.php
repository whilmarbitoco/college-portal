@extends('layouts.instructor')

@section('content')
    <div>

        <x-header head="My Courses" body="Overview of the courses your teaching" />

        <x-card>
            <h2 class="mb-6 text-2xl font-semibold text-primary-text">
                Currently Teaching
            </h2>


            <x-table>
                <x-table-head>
                    <x-table-cell name="Course Name" />
                    <x-table-cell name="Course Code" />
                    <x-table-cell name="Cluster" />
                    <x-table-cell name="Action" />
                </x-table-head>
                <x-table-body>

                    <x-table-item>
                        <x-table-data>Introduction to Web Development</x-table-data>
                        <x-table-data>CS101</x-table-data>
                        <x-table-data>Cluster I</x-table-data>
                        <x-table-data>
                            <a href="/student/course/1" class="button-text text-accent hover:text-accent-light">
                                Details</a>
                        </x-table-data>
                    </x-table-item>
                </x-table-body>
            </x-table>


        </x-card>
    </div>
@endsection
