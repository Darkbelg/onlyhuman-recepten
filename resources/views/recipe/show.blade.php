@extends('layout.app')
@section('content')
    <div class="container mt-5">
        <div class="row align-items-start">
            <div class="col">
                <img class="img-fluid" src="{{ $recipe->image }}" alt="">
            </div>
            <div class="col">
                <h1>{{$recipe->name}}</h1>
                <p>Preparation time: {{ $recipe->preparation_time }}</p>
                <p>Instructions: {{ $recipe->instructions }}</p>

                <livewire:ingredient-calculation :recipe="$recipe"></livewire:ingredient-calculation>
            </div>
        </div>
        <div>
            <x-recipes-list :recipes="$randomRecipes"></x-recipes-list>
        </div>
    </div>
@endsection
