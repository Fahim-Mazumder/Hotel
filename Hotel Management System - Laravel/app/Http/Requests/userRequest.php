<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userRequest extends FormRequest
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
            'email'=>'bail|required|',
            'password' => 'required|min:6'
        ];
    }
    public function messages()
    {
        return [
                 
                 'required'=>'The :attribute field can not be empty',
                 'min'=>'The :attribute field must be at least 6 characters or more !!!'
        ];
    } 
}
