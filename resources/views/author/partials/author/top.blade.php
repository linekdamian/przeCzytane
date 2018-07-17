<div class="row display-3">
    <div class="col-lg-3">
        <a href="{{ route('authors') }}" class="logo text-muted font-weight-light">{{_('AUTHORS')}}</a>
    </div>
    <div class="col-lg-1">
        <div class="text-muted font-weight-light">/</div>
    </div>
    <div class="col">
        {{ $author->firstname.' '.$author->lastname }}
    </div>
</div>