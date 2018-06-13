@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row display-3">
            <div class="col ">
                <a href="{{ route('category') }}" class="badge badge-light text-muted font-weight-light">Kategorie</a>

            </div>
            <div class="col">
                {{ $category->name }}
            </div>
        </div>

        <div class="row mt-4">
            @foreach($category->book as $book)
                <?php $author = $book->authors ?>
                <div id="card" class="col-lg-3 float-left mb-3">
                    <div class="card text-center border-warning">
                        <div class="card-header bg-dark text-white border-warning">

                            {{ $book->title }}
                        </div>
                        <div class="card-body">
                            @foreach($author as $aut)
                                <div class="card-subtitle mb-2 text-muted">
                                    {{ $aut->firstname }} {{ $aut->lastname }}
                                </div>
                            @endforeach
                            <div class="card-text text-truncate">
                                {{ $book->description }}
                            </div>
                            <div class="justify-content-center">
                                <a href="{{ route('book', ['id'=> $book->isbn]) }}"
                                   class="btn btn-outline-warning text-dark">Przjedź</a>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
@endsection