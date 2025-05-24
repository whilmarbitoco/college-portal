@extends('layouts.admin')

@section('content')
    <div>
        <x-header head="System Logs" body="Monitor system activities and events" />

        <x-card>
            <h2 class="mb-4 text-2xl font-semibold text-primary-text">
                Filter Logs
            </h2>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                <div>
                    <label for="log-type-filter" class="block mb-1 text-sm font-medium text-tertiary-text">Event Type</label>
                    <select id="log-type-filter"
                        class="px-3 py-2 w-full rounded-md border transition-all outline-none bg-secondary-bg text-primary-text border-border placeholder:text-tertiary-text placeholder:opacity-70 focus:border-accent focus:shadow-focus-accent disabled:bg-gray-700 disabled:text-gray-400 disabled:cursor-not-allowed disabled:border-gray-700">
                        <option value="">All Types</option>
                        <option value="user_management">User Management</option>
                        <option value="course_management">Course Management</option>
                        <option value="grade_updates">Grade Updates</option>
                        <option value="system_events">System Events</option>
                        <option value="security">Security</option>
                    </select>
                </div>
                <div>
                    <label for="log-user-filter"
                        class="block mb-1 text-sm font-medium text-tertiary-text">User/Actor</label>
                    <input type="text" id="log-user-filter"
                        class="px-3 py-2 w-full rounded-md border transition-all outline-none bg-secondary-bg text-primary-text border-border placeholder:text-tertiary-text placeholder:opacity-70 focus:border-accent focus:shadow-focus-accent disabled:bg-gray-700 disabled:text-gray-400 disabled:cursor-not-allowed disabled:border-gray-700"
                        placeholder="e.g., Alex Johnson, Admin" />
                </div>
                <div>
                    <label for="log-date-filter" class="block mb-1 text-sm font-medium text-tertiary-text">Date
                        Range</label>
                    <input type="date" id="log-date-filter"
                        class="px-3 py-2 w-full rounded-md border transition-all outline-none bg-secondary-bg text-primary-text border-border placeholder:text-tertiary-text placeholder:opacity-70 focus:border-accent focus:shadow-focus-accent disabled:bg-gray-700 disabled:text-gray-400 disabled:cursor-not-allowed disabled:border-gray-700" />
                </div>
            </div>
            <div class="mt-6 text-right">
                <button
                    class="inline-flex justify-center items-center px-4 py-2 font-semibold no-underline bg-transparent rounded-md border border-none transition-colors cursor-pointer outline-none text-accent border-accent hover:bg-accent hover:text-primary-text active:bg-accent-darkest focus:shadow-focus-accent">
                    Reset Filters
                </button>
                <button
                    class="inline-flex justify-center items-center px-4 py-2 font-semibold no-underline rounded-md border-none transition-colors cursor-pointer outline-none bg-accent text-primary-text hover:bg-accent-darker active:bg-accent-darkest active:shadow-inner focus:shadow-focus-accent">Apply
                    Filters</button>
            </div>
        </x-card>

        <div class="mt-8">
            <x-card>
                <h2 class="mb-4 text-2xl font-semibold text-primary-text">
                    Recent Log Entries
                </h2>

                <x-table>
                    <x-table-head>
                        <x-table-cell name="Timestamp" />
                        <x-table-cell name="Event type" />
                        <x-table-cell name="Actor" />
                        <x-table-cell name="Description" />
                    </x-table-head>
                    <x-table-body>
                        <x-table-item>
                            <x-table-data>2025-05-23 14:35:01</x-table-data>
                            <x-table-data>User Management</x-table-data>
                            <x-table-data>Admin (ID: 001)</x-table-data>
                            <x-table-data>
                                Created new student account: Jane Doe (ID: 20250001)
                            </x-table-data>
                        </x-table-item>
                        <x-table-item>
                            <x-table-data>2025-05-23 14:35:01</x-table-data>
                            <x-table-data>User Management</x-table-data>
                            <x-table-data>Admin (ID: 001)</x-table-data>
                            <x-table-data>
                                Created new student account: Jane Doe (ID: 20250001)
                            </x-table-data>
                        </x-table-item>
                        <x-table-item>
                            <x-table-data>2025-05-23 14:35:01</x-table-data>
                            <x-table-data>User Management</x-table-data>
                            <x-table-data>Admin (ID: 001)</x-table-data>
                            <x-table-data>
                                Created new student account: Jane Doe (ID: 20250001)
                            </x-table-data>
                        </x-table-item>
                    </x-table-body>
                </x-table>


                <div class="flex justify-between items-center mt-6 text-sm text-tertiary-text">
                    <span>Showing 1 to 6 of 100 entries</span>
                    <div class="flex space-x-2">
                        <button class="button-text text-accent hover:text-accent-light" disabled>
                            Previous
                        </button>
                        <button class="button-text text-accent hover:text-accent-light">
                            1
                        </button>
                        <button class="button-text text-accent hover:text-accent-light">
                            2
                        </button>
                        <button class="button-text text-accent hover:text-accent-light">
                            3
                        </button>
                        <button class="button-text text-accent hover:text-accent-light">
                            Next
                        </button>
                    </div>
                </div>
            </x-card>
        </div>
    </div>
@endsection
