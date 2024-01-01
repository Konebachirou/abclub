<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('anes', function (Blueprint $table) {
            $table->id();
            $table->string('nom_projet_entreprise');
            $table->string('Choisissez_option_liste');
            $table->string('nom_de_famille');
            $table->string('prenom');
            $table->date('date_naissance');
            $table->string('numero_telephone');
            $table->string('email');
            $table->text('parcours_professionnel');
            $table->string('code_postal');
            $table->date('date_creation_entreprise');
            $table->string('numero_siren');
            $table->string('nom_depose_societe');
            $table->enum('etes_vous_associe', ['Oui', 'Non', 'Pas encore']);
            $table->string('activite');
            $table->text('decrivez_votre_activite');

            $table->string('segment_clients');
            $table->string('relation_client_envisagee');
            $table->string('canaux_distribution');
            $table->text('proposition_valeur');
            $table->string('activite_cle');
            $table->text('ressources_cle');
            $table->text('partenaires_cles');
            $table->text('structure_couts');
            $table->text('structure_revenus');
            $table->integer('ca_n1');
            $table->integer('ca_n2');
            $table->integer('ca_n3');
            $table->integer('ca_n4');
            $table->integer('effectif_n1');
            $table->integer('effectif_n2');
            $table->integer('effectif_n3');
            $table->integer('effectif_n4');
            $table->text('info_fi');
            $table->text('projet_developpement_afrique');
            $table->text('caractere_environnemental');
            $table->text('caractere_innovant');
            $table->text('motivation_concours');
            $table->string('site_internet');
            $table->string('lien_video_presentation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anes');
    }
};
