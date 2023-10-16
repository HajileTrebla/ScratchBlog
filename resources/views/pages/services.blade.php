@extends('layouts.app')

@section('content')
        <div class='text-center ounded mx-12 my-24 px-12 py-8 bg-gray-300 dark:bg-gray-700'>
            <div class='text-5xl py-8 font-semibold'>
                {{ __('Services') }}
            </div>
            <hr>
            <div class='grid justify-items-center text-left text-2xl py-8'>
                <ul class="list-disc">
                    <li>
                        {{ __('Walang kinikilingan,') }}
                    </li>
                    <li>
                        {{ __('walang pinroprotektahan,') }}
                    </li>
                    <li>
                        {{ __('Serbisyong totoo lamang') }}
                    </li>
                </ul>
            </div>
        </div>
@endsection
