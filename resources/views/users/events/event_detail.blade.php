@extends('users.layouts.app')
@section('content')
    <!-- Start breadcrumb Area -->
    <div class="rbt-breadcrumb-default rbt-breadcrumb-style-3">
        <!-- <div class="breadcrumb-inner">
                                    <img src="{{ asset('assets/images/bg/bg-image-10.jpg') }}" alt="Education Images">
                                </div> -->
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="content">
                        <div class="content text-start">
                            <!-- <ul class="page-list">
                                                        <li class="rbt-breadcrumb-item"><a href="{{ route('home_link') }}">Home</a></li>
                                                        <li>
                                                            <div class="icon-right"><i class="feather-chevron-right">{{ $event->title }}</i></div>
                                                        </li>
                                                        <li class="rbt-breadcrumb-item active"></li>
                                                    </ul> -->
                            <h2 class="title mb--2">{!! $event->title !!}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->

    <div class="rbt-course-details-area ">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-8">
                    <div class="course-details-content" style="margin-top: -12%;">
                        <div class="rbt-feature-box rbt-shadow-box thuumbnail">
                            @if ($event->illustration != '')
                                <img class="w-100" src="{{ $event->illustrationUrl() }}" alt="{{ $event->title }}">
                            @else
                                <img class="w-100" src="{{ asset('assets/images/course/course-01.jpg') }}"
                                    alt="Card image">
                            @endif
                        </div>

                        <!-- Start Course Feature Box  -->
                        <div class="rbt-feature-box rbt-shadow-box mt--40">
                            <div class="row g-5">
                                <div class="col-lg-12">
                                    <div class="section-title">
                                        <h4 class="title mb--0">Contenu de l'événement</h4>
                                    </div>
                                </div>
                                <!-- Start Feture Box  -->
                                <div>
                                    <p>{!! $event->description !!}</p>
                                </div>
                                <!-- End Feture Box  -->
                            </div>
                        </div>
                        <!-- End Course Feature Box  -->
                        @if ($event->conferenciers->count() !== 0)
                            <!-- Start Intructor Area  -->
                            <div class="rbt-participants-area mt--60">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section-title text-start mb--20">
                                            <!-- <span class="subtitle bg-secondary">Conférencier(ère)</span> -->
                                            <h2 class="title">Conférenciers(ères)</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-5">
                                    @foreach ($event->conferenciers as $conferencier)
                                        <!-- Start Single Team  -->
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="rbt-team team-style-default style-two rbt-hover">
                                                <div class="inner">
                                                    <div class="thumbnail"><img src="{{ $conferencier->photoUrl() }}"
                                                            alt="{{ $conferencier->full_name }}"></div>
                                                    <div class="content">
                                                        <h2 class="title">{{ $conferencier->full_name }}</h2>
                                                        <h6 class="subtitle theme-gradient">{{ $conferencier->job }}</h6>
                                                        <!-- <span class="team-form">
                                                                                            <i class="feather-map-pin"></i>
                                                                                            <span class="location">CO Miego, AD,USA</span>
                                                                                        </span>
                                                                                        <p class="description">Yes, I am a Depertment Teacher. I have a passion for
                                                                                            learning system.</p> -->

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Team  -->
                                    @endforeach
                                </div>
                            </div>
                            <!-- End Intructor Area  -->
                        @endif
                    </div>

                </div>

                <div class="col-lg-4 mt_md--60 mt_sm--60" style="margin-top: 28%;">
                    <div class="course-sidebar rbt-gradient-border sticky-top rbt-shadow-box course-sidebar-top">
                        <div class="inner">

                            <!-- Start Viedo Wrapper  -->
                            <!-- <a class="video-popup-with-text video-popup-wrapper text-center popup-video sidebar-video-hidden mb--15" href="https://www.youtube.com/watch?v=nA1Aqp0sPQo">
                                                                        <div class="video-content">
                                                                            <img class="w-100 rbt-radius" src="{{ asset('assets/images/others/video-01.jpg') }}" alt="Video Images">
                                                                            <div class="position-to-top">
                                                                                <span class="rbt-btn rounded-player-2 with-animation">
                                                                                    <span class="play-icon"></span>
                                                                                </span>
                                                                            </div>
                                                                            <span class="play-view-text d-block color-white"><i class="feather-eye"></i> Preview this course</span>
                                                                        </div>
                                                                    </a> -->
                            <!-- End Viedo Wrapper  -->

                            <div class="content pt--30">
                                @if (!$event->is_free)
                                    <div class="add-to-card-button mb--15">
                                        <a class="rbt-btn btn-gradient icon-hover w-100 d-block text-center" href="#">
                                            <span class="btn-text">Get Ticket</span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </a>
                                    </div>
                                @endif
                                <!-- <div class="buy-now-btn">
                                                                            <a class="rbt-btn btn-border icon-hover w-100 d-block text-center" href="#">
                                                                                <span class="btn-text">Book Now</span>
                                                                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                                            </a>
                                                                        </div> -->

                                <div class="rbt-widget-details has-show-more">
                                    <ul class="has-show-more-inner-content rbt-course-details-list-wrapper">
                                        <li><span>Date</span><span class="rbt-feature-value rbt-badge-5">
                                                {{ date('d M \, Y', strtotime($event->start_date)) }}</span>
                                        </li>
                                        <li><span>Heure</span><span
                                                class="rbt-feature-value rbt-badge-5">{{ date('H:i ', strtotime($event->start_times)) }}
                                                - {{ date('H:i ', strtotime($event->end_times)) }}
                                            </span></li>
                                        <!-- <li><span>End Date</span><span class="rbt-feature-value rbt-badge-5">{{ $event->description }}25 Jan, 2024</span></li> -->
                                        <li><span>Nombre de Place</span><span
                                                class="rbt-feature-value rbt-badge-5">{{ $event->Number_of_place }}</span>
                                        </li>
                                        <li><span>Adresse</span><span
                                                class="rbt-feature-value rbt-badge-5">{!! $event->lieu !!}</span></li>
                                        <!-- <li><span>Certificate</span><span class="rbt-feature-value rbt-badge-5">Yes</span></li> -->
                                    </ul>
                                </div>

                                <div class="social-share-wrapper  text-center">
                                    <!-- <div class="rbt-post-share d-flex align-items-center justify-content-center">
                                                                                <ul class="social-icon social-default transparent-with-border justify-content-center">
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
                                                                                    <li><a href="https://www.linkdin.com/">
                                                                                            <i class="feather-linkedin"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div> -->
                                    <hr class="mt--10">
                                    <div class="contact-with-us text-center">
                                        <p>Pour plus d'informations</p>
                                        <p class="rbt-badge-2 mt--10 justify-content-center w-100"><i
                                                class="feather-mail mr--5"></i> Email: <a
                                                href="mailto:contact@abclub-paris.com"><strong>contact@abclub-paris.com</strong></a>
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



@stop
