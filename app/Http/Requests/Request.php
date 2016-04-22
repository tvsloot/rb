<?php

namespace Uphys\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Auth;

abstract class Request extends FormRequest
{

    /**
    * authorize
    *
    * @return mixed
    *
    * @access public
    */
    public function authorize()
    {
        return Auth::check();
    }

    /**
    * validator
    *
    * @return mixed
    *
    * @access public
    */
    public function validator()
    {

        $factory = $this->container->make('Illuminate\Validation\Factory');

        $valid = $factory->make(
            $this->all(),
            $this->container->call([$this, 'rules']),
            $this->messages(),
            $this->attributes()
        );

        if (method_exists($this, 'moreValidation')) {
            $this->moreValidation($valid);
        }

        return $valid;
    }

}

