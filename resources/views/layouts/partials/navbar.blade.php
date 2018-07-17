<ul class="navbar-nav">
    <li class="nav-item dropdown text-light">
        <a class="nav-link t dropdown-toggle-split" role="button" href="#"
           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            TOP</a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">przykład</a>
        </div>
    </li>
    <li class="nav-item dropdown text-light">
        <a class="nav-link dropdown-toggle-split" role="button" href="#"
           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            EXPLORE</a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('users') }}">USERS</a>
            <a class="dropdown-item" href="{{ route('books') }}">BOOKS</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('categories') }}">CATEGORIES</a>
            <a class="dropdown-item" href="{{ route('authors') }}">AUTHORS</a>
        </div>
    </li>
    @auth
        <li class="nav-item dropdown">
            <a class="nav-link text-dark dropdown-toggle-split" role="button" href="#"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="{{URL::asset('/images/icon.jpg')}}"
                     class="rounded-circle user-icon">
            </a>

            <div class=" dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item"
                   href="{{ route('friends', ['id'=> Auth::user()->name]) }}">{{ __('FRIENDS') }}</a>
                <a class="dropdown-item" href="{{ route('ratings', ['id'=>Auth::user()->name]) }}">{{ __('LIBRARY') }}</a>

                <a class="dropdown-item" href="{{route('about', ['id' => Auth::user()->name])}}">
                    {{ __('PROFILE') }}
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('LOGOUT') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                      style="display: none;">
                    @csrf
                </form>

            </div>
        </li>
    @elseguest
    <!-- Authentication Links -->

        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{__('SIGN IN') }}</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('SIGN UP') }}</a>
        </li>

    @endauth

</ul>