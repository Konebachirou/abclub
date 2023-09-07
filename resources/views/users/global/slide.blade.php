<div class="rbt-slider-main-wrapper position-relative">
    <!-- Start Banner Area  -->
    <div class="swiper rbt-banner-activation rbt-slider-animation rbt-arrow-between">
        <div class="swiper-wrapper">
            @foreach($slides as $slide )
            <!-- Start Single Banner  -->
            <div class="swiper-slide">
                <div class="rbt-banner-area rbt-banner-6 variation-03 bg_image " style="background-image: url('{{ asset('assets/' . $slide->img) }}')" data-gradient-overlay="5">
                    <div class="wrapper w-100">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-12">
                                    <div class="inner text-center">
                                        <div class="section-title">
                                            <span class="subtitle bg-white-opacity d-inline-block">Bienvenue Sur L'African Business Club</span>
                                        </div>
                                            <h1 class="title w-300">{!!$slide->desc!!}</h1>
                                                <div class="social-share-wrapper mt--70">
                                                    <ul class="social-icon social-default transparent-with-border">
                                                        <li><a href="https://www.facebook.com/Africanbusinessclub">
                                                                <i class="feather-facebook"></i>
                                                            </a>
                                                        </li>
                                                        <li><a href="https://twitter.com/AfricanBC">
                                                            <i class="feather-twitter"></i>
                                                        </a>
                                                        </li>
                                                    <li><a href="https://instagram.com/africanbusinessclub_?igshid=MzRlODBiNWFlZA==">
                                                        <i class="feather-instagram"></i>
                                                    </a>
                                                    </li>
                                                    <li><a href="https://www.linkedin.com/company/african-business-club/">
                                                        <i class="feather-linkedin"></i>
                                                    </a>
                                                    </li>
                                                </ul>
                                                <span class="follow-us-text">Suivre par Facebook, Twitter, Instagram, et
                                                Linkedin</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Banner  -->
            @endforeach
        </div>

        <div class="rbt-swiper-arrow rbt-arrow-left">
            <div class="custom-overfolow">
                <i class="rbt-icon feather-arrow-left"></i>
                <i class="rbt-icon-top feather-arrow-left"></i>
            </div>
        </div>

        <div class="rbt-swiper-arrow rbt-arrow-right">
            <div class="custom-overfolow">
                <i class="rbt-icon feather-arrow-right"></i>
                <i class="rbt-icon-top feather-arrow-right"></i>
            </div>
        </div>

    </div>

    <div class="swiper rbt-swiper-thumb rbtmySwiperThumb">
        <div class="swiper-wrapper">
            @foreach($slides as $slide)
            <div class="swiper-slide">
                <img src="{{asset('assets/'.$slide->img)}}" alt="Banner Images" />
            </div>
            @endforeach
            <!-- <div class="swiper-slide">
                <img src="{{asset('assets/images/banner/Accueil5.png')}}" alt="Banner Images" />
            </div>
            <div class="swiper-slide">
                <img src="{{asset('assets/images/banner/Accueil2.png')}}" alt="Banner Images" />
            </div> -->
        </div>
    </div>
    <!-- End Banner Area  -->
</div>