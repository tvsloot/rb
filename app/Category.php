<?php

namespace App;

use Illuminate\Support\Arr;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

use Laracasts\Presenter\PresentableTrait;

class Category extends Model implements SluggableInterface
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

    protected $presenter = 'App\Presenter\CategoryPresenter';

    /**
    * GetRouteKey
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
    * Recipes
    *
    * @return mixed
    *
    * @access public
    */
    public function recipes()
    {
        return $this->hasMany('App\Recipe');
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
        return $query->orderBy('weight', 'asc')
            ->orderBy('title', 'asc');
    }

    /**
    * Menu
    *
    * @param string $route DESCRIPTION
    *
    * @return mixed
    *
    * @access public
    */
    public function menu($route = 'categories.show')
    {

        return $this->ordered()->get()->keyBy('title')->transform(
            function ($item) use ($route) {
                return [
                    'class' => 'category-nav-' . $item->slug,
                    'route' => [$route , 'id' => $item->slug],
                    'active' => function () use ($item) {
                        return starts_with(
                            \Request::path(),
                            $item->slug
                        );
                    }
                ];
            }
        );
    }

}
