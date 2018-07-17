<form action="{{ route('setBookReview') }}" method="post">
    @csrf
    <input type="hidden" name="isbn" value="{{ $book->isbn }}">
    <div class="row mt-3">
        <div class="col">
            <textarea class="form-control mb-3 bg-light text-dark shadow" id="ratingTextarea"
                      name="review">{{ $favorite->pivot->review }}</textarea>
            <button type="submit"
                    class="btn btn-dark nav-link m-auto btn-block title">
                {{_('REVIEW')}}
            </button>
        </div>
    </div>
</form>