<form action="{{ route('setBookRating') }}" method="post">
    @csrf
    <input type="hidden" name="isbn" value="{{ $book->isbn }}">
    @if($book->users()->where('user_name', '=', Auth::user()->name)->exists())
        @for($i=1;$i<11;$i++)
            @if($favorite->pivot->rating >= $i)
                <button type="submit" name="rating" value="{{$i}}"
                        class="btn p-0 btn-sm material-icons text-warning rounded  bg-secondary float-left">
                    star
                </button>
            @else
                <button type="submit" name="rating" value="{{$i}}"
                        class="btn p-0 btn-sm material-icons text-warning rounded bg-secondary float-left">
                    star_border
                </button>
            @endif
        @endfor
    @endif
</form>