@extends('user.user')

@section('userProfileContent')

    @foreach($filtruj as $fuser)
        @if($user->name != $fuser->name)
        <a class="col-3 btn btn-warning float-left mr-3 mb-2 shadow-depth-2" href="{{ route('about', ['id'=> $fuser->name]) }}">
            {{ $fuser->name }}
        </a>
        @endif
    @endforeach

@endsection