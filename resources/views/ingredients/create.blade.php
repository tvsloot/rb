<?php

Meta::title('Create Ingredient');

$formOpen = BootForm::open()
    ->encodingType('multipart/form-data')
    ->action(URL::route('ingredients.store'));
?>

@extends('layouts.default')


@section('content')

    <div class="page-header">
        <h1>Create Ingredient</h1>
    </div>

    @include('errors')

    {!! $formOpen !!}
    @include('ingredients.form')
    {!! BootForm::close()  !!}

@stop
