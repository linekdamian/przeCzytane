@extends('admin.admin')

@section('adminToDoContent')
    <div class="row">
        <div class="col-lg">
            <div class="text-muted text-light h2">
                Sekcja Użytkowników
            </div>
        </div>
    </div>

    @include('admin.messages')

    @yield('adminUserToDoContent')

@endsection