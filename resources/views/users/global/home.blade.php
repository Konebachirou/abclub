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
                            <h3 class="title">C'est quoi L'African Business Club ?</h3>
                            <p class="description mt--30 mt_md--15 mt_sm--15 mb_md--15 mb_sm--15">L’ African Business Club
                                est une association créée en 2003 sur l’initiative de Ibrahim Magassa
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
                                        <img src="{{ asset('assets/images/shape/' . $pole->icon) }}" alt="Shape Images"
                                            style="max-width: 50px;">
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

                                                    <h4 class="title"> <img
                                                            src="{{ asset('assets/images/shape/' . $pole->icon) }}"
                                                            alt="Shape Images" style="max-width: 60px;"> <span
                                                            class="ml-4">{{ $pole->name }}</span></h4>
                                                </div>
                                                <p class="mb--15">{{ $pole->description }}</p>
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

    <div class="rbt-pricing-area bg-color-white" style="margin-top: 5%;">
        <div class="container">
            <div class="row g-5 mb--60">
                <div class="col-12">
                    <div class="section-title text-center">
                        <span class="subtitle bg-pink-opacity">Abc Connect</span>
                        <!-- <h2 class="title">Style Five</h2> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="advance-pricing">
                        <div class="inner">
                            <div class="row row--0">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="pricing-left">
                                        <h3 class="main-title">Pack Adherant</h3>
                                        <!-- <p class="description">Devenez membre de l'African Business Club a travers Notre Tout Nouveau Pack et profitez de tous ces Avantages.</p> -->
                                        <p class="description">L'ABC vous offre une nouvelle manière de profiter de ses
                                            évènements et des services de ses partenaires. Actualités africaines,
                                            réseautage, formations et réductions, l’ABC Connect est un condensé d'offres
                                            exclusives pensé pour vous. Tout ça au bout de vos doigts grâce à la
                                            plateforme en ligne !.</p>
                                        <div class="price-wrapper">
                                            <span class="price-amount">99 €<sup>/Annuel</sup></span>
                                        </div>
                                        <div class="pricing-btn-group">
                                            <button class="rbt-btn btn-gradient w-100">J'adhère</button>
                                        </div>
                                        <div class="rating">
                                            <a href="#rating">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <a href="#rating">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <a href="#rating">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <a href="#rating">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <a href="#rating">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                        <small class="subtitle">noté 4,5/5 étoiles dans 1000+ avis.</small>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="pricing-right position-relative">
                                        <div class="pricing-offer">
                                            <div class="single-list">
                                                <h4 class="price-title"> <i class="feather-check"></i>Afrique
                                                    Carrière.</h4>
                                                <p class="description"> L' ABC est la preuve vivante de l'efficacité
                                                    d'une initiative volontariste et solidaire menée avec passion,
                                                    intégrité et compétence.
                                                    Un message porteur d'espoir pour l'avenir...

                                                    .</p>
                                                <!-- <ul class="plan-offer-list">
                                                                                                                                                                                                                                        <li>
                                                                                                                                                                                                                                            <i class="feather-check"></i> 5 PPC Campaigns
                                                                                                                                                                                                                                        </li>
                                                                                                                                                                                                                                        <li>
                                                                                                                                                                                                                                            <i class="feather-check"></i> Digital Marketing
                                                                                                                                                                                                                                        </li>
                                                                                                                                                                                                                                        <li>
                                                                                                                                                                                                                                            <i class="feather-check"></i> Marketing Agency
                                                                                                                                                                                                                                        </li>
                                                                                                                                                                                                                                        <li>
                                                                                                                                                                                                                                            <i class="feather-check"></i> Seo Friendly
                                                                                                                                                                                                                                        </li>
                                                                                                                                                                                                                                    </ul> -->
                                            </div>
                                            <div class="single-list mt--40">
                                                <h4 class="price-title"> <i class="feather-check"></i>Séance Coaching
                                                </h4>
                                                <p class="description"> L' ABC est la preuve vivante de l'efficacité
                                                    d'une initiative volontariste et solidaire menée avec passion,
                                                    intégrité et compétence.
                                                    Un message porteur d'espoir pour l'avenir...

                                                    .</p>
                                            </div>

                                        </div>
                                        <div class="pricing-badge"><span> Avantages Du Pack</span></div>
                                    </div>

                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="pricing-right position-relative">
                                        <div class="pricing-offer">
                                            <div class="single-list">
                                                <h4 class="price-title"> <i class="feather-check"></i>Conférence.</h4>
                                                <p class="description"> L' ABC est la preuve vivante de l'efficacité
                                                    d'une initiative volontariste et solidaire menée avec passion,
                                                    intégrité et compétence.
                                                    Un message porteur d'espoir pour l'avenir...

                                                    .</p>
                                                <!-- <ul class="plan-offer-list">
                                                                                                                                                                                                                                        <li>
                                                                                                                                                                                                                                            <i class="feather-check"></i> 5 PPC Campaigns
                                                                                                                                                                                                                                        </li>
                                                                                                                                                                                                                                        <li>
                                                                                                                                                                                                                                            <i class="feather-check"></i> Digital Marketing
                                                                                                                                                                                                                                        </li>
                                                                                                                                                                                                                                        <li>
                                                                                                                                                                                                                                            <i class="feather-check"></i> Marketing Agency
                                                                                                                                                                                                                                        </li>
                                                                                                                                                                                                                                        <li>
                                                                                                                                                                                                                                            <i class="feather-check"></i> Seo Friendly
                                                                                                                                                                                                                                        </li>
                                                                                                                                                                                                                                    </ul> -->
                                            </div>
                                            <div class="single-list mt--40">
                                                <h4 class="price-title"> <i class="feather-check"></i>SAfter Work</h4>
                                                <p class="description"> L' ABC est la preuve vivante de l'efficacité
                                                    d'une initiative volontariste et solidaire menée avec passion,
                                                    intégrité et compétence.
                                                    Un message porteur d'espoir pour l'avenir...

                                                    .</p>
                                            </div>

                                        </div>

                                        <!-- <div class="pricing-badge"><span>Popular</span></div> -->
                                    </div>

                                    <div class="row mt--50">
                                        <div class="col-lg-12">
                                            <div class="rbt-button-group">
                                                <a class="rbt-moderbt-btn" href="#">
                                                    <span class="moderbt-btn-text">En savoir Plus</span>
                                                    <i class="feather-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
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
                        <a class="rbt-btn-link" href="#"> Voir tous les Events<i
                                class="feather-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                @for ($i = 0; $i < 4; $i++)
                    <!-- Start Single Event  -->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="rbt-card card-list-2 event-list-card variation-01 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="event-details.html">
                                    <img src="{{ asset('assets/images/event/grid-type-02.jpg') }}" alt="Card image">
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <ul class="rbt-meta">
                                    <li><i class="feather-map-pin"></i>Vancouver</li><br>
                                    <li><span><i class="feather-calendar"></i>11 Jan, 2023</span> <span
                                            style="padding-left: 10px;"><i class="feather-clock"></i>8:00 am - 5:00 pm
                                    </li></span>
                                </ul>
                                <h5 class="rbt-card-title"><a href="event-details.html">Painting Art Contest 2020</a>
                                </h5>

                                <div class="read-more-btn">
                                    <a class="rbt-btn btn-border hover-icon-reverse btn-sm radius-round"
                                        href="event-details.html">
                                        <span class="icon-reverse-wrapper">
                                            <span class="btn-text">Get Ticket</span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Event  -->
                @endfor
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
                            <p class="description color-white-off mt--20">Learning communicate to global world and
                                build a bright future and career development, increase your skill.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="load-more-btn text-start text-lg-end">
                            <a class="rbt-btn btn-border icon-hover radius-round color-white-off" href="blog.html">
                                <span class="btn-text">Voir tous les articles</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Start Card Area -->
                <div class="row g-5">
                    <!-- Start Single Card  -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--30" data-sal-delay="150" data-sal="slide-up"
                        data-sal-duration="800">
                        <div class="rbt-card variation-02 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="blog-details.html">
                                    <img src="{{ asset('assets/images/blog/blog-grid-01.jpg') }}" alt="Card image">
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <h5 class="rbt-card-title"><a href="blog-details.html">Rencontre Adhérant</a></h5>
                                <p class="rbt-card-text">It is a long established fact that a reader.</p>
                                <div class="rbt-card-bottom">
                                    <a class="transparent-button" href="blog-details.html">Lire Plus<i><svg
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



                    <!-- Start Single Card  -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--30" data-sal-delay="150" data-sal="slide-up"
                        data-sal-duration="800">
                        <div class="rbt-card variation-02 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="blog-details.html">
                                    <img src="{{ asset('assets/images/blog/blog-grid-01.jpg') }}" alt="Card image">
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <h5 class="rbt-card-title"><a href="blog-details.html">Meet and Share</a></h5>
                                <p class="rbt-card-text">It is a long established fact that a reader.</p>
                                <div class="rbt-card-bottom">
                                    <a class="transparent-button" href="blog-details.html">Lire Plus<i><svg
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

                    <!-- Start Single Card  -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--30" data-sal-delay="150" data-sal="slide-up"
                        data-sal-duration="800">
                        <div class="rbt-card variation-02 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="blog-details.html">
                                    <img src="{{ asset('assets/images/blog/blog-grid-01.jpg') }}" alt="Card image">
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <h5 class="rbt-card-title"><a href="blog-details.html">Organisation du Gala des 20
                                        ans</a></h5>
                                <p class="rbt-card-text">It is a long established fact that a reader.</p>
                                <div class="rbt-card-bottom">
                                    <a class="transparent-button" href="blog-details.html">Lire Plus<i><svg
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
    @stop
