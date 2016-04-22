<?php

$helper->title('Categories');
$helper->description('Index of categories');

$helper->robots('noindex, follow');

?>

@extends('layouts.default')

@section('content')

    @if(Auth::check())
        <div class="controls">{!! createLink('categories') !!}</div>
    @endif

    <div class="page-header">
        <h1>Categories</h1>
    </div>

    @include('categories._listing')

    {!! $categories->render() !!}

@stop
