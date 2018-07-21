<div class="row justify-content-center mt-5">
    <div class="col-lg-10">
        <div class="title text-warning text-uppercase font-weight-bold h2">Edit Profile</div>
        <div class="input-group mb-3">
            <div class="col-lg-3">
                <div class="title text-uppercase float-right">{{__('messages.user.email')}} :</div>
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="{{ Auth::user()->email }}"
                       aria-label="Email"
                       aria-describedby="basic-addon1" name="email" disabled>
            </div>
        </div>
        <div class="input-group mb-3">
            <div class="col-lg-3">
                <div class="title text-uppercase float-right">{{__('messages.user.name')}} :</div>
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="{{ Auth::user()->name }}" aria-label="Name"
                       aria-describedby="basic-addon1" name="name" disabled>
            </div>
        </div>
        <div class="input-group mb-3">
            <div class="col-lg-3">
                <div class="title text-uppercase float-right">{{__('messages.user.roles')}} :</div>
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="{{ Auth::user()->roles->name }}"
                       aria-label="Roles"
                       aria-describedby="basic-addon1" name="roles" disabled>
            </div>
        </div>
        <div class="input-group mb-3">
            <div class="col-lg-3">
                <div class="title text-uppercase float-right">{{__('messages.user.description')}} :</div>
            </div>
            <div class="col">
                <textarea type="text" rows="5" class="form-control" placeholder="{{ Auth::user()->description }}"
                          aria-label="Description" aria-describedby="basic-addon1" name="description" disabled>
                </textarea>
            </div>
        </div>
        <div class="input-group mb-3">
            <div class="col-lg-3">
                <div class="title text-uppercase float-right">{{__('messages.user.firstname')}} :</div>
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="{{ Auth::user()->firstname }}"
                       aria-label="Firstname"
                       aria-describedby="basic-addon1" name="firstname" disabled>
            </div>
        </div>
        <div class="input-group mb-3">
            <div class="col-lg-3">
                <div class="title text-uppercase float-right">{{__('messages.user.lastname')}} :</div>
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="{{ Auth::user()->lastname }}"
                       aria-label="Lastname"
                       aria-describedby="basic-addon1" name="lastname" disabled>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-3">
                <div class="title text-uppercase float-right">{{__('messages.user.created at')}} :</div>
            </div>
            <div class="col">
                {{ Auth::user()->created_at }}
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-lg-3">
                <div class="title text-uppercase float-right">{{__('messages.user.updated at')}} :</div>
            </div>
            <div class="col">
                {{ Auth::user()->updated_at }}
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-3"></div>
            <div class="col">
                <a href="#" class="btn btn-warning text-uppercase">{{__('messages.button.submit')}}</a>
            </div>
        </div>
    </div>
</div>