<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonneRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nom' => 'required|string|max:100',
            'prenom' => 'required|string|max:100',
            'dateNaiss' => 'required|string|max:15',
            'sexe' => 'required|string',
            'imagePers' => 'required|image|mimes:png,jpeg,jpg,gif,JPG,JPEG|max:4096'
        ];
    }

    public function messages()
    {
        return 
        [
            'nom.required' => 'Le nom est requis',
            'prenom.required' => 'Le prénom est requis',
            'dateNaiss.required' => 'La date de naissance est requise',
            'sexe.required' => 'Le sexe est requis',
            'imagePers.mimes' => 'Le type de fichier n\'est pas reconnu',
            'imagePers.max' => 'Le fichier ne peut pas dépasser 4096kb'
        ];
    }
}
