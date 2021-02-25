<div class="container">
    <div>
        <div>
            <input wire:model.debounce.300ms="search" type="text" placeholder="Search..."></div>
        <div>
            <label for="category">Category:</label>
            <select wire:model.debounce.300ms="category" name="category" id="category">
                <option value="null">All</option>
            @foreach($categories as $categoryOption)
                    <option value="{{$categoryOption->id}}">{{$categoryOption->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    @foreach ($recipes as $recipe)
        <div class="col">
        <x-recipe-card :recipe="$recipe"></x-recipe-card>
        </div>
    @endforeach
    </div>
    {{ $recipes->links() }}

    <div>
        <p>
            <label for="paginationRange">Pagination:</label>
        <select wire:model.debounce.300ms="paginationRange" name="paginationRange" id="paginationRange">
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="50">50</option>
        </select>
        </p>
    </div>
</div>
