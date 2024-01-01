@extends('users.layouts.app')
@section('titre', 'Entrepreneuriat - African Business Club')
@section('content')

    <!-- Start Banner Area -->
    <div class="rbt-banner-area rbt-banner-4 bg_image bg_image--19 " data-gradient-overlay="4">
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="content text-start">
                            <div class="inner">
                                <!-- <div class="mb--20">
                                                                                                                    <a href="#" class="rbt-badge-2">
                                                                                                                        <div class="image"><img src="assets/images/testimonial/client-02.png')}}" alt="Education Images"></div> Learn with <strong>Fatima Asrafy</strong>
                                                                                                                    </a>
                                                                                                                </div> -->
                                <h1 class="title">AFRICA
                                    MOBILITY AND <br />INNOVATION DAYS </h1>
                                <p class="description color-white">Mettre en place un terreau fertile et une source <br>
                                    d’appui au developpement d’initative africaines</p>

                                <ul class="rbt-list-style-2 text-color-white">
                                    <li><i class="feather-check"></i><span class="color-white">Leadership</span></li>
                                    <li><i class="feather-check"></i><span class="color-white">Unité</span></li>
                                    <li><i class="feather-check"></i><span class="color-white">Engagement</span></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Area -->
    <div class="rbt-about-area about-style-1 bg-color-white " style="margin-top: 5%;">
        <div class="container">
            <div class="row g-5 align-items-start">
                <div class="col-lg-2">
                    <div class="content">
                        <h2 class="title mb--0" data-sal="slide-up" data-sal-duration="400">C'est quoi l'AMID</h2>
                    </div>
                </div>
                <div class="col-lg-10" data-sal="slide-up" data-sal-duration="500">
                    <p class="mb--40 mb_sm--20">L'African Mobility and Innovation Day est un événement organisé par
                        l'association
                        African Business Club, dédié à l'entrepreneuriat et au recrutement des jeunes diplômés en Afrique.
                        Cet événement
                        se tient chaque année depuis sa création en 2015 et vise à promouvoir l'innovation et la mobilité en
                        Afrique.
                        Pendant cette journée, des conférences inspirantes, des ateliers pratiques et des sessions de
                        réseautage sont
                        organisés pour permettre aux jeunes entrepreneurs de développer leurs compétences et de rencontrer
                        des
                        acteurs clés de l'industrie. L'événement met également en avant les opportunités professionnelles en
                        Afrique et encourage les jeunes diplômés à contribuer au développement économique du continent.
                        L'African
                        Mobility and Innovation Day est devenu un rendez-vous incontournable pour les jeunes talents
                        africains souhaitant
                        se lancer dans l'entrepreneuriat et trouver des opportunités de carrière en Afrique.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-tab-area bg-color-white " data-sal="slide-up" data-sal-duration="600">
        <div class="container">
            <div class="row mb--40">
                <div class="col-lg-12">
                    <div class="section-title text-center sal-animate" data-sal="slide-up" data-sal-duration="700"
                        data-sal-delay="100">
                        <h5 class="title">NOS VALEURS ET OBJECTIFS</h5>
                    </div>
                </div>
            </div>

            <div class="row row row--30 align-items-center">
                <div class="col-lg-5">
                    <img class="radius-small" src="{{ asset('assets/images/bg/amid.png') }}" alt="Corporate Template">
                </div>
                <div class="col-lg-7 mt_md--40 mt_sm--40 order-2 order-lg-1">
                    <div class="rbt-default-tab">
                        <ul class="nav nav-tabs tab-button" role="tablist">
                            <li class="nav-item tabs__tab " role="presentation">
                                <button class="nav-link active" id="home-tab-5" data-bs-toggle="tab" data-bs-target="#home5"
                                    type="button" role="tab" aria-controls="home5"
                                    aria-selected="true">Leadership</button>
                            </li>
                            <li class="nav-item tabs__tab " role="presentation">
                                <button class="nav-link" id="profile-tab5" data-bs-toggle="tab" data-bs-target="#profile5"
                                    type="button" role="tab" aria-controls="profile5"
                                    aria-selected="false">Unité</button>
                            </li>
                            <li class="nav-item tabs__tab " role="presentation">
                                <button class="nav-link" id="contact-tab5" data-bs-toggle="tab" data-bs-target="#contact5"
                                    type="button" role="tab" aria-controls="contact5"
                                    aria-selected="false">Engagement</button>
                            </li>
                        </ul>
                        <div class="rainbow-tab-content tab-content">
                            <div class="tab-pane fade show active" id="home5" role="tabpanel"
                                aria-labelledby="home-tab-5">
                                <p>Se positionner comme un intermédiaire entre des personnes désireuses de s’installer ou
                                    d’entreprendre en Afrique
                                    et l'écosystème des entreprises présentes sur le sol africain.</p>

                            </div>

                            <div class="tab-pane fade" id="profile5" role="tabpanel" aria-labelledby="profile-tab5">
                                <ul>
                                    <li>Construire un cercle de réflexion autour des questions/possibilités de
                                        contribution au développement de l'Afrique.
                                    </li>
                                    <li>
                                        Développer des partenariats sur le long terme avec les associations étudiantes,
                                        professionnelles, les entreprises et les cercles de réflexion.
                                    </li>
                                    <li>
                                        Développer un réseau fort et puissant et le mettre à disposition de nos
                                        adhérents et de nos sympathisants.
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-pane fade" id="contact5" role="tabpanel" aria-labelledby="contact-tab5">
                                <ul>
                                    <li>
                                        Promouvoir et renforcer le développement d'initiatives et les opportunités en
                                        Afrique.
                                    </li>
                                    <li>
                                        Rendre visible les actions business menées sur le terrains.

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="rbt-counterup-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row mb--40">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2 class="title">L'AMID en chiffre</h2>
                        <p class="description has-medium-font-size mt--20 mb--0">durant l'AMID dernier nous avons eu comme
                            chiffre</p>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <!-- Start Single Counter  -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="rbt-counterup style-3">
                        <div class="inner">
                            <div class="content">
                                <h2 class="counter"><span class="odometer" data-count="500">00</span>
                                </h2>
                                <span class="subtitle">Entreprise</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Counter  -->

                <!-- Start Single Counter  -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="rbt-counterup style-3">
                        <div class="inner">
                            <div class="content">
                                <h2 class="counter"><span class="odometer" data-count="800">00</span>
                                </h2>
                                <span class="subtitle">Etudiant & Professionnels</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Counter  -->

                <!-- Start Single Counter  -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="rbt-counterup style-3">
                        <div class="inner">
                            <div class="content">
                                <h2 class="counter"><span class="odometer" data-count="100">00</span>
                                </h2>
                                <span class="subtitle">ONG et associations</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Counter  -->
            </div>
        </div>
    </div>

    <!-- Start Testimonial Area   -->
    <div class="rbt-testimonial-area bg-color-white overflow-hidden">
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center mb--10">
                            <!-- <span class="subtitle bg-primary-opacity">EDUCATION FOR EVERYONE</span> -->
                            <h2 class="title">Ils ont décider de nous accompagner</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <livewire:component.amid-partner-component />


    </div>
    <!-- End Testimonial Area   -->

@stop
