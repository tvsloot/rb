<?php

Meta::title('Create Recipe');

$formOpen = BootForm::open()
    ->encodingType('multipart/form-data')
    ->action(URL::route('recipes.store'));
?>

@extends('layouts.default')

@section('content')

    <div class="page-header">
        <h1>Create Recipe</h1>
    </div>

    @include('errors')

    {!! $formOpen !!}
    @include('recipes.form')
    {!! BootForm::close()  !!}

@stop
