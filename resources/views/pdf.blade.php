<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des Informations</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f7f7f7;
        }

        h1 {
            color: #333;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
        }

        .section {
            margin-bottom: 20px;
        }

        .section-title {
            font-size: 1.2em;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }

        .form-section {
            margin-bottom: 20px;
        }

        .form-section label {
            display: block;
            margin-bottom: 5px;
            color: #666;
        }

        .form-section p {
            margin: 0;
            color: #333;
        }

        .form-section input,
        .form-section select,
        .form-section textarea {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-section textarea {
            resize: vertical;
        }

        .sub-section {
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
        }

        .sub-section>div {
            width: calc(50% - 10px);
        }

        .sub-section label {
            display: block;
            margin-bottom: 5px;
            color: #666;
        }

        .sub-section p {
            margin: 0;
            color: #333;
        }

        .sub-section input,
        .sub-section select,
        .sub-section textarea {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .sub-section textarea {
            resize: vertical;
        }

        a {
            color: #0066cc;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div style="max-width: 800px; margin: 0 auto;">
        <div class="section">
            <h1>Informations Personnelles</h1>

            <div class="sub-section">
                <div>
                    <div class="form-section">
                        <label for="nom_projet_entreprise">Nom du Projet/Entreprise:</label>
                        <p>{{ $record->nom_projet_entreprise }}</p>
                    </div>

                    <div class="form-section">
                        <label for="Choisissez_option_liste">Choisissez une option de la liste:</label>
                        <p>{{ $record->Choisissez_option_liste }}</p>
                    </div>

                    <!-- Ajoutez les autres champs d'informations personnelles de votre formulaire -->
                </div>

                <div>
                    <div class="form-section">
                        <label for="nom_de_famille">Nom de Famille:</label>
                        <p>{{ $record->nom_de_famille }}</p>
                    </div>

                    <div class="form-section">
                        <label for="prenom">Prénom:</label>
                        <p>{{ $record->prenom }}</p>
                    </div>

                    <!-- Ajoutez les autres champs d'informations personnelles de votre formulaire -->
                </div>
            </div>
        </div>

        <div class="section">
            <h1>Informations de l'Entreprise</h1>

            <div class="sub-section">
                <div>
                    <div class="form-section">
                        <label for="date_creation_entreprise">Date de création de l'entreprise:</label>
                        <p>{{ $record->date_creation_entreprise }}</p>
                    </div>

                    <div class="form-section">
                        <label for="numero_siren">Numéro SIREN:</label>
                        <p>{{ $record->numero_siren }}</p>
                    </div>

                    <!-- Ajoutez les autres champs d'informations de l'entreprise de votre formulaire -->
                </div>

                <div>
                    <div class="form-section">
                        <label for="nom_depose_societe">Nom Déposé de la Société:</label>
                        <p>{{ $record->nom_depose_societe }}</p>
                    </div>

                    <div class="form-section">
                        <label for="etes_vous_associe">Êtes-vous Associé:</label>
                        <p>{{ $record->etes_vous_associe }}</p>
                    </div>

                    <!-- Ajoutez les autres champs d'informations de l'entreprise de votre formulaire -->
                </div>
            </div>
        </div>

        <div class="section">
            <div class="sub-section">
                <div>
                    <div class="form-section">
                        <label for="activite">Activité:</label>
                        <p>{{ $record->activite }}</p>
                    </div>

                    <div class="form-section">
                        <label for="decrivez_votre_activite">Décrivez Votre Activité:</label>
                        <p>{{ $record->decrivez_votre_activite }}</p>
                    </div>

                    <!-- Ajoutez les autres champs d'informations de l'entreprise de votre formulaire -->
                </div>

                <div>
                    <div class="form-section">
                        <label for="segment_clients">Segment Clients:</label>
                        <p>{{ $record->segment_clients }}</p>
                    </div>

                    <div class="form-section">
                        <label for="relation_client_envisagee">Relation Client Envisagée:</label>
                        <p>{{ $record->relation_client_envisagee }}</p>
                    </div>

                    <!-- Ajoutez les autres champs d'informations de l'entreprise de votre formulaire -->
                </div>
            </div>
        </div>

        <div class="section">
            <div class="sub-section">
                <div>
                    <div class="form-section">
                        <label for="canaux_distribution">Canaux de Distribution:</label>
                        <p>{{ $record->canaux_distribution }}</p>
                    </div>

                    <div class="form-section">
                        <label for="proposition_valeur">Proposition de Valeur:</label>
                        <p>{{ $record->proposition_valeur }}</p>
                    </div>

                    <!-- Ajoutez les autres champs d'informations de l'entreprise de votre formulaire -->
                </div>

                <div>
                    <div class="form-section">
                        <label for="activite_cle">Activité Clé:</label>
                        <p>{{ $record->activite_cle }}</p>
                    </div>

                    <div class="form-section">
                        <label for="ressources_cle">Ressources Clé:</label>
                        <p>{{ $record->ressources_cle }}</p>
                    </div>

                    <!-- Ajoutez les autres champs d'informations de l'entreprise de votre formulaire -->
                </div>
            </div>
        </div>

        <div class="section">
            <div class="sub-section">
                <div>
                    <div class="form-section">
                        <label for="partenaires_cles">Partenaires Clés:</label>
                        <p>{{ $record->partenaires_cles }}</p>
                    </div>

                    <div class="form-section">
                        <label for="structure_couts">Structure de Coûts:</label>
                        <p>{{ $record->structure_couts }}</p>
                    </div>

                    <!-- Ajoutez les autres champs d'informations de l'entreprise de votre formulaire -->
                </div>

                <div>
                    <div class="form-section">
                        <label for="structure_revenus">Structure de Revenus:</label>
                        <p>{{ $record->structure_revenus }}</p>
                    </div>

                    <div class="form-section">
                        <label for="ca_n1">Chiffre d'Affaires N1:</label>
                        <p>{{ $record->ca_n1 }}</p>
                    </div>

                    <!-- Ajoutez les autres champs d'informations de l'entreprise de votre formulaire -->
                </div>
            </div>
        </div>

        <div class="section">
            <div class="sub-section">
                <div>
                    <div class="form-section">
                        <label for="ca_n2">Chiffre d'Affaires N2:</label>
                        <p>{{ $record->ca_n2 }}</p>
                    </div>

                    <div class="form-section">
                        <label for="ca_n3">Chiffre d'Affaires N3:</label>
                        <p>{{ $record->ca_n3 }}</p>
                    </div>

                    <!-- Ajoutez les autres champs d'informations de l'entreprise de votre formulaire -->
                </div>

                <div>
                    <div class="form-section">
                        <label for="ca_n4">Chiffre d'Affaires N4:</label>
                        <p>{{ $record->ca_n4 }}</p>
                    </div>

                    <div class="form-section">
                        <label for="effectif_n1">Effectif N1:</label>
                        <p>{{ $record->effectif_n1 }}</p>
                    </div>

                    <!-- Ajoutez les autres champs d'informations de l'entreprise de votre formulaire -->
                </div>
            </div>
        </div>

        <div class="section">
            <div class="sub-section">
                <div>
                    <div class="form-section">
                        <label for="effectif_n2">Effectif N2:</label>
                        <p>{{ $record->effectif_n2 }}</p>
                    </div>

                    <div class="form-section">
                        <label for="effectif_n3">Effectif N3:</label>
                        <p>{{ $record->effectif_n3 }}</p>
                    </div>

                    <!-- Ajoutez les autres champs d'informations de l'entreprise de votre formulaire -->
                </div>

                <div>
                    <div class="form-section">
                        <label for="effectif_n4">Effectif N4:</label>
                        <p>{{ $record->effectif_n4 }}</p>
                    </div>

                    <div class="form-section">
                        <label for="info_fi">Informations Financières:</label>
                        <p>{{ $record->info_fi }}</p>
                    </div>

                    <!-- Ajoutez les autres champs d'informations de l'entreprise de votre formulaire -->
                </div>
            </div>
        </div>

        <div class="section">
            <div class="sub-section">
                <div>
                    <div class="form-section">
                        <label for="projet_developpement_afrique">Projet de Développement en Afrique:</label>
                        <p>{{ $record->projet_developpement_afrique }}</p>
                    </div>

                    <div class="form-section">
                        <label for="caractere_environnemental">Caractère Environnemental:</label>
                        <p>{{ $record->caractere_environnemental }}</p>
                    </div>

                    <!-- Ajoutez les autres champs d'informations de l'entreprise de votre formulaire -->
                </div>

                <div>
                    <div class="form-section">
                        <label for="caractere_innovant">Caractère Innovant:</label>
                        <p>{{ $record->caractere_innovant }}</p>
                    </div>

                    <div class="form-section">
                        <label for="motivation_concours">Motivation pour le Concours:</label>
                        <p>{{ $record->motivation_concours }}</p>
                    </div>

                    <!-- Ajoutez les autres champs d'informations de l'entreprise de votre formulaire -->
                </div>
            </div>
        </div>

        <div class="section">
            <div class="sub-section">
                <div>
                    <div class="form-section">
                        <label for="site_internet">Site Internet:</label>
                        <p>{{ $record->site_internet }}</p>
                    </div>
                </div>

                <div>
                    <div class="form-section">
                        <label for="lien_video_presentation">Lien vers la vidéo de présentation:</label>
                        <p><a href="{{ $record->lien_video_presentation }}"
                                target="_blank">{{ $record->lien_video_presentation }}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
