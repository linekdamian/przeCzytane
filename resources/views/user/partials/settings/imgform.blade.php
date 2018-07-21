<div class="row text-center justify-content-center">
    <div class="col-lg-6">
        <form action="{{ route('user.upload.photo', ['id'=>Auth::user()->name]) }}" method="post"
              enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="file" class="form-control-file" name="fileToUpload" id="exampleInputFile"
                       aria-describedby="fileHelp">
                <small id="fileHelp" class="form-text text-muted">{{__('messages.photo.size')}}
                </small>
            </div>
            <button type="submit" class="btn btn-warning text-uppercase">{{__('messages.button.submit')}}</button>
        </form>
    </div>
</div>