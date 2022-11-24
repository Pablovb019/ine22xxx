<style>
    .form-floating{
        max-width: 400px;
    }
</style>

@extends ('templates.master')

@section ('register')
<div class="d-flex justify-content-center container-fluid">
    <x-jet-authentication-card>
        <x-slot name="logo">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <h4 class="text-center pb-4">{{ __('auth.Register_form') }}</h4>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-floating mb-3">
                <x-jet-input id="name" class="form-control" type="text" name="name" :value="old('name')" placeholder="name" required autofocus autocomplete="name" />
                <x-jet-label for="name" class="form-label" value="{{ __('auth.Name') }}" />
            </div>

            <div class="form-floating mb-3">
                <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" placeholder="email" required />
                <x-jet-label for="email" class="form-label" value="{{ __('auth.Email') }}" />
            </div>

            <div class="form-floating mb-3">
                <x-jet-input id="password" class="form-control" type="password" name="password" placeholder="password" required autocomplete="new-password" />
                <x-jet-label for="password" class="form-label" value="{{ __('auth.Password') }}" />
            </div>

            <div class="form-floating mb-3">
                <x-jet-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" placeholder="password_confirmation" required autocomplete="new-password" />
                <x-jet-label for="password_confirmation" class="form-label" value="{{ __('auth.Confirm Password') }}" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="form-check mb-3">
                <x-jet-label for="terms" class="form-check-label">
                    <div class="flex items-center">
                        <x-jet-checkbox name="terms" id="terms" class="form-check-input" />

                        <div class="ml-2">
                            {!! __('auth.I agree to the :terms_of_service and :privacy_policy', [
                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('auth.Terms of Service').'</a>',
                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('auth.Privacy Policy').'</a>',
                            ]) !!}
                        </div>
                    </div>
                </x-jet-label>
            </div>
            @endif

            <div class="mb-3">
                <x-jet-button class="btn btn-primary me-4">{{ __('auth.Register') }}</x-jet-button>
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}"> {{ __('auth.Already registered?') }} </a>
            </div>
        </form>
    </x-jet-authentication-card>
</div>
@endsection