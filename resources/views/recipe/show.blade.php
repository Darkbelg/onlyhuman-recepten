@extends('layout.app')
@section('content')
    <div>
        <h1>{{$recipe->name}}</h1>
        <p>Preparation time: {{ $recipe->preparation_time }}</p>
        <img src="{{ $recipe->image }}" alt="">
        <p>Instructions: {{ $recipe->instructions }}</p>

        <livewire:ingredient-calculation :recipe="$recipe"></livewire:ingredient-calculation>
    </div>
    <div>
        <x-recipes-list :recipes="$randomRecipes"></x-recipes-list>
    </div>
@endsection
