<?php

use App\Category;

$cats = array();
foreach (Category::ordered()->get() as $category) {
    $cats[$category->id] = $category->title;
}

?>

@include('editor', ['editor' => '#description'])

{!! BootForm::select('Category', 'category_id')->options($cats) !!}

{!! BootForm::hidden('featured')->value(0) !!}
{!! BootForm::checkbox('Featured', 'featured') !!}

{!! BootForm::text('Title', 'title') !!}
{!! BootForm::text('Summary', 'summary') !!}
{!! BootForm::textarea('Description', 'description') !!}

{!! BootForm::textarea('Ingredient Details', 'ingredient_details') !!}
{!! BootForm::textarea('Recipe Details', 'recipe_details') !!}

{!! BootForm::token() !!}
{!! BootForm::submit(isset($btnTxt) ? $btnTxt : 'Create Recipe')  !!}
