@extends('layouts.app')

@section('content')
<div class="mx-96 my-6 pb-16 grid justify-items-center rounded">
    <div class="w-full rounded overflow-hidden">
        <div class="grid justify-items-center py-8 w-full bg-blue-400 dark:bg-blue-800 border-gray-900 dark:border-gray-100 border-b-2">
            <div class="font-bold text-4xl">{{ __('Login') }}</div>
        </div>
        <form method="POST" action="{{ route('login') }}"
            class="shadow-md px-48 py-28 bg-gray-300 dark:bg-gray-700">
            @csrf

            <div class="mb-4">
                <label for="email" class="">{{ __('Email Address') }}</label>

                <div class="block text-sm font-bold mb-2">
                    <input id="email" type="email"
                    class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline dark:text-gray-700 @error('email') is-invalid @enderror"
                    name="email"
                    value="{{ old('email') }}"
                    required autocomplete="email" autofocus>

                    @error('email')
                        <span class="" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-4">
                <label for="password" class="">{{ __('Password') }}</label>

                <div class="">
                    <input id="password" type="password"
                           class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 mb-3 leading-tight focus:outline-none focus:shadow-outline dark:text-gray-900 form-control @error('password') is-invalid @enderror"
                           name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                </div>
            </div>
            <div class="grid space-y-2">
                <button type="submit"
                    class="bg-blue-400 dark:bg-blue-500 hover:bg-blue-700 text-gray-900 dark:text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </div>
        </form>
    </div>
</div>
@endsection
