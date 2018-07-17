@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row h-100">
            @foreach($books as $book)
                @php $authors = $book->authors @endphp
                @include('books.partials.cardbook')
            @endforeach
        </div>
    </div>
@endsection