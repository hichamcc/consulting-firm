<x-layouts.auth :title="__('Log in')">
<div class="space-y-6">
    <x-auth-header :title="__('Log in to your account')" :description="__('Enter your email and password below to log in')" />

    <!-- Demo Credentials Info -->
    <div class="rounded-lg border border-blue-200 bg-blue-50 p-4 dark:border-blue-800 dark:bg-blue-950/30">
        <div class="flex items-start gap-3">
            <svg class="mt-0.5 size-5 shrink-0 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <div class="flex-1">
                <h4 class="font-medium text-blue-900 dark:text-blue-100">Demo Access</h4>
                <p class="mt-1 text-sm text-blue-800 dark:text-blue-200">Use these credentials to explore the dashboard:</p>
                <div class="mt-2 space-y-1 font-mono text-sm text-blue-900 dark:text-blue-100">
                    <div><strong>Email:</strong> test@example.com</div>
                    <div><strong>Password:</strong> password</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <x-form method="post" :action="route('login')" class="space-y-6">
        <x-input
            type="email"
            :label="__('Email address')"
            name="email"
            required
            autofocus
            autocomplete="email"
        />

        <div class="relative">
            <x-input
                type="password"
                :label="__('Password')"
                name="password"
                required
                autocomplete="current-password"
            />

            @if (Route::has('password.request'))
                <x-link class="absolute right-0 top-0 text-sm" :href="route('password.request')">
                    {{ __('Forgot your password?') }}
                </x-link>
            @endif
        </div>

        <x-checkbox name="remember" :label="__('Remember me')" />

        <x-button class="w-full">{{ __('Log in') }}</x-button>
    </x-form>

    @if (Route::has('register'))
      <p class="text-center text-sm text-gray-600 dark:text-gray-400">
          <span>{{ __('Don\'t have an account?') }}</span>
          <x-link :href="route('register')">Sign up</x-link>
      </p>
    @endif
</div>
</x-layouts.auth>
