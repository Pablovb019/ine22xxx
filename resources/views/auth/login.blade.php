<style>
    .form-floating{
        max-width: 400px;
    }
</style>
@extends ('templates.master')

@section ('login')
<div class="d-flex justify-content-center container-fluid">
    <x-jet-authentication-card>
        <x-slot name="logo">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif

        <h4 class="text-center pb-4">{{ __('auth.Login_form') }}</h4>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-floating mb-3">
                <x-jet-input id="email" class="form-control" name="email" :value="old('email')" placeholder="email" required autofocus />
                <x-jet-label for="email" class="form-label" value="{{ __('auth.Email') }}" />
            </div>



            <div class="form-floating mb-3">
                <x-jet-input id="password" class="form-control" type="password" name="password" placeholder="password" required autocomplete="current-password" />
                <x-jet-label for="password" class="form-label" value="{{ __('auth.Password') }}" />
            </div>

            <div class="form-check mb-3">
                <x-jet-checkbox id="remember_me" class="form-check-input" name="remember" />
                <x-jet-label for="remember_me" class="form-check-label" value="{{ __('auth.Remember me') }}" />
            </div>

            <div class="mb-3">
                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('auth.Forgot your password?') }}
                </a>
                @endif
            </div>
            <div class="mb-3">
                <x-jet-button class="btn btn-primary me-4">{{ __('auth.Log in') }}</x-jet-button>
                <a class="btn btn-success ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition btn btn-primary me-4"
                href="{{ route('register') }}">{{ __('auth.Register') }}</a>
            </div>
        </form>
    </x-jet-authentication-card>
</div>
@endsection