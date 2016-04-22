<?php

$formOpen = BootForm::open()
    ->encodingType('multipart/form-data')
    ->action(URL::route('users.store'));
?>

@extends('layouts.default')

@section('content')

<div class="page-header">
    <h1>Create New User</h1>
</div>

@include('errors')

{!! $formOpen !!}
@include('users._form')
{!! BootForm::close()  !!}

@stop
