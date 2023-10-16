@extends('layouts.app')

@section('content')
        <div class='grid justify-items-center text-center rounded mx-12 my-24 px-12 py-8 bg-gray-300 dark:bg-gray-700'>
            <div class='text-5xl py-8 font-semibold'>
                {{ __('WELCOME TO SCRATCH BLOG') }}
            </div>
            <hr>
            <div class='text-2xl py-8'>
                {{ __('THIS IS A DEVELOPMENTAL BLOG') }}
            </div>
            @auth
               <div class=''>
                    <a href="{{ route('posts.index') }}" class="rounded mx-4 my-2 px-4 py-2 font-semibold text-gray-100 bg-blue-500 border-blue-500 border-2 hover:bg-transparent hover:text-blue-400 hover:font-bold">
                        {{ __('See Posts') }}
                    </a>
               </div>
            @else
                <div class='flex flex-row'>
                    <a href="{{ route('login') }}" class="rounded mx-4 my-2 px-4 py-2 font-semibold text-gray-100 bg-blue-500 border-blue-500 border-2 hover:bg-transparent hover:text-blue-400 hover:font-bold">
                        {{ __('Login') }}
                    </a>
                    <a href="{{ route('register') }}" class="rounded mx-4 my-2 px-4 py-2 font-semibold text-gray-900 bg-green-500 border-green-500 border-2 hover:bg-transparent hover:text-green-400 hover:font-bold">
                        {{ __('Sign up') }}
                    </a>
                </div>
            @endauth
        </div>
@endsection
