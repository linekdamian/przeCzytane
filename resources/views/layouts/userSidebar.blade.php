<nav class="bg-dark p-3 position-fixed shadow-lg">
    <div class="navbar-nav">
        <a class="btn btn-dark text-white "
           href="{{ route('activity', ['id' => $user->name]) }}">{{__('Aktywność') }}</a>

        {{--<a class="btn btn-dark nav-link text-white " href="../user/{{$user->name}}/about">{{__('O mnie') }}</a>--}}

        <a class="btn btn-dark nav-link text-white "
           href="{{ route('about', ['id' => $user->name]) }}">{{__('O mnie') }}</a>

        <a class="btn btn-dark nav-link text-white "
           href="{{ route('ratings', ['id' => $user->name]) }}">{{__('Oceny') }}</a>

        <a class="btn btn-dark nav-link text-white "
           href="{{ route('toRead', ['id' => $user->name]) }}">{{__('Chcę przeczytać') }}</a>

        <a class="btn btn-dark nav-link text-white "
           href="{{ route('friends', ['id' => $user->name]) }}">{{__('Znajomi') }}</a>

    </div>
</nav>