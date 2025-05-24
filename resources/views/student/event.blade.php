@extends('layouts.student')

@section('content')
    <div>
        <x-header head="Academic Events" body="Explore upcoming academic activities" />

        <section class="space-y-4">
            <x-event id="event1" event="University Holiday - Labor Day"
                content="Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore necessitatibus nisi, ex suscipit ab quam."
                type="Holiday" date="May 1, 2025" time="All Day" location="University-wide" />
        </section>
    </div>
@endsection
