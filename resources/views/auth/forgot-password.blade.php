<x-app-layout>
    <div class="absolute inset-0 z-0">
        <div class="w-full h-full bg-no-repeat bg-cover opacity-30 filter blur-sm"
            style="background-image: url('../background.jpg');">
        </div>
    </div>
    <div class="flex relative z-10 justify-center items-center px-4 min-h-screen sm:px-6 lg:px-8">
        <div class="p-8 w-full max-w-md rounded-lg border shadow-xl bg-secondary-bg border-border">
            <div class="mb-8 text-center">
                <svg class="mx-auto mb-4 w-12 h-12 text-accent" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M12 17c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm6-9h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-5-5c1.66 0 3 1.34 3 3v2H9V6c0-1.66 1.34-3 3-3zm7 15H6V10h12v10z" />
                </svg>
                <h1 class="mb-2 text-3xl font-bold text-primary-text">
                    Reset Your Password
                </h1>
                <p class="text-tertiary-text">
                    Enter your email address below and we'll send you a link to reset your
                    password.
                </p>
            </div>

            @if (session('status'))
                <div class="px-4 py-2 mb-4 text-green-700 bg-green-100 rounded border border-green-400">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" accept="{{ route('password.email') }}">
                @csrf
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-primary-text">Email
                        Address</label>
                    <input type="email" id="email" name="email" placeholder="your.email@example.com"
                        class="p-3 w-full rounded-md border transition-colors bg-primary-bg border-border text-primary-text placeholder-tertiary-text focus:outline-none focus:ring-2 focus:ring-accent-light focus:shadow-focus-accent"
                        required />
                    @error('email')
                        <p class="mt-1 text-sm text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                    class="inline-flex justify-center items-center px-4 py-3 w-full font-semibold no-underline rounded-md border-none transition-colors cursor-pointer outline-none bg-accent text-primary-text hover:bg-accent-darker active:bg-accent-darkest active:shadow-inner focus:shadow-focus-accent">
                    Send Reset Link
                    <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z" />
                    </svg>
                </button>
            </form>

            <div class="mt-8 text-center">
                <p class="text-tertiary-text">
                    Remember your password?
                    <a href="{{ route('login') }}"
                        class="font-medium no-underline transition-colors text-accent hover:text-accent-light">Back
                        to
                        Login</a>
                </p>
            </div>
        </div>
    </div>

</x-app-layout>
