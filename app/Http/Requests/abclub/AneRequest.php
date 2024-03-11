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
            'nom_projet_entreprise' => 'string',
            'nom_de_famille' => 'string',
            'prenom' => 'string',
            'date_naissance' => 'date',
            'numero_telephone' => 'string',
            'email' => 'email',
            'parcours_professionnel' => 'string',
            'code_postal' => 'string',
            'date_creation_entreprise' => 'date',
            'numero_siren' => 'string',
            'nom_depose_societe' => 'string',
            'etes_vous_associe' => 'in:Oui,Non,Pas encore',
            'activite' => 'string',
            'decrivez_votre_activite' => 'string',
            'segment_clients' => 'string',
            'relation_client_envisagee' => 'string',
            'canaux_distribution' => 'string',
            'proposition_valeur' => 'string',
            'activite_cle' => 'string',
            'ressources_cle' => 'string',
            'partenaires_cles' => 'string',
            'structure_couts' => 'string',
            'structure_revenus' => 'string',
            'ca_n1' => 'numeric',
            'ca_n2' => 'numeric',
            'ca_n3' => 'numeric',
            'ca_n4' => 'numeric',
            'effectif_n1' => 'numeric',
            'effectif_n2' => 'numeric',
            'effectif_n3' => 'numeric',
            'effectif_n4' => 'numeric',
            'info_fi' => 'string',
            'projet_developpement_afrique' => 'string',
            'caractere_environnemental' => 'string',
            'caractere_innovant' => 'string',
            'motivation_concours' => 'string',
            'site_internet' => 'string',
            'lien_video_presentation' => 'file|mimes:jpeg,jpg,gif,svg,png,mp4|max:10240',
        ];
        [
            'lien_video_presentation.mimes' => 'Le format du fichier doit etre jpeg,jpg,gif,svg,png,mp4',
            'lien_video_presentation.max' => 'Le fichier est trop volumineux',
            'string' => 'Veuillez renseigner ce champ',
            'date' => 'Veuillez renseigner ce champ',
            'numeric' => 'Veuillez renseigner ce champ',
            'in' => 'Veuillez renseigner ce champ',
            'email' => 'Veuillez renseigner ce champ',
            'file' => 'Veuillez renseigner ce champ',

        ];
    }
}
