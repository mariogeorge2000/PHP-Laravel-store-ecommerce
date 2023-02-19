<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'email'=>'required|email|unique:admins,email,'.$this->id,
        'password'=>'nullable|confirmed|min:8'
            ];
    }

    public function messages()
    {
        return [
            'name.required'=>__('admin\profile.name required'),
            'email.required'=>__('admin\profile.email required'),
            'email.email'=>__('admin\profile.email email'),
            'email.unique'=>__('admin\profile.email unique'),

        ];
    }
}
