@extends('layouts.app')

@section('content')
        <div class='text-center rounded mx-12 my-24 px-12 py-8 bg-gray-300 dark:bg-gray-700'>
            <div class='text-5xl py-8 font-semibold'>
                {{ __('ABOUT') }}
            </div>
            <hr>
            <div class='text-2xl py-8'>
                {{ __('This Blog site is a practice environment for developing websites in laravel') }}
            </div>
        </div>
@endsection
