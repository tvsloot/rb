<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return redirect('/');
});

Route::get(
    'dashboard',
    [
        'as' => 'dashboard',
        'uses' => 'HomeController@dashboard',
        'middleware' => 'auth'
    ]
);

Route::controllers(
    [
        'auth'     => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',
    ]
);

Route::get('login', array('uses' => 'Auth\AuthController@getLogin'));
Route::get(
    'logout',
    array(
        'as'=>'logout',
        'uses' => 'Auth\AuthController@getLogout'
    )
);

Route::get(
    '/',
    [
        'as' => 'home',
        'uses' => 'HomeController@home'
    ]
);

Route::resources(
    [
        'categories'    => 'CategoryController',
        'ingrediencts'  => 'IngredientController',
        'recipes'       => 'RecipeController',
        'tags'          => 'TagController',
        'users'         => 'UserController',
    ]
);

Route::bind(
    'ingredient',
    function ($value) {
        return Ingredient::findBySlug($value);
    }
);

Route::bind(
    'tag',
    function ($value) {
        return Tag::findBySlug($value);
    }
);

foreach (['ingredient', 'tag'] as $type) {

    $ptype = str_plural($type);
    Route::get(
        $type . '/search',
        [
            'as' => $ptype . '.search',
            'uses' => ucfirst($type) . 'Controller@search'
        ]
    );
}
