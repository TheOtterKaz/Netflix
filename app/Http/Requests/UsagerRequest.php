<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsagerRequest extends FormRequest
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
            'nom' => 'required|min:2|max:50',
            'prenom' => 'required|min:2|max:50',
            'nomUsager' => 'required|min:2|max:50', 
            'email' => 'required|email|unique',
            'password' => 'required|min:8|max:255',
            'password_confirmation' => 'required|same:password',
            'role' => 'required',
        ];
    }

    public function messages(){
        return[
            'nom.required' => 'Le nom est requis',
            'nom.min' => 'Le nom doit contenir au moins 2 caractères',
            'nom.max' => 'Le nom doit contenir au plus 50 caractères',

            'prenom.required' => 'Le prénom est requis',
            'prenom.min' => 'Le prénom doit contenir au moins 2 caractères',
            'prenom.max' => 'Le prénom doit contenir au plus 50 caractères',

            'nomUsager.required' => 'Le nom d\'usager est requis',
            'nomUsager.min' => 'Le nom d\'usager doit contenir au moins 2 caractères',
            'nomUsager.max' => 'Le nom d\'usager doit contenir au plus 50 caractères',

            'email.required' => 'L\'email est requis',
            'email.email' => 'L\'email doit être valide',

            'password.required' => 'Le mot de passe est requis',
            'password.min' => 'Le mot de passe doit contenir au moins 8 caractères',
            'password.max' => 'Le mot de passe doit contenir au plus 50 caractères',

            'password_confirmation.required' => 'La confirmation du mot de passe est requise',
            'password_confirmation.same' => 'La confirmation du mot de passe doit être identique au mot de passe',
            
            'role.required' => 'Le rôle est requis',
        ];
    }
}
