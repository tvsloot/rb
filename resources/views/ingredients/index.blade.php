<?php

use App\Ingredient;

Meta::title('ingredients');

Meta::robots('noindex, follow');

?>

@extends('layouts.default')

@section('content')

    <div class="page-header">
        <h1>Ingredients</h1>
    </div>

    <div class="index-listing ingredients">

        @if(Auth::check())
        <div class="controls">{!! createLink('ingredients') !!}</div>
        @endif

        @foreach($ingredients as $ingredient)
        {!! $ingredient->present()->listing  !!}
        @endforeach

    </div>

    {!! $ingredients->render() !!}

@stop
