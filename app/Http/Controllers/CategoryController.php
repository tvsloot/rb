<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\DeleteRequest;

class CategoryController extends Crud
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
    public function store(CategoryRequest $request)
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
    public function update($id, CategoryRequest $request)
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
