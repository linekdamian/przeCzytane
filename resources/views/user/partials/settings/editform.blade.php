<div class="row justify-content-center mt-5">
    <div class="col-lg-10">
        <div class="title text-warning text-uppercase font-weight-bold h2">Edit Profile</div>

        <form action="{{ route('user.settings.update', Auth::user()) }}" method="post">
            @csrf
            @method('PUT')
            <div class="input-group mb-3">
                <div class="col-lg-3">
                    <div class="title text-uppercase float-right">{{__('messages.user.email')}} :</div>
                </div>
                <div class="col">
                    <input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                           value="{{ Auth::user()->email }}"aria-label="Email"
                           aria-describedby="basic-addon1" name="email" required>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="col-lg-3">
                    <div class="title text-uppercase float-right">{{__('messages.user.name')}} :</div>
                </div>
                <div class="col">
                    <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                           value="{{ Auth::user()->name }}" aria-label="Name"
                           aria-describedby="basic-addon1" name="name" required>
                    @if ($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @else
                        <small id="emailHelp" class="form-text text-muted">
                            Requires re-login after changing username
                        </small>
                    @endif
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="col-lg-3">
                    <div class="title text-uppercase float-right">{{__('messages.user.description')}} :</div>
                </div>
                <div class="col">
                    <textarea type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}"
                              aria-label="Description" aria-describedby="basic-addon1" name="description"
                              rows="5" >{{ Auth::user()->description }}
                    </textarea>
                    @if ($errors->has('description'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="col-lg-3">
                    <div class="title text-uppercase float-right">{{__('messages.user.firstname')}} :</div>
                </div>
                <div class="col">
                    <input type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}"
                           value="{{ Auth::user()->firstname }}" aria-label="Firstname"
                           aria-describedby="basic-addon1" name="firstname">
                    @if ($errors->has('firstname'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('firstname') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="col-lg-3">
                    <div class="title text-uppercase float-right">{{__('messages.user.lastname')}} :</div>
                </div>
                <div class="col">
                    <input type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}"
                           value="{{ Auth::user()->lastname }}"
                           aria-label="Lastname"
                           aria-describedby="basic-addon1" name="lastname">
                    @if ($errors->has('lastname'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('lastname') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="col-lg-3"></div>
                <div class="col">
                    <button type="submit" class="btn btn-warning text-uppercase">{{__('messages.button.submit')}}
                    </button>
                </div>
            </div>
        </form>
        <div class="row mb-3">
            <div class="col-lg-3 mt-3">
                <div class="title text-uppercase float-right">{{__('messages.user.created at')}} :</div>
            </div>
            <div class="col">
                {{ Auth::user()->created_at }}
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-3">
                <div class="title text-uppercase float-right">{{__('messages.user.updated at')}} :</div>
            </div>
            <div class="col">
                {{ Auth::user()->updated_at }}
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-lg-3">
                <div class="title text-uppercase float-right">{{__('messages.user.roles')}} :</div>
            </div>
            <div class="col">
                {{ Auth::user()->roles->name }}
            </div>
        </div>
    </div>
</div>