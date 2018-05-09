<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-dark">
        <div class="col-lg-4">
            <a class="navbar-brand mb-2" href="{{ url('/home') }}">
                <div class="logo display-4">
                    <span class="logo font-weight-light h1">prze</span>czytane
                </div>
            </a>
        </div>

        <div class="col">
            <div class="row">
                <div class="col-lg input-group mb-3">
                    <input type="text" class="form-control text-center form-control-sm"
                           placeholder="Autor / Tytuł / ISBN" aria-label="Recipient's username"
                           aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-warning btn-sm" type="button">Szukaj</button>
                    </div>
                </div>

                <div class="col-lg-2">
                    <ul class="ml-auto navbar-nav">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{__('Zaloguj') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Zarejestruj') }}</a>
                            </li>
                        @else

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark text-right" href="#" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
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
                        @endguest
                    </ul>
                </div>
            </div>

            <div class="row">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ url('#') }}">Główna</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ url('#') }}">Znajomi</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ url('#') }}">Biblioteka</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link text-dark dropdown-toggle" role="button" href="#"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Przeglądaj</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
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
                </ul>
            </div>
        </div>
    </nav>
</div>