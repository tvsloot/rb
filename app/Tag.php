<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

use Laracasts\Presenter\PresentableTrait;

class Tag extends Model implements SluggableInterface
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

    protected $presenter = 'App\Presenter\TagPresenter';

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
    * scopeOrdered
    *
    * @param mixed $query DESCRIPTION
    *
    * @return mixed
    *
    * @access public
    */
    public function scopeOrdered($query)
    {
        return $query->orderBy('title', 'asc');
    }

    /**
    * recipes
    *
    * @return mixed
    *
    * @access public
    */
    public function recipes()
    {
        return $this->morphedByMany('App\Recipe', 'taggable');
    }

}
