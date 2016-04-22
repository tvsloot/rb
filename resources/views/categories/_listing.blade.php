<?php

if (!isset($tag)) {
    $tag = 'h2';
}

?>

<div class="listing categories">
    @foreach($categories as $category)
        {!! $category->present()->listing($tag) !!}
    @endforeach
</div>


