@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row h-100">
            @foreach($books as $book)
                @php $authors = $book->authors @endphp
                @include('books.partials.cardbook')
            @endforeach
        </div>
        @if($searchingAuthors->isNotEmpty())
            @include('author.partials.top')
            <div class="row justify-content-center mt-2">
                @foreach($searchingAuthors as $author)
                    @include('author.partials.cardauthor')
                @endforeach
            </div>
        @elseif($books->isEmpty())
            @include('books.partials.nobooks')
        @endif
    </div>
@endsection