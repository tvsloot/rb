<?php

namespace App\Http\Controllers;

use App\Http\Requests\TagRequest;
use App\Http\Requests\DeleteRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TagController extends Crud
{

    public function store(TagRequest $request)
    {
        return $this->doStore($request);
    }


    public function update($id, TagRequest $request)
    {
        return $this->doUpdate($id, $request);
    }


    public function destroy($id, DeleteRequest $request)
    {
        return $this->doDestroy($id, $request);
    }

    /**
     * search
     *
     * @return mixed
     *
     * @access public
     */
    public function search()
    {
        $query = \Input::get('q');

        $results = $this->model->ordered()->select(
            array('id', 'title as text')
        )->where('title', 'like', "%{$query}%")
            ->get();

        $results = ['results' => $results];
        return response()->json($results);
    }

}
