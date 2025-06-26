@extends('layouts.admin')

@section('content')
    <div>
        <x-header head="System Settings" body="Configure academic, institutional, and system-wide parameters" />

        <x-card>
            <div class="flex justify-between items-center">
                <h2 class="mb-4 text-2xl font-semibold text-primary-text">
                    Academic Settings
                </h2>
                <button x-on:click="toggle = !toggle" :class="toggle == true ? 'rotate-180' : ''">
                    <svg class="w-6 h-6 transition-transform duration-300 transform text-primary-text accordion-icon"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 15.41L8.59 12 7.18 13.41 12 18.23l4.82-4.82L15.41 12z" />
                    </svg>
                </button>
            </div>
            <form x-show="toggle" class="space-y-6">
                <div class="mb-2">
                    <label for="current-academic-year" class="block mb-1 text-sm font-medium text-tertiary-text">
                        Current Academic Year
                    </label>
                    <input type="text" id="current-academic-year"
                        class="px-3 py-2 w-full rounded-md border transition-all outline-none bg-secondary-bg text-primary-text border-border placeholder:text-tertiary-text placeholder:opacity-70 focus:border-accent focus:shadow-focus-accent disabled:bg-gray-700 disabled:text-gray-400 disabled:cursor-not-allowed disabled:border-gray-700"
                        value="2024-2025" placeholder="e.g., 2024-2025" />
                    <p class="mt-1 text-xs text-tertiary-text">
                        Sets the active academic year for all student and course records.
                    </p>
                </div>
                <div class="mb-2">
                    <label for="current-semester" class="block mb-1 text-sm font-medium text-tertiary-text">
                        Current Semester
                    </label>
                    <select id="current-semester"
                        class="px-3 py-2 w-full rounded-md border transition-all outline-none bg-secondary-bg text-primary-text border-border placeholder:text-tertiary-text placeholder:opacity-70 focus:border-accent focus:shadow-focus-accent disabled:bg-gray-700 disabled:text-gray-400 disabled:cursor-not-allowed disabled:border-gray-700">
                        <option value="first">First Semester</option>
                        <option value="second" selected>Second Semester</option>
                        <option value="summer">Summer Semester</option>
                    </select>
                    <p class="mt-1 text-xs text-tertiary-text">
                        Indicates the currently active semester.
                    </p>
                </div>
                <div class="mb-2">
                    <label for="grading-periods" class="block mb-1 text-sm font-medium text-tertiary-text">
                        Active Grading Periods
                    </label>
                    <input type="text"
                        class="px-3 py-2 w-full rounded-md border transition-all outline-none bg-secondary-bg text-primary-text border-border placeholder:text-tertiary-text placeholder:opacity-70 focus:border-accent focus:shadow-focus-accent disabled:bg-gray-700 disabled:text-gray-400 disabled:cursor-not-allowed disabled:border-gray-700"
                        placeholder="e.g., Prelim, Midterm, Finals" />
                    <p class="mt-1 text-xs text-tertiary-text">
                        Active grading periods for the current
                        semester.
                    </p>
                </div>
                <div class="flex justify-end pt-4">
                    <button type="submit"
                        class="inline-flex justify-center items-center px-4 py-2 font-semibold no-underline rounded-md border-none transition-colors cursor-pointer outline-none bg-accent text-primary-text hover:bg-accent-darker active:bg-accent-darkest active:shadow-inner focus:shadow-focus-accent">
                        <svg class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M17 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V7l-4-4zm-5 16c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm3-10H5V5h10v4z" />
                        </svg>
                        Save Changes
                    </button>
                </div>
            </form>
        </x-card>

        <x-card>
            <div class="flex justify-between items-center">
                <h2 class="mb-4 text-2xl font-semibold text-primary-text">
                    Institute Information
                </h2>
                <button x-on:click="toggle = !toggle" :class="toggle == true ? 'rotate-180' : ''">
                    <svg class="w-6 h-6 transition-transform duration-300 transform text-primary-text accordion-icon"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 15.41L8.59 12 7.18 13.41 12 18.23l4.82-4.82L15.41 12z" />
                    </svg>
                </button>
            </div>

            <form x-show="toggle" x-cloack x-transition class="space-y-4" method="POST"
                action="{{ route('admin.settings.siteinfo') }}" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="school-name" class="block mb-1 text-sm font-medium text-tertiary-text">
                        School Name
                    </label>
                    <input type="text" id="school-name" name="name"
                        class="px-3 py-2 w-full rounded-md border transition-all outline-none bg-secondary-bg text-primary-text border-border placeholder:text-tertiary-text placeholder:opacity-70 focus:border-accent focus:shadow-focus-accent disabled:bg-gray-700 disabled:text-gray-400 disabled:cursor-not-allowed disabled:border-gray-700"
                        value="{{ $siteInfo->name }}" required placeholder="Enter the full name of the school" />
                    <p class="mt-1 text-xs text-tertiary-text">
                        Displayed on headers, reports, and transcripts.
                    </p>
                    @error('name')
                        <span class="text-red-500">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div>
                    <label for="school-acronym" class="block mb-1 text-sm font-medium text-tertiary-text">
                        School Acronym
                    </label>
                    <input type="text" id="school-acronym" name="acronym"
                        class="px-3 py-2 w-full rounded-md border transition-all outline-none bg-secondary-bg text-primary-text border-border placeholder:text-tertiary-text placeholder:opacity-70 focus:border-accent focus:shadow-focus-accent disabled:bg-gray-700 disabled:text-gray-400 disabled:cursor-not-allowed disabled:border-gray-700"
                        value="{{ $siteInfo->acronym }}" required placeholder="Enter the school acronym (e.g. NU)" />
                    <p class="mt-1 text-xs text-tertiary-text">
                        Displayed on navbars and sidebars.
                    </p>
                    @error('acronym')
                        <span class="text-red-500">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div>
                    <label for="school-logo" class="block mb-1 text-sm font-medium text-tertiary-text">
                        School Logo
                    </label>
                    <input type="file" id="school-logo" name="logo"
                        class="p-2 w-full bg-transparent rounded-lg cursor-pointer form-input border-border file:mr-4 file:py-1 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-primary-bg file:text-accent hover:file:bg-border"
                        placeholder="Upload your institution logo (PNG, JPG, SVG)" />
                    <p class="mt-1 text-xs text-tertiary-text">
                        Upload institution logo (PNG and JPG are the only format allowed).
                    </p>
                    @error('image')
                        <span class="text-red-500">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div>
                    <label for="school-logo" class="block mb-1 text-sm font-medium text-tertiary-text">
                        School Image
                    </label>
                    <input type="file" id="school-image" name="background"
                        class="p-2 w-full bg-transparent rounded-lg cursor-pointer form-input border-border file:mr-4 file:py-1 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-primary-bg file:text-accent hover:file:bg-border"
                        placeholder="Upload your institution logo (PNG, JPG, SVG)" />
                    <p class="mt-1 text-xs text-tertiary-text">
                        Upload background image
                    </p>
                    @error('image')
                        <span class="text-red-500">
                            {{ $message }}
                        </span>
                    @enderror
                </div>


                <div>
                    <x-quill-editor id="editory-story" name="story" label="School Story" help="Displayed on the about page."
                        value="{{ $siteInfo->story }}" />
                </div>

                <div>
                    <x-quill-editor id="editory-description" name="description" label="School Description"
                        help="Displayed on the home page." value="{{ $siteInfo->decoded_description() }}" />
                </div>

                <div>
                    <x-quill-editor id="editor-mission" name="mission" label="School Mission"
                        help="Displayed on the about page." value="{{ $siteInfo->mission }}" />
                </div>

                <div>
                    <x-quill-editor id="editor-vision" name="vision" label="School Vision"
                        help="Displayed on the about page." value="{{ $siteInfo->vision }}" />
                </div>

                <div>
                    <x-quill-editor id="editor-core" name="values" label="School Core Values"
                        help="Displayed on the about page." value="{{ $siteInfo->values }}" />
                </div>



                <div class="flex justify-end pt-4">
                    <button type="submit"
                        class="inline-flex justify-center items-center px-4 py-2 font-semibold no-underline rounded-md border-none transition-colors cursor-pointer outline-none bg-accent text-primary-text hover:bg-accent-darker active:bg-accent-darkest active:shadow-inner focus:shadow-focus-accent">
                        <svg class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M17 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V7l-4-4zm-5 16c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm3-10H5V5h10v4z" />
                        </svg>
                        Save Changes
                    </button>
                </div>
            </form>

        </x-card>



        </main>
@endsection