<div class="row">
    <div class="col-lg-6">
        <div class="row display-3">
            {{ $book->title }}
        </div>
        <div class="row text-muted display-4">
            @foreach($book->authors as $author)
                <a href="{{ route('author', ['author' => $author->id]) }}"
                   class="logo text-muted font-weight-light">{{ $author->firstname.' '.$author->lastname }}</a>
            @endforeach
        </div>
    </div>
    <div class="col-lg-6">
        <div class="row">
            <div class="badge badge-{{$collection[rand(1,4)]}} m-2" data-toggle="tooltip" data-placement="bottom"
                 title="AVERANGE RATING">
                <div class="display-4">
                    8,6
                </div>
            </div>
            <div class="badge badge-{{$collection[rand(1,4)]}} m-2" data-toggle="tooltip" data-placement="bottom"
                 title="NUMBER OF FAVORITES">
                <div class="display-4">
                    10243
                </div>
            </div>
            <div class="badge badge-{{$collection[rand(1,4)]}} m-2" data-toggle="tooltip" data-placement="bottom"
                 title="NUMBER OF RATINGS">
                <div class="display-4">
                    10243535
                </div>
            </div>
            <div class="badge badge-{{$collection[rand(1,4)]}} m-2" data-toggle="tooltip" data-placement="bottom"
                 title="CATEGORY">
                <div class="display-4">
                    <a href="{{ route('category', ['category' => $book->category]) }}" class="logo">
                        {{strtoupper($book->category->name)}}
                    </a>
                </div>
            </div>
            <div class="badge badge-{{$collection[rand(1,4)]}} m-2" data-toggle="tooltip" data-placement="bottom"
                 title="PUBLISHER">
                <div class="display-4">
                    {{strtoupper($book->publisher->name)}}
                </div>
            </div>
        </div>
    </div>
</div>