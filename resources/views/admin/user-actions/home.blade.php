@extends('admin.user-actions.blade')

@section('adminUserToDoContent')

    <div class="row mt-5">
        <div class="col-lg-4 mb-5">
            <div class="box bg-dark text-white btn btn-lg w-100 p-4">
                <div class="row justify-content-center h1 text-light mb-3 white-space-normal">
                    {{ __('Nadaj uprawnienia') }}
                </div>

                <div class="row">
                    <div class="col white-space-normal text-muted">
                        <div class="col noshadow">
                            <form method="post" action="{{ route('admin-user-update-roles') }}" class="noshadow">
                                @csrf
                                <div class="form-group noshadow">
                                    <label for="InputUsername"> {{ __('Znajdź użytkownika') }}</label>
                                    <input type="text" name="username" id="InputUsername" class="text-center noshadow form-control"
                                           placeholder="nick / email">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-warning">
                                        {{__('Nadaj')}}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 mb-5">
            <div class="box bg-warning text-dark btn btn-lg w-100 p-4">
                <div class="row justify-content-center h1 mb-3 white-space-normal">
                    {{ __('Usuń użytkownika') }}
                </div>

                <div class="row">
                    <div class="col white-space-normal text-muted">
                        <div class="col noshadow">
                            <form method="post" action="{{ route('admin-user-delete') }}" class="noshadow">
                                @csrf
                                <div class="form-group noshadow">
                                    <label for="InputUsername"> {{ __('Znajdź użytkownika') }}</label>
                                    <input type="text" name="username" id="InputUsername" class="text-center noshadow form-control"
                                           placeholder="nick / email">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-dark">
                                        {{__('Usuń')}}
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
                <div class="row justify-content-center h1 text-light mb-3 white-space-normal">
                    {{ __('Edytuj użytkownika') }}
                </div>
                <div class="row">
                    <div class="col white-space-normal text-muted">
                        <div class="col noshadow">
                            <form method="get" action="{{ route('admin-edit-user') }}" class="noshadow">
                                @csrf
                                <div class="form-group noshadow">
                                    <label for="InputUsername"> {{ __('Znajdź użytkownika') }}</label>
                                    <input type="text" name="username" id="InputUsername" class="text-center noshadow form-control"
                                           placeholder="nick / email">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-warning">
                                        {{__('Szukaj')}}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 mb-5">
            <a href="{{ route('admin-list-users') }}" class="box bg-warning text-dark btn btn-lg w-100 p-4">
                <div class="row justify-content-center h1 mb-3 white-space-normal">
                    {{ __('Lista użytkowników') }}
                </div>
            </a>
        </div>

        <div class="col-lg-4 mb-5">
            <a href="{{ route('admin-list-admins') }}" class="box bg-dark text-white btn btn-lg w-100 p-4">
                <div class="row justify-content-center h1 text-light mb-3 white-space-normal">
                    {{ __('Lista adminów') }}
                </div>
            </a>
        </div>

        <div class="col-lg-4 mb-5">
            <div class="box bg-warning text-dark btn btn-lg w-100 p-4">
                <div class="row justify-content-center h1 mb-3 white-space-normal">
                    {{ __('KTOŚ') }}
                </div>
            </div>
        </div>
    </div>


@endsection