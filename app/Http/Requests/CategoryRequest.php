<?php

namespace App\Http\Requests;

class CategoryRequest extends Request
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'weight'  => 'required|integer',
            'title'   => 'required|string|min:3|max:150',
            'summary' => 'required|string|max:255',
            'content' => 'required|string',
        ];
    }

}
