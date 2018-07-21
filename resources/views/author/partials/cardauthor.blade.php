<div class="col-lg-4">
    <div class="card m-2">
        <div class="card-header title bg-dark text-light">
            {{ $author->firstname.' '.$author->lastname }}
        </div>
        <div class="card-body bg-secondary">
            <h5 class="card-title">BOOK CATEGORIES</h5>
            <p class="card-text">DESCRIBE AUTHOR HERE</p>
            <a href="{{ route('author', ['author' => $author->id]) }}" class="btn btn-outline-warning">ENTER</a>
        </div>
    </div>
</div>