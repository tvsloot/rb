<?php

?>

@include('editor', ['editor' => '#content'])

{!! BootForm::text('Title', 'title') !!}
{!! BootForm::text('Summary', 'summary') !!}
{!! BootForm::text('Weight', 'weight')->defaultValue(500) !!}
{!! BootForm::textarea('Content', 'content') !!}
{!! BootForm::token() !!}
{!! BootForm::submit(isset($btnTxt) ? $btnTxt : 'Create Category')  !!}
