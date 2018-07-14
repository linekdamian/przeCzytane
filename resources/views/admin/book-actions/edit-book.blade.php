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
                <div class="text-dark h1">Edytuj książkę</div>
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
                        <form action="{{ route('admin-book-update') }}" method="post">
                            @method('put')
                            @csrf
                            <div class="input-group w-100 m-3">
                                <div class="input-group-prepend w-25">
                                    <span class="input-group-text bg-warning text-dark w-100" id="title">Tytuł: </span>
                                </div>
                                <input name="title" type="text" class="text-center form-control"
                                       placeholder="tytuł" value="{{$book->title }}">
                            </div>

                            <div class="input-group w-100 m-3">
                                <div class="input-group-prepend w-25">
                                    <span class="input-group-text bg-warning text-dark w-100" id="isbn">ISBN: </span>
                                </div>
                                <input name="isbn" type="text" class="text-center form-control"
                                       placeholder="isbn" value="{{$book->isbn }}">
                            </div>

                            <div class="input-group w-100 m-3">
                                <div class="input-group-prepend w-25">
                                    <span class="input-group-text bg-warning text-dark w-100" id="publisher">Wydawca: </span>
                                </div>
                                <select id="publisher" name="publisher" class="form-control text-center">
                                    <option selected>{{$book->publisher->name }}</option>
                                    @foreach($publishers as $publisher)
                                    <option>{{ $publisher->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="input-group w-100 m-3">
                                <div class="input-group-prepend w-25">
                                    <span class="input-group-text bg-warning text-dark w-100" id="category">Kategoria: </span>
                                </div>
                                <select id="category" name="category" class="form-control text-center">
                                    <option selected>{{$book->category->name }}</option>
                                    @foreach($categories as $category)
                                        <option>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="input-group w-100 m-3">
                                <div class="input-group-prepend w-25">
                                    <span class="input-group-text bg-warning text-dark w-100" id="author">Autor: </span>
                                </div>
                                @foreach($book->authors as $author)
                                <input name="authorfirstname" id="authorfirstname" type="text" class="text-center form-control"
                                       placeholder="imię autora" value="{{$author->firstname }}">
                                <input name="authorlastname" id="authorlastname" type="text" class="text-center form-control"
                                       placeholder="nazwisko autora" value="{{$author->lastname }}">
                                @endforeach
                            </div>

                            <div class="input-group w-100 m-3">
                                <div class="input-group-prepend w-25">
                                    <span class="input-group-text bg-warning text-dark w-100" id="description">Opis: </span>
                                </div>
                                <textarea class="form-control"
                                          id="descriptionTextarea" name="description" >{{$book->description }}</textarea>
                            </div>

                            <button class="btn btn-outline-warning btn-lg" type="submit">
                                Edytuj książkę
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