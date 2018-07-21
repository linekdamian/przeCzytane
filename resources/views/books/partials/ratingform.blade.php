<div class="col-lg-4">
    @auth
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
                <div class="btn btn-outline-warning m-auto material-icons" data-toggle="tooltip" data-placement="bottom"
                     title="ADD TO WATCHLIST">
                    library_add
                </div>
                <div class="btn btn-outline-warning m-auto material-icons" data-toggle="tooltip" data-placement="bottom"
                     title="NOT INTERESTED">
                    not_interested
                </div>
            </div>
        </div>
    @elseguest
        <div class="jumbotron guestrating rounded justify-content-center p-5">
            <div class="display-4 title">
                If you want to rate books, please <span class="btn btn-dark title">SIGN IN</span> or
                <span class="btn btn-dark title">SIGN UP</span>
            </div>
        </div>
    @endauth
</div>