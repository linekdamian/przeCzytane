@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            @foreach($users as $user)
                <div class="col-lg-3 float-left">
                    <a class="btn btn-warning mr-3 mb-2 shadow-lg w-100"
                       href="{{ route('about', ['id'=> $user->name]) }}">
                        {{ $user->name }}
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection