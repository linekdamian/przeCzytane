@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col">
                <div class="display-4 text-uppercase title text-warning font-weight-bold">
                    SETTINGS
                </div>
            </div>
        </div>
        <div class="row text-center mb-3">
            <div class="col-lg">
                @include('user.partials.img.large')
            </div>
        </div>
        @include('user.partials.settings.imgform')
        <hr class="my-4 m-5">
        @include('user.partials.settings.editform')
        <hr class="my-4 m-5">
        @include('user.partials.settings.sitesettingsform')
        <hr class="my-4 m-5">
        @include('user.partials.settings.deleteform')
        <hr class="my-4 m-5">
    </div>

@endsection