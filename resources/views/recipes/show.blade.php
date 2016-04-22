<?php

use App\Category;

$category = $recipe->category;

$recipes = Catagory::findBySlug($category->slug)->recipes()->featured()->whereNotIn('id', [$recipe->id])->latest()->take(3)->get();

Meta::title($recipe->title);
Meta::description($recipe->summary);

$breadcrumb = breadcrumb(
    [
        $cat->present()->uri => $recipe->title,
        route('recipes.category',
            [
                'id' => $recipe->category
            ]
        ) => 'Recipes',

        $recipe->title
    ]
);

?>

@extends('layouts.default')

@section('content')

    <div class="primary">
        {!! $breadcrumb !!}
        {!! $recipe->present()->view() !!}
    </div>

    <div class="secondary">
        @include('recipes._listing')
        {!! $category->present()->recipeLink !!}
    </div>

@stop
