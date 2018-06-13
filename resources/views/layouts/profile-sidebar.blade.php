<nav class="bg-warning p-3 position-fixed shadow-lg rounded">
    <div class="navbar-nav">
        <a class="btn btn-outline-dark nav-link m-1"
           href="{{ route('about', ['id' => $user->name]) }}">{{__('O mnie') }}</a>

        <a class="btn btn-outline-dark nav-link m-1"
           href="{{ route('activity', ['id' => $user->name]) }}">{{__('Aktywność') }}</a>

        <a class="btn btn-outline-dark nav-link m-1"
           href="{{ route('ratings', ['id' => $user->name]) }}">{{__('Oceny') }}</a>

        <a class="btn btn-outline-dark nav-link m-1"
           href="{{ route('to-read', ['id' => $user->name]) }}">{{__('Chcę przeczytać') }}</a>

        <a class="btn btn-outline-dark nav-link m-1"
           href="{{ route('friends', ['id' => $user->name]) }}">{{__('Znajomi') }}</a>
    </div>
</nav>