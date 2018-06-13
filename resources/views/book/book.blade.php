@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row display-3">
            {{ $book->title }}
        </div>
        <div class="row text-muted display-4">
            @foreach($book->authors as $author)
                {{ $author->firstname.' '.$author->lastname }}
            @endforeach
        </div>
        <div class="row mt-3">
            <div class="col-lg-8">
                <div class="row">
                    {{ $book->description }}
                </div>
                <div class="row mt-5">
                    <ul class="list-group">
                        <li class="list-group-item">Wydawnictwo: {{ $book->publisher->name }}</li>
                        <li class="list-group-item">Gatunek: {{ $book->category->name }}</li>
                        <li class="list-group-item">ISBN: {{ $book->isbn }}</li>
                        <li class="list-group-item">Dodana: {{ date('d-m-Y', strtotime($book->created_at)) }}</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div>
                    <nav class="bg-warning p-3 shadow-lg rounded">
                        <div class="navbar-nav">
                            <div class="row ml-auto mr-auto">
                                @for($i=0;$i<10;$i++)
                                    <i class="material-icons">star_border</i>
                                @endfor
                                <i class="material-icons ml-3">favorite_border</i>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <form action="">
                                        <textarea class="form-control mb-3 bg-light text-dark shadow"
                                                  id="ratingTextarea"></textarea>
                                    </form>
                                    <div class="btn btn-outline-dark nav-link m-auto">
                                        Recenzuj
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <div class="btn btn-outline-dark nav-link m-auto">
                                        Chcę przeczytać
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="btn btn-outline-dark nav-link m-auto">
                                        Nie interesuje mnie
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection