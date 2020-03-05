<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventFormRequest extends FormRequest
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
            'title' => 'required|min:3minimum',
            'description' => 'required|min:5',
        ];
    }

    /**
 * Get the error messages for the defined validation rules.
 *
 * @return array
 */
    public function messages()
    {
        return [
            'title.required' => 'Vous devez entrer un titre',
            'title.min'  => 'Vous devez entrez un titre au minimum de :min caracteres',
            'description.required' => 'Vous devez entrer une description',
            'description.min'  => 'Vous devez entrez une description au minimum de :min caracteres',
        ];
    }
}
