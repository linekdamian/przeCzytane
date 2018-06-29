@extends('user.user')

@section('userProfileContent')
    <div class="pb-5 p-3">
        <div class="row mt-5">
            <div class="col">
                <div class="row display-4">
                    Aktywność
                </div>

                <div class="row mt-4">
                    @foreach($books as $book)
                        <?php $author = $book->authors ?>
                        @if($book->pivot->rating)
                            <div class="jumbotron jumbotron-fluid w-100 pt-0 pb-1 rounded">
                                <div class="container">
                                    <h1 class="display-4">{{ $book->title }}</h1>
                                    <p class="lead">{{'Recenzja: '.$book->pivot->review}}</p>
                                    <p class="lead">{{'Ocena: '.$book->pivot->rating}}</p>
                                    <p class="lead">{{'Dodano: '.date('d-m-Y', strtotime($book->pivot->updated_at))}}</p>
                                    <div class="justify-content-center text-center">
                                        <a href="{{ route('book', ['id'=> $book->isbn]) }}"
                                           class="btn btn-outline-dark">Przjedź</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

        </div>

    </div>
@endsection