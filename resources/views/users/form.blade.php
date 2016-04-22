<?php

?>

{!! BootForm::text('Name', 'name') !!}
{!! BootForm::text('Email', 'email') !!}

<div class="form-group">
    <label class="control-label">Password</label>
    <input type="password" class="form-control" name="password">
</div>

<div class="form-group">
    <label class="control-label">Confirm Password</label>
    <input type="password" class="form-control" name="password_confirmation">
</div>

{!! BootForm::token() !!}
{!! BootForm::submit(isset($btnTxt) ? $btnTxt : 'Create New User')  !!}
