{{--<div class="col-lg-3 mt-2 mr-3">--}}
{{--<div class="row h2 font-weight-light">--}}
{{--<a href="{{ route('author', ['author' => $author->id]) }}"--}}
{{--class="col text-center list-group-item list-group-item-action list-group-item-warning">--}}
{{--{{ $author->firstname.' '.$author->lastname }}--}}
{{--</a>--}}
{{--</div>--}}
{{--</div>--}}

<div class="col-lg-4">
    <div class="card m-2">
        <div class="card-header title bg-dark text-light">
            {{ $author->firstname.' '.$author->lastname }}
        </div>
        <div class="card-body bg-secondary">
            <h5 class="card-title">BOOK CATEGORIES</h5>
            <p class="card-text">DESCRIBE AUTHOR HERE</p>
            <a href="{{ route('author', ['author' => $author->id]) }}" class="btn btn-outline-dark">ENTER</a>
        </div>
    </div>
</div>