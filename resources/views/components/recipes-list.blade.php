<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
@foreach($recipes as $recipe)
        <div class="col">
        <x-recipe-card :recipe="$recipe"></x-recipe-card>
        </div>
    @endforeach
</div>
