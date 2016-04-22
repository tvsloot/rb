<?php
//@codingStandardsIgnoreFile

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;

abstract class Crud extends Controller
{
    protected $middleware = [
        'auth' => [
            'only' => [
                'create',
                'store',
                'edit',
                'update',
                'destroy'
            ]
        ]
    ];

    protected $model;

    public function setModel(Model $model)
    {
        $this->model = $model;
    }

    public function getModel()
    {
        return $this->model;
    }
}
