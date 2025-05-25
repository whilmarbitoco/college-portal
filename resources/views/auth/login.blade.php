<x-app-layout>
    <!-- Background Layer -->
    <div class="absolute inset-0 z-0">
        <div class="w-full h-full bg-no-repeat bg-cover opacity-30 filter blur-sm"
            style="background-image: url('/background.jpg');">
        </div>
    </div>

    <!-- Foreground Card Layer -->
    <div class="flex relative z-10 justify-center items-center px-4 min-h-screen sm:px-6 lg:px-8">
        <div class="p-6 w-full max-w-sm text-center rounded-lg border border-border bg-secondary-bg sm:p-8 sm:max-w-md">
            <div class="mb-6 sm:mb-8">
                <h1 class="mt-4 text-2xl font-bold sm:text-3xl text-primary-text">
                    Nebula College
                </h1>
                <p class="text-sm text-tertiary-text sm:text-base">
                    Log in to your account
                </p>
            </div>

            <form class="space-y-5 sm:space-y-6" method="POST" action="{{ route('login') }}">
                @csrf

                <div class="space-y-2 text-left">
                    <label for="email">Email address</label>
                    <input id="email" name="email" type="email" required
                        class="px-4 py-3 w-full rounded-md border transition-all outline-none bg-secondary-bg text-primary-text border-border placeholder:text-tertiary-text placeholder:opacity-70 focus:border-accent focus:shadow-focus-accent"
                        placeholder="Email address" />
                    @error('email')
                        <p class="mt-1 text-sm text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2 text-left">
                    <label for="password">Password</label>
                    <input id="password" name="password" type="password" required
                        class="px-4 py-3 w-full rounded-md border transition-all outline-none bg-secondary-bg text-primary-text border-border placeholder:text-tertiary-text placeholder:opacity-70 focus:border-accent focus:shadow-focus-accent"
                        placeholder="Password" />
                    @error('password')
                        <p class="mt-1 text-sm text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col gap-2 text-sm sm:flex-row sm:items-center sm:justify-between sm:gap-0">
                    <div class="flex items-center">
                        <input id="remember-me" name="remember" type="checkbox"
                            class="inline-block mr-2 w-4 h-4 align-middle rounded-sm border transition-all appearance-none cursor-pointer bg-secondary-bg border-border checked:bg-accent checked:border-accent checked:bg-no-repeat checked:bg-center checked:bg-full focus:shadow-focus-offset-accent" />
                        <label for="remember-me" class="select-none text-primary-text">Remember me</label>
                    </div>
                    <div>
                        <a href="{{ route('password.request') }}"
                            class="font-medium transition-colors text-accent hover:text-accent-light">
                            Forgot your password?
                        </a>
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="inline-flex justify-center items-center px-4 py-3 w-full font-semibold no-underline rounded-md border-none transition-colors cursor-pointer outline-none bg-accent text-primary-text hover:bg-accent-darker active:bg-accent-darkest active:shadow-inner focus:shadow-focus-accent">
                        Log in
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
