@extends('layouts.admin')

@section('content')
    <div>
        <x-header head="User Management" body="Manage User and Account" />

        <x-tab>
            <x-tab-head>
                <x-tab-item name="Student" tab="default" />
                <x-tab-item name="Instructor" tab="user2" />
                <x-tab-item name="Admin" tab="user3" />
            </x-tab-head>

            <x-tab-content id="default">
                <x-card>
                    <div class="flex justify-between items-center">
                        <h2 class="mb-6 text-2xl font-semibold text-primary-text">
                            Active Student
                        </h2>
                        <form>
                            <button class="text-yellow-500 button button-text">
                                Archived Student
                            </button>
                        </form>
                    </div>
                    <x-table>
                        <x-table-head>
                            <x-table-cell name="Student ID" />
                            <x-table-cell name="Student Name" />
                            <x-table-cell name="Student Email" />
                            <x-table-cell name="Enrolled Program" />
                            <x-table-cell name="Action" />
                        </x-table-head>
                        <x-table-body>
                            <x-table-item>
                                <x-table-data>2023-001</x-table-data>
                                <x-table-data>Alice Johnson</x-table-data>
                                <x-table-data>alice@gmail.com</x-table-data>
                                <x-table-data>
                                    BSCS
                                </x-table-data>
                                <x-table-data>
                                    <a href="#"
                                        class="font-medium no-underline transition-colors text-accent hover:text-accent-light">Edit</a>
                                    <a href="#"
                                        class="ml-4 font-medium text-yellow-500 no-underline transition-colors hover:text-yellow-600">Reset</a>
                                    <a href="#"
                                        class="ml-4 font-medium text-red-600 no-underline transition-colors hover:text-red-700">Delete</a>

                                </x-table-data>
                            </x-table-item>
                        </x-table-body>
                    </x-table>


                </x-card>
            </x-tab-content>
            <x-tab-content id="user2">
                <x-card>
                    <div class="flex justify-between items-center">
                        <h2 class="mb-6 text-2xl font-semibold text-primary-text">
                            Active Instructor
                        </h2>
                        <form>
                            <button class="text-yellow-500 button button-text">
                                Archived Instructor
                            </button>
                        </form>
                    </div>
                    <x-table>
                        <x-table-head>
                            <x-table-cell name="Instructor ID" />
                            <x-table-cell name="Instructor Name" />
                            <x-table-cell name="Instructor Email" />
                            <x-table-cell name="Program Teaching" />
                            <x-table-cell name="Action" />
                        </x-table-head>
                        <x-table-body>
                            <x-table-item>
                                <x-table-data>2023-001</x-table-data>
                                <x-table-data>Alice Johnson</x-table-data>
                                <x-table-data>alice@gmail.com</x-table-data>
                                <x-table-data>
                                    BSCS
                                </x-table-data>
                                <x-table-data>
                                    <a href="#"
                                        class="font-medium no-underline transition-colors text-accent hover:text-accent-light">Edit</a>
                                    <a href="#"
                                        class="ml-4 font-medium text-yellow-500 no-underline transition-colors hover:text-yellow-600">Reset</a>
                                    <a href="#"
                                        class="ml-4 font-medium text-red-600 no-underline transition-colors hover:text-red-700">Delete</a>

                                </x-table-data>
                            </x-table-item>
                        </x-table-body>
                    </x-table>


                </x-card>
            </x-tab-content>
            <x-tab-content id="user3">
                <x-card>
                    <x-table>
                        <x-table-head>
                            <x-table-cell name="Admin ID" />
                            <x-table-cell name="Admin Name" />
                            <x-table-cell name="Admin Email" />
                            <x-table-cell name="Action" />
                        </x-table-head>
                        <x-table-body>
                            <x-table-item>
                                <x-table-data>2023-001</x-table-data>
                                <x-table-data>Alice Johnson</x-table-data>
                                <x-table-data>alice@gmail.com</x-table-data>
                                <x-table-data>
                                    <a href="#"
                                        class="font-medium no-underline transition-colors text-accent hover:text-accent-light">Edit</a>
                                    <a href="#"
                                        class="ml-4 font-medium text-yellow-500 no-underline transition-colors hover:text-yellow-600">Reset</a>
                                    <a href="#"
                                        class="ml-4 font-medium text-red-600 no-underline transition-colors hover:text-red-700">Delete</a>

                                </x-table-data>
                            </x-table-item>
                        </x-table-body>
                    </x-table>


                </x-card>
            </x-tab-content>

        </x-tab>

    </div>
@endsection
