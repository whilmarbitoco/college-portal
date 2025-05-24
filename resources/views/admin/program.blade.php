@extends('layouts.admin')

@section('content')
    <div>

        <x-header head="Manage Academic Programs" body="Oversee and update all undergraduate and graduate programs">
            <button
                class="inline-flex justify-center items-center px-4 py-2 font-semibold no-underline rounded-md border-none transition-colors cursor-pointer outline-none bg-accent text-primary-text hover:bg-accent-darker active:bg-accent-darkest active:shadow-inner focus:shadow-focus-accent">
                <svg class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" />
                </svg>
                Add New Program
            </button>
        </x-header>

        <x-card>
            <h2 class="mb-6 text-2xl font-semibold text-primary-text">
                All Programs
            </h2>

            <x-table>
                <x-table-head>
                    <x-table-cell name="Program Title" />
                    <x-table-cell name="Type" />
                    <x-table-cell name="Durationr" />
                    <x-table-cell name="Status" />
                    <x-table-cell name="Action" />
                </x-table-head>
                <x-table-body>
                    <x-table-item>
                        <x-table-data>Bachelor of Information in Communication Technology</x-table-data>
                        <x-table-data>Undergraduate</x-table-data>
                        <x-table-data>4 Years</x-table-data>
                        <x-table-data>
                            <span class="text-success">Active</span>
                        </x-table-data>
                        <x-table-data>
                            <a href="#"
                                class="font-medium no-underline transition-colors text-accent hover:text-accent-light">Edit</a>
                            <a href="#"
                                class="ml-4 font-medium text-red-600 no-underline transition-colors hover:text-red-700">Delete</a>

                        </x-table-data>
                    </x-table-item>
                </x-table-body>
            </x-table>


        </x-card>
    </div>
@endsection
