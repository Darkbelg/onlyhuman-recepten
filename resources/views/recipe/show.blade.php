@extends('layout.app')
@section('content')
    <div>
        <h1>{{$recipe->name}}</h1>
        <p>{{ $recipe->preparation_time }}</p>
        <img src="{{ $recipe->image }}" alt="">
        <p>Instructions: {{ $recipe->instructions }}</p>
        <ul>
            @foreach($recipe->ingredients as $ingredient)
            <li>{{ $ingredient->name }}: {{ $ingredient->pivot->quantity }} {{ $ingredient->unit }}</li>
            @endforeach
        </ul>
    </div>
@endsection
