@extends('layouts.app')

@section('content')
    <div class="mx-14 mt-2">
        <h1 class='text-4xl font-bold'>Posts</h1>
        @if(count($posts) > 0)
        @foreach($posts as $post)
        <div class='rounded mx-14 my-4 px-6 py-4 bg-gray-300 dark:bg-gray-500'>
            <h3>
                <a href="{{ route('posts.show', [ 'post'=>$post->id ]) }}" class="hover:text-blue-700 hover:underline text-2xl">
                    {{ $post->title }}
                </a>
            </h3>
            <small>{{ __('Written on ').$post->created_at }}</small>
        </div>
        @endforeach
        {{ $posts->render() }}
        @else
        <div class='rounded mx-2 my-2 px-6 py-4 bg-gray-500'>
            <h3>{{ __('No posts found') }}</h3>
            <small>{{ __('MISSING') }}</small>
        </div>
        @endif
    </div>

@endsection
