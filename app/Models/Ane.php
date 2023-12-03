<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ane extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_projet_entreprise',
        'Choisissez_option_liste',
        'nom_de_famille',
        'prenom',
        'date_naissance',
        'numero_telephone',
        'email',
        'parcours_professionnel',
        'code_postal',
        'date_creation_entreprise',
        'numero_siren',
        'nom_depose_societe',
        'etes_vous_associe',
        'activite',
        'decrivez_votre_activite',
        'segment_clients',
        'relation_client_envisagee',
        'canaux_distribution',
        'proposition_valeur',
        'activite_cle',
        'ressources_cle',
        'partenaires_cles',
        'structure_couts',
        'structure_revenus',
        'ca_2022',
        'ca_2023',
        'ca_2024',
        'ca_2025',
        'effectif_2022',
        'effectif_2023',
        'effectif_2024',
        'effectif_2025',
        'info_fi',
        'projet_developpement_afrique',
        'caractere_environnemental',
        'caractere_innovant',
        'motivation_concours',
        'site_internet',
        'lien_video_presentation',
    ];
}
