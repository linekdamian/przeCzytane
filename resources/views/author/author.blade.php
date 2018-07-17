@extends('layouts.app')
@section('content')
    <div class="container">
        @include('author.partials.author.top')
        <div class="row mt-4">
            @foreach($author->book as $book)
                @php $authors = $book->authors @endphp
                @include('books.partials.cardbook')
            @endforeach
        </div>
    </div>
@endsection