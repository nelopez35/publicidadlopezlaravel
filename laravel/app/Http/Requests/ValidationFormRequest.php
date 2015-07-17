<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ValidationFormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'      =>  'required|min:5|max:80',
            'email'     =>  'required|email',
            'telephone' =>  'required|numeric',
            'body'      =>  'required|min:10|max:500'
        ];
    }
}
