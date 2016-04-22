<?php

namespace App\Http\Controllers;

use App\Recipe;
use App\Http\Requests\RecipeRequest;
use App\Http\Requests\DeleteRequest;

class RecipeController extends Crud
{

    /**
    * store
    *
    * @param ActionRequest $request DESCRIPTION
    *
    * @return mixed
    * @throws exceptionclass [description]
    *
    * @access public
    */
    public function store(RecipeRequest $request)
    {
        return $this->doStore($request);
    }

    /**
    * update
    *
    * @param mixed               $id      DESCRIPTION
    * @param CreateActionRequest $request DESCRIPTION
    *
    * @return mixed
    * @throws exceptionclass [description]
    *
    * @access public
    */
    public function update($id, RecipeRequest $request)
    {
        return $this->doUpdate($id, $request);
    }

    /**
    * destroy
    *
    * @param mixed               $id      DESCRIPTION
    * @param CreateActionRequest $request DESCRIPTION
    *
    * @return mixed
    * @throws exceptionclass [description]
    *
    * @access public
    */
    public function destroy($id, DeleteRequest $request)
    {
        return $this->doDestroy($id, $request);
    }

}
