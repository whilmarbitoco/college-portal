@extends('layouts.admin')

@section('content')
    <div>
        <x-header head="Admin Dashboard" body="Overview of key academic metrics and system management" />

        <section class="grid grid-cols-1 gap-6 mb-8 md:grid-cols-2 lg:grid-cols-3">
            <x-admin-card head="Total Students" body="1,250">
                <svg class="w-10 h-10 text-accent" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                </svg>
            </x-admin-card>

            <x-admin-card head="Total Instructor" body="85">
                <svg class="w-10 h-10 text-success" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-4 0c1.66 0 2.99-1.34 2.99-3S13.66 5 12 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm0 2c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4zm4 0c-.73 0-1.4-.1-2.04-.29.98.63 1.76 1.48 2.27 2.49.29.59.48 1.25.56 1.95H22v-3c0-2.66-5.33-4-8-4z" />
                </svg>
            </x-admin-card>

            <x-admin-card head="Active Courses" body="120">
                <svg class="w-10 h-10 text-info" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M20 6h-4V4c0-1.1-.9-2-2-2h-4c-1.1 0-2 .9-2 2v2H4c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm-6-2h-4v2h4V4z" />
                </svg>
            </x-admin-card>

        </section>

        <div class="grid grid-cols-1 gap-4 px-4 py-4 md:grid-cols-3">
            <div class="col-span-2">
                <x-card>
                    <h2 class="mb-4 text-2xl font-semibold text-primary-text">Upcoming Events</h2>
                    <ul class="divide-y divide-border">
                        <li class="flex justify-between items-center py-3">
                            <div>
                                <p class="text-primary-text">
                                    <span class="font-medium">Enrollment Period Begins:</span> For Fall Semester.
                                </p>
                                <p class="text-xs text-tertiary-text">June 15, 2025</p>
                            </div>
                            <span class="badge badge-accent">Enrollment</span>
                        </li>
                    </ul>
                    <div class="mt-4 text-right">
                        <a href="#" class="text-sm text-accent hover:underline">View Full Calendar &rarr;</a>
                    </div>
                </x-card>
            </div>
            <div class="w-full">
                <x-card>
                    <h2 class="mb-4 text-2xl font-semibold text-primary-text">Quick Actions</h2>
                    <ul class="space-y-3">
                        <li>
                            <a href="#"
                                class="inline-flex justify-start items-center px-4 py-2 w-full font-semibold no-underline bg-transparent rounded-md border border-none transition-colors cursor-pointer outline-none text-accent border-accent hover:bg-accent hover:text-primary-text active:bg-accent-darkest focus:shadow-focus-accent">
                                <svg class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z" />
                                </svg>
                                Add New User
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="inline-flex justify-start items-center px-4 py-2 w-full font-semibold no-underline bg-transparent rounded-md border border-none transition-colors cursor-pointer outline-none text-accent border-accent hover:bg-accent hover:text-primary-text active:bg-accent-darkest focus:shadow-focus-accent">
                                <svg class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                Manage Courses
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="inline-flex justify-start items-center px-4 py-2 w-full font-semibold no-underline bg-transparent rounded-md border border-none transition-colors cursor-pointer outline-none text-accent border-accent hover:bg-accent hover:text-primary-text active:bg-accent-darkest focus:shadow-focus-accent">
                                <svg class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M17 10.5V7c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1v-3.5l4 4v-11l-4 4z" />
                                </svg>
                                View Grades
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="inline-flex justify-start items-center px-4 py-2 w-full font-semibold no-underline bg-transparent rounded-md border border-none transition-colors cursor-pointer outline-none text-accent border-accent hover:bg-accent hover:text-primary-text active:bg-accent-darkest focus:shadow-focus-accent">
                                <svg class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm0 15c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm1-4h-2V7h2v6z" />
                                </svg>
                                System Logs
                            </a>
                        </li>
                    </ul>
                </x-card>
            </div>
        </div>


    </div>
@endsection
