<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>African Business Club</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f7f7f7;
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        header img {
            max-width: 200px;
            /* Adjust the max-width as needed */
            max-height: 200px;
            /* Adjust the max-height as needed */
        }

        h1 {
            color: #333;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
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

        .section {
            text-align: center;
            margin: 20px;
            background-color: #f4f4f4;
            /* Add a background color */
            padding: 20px;
            /* Add padding for better spacing */
            border-radius: 10px;
            /* Add rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Add a subtle box shadow */
        }



        h3 {
            font-size: 20px;
            /* Set font size for subheadings */
            color: #555;
            /* Set subheading text color */
            margin-bottom: 15px;
        }

        p {
            font-size: 16px;
            /* Set font size for paragraphs */
            color: #777;
            /* Set paragraph text color */
            margin-bottom: 10px;
        }

        .section-center {
            text-align: center;
            margin: 20px;
            background-color: #f4f4f4;
            /* Add a background color */
            padding: 20px;
            /* Add padding for better spacing */
            border-radius: 10px;
            /* Add rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Add a subtle box shadow */
        }
    </style>
</head>

<body>
    <header>
        <img src="{{ asset('assets/images/logo/logo1.png') }}" alt="Association Logo">
        <h3>African Business Club</h3>
        <p>L'African Mobility and Innovation Day, organisé par l'association African Business Club, est un événement
            annuel depuis 2015 dédié à l'entrepreneuriat et au recrutement des jeunes diplômés en Afrique. Il offre des
            conférences, des ateliers et des opportunités de réseautage pour promouvoir l'innovation, la mobilité et
            encourager les jeunes talents à contribuer au développement économique du continent..</p>
    </header>
    <div style="max-width: 800px; margin: 0 auto;">

        <!-- Informations Personnelles -->
        <div class="section">
            <h1>Informations Personnelles</h1>

            <table>
                <tr>
                    <th>Nom du Projet/Entreprise</th>
                    <td>{{ $record->nom_projet_entreprise }}</td>
                </tr>
                <tr>
                    <th>Choisissez une option de la liste</th>
                    <td>{{ $record->activite }}</td>
                </tr>
                <tr>
                    <th>Nom de Famille</th>
                    <td>{{ $record->nom_de_famille }}</td>
                </tr>
                <tr>
                    <th>Prénom</th>
                    <td>{{ $record->prenom }}</td>
                </tr>
                <tr>
                    <th>Date de Naissance</th>
                    <td>{{ $record->date_naissance }}</td>
                </tr>
                <tr>
                    <th>Numéro de Téléphone</th>
                    <td>{{ $record->numero_telephone }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $record->email }}</td>
                </tr>
                <tr>
                    <th>Parcours Professionnel</th>
                    <td>{{ $record->parcours_professionnel }}</td>
                </tr>
                <tr>
                    <th>Code Postal</th>
                    <td>{{ $record->code_postal }}</td>
                </tr>
            </table>
        </div>

        <!-- Informations de l'Entreprise -->
        <div class="section">
            <h1>Informations de l'Entreprise</h1>

            <table>
                <tr>
                    <th>Date de création de l'entreprise</th>
                    <td>{{ $record->date_creation_entreprise }}</td>
                </tr>
                <tr>
                    <th>Numéro SIREN</th>
                    <td>{{ $record->numero_siren }}</td>
                </tr>
                <tr>
                    <th>Nom Déposé de la Société</th>
                    <td>{{ $record->nom_depose_societe }}</td>
                </tr>
                <tr>
                    <th>Êtes-vous Associé</th>
                    <td>{{ $record->etes_vous_associe }}</td>
                </tr>
                <tr>
                    <th>Segment Clients</th>
                    <td>{{ $record->segment_clients }}</td>
                </tr>
                <tr>
                    <th>Relation Client Envisagée</th>
                    <td>{{ $record->relation_client_envisagee }}</td>
                </tr>
                <tr>
                    <th>Canaux de Distribution</th>
                    <td>{{ $record->canaux_distribution }}</td>
                </tr>
            </table>
            <br>
            <h1>Décrivez Votre Activité</h1>
            <p>{{ $record->decrivez_votre_activite }}</p>
        </div>

        <!-- Autres Sections - Repeat the structure for other sections using tables -->

        <!-- Section suivante ... -->

        <div class="section">
            <h1>Chiffre d'Affaires et Effectif</h1>

            <table>
                <tr>
                    <th>Chiffre d'Affaires N1</th>
                    <td>{{ $record->ca_n1 }}</td>
                </tr>
                <tr>
                    <th>Chiffre d'Affaires N2</th>
                    <td>{{ $record->ca_n2 }}</td>
                </tr>
                <tr>
                    <th>Chiffre d'Affaires N3</th>
                    <td>{{ $record->ca_n3 }}</td>
                </tr>
                <tr>
                    <th>Chiffre d'Affaires N4</th>
                    <td>{{ $record->ca_n4 }}</td>
                </tr>
                <tr>
                    <th>Effectif N1</th>
                    <td>{{ $record->effectif_n1 }}</td>
                </tr>
                <tr>
                    <th>Effectif N2</th>
                    <td>{{ $record->effectif_n2 }}</td>
                </tr>
                <tr>
                    <th>Effectif N3</th>
                    <td>{{ $record->effectif_n3 }}</td>
                </tr>
                <tr>
                    <th>Effectif N4</th>
                    <td>{{ $record->effectif_n4 }}</td>
                </tr>
            </table>
        </div>

        <!-- Section suivante ... -->

        <div class="section-center">
            <h1>Autres Informations</h1>


            <h3>Informations Financières</h1>
                <p>{{ $record->info_fi }}</p>
                <h3>Projet de Développement en Afrique</h1>
                    <p>{{ $record->projet_developpement_afrique }}</p>
                    <h3>Caractère Environnemental</h1>
                        <p>{{ $record->caractere_environnemental }}</p>
                        <h3>Motivation pour le Concours</h1>
                            <p>{{ $record->motivation_concours }}</p>
        </div>

        <!-- Section suivante ... -->

        <div class="section">
            <h1>Liens</h1>

            <table>
                <tr>
                    <th>Site Internet</th>
                    <td>{{ $record->site_internet }}</td>
                </tr>
            </table>
        </div>

    </div>
</body>

</html>
