<nav class="bg-gray-300 border-gray-900 dark:bg-gray-900">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="" class="flex items-center">
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">ScratchBlog</span>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" fill="none" viewBox="0 0 17 14">
            <path stroe="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-300 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-gray-300 dark:bg-gray-900 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="{{ route('home') }}" class="{{ Request::routeIs('home') ? 'active text-blue-700 hover:text-gray-600 dark:hover:text-gray-300 ' : 'text-gray-900 md:text-gray-900 dark:text-gray-100 md:dark:text-gray-100 hover:text-blue-500 ' }}block py-2 pl-3 pr-4 bg-blue-700 rounded md:bg-transparent md:p-0">Home</a>
        </li>
        <li>
          <a href="{{ route('posts.index') }}" class="{{ Request::routeIs('posts.index') ? 'active text-blue-700 hover:text-gray-600 dark:hover:text-gray-300 ' : 'text-gray-900 md:text-gray-900 dark:text-gray-100 md:dark:text-gray-100 hover:text-blue-500 ' }}block py-2 pl-3 pr-4 bg-blue-700 rounded md:bg-transparent md:p-0">Posts</a>
        </li>
        <li>
          <a href="{{ route('posts.create') }}" class="{{ Request::routeIs('posts.create') ? 'active text-blue-700 hover:text-gray-600 dark:hover:text-gray-300 ' : 'text-gray-900 md:text-gray-900 dark:text-gray-100 md:dark:text-gray-100 hover:text-blue-500 ' }}block py-2 pl-3 pr-4 bg-blue-700 rounded md:bg-transparent md:p-0">Create Post</a>
        </li>
        <li>
          <a href="{{ route('about') }}" class="{{ Request::routeIs('about') ? 'active text-blue-700 hover:text-gray-600 dark:hover:text-gray-300 ' : 'text-gray-900 md:text-gray-900 dark:text-gray-100 md:dark:text-gray-100 hover:text-blue-500 ' }}block py-2 pl-3 pr-4 bg-blue-700 rounded md:bg-transparent md:p-0" >About</a>
        </li>
        <li>
          <a href="{{ route('services') }}" class="{{ Request::routeIs('services') ? 'active text-blue-700 hover:text-gray-600 dark:hover:text-gray-300 ' : 'text-gray-900 md:text-gray-900 dark:text-gray-100 md:dark:text-gray-100 hover:text-blue-500 ' }}block py-2 pl-3 pr-4 bg-blue-700 rounded md:bg-transparent md:p-0">Services</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

