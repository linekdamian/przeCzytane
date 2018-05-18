@extends('layouts.app')

@section('content')
    <div class="container">

        @include('layouts.profile-sidebar')

        <div class="mainUser">

            <div class="row">
                <div class="col">
                    <div class="h2 font-weight-light">
                        {{ $user->name }} <br>
                        <span class="small text-secondary">
                            {{ $user->email }}
                        </span>

                    </div>
                </div>
            </div>

            @yield('userProfileContent')

        </div>

    </div>
@endsection
