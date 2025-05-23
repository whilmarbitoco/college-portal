<x-app-layout>
    <div class="flex justify-center items-center p-4 min-h-screen bg-primary-bg font-inter">
        <div class="p-8 w-full max-w-md rounded-lg border shadow-xl bg-secondary-bg border-border">
            <div class="mb-8 text-center">
                <svg class="mx-auto mb-4 w-12 h-12 text-accent" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M12 17c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm6-9h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-5-5c1.66 0 3 1.34 3 3v2H9V6c0-1.66 1.34-3 3-3zm7 15H6V10h12v10z" />
                </svg>
                <h1 class="mb-2 text-3xl font-bold text-primary-text">
                    Set Your New Password
                </h1>
                <p class="text-tertiary-text">
                    Please enter and confirm your new password below.
                </p>
            </div>

            <form method="POST" action="{{ route('password.store') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                @error('token')
                    <p class="mt-1 text-sm text-danger">{{ $message }}</p>
                @enderror
                <div class="mb-4">
                    <label for="new-email" class="block mb-2 text-sm font-medium text-primary-text">New
                        Email</label>
                    <input type="email" id="new-email" name="email" placeholder="Enter your new Email"
                        class="p-3 w-full rounded-md border transition-colors bg-primary-bg border-border text-primary-text placeholder-tertiary-text focus:outline-none focus:ring-2 focus:ring-accent-light focus:shadow-focus-accent"
                        required />
                    @error('email')
                        <p class="mt-1 text-sm text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="new-password" class="block mb-2 text-sm font-medium text-primary-text">New
                        Password</label>
                    <input type="password" id="new-password" name="password" placeholder="Enter your new password"
                        class="p-3 w-full rounded-md border transition-colors bg-primary-bg border-border text-primary-text placeholder-tertiary-text focus:outline-none focus:ring-2 focus:ring-accent-light focus:shadow-focus-accent"
                        required />
                    @error('password')
                        <p class="mt-1 text-sm text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="confirm-password" class="block mb-2 text-sm font-medium text-primary-text">Confirm New
                        Password</label>
                    <input type="password" id="confirm-password" name="password_confirmation"
                        placeholder="Confirm your new password"
                        class="p-3 w-full rounded-md border transition-colors bg-primary-bg border-border text-primary-text placeholder-tertiary-text focus:outline-none focus:ring-2 focus:ring-accent-light focus:shadow-focus-accent"
                        required />
                </div>

                <button type="submit"
                    class="inline-flex justify-center items-center px-4 py-3 w-full font-semibold no-underline rounded-md border-none transition-colors cursor-pointer outline-none bg-accent text-primary-text hover:bg-accent-darker active:bg-accent-darkest active:shadow-inner focus:shadow-focus-accent">
                    Reset Password
                    <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 4V1L8 5l4 4V6c3.31 0 6 2.69 6 6s-2.69 6-6 6-6-2.69-6-6H4c0 4.42 3.58 8 8 8s8-3.58 8-8-3.58-8-8-8z" />
                    </svg>
                </button>
            </form>

            <div class="mt-8 text-center">
                <p class="text-tertiary-text">
                    <a href="{{ route('login') }}"
                        class="font-medium no-underline transition-colors text-accent hover:text-accent-light">Back to
                        Login</a>
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
