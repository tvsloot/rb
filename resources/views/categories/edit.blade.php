<?php

Meta::title('Edit Category:' . $category->title);

$formOpen = BootForm::open()
    ->action(URL::route('categories.update', $category->id))
    ->encodingType('multipart/form-data')
    ->put();
?>

@extends('layouts.default')

@section('content')

    <div class="page-header">
        <h1>Update: {{ $category->title }}</h1>
    </div>

    @include('errors')

    {!! $formOpen !!}
    {!! BootForm::bind($category) !!}
    @include('categories.form', ['btnTxt' => 'Update Category'])
    {!! BootForm::close()  !!}

@stop

