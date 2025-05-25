@extends('layouts.admin')

@section('content')
    <div>
        <header class="mb-8 md:mb-10">
            <h1 class="mb-2 text-3xl font-bold md:text-4xl text-primary-text">
                Create New Program
            </h1>
            <p class="text-lg text-tertiary-text">
                Add a new academic program to the college's offerings.
            </p>
        </header>

        <section class="p-6 mx-auto max-w-3xl rounded-md shadow-md bg-secondary-bg">
            <form>
                <div class="grid grid-cols-1 gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="program-title" class="block mb-2 text-sm font-medium text-primary-text">
                            Program Title <span class="text-danger">*</span>
                        </label>
                        <input type="text" id="program-title" name="program_title"
                            placeholder="e.g., Bachelor of Science in Computer Science"
                            class="p-3 w-full rounded-md border transition-colors bg-primary-bg border-border text-primary-text placeholder-tertiary-text focus:outline-none focus:ring-2 focus:ring-accent-light focus:shadow-focus-accent"
                            required />
                    </div>

                    <div>
                        <label for="program-code" class="block mb-2 text-sm font-medium text-primary-text">
                            Program Code <span class="text-danger">*</span>
                        </label>
                        <input type="text" id="program-code" name="program_code" placeholder="e.g., BSCS"
                            class="p-3 w-full rounded-md border transition-colors bg-primary-bg border-border text-primary-text placeholder-tertiary-text focus:outline-none focus:ring-2 focus:ring-accent-light focus:shadow-focus-accent"
                            required />
                    </div>

                    <div>
                        <label for="program-type" class="block mb-2 text-sm font-medium text-primary-text">
                            Program Type <span class="text-danger">*</span>
                        </label>
                        <select id="program-type" name="program_type"
                            class="p-3 w-full rounded-md border transition-colors bg-primary-bg border-border text-primary-text focus:outline-none focus:ring-2 focus:ring-accent-light"
                            required>
                            <option value="" disabled selected>Select Program Type</option>
                            <option value="undergraduate">Undergraduate</option>
                            <option value="graduate">Graduate</option>
                            <option value="diploma">Diploma</option>
                            <option value="certificate">Certificate</option>
                        </select>
                    </div>

                    <div>
                        <label for="department" class="block mb-2 text-sm font-medium text-primary-text">
                            Department <span class="text-danger">*</span>
                        </label>
                        <select id="department" name="department"
                            class="p-3 w-full rounded-md border transition-colors bg-primary-bg border-border text-primary-text focus:outline-none focus:ring-2 focus:ring-accent-light"
                            required>
                            <option value="" disabled selected>Select Department</option>
                            <option value="computer_science">Computer Science</option>
                            <option value="engineering">Engineering</option>
                            <option value="liberal_arts">Liberal Arts</option>
                            <option value="business">Business Administration</option>
                            <option value="education">Education</option>
                        </select>
                    </div>

                    <div>
                        <label for="duration" class="block mb-2 text-sm font-medium text-primary-text">
                            Duration (in Years) <span class="text-danger">*</span>
                        </label>
                        <input type="number" id="duration" name="duration" placeholder="e.g., 4" min="1"
                            class="p-3 w-full rounded-md border transition-colors bg-primary-bg border-border text-primary-text placeholder-tertiary-text focus:outline-none focus:ring-2 focus:ring-accent-light focus:shadow-focus-accent"
                            required />
                    </div>

                    <div>
                        <label for="status" class="block mb-2 text-sm font-medium text-primary-text">
                            Status <span class="text-danger">*</span>
                        </label>
                        <select id="status" name="status"
                            class="p-3 w-full rounded-md border transition-colors bg-primary-bg border-border text-primary-text focus:outline-none focus:ring-2 focus:ring-accent-light"
                            required>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </div>

                <div class="mb-6">
                    <label for="description" class="block mb-2 text-sm font-medium text-primary-text">
                        Description (Optional)
                    </label>
                    <textarea id="description" name="description" rows="5"
                        placeholder="Provide a brief description of the program, its objectives, and career prospects."
                        class="p-3 w-full rounded-md border transition-colors resize-y bg-primary-bg border-border text-primary-text placeholder-tertiary-text focus:outline-none focus:ring-2 focus:ring-accent-light focus:shadow-focus-accent"></textarea>
                </div>

                <div class="flex justify-end space-x-4">
                    <button type="button"
                        class="inline-flex justify-center items-center px-4 py-2 font-semibold no-underline rounded-md border transition-colors cursor-pointer outline-none border-border bg-secondary-bg text-primary-text hover:bg-primary-bg hover:text-accent focus:shadow-focus-accent">
                        Cancel
                    </button>
                    <button type="submit"
                        class="inline-flex justify-center items-center px-4 py-2 font-semibold no-underline rounded-md border-none transition-colors cursor-pointer outline-none bg-accent text-primary-text hover:bg-accent-darker active:bg-accent-darkest active:shadow-inner focus:shadow-focus-accent">
                        <svg class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" />
                        </svg>
                        Create Program
                    </button>
                </div>
            </form>
        </section>
    </div>
@endsection
