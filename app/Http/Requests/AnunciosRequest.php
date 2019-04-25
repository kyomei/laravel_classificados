<?php

namespace classificados\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnunciosRequest extends FormRequest
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
            'titulo' => 'required|max:200',
            'valor' => 'required|numeric',
            'descricao' => 'required'
        ];
    }

    public function messages()
    {
        return [
            //'titulo.required' => 'O campo :attribute não pode está vázio.',
            'required' => 'O campo :attribute não pode está vázio.',
        ];
    }
}
