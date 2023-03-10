<?php

namespace App\Http\Requests;

use App\Rules\UniqueAttributeName;
use Illuminate\Foundation\Http\FormRequest;

class AttributeRequest extends FormRequest
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
            //'name' => ['required','max:100',new UniqueAttributeName($this->name)],
            'name' =>'required|max:100|unique:attribute_translations,name,' . $this->id

        ];
    }
}
