<form action="{{ route('addBookToFavorite') }}" method="post">
    @csrf
    <input type="hidden" name="isbn" value="{{ $book->isbn }}">
    @if($book->users()->where('user_name', '=', Auth::user()->name)->exists())
        @if($favorite->pivot->favorite == 1)
            <button type="submit"
                    class="btn p-0 material-icons ml-3 text-light bg-secondary">
                favorite
            </button>
        @elseif($favorite->pivot->favorite == 0)
            <button type="submit"
                    class="btn p-0 material-icons ml-3 text-light bg-secondary">
                favorite_border
            </button>
        @endif
    @endif
</form>