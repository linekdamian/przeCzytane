@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row display-3">
            {{ $book->title }}
        </div>
        <div class="row text-muted display-4">
            autorzy
        </div>

    </div>
@endsection