<div class="col-lg-8 pr-5">
    <div class="row">
        {{ $book->description }}
    </div>
    <div class="row mt-5 mb-5">
        <div class="badge badge-{{$collection[rand(1,4)]}} m-2" data-toggle="tooltip" data-placement="bottom"
             title="ISBN">
            <div class="h3 font-weight-light m-0 p-0">{{$book->isbn}}</div>
        </div>
        <div class="badge badge-{{$collection[rand(1,4)]}} m-2" data-toggle="tooltip" data-placement="bottom"
             title="DATE ADDED">
            <div class="h3 font-weight-light m-0 p-0">{{date('d-m-Y', strtotime($book->created_at))}}</div>
        </div>
    </div>
</div>