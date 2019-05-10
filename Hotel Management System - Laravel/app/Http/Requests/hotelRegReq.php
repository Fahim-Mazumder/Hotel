<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class hotelRegReq extends FormRequest
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
                'email'=>'bail|email|required|unique:hotels,email|',
                'password'=>'required|min:6',
                'hotel_name'=>'bail|required',
                'location'=>'bail|required',
                'mobile'=>'required|min:11|numeric',
                'pool'=>'required',
                'resturent'=>'required',
                'price'=>'required|numeric',
                'image' => 'mimes:jpeg,bmp,png'

        ];
    }  

    public function messages()
    {
        return [
                 
                 

                 'username.required'=>'The Username Field can not be empty',
                 'email.unique'=>'Use a valid Email Address.',
                 'password.min'=>'The Password must be atleast 6 characters.',
                 'hotel_name.required'=>'Please enter an email address.',
                 'location.required'=>'Please enter the location.',
                 'mobile.min'=>'The Mobile Number must be atleast 11 digits.',
                 'pool.required'=>'Select the pool.',
                 'resturent.required'=>'Select the resturent name.',
                 'price.required'=>'Enter the Price',
                 'image.mimes'=>'Please Select an Image'

        ];
    }   
}
