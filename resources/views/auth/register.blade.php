@extends('layouts.app')

@section('content')
<div class="mx-96 my-24 pb-16 grid justify-items-center rounded border-blue-500 border-2 ">
    <div class="grid justify-items-center py-6 w-full border-b-2 border-blue-500 bg-blue-800">
        <div class="font-semibold text-4xl">{{ __('Register') }}</div>
    </div>
    <div class="pt-8">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="">
                <label for="name" class="">{{ __('Name') }}</label>

                <div class="">
                    <input id="name" type="text" class="text-gray-900 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="">
                <label for="email" class="">{{ __('Email Address') }}</label>

                <div class="">
                    <input id="email" type="email" class="text-gray-900 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                    <input id="password" type="password" class="text-gray-900 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="">
                <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>

                <div class="">
                    <input id="password-confirm" type="password" class="text-gray-900" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="">
                <div class="">
                    <button type="submit" class="">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
