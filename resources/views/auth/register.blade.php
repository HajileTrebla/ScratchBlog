@extends('layouts.app')

@section('content')
<div class="mx-96 my-6 pb-16 grid justify-items-center rounded">
    <div class="w-full rounded overflow-hidden">
        <div class="grid justify-items-center py-8 w-full bg-blue-400 dark:bg-blue-800 border-gray-900 dark:border-gray-100 border-b-2">
            <div class="font-semibold text-4xl">{{ __('Register') }}</div>
        </div>
        <form method="POST" action="{{ route('register') }}"
            class="shadow-md px-48 py-16 bg-gray-300 dark:bg-gray-700">
            @csrf

            <div class="mb-4">
                <label for="name" class="">{{ __('Name') }}</label>

                <div class="">
                    <input id="name" type="text"
                    class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline dark:text-gray-700 @error('name') is-invalid @enderror"
                    name="name"
                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-4">
                <label for="email" class="">{{ __('Email Address') }}</label>

                <div class="">
                    <input id="email" type="email"
                    class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline dark:text-gray-700 @error('email') is-invalid @enderror"
                    name="email"
                    value="{{ old('email') }}" required autocomplete="email">

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
                    class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline dark:text-gray-700 @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-4">
                <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>

                <div class="">
                    <input id="password-confirm" type="password"
                    class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline dark:text-gray-700"
                    name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="grid space-y-2">
                <button type="submit"
                        class="bg-blue-400 dark:bg-blue-500 hover:bg-blue-700 text-gray-900 dark:text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
@endsection
