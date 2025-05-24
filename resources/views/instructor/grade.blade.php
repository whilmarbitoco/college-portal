@extends('layouts.instructor')

@section('content')
    <div>
        <x-header head="Courses" body="Overview of the courses your grading" />

        <div>
            <x-card>
                <div class="flex justify-between items-center cursor-pointer">
                    <div>
                        <a href="{{ route('instructor.grade.specific', ['id' => 1]) }}"
                            class="text-xl font-semibold text-primary-text hover:text-accent">
                            Data Structures and Algorithm
                            <span class="ml-2 text-base text-tertiary-text">(CS101)</span>
                        </a>
                        <div class="flex space-x-4">
                            <p class="text-sm text-tertiary-text"><span class="font-bold">Cluster:</span> Cluter I</p>
                            <p class="text-sm text-tertiary-text"><span class="font-bold">Year:</span> 2nd Year</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <span
                            class="px-2 py-1 ml-2 text-xs font-medium text-blue-400 bg-blue-200 rounded-full">Graded</span>

                    </div>
                </div>
            </x-card>
        </div>
    </div>
@endsection
