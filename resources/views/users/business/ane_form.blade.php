@extends('users.layouts.app')
@section('titre', "Entrepreneuriat - African Business Club")
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
                        <div id="billing-form">
                            <div class="row">
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Nom de votre projet /entreprise</label>
                                    <input name="#" type="text" placeholder="Nom de votre projet /entreprise">
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Choisissez une option de la liste *</label>
                                    <div class="rbt-modern-select bg-transparent height-45">
                                        <select class="w-100">
                                            <option>Dhaka</option>
                                            <option>Barisal</option>
                                            <option>Khulna</option>
                                            <option>Comilla</option>
                                            <option>Chittagong</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Nom de famille </label>
                                    <input name="#" type="text" placeholder="Nom de famille ">
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Prénom *</label>
                                    <input name="#" type="text" placeholder="Prénom">
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Quel est votre date de naissance ? *</label>
                                    <input name="#" type="date" placeholder="Quel est votre date de naissance ?">
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Numéro de téléphone *</label>
                                    <input name="#" type="text" placeholder="Numéro de téléphone ?">
                                </div>

                                <div class="col-md-6 col-12 mb--20">
                                    <label>Email</label>
                                    <input name="#" type="email" placeholder="Email">
                                </div>

                                <div class="col-md-6 col-12 mb--20">
                                    <label>Expliquez-nous votre parcours professionnel :</label>
                                    <textarea type="text" name="#" placeholder="Saisissez votre texte ici"></textarea>
                                </div>

                                <div class="col-md-6 col-12 mb--20">
                                    <label>Code postal *</label>
                                    <input name="#" type="text" placeholder="Code postal *">
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Date de création de l'entreprise (si celle-ci est créée)*</label>
                                    <input name="#" type="date" placeholder="Code postal *">
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Numéro de SIREN (si votre entreprise est immatriculée en France)</label>
                                    <input name="#" type="number" placeholder="Numéro de SIREN (si votre entreprise est immatriculée en France)">
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Nom déposé de la société</label>
                                    <input name="#" type="number" placeholder="Nom déposé de la société">
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <h5>Etes vous associé ?</h5>
                                    <div class="rbt-form-check">
                                        <input  class="form-check-input"  type="radio" name="asso" id="rbt-radio-1">
                                        <label class="form-check-label" for="rbt-radio-1"> Oui</label>
                                    </div>
                                    <div class="rbt-form-check">
                                        <input  class="form-check-input"  type="radio" name="asso" id="rbt-radio-2">
                                        <label class="form-check-label" for="rbt-radio-2"> Non, je ne souhaite pas</label>
                                    </div>
                                    <div class="rbt-form-check">
                                        <input  class="form-check-input"  type="radio" name="asso" id="rbt-radio-3">
                                        <label class="form-check-label" for="rbt-radio-3"> Pas encore, mais j'y pense</label>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Votre activité *</label>
                                    <div class="rbt-modern-select bg-transparent height-45">
                                        <select class="w-100">
                                            <option>Dhaka</option>
                                            <option>Barisal</option>
                                            <option>Khulna</option>
                                            <option>Comilla</option>
                                            <option>Chittagong</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Expliquez-nous votre parcours professionnel :</label>
                                    <textarea type="text" name="#" placeholder="Saisissez votre texte ici"></textarea>
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Décrivez votre activité  *</label>
                                    <textarea type="text" name="#" placeholder="Décrivez votre activité *"></textarea>
                                </div>
                                <!-- <div class="col-md-6 col-12 mb--20">
                                    <label>Décrivez votre activité *</label>
                                    <input name="#" type="number" placeholder="Votre activité *">
                                </div> -->

                                <h5 class="text-center mb--50 mt--10">Votre Business model <br>
Aidez nous a mieux comprendre votre projet au travers de votre Business model</h5>

                                <div class="col-md-6 col-12 mb--20">
                                    <label>Votre segment de clients *</label>
                                    <input type="text" name="#" placeholder="Décrivez Votre segment de clients *">
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Relation client envisagée ?</label>
                                    <input type="text" name="#" placeholder="Décrivez Relation client envisagée ?">
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Canaux de distribution *</label>
                                    <input type="text" name="#" placeholder="Décrivez Canaux de distribution *">
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>La proposition de valeur (1phrase)</label>
                                    <input type="text" name="#" placeholder="Décrivez La proposition de valeur (1phrase)">
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Activité clé *</label>
                                    <input type="text" name="#" placeholder="Décrivez Votre segment de clients *">
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Ressources clé *</label>
                                    <input type="text" name="#" placeholder="Ressources clé *">
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Partenaires clés *</label>
                                    <input type="text" name="#" placeholder="Partenaires clés *">
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Structure de couts *</label>
                                    <input type="text" name="#" placeholder="Structure de couts *">
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Structure de revenus *</label>
                                    <input type="text" name="#" placeholder="Structure de revenus *">
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>CA 2022 *</label>
                                    <input type="number" name="#" placeholder=" CA 2022 *">
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>CA 2023 *</label>
                                    <input type="number" name="#" placeholder=" CA 2023 *">
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>CA 2024 ( Prévisionel) *</label>
                                    <input type="number" name="#" placeholder=" CA 2024 *">
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>CA 2025 ( Prévisionel) *</label>
                                    <input type="number" name="#" placeholder=" CA 2024 *">
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Effectif 2022 ( Prévisionel) *</label>
                                    <input type="number" name="#" placeholder=" Effectif 2022 *">
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Effectif 2023 ( Prévisionel) *</label>
                                    <input type="number" name="#" placeholder=" Effectif 2023 *">
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Effectif 2024 ( Prévisionel) *</label>
                                    <input type="number" name="#" placeholder=" Effectif 2024 *">
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Effectif 2025 ( Prévisionel) *</label>
                                    <input type="number" name="#" placeholder=" Effectif 2025 *">
                                </div>

                                <div class="col-md-6 col-12 mb--20">
                                    <label>INFO FI + :</label>
                                    <textarea type="text" name="#" placeholder="Saisissez votre texte ici"></textarea>
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Quel est votre projet de développement en Afrique ? ou quel est votre impact sur la diaspora africaine ? </label>
                                    <textarea type="text" name="#" placeholder="Saisissez votre texte ici"></textarea>
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Caractère environnemental  :</label>
                                    <textarea type="text" name="#" placeholder="Saisissez votre texte ici"></textarea>
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Caractère innovant :</label>
                                    <textarea type="text" name="#" placeholder="Saisissez votre texte ici"></textarea>
                                </div>
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Pourquoi avez vous candidaté à ce concours ?</label>
                                    <textarea type="text" name="#" placeholder="Saisissez votre texte ici"></textarea>
                                </div>
                               
                                <div class="col-md-6 col-12 mb--20">
                                    <label>Site internet</label>
                                    <input type="text" name="#" placeholder=" Site internet">
                                </div>

                                <div class="col-md-6 col-12 mb--30">
                                    <label>Vous pouvez vous présenter au travers d'une vidéo. N'hésitez pas à nous la partager !</label>
                                    <input type="file" name="#" placeholder=" Site internet">
                                </div>


                                <!-- <div class="col-md-6 col-12 mb--20">
                                    <label>Address*</label>
                                    <input name="#" type="text" placeholder="Address line 1">
                                    <input name="#" type="text" placeholder="Address line 2">
                                </div> -->

                              
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

                        </div>
                    </div>
                </div>
                </div>
        <!-- </div> -->
    </div>
@stop