<div class="card shadow-sm">
    <a href="{{ route('recipe.show',$recipe->id) }}">

        <img class="card-img-top" src="{{ $recipe->image }}" alt="Recipe">
        <div class="card-body">
            <h2>{{$recipe->name}}</h2>
            <p>Preparation Time: {{$recipe->preparation_time}}</p>
            <p>Instructions: {{$recipe->instructions}}</p>
        </div>
    </a>
</div>
