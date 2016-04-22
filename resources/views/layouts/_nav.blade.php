<?php

function set_active($path, $active = 'active') {
    return call_user_func_array(
        'Request::is', (array)$path
    ) ? $active : '';
}

?>

<nav id="primary-nav" role="navigation">
    <a href="/" class="brand">
        Recipe Block
    </a>
    <ul>
        <li class="{!! set_active(['recipes*']) !!}">
            <a href="/recipes">Recipes</a>
        </li>
    </ul>
</nav>