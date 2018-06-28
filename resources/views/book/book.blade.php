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
                <div class="row mt-5 mb-5">
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
                                @auth()
                                    <form action="{{ route('setBookRating') }}" method="post">
                                        @csrf

                                        <input type="hidden" name="isbn" value="{{ $book->isbn }}">
                                        @for($i=1;$i<11;$i++)
                                            @if($favorite->pivot->rating >= $i)
                                                <button type="submit" name="rating" value="{{$i}}"
                                                        class="btn p-0 btn-sm material-icons text-danger bg-warning float-left">
                                                    star
                                                </button>
                                            @else
                                                <button type="submit" name="rating" value="{{$i}}"
                                                        class="btn p-0 btn-sm material-icons text-dark bg-warning float-left">
                                                    star_border
                                                </button>
                                            @endif
                                        @endfor
                                    </form>
                                    <form action="{{ route('addBookToFavorite') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="isbn" value="{{ $book->isbn }}">
                                        @if($book->users()->where('user_name', '=', Auth::user()->name)->exists())
                                            @if($favorite->pivot->favorite == 1)
                                                <button type="submit"
                                                        class="btn p-0 material-icons ml-3 text-danger bg-warning">
                                                    favorite
                                                </button>
                                            @elseif($favorite->pivot->favorite == 0)
                                                <button type="submit"
                                                        class="btn p-0 material-icons ml-3 text-dark bg-warning">
                                                    favorite_border
                                                </button>
                                            @endif
                                        @else
                                            <button type="submit"
                                                    class="btn p-0 material-icons ml-3 text-dark bg-warning">
                                                favorite_border
                                            </button>
                                        @endif
                                        @endauth

                                        @guest()
                                            @for($i=0;$i<10;$i++)
                                                <a href="#"
                                                   class="btn p-0 btn-sm material-icons text-dark">star_border</a>
                                            @endfor
                                            <button type="submit"
                                                    class="btn p-0 material-icons ml-3 text-dark bg-warning">
                                                favorite_border
                                            </button>
                                        @endguest

                                    </form>
                            </div>
                            @auth()
                            <form action="{{ route('setBookReview') }}" method="post">
                                @csrf

                                <input type="hidden" name="isbn" value="{{ $book->isbn }}">
                                <div class="row mt-3">
                                    <div class="col">
                                        <textarea class="form-control mb-3 bg-light text-dark shadow"
                                                  id="ratingTextarea" name="review">{{ $favorite->pivot->review }}</textarea>
                                        <button type="submit" class="btn btn-outline-dark nav-link m-auto btn-block">
                                            Recenzuj
                                        </button>
                                    </div>
                                </div>
                            </form>
                            @elseguest
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
                            @endauth
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