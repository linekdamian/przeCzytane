@extends('layouts.app')
@section('content')
    <div class="container">
        @include('category.partials.category.top')
        <div class="row mt-4">
            @foreach($category->book as $book)
                <?php $authors = $book->authors ?>
                @include('books.partials.cardbook')
            @endforeach
        </div>
    </div>
@endsection