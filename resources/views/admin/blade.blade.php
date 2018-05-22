@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="main">

            <div class="row">
                <div class="col">
                    <a class="display-4 justify-content-center" href="{{ route('admin') }}">
                        <span class="badge badge-light font-weight-light bg-white">{{ __('Ustawienia') }}</span>
                    </a>
                </div>
            </div>

            @yield('adminToDoContent')

        </div>

    </div>
@endsection
