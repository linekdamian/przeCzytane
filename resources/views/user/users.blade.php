@extends('layouts.app')

@section('content')

<div class="container">
    @foreach($users as $user)
        <a class="col-3 btn btn-warning mr-3 mb-2" href="{{ route('about', ['id'=> $user->name]) }}">
            {{ $user->name }}
        </a>
    @endforeach
</div>

@endsection