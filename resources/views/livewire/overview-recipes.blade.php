<div>
    @foreach ($recipes as $recipe)
        <div>
            <h2>{{$recipe->name}}</h2>
            <img src="{{ $recipe->image }}" alt="Recipe">
            <p>Instructions: {{$recipe->instructions}}</p>
            <p>Preparation Time: {{$recipe->preparation_time}}</p>
        </div>
    @endforeach

    {{ $recipes->links() }}
</div>
