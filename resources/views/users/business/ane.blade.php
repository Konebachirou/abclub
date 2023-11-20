@extends('users.layouts.app')
@section('titre', "Entrepreneuriat - African Business Club")
@section('content')
<!-- Start Banner Area -->
<div class="rbt-banner-area rbt-banner-1 variation-2 height-450" style="background-image: url(../assets/images/bg/bg2.png) !important;">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-7">
                <div class="content">
                    <div class="inner">
                        <h3 class="">
                            <span class="header-caption">
                                <span class="cd-headline clip is-full-width">
                                    <span class="cd-words-wrapper">
                                        <b class="is-visible ">AFRICAN NEXT ENTREPRENEURS</b>
                                        <b class="is-hidden theme-gradient">AFRICAN NEXT ENTREPRENEURS</b>
                                        <!-- <b class="is-hidden theme-gradient"> ENTREPRENEURS</b> -->
                                    </span>
                                </span>

                            </span>

                        </h3>
                        <h3 class="color-white text-center" style="font-size: 30px;">Un concours visant à promouvoir des projets d’innovation portés par des entrepreneurs de la diaspora africaine en France</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="content">
                    <div class="banner-card pb--60 swiper rbt-dot-bottom-center banner-swiper-active">
                        <div class="swiper-wrapper">
                            <img src="{{asset('assets/images/bg/ane2.png')}}" alt="Card image">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Banner Area -->

<div class="about-style-2 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="row row--0 about-wrapper align-items-center theme-shape">
                    <div class="col-lg-6">
                        <div class="thumbnail">
                            <img src="{{asset('assets/images/bg/bg4.png')}}" alt="About Images">
                        </div>
                    </div>
                    <div class="col-lg-6 mt_md--30 mt_sm--30">
                        <div class="content">
                            <div class="inner">
                                <h4 class="title">about Entrepreneuriat.</h4>
                                <p> L'African Mobility and Innovation Day est un événement organisé par l'association African Business Club,
                                    dédié à l'entrepreneuriat et au recrutement des jeunes diplômés en Afrique. Cet événement se tient chaque
                                    année depuis sa création en 2015 et vise à promouvoir l'innovation et la mobilité en Afrique. Pendant cette journée,
                                    des conférences inspirantes, des ateliers pratiques et des sessions de réseautage sont organisés pour
                                    permettre aux jeunes entrepreneurs de développer leurs compétences et de rencontrer des acteurs clés de l'industrie.
                                    L'événement met également en avant les opportunités professionnelles en Afrique et encourage les jeunes diplômés à contribuer
                                    au développement économique du continent. L'African Mobility and Innovation Day est devenu un rendez-vous incontournable pour
                                    les jeunes talents africains souhaitant
                                    se lancer dans l'entrepreneuriat et trouver des opportunités de carrière en Afrique.</p>


                            </div>
                        </div>
                    </div>
                    <div class="top-circle-shape position-bottom-right"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="rbt-split-area bg-color-white overflow-hidden rbt-section-gapTop">
    <div class="wrapper">
        <div class="rbt-splite-style">
            <div class="split-wrapper">
                <div class="row g-0 align-items-center">
                    <div class="col-lg-12 col-xl-6 col-12">
                        <div class="thumbnail image-left-content">
                            <img src="{{asset('assets/images/bg/bg4.png')}}" alt="split Images">
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-6 col-12">
                        <div class="split-inner">
                            <!-- Start List Style  -->
                            <div class="rbt-feature-wrapper">
                                <div class="rbt-feature feature-style-2">
                                    <div class="icon bg-primary-opacity">
                                        <i class="feather-book"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h6 class="feature-title">Favoriser l'entrepreneuriat :</h6>
                                        <p class="feature-description">L'événement vise à encourager et inspirer les jeunes entrepreneurs en leur fournissant des informations et des
                                            ressources nécessaires pour lancer et développer leurs propres entreprises en Afrique.</p>
                                    </div>
                                </div>

                                <div class="rbt-feature feature-style-2">
                                    <div class="icon bg-primary-opacity">
                                        <i class="feather-book"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h6 class="feature-title">Promouvoir l'innovation : </h6>
                                        <p class="feature-description">L'événement met l'accent sur l'importance de l'innovation dans le développement économique de l'Afrique,
                                            en mettant en avant les projets et les idées novatrices des jeunes entrepreneurs.</p>
                                    </div>
                                </div>

                                <div class="rbt-feature feature-style-2">
                                    <div class="icon bg-primary-opacity">
                                        <i class="feather-book"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h6 class="feature-title">Connecter les acteurs clés : </h6>
                                        <p class="feature-description">L'African Next Entrepreneurs réunit des entrepreneurs, des investisseurs,
                                            des représentants d'entreprises, des responsables gouvernementaux et des experts du secteur,
                                            créant ainsi un espace propice aux échanges et au partage d'expériences.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End List Style  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="rbt-service-area bg-color-extra2 rbt-section-gap">
    <div class="container">
        <div class="row mb--60">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2 class="title">Critères de sélection</h2>
                </div>
            </div>
        </div>
        <!-- Start Card Area -->
        <div class="row row--15 mt_dec--30">

            <!-- Start Single Card  -->
            <div class="col-xl-4 col-md-6 col-sm-6 col-12 mt--30">
                <div class="rbt-service rbt-service-2 rbt-hover-02">
                    <div class="inner">
                        <div class="content">
                            <h4 class="text-center">Entrepreneur de la diaspora africaine ?</h4>
                            <p class="text-center">Entrepreneur francophone issu de la diaspora africaine, vous avez un projet d'entreprise en Afrique seul ou en groupe ?<br><br>Votre projet adresse les secteurs de l'éducation, la formation, la tech, l'agroalimentaire, l'énergie ou de l'environnement...</p>
                            <!-- <a class="transparent-button" href="#">Learn More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Card  -->

            <!-- Start Single Card  -->
            <div class="col-xl-4 col-md-6 col-sm-6 col-12 mt--30">
                <div class="rbt-service rbt-service-2 rbt-hover-02">
                    <div class="inner">
                        <div class="content">
                            <h4 class="text-center">Avoir un Business Model établi</h4>
                            <p class="text-center">
                                Votre Business model est déjà prêt, il ne reste qu'à trouver les premiers clients ?<br><br>
                                Candidatez à notre concours et bénéficiez d'accompagnement pour développer votre potentiel en Afrique !

                            </p>
                            <!-- <a class="transparent-button" href="#">Learn More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Card  -->

            <!-- Start Single Card  -->
            <div class="col-xl-4 col-md-6 col-sm-6 col-12 mt--30">
                <div class="rbt-service rbt-service-2 rbt-hover-02">
                    <div class="inner">
                        <div class="content">
                            <h4 class="text-center">Etre motivé(e) et disponible !</h4>
                            <p class="text-center">Nous vous proposons un accompagnement sur 2 semaines ! <br><br>
                                Des workshops, des webinaires, de séances d'intelligence collective tout cela pour vous préparer au concours</p>
                            <!-- <a class="transparent-button" href="#">Learn More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Card  -->
        </div>
        <!-- End Card Area -->
    </div>
