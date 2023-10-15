@extends('layouts.app')

@section('content')
            <div class='rounded mx-2 my-2 px-6 py-4 bg-gray-400 dark:bg-gray-700'>
                <h1 class='text-2xl font-semibold'>
                    {{ $post->title }}
                </h1>
                <div class='rounded mx-2 my-6 px-6 py-8 bg-gray-300 dark:bg-gray-500'>
                    {{ $post->body }}
                </div>
                <hr>
                <small>{{ __('Written on ').$post->created_at }}</small>
            </div>
@endsection
