<?php

$formOpen = BootForm::open()
    ->action(URL::route('users.update', $user->id))
    ->encodingType('multipart/form-data')
    ->put();

$entity = $user;

?>

@extends('layouts.default')

@section('content')

    {!! deleteLink('users', $user->id)  !!}

    <div class="page-header">
        <h1>Update User: {{ $user->name }}</h1>
    </div>

    @include('errors')

    {!! $formOpen !!}
    {!! BootForm::bind($user) !!}

    @include('users._form', ['btnTxt' => 'Update User'])
    {!! BootForm::close()  !!}

@stop

