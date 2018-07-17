<div class="row display-3">
    <div class="col-lg-4">
        <a href="{{ route('categories') }}" class="logo text-muted font-weight-light">{{_('CATEGORIES')}}</a>
    </div>
    <div class="col-lg-1">
        <div class="text-muted font-weight-light">/</div>
    </div>
    <div class="col">
        {{ $category->name }}
    </div>
</div>