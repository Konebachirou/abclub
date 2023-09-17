@extends('users.layouts.app')
@section('content')

    <!-- Start breadcrumb Area -->
    <div class="rbt-breadcrumb-default ptb--100 ptb_md--50 ptb_sm--30 bg-gradient-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="title">Nos Actions</h2>
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item"><a href="{{ route('home_link') }}">Accueil</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">Nos Actions</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->

    @foreach ($actions as $action)
        @if($loop->index  % 2 === 0)
            <!-- Start Button Area  -->
            <div class="rbt-video-area bg-color-white" style="margin-bottom: 7%;">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 order-2 order-lg-1">
                            <div class="video-popup-wrapper">
                                <a  href="{{ route('news_details_link', $action->title) }}">
                                    <img class="w-100 rbt-radius" src="assets/images/others/video-01.jpg" alt="Video Images">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2">
                            <div class="inner pr--50 pr_md--0 pr_sm--0">
                                <div class="section-title text-start">
                                    <!-- <span class="subtitle bg-primary-opacity">How We Work</span> -->
                                    <a  href="{{ route('news_details_link', $action->title) }}">
                                        <h3 class="title elipses2" >{{$action->title}}</h3>
                                    </a>
                                    <p class="description elipses2 mt--30">{{$action->description}}</p>
                                    <div class="read-more-btn">
                                        <a class="rbt-moderbt-btn" href="{{ route('news_details_link', $action->title) }}">
                                            <span class="moderbt-btn-text">Lire Plus</span>
                                            <i class="feather-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Button Area  -->
        @else
             <!-- Start Button Area  -->
             <div class="rbt-video-area bg-color-white" style="margin-bottom: 7%;">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 order-2 order-lg-1">
                            <div class="inner pr--50 pr_md--0 pr_sm--0">
                                <div class="section-title text-start">
                                    <!-- <span class="subtitle bg-primary-opacity">How We Work</span> -->
                                    <a  href="{{ route('news_details_link', $action->title) }}">
                                        <h2 class="title elipses2">{{$action->title}}</h2>
                                    </a>
                                    <p class="description elipses4 mt--30">{{$action->description}}</p>
                                    <div class="read-more-btn">
                                        <a class="rbt-moderbt-btn" href="{{ route('news_details_link', $action->title) }}">
                                            <span class="moderbt-btn-text">Lire Plus</span>
                                            <i class="feather-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2">
                            <div class="video-popup-wrapper">
                                <a  href="{{ route('news_details_link', $action->title) }}">
                                    <img class="w-100 rbt-radius" src="assets/images/others/video-01.jpg" alt="Video Images">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Button Area  -->
        @endif
    @endforeach
@stop
