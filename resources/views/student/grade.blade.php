@extends('layouts.student')

@section('content')
    <div>
        <div class="flex justify-between items-center mb-6 md:mb-8">
            <x-header head="My Grades" body="View your academic performance across all enrolled courses." />

            <div class="text-right">
                <p class="text-sm text-tertiary-text">Cumulative GPA (Current)</p>
                <p class="text-4xl font-bold text-accent">3.75</p>
            </div>
        </div>

        <div class="flex-1 space-y-4">
            <x-grade course="Advance Algorithm" code="CS101" instructor="Prof. Eleanor Vance" />
            <x-grade course="Advance Algorithm" code="CS101" instructor="Prof. Eleanor Vance" />
        </div>
    </div>
@endsection
