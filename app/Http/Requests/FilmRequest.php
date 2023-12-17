<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
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
            'titre' => 'required|string|max:100', 
            'resume' => 'required|string|max:500', 
            'brand' => 'required|string|max:250', 
            'cote' => 'required|integer', 
            'rating' => 'required|string|max:50',                             
            'duree' => 'required|integer', 
            'annee' => 'required|integer', 
            'realisateur_id' => 'integer', 
            'producteur_id' => 'integer', 
            'type' => 'required|string|max:300', 
            'imageFilm' => 'required|image|mimes:png,jpeg,jpg|max:4096', 
            'lienFilm' => 'string|max:2048',
        ];
    }

    public function messages()
    {
        return 
        [
            'titre.required' => 'Le titre est requis',
            'resume.required' => 'Le résumé est requis',
            'brand.required' => 'La marque est requise',
            'cote.required' => 'La cote est requise',
            'rating.required' => 'Le rating est requis',
            'duree.required' => 'La durée est requise',
            'annee.required' => 'L\'année est requise',
            'realisateur_id.required' => 'Le réalisateur est requis',
            'producteur_id.required' => 'Le producteur est requis',
            'type.required' => 'Le type est requis',
            'imageFilm.mimes' => 'Le type d\'image n\'est pas valide (png, jpeg, jpg, gif)',
            'imageFilm.max' => 'L\'image est trop lourde (max 4Mo)',
            'lienFilm.required' => 'Le lien est requis'
        ];
    }
}
