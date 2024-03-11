@extends('users.layouts.app')
@section('titre', 'Entrepreneuriat - African Business Club')
@section('content')
<!-- Start CallTo Action Area  -->
<div class="rbt-call-to-action-area rbt-section-gap rbt-call-to-action-5">
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rbt-cta-5">
                        <div class="content">
                            <h1 class="title text-center">Candidatez à l'African Next Entrepreneurs</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-images">
            <img src="assets/images/icons/three-shape.png" alt="Shape Images">
        </div>
    </div>
    <!-- End CallTo Action Area  -->
</div>
<div class="checkout_area bg-color-white ">
    <div class="container">
        <div class="row g-5 checkout-form">
            <div class="checkout-content-wrapper">
                <form id="billing-form" action="{{ route('postuler-store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-12 mb--20">
                            <label>Nom de votre projet /entreprise</label>
                            <input name="nom_projet_entreprise" type="text" required placeholder="Nom de votre projet /entreprise">
                            @error('nom_projet_entreprise')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 col-12 mb--20">
                            <label>Choisissez votre secteur d'activité *</label>
                            <div class="rbt-modern-select  height-45">
                                <select name="activite" required class="w-100">
                                    @foreach ($selects as $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                    @endforeach
                                </select>
                                @error('Choisissez_option_liste')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-12 mb--20">
                            <label>Nom de famille </label>
                            <input name="nom_de_famille" type="text" required placeholder="Nom de famille ">
                            @error('nom_de_famille')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 col-12 mb--20">
                            <label>Prénom *</label>
                            <input name="prenom" type="text" required placeholder="Prénom">
                            @error('prenom')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 col-12 mb--20">
                            <label>Quel est votre date de naissance ? *</label>
                            <input name="date_naissance" required type="date" placeholder="Quel est votre date de naissance ?">
                            @error('date_naissance')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 col-12 mb--20">
                            <label>Numéro de téléphone *</label>
                            <input name="numero_telephone" type="text" required placeholder="Numéro de téléphone ?">
                            @error('numero_telephone')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 col-12 mb--20">
                            <label>Email *</label>
                            <input name="email" type="email" required placeholder="Email">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 col-12 mb--20">
                            <label>Expliquez-nous votre parcours professionnel : *</label>
                            <textarea type="text" name="parcours_professionnel" required placeholder="Saisissez votre texte ici"></textarea>
                            @error('parcours_professionnel')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 col-12 mb--20">
                            <label>Code postal *</label>
                            <input name="code_postal" type="text" required placeholder="Code postal *">
                            @error('code_postal')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 col-12 mb--20">
                            <label>Date de création de l'entreprise (si celle-ci est créée)</label>
                            <input name="date_creation_entreprise" type="date" placeholder="Code postal *">
                            @error('date_creation_entreprise')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 col-12 mb--20">
                            <label>Numéro de SIREN (si votre entreprise est immatriculée en France)</label>
                            <input name="numero_siren" type="text" placeholder="Numéro de SIREN (si votre entreprise est immatriculée en France)">
                            @error('numero_siren')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 col-12 mb--20">
                            <label>Nom déposé de la société</label>
                            <input name="nom_depose_societe" type="number" placeholder="Nom déposé de la société">
                            @error('nom_depose_societe')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 col-12 mb--20">
                            <label>Décrivez votre activité *</label>
                            <textarea type="text" name="decrivez_votre_activite" required placeholder="Décrivez votre activité *"></textarea>
                            @error('decrivez_votre_activite')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 col-12 mb--20">
                            <h5>Etes vous associé ?</h5>
                            <div class="rbt-modern-select  height-45">
                                <select name="Choisissez_option_liste" required class="w-100">
                                    <option value="Oui">Oui</option>
                                    <option value="Non">Non, je ne souhaite pas</option>
                                    <option value="Pas encore">Pas encore, mais j'y pense</option>
                                </select>
                                @error('Choisissez_option_liste')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <h5 class="text-center mb--50 mt--10">Votre Business model <br>
                            Aidez nous a mieux comprendre votre projet au travers de votre Business model</h5>
                        <div class="col-md-6 col-12 mb--20">
                            <label>Votre segment de clients *</label>
                            <input type="text" name="segment_clients" required placeholder="Décrivez Votre segment de clients *">
                            @error('segment_clients')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 col-12 mb--20">
                            <label>Relation client envisagée ?</label>
                            <input type="text" name="relation_client_envisagee" placeholder="Décrivez Relation client envisagée ?">
                            @error('relation_client_envisagee')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 col-12 mb--20">
                            <label>Canaux de distribution</label>
                            <input type="text" name="canaux_distribution" placeholder="Décrivez Canaux de distribution">
                            @error('canaux_distribution')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 col-12 mb--20">
                            <label>La proposition de valeur (1phrase) *</label>
                            <input type="text" name="proposition_valeur" required placeholder="Décrivez La proposition de valeur (1phrase) *">
                            @error('proposition_valeur')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 col-12 mb--20">
                            <label>Activité clé *</label>
                            <input type="text" name="activite_cle" placeholder="Décrivez Votre segment de clients *">
                            @error('activite_cle')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 col-12 mb--20">
                            <label>Ressources clé *</label>
                            <input type="text" name="ressources_cle" required placeholder="Ressources clé *">
                            @error('ressources_cle')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 col-12 mb--20">
                            <label>Partenaires clés *</label>
                            <input type="text" name="partenaires_cles" required placeholder="Partenaires clés *">
                            @error('partenaires_cles')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 col-12 mb--20">
                            <label>Structure de couts *</label>
                            <input type="text" name="structure_couts" required placeholder="Structure de couts *">
                            @error('structure_couts')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 col-12 mb--20">
                            <label>Structure de revenus *</label>
                            <input type="text" name="structure_revenus" required placeholder="Structure de revenus *">
                            @error('structure_revenus')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 col-12 mb--20">
                            <label>CA N-1 (N = année actuelle) </label>
                            <input type="number" name="ca_n1" placeholder=" CA N-1 (N = année actuelle) ">
                            @error('ca_2022')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 col-12 mb--20">
                            <label>CA N (N = année actuelle)</label>
                            <input type="number" name="ca_n2"  placeholder=" CA N (N = année actuelle)">
                            @error('ca_2023')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 col-12 mb--20">
                            <label>CA N+1 (Prévisionel) </label>
                            <input type="number" name="ca_n3" placeholder=" CA N+1 (Prévisionel)">
                            @error('ca_2024')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 col-12 mb--20">
                            <label>CA N+2( Prévisionel)</label>
                            <input type="number" name="ca_n4"  placeholder=" CA N+2( Prévisionel)">
                            @error('ca_2025')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 col-12 mb--20">
                            <label>Effectif N-1 (N = année actuelle)</label>
                            <input type="number" name="effectif_n1"  placeholder="Effectif N-1 (N = année actuelle)">
                            @error('effectif_2022')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 col-12 mb--20">
                            <label>Effectif N (N = année actuelle)</label>
                            <input type="number" name="effectif_n2"  placeholder=" Effectif N (N = année actuelle)">
                            @error('effectif_2023')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 col-12 mb--20">
                            <label>Effectif N+1 ( Prévisionel)</label>
                            <input type="number" name="effectif_n3"  placeholder="Effectif N+1 ( Prévisionel)">
                            @error('effectif_2024')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 col-12 mb--20">
                            <label>Effectif N+2 ( Prévisionel)</label>
                            <input type="number" name="effectif_n4"  placeholder=" Effectif N+2 ( Prévisionel)">
                            @error('effectif_2025')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 col-12 mb--20">
                            <label>INFO FI + :</label>
                            <textarea type="text" name="info_fi"  placeholder="Saisissez votre texte ici"></textarea>
                            @error('info_fi')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 col-12 mb--20">
                            <label>Quel est votre projet de développement en Afrique ? ou quel est votre impact sur
                                la diaspora africaine ? </label>
                            <textarea type="text" name="projet_developpement_afrique" placeholder="Saisissez votre texte ici"></textarea>
                            @error('projet_developpement_afrique')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 col-12 mb--20">
                            <label>Caractère environnemental :</label>
                            <textarea type="text" name="caractere_environnemental" placeholder="Saisissez votre texte ici"></textarea>
                            @error('caractere_environnemental')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 col-12 mb--20">
                            <label>Caractère innovant :</label>
                            <textarea type="text" name="caractere_innovant" placeholder="Saisissez votre texte ici"></textarea>
                            @error('caractere_innovant')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 col-12 mb--20">
                            <label>Pourquoi avez vous candidaté à ce concours ?</label>
                            <textarea type="text" name="motivation_concours" placeholder="Saisissez votre texte ici"></textarea>
                            @error('motivation_concours')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 col-12 mb--20">
                            <label>Site internet</label>
                            <input type="text" name="site_internet" placeholder=" Site internet">
                            @error('site_internet')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 col-12 mb--30">
                            <label>Vous pouvez vous présenter au travers d'une vidéo. N'hésitez pas à nous la
                                partager !</label>
                            <input type="file" name="lien_video_presentation" placeholder="Telecharger!" accept="image/*,video/*">
                            @error('lien_video_presentation')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12 mb--20">
                            <div class="plceholder-button text-center mt--50">
                                <button class="rbt-btn btn-gradient hover-icon-reverse">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Je candidate</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </button>
                            </div>
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop