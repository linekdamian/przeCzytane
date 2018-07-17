@extends('layouts.app')
@section('content')
    <div class="container">
        @include('category.partials.top')
        <div class="row justify-content-center mt-2">
            @foreach($categories as $category)
                @include('category.partials.card-category')
            @endforeach
        </div>
    </div>
@endsection