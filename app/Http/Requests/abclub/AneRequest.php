<?php

namespace App\Http\Requests\abclub;

use Illuminate\Foundation\Http\FormRequest;

class AneRequest extends FormRequest
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
            'nom_projet_entreprise' => 'string|nullable',
            'nom_de_famille' => 'string|nullable',
            'prenom' => 'string|nullable',
            'date_naissance' => 'date',
            'numero_telephone' => 'string|nullable',
            'email' => 'email',
            'parcours_professionnel' => 'string|nullable',
            'code_postal' => 'string|nullable',
            'date_creation_entreprise' => 'date',
            'numero_siren' => 'string|nullable',
            'nom_depose_societe' => 'string|nullable',
            'etes_vous_associe' => 'in:Oui,Non,Pas encore',
            'activite' => 'string|nullable',
            'decrivez_votre_activite' => 'string|nullable',
            'segment_clients' => 'string|nullable',
            'relation_client_envisagee' => 'string|nullable',
            'canaux_distribution' => 'string|nullable',
            'proposition_valeur' => 'string|nullable',
            'activite_cle' => 'string|nullable',
            'ressources_cle' => 'string|nullable',
            'partenaires_cles' => 'string|nullable',
            'structure_couts' => 'string|nullable',
            'structure_revenus' => 'string|nullable',
            'ca_n1' => 'numeric',
            'ca_n2' => 'numeric',
            'ca_n3' => 'numeric',
            'ca_n4' => 'numeric',
            'effectif_n1' => 'numeric',
            'effectif_n2' => 'numeric',
            'effectif_n3' => 'numeric',
            'effectif_n4' => 'numeric',
            'info_fi' => 'string|nullable',
            'projet_developpement_afrique' => 'string|nullable',
            'caractere_environnemental' => 'string|nullable',
            'caractere_innovant' => 'string|nullable',
            'motivation_concours' => 'string|nullable',
            'site_internet' => 'string|nullable',
            'lien_video_presentation' => 'file|mimes:jpeg,jpg,gif,svg,png,mp4|max:10240',
        ];
        [
            'lien_video_presentation.mimes' => 'Le format du fichier doit etre jpeg,jpg,gif,svg,png,mp4',
            'lien_video_presentation.max' => 'Le fichier est trop volumineux',

            'date' => 'Veuillez renseigner ce champ',
            'numeric' => 'Veuillez renseigner ce champ',
            'in' => 'Veuillez renseigner ce champ',
            'email' => 'Veuillez renseigner ce champ',
            'file' => 'Veuillez renseigner ce champ',

        ];
    }
}
