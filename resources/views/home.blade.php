@extends('layouts.app')

@section('content')
<div class="container">

    @if (session('status'))
        <div class="alert alert-warning">
            {{ session('status') }}
        </div>
    @endif
    <div class="row">
        <div class="jumbotron w-100">
            <h1 class="display-4">Nowość!</h1>
            <h2>{{ $book->title }}</h2>
            <p class="lead"> {{ $book->description }}</p>
            <hr class="my-4">
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="{{ route('book', ['id' => $book->isbn]) }}" role="button">Sprawdź</a>
            </p>
        </div>
    </div>
</div>
@endsection
