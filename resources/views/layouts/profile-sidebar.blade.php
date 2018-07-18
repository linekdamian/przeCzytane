<nav class="bg-secondary p-3 position-fixed shadow-lg rounded">
    <div class="navbar-nav">
        <a class="btn btn-outline-dark nav-link p-3 m-2 material-icons"
           href="{{ route('about', ['id' => $user->name]) }}">home</a>

        <a class="btn btn-outline-dark nav-link p-3 m-2 material-icons"
           href="{{ route('activity', ['id' => $user->name]) }}">timeline</a>

        <a class="btn btn-outline-dark nav-link p-3 m-2 material-icons"
           href="{{ route('ratings', ['id' => $user->name]) }}">star</a>

        <a class="btn btn-outline-dark nav-link p-3 m-2 material-icons"
           href="{{ route('to-read', ['id' => $user->name]) }}">remove_red_eye</a>

        <a class="btn btn-outline-dark nav-link p-3 m-2 material-icons"
           href="{{ route('friends', ['id' => $user->name]) }}">people</a>
    </div>
</nav>
