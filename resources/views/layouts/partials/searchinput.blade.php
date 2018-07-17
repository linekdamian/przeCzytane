<div class="col justify-content-center mx-auto">
    <form method="get" class="col-lg w-100 pt-2" action="
{{--{{ route('search') }}--}}
            ">
        @csrf
        <div class="input-group m-0 p-0">
            <input id="search" name="search" type="text"
                   class="form-control text-center form-control-sm p-0"
                   placeholder="AUTHOR / TITLE / ISBN" aria-label="Autor / Tytuł / ISBN"
                   aria-describedby="basic-addon2">
            <div class="input-group-append p-0">
                <button class="btn btn-warning btn-sm" type="submit">
                    <i class="material-icons md-18 align-middle">search</i>
                </button>
            </div>
        </div>
    </form>
</div>