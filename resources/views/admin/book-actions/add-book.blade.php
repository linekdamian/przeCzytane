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
                <div class="text-dark h1">Dodaj książkę</div>
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
                        {{--{{ route('admin-book-add-form') }}--}}
                        <form action="#" method="post">
                            @csrf
                            <div class="input-group w-100 m-3">
                                <div class="input-group-prepend w-25">
                                    <span class="input-group-text bg-warning text-dark w-100" id="title">Tytuł: </span>
                                </div>
                                <input name="title" type="text" class="text-center form-control"
                                       placeholder="tytuł">
                            </div>

                            <div class="input-group w-100 m-3">
                                <div class="input-group-prepend w-25">
                                    <span class="input-group-text bg-warning text-dark w-100" id="isbn">ISBN: </span>
                                </div>
                                <input name="isbn" type="text" class="text-center form-control"
                                       placeholder="isbn">
                            </div>

                            <div class="input-group w-100 m-3">
                                <div class="input-group-prepend w-25">
                                    <span class="input-group-text bg-warning text-dark w-100" id="publisher">Wydawca: </span>
                                </div>
                                <select id="publisher" class="form-control text-center">
                                    <option selected>Choose...</option>
                                    @foreach($publishers as $publisher)
                                    <option>{{ $publisher->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="input-group w-100 m-3">
                                <div class="input-group-prepend w-25">
                                    <span class="input-group-text bg-warning text-dark w-100" id="category">Kategoria: </span>
                                </div>
                                <select id="category" class="form-control text-center">
                                    <option selected>Choose...</option>
                                    @foreach($categories as $category)
                                        <option>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="input-group w-100 m-3">
                                <div class="input-group-prepend w-25">
                                    <span class="input-group-text bg-warning text-dark w-100" id="author">Autor: </span>
                                </div>
                                <input name="author" type="text" class="text-center form-control"
                                       placeholder="imię i nazwisko autora">
                            </div>

                            <div class="input-group w-100 m-3">
                                <div class="input-group-prepend w-25">
                                    <span class="input-group-text bg-warning text-dark w-100" id="description">Opis: </span>
                                </div>
                                <textarea class="form-control"
                                          id="descriptionTextarea"></textarea>
                            </div>

                            <button class="btn btn-outline-warning btn-lg" type="submit">
                                Dodaj książkę
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
    </div>
@endsection