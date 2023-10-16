@extends('layouts.app')

@section('content')
<div class="mx-96 my-24 pb-16 grid justify-items-center rounded border-blue-500 border-2 ">
    <div class="grid justify-items-center py-6 w-full border-b-2 border-blue-500 bg-blue-800">
        <div class="font-semibold text-4xl">{{ __('Login') }}</div>
    </div>
    <div class="pt-8">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="">
                <label for="email" class="">{{ __('Email Address') }}</label>

                <div class="">
                    <input id="email" type="email" class="dark:text-gray-900 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="">
                <label for="password" class="">{{ __('Password') }}</label>

                <div class="">
                    <input id="password" type="password" class="dark:text-gray-900 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="">
                <div class="">
                    <div class="">
                        <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="">
                <div class="">
                    <button type="submit" class="">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
