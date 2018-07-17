@extends('layouts.app')
@section('content')
    <div class="container">
        @include('author.partials.top')
        <div class="row justify-content-center mt-2">
            @foreach($authors as $author)
                @include('author.partials.cardauthor')
            @endforeach
        </div>
    </div>
@endsection