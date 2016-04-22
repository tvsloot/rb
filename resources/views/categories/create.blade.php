<?php

Meta::title('Create Category');

$formOpen = BootForm::open()
    ->encodingType('multipart/form-data')
    ->action(URL::route('categories.store'));
?>

@extends('layouts.default')

@section('content')

    <div class="page-header">
        <h1>Create Category</h1>
    </div>

    @include('errors')

    {!! $formOpen !!}
    @include('categories.form')
    {!! BootForm::close()  !!}

@stop

