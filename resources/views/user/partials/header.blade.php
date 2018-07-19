<div class="row bg-white text-dark">
    <div class="container">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link material-icons md-24 rounded" href="{{ route('about', ['id' => $user->name]) }}">home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link material-icons md-24 rounded" href="{{ route('activity', ['id' => $user->name]) }}">timeline</a>
            </li>
            <li class="nav-item">
                <a class="nav-link material-icons md-24 rounded" href="{{ route('ratings', ['id' => $user->name]) }}">star</a>
            </li>
            <li class="nav-item">
                <a class="nav-link material-icons md-24 rounded" href="{{ route('to-read', ['id' => $user->name]) }}">remove_red_eye</a>
            </li>
            <li class="nav-item">
                <a class="nav-link material-icons md-24 rounded" href="{{ route('friends', ['id' => $user->name]) }}">people</a>
            </li>
        </ul>
    </div>
</div>