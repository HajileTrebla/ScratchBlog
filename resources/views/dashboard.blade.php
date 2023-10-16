@extends('layouts.app')

@section('content')
<div class="mx-4 my-4 px-8 py-4 rounded bg-gray-300 dark:bg-gray-700">
    <div class="mx-2 my-4">
        <div class="">
            {{ __('Dashboard') }}
        </div>
        <div class="">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            {{ __('You are logged in!') }}
        </div>
    </div>
    <div class="mx-8 my-4 flex flex-col">
       <ul class="flex flex-row">
           <li>
               <a href="{{ route('posts.create') }}"
                  class="rounded mx-2 my-4 px-4 py-2 font-semibold text-gray-100 bg-blue-500 hover:bg-blue-100 hover:text-blue-600">
                   Create Post
               </a>
           </li>
       </ul>
    </div>
</div>
@endsection
