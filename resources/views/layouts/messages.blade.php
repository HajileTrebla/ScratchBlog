@if(count($errors) > 0)
    @foreach($errors->all as $error)
        <div class=' rounded p-4 mb-4 border-red-300 border-2 text-red-800 dark:text-red-400'>
            {{ $error }}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class=' rounded p-4 mb-4 border-green-300 border-2 text-green-800 dark:text-green-400'>
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class=' rounded p-4 mb-4 border-red-300 border-2 text-red-800 dark:text-red-400'>
        {{ session('error') }}
    </div>
@endif
