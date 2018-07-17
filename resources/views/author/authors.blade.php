@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row display-3">
            <div class="col">
                Autorzy
            </div>
        </div>

        <div class="row justify-content-center mt-2">
            @foreach($authors as $author)
                <div class="col-lg-3 mt-2 mr-3">
                    <div class="row h2 font-weight-light">
                        <a href="{{ route('author-id', ['id' => $author->id]) }}" class="col text-center list-group-item list-group-item-action list-group-item-warning">
                            {{ $author->firstname.' '.$author->lastname }}
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection