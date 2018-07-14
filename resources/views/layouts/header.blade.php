<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-dark">
        <div class="col-lg-4 col-md-12 col-sm-12">
            <a class="navbar-brand mb-2 d-flex justify-content-md-center justify-content-sm-center"
               href="{{ url('/home') }}">
                <div class="logo display-4">
                    <span class="logo font-weight-light h1">prze</span>czytane
                </div>
            </a>
        </div>
        <div class="col">
            <div class="row">
                <div class="col">
                    <form method="post" class="col-lg input-group mb-3 w-100 float" action="{{ route('search') }}">
                        @csrf
                        <input id="search" name="search" type="text"
                               class="form-control text-center form-control-sm"
                               placeholder="Autor / Tytuł / ISBN" aria-label="Recipient's username"
                               aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-warning btn-sm" type="submit">{{ __('Szukaj') }}</button>
                        </div>
                    </form>

                </div>
                @guest
                    <div class="col-lg-2">

                        <ul class="ml-auto navbar-nav">
                            <!-- Authentication Links -->

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{__('Zaloguj') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Zarejestruj') }}</a>
                            </li>

                        </ul>
                    </div>
                @endguest
            </div>

            <div class="row">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto float-right">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('home') }}">Główna</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-dark dropdown-toggle" role="button" href="#"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Przeglądaj</a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('users') }}">Użytkownicy</a>
                                <a class="dropdown-item" href="{{ route('books') }}">Książki</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('category') }}">Kategorie</a>
                                <a class="dropdown-item" href="{{ route('author') }}">Autorzy</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link text-dark dropdown-toggle" role="button" href="#"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Rankingi</a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        @auth
                            <li class="nav-item">
                                <a class="nav-link text-dark"
                                   href="{{ route('friends', ['id'=> Auth::user()->name]) }}">Znajomi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="{{ route('ratings', ['id'=>Auth::user()->name]) }}">Biblioteka</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark" href="#"
                                   role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                    @if(Auth::user()->roles->name == 'admin')
                                        <a class="dropdown-item"
                                           href="{{route('admin')}}">

                                            {{ __('Admin') }}
                                        </a>
                                    @endif

                                    <a class="dropdown-item"
                                       href="{{route('about', ['id' => Auth::user()->name])}}">

                                        {{ __('Profil') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Wyloguj') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>