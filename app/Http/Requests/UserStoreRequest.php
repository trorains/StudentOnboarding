<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                'first_name' => ['required', 'string', 'max:40'],
                'sur_name' => ['required', 'string', 'max:40'],
                'phone_number' => ['required', 'string', 'max:10'],
                'email' => 'required|email',
                'password' => ['required', 'string', 'min:8', 'confirmed'],
      
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Email is required!',
            'email.email' => 'Email is invalid!',
            'email.max' => 'Email is too long!',
            'first_name.required' => 'First name is required!',
            'first_name.string' => 'First name must only contain letters!',
            'firs_name.max' => 'First name is too long!',
            'sur_name.required' => 'Sur name is required!',
            'sur_name.string' => 'Sur name must only contain letters!',
            'sur_name.max' => 'Sur name is too long!',
            'password.required' => 'Password is required!'
        ];
    }
}
