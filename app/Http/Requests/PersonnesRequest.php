<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonnesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nom' => 'required|string|max:100',
            'prenom' => 'required|string|max:100',
            'dateNaiss' => 'required|string|max:15',
            'sexe' => 'required|string|max:1',
            'imagePers' => 'string|max:2048'
        ];
    }

    public function messages()
    {
        return [
            'nom.required' => 'Le nom est requis',
            'prenom.required' => 'Le prénom est requis',
            'dateNaiss.required' => 'La date de naissance est requise',
            'sexe.required' => 'Le sexe est requis',
            'imagePers.required' => 'L\'image est requise'
        ];
    }
}
