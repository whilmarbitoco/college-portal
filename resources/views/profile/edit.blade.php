@extends('layouts.student')

@section('content')
    <div>
        <header class="flex justify-between items-center mb-6 md:mb-8">
            <div>
                <h1 class="text-3xl font-bold md:text-4xl text-primary-text">
                    Edit Profile
                </h1>
                <p class="text-lg text-tertiary-text">
                    Update your personal information and account details.
                </p>
            </div>
        </header>

        <section class="p-6 mx-auto max-w-5xl rounded-md shadow-md bg-secondary-bg">
            <form class="space-y-4">
                <!-- Profile Photo -->
                <div>
                    <label for="profile-photo" class="block mb-1 text-sm font-medium text-tertiary-text">
                        Profile Photo
                    </label>
                    <input type="file" id="profile-photo"
                        class="px-3 py-2 w-full rounded-md border cursor-pointer bg-secondary-bg text-primary-text border-border file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-primary-bg file:text-accent hover:file:bg-border" />
                </div>

                <!-- Full Name -->
                <div>
                    <label for="modal-full-name" class="block mb-1 text-sm font-medium text-primary-text">
                        Full Name
                    </label>
                    <input type="text" id="modal-full-name" value="Alex Johnson" required
                        class="px-3 py-2 w-full rounded-md border transition-all outline-none bg-secondary-bg text-primary-text border-border placeholder:text-tertiary-text placeholder:opacity-70 focus:border-accent focus:shadow-focus-accent" />
                </div>

                <!-- Email -->
                <div>
                    <label for="modal-email-address" class="block mb-1 text-sm font-medium text-primary-text">
                        Email Address
                    </label>
                    <input type="email" id="modal-email-address" value="alex.johnson@example.com" required
                        class="px-3 py-2 w-full rounded-md border transition-all outline-none bg-secondary-bg text-primary-text border-border placeholder:text-tertiary-text placeholder:opacity-70 focus:border-accent focus:shadow-focus-accent" />
                </div>

                <!-- Phone -->
                <div>
                    <label for="modal-phone" class="block mb-1 text-sm font-medium text-primary-text">
                        Phone Number
                    </label>
                    <input type="tel" id="modal-phone" value="+63 9XX XXX XXXX"
                        class="px-3 py-2 w-full rounded-md border transition-all outline-none bg-secondary-bg text-primary-text border-border placeholder:text-tertiary-text placeholder:opacity-70 focus:border-accent focus:shadow-focus-accent" />
                </div>

                <!-- DOB -->
                <div>
                    <label for="modal-dob" class="block mb-1 text-sm font-medium text-primary-text">
                        Date of Birth
                    </label>
                    <input type="date" id="modal-dob" value="2005-01-15"
                        class="px-3 py-2 w-full rounded-md border transition-all outline-none bg-secondary-bg text-primary-text border-border placeholder:text-tertiary-text placeholder:opacity-70 focus:border-accent focus:shadow-focus-accent" />
                </div>

                <!-- Address -->
                <div>
                    <label for="modal-address" class="block mb-1 text-sm font-medium text-primary-text">
                        Current Address
                    </label>
                    <textarea id="modal-address" rows="3"
                        class="px-3 py-2 w-full h-24 rounded-md border transition-all outline-none bg-secondary-bg text-primary-text border-border placeholder:text-tertiary-text placeholder:opacity-70 focus:border-accent focus:shadow-focus-accent">
    123 Main St, Anytown, Philippines</textarea>
                </div>

                <!-- Submit -->
                <div class="pt-4 text-right">
                    <button type="submit"
                        class="inline-flex justify-center items-center px-4 py-2 font-semibold no-underline rounded-md border-none transition-colors cursor-pointer outline-none bg-accent text-primary-text hover:bg-accent-darker active:bg-accent-darkest active:shadow-inner focus:shadow-focus-accent">
                        Save Changes
                    </button>
                </div>
            </form>
        </section>
    </div>
@endsection
