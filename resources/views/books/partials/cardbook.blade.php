<div id="card" class="col-lg-4 float-left mb-3">
    <div class="card">
        <div class="card-header bg-dark text-white title">{{ ucfirst($book->title) }}</div>
        <div class="card-body bg-secondary">
            @foreach($authors as $author)
                <div class="card-subtitle pb-2">
                    <a href="{{ route('author', ['author' => $author->id]) }}"
                       class="logo text-dark font-weight-light font-weight-bold">
                        {{ $author->firstname.' '.$author->lastname }}
                    </a>
                </div>
            @endforeach
            <div class="card-text ">{{ $book->description }}</div>
            <div class="justify-content-center">
                <a href="{{ route('book', ['id'=> $book->isbn]) }}"
                   class="btn btn-outline-dark">{{_('ENTER') }}</a>
            </div>
        </div>
    </div>
</div>