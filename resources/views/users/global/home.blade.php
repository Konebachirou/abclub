@extends('users.layouts.app')
@section('content')
    @include('users.global.slide')

    <!-- Start Video Area  -->
    <div class="rbt-video-area bg-color-white rbt-section-gap" id="career">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="video-popup-wrapper">
                        <img class="w-100 rbt-radius" src="{{ asset('assets/images/others/brand.jpg') }}" alt="Video Images">
                        <a class="rbt-btn rounded-player-2 popup-video position-to-top with-animation "
                            href="assets/video/abc.mp4">
                            <span class="play-icon"></span>
                            <!-- <span><i class="feather-play"></i></span> -->
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner pl--50 pl_lg--0 pl_md--0 pl_sm--0">
                        <div class="section-title text-start">
                            <h3 class="title">Qu’est-ce que l’African Business Club ?</h3>
                            <p class="description mt--30 mt_md--15 mt_sm--15 mb_md--15 mb_sm--15">L’ African Business Club
                                est une association créée en 2003 sur l’initiative de <b>Mr. Ibrahim Magassa</b>
                                et d’autres étudiants de l’ESCP Europe.</p>
                            <p class="mb_md--15 mb_sm--15">Aujourd’hui,
                                notre objectif est de promouvoir et renforcer le développement d’initiatives et
                                d’opportunités en Afrique 🌍. Les valeurs que nous véhiculons sont : le leadership, l’unité
                                et le réseau.
                                L’ABC est une passerelle entre les jeunes désireux d’entreprendre en Afrique, et
                                l’écosystème d’entreprises présentes sur le sol africain. </p>
                            </p>
                            <div class="contact-btn mt--30">
                                <a class="rbt-btn hover-icon-reverse btn-border-gradient radius-round"
                                    href="{{ route('about_link') }}">
                                    <div class="icon-reverse-wrapper">
                                        <span class="btn-text">Voir Plus</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Video Area  -->
    <!-- Start Service Area -->
    <div class="rbt-service-area bg-color-extra2 " style="padding-bottom: 5%;">
        <div class="container">
            <div class="row mb--60">
                <div class="col-lg-12" style="margin-top: 5%;">
                    <div class="section-title text-center">
                        <span class="subtitle bg-primary-opacity">Pôle ABC</span>
                        <h2 class="title">Nos Pôles d'activités</h2>
                    </div>
                </div>
            </div>
            <!-- Start Card Area -->
            <div class="row g-5">
                @foreach ($poles as $pole)
                    <!-- Start Service Grid  -->
                    <div class="col-lg-4 col-xl-4 col-xxl-4 col-md-6 col-sm-6 col-12">
                        <div class="service-card service-card-5">
                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                data-bs-target="#modalPole-{{ $pole->id }}">
                                <div class="inner">
                                    <div class="icon">
                                        <img src="{{ $pole->iconUrl() }}" alt="Shape Images" style="max-width: 50px;">
                                        <!-- <img src="assets/images/shape/icon-01.png" alt="Shape Images"> -->
                                    </div>
                                    <div class="content">
                                        <h6 class="title"><a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#modalPole-{{ $pole->id }}">{{ $pole->name }}</a></h6>
                                        <!-- <p class="description">5+ Course</p> -->
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="rbt-team-modal modal fade rbt-modal-default" id="modalPole-{{ $pole->id }}"
                        tabindex="-1" aria-labelledby="modalPole-{{ $pole->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="rbt-round-btn" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="feather-x"></i>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="inner">
                                        <div class="row g-5 row--30 align-items-center">

                                            <div class="rbt-team-details">
                                                <div class="author-info">

                                                    <h4 class="title"> <img src="{{ $pole->iconUrl() }}" alt="Shape Images"
                                                            style="max-width: 60px;"> <span
                                                            class="ml-4">{{ $pole->name }}</span></h4>
                                                </div>
                                                <div>
                                                    {!! $pole->description !!}
                                                </div>

                                            </div>
                                            <!-- </div> -->
                                        </div>
                                        <div class="top-circle-shape"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->
                @endforeach

            </div>
            <!-- End Card Area -->
        </div>
    </div>


    <div class="rbt-countdown-area bg_image bg_image--6 bg_image_fixed " style="padding-bottom:3% ; padding-top: 3%;"
        data-black-overlay="6">
        <div class="container">
            <div class="row  align-items-center">
                <div class="col-lg-7">
                    <div class="inner">
                        <div class="section-title text-center">
                            <h3 class="title color-white">Dîner Gala d'Anniversaire des 20 ans de African Business Club</h3>
                            <!-- <span class="subtitle bg-white-opacity">Why Choose Us</span> -->
                            <p class="description has-medium-font-size mt--20 mb--0 color-white ">Venez célébrer avec nous
                                les 20 ans de l'African Business Club</p>
                            <p class="description has-medium-font-size mt--20 mb--0 color-white ">Heure et lieu <br>27
                                octobre 2023, 18:30 - 23:00</p>
                            <p class="description has-medium-font-size mt--20 mb--0 color-white ">Cercle National des
                                Armées, 8 Pl. Saint-Augustin, 75008 Paris, France</p>
                            <p class="description has-medium-font-size mt--20 mb--0 color-white ">Code vestimentaire <br>
                                Tenue de Soirée exigée</p>
                        </div>
                        <div class="countdown-style-1 mt--50">
                            <div class="countdown" data-date="2023-10-27">
                                <div class="countdown-container days">
                                    <span class="countdown-value">--</span>
                                    <span class="countdown-heading">Jours</span>
                                </div>
                                <div class="countdown-container hours">
                                    <span class="countdown-value">--</span>
                                    <span class="countdown-heading">Heures</span>
                                </div>
                                <div class="countdown-container minutes">
                                    <span class="countdown-value">--</span>
                                    <span class="countdown-heading">Minutes</span>
                                </div>
                                <div class="countdown-container seconds">
                                    <span class="countdown-value">--</span>
                                    <span class="countdown-heading">Secondes</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="thumbnail">
                        <img class="w-100 radius-10" src="assets/images/product/gala.jpg" alt="Product Images">
                    </div>
                    <div style="display: flex; justify-content: center; align-items: center;">
                        <a class="rbt-btn btn-gradient icon-hover m-lg-4" href="https://buy.stripe.com/cN29EGeHYgUu8p2145"
                            target="_blank">
                            <span class="btn-text">Réserver</span>
                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                        </a>
                    </div>
                    <!-- </div> -->
                </div>

            </div>
        </div>
    </div>
    </div>

    <div class="rbt-pricing-area bg-color-white" style="margin-top: 5%;">
        <div class="container">
            <div class="row g-5 mb--60">
                <div class="col-12">
                    <div class="section-title text-center">
                        <span class="subtitle bg-pink-opacity">ABC CONNECT</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="advance-pricing ">
                        <div class="inner">
                            <div class="row row--0">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="pricing-left bg_image bg_image--6 ">
                                        <h3 class="main-title">Pack Adherent</h3>
                                        <p class="description">L'African Business Club vous offre une nouvelle manière de
                                            profiter de ses
                                            évènements et des services de ses partenaires. </p>
                                        <div class="price-wrapper">
                                            <span class="price-amount">40€<sup>/Annuel</sup></span>
                                        </div>
                                        <div class="pricing-btn-group">
                                            <a class="rbt-btn btn-gradient hover-icon-reverse" href="javascript:void(0)"
                                                data-bs-toggle="modal" data-bs-target="#packModal">
                                                <span class="icon-reverse-wrapper">
                                                    <span class="btn-text">J'adhère</span>
                                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                </span>
                                            </a>
                                        </div>
                                        <small class="subtitle mt-4">Nous avons 500+ Adhérant.</small>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="pricing-right position-relative">
                                        <ul class="plan-offer-list">
                                            <li>
                                                <i class="feather-check"></i> Accès au réseau ABC (carnet d&#39;adresse)
                                            </li>
                                            <li class="mt--20">
                                                <i class="feather-check"></i> Retour d’expériences ( Africarrières)
                                            </li>
                                            <li class="mt--20">
                                                <i class="feather-check"></i> Accès privilégiés aux évènements ABC
                                            </li>
                                            <li class="mt--20">
                                                <i class="feather-check"></i> Un accès privilégié aux offres partenaires,
                                            </li>
                                            <li class="mt--20">
                                                <i class="feather-check"></i> Un accompagnement RH de qualité pour une
                                                insertion professionnelle rapide
                                            </li>
                                            <li class="mt--20">
                                                <i class="feather-check"></i> Des places VIP aux événements de l’ABC (AMID,
                                                M&amp;S),
                                            </li>
                                        </ul>
                                        <div class="pricing-badge"><span class="pl-3">AVANTAGES DU PACK</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Event Area  -->
    <div class="rbt-event-area bg-color-white " style="margin-top: 8%;">
        <div class="container">
            <div class="row g-5 align-items-end mb--60">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="section-title text-start">
                        <h2 class="title">ABC Events</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="load-more-btn text-start text-lg-end">
                        <a class="rbt-btn-link" href="{{ route('event_link') }}"> Voir tous les Events<i
                                class="feather-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                @foreach ($events as $event)
                    <!-- Start Single Event  -->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="rbt-card card-list-2 event-list-card variation-01 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="{{ route('event_details_link', $event->title) }}">
                                    @if ($event->illustration != '')
                                        <img src="{{ $event->illustrationUrl() }}" alt="Card image">
                                    @else
                                        <img src="{{ asset('assets/images/course/course-01.jpg') }}" alt="Card image">
                                    @endif
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <ul class="rbt-meta">
                                    <li><i class="feather-map-pin"></i>{!! $event->lieu !!}</li><br>
                                    <li><span><i
                                                class="feather-calendar"></i>{{ date('d M \, Y', strtotime($event->start_date)) }}</span>
                                        <span style="padding-left: 10px;"><i
                                                class="feather-clock"></i>{{ date('h:m ', strtotime($event->start_times)) }}
                                            - {{ date('h:m ', strtotime($event->end_times)) }}
                                    </li></span>
                                </ul>
                                <h5 class="rbt-card-title elipses2"><a
                                        href="{{ route('event_details_link', $event->title) }}">{!! $event->title !!}</a>
                                </h5>

                                <div class="read-more-btn">
                                    <a class="rbt-btn btn-border hover-icon-reverse btn-sm radius-round"
                                        href="{{ route('event_details_link', $event->title) }}">
                                        <span class="icon-reverse-wrapper">
                                            <span class="btn-text">Voir Plus</span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Event  -->
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Event Area  -->

    <!-- Start Blog Style -->
    <div class="rbt-rbt-blog-area  bg-gradient-7 rbt-round-bottom-shape" style="margin-top: 5%;">
        <div class="wrapper pb--50 rbt-index-upper">
            <div class="container">
                <div class="row g-5 align-items-end mb--60">
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="section-title text-start">
                            <h3 class="title color-white">L'actualités de l'ABC </h3>
                            <p class="description color-white-off mt--20">Tous savoir sur l'actualité de l'African Business
                                Club. </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="load-more-btn text-start text-lg-end">
                            <a class="rbt-btn btn-border icon-hover radius-round color-white-off"
                                href="{{ route('news_link') }}">
                                <span class="btn-text">Voir tous les articles</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Start Card Area -->
                <div class="row g-5">

                    @foreach ($news as $new)
                        <!-- Start Single Card  -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--30" data-sal-delay="150" data-sal="slide-up"
                            data-sal-duration="800">
                            <div class="rbt-card variation-02 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="{{ route('news_details_link', $new->title) }}">
                                        <img src="{{ $new->illustrationUrl() }}" alt="Card image">
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h5 class="rbt-card-title elipses2"><a
                                            href="{{ route('news_details_link', $new->title) }}">{!! $new->title !!}</a>
                                    </h5>
                                    <p class="rbt-card-text elipses3">{!! Str::limit($new->description, 120) !!}</p>
                                    <div class="rbt-card-bottom">
                                        <a class="transparent-button"
                                            href="{{ route('news_details_link', $new->title) }}">Lire Plus<i><svg
                                                    width="17" height="12" xmlns="http://www.w3.org/2000/svg">
                                                    <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                        <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                                        <path stroke-linecap="square" d="M.663 5.572h14.594" />
                                                    </g>
                                                </svg></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->
                    @endforeach
                </div>
                <!-- End Card Area -->
            </div>
        </div>
    </div>
    <!-- End Blog Style -->

    <div class="rbt-newsletter-area bg-color-white rbt-section-gap">
        <div class="container bg-gradient-5 newsletter-style-1">
            <div class="row row--15 align-items-center">
                <div class="col-lg-12 col-xl-7">
                    <div class="inner">
                        <div class="section-title text-center text-xl-start">
                            <!-- <span class="subtitle bg-secondary-opacity">Get Latest ABC Update</span> -->
                            <h2 class="title"><strong>Abonnez-vous</strong> à notre newsletter</h2>
                            <p class="description mt--20">Pour être informés de toutes les activités de L'African
                                Business Club.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-5 mt_lg--30 mt_md--30 mt_sm--30">
                    <form action="{{ route('news-letters') }}" method="POST" class="newsletter-form-1">
                        @csrf
                        <input type="email" name="email" placeholder="Enter Your E-Email">
                        <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse">
                            <span class="icon-reverse-wrapper">
                                <span class="btn-text">S'abonner</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </span>
                        </button>
                    </form>
                    @if ($errors->has('email'))
                        <span class="#">{{ $errors->first('email') }}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @include('users.global.partners')

    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>




    <!-- ###############- MODALS -############## -->
    <div class="rbt-team-modal modal fade rbt-modal-default" id="packModal" tabindex="-1" aria-labelledby="packModal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="rbt-round-btn" data-bs-dismiss="modal" aria-label="Close">
                        <i class="feather-x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="inner">
                        <div class="row g-5 row--30 align-items-center">

                            <div class="rbt-team-details">
                                <div class="col-lg-8 offset-md-2">
                                    <div class="rbt-contact-form contact-form-style-1 max-width-auto">
                                        <h3 class="title">Register</h3>
                                        <form class="max-width-auto">
                                            <div class="row mb--30">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input name="firstname" type="text" required />
                                                        <label>Nom *</label>
                                                        <span class="focus-border"></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input name="lastname" type="text" required />
                                                        <label>Prénom *</label>
                                                        <span class="focus-border"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb--30">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input name="mail" type="text" required />
                                                        <label>Email *</label>
                                                        <span class="focus-border"></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input name="tel" type="text" pattern="[0-9]{8,}"
                                                            maxlength="14" required />
                                                        <label>Téléphone *</label>
                                                        <span class="focus-border"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input name="adress" type="text">
                                                <label>Adresse *</label>
                                                <span class="focus-border"></span>
                                            </div>
                                            <div class="row ">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input name="register_password" type="password" required>
                                                        <label>Mot de Passe *</label>
                                                        <span class="focus-border"></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input name="password_confirmation" type="password" required>
                                                        <label>Confirmez le mot de passe *</label>
                                                        <span class="focus-border"></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-submit-group">
                                                <button type="submit"
                                                    class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">
                                                    <span class="icon-reverse-wrapper">
                                                        <span class="btn-text">payer adhésion</span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </span>
                                                </button>
                                            </div>

                                        </form>
                                    </div>
                                </div>

                            </div>
                            <!-- </div> -->
                        </div>
                        <div class="top-circle-shape"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
