@extends('layouts.app')

@section('content')
            <div class='rounded mx-2 my-2 px-6 py-4 bg-gray-400 dark:bg-gray-700'>
                @if($post->cover_image)
                    <div class="overflow-hidden flex flex-row rounded w-full h-96 my-2">
                        <div class="flex flex-grow">
                        </div>
                        <div class="w-4/6">
                            <img src="{{ asset('storage/'.$post->cover_image) }}"
                                 alt=""
                                 class="rounded object-fit align-self-center">
                        </div>
                        <div class="flex flex-grow">
                        </div>
                    </div>
                @endif
                <h1 class='text-2xl font-semibold'>
                    {{ $post->title }}
                </h1>
                <div class='rounded mx-2 my-6 px-6 py-8 bg-gray-300 dark:bg-gray-500'>
                    {!! $post->body !!}
                </div>
                <hr>
                <small>{{ __('Written on ').$post->created_at.__(' by ').$post->user->name }}</small>
                <div class="flex flex-row">
                    <div class="flex">
                        <a href="{{ url()->previous() }}"
                           class="mx-2 my-4 px-4 py-2 rounded bg-gray-400 hover:bg-gray-300">
                            {{ __('Return') }}
                        </a>
                    </div>
                    <div class="flex flex-grow">
                    </div>
                    @auth
                        @if(auth()->user()->id === $post->user_id)
                            <div class="grid">
                                <a name="edit"
                                    href="{{ route('posts.edit', [ 'post' => $post->id ]) }}"
                                    class="rounded mx-2 my-4 px-4 py-2 font-semibold text-gray-100 bg-blue-500 hover:bg-blue-100 hover:text-blue-600">
                                    {{ __('EDIT') }}
                                </a>
                            </div>
                            <div class="grid">
                                <form action="{{ route('posts.destroy', [ 'post' => $post->id ]) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"
                                            class="rounded mx-2 my-4 px-4 py-2 font-semibold text-gray-100 bg-red-500 hover:bg-red-100 hover:text-red-600">
                                            {{ __('DELETE') }}
                                    </button>
                                </form>
                            </div>
                        @endif
                    @endauth
                </div>
            </div>
@endsection
