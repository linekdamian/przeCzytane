@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="main">

            <div class="row">
                <div class="col">
                    <div class="display-4 justify-content-center">
                        {{ __('Ustawienia') }}
                    </div>
                </div>
            </div>

            @yield('adminToDoContent')

        </div>

    </div>
@endsection
