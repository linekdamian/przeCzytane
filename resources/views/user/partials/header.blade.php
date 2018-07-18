<div class="row bg-secondary">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark p-0">
            <a class="navbar-brand title text-uppercase" href="{{ route('about', ['id' => $user->name]) }}">
            <span class="material-icons">home</span> {{strtoupper(Auth::user()->name)}}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto w-100 nav-fill">
                    {{--<li class="nav-item active">--}}
                        {{--<a class="nav-link material-icons"--}}
                           {{--href="{{ route('about', ['id' => $user->name]) }}">home</a>--}}
                    {{--</li>--}}
                    <li class="nav-item active">
                        <a class="nav-link material-icons"
                           href="{{ route('activity', ['id' => $user->name]) }}">timeline
                            <span class="title text-uppercase">activity</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link material-icons"
                           href="{{ route('ratings', ['id' => $user->name]) }}">star
                            <span class="title text-capitalize">ratings</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link material-icons"
                           href="{{ route('to-read', ['id' => $user->name]) }}">remove_red_eye
                            <span class="title text-capitalize">watchlist</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link material-icons"
                           href="{{ route('friends', ['id' => $user->name]) }}">people
                            <span class="title text-capitalize">friends</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>