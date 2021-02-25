<div>
    <a href="{{ route('recipe.show',$recipe->id) }}">
        <h2>{{$recipe->name}}</h2>
        <img src="{{ $recipe->image }}" alt="Recipe">
        <p>Instructions: {{$recipe->instructions}}</p>
        <p>Preparation Time: {{$recipe->preparation_time}}</p>
    </a>
</div>
