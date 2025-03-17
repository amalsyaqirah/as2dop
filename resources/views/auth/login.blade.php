<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Logo Section -->
        <div class="flex justify-center mb-6">
            <img src="{{ asset('images/pblogo.png') }}" alt="PB Logo" class="h-12">
        </div>

        <!-- Heading - Center aligned -->
        <div class="text-center mb-6">
            <h2 class="text-xl font-semibold">{{ __('Log in to your account') }}</h2>
            <p class="text-sm text-gray-600">{{ __('Enter your email and password below to log in') }}</p>
        </div>

        <!-- Email Address -->
        <div class="mb-4">
            <x-input-label for="email" :value="__('Email address')" />
            <x-text-input 
                id="email" 
                class="block mt-1 w-full p-3 border border-gray-300 rounded-md" 
                type="email" 
                name="email" 
                :value="old('email')" 
                required 
                autofocus 
                autocomplete="username" 
                placeholder="email@example.com"  
            />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>

        <!-- Password -->
        <div class="mb-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input 
                id="password" 
                class="block mt-1 w-full p-3 border border-gray-300 rounded-md" 
                type="password" 
                name="password" 
                required 
                autocomplete="current-password" 
                placeholder="Password"  
            />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <!-- Login Button -->
        <div class="text-center mb-6">
            <x-primary-button class="w-full p-3 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:outline-none flex items-center justify-center">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
          <!-- Sign Up Link -->
          <div class="text-center">
            <p class="text-sm text-gray-600">
                {{ __("Don't have an account?") }} 
                <a href="{{ route('register') }}" class="font-bold text-black underline hover:text-indigo-700">{{ __('Sign Up') }}</a>
            </p>
        </div>

    </form>
</x-guest-layout>
