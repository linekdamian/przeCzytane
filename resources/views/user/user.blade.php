@extends('layouts.app')

@section('content')
    <div class="container" style="height: 10000px">

        <nav class="sidenav bg-dark p-3">
            <div class="navbar-nav">
                <a class="btn btn-dark text-white "
                   href="{{ url('/user', ['id' => $user->name]) }}">{{__('Aktywność') }}</a>

                {{--<a class="btn btn-dark nav-link text-white " href="../user/{{$user->name}}/about">{{__('O mnie') }}</a>--}}

                <a class="btn btn-dark nav-link text-white "
                   href="{{ route('about', ['id' => $user->name]) }}">{{__('O mnie') }}</a>

                <a class="btn btn-dark nav-link text-white " href="">{{__('Oceny') }}</a>

                <a class="btn btn-dark nav-link text-white " href="">{{__('Chcę przeczytać') }}</a>

                <a class="btn btn-dark nav-link text-white " href="">{{__('Znajomi') }}</a>

            </div>
        </nav>

        <div class="main">

            <div class="container">

                <div class="h2 font-weight-light">
                    {{ $user->name }} <br>
                    <span class="small text-secondary">
                    {{ $user->email }}
                </span>

                </div>

                @yield('userProfileContent')

            </div>
        </div>

    </div>
@endsection
