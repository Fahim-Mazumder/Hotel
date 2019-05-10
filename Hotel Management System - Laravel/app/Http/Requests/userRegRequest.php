<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userRegRequest extends FormRequest
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
                 

                'username'=> 'bail|required|min:6',
                'email'=>'bail|required|email|unique:users,email|',
                'password'=>'required|min:6',
                'mobile'=>'required|numeric|min:11',
                'address'=>'bail|required|unique:users,address',
                'image' => 'mimes:jpeg,bmp,png'

        ];
    }  

    public function messages()
    {
        return [
                 
                 

                 'username.required'=>'The Username Field can not be empty',
                 'email.unique'=>'Email Address is already exist',
                 'password.min'=>'The Password must be atleast 6 characters.',
                 'mobile.min'=>'The Mobile Number must be atleast 11 digits.',
                 'address.required'=>'The Address Cannot Be Empty.',
                 'image.mimes'=>'Please Select an Image'

        ];
    }
}
