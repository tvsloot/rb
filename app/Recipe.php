<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

use Laracasts\Presenter\PresentableTrait;

class Recipe extends Model implements SluggableInterface
{

    use SluggableTrait;
    use PresentableTrait;

    protected $sluggable = array(
        'build_from' => 'title',
        'save_to'    => 'slug',
    );

    protected $guarded = [
        'id',
        'slug'
    ];

    protected $presenter = 'App\Presenter\RecipePresenter';

    /**
    * getRouteKey
    *
    * @return mixed
    *
    * @access public
    */
    public function getRouteKey()
    {
        return $this->slug;
    }

    /**
    * ScopeFeatured
    *
    * @param mixed $query DESCRIPTION
    *
    * @return mixed
    *
    * @access public
    */
    public function scopeFeatured($query)
    {
        return $query->whereFeatured(1);
    }

    /**
    * ingredients
    *
    * @return mixed
    *
    * @access public
    */
    public function ingredients()
    {
        return $this->belongsToMany('App\Ingredient');
    }

}
