<div class="col-lg-3 mt-2 mr-3">
    <div class="row h2 font-weight-light">
        <a href="{{ route('category', ['category' => $category]) }}"
           class="col text-center list-group-item list-group-item-action list-group-item-secondary">
            {{ $category->name }}
        </a>
    </div>
</div>