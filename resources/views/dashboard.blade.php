@extends('layouts.app')

@section('content')
<div class="mx-4 my-4 px-8 py-4 rounded bg-gray-300 dark:bg-gray-700">
    <div class="mx-2 my-4">
        <div class="text-2xl font-semibold">
            {{ __('Dashboard') }}
        </div>
    </div>
    <div class="mx-8 my-8 flex flex-col">
       <ul class="flex flex-row">
           <li>
               <a href="{{ route('posts.create') }}"
                  class="rounded mx-2 my-4 px-4 py-2 font-semibold text-gray-100 bg-blue-500 hover:bg-blue-100 hover:text-blue-600">
                    {{ __('Create Post') }}
               </a>
           </li>
       </ul>
    </div>
    <hr>
    <div class="grid mx-8 my-4">
        <header class="text-3xl font-semibold">
            {{ __('Your Blog Posts') }}
        </header>
        <div class="grid my-8">
            @if(count($posts) > 0)
            <table class="table-fixed rounded bg-gray-500">
                <thead class="text-2xl border-b-2">
                    <tr>
                        <th class="w-2/12 px-4 py-2 "> {{ __('Post ID') }} </th>
                        <th class="w-6/12 px-4 py-2 "> {{ __('Post Title') }} </th>
                        <th class="w-2/12 px-4 py-2 "> {{ __('') }} </th>
                        <th class="w-1/12 px-4 py-2 "> {{ __('Options') }} </th>
                        <th class="w-1/12 px-4 py-2 "> {{ __('') }} </th>
                    </tr>
                </thead>
                <tbody class="text-xl text-center border-b-2 rounded-xl">
                    @foreach($posts as $post)
                    <tr>
                      <td class="font-semibold border-t-2">
                          {{ $post->id }}
                      </td>
                      <td class="font-semibold border-t-2">
                          <a href="{{ route('posts.show', ['post' => $post->id]) }}" class="hover:text-blue-500 hover:underline">
                              {{ $post->title }}
                          </a>
                      </td>
                      <td class="text-sm font-semibold border-t-2">
                          <a href="{{ route('posts.show', ['post' => $post->id]) }}" class="rounded px-4 py-2 bg-blue-500 hover:text-blue-500 hover:bg-blue-100">
                              {{ __('View Post') }}
                          </a>
                      </td>
                      <td class="text-sm border-t-2">
                        <div class="grid justify-items-center">
                            <a name="edit"
                                href="{{ route('posts.edit', [ 'post' => $post->id ]) }}"
                                class="rounded mx-2 my-4 px-4 py-2 w-20 font-semibold text-gray-100 bg-blue-500 hover:bg-blue-100 hover:text-blue-600">
                                {{ __('EDIT') }}
                            </a>
                        </div>
                      </td>
                      <td class="text-sm border-t-2">
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
                      </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <div class="mx-8">
                <header class="text-2xl font-semibold">
                    {{ __('NO POSTS') }}
                </header>
                <small class="font-semibold">
                    {{ __('Create a post by clicking the button above') }}
                </small>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
