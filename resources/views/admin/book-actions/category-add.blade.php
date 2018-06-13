@extends('admin.book-actions.blade')

@section('adminBookToDoContent')
    <div class="row">
        <div class="col-auto float-left w-">
            <a class="display-4 justify-content-center" href="{{ route('admin') }}">
                <span class="badge badge-light font-weight-light bg-white">{{ __('Ustawienia') }}</span>
            </a>
        </div>
        <div class="col-auto float-left">
            <a class="display-4 justify-content-center" href="{{ route('admin-book') }}">
                <div class="badge badge-light font-weight-light bg-white text-muted h2">
                    {{__('Sekcja Książek')}}
                </div>
            </a>
        </div>
    </div>

    <div class="row mt-5">
        <div class="card w-100 justify-content-center text-center shadow">
            <div class="card-header bg-warning">
                <div class="text-dark h1">Dodaj kategorię</div>
            </div>

            <div class="card-body bg-dark text-light">
                <div class="row">
                    <div class="col-lg-3 mb-3">
                        <div class="row">
                            <div class="col m-3">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <form action="{{ route('admin-category-add') }}" method="post">
                            @csrf

                            <div class="input-group w-100 m-3">
                                <div class="input-group-prepend w-25">
                                    <span class="input-group-text bg-warning text-dark w-100" id="categoryName">Nazwa: </span>
                                </div>
                                <input name="name" type="text" class="text-center form-control"
                                       placeholder="nazwa">
                            </div>
                            <button class="btn btn-outline-warning btn-lg" type="submit">
                                Dodaj
                            </button>
                        </form>
                    </div>
                    <div class="col-lg-3 mb-3">
                        <div class="row">
                            <div class="col m-3">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row h2 font-weight-light mt-5">
            <div class="col">
                Kategorie w bazie:
            </div>
        </div>

        <div class="row justify-content-center mt-2">
            @foreach($categories as $category)
                <div class="col-lg-3 mt-2">
                    <div class="row h2 font-weight-light">
                        <div class="col">
                            <a href="{{ route('category-id', ['id' => $category->name]) }}" class="col text-center list-group-item list-group-item-action list-group-item-warning">
                                {{ $category->name }}
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection