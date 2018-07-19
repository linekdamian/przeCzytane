@extends('user.user')

@section('userProfileContent')
    <div class="pb-5 p-3">
        <div class="row">
            <div class="col">
                Na przeCzytane od: {{ date('d-m-Y', strtotime($user->created_at)) }}
            </div>
        </div>
        <div class="row">
            <div class="col">
                @if($user->description)
                    {{ $user->description }}
                @endif
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <div class="row display-4">
                    Ulubione
                </div>
                <div class="row mt-4">
                    @foreach($user->books as $book)
                        <?php $authors = $book->authors ?>
                        @if($book->pivot->favorite == 1)
                            @include('books.partials.cardbook')
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

    </div>
@endsection