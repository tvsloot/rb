<?php

$entity = $recipe;

Meta::title('Update:' . $recipe->title);


$formOpen = BootForm::open()
    ->action(URL::route('recipes.update', $recipe->id))
    ->encodingType('multipart/form-data')
    ->put();
?>

@extends('layouts.default')

@section('content')

    {!! deleteLink('recipes', $recipe->id)  !!}

    <div class="page-header">
        <h1>Update: {{ $recipe->title }}</h1>
    </div>

    @include('errors')

    {!! $formOpen !!}
    {!! BootForm::bind($recipe) !!}
    @include('recipes.form', ['btnTxt' => 'Update Recipe'])
    {!! BootForm::close()  !!}

@stop
