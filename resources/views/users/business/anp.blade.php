@extends('users.layouts.app')
@section('titre', 'Entrepreneuriat - African Business Club')
@section('content')
    <!-- Start Banner Area -->
    <div class="rbt-banner-area rbt-banner-1 variation-2 height-450"
        style="background-image: url(../assets/images/bg/bg3.png) !important;">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-7">
                    <div class="content">
                        <div class="inner">
                            <h3 class="">
                                <span class="header-caption">
                                    <span class="cd-headline clip is-full-width">
                                        <span class="cd-words-wrapper">
                                            <b class="is-visible ">AFRICAN NEXT POSITION</b>
                                            <b class="is-hidden theme-gradient">AFRICAN NEXT POSITION</b>
                                        </span>
                                    </span>
                                </span>
                            </h3>
                            <h3 class="color-white text-center" style="font-size: 30px;">Le forum des jeunes diplomés et des
                                cadres juniors</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="content">
                        <div class="banner-card pb--60 swiper rbt-dot-bottom-center banner-swiper-active">
                            <div class="swiper-wrapper">
                                <img src="{{ asset('assets/images/bg/anp.png') }}" alt="Card image">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Banner Area -->
    <div class="rbt-counterup-area bg-color-extra2" style="margin-top: 2%;">
        <div class="conter-style-2">
            <div class="container">
                <div class="row g-5 align-items-center">

                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="row row--30">
                            <!-- Start Single Counter  -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="rbt-counterup rbt-hover-03">
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/icons/counter-01.png') }}" alt="Icons Images">
                                        </div>
                                        <div class="content">
                                            <h3 class="counter"><span class="odometer" data-count="500">00</span>
                                            </h3>
                                            <span class="subtitle">Etudiant</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Counter  -->

                            <!-- Start Single Counter  -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt--60">
                                <div class="rbt-counterup rbt-hover-03">
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/icons/counter-02.png') }}" alt="Icons Images">
                                        </div>
                                        <div class="content">
                                            <h3 class="counter"><span class="odometer" data-count="800">00</span>
                                            </h3>
                                            <span class="subtitle">Professionnels</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Counter  -->

                            <!-- Start Single Counter  -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt_mobile--40">
                                <div class="rbt-counterup rbt-hover-03 transform-sm-none"
                                    data-parallax='{"x": 0, "y": -60}'>
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/icons/counter-03.png') }}" alt="Icons Images">
                                        </div>
                                        <div class="content">
                                            <h3 class="counter"><span class="odometer" data-count="1000">00</span>
                                            </h3>
                                            <span class="subtitle">Participant</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Counter  -->

                            <!-- Start Single Counter  -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt--60 mt_mobile--40">
                                <div class="rbt-counterup rbt-hover-03 transform-sm-none" data-parallax='{"x": 0, "y": 60}'>
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/icons/counter-04.png') }}" alt="Icons Images">
                                        </div>
                                        <div class="content">
                                            <h3 class="counter"><span class="odometer" data-count="100">00</span>
                                            </h3>
                                            <span class="subtitle">Entreprises</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Counter  -->
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="inner pl--50 pl_sm--0 pl_md--0">
                            <div class="section-title text-start">
                                <!-- <span class="subtitle bg-pink-opacity">Why Choose Us</span> -->
                                <h2 class="title">African Next Position</h2>
                                <p class="description has-medium-font-size mt--20 mb--0">Une plateforme d’excellence où des
                                    entreprises implantée en Afrique à la recherche de talents qualifiés viennent rencontrer
                                    des professionnels en quête d'opportunités de carrière sur le continent.</p>
                            </div>

                            <div class="rbt-feature-wrapper mt--30">

                                <div class="rbt-feature feature-style-1 align-items-center">
                                    <div class="icon bg-primary-opacity">
                                        <i class="feather-heart"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h6 class="feature-title">Identifier les aspirations des étudiants et jeunes cadres
                                            souhaitant travailler en Afrique.</h6>
                                    </div>
                                </div>

                                <div class="rbt-feature feature-style-1 align-items-center">
                                    <div class="icon bg-secondary-opacity">
                                        <i class="feather-book"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h6 class="feature-title">Mettre en relation des candidats à fort potentiel avec des
                                            entreprises innovatrices.</h6>
                                    </div>
                                </div>

                                <div class="rbt-feature feature-style-1 align-items-center">
                                    <div class="icon bg-pink-opacity">
                                        <i class="feather-aperture"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h6 class="feature-title">Adopter une stratégie efficace pour favoriser le
                                            recrutement de jeunes talents en Afrique.</h6>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Card Style -->
    <div class="rbt-rbt-card-area  bg-color-white" style="margin-top: 5%;">
        <div class="container">
            <div class="row row--15 align-items-center mb--30">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2 class="title">conférences & ateliers  à venir</h2>
                    </div>
                </div>
            </div>
            <!-- Start Card Area -->
            <div class="row row--15">
                @foreach ($conferences as $conference)
                    <!-- Start Single Card -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--30" data-sal-delay="150" data-sal="slide-up"
                        data-sal-duration="800">
                        <div class="rbt-card variation-01 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="{{ route('event_details_link', $conference->title) }}">
                                    <img src="{{ $conference->illustrationUrl() }}" alt="{{ $conference->title }}">
                                    <div class="rbt-badge-3 bg-white">
                                        <span>{{ date('d M ', strtotime($conference->start_date)) }}</span>
                                        <span>{{ date('d M ', strtotime($conference->end_date)) }}</span>
                                    </div>
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <h4 class="rbt-card-title"><a
                                        href="{{ route('event_details_link', $conference->title) }}">{{ $conference->title }}</a>
                                </h4>

                                <ul class="rbt-meta">
                                    <li><i class="feather-map-pin"></i>{!! $conference->lieu !!}</li>
                                    <!-- <li><i class="feather-users"></i>50 Students</li> -->
                                </ul>

                                <p class="rbt-card-text">{!! Str::limit($conference->description, 120) !!}</p>
                                <div class="rbt-card-bottom">
                                    <a class="rbt-btn-link"
                                        href="{{ route('event_details_link', $conference->title) }}">Voir Plus<i
                                            class="feather-arrow-right"></i></a>
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
    <!-- End Card Style -->

    <!-- Start Gallery Area  -->
    <div class="rbt-gallery-area" style="margin-top: 5%;">
        <div class="row row--15 align-items-center mb--30">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2 class="title">Nos Partenaires</h2>
                </div>
            </div>
        </div>
        <div class="row g-0 parent-gallery-container">
            @foreach ($partners as $partner)
                <a href="{{ $partner->photoUrl }}" class="child-gallery-single col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="rbt-gallery">
                        <img class="w-100" src="{{ $partner->photoUrl }}" alt="{{ $partner->name }}">
                    </div>
                </a>
            @endforeach

        </div>

    </div>
    <!-- End Gallery Area  -->
    {{-- <livewire:component.amid-partner-component /> --}}
@stop
