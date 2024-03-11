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
            $table->string('nom_projet_entreprise')->nullable();
            $table->string('nom_de_famille')->nullable();
            $table->string('prenom')->nullable();
            $table->date('date_naissance')->nullable();
            $table->string('numero_telephone')->nullable();
            $table->string('email')->nullable();
            $table->text('parcours_professionnel')->nullable();
            $table->string('code_postal')->nullable();
            $table->date('date_creation_entreprise')->nullable();
            $table->string('numero_siren')->nullable();
            $table->string('nom_depose_societe')->nullable();
            $table->enum('etes_vous_associe', ['Oui', 'Non', 'Pas encore']);
            $table->string('activite')->nullable();
            $table->text('decrivez_votre_activite')->nullable();

            $table->string('segment_clients')->nullable();
            $table->string('relation_client_envisagee')->nullable();
            $table->string('canaux_distribution')->nullable();
            $table->text('proposition_valeur')->nullable();
            $table->string('activite_cle')->nullable();
            $table->text('ressources_cle')->nullable();
            $table->text('partenaires_cles')->nullable();
            $table->text('structure_couts')->nullable();
            $table->text('structure_revenus')->nullable();
            $table->integer('ca_n1')->nullable();
            $table->integer('ca_n2')->nullable();
            $table->integer('ca_n3')->nullable();
            $table->integer('ca_n4')->nullable();
            $table->integer('effectif_n1')->nullable();
            $table->integer('effectif_n2')->nullable();
            $table->integer('effectif_n3')->nullable();
            $table->integer('effectif_n4')->nullable();
            $table->text('info_fi')->nullable();
            $table->text('projet_developpement_afrique')->nullable();
            $table->text('caractere_environnemental')->nullable();
            $table->text('caractere_innovant')->nullable();
            $table->text('motivation_concours')->nullable();
            $table->string('site_internet')->nullable();
            $table->string('lien_video_presentation')->nullable();
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
