@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row h-100">
            @foreach($books as $book)
                <div id="card" class="col-lg-3 float-left mb-3">
                    <div class="card text-center border-warning">
                        <div class="card-header bg-dark text-white border-warning">

                            {{ $book->title }}
                        </div>
                        <div class="card-body">
                            <div class="card-subtitle mb-2 text-muted">
                                {{--{{ $book-> }}--}}
                                Tutaj będą autorzy
                            </div>

                            <div class="card-text text-truncate">
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
    </div>
@endsection