@extends('users.layouts.app')
@section('titre', 'Entrepreneuriat - African Business Club')
@section('content')
    <!-- Start CallTo Action Area  -->
    <div class="rbt-call-to-action-area rbt-section-gap bg-gradient-6 rbt-call-to-action-5">
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


        <div class="checkout_area bg-color-white rbt-section-gap">
            <div class="container">
                <div class="row g-5 checkout-form">
                    <div class="checkout-content-wrapper">
                        <form id="billing-form" action="{{ route('postuler-store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Nom de votre projet /entreprise</label>
                                    <input name="nom_projet_entreprise" type="text"
                                        placeholder="Nom de votre projet /entreprise">
                                    @error('nom_projet_entreprise')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Choisissez une option de la liste *</label>
                                    <div class="rbt-modern-select bg-transparent height-45">
                                        <select name="Choisissez_option_liste" class="w-100">
                                            @foreach($selects as $item)
                                            <option value="{{$item}}">{{$item}}</option>
                                            @endforeach
                                        </select>
                                        @error('Choisissez_option_liste')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 col-12 mb--20">
                                    <label>Nom de famille </label>
                                    <input name="nom_de_famille" type="text" placeholder="Nom de famille ">
                                    @error('nom_de_famille')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Prénom *</label>
                                    <input name="prenom" type="text" placeholder="Prénom">
                                    @error('prenom')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Quel est votre date de naissance ? *</label>
                                    <input name="date_naissance" type="date"
                                        placeholder="Quel est votre date de naissance ?">
                                    @error('date_naissance')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Numéro de téléphone *</label>
                                    <input name="numero_telephone" type="text" placeholder="Numéro de téléphone ?">
                                    @error('numero_telephone')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 col-12 mb--20">
                                    <label>Email</label>
                                    <input name="email" type="email" placeholder="Email">
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 col-12 mb--20">
                                    <label>Expliquez-nous votre parcours professionnel :</label>
                                    <textarea type="text" name="parcours_professionnel" placeholder="Saisissez votre texte ici"></textarea>
                                    @error('parcours_professionnel')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 col-12 mb--20">
                                    <label>Code postal *</label>
                                    <input name="code_postal" type="text" placeholder="Code postal *">
                                    @error('code_postal')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Date de création de l'entreprise (si celle-ci est créée)*</label>
                                    <input name="date_creation_entreprise" type="date" placeholder="Code postal *">
                                    @error('date_creation_entreprise')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Numéro de SIREN (si votre entreprise est immatriculée en France)</label>
                                    <input name="numero_siren" type="number"
                                        placeholder="Numéro de SIREN (si votre entreprise est immatriculée en France)">
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
                                    <h5>Etes vous associé ?</h5>
                                    <div class="rbt-form-check">
                                        <input class="form-check-input" value="Oui" type="radio"
                                            name="etes_vous_associe" id="rbt-radio-1">
                                        <label class="form-check-label" for="rbt-radio-1"> Oui</label>
                                    </div>
                                    <div class="rbt-form-check">
                                        <input class="form-check-input" value="Non" type="radio"
                                            name="etes_vous_associe" id="rbt-radio-2">
                                        <label class="form-check-label" for="rbt-radio-2"> Non, je ne souhaite pas</label>
                                    </div>
                                    <div class="rbt-form-check">
                                        <input class="form-check-input" value="Pas encore" type="radio"
                                            name="etes_vous_associe" id="rbt-radio-3">
                                        <label class="form-check-label" for="rbt-radio-3"> Pas encore, mais j'y
                                            pense</label>
                                    </div>
                                    @error('etes_vous_associe')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Votre activité *</label>
                                    <div class="rbt-modern-select bg-transparent height-45">
                                        <select name="activite" class="w-100">
                                            <option value="Dhaka">Dhaka</option>
                                            <option value="barisal">Barisal</option>
                                            <option value="khulna">Khulna</option>
                                            <option value="comila">Comilla</option>
                                        </select>
                                        @error('activite')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 col-12 mb--20">
                                    <label>Décrivez votre activité *</label>
                                    <textarea type="text" name="decrivez_votre_activite" placeholder="Décrivez votre activité *"></textarea>
                                    @error('decrivez_votre_activite')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                                <h5 class="text-center mb--50 mt--10">Votre Business model <br>
                                    Aidez nous a mieux comprendre votre projet au travers de votre Business model</h5>

                                <div class="col-md-6 col-12 mb--20">
                                    <label>Votre segment de clients *</label>
                                    <input type="text" name="segment_clients"
                                        placeholder="Décrivez Votre segment de clients *">
                                    @error('segment_clients')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Relation client envisagée ?</label>
                                    <input type="text" name="relation_client_envisagee"
                                        placeholder="Décrivez Relation client envisagée ?">
                                    @error('relation_client_envisagee')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Canaux de distribution *</label>
                                    <input type="text" name="canaux_distribution"
                                        placeholder="Décrivez Canaux de distribution *">
                                    @error('canaux_distribution')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>La proposition de valeur (1phrase)</label>
                                    <input type="text" name="proposition_valeur"
                                        placeholder="Décrivez La proposition de valeur (1phrase)">
                                    @error('proposition_valeur')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Activité clé *</label>
                                    <input type="text" name="activite_cle"
                                        placeholder="Décrivez Votre segment de clients *">
                                    @error('activite_cle')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Ressources clé *</label>
                                    <input type="text" name="ressources_cle" placeholder="Ressources clé *">
                                    @error('ressources_cle')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Partenaires clés *</label>
                                    <input type="text" name="partenaires_cles" placeholder="Partenaires clés *">
                                    @error('partenaires_cles')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Structure de couts *</label>
                                    <input type="text" name="structure_couts" placeholder="Structure de couts *">
                                    @error('structure_couts')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Structure de revenus *</label>
                                    <input type="text" name="structure_revenus" placeholder="Structure de revenus *">
                                    @error('structure_revenus')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>CA 2022 *</label>
                                    <input type="number" name="ca_2022" placeholder=" CA 2022 *">
                                    @error('ca_2022')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>CA 2023 *</label>
                                    <input type="number" name="ca_2023" placeholder=" CA 2023 *">
                                    @error('ca_2023')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>CA 2024 ( Prévisionel) *</label>
                                    <input type="number" name="ca_2024" placeholder=" CA 2024 *">
                                    @error('ca_2024')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>CA 2025 ( Prévisionel) *</label>
                                    <input type="number" name="ca_2025" placeholder=" CA 2024 *">
                                    @error('ca_2025')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Effectif 2022 ( Prévisionel) *</label>
                                    <input type="number" name="effectif_2022" placeholder=" Effectif 2022 *">
                                    @error('effectif_2022')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Effectif 2023 ( Prévisionel) *</label>
                                    <input type="number" name="effectif_2023" placeholder=" Effectif 2023 *">
                                    @error('effectif_2023')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Effectif 2024 ( Prévisionel) *</label>
                                    <input type="number" name="effectif_2024" placeholder=" Effectif 2024 *">
                                    @error('effectif_2024')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Effectif 2025 ( Prévisionel) *</label>
                                    <input type="number" name="effectif_2025" placeholder=" Effectif 2025 *">
                                    @error('effectif_2025')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 col-12 mb--20">
                                    <label>INFO FI + :</label>
                                    <textarea type="text" name="info_fi" placeholder="Saisissez votre texte ici"></textarea>
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
                                    <input type="file" name="lien_video_presentation" placeholder="Telecharger!">
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
            <!-- </div> -->
        </div>
    @stop
