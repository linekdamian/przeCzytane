<div class="row justify-content-center mt-5">
    <div class="col-lg-10">
        <div class="title text-warning text-uppercase font-weight-bold h2">Change Password</div>
        <form action="{{ route('user.settings.changepassword', ['id'=>Auth::user()->name]) }}" method="post">
            @csrf
            @method('put')
            <div class="input-group mb-3">
                <div class="col-lg-3">
                    <div class="title text-uppercase float-right">{{__('Existed Password')}} :</div>
                </div>
                <div class="col">
                    <input type="password" class="form-control{{ $errors->has('existedpassword') ? ' is-invalid' : '' }}"
                           aria-label="existedpassword" aria-describedby="basic-addon1" name="existedpassword"
                           required minlength="6" maxlength="100">
                    @if ($errors->has('existedpassword'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('existedpassword') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="col-lg-3">
                    <div class="title text-uppercase float-right">{{__('New Password:')}} :</div>
                </div>
                <div class="col">
                    <input type="password" class="form-control{{ $errors->has('newpassword') ? ' is-invalid' : '' }}"
                           aria-label="newpassword" aria-describedby="basic-addon1" name="newpassword"
                           required minlength="6" maxlength="100">
                    @if ($errors->has('newpassword'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('newpassword') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="input-group mb-3">
                <div class="col-lg-3">
                    <div class="title text-uppercase float-right">{{__('Confirm New Password:')}} :</div>
                </div>
                <div class="col">
                    <input type="password"
                           class="form-control{{ $errors->has('newpassword_confirmation') ? ' is-invalid' : '' }}"
                           aria-label="newpassword_confirmation" aria-describedby="basic-addon1"
                           name="newpassword_confirmation"
                           required minlength="6" maxlength="100">
                    @if ($errors->has('newpassword_confirmation'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('newpassword_confirmation') }}</strong>
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
    </div>
</div>