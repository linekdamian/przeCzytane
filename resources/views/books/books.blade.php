@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row h-100">
            @foreach($books as $book)
                @php $author = $book->authors @endphp
                @include('book.partials.cardbook')
            @endforeach
        </div>
    </div>
@endsection