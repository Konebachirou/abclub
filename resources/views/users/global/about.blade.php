@extends('users.layouts.app')
@section('content')
    <!-- Start Banner Area -->
    <div class="rbt-banner-area rbt-banner-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 pb--120 pt--20">
                    <div class="content">
                        <div class="inner">
                            <!-- br in sabout -->
                            <br>
                            <h1 class="title" style="margin-top: -15%;">
                                African Business Club.
                            </h1>
                            <p class="description">
                                La preuve vivante de l'efficacité d'une initiative volontariste et solidaire menée avec
                                passion, intégrité et compétence.
                            </p>
                            <p><strong>Un message porteur d'espoir pour l'avenir...</strong></p>

                        </div>
                        <div class="banner-card pb--60 mb--50 swiper rbt-dot-bottom-center banner-swiper-active">
                            <div class="swiper-wrapper">

                                <!-- Start Single Card  -->
                                <div class="swiper-slide">
                                    <div class="rbt-card variation-01 rbt-hover">
                                        <img src="{{ asset('assets/images/banner/banner3.png') }}" alt="Hero Image">

                                    </div>
                                </div>
                                <!-- End Single Card  -->

                                <!-- Start Single Card  -->
                                <div class="swiper-slide">
                                    <div class="rbt-card variation-01 rbt-hover">
                                        <img src="{{ asset('assets/images/banner/banner2.png') }}" alt="Hero Image">

                                    </div>
                                </div>
                                <!-- End Single Card  -->

                                <!-- Start Single Card  -->
                                <div class="swiper-slide">
                                    <div class="rbt-card variation-01 rbt-hover">
                                        <img src="{{ asset('assets/images/banner/banner1.png') }}" alt="Hero Image">

                                    </div>
                                </div>
                                <!-- End Single Card  -->



                            </div>
                            <div class="rbt-swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Area -->
    <!-- Start Video Area  -->
    <div class="rbt-video-area bg-color-white " id="career">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="video-popup-wrapper">
                        <img class="w-100 rbt-radius" src="{{ asset('assets/images/others/brand.jpg') }}"
                            alt="Video Images">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Video Area  -->

    <!-- Start Advance Tab  -->
    <div class="rbt-advance-tab-area  bg-color-white" style="margin-top: 8%;" id="vision">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12 mt_md--30 mt_sm--30 order-2 order-lg-1">
                    <div class="advance-tab-button advance-tab-button-1">
                        <ul class="nav nav-tabs tab-button-list" id="aboutmyTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a href="#" class="nav-link tab-button active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home" role="tab" aria-controls="home" aria-selected="true">
                                    <div class="tab">
                                        <h4 class="title">Notre Vision.</h4>
                                        <p class="description">Nous avons pour vision :</p>
                                    </div>
                                </a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a href="#" class="nav-link tab-button" id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#profile" role="tab" aria-controls="profile" aria-selected="false">
                                    <div class="tab">
                                        <h4 class="title">Nos Mission.</h4>
                                        <p class="description">Nous avons pour vision :</p>
                                    </div>
                                </a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a href="#" class="nav-link tab-button" id="contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#contact" role="tab" aria-controls="contact"
                                    aria-selected="false">
                                    <div class="tab">
                                        <h4 class="title">Nos valeurs.</h4>
                                        <p class="description">Nous avons pour Valeur:</p>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12 order-1 order-lg-2">
                    <div class="tab-content">
                        <div class="tab-pane fade advance-tab-content-1 active show" id="home" role="tabpanel"
                            aria-labelledby="home-tab">
                            <div class="thumbnail">
                                <img src="{{ asset('assets/images/banner/vision.png') }}" alt="advance-tab-image">
                            </div>

                        </div>
                        <div class="tab-pane fade advance-tab-content-1" id="profile" role="tabpanel"
                            aria-labelledby="profile-tab">
                            <div class="thumbnail">
                                <img src="{{ asset('assets/images/banner/mission.png') }}" alt="advance-tab-image">
                            </div>
                        </div>
                        <div class="tab-pane fade advance-tab-content-1" id="contact" role="tabpanel"
                            aria-labelledby="contact-tab">
                            <div class="thumbnail">
                                <img src="{{ asset('assets/images/banner/valeur.png') }}" alt="advance-tab-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Advance Tab  -->

    @include('users.global.office')

    @include('users.global.partners')

    <div class="rbt-team-area bg-color-white "style="padding-top: 8%;" id="last">
        <div class="container">
            <div class="row mb--60">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3 class="title">Ils ont dirigé l'ABC</h3>
                        <p class="description mt--10">L’ African Business ayant été créé en 2003, en 20 ans il y a eu
                            plusieurs Présidents,
                            <br>aux profils différents. Revenons sur ces derniers.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row row--15 mt_dec--30">
                <!-- Start Single Team  -->
                @foreach ($lastPresidents as $item)
                    <!-- Start Single Team  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--30">
                        <div class="team">
                            @if ($item->image !== '')
                                <div class="thumbnail"><img src="{{ asset('assets/images/team/' . $item->image) }}"
                                        alt="Blog Images">
                                @else
                                    <div class="thumbnail"><img src="{{ asset('assets/images/team/team-01.jpg') }}"
                                            alt="Blog Images">
                            @endif
                        </div>
                        <div class="content">
                            <h5 class="title">{{ $item->fullName }} </h5>
                            <p class="designation">{{ $item->period }}</p>
                        </div>
                        <ul class="social-icon">
                            @if( $item->facebook != '' )
                            <li><a href="{{ $item->facebook ? $item->facebook : '#' }}"><i
                                class="fab fa-facebook-f"></i></a></li>
                             @endif
                            @if($item->linkedin != '')
                            <li><a href="{{ $item->linkedin ? $item->linkedin : '#' }}"><i
                                class="fab fa-linkedin-in"></i></a></li>
                            @endif
                            @if($item->twitter != '')
                            <li><a href="{{ $item->twitter ? $item->twitter : '#' }}"><i class="fab fa-twitter"></i></a>
                            </li>
                            @endif
                            @if ($item->first_name === 'MAGASSA')
                                <li><span class="rbt-badge-6 ">Fondateur</span></li>
                            @endif
                        </ul>
                    </div>
            </div>
            <!-- End Single Team  -->
            @endforeach
            <!-- End Single Team  -->
        </div>
    </div>
    </div>
@stop