</div>
<!-- End Service Area -->

<!-- End About Area  -->
<!-- Start Call To Action  -->
<div class="rbt-callto-action-area">
    <div class="rbt-callto-action rbt-cta-default style-4 variation-2 bg-gradient-6 mt--75">
        <div class="container">
            <div class="row align-items-center content-wrapper row--30 mt_dec--30 position-relative">
                <div class="col-lg-9 mt--30 offset-lg-3">
                    <div class="inner">
                        <div class="content text-center">
                            <h5 class="title">🔔🔔l'African Next Entrepreneurs est de retour avec l'édition 2024!🔔🔔
                                <br><br>

                                Le concours mettant à l'honneur les projets innovants des porteurs de projet de la diaspora africaine ouvre ses candidatures.
                                <br><br>Vous êtes entrepreneur de la diaspora africaine, vous avez un projet entrepreneurial en lien avec l'Afrique.

                                Candidatez à l'African Next Entrepreneurs
                            </h5>
                            <div class="call-to-btn text-center mt--30">
                                <a class="rbt-btn btn-gradient hover-icon-reverse" href="{{ route('postuler_link') }}">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Candidater ICI</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="thumbnail">
                    <img class="w-100" src="{{asset('assets/images/shape/cta-4.png')}}" height="360" alt="Shape Images">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Call To Action  -->
<div class="rbt-team-area bg-color-white" style="margin-top: 5%;">
    <div class="container">
        <div class="row mb--60">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h5 class="title">LAST WINNERS</h5>
                    <!-- <p class="description mt--10">Modern Circle Style. -->
                    </p>
                </div>
            </div>
        </div>
        <div class="row row--15 mt_dec--30">
            @for($i=0; $i< 3; $i++) <!-- Start Single Team -->
                <div class="col-lg-4 col-md-6 col-12 mt--30">
                    <div class="rbt-team team-style-default rbt-hover-02">
                        <div class="inner">
                            <div class="thumbnail">
                                <img src="{{asset('assets/images/team/team-02.jpg')}}" alt="Corporate Template">
                            </div>
                            <div class="content">
                                <h2 class="title">TEAM NAME</h2>
                                <!-- <h6 class="subtitle theme-gradient">Master's Degree</h6>
                                <span class="team-form">
                         <i class="feather-map-pin"></i>
                        <span class="location">CO Miego, AD,USA</span> 
                                </span> -->
                                <p class="description">Team project description </p>
                                <ul class="social-icon social-default icon-naked mt--20">
                                    <li><a href="https://www.facebook.com/">
                                            <i class="feather-facebook"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.twitter.com">
                                            <i class="feather-twitter"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.instagram.com/">
                                            <i class="feather-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Team  -->
                @endfor

        </div>
    </div>
</div>

@stop