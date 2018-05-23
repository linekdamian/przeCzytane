@extends('admin.blade')

@section('adminToDoContent')

    <div class="row">
        <div class="col">
            <a class="display-4 justify-content-center" href="{{ route('admin') }}">
                <span class="badge badge-light font-weight-light bg-white">{{ __('Ustawienia') }}</span>
            </a>
        </div>
    </div>

    <div class="row mt-5">

        <div class="col-lg-4 mb-5">
            <a class="box bg-warning text-dark btn btn-lg w-100 h-100" href="{{ route('admin-user') }}">

                <div class="row justify-content-center display-4 mb-3">
                    {{ __('Użytkownicy') }}
                </div>

                <div class="row">
                    <div class="col white-space-normal text-muted">
                        <p>Przegląd użytkowników, nadawanie uprawnień, usuwanie oraz edycja poszczególnych użytkowników.</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-4 mb-5">
            <a class="box bg-dark btn btn-lg text-white w-100 h-100" href="{{ route('admin-book') }}">

                <div class="row justify-content-center display-4 mb-3">
                    {{ __('Książki') }}
                </div>

                <div class="row">
                    <div class="col white-space-normal text-muted">
                        <p>Przegląd książek oraz autorów. Usuwanie, dodawanie wraz z edycja poszczególnych.</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-4 mb-5">
            <a class="box bg-warning text-dark btn btn-lg w-100 h-100" href="#">

                <div class="row justify-content-center display-4 mb-3">
                    {{ __('Inne') }}
                </div>

                <div class="row">
                    <div class="col white-space-normal text-muted">
                        <p>Inne ustawienia.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection