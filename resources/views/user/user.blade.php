@extends('layouts.app')
@section('supporting.navbar')
    @include('user.partials.header')
@endsection
@section('content')

    <div class="container mt-3">

        {{--@include('layouts.profile-sidebar')--}}

        <div class="">

            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="h2 font-weight-light">
                            {{ $user->name }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="h2 font-weight-light">
                            {{ $user->firstname }} {{ $user->lastname }}
                        </div>
                    </div>
                </div>
                <?php $friend = Auth::user()->getFriends();
                if ($friend->contains('nameFirst', $user->name)) {

                } elseif ($friend->contains('nameSecond', $user->name)) {
                } elseif (Auth::user()->name == $user->name) {
                } else { ?>
                <div class="col">
                    <a class="btn btn-outline-dark btn-md float-right" href=""
                       onclick="event.preventDefault();
                       document.getElementById('add-friend-form').submit();">
                        {{ __('Dodaj do znajomych') }}
                    </a>
                    <form id="add-friend-form" action="{{ route('add-friend') }}" method="POST"
                          style="display: none;">
                        <input type="hidden" name="userName" value="{{ $user->name }}">
                        @csrf
                    </form>
                </div>
                <?php } ?>

                @if(Auth::user()->name == $user->name)
                    <div class="col">
                        <a class="btn btn-outline-warning btn-md float-right"
                           href="{{ route('index-edit-profile', ['id' => Auth::user()->name]) }}">
                            {{ __('Edytuj profil') }}
                        </a>
                    </div>
                @endif
            </div>

            @yield('userProfileContent')

        </div>

    </div>
@endsection
