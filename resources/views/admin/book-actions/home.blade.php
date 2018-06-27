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
        <div class="col-lg-4 mb-5">
            <a class="box bg-warning btn btn-lg w-100 p-4 mb-3 noshadow" href="{{ route('admin-book-add') }}">
                <div class="row justify-content-center h1 text-dark mb-3 white-space-normal noshadow">
                    {{ __('Dodaj Książkę') }}
                </div>
            </a>

            <a class="box bg-dark btn btn-lg w-100 p-4 mt-3" href="{{ route('admin-author') }}">
                <div class="row text-white justify-content-center h1 mb-3 white-space-normal">
                    {{ __('Dodaj Autora') }}
                </div>
            </a>
        </div>

        <div class="col-lg-4 mb-5">
            <div class="box bg-warning text-dark btn btn-lg w-100 p-4">
                <div class="row justify-content-center h1 mb-3 white-space-normal">
                    {{ __('Edytuj książkę') }}
                </div>

                <div class="row">
                    <div class="col white-space-normal text-muted">
                        <div class="col noshadow">
                            <form method="post" action="#" class="noshadow">
                                @csrf
                                <div class="form-group noshadow">
                                    <label for="InputUsername"> {{ __('Znajdź książkę') }}</label>
                                    <input type="text" name="username" id="InputUsername" class="text-center noshadow form-control"
                                           placeholder="tytuł / isbn">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-dark">
                                        {{__('Znajdź')}}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 mb-5">
            <div class="box bg-dark text-white btn btn-lg w-100 p-4">
                <div class="row justify-content-center h1 mb-3 white-space-normal">
                    {{ __('Edytuj Autora') }}
                </div>

                <div class="row">
                    <div class="col white-space-normal text-muted">
                        <div class="col noshadow">
                            <form method="get" action="{{ route('admin-author-edit') }}" class="noshadow">
                                @csrf
                                <div class="form-group noshadow">
                                    <label for="InputUsername"> {{ __('Znajdź autora') }}</label>
                                    <input type="text" name="firstname" id="firstname" class="text-center noshadow form-control"
                                           placeholder="imię">
                                    <input type="text" name="lastname" id="lastname" class="text-center noshadow form-control mt-2"
                                           placeholder="nazwisko">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-warning">
                                        {{__('Znajdź')}}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 mb-5">
            <a class="box bg-warning btn btn-lg w-100 p-4 mb-3 noshadow" href="{{ route('admin-category') }}">
                <div class="row justify-content-center h1 text-dark mb-3 white-space-normal noshadow">
                    {{ __('Dodaj Kategorię') }}
                </div>
            </a>
        </div>

        <div class="col-lg-4 mb-5">
            <div class="box bg-dark text-white btn btn-lg w-100 p-4">
                <div class="row justify-content-center h1 mb-3 white-space-normal">
                    {{ __('Edytuj Kategorię') }}
                </div>

                <div class="row">
                    <div class="col white-space-normal text-muted">
                        <div class="col noshadow">
                            <form method="get" action="{{ route('admin-category-edit') }}" class="noshadow">
                                @csrf
                                <div class="form-group noshadow">
                                    <label for="InputCategoryName"> {{ __('Znajdź Kategorię') }}</label>
                                    <input type="text" name="CategoryName" id="InputCategoryName" class="text-center noshadow form-control"
                                           placeholder="nazwa">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-warning">
                                        {{__('Znajdź')}}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection