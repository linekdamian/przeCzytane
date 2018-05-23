@extends('admin.blade')

@section('adminToDoContent')

    <div class="row">
        <div class="col-auto float-left w-">
            <a class="display-4 justify-content-center" href="{{ route('admin') }}">
                <span class="badge badge-light font-weight-light bg-white">{{ __('Ustawienia') }}</span>
            </a>
        </div>
        <div class="col-auto float-left">
            <a class="display-4 justify-content-center" href="{{ route('admin-user') }}">
                <div class="badge badge-light font-weight-light bg-white text-muted h2">
                    {{__('Sekcja Użytkowników')}}
                </div>
            </a>
        </div>
    </div>
    @include('admin.messages')

    @yield('adminUserToDoContent')

@endsection