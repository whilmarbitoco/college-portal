@extends('layouts.student')

@section('content')
    <div>
        <header class="mb-6 md:mb-8">
            <h1 class="text-3xl font-bold md:text-4xl text-primary-text">
                My Profile
            </h1>
            <p class="text-lg text-tertiary-text">
                View and manage your personal information and account settings.
            </p>
        </header>

        <section class="p-6 mb-8 rounded-md shadow-md bg-secondary-bg">
            <div class="flex flex-col items-center md:flex-row md:items-start md:space-x-8">
                <div
                    class="flex flex-shrink-0 justify-center items-center mb-6 w-28 h-28 text-5xl font-bold rounded-full bg-accent text-primary-bg md:mb-0">
                    AJ
                </div>
                <div class="flex-grow text-center md:text-left">
                    <h2 class="mb-2 text-3xl font-semibold text-primary-text">
                        Alex Johnson
                    </h2>
                    <p class="mb-1 text-lg text-tertiary-text">Role: Student</p>
                    <p class="mb-4 text-base text-tertiary-text">
                        Department: Computer Science
                    </p>

                    <div class="grid grid-cols-1 gap-y-2 gap-x-8 text-left sm:grid-cols-2">
                        <div>
                            <p class="text-sm font-medium text-tertiary-text">Student ID:</p>
                            <p class="text-primary-text">2023001234</p>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-tertiary-text">
                                Email Address:
                            </p>
                            <p class="text-primary-text">alex.johnson@example.com</p>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-tertiary-text">
                                Phone Number:
                            </p>
                            <p class="text-primary-text">+63 9XX XXX XXXX</p>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-tertiary-text">
                                Date of Birth:
                            </p>
                            <p class="text-primary-text">January 15, 2005</p>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-tertiary-text">
                                Enrollment Date:
                            </p>
                            <p class="text-primary-text">September 1, 2023</p>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-tertiary-text">
                                Current Address:
                            </p>
                            <p class="text-primary-text">123 Main St, Anytown, Philippines</p>
                        </div>
                    </div>

                    <div class="mt-8 text-center md:text-right">
                        <a href="{{ route('profile.edit') }}"
                            class="inline-flex justify-center items-center px-4 py-2 font-semibold no-underline rounded-md border-none transition-colors cursor-pointer outline-none bg-accent text-primary-text hover:bg-accent-darker active:bg-accent-darkest active:shadow-inner focus:shadow-focus-accent">
                            Edit Profile
                            <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
