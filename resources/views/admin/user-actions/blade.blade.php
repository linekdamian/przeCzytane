@extends('admin.blade')

@section('adminToDoContent')
    <div class="row">
        <div class="col-lg">
            <a class="text-muted h2" href="{{ route('admin-user') }}">
                <span class="badge badge-light font-weight-light bg-white">{{__('Sekcja Użytkowników')}}</span>
            </a>
        </div>
    </div>

    @include('admin.messages')

    @yield('adminUserToDoContent')

@endsection