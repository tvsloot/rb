<?php

$create = '';
if (Auth::check()) {
    $create = link_to_route(
        'users.create',
        'Create',
        [],
        ['class' => 'create-button']
    );
}

?>

@extends('layouts.default')

@section('content')

<div class="container">

<div class="controls">
    <?php echo $create; ?>
</div>

<div class="page-header">
    <h1>Site Users</h1>
</div>

<div class="users">
    @foreach($users as $user)
    <hr />
    <div class="user">
        <div class="controls">
            {!! editLink('users', $user->id)  !!}
            {!! deleteLink('users', $user->id)  !!}
        </div>
        <h3 class="p-name" style="margin-top:5px;">
            <?php echo $user->email ?>
        </h3>
    </div>
    @endforeach
</div>

</div>

@stop
