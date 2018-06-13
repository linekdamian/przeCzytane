@extends('user.user')

@section('userProfileContent')
    <div class="pb-5 p-3">
        <div class="row">
            <div class="col">
                Na przeCzytane od: {{ date('d-m-Y', strtotime($user->created_at)) }}
            </div>
        </div>
        <div class="row">
            @if(Auth::user()->name == $user->name)
            <div class="col">
                @if($user->description)
                {{ $user->description }}
                <small class="text-muted text-right">zmień opis</small>

                @else
                    <small class="text-muted text-right">Dodaj opis</small>
                @endif
            </div>
            @else
                <div class="col pt-2">
                    {{ $user->description }}
                </div>
            @endif
        </div>

    </div>
@endsection