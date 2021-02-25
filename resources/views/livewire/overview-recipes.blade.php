<div>
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
    @foreach ($recipes as $recipe)
        <x-recipe-card :recipe="$recipe"></x-recipe-card>
    @endforeach

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
