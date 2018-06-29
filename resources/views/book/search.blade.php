@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row h-100">
            @foreach($books as $book)
                <?php $authors = $book->authors ?>
                <div id="card" class="col-lg-3 float-left mb-3">
                    <div class="card text-center border-warning">
                        <div class="card-header bg-dark text-white border-warning">

                            {{ $book->title }}
                        </div>
                        <div class="card-body">
                            <div class="card-subtitle mb-2 text-muted">
                                @foreach($authors as $author)
                                {{ $author->firstname.' '.$author->lastname }}
                                @endforeach
                            </div>

                            <div class="card-text text-truncate mb-2">
                                {{ $book->description }}
                            </div>
                            <div class="justify-content-center">
                                <a href="{{ route('book', ['id'=> $book->isbn]) }}" class="btn btn-outline-warning text-dark">Przjedź</a>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
        @if($searchingAuthors->isNotEmpty())
            <div class="row display-3">
                <div class="col">
                    Autorzy
                </div>
            </div>
            <div class="row justify-content-center mt-2">
                @foreach($searchingAuthors as $author)
                    <div class="col-lg-3 mt-2 mr-3">
                        <div class="row h2 font-weight-light">
                            <a href="{{ route('author-id', ['id' => $author->id]) }}" class="col text-center list-group-item list-group-item-action list-group-item-warning">
                                {{ $author->firstname.' '.$author->lastname }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection