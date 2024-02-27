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
            'nom_projet_entreprise' => 'required|string',
            'Choisissez_option_liste' => 'required|string',
            'nom_de_famille' => 'required|string',
            'prenom' => 'required|string',
            'date_naissance' => 'required|date',
            'numero_telephone' => 'required|string',
            'email' => 'required|email',
            'parcours_professionnel' => 'required|string',
            'code_postal' => 'required|string',
            'date_creation_entreprise' => 'required|date',
            'numero_siren' => 'required|string',
            'nom_depose_societe' => 'required|string',
            'etes_vous_associe' => 'required|in:Oui,Non,Pas encore',
            'activite' => 'required|string',
            'decrivez_votre_activite' => 'required|string',
            'segment_clients' => 'required|string',
            'relation_client_envisagee' => 'required|string',
            'canaux_distribution' => 'required|string',
            'proposition_valeur' => 'required|string',
            'activite_cle' => 'required|string',
            'ressources_cle' => 'required|string',
            'partenaires_cles' => 'required|string',
            'structure_couts' => 'required|string',
            'structure_revenus' => 'required|string',
            'ca_n1' => 'required',
            'ca_n2' => 'required|',
            'ca_n3' => 'required',
            'ca_n4' => 'required',
            'effectif_n1' => 'required|numeric',
            'effectif_n2' => 'required|numeric',
            'effectif_n3' => 'required|numeric',
            'effectif_n4' => 'required|numeric',
            'info_fi' => 'required|string',
            'projet_developpement_afrique' => 'required|string',
            'caractere_environnemental' => 'required|string',
            'caractere_innovant' => 'required|string',
            'motivation_concours' => 'required|string',
            'site_internet' => 'required|string',
            'lien_video_presentation' => 'required|file|mimes:jpeg,jpg,gif,svg,png,mp4|max:10240',
        ];
    }
}
