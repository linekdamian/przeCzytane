@if(session()->has('message'))
    <div class="row mt-5">
        <div class="col">
            <div class="alert alert-success text-center" role="alert">
                <h4>{{ session()->get('message') }}</h4>
            </div>
        </div>
    </div>
@elseif(session()->has('bad_message'))
    <div class="row mt-5">
        <div class="col">
            <div class="alert alert-warning text-center" role="alert">
                <h4>{{ session()->get('bad_message') }}</h4>
            </div>
        </div>
    </div>
@elseif(session()->has('danger_message'))
    <div class="row mt-5">
        <div class="col">
            <div class="alert alert-danger text-center" role="alert">
                <h4>{{ session()->get('danger_message') }}</h4>
            </div>
        </div>
    </div>
@endif