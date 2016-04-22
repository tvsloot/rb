<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Recipe;

class HomeController extends Controller
{

    /**
     * models
     *
     * @var array
     * @access protected
     */
    protected $models = array();

    /**
    * __construct
    *
    * @param Article $article DESCRIPTION
    * @param Program $program DESCRIPTION
    *
    * @return mixed
    * @throws exceptionclass [description]
    *
    * @access public
    */
    public function __construct(
        Recipe $recipe
    ) {

        $this->models['recipe'] = $recipe;

    }

    public function home()
    {
        return view(
            'welcome',
            [
                'events' => $this->models['recipe']
                    ->featured()
                    ->latest()
                    ->take('6')
                    ->get(),
            ]
        );
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function dashboard()
    {
        return view('dashboard');
    }

}
