@extends('users.layouts.app')
@section('content')
    <!-- Start Banner Area -->
    <div class="rbt-banner-area rbt-banner-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 pb--120 pt--20">
                    <div class="content">
                        <div class="inner">
                            <div class="rbt-new-badge rbt-new-badge-one">
                                <span class="rbt-new-badge-icon">🏆</span> The Leader in Online Learning
                            </div>

                            <h1 class="title">
                                African <br> Business Club.
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
                                        <img src="{{ asset('assets/images/banner/banner1.png') }}" alt="Hero Image">

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
                                        <img src="{{ asset('assets/images/banner/banner3.png') }}" alt="Hero Image">

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
                            <!-- <div class="contact-btn mt--30">
                                                                                                                                                                                                                            <a class="rbt-btn hover-icon-reverse btn-border-gradient radius-round" href="{{ route('about_link') }}">
                                                                                                                                                                                                                                <div class="icon-reverse-wrapper">
                                                                                                                                                                                                                                    <span class="btn-text">Voir Plus</span>
                                                                                                                                                                                                                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                                                                                                                                                                                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                            </a>
                                                                                                                                                                                                                        </div> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Video Area  -->

    <!-- Start Advance Tab  -->
    <div class="rbt-advance-tab-area  bg-color-white" style="margin-top: 8%;">
        <div class="container">
            <!-- <div class="row mb--20">
                                                                                                                                                                                                                <div class="col-lg-12">
                                                                                                                                                                                                                    <div class="section-title text-center">
                                                                                                                                                                                                                        <h2 class="title">C'est quoi L'African Business Club ?</h2>
                                                                                                                                                                                                                        <p class="description mt--20"> Aujourd’hui,
                                                                                                                                                                                                                            notre objectif est de promouvoir et renforcer le développement d’initiatives et d’opportunités en Afrique 🌍. Les valeurs que nous véhiculons sont : le leadership, l’unité et le réseau.
                                                                                                                                                                                                                        L’ABC est une passerelle entre les jeunes désireux d’entreprendre en Afrique, et l’écosystème d’entreprises présentes sur le sol africain. </p>
                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                </div>
                                                                                                                                                                                                            </div> -->
            <div class="row g-5">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12 mt_md--30 mt_sm--30 order-2 order-lg-1">
                    <div class="advance-tab-button advance-tab-button-1">
                        <ul class="nav nav-tabs tab-button-list" id="aboutmyTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a href="#" class="nav-link tab-button active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home" role="tab" aria-controls="home" aria-selected="true">
                                    <div class="tab">
                                        <h4 class="title">ABC Vision.</h4>
                                        <p class="description">Nous avons pour vision :</p>
                                    </div>
                                </a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a href="#" class="nav-link tab-button" id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#profile" role="tab" aria-controls="profile" aria-selected="false">
                                    <div class="tab">
                                        <h4 class="title">ABC Mission.</h4>
                                        <p class="description">Nous avons pour vision :</p>
                                    </div>
                                </a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a href="#" class="nav-link tab-button" id="contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#contact" role="tab" aria-controls="contact"
                                    aria-selected="false">
                                    <div class="tab">
                                        <h4 class="title">ABC Planning.</h4>
                                        <p class="description">Notre planning correspond :</p>
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
                                <img src="{{ asset('assets/images/banner/mission.png') }}" alt="advance-tab-image">
                            </div>

                        </div>
                        <div class="tab-pane fade advance-tab-content-1" id="profile" role="tabpanel"
                            aria-labelledby="profile-tab">
                            <div class="thumbnail">
                                <img src="{{ asset('assets/images/tab/tabs-02.jpg') }}" alt="advance-tab-image">
                            </div>
                        </div>
                        <div class="tab-pane fade advance-tab-content-1" id="contact" role="tabpanel"
                            aria-labelledby="contact-tab">
                            <div class="thumbnail">
                                <img src="{{ asset('assets/images/tab/tabs-01.jpg') }}" alt="advance-tab-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Advance Tab  -->

    @include('users.global.office')


    <!-- Start Brand Area  -->
    <div class="rbt-brand-area bg-color-secondary-alt rbt-section-gap" id="partners">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="section-title text-center mb--40">
                        <span class="small-title w-600">Ils nous font confiance</span>
                    </div>
                    <ul class="brand-list brand-style-3 justify-content-center justify-content-lg-between">
                        <li><a href="#"><img src="{{ asset('assets/images/partners/part1.png') }}"
                                    alt="Brand Image"></a></li>
                        <li><a href="#"><img src="{{ asset('assets/images/partners/part2.png') }}"
                                    alt="Brand Image"></a></li>
                        <li><a href="#"><img src="{{ asset('assets/images/partners/part3.png') }}"
                                    alt="Brand Image"></a></li>
                        <li><a href="#"><img src="{{ asset('assets/images/partners/part4.png') }}"
                                    alt="Brand Image"></a></li>
                        <li><a href="#"><img src="{{ asset('assets/images/partners/part5.png') }}"
                                    alt="Brand Image"></a></li>
                    </ul>
                    <ul class="brand-list brand-style-3 justify-content-center justify-content-lg-between">
                        <li><a href="#"><img src="{{ asset('assets/images/partners/part6.png') }}"
                                    alt="Brand Image"></a></li>
                        <li><a href="#"><img src="{{ asset('assets/images/partners/part7.png') }}"
                                    alt="Brand Image"></a></li>
                        <li><a href="#"><img src="{{ asset('assets/images/partners/part8.png') }}"
                                    alt="Brand Image"></a></li>
                        <li><a href="#"><img src="{{ asset('assets/images/partners/part9.png') }}"
                                    alt="Brand Image"></a></li>
                        <li><a href="#"><img src="{{ asset('assets/images/partners/part10.png') }}"
                                    alt="Brand Image"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Brand Area  -->

    <div class="rbt-team-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row mb--60">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h5 class="title">Ils ont dirigé l'ABC</h5>
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
                            @if ($item->id === 1)
                            
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
                            <li><a href="{{ $item->facebook ? $item->facebook : '#' }}"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{ $item->linkedin ? $item->linkedin : '#' }}"><i
                                        class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="{{ $item->twitter ? $item->twitter : '#' }}"><i class="fab fa-twitter"></i></a>
                            </li>
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
