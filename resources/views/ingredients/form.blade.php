<?php

?>

{!! BootForm::text('Title', 'title') !!}

{!! BootForm::token() !!}
{!! BootForm::submit(isset($btnTxt) ? $btnTxt : 'Create Ingredient')  !!}
