@extends('layouts.app')

@section('content')
            <div class='rounded mx-2 my-2 px-6 py-4 bg-gray-400 dark:bg-gray-700'>
                <h1 class='text-2xl font-semibold'>
                    {{ $post->title }}
                </h1>
                <div class='rounded mx-2 my-6 px-6 py-8 bg-gray-300 dark:bg-gray-500'>
                    {!! $post->body !!}
                </div>
                <hr>
                <small>{{ __('Written on ').$post->created_at }}</small>
                <div class="grid justify-items-end">
                    <div class="flex flex-row">
                        <a name="edit"
                            href="{{ route('posts.edit', [ 'post' => $post->id ]) }}"
                            class="rounded mx-2 my-2 px-4 py-2 font-semibold text-gray-100 bg-blue-500 hover:bg-blue-100 hover:text-blue-600">
                            {{ __('EDIT') }}
                        </a>
                        <form action="{{ route('posts.destroy', [ 'post' => $post->id ]) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit"
                                    class="rounded mx-2 my-2 px-4 py-2 font-semibold text-gray-100 bg-red-500 hover:bg-red-100 hover:text-red-600">
                                    {{ __('DELETE') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
@endsection
