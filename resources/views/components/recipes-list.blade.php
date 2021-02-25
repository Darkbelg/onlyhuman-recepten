<div>
    @foreach($recipes as $recipe)
        <x-recipe-card :recipe="$recipe"></x-recipe-card>
    @endforeach
</div>
