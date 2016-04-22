<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Requests\DeleteRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UserController extends Crud
{

    /**
    * __construct
    *
    * @return mixed
    *
    * @access public
    */
    public function __construct()
    {
        $reflection = new \ReflectionClass($this);
        $this->name = lcfirst(substr($reflection->getShortName(), 0, -10));
        $this->plural = str_plural($this->name);
        $modelClass = 'Ead\\' . ucfirst($this->name);
        $this->model = new $modelClass;

        if (! $this->route) {
            $this->route = $this->plural;
        }

        $this->middleware(
            'auth',
            [
                'only' => [
                    'create',
                    'store',
                    'edit',
                    'update',
                    'destroy',
                    'index',
                    'show'
                ]
            ]
        );
    }

    public function store(UserRequest $request)
    {
        return $this->doStore($request);
    }

    public function update($id, UserRequest $request)
    {
        return $this->doUpdate($id, $request);
    }

    public function destroy($id, DeleteRequest $request)
    {
        return $this->doDestroy($id, $request);
    }

}
