<nav class="bg-gray-300 border-gray-900 dark:bg-gray-900">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" fill="none" viewBox="0 0 17 14">
            <path stroe="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-screen md:flex md:flex-row" id="navbar-default">
      <ul class="font-medium flex flex-row p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-300 md:self-start md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-gray-300 dark:bg-gray-900 md:dark:bg-gray-900 dark:border-gray-700">
        <!-- main nav -->
        <li>
              <a href="{{ route('landing') }}" class="{{ Request::routeIs('landing') ? 'active text-blue-700 hover:text-gray-600 dark:hover:text-gray-300 ' : 'text-gray-900 md:text-gray-900 dark:text-gray-100 md:dark:text-gray-100 hover:text-blue-500 ' }}block py-2 pl-3 pr-4 bg-blue-700 rounded md:bg-transparent md:p-0">Home</a>
        </li>
        <li>
              <a href="{{ route('about') }}" class="{{ Request::routeIs('about') ? 'active text-blue-700 hover:text-gray-600 dark:hover:text-gray-300 ' : 'text-gray-900 md:text-gray-900 dark:text-gray-100 md:dark:text-gray-100 hover:text-blue-500 ' }}block py-2 pl-3 pr-4 bg-blue-700 rounded md:bg-transparent md:p-0" >About</a>
        </li>
        <li>
              <a href="{{ route('services') }}" class="{{ Request::routeIs('services') ? 'active text-blue-700 hover:text-gray-600 dark:hover:text-gray-300 ' : 'text-gray-900 md:text-gray-900 dark:text-gray-100 md:dark:text-gray-100 hover:text-blue-500 ' }}block py-2 pl-3 pr-4 bg-blue-700 rounded md:bg-transparent md:p-0">Services</a>
        </li>
        @auth
            <li>
                <a href="{{ route('posts.index') }}" class="{{ Request::routeIs('posts.index') ? 'active text-blue-700 hover:text-gray-600 dark:hover:text-gray-300 ' : 'text-gray-900 md:text-gray-900 dark:text-gray-100 md:dark:text-gray-100 hover:text-blue-500 ' }}block py-2 pl-3 pr-4 bg-blue-700 rounded md:bg-transparent md:p-0">Blog</a>
            </li>
        @endauth
      </ul>

      <!-- SPACER -->
      <div class="md:flex md:flex-grow">
      </div>
      <!-- SPACER -->

      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-300 md:self-end md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-gray-300 dark:bg-gray-900 md:dark:bg-gray-900 dark:border-gray-700">
          <!-- Authentication Links -->
          @guest
              @if (Route::has('login'))
                  <li>
                      <a href="{{ route('login') }}" class="{{ Request::routeIs('login') ? 'active text-blue-700 hover:text-gray-600 dark:hover:text-gray-300 ' : 'text-gray-900 md:text-gray-900 dark:text-gray-100 md:dark:text-gray-100 hover:text-blue-500 ' }}block py-2 pl-3 pr-4 bg-blue-700 rounded md:bg-transparent md:p-0">{{ __('Login') }}</a>
                  </li>
              @endif

              @if (Route::has('register'))
                  <li>
                      <a href="{{ route('register') }}" class="{{ Request::routeIs('register') ? 'active text-blue-700 hover:text-gray-600 dark:hover:text-gray-300 ' : 'text-gray-900 md:text-gray-900 dark:text-gray-100 md:dark:text-gray-100 hover:text-blue-500 ' }}block py-2 pl-3 pr-4 bg-blue-700 rounded md:bg-transparent md:p-0">{{ __('Register') }}</a>
                  </li>
              @endif
          @else
          <li>
              <a href="{{ route('home') }}" class="{{ Request::routeIs('home') ? 'active hidden ' : 'text-gray-900 md:text-gray-900 dark:text-gray-100 md:dark:text-gray-100 hover:text-blue-500 ' }}block py-2 pl-3 pr-4 bg-blue-700 rounded md:bg-transparent md:p-0">
                  {{ Auth::user()->name }}
              </a>
          </li>
          <li>
              <a class="{{ !Request::routeIs('home') ? 'active hidden ' : 'text-gray-900 md:text-gray-900 dark:text-gray-100 md:dark:text-gray-100 hover:text-blue-500 ' }}block py-2 pl-3 pr-4 bg-blue-700 rounded md:bg-transparent md:p-0" href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                  @method('post')
              </form>
          </li>
          @endguest
      </ul>
    </div>
  </div>
</nav>
