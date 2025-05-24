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

        <x-tab>
            <x-tab-head>
                <x-tab-item name="First Semester" tab="default" />
                <x-tab-item name="Second Semester" tab="sem2" />
            </x-tab-head>

            <x-tab-content id="default">
                <div class="flex-1 space-y-4">
                    <x-grade id="ac1" course="Advance Algorithm" code="CS101" instructor="Prof. Eleanor Vance" />
                    <x-grade id="ac2" course="Data Structure" code="CS101" instructor="Prof. Eleanor Vance" />
                </div>
            </x-tab-content>
            <x-tab-content id="sem2">
                <div class="flex-1 space-y-4">
                    <x-grade id="ac1" course="Database Management" code="CS101" instructor="Prof. Eleanor Vance" />
                    <x-grade id="ac2" course="Software Development" code="CS101" instructor="Prof. Eleanor Vance" />
                </div>
            </x-tab-content>
        </x-tab>
    </div>
@endsection
