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
                <img src="{{asset('/images/'.Auth::user()->name.'.jpg')}}"
                     class="rounded-circle user-icon md-98 bg-secondary">
            </div>
        </div>
        <div class="row text-center justify-content-center">
            <div class="col-lg-6">

                <form action="{{ route('user.upload.photo', ['id'=>Auth::user()->name]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="file" class="form-control-file" name="fileToUpload" id="exampleInputFile" aria-describedby="fileHelp">
                        <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                    </div>
                    <button type="submit" class="btn btn-warning">Submit</button>
                </form>
            </div>
        </div>




            {{--<div class="row mt-5">--}}
                {{--<div class="card w-100 justify-content-center text-center shadow">--}}
                    {{--<div class="card-header bg-warning">--}}
                        {{--<div class="text-dark h1">{{ $user->name }}</div>--}}
                        {{--<div class="text-muted h5">{{ $user->email }}</div>--}}
                    {{--</div>--}}

                    {{--<div class="card-body bg-dark text-light">--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-lg-3 mb-3">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col m-3">--}}
                                        {{--<p>Konto zostało utworzone:</p>--}}
                                        {{--<p>{{ $user->created_at }}</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="col-lg-6 mb-3">--}}
                                {{--<form action="{{ route('update-edit-profile', ['id' => $user->name]) }}" method="post">--}}
                                    {{--@csrf--}}
                                    {{--@method('PATCH')--}}

                                    {{--<div class="input-group w-100 m-3">--}}
                                        {{--<div class="input-group-prepend w-25">--}}
                                            {{--<span class="input-group-text bg-warning text-dark w-100"--}}
                                                  {{--id="firstname">Imię: </span>--}}
                                        {{--</div>--}}
                                        {{--<input name="firstname" type="text" class="text-center form-control"--}}
                                               {{--value="{{ $user->firstname }}">--}}
                                    {{--</div>--}}
                                    {{--<div class="input-group w-100 m-3">--}}
                                        {{--<div class="input-group-prepend w-25">--}}
                                            {{--<span class="input-group-text bg-warning text-dark w-100"--}}
                                                  {{--id="lastname">Nazwisko: </span>--}}
                                        {{--</div>--}}
                                        {{--<input name="lastname" type="text" class="text-center form-control"--}}
                                               {{--value="{{ $user->lastname }}">--}}
                                    {{--</div>--}}
                                    {{--<div class="input-group w-100 m-3">--}}
                                        {{--<div class="input-group-prepend w-25">--}}
                                            {{--<span class="input-group-text bg-warning text-dark w-100"--}}
                                                  {{--id="name">Opis: </span>--}}
                                        {{--</div>--}}
                                        {{--<textarea name="description" type="email"--}}
                                                  {{--class="form-control">{{ $user->description }}</textarea>--}}
                                    {{--</div>--}}

                                    {{--<button class="btn btn-outline-warning btn-lg" type="submit">--}}
                                        {{--Zatwierdź--}}
                                    {{--</button>--}}
                                {{--</form>--}}

                                {{--<form action="{{ route('delete-profile', ['id' => $user->name]) }}" method="post">--}}
                                    {{--@csrf--}}
                                    {{--@method('delete')--}}
                                    {{--<div class="row justify-content-center mt-5">--}}
                                        {{--<button class="btn btn-outline-warning btn-lg" type="submit">--}}
                                            {{--Usuń konto--}}
                                        {{--</button>--}}
                                    {{--</div>--}}
                                {{--</form>--}}
                            {{--</div>--}}
                            {{--<div class="col-lg-3 mb-3">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col m-3">--}}
                                        {{--<p>Konto zostało zaaktualizowane:</p>--}}
                                        {{--<p>{{ $user->updated_at }}</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>

@endsection