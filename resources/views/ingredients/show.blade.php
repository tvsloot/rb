<?php

use App\Ingredient;

Meta::title($ingredient->title);

?>

@extends('layouts.default')

@section('content')

    {!! $ingredient->present()->view  !!}

@stop
