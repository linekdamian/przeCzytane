@extends('user.user')

@section('userProfileContent')
    <div class="pb-5 p-3">
        <div class="row">
            <div class="col">
                Na przeCzytane od: {{ date('d-m-Y', strtotime($user->created_at)) }}
            </div>
        </div>
        <div class="row">
            @if(Auth::user()->name == $user->name)
                <div class="col">
                    @if($user->description)
                        {{ $user->description }}
                    @endif
                </div>
            @else
                <div class="col pt-2">
                    {{ $user->description }}
                </div>
            @endif
        </div>

        <div class="row mt-5">
            <div class="col">
                <div class="row display-4">
                    Ulubione
                </div>

                <div class="row mt-4">
                    @foreach($user->books as $book)
                        <?php $author = $book->authors ?>
                        @if($book->pivot->favourite == 1)
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
                        @endif
                    @endforeach
                </div>
            </div>

        </div>

    </div>
@endsection