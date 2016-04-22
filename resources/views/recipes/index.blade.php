<?php

$helper->title('Recipes');
$helper->description('Index of recipes');

$helper->robots('noindex, follow');

?>

@extends('layouts.default')

@section('content')

    @if(Auth::check())
        <div class="controls">{!! createLink('recipes') !!}</div>
    @endif

    <div class="page-header">
        <h1>Recipes</h1>
    </div>

    @include('recipes._listing')

    {!! $recipes->render() !!}

@stop
