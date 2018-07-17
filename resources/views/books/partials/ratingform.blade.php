<div class="col-lg-4">
    <div class="jumbotron bg-secondary p-3">
        <hr class="my-4">
        <div class="row mx-auto px-auto">
            @include('books.partials.rating.authrating')
            @include('books.partials.rating.authfavorite')
        </div>
        <hr class="my-4">
        @include('books.partials.rating.authreview')
        <hr class="my-4">
        <div class="row mt-3 text-center">
            <div class="btn btn-outline-dark m-auto material-icons" data-toggle="tooltip" data-placement="bottom"
                 title="ADD TO WATCHLIST">
                library_add
            </div>
            <div class="btn btn-outline-dark m-auto material-icons" data-toggle="tooltip" data-placement="bottom"
                 title="NOT INTERESTED">
                not_interested
            </div>
        </div>
    </div>
</div>