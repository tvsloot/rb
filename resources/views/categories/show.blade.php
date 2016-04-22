<?php

Meta::title($category->title);
Meta::description($category->summary);

?>

@extends('layouts.default')

@section('content')

    {!! $category->present()->view  !!}

    @if (!$category->recipes->isEmpty())
    <div class="listing recipes">
        <h2 class="section-header">Recipes</h2>
        {!! $category->present()->recipes('h3') !!}
        <p class="index-link">
            {!! $category->present()->recipeLink !!}
        </p>
    </div>
    @endif

@stop
