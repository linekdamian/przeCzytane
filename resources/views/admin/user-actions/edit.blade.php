@extends('admin.user-actions.blade')

@section('adminUserToDoContent')

    <div class="row mt-5">
        <div class="card w-100 justify-content-center text-center shadow">
            <div class="card-header bg-warning">
                <div class="text-dark h1">{{ $user->name }}</div>
            </div>

            <div class="card-body bg-dark text-light">
                <div class="row">
                    <div class="col-lg-3 mb-3">
                        <div class="row">
                            <div class="col m-3">
                                <p>Konto zostało utworzone:</p>
                                <p>{{ $user->created_at }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <form action="{{ route('admin-user-update') }}" method="post">
                            @csrf
                            @method('PATCH')

                            <div class="input-group w-100 m-3">
                                <div class="input-group-prepend w-25">
                                    <span class="input-group-text bg-warning text-dark w-100" id="uname">Nick: </span>
                                </div>
                                <input name="name" type="text" class="text-center form-control"
                                       value="{{ $user->name }}" required autofocus>
                            </div>
                            <div class="input-group w-100 m-3">
                                <div class="input-group-prepend w-25">
                                    <span class="input-group-text bg-warning text-dark w-100" id="email">E-mail: </span>
                                </div>
                                <input name="email" type="email" class="text-center form-control"
                                       value="{{ $user->email }}" required>
                            </div>

                            <div class="input-group w-100 m-3">
                                <div class="input-group-prepend w-25">
                                    <span class="input-group-text bg-warning text-dark w-100"
                                          id="roles_id">Rola: </span>
                                </div>

                                <select name="roles_id" id="roles_id" class="w-50 text-center custom-select">
                                    {{--<option selected="{{ $user->roles_id }}">{{ $user->roles()->name }}</option>--}}
                                    <option value="1" class="text-center">Admin</option>
                                    <option value="2" class="text-center">User</option>
                                </select>
                            </div>

                            <div class="input-group w-100 m-3">
                                <div class="input-group-prepend w-25">
                                    <span class="input-group-text bg-warning text-dark w-100" id="name">Opis: </span>
                                </div>
                                <textarea name="description" type="email"
                                          class="form-control">{{ $user->description }}</textarea>
                            </div>

                            <input name="realname" type="hidden"
                                   value="{{ $user->name }}">
                            <button class="btn btn-outline-warning btn-lg" type="submit">
                                Zatwierdź
                            </button>
                        </form>
                    </div>
                    <div class="col-lg-3 mb-3">
                        <div class="row">
                            <div class="col m-3">
                                <p>Konto zostało zaaktualizowane:</p>
                                <p>{{ $user->updated_at }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection