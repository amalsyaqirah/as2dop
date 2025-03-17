<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Logo Section -->
        <div class="flex justify-center mb-6">
            <img src="{{ asset('images/pblogo.png') }}" alt="PB Logo" class="h-12">
        </div>

        <!-- Heading - Center aligned -->
        <div class="w-full text-center mb-6">
            <h2 class="text-xl font-semibold">{{ __('Create an account') }}</h2>
            <p class="text-sm text-gray-600">{{ __('Enter your details below to create your account') }}</p>
        </div>

        <!-- Name -->
        <div class="mb-4">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input 
                id="name" 
                class="block mt-1 w-full p-3 border border-gray-300 rounded-md" 
                type="text" 
                name="name" 
                :value="old('name')" 
                required 
                autofocus 
                placeholder="Full name"  
            />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
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
                placeholder="email@example.com"  
            />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
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
                autocomplete="new-password" 
                placeholder="Password"  
            />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mb-4">
            <x-input-label for="password_confirmation" :value="__('Confirm password')" />
            <x-text-input 
                id="password_confirmation" 
                class="block mt-1 w-full p-3 border border-gray-300 rounded-md" 
                type="password" 
                name="password_confirmation" 
                required 
                placeholder="Confirm password"  
            />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Register Button -->
        <div class="text-center mb-6">
        <x-primary-button class="w-full p-3 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:outline-none flex items-center justify-center">
        {{ __('Create account') }}
            </x-primary-button>
        </div>

        <!-- Log In Link -->
        <div class="text-center">
            <p class="text-sm text-gray-600">
                {{ __("Already have an account?") }} 
                <a href="{{ route('login') }}" class="font-bold text-black underline hover:text-indigo-700">{{ __('Log in') }}</a>
            </p>
        </div>

    </form>
</x-guest-layout>
