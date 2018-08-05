<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="row">
            <div class="col">
                <div class="title text-warning text-uppercase font-weight-bold h2">{{__('messages.user.delete')}}</div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-3">
                <div class="title text-uppercase float-right">{{__('messages.user.delete')}} :</div>
            </div>
            <div class="col">
                <div class="float-left">
                    <form action="{{ route('user.settings.delete', Auth::user()) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-warning text-uppercase">{{__('messages.button.submit')}}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


