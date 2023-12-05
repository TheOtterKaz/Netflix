<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmRequest extends FormRequest
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
            'titre' => 'required|string|max:100', 
            'resume' => 'required|string|max:500', 
            'brand' => 'required|string|max:250', 
            'collection' => 'required|string|max:250', 
            'cote' => 'required|integer', 
            'rating' => 'required|string|max:50',                             
            'duree' => 'required|integer', 
            'annee' => 'required|integer', 
            'realisateur_id' => 'integer', 
            'producteur_id' => 'integer', 
            'type' => 'required|string|max:300', 
            'imageFilm' => 'string|max:2048', 
            'lienFilm' => 'string|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'titre.required' => 'Le titre est requis',
            'resume.required' => 'Le résumé est requis',
            'brand.required' => 'La marque est requise',
            'collection.required' => 'La collection est requise',
            'cote.required' => 'La cote est requise',
            'rating.required' => 'Le rating est requis',
            'duree.required' => 'La durée est requise',
            'annee.required' => 'L\'année est requise',
            'realisateur_id.required' => 'Le réalisateur est requis',
            'producteur_id.required' => 'Le producteur est requis',
            'type.required' => 'Le type est requis',
            'imageFilm.required' => 'L\'image est requise',
            'lienFilm.required' => 'Le lien est requis'
        ];
    }
}
