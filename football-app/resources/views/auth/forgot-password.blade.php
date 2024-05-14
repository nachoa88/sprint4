<x-app-layout>
    <div class="w-full sm:max-w-md mx-auto sm:px-6 lg:px-8">
        <div class="p-6 bg-sky-900 overflow-hidden shadow-sm sm:rounded-lg">

            <div class="mb-4 text-md text-white">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div class="relative z-0 w-full mb-5 group">
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required autofocus />
                    <x-input-label for="email" :value="__('Email')" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-button-green>
                        {{ __('Email Password Reset Link') }}
                    </x-button-green>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
