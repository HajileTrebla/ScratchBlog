@extends('layouts.app')

@section('content')
    <div class="mx-14 mt-2">
        <h1 class='text-4xl font-bold'>Posts</h1>
        @if(count($posts) > 0)
        @foreach($posts as $post)
        <div class="my-4">
            <a href="{{ route('posts.show', [ 'post'=>$post->id ]) }}" class="">
                <div class='flex rounded mx-14 mt-2 px-6 py-4 bg-gray-300 dark:bg-gray-500 hover:bg-gray-600'>
                    <div class="flex flex-col">
                        <div class='flex-grow'></div>
                        <h3 class="align-self-center hover:text-blue-700 hover:underline text-2xl">
                            {{ $post->title }}
                        </h3>
                        <small>{{ __('Written on ').$post->created_at.__(' by ').$post->user->name }}</small>
                        <div class='flex-grow'></div>
                    </div>
                    <div class="flex flex-grow">
                    </div>
                    @if($post->cover_image)
                    <div class="overflow-hidden h-48 w-72">
                        <img src="{{ asset('storage/'.$post->cover_image) }}"
                        alt=""
                        class="rounded object-contain align-self-center">
                    </div>
                    @endif
                </div>
            </a>
        </div>
        @endforeach
        <div class="mx-2 my-4">
            {{ $posts->render() }}
        </div>
        @else
        <div class='rounded mx-2 my-2 px-6 py-4 bg-gray-500'>
            <h3>{{ __('No posts found') }}</h3>
            <small>{{ __('MISSING') }}</small>
        </div>
        @endif
    </div>

@endsection
