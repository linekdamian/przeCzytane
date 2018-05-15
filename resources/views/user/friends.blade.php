@extends('user.user')

@section('userProfileContent')

    @foreach($friendo as $friendlyUser)
        @if($user->name != $friendlyUser->name)
        <a class="col-3 btn btn-warning float-left mr-3 mb-2 shadow-depth-2" href="{{ route('about', ['id'=> $friendlyUser->name]) }}">
            {{ $friendlyUser->name }}
        </a>
        @endif
    @endforeach

@endsection