<?php

$entity = $ingredient;

Meta::title('Update Ingredient: ' . $ingredient->title);

$formOpen = BootForm::open()
    ->action(URL::route('ingredients.update', $ingredient->id))
    ->encodingType('multipart/form-data')
    ->put();

?>

@extends('layouts.default')

@section('content')

    {!! deleteLink('ingredients', $ingredient->id)  !!}

    <div class="page-header">
        <h1>Update Ingredient: {{ $ingredient->title }}</h1>
    </div>

    @include('errors')

    {!! $formOpen !!}
    {!! BootForm::bind($ingredient) !!}
    @include('ingredients.form', ['btnTxt' => 'Update Ingredient'])
    {!! BootForm::close()  !!}

@stop
