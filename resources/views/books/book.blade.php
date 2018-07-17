@extends('layouts.app')
@section('content')
    @php $collection = collect([1 => 'light', 2 => 'dark', 3 => 'secondary', 4 => 'dark', 5 => 'secondary']);@endphp
    <div class="container">
        @include('books.partials.top')
        <div class="row mt-3">
            @include('books.partials.description')
            @include('books.partials.ratingform')
        </div>
    </div>
@endsection