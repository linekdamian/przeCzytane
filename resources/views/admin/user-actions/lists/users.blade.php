@extends('admin.user-actions.blade')

@section('adminUserToDoContent')
    <div class="row mt-5">
        <?php $counter = 0 ?>
        @foreach($users as $user)
            <?php $counter++ ?>
            @switch($counter)
                @case(1)
                <div class="col-lg-3 float-left">
                    <a class="btn btn-warning mr-3 mb-2 shadow-lg w-100"
                       href="{{ route('about', ['id'=> $user->name]) }}">
                        {{ $user->name }}
                    </a>
                </div>
                @break
                @case(2)
                <div class="col-lg-3 float-left">
                    <a class="btn btn-dark mr-3 mb-2 shadow-lg w-100"
                       href="{{ route('about', ['id'=> $user->name]) }}">
                        {{ $user->name }}
                    </a>
                </div>
                @break
                @case(3)
                <div class="col-lg-3 float-left">
                    <a class="btn btn-primary mr-3 mb-2 shadow-lg w-100"
                       href="{{ route('about', ['id'=> $user->name]) }}">
                        {{ $user->name }}
                    </a>
                </div>
                <?php $counter = 0 ?>
                @break
            @endswitch
        @endforeach
    </div>
@endsection