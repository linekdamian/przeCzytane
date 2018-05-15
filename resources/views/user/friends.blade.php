@extends('user.user')

@section('userProfileContent')

    @foreach($friendo as $friendlyUser)
        @if($user->name != $friendlyUser->name)
            <div class="col-lg-3 float-left">
                <a class="btn btn-warning mr-3 mb-2 shadow-lg w-100"
                   href="{{ route('about', ['id'=> $friendlyUser->name]) }}">
                    {{ $friendlyUser->name }}
                </a>
            </div>
        @endif
    @endforeach

@endsection