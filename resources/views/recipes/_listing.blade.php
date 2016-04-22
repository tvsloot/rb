<?php

if (!isset($tag)) {
    $tag = 'h2';
}

?>

<div class="listing recipes">
    @foreach($recipes as $recipe)
        {!! $recipe->present()->listing($tag) !!}
    @endforeach
</div>


