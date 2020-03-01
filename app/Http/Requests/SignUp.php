<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUp extends FormRequest
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
        return  [
            'firstName'   => 'required',
            'lastName'    => 'required',
            'birthdate'   => 'required|date',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'Please add your first name',
            'last_name.required'  => 'Please add your last name',
            'birthdate.required'  => 'Please add your birth date',
        ];
    }
}
