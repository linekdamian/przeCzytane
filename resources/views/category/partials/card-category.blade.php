<div class="col-lg-3 mt-2 mr-3">
    <div class="row h2 font-weight-light">
        <a href="{{ route('category-id', ['id' => $category->name]) }}"
           class="col text-center list-group-item list-group-item-action list-group-item-warning">
            {{ $category->name }}
        </a>
    </div>
</div>