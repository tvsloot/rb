<?php

namespace App\Http\Requests;

class RecipeRequest extends Request
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'featured'  => 'boolean',
            'title'     => 'required|string|min:3|max:150',
            'summary'   => 'required|string|min:3|max:255',
            'content'   => 'required|string',
            'thumb'     => 'image|max:4000'
        ];
    }

}

