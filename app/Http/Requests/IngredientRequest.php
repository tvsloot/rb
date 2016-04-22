<?php

namespace App\Http\Requests;

class IngredientRequest extends Request
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3|max:150'
        ];
    }

}

