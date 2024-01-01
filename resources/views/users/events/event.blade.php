@extends('users.layouts.app')
@section('titre', 'Events - African Business Club')

@section('content')
    <div class="rbt-page-banner-wrapper">
        <!-- Start Banner BG Image  -->
        <div class="rbt-banner-image"></div>
        <!-- End Banner BG Image  -->
        <div class="rbt-banner-content">
            <!-- Start Banner Content Top  -->
            <div class="rbt-banner-content-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Start Breadcrumb Area  -->
                            <ul class="page-list">
                                <li class="rbt-breadcrumb-item"><a href="index.html">Accueil</a></li>
                                <li>
                                    <div class="icon-right"><i class="feather-chevron-right"></i></div>
                                </li>
                                <li class="rbt-breadcrumb-item active">Tous les événements</li>
                            </ul>
                            <!-- End Breadcrumb Area  -->

                            <div class=" title-wrapper">
                                <h1 class="title mb--0">Tous les événements</h1>
                            </div>
                            <p class="description">Event that help beginner designers become true unicorns. </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Banner Content Top  -->
        </div>
        <!-- End Banner Content Top  -->
        <!-- Start Course Top  -->
        <div class="rbt-course-top-wrapper mt--40">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-12 mt--60">
                        <ul class="rbt-portfolio-filter filter-tab-button justify-content-start nav nav-tabs" id="rbt-myTab"
                            role="tablist">
                            @if ($events->count() != 0)
                                <li class="nav-item" role="presentation">
                                    <button class="active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all"
                                        type="button" role="tab" aria-controls="all" aria-selected="true"><span
                                            class="filter-text">Tous les évènements</span> <span
                                            class="course-number">{{ $events->count() }}</span></button>
                                </li>
                            @endif
                            @if ($reseaux->count() != 0)
                                <li class="nav-item" role="presentation">
                                    <button id="featured-tab" data-bs-toggle="tab" data-bs-target="#featured" type="button"
                                        role="tab" aria-controls="featured" aria-selected="false"><span
                                            class="filter-text">Events Réseau</span> <span
                                            class="course-number">{{ $reseaux->count() }}</span></button>
                                </li>
                            @endif
                            @if ($amids->count() != 0)
                                <li class="nav-item" role="presentation">
                                    <button id="popular-tab" data-bs-toggle="tab" data-bs-target="#popular" type="button"
                                        role="tab" aria-controls="popular" aria-selected="false"><span
                                            class="filter-text">Events AMID</span> <span
                                            class="course-number">{{ $amids->count() }}</span></button>
                                </li>
                            @endif
                            @if ($nmss->count() != 0)
                                <li class="nav-item" role="presentation">
                                    <button id="trending-tab" data-bs-toggle="tab" data-bs-target="#trending" type="button"
                                        role="tab" aria-controls="trending" aria-selected="false"><span
                                            class="filter-text">Events Meet & Share</span> <span
                                            class="course-number">{{ $nmss->count() }}</span></button>
                                </li>
                            @endif
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Course Top  -->
    </div>
    </div>

    <div class="rbt-section-overlayping-top rbt-section-gapBottom">
        <div class="container">
            <!-- Start Card Area -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content" id="rbt-myTabContent">
                        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                            <div class="row g-5">
                                @foreach ($events as $event)
                                    <!-- Start Single Event  -->
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="rbt-card card-list-2 event-list-card variation-01 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('event_details_link', $event->title) }}">
                                                    @if ($event->illustration != '')
                                                        <img src="{{ $event->illustrationUrl() }}" alt="Card image">
                                                    @else
                                                        <img src="{{ asset('assets/images/course/course-01.jpg') }}"
                                                            alt="Card image">
                                                    @endif

                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-map-pin"></i>{!! $event->lieu !!}</li><br>
                                                    <li><span><i
                                                                class="feather-calendar"></i>{{ date('d M \, Y', strtotime($event->start_date)) }}</span>
                                                        <span style="padding-left: 10px;"><i
                                                                class="feather-clock"></i>{{ date('H:i ', strtotime($event->start_times)) }}
                                                            - {{ date('H:i ', strtotime($event->end_times)) }}
                                                    </li></span>
                                                </ul>
                                                <h4 class="rbt-card-title"><a
                                                        href="{{ route('event_details_link', $event->title) }}">{!! $event->title !!}</a>
                                                </h4>
                                                <div class="read-more-btn">
                                                    <a class="rbt-btn btn-border hover-icon-reverse btn-sm radius-round"
                                                        href="{{ route('event_details_link', $event->title) }}">
                                                        <span class="icon-reverse-wrapper">
                                                            <span class="btn-text">Voir Plus</span>
                                                            <span class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span>
                                                            <span class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span>
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
                        <div class="tab-pane fade" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                            <div class="row g-5">
                                @foreach ($reseaux as $reseau)
                                    <!-- Start Single Event  -->
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="rbt-card card-list-2 event-list-card variation-01 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('event_details_link', $reseau->title) }}">
                                                    <img src="{{ $reseau->illustrationUrl() }}"
                                                        alt="{{ $reseau->title }}">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-map-pin"></i>{!! $reseau->lieu !!}</li><br>
                                                    <li><span><i
                                                                class="feather-calendar"></i>{{ date('d M \, Y', strtotime($reseau->start_date)) }}</span>
                                                        <span style="padding-left: 10px;"><i
                                                                class="feather-clock"></i>{{ date('H:i ', strtotime($event->start_times)) }}
                                                            - {{ date('H:i ', strtotime($event->end_times)) }}
                                                    </li>
                                                    </span>
                                                </ul>
                                                <h4 class="rbt-card-title"><a
                                                        href="{{ route('event_details_link', $reseau->title) }}">{{ $reseau->title }}</a>
                                                </h4>
                                                <div class="read-more-btn">
                                                    <a class="rbt-btn btn-border hover-icon-reverse btn-sm radius-round"
                                                        href="{{ route('event_details_link', $event->title) }}">
                                                        <span class="icon-reverse-wrapper">
                                                            <span class="btn-text">Get Ticket</span>
                                                            <span class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span>
                                                            <span class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span>
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
                        <div class="tab-pane fade" id="popular" role="tabpanel" aria-labelledby="popular-tab">
                            <div class="row g-5">
                                @foreach ($amids as $amid)
                                    <!-- Start Single Event  -->
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="rbt-card card-list-2 event-list-card variation-01 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('event_details_link', $amid->title) }}">
                                                    <img src="{{ $amid->illustrationUrl() }}" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-map-pin"></i>{!! $amid->lieu !!}</li><br>
                                                    <li><span><i
                                                                class="feather-calendar"></i>{{ date('d M \, Y', strtotime($amid->start_date)) }}</span>
                                                        <span style="padding-left: 10px;"><i
                                                                class="feather-clock"></i>{{ date('H:i ', strtotime($event->start_times)) }}
                                                            - {{ date('H:i ', strtotime($event->end_times)) }}
                                                    </li></span>
                                                </ul>
                                                <h4 class="rbt-card-title"><a
                                                        href="{{ route('event_details_link', $amid->title) }}">{{ $amid->title }}</a>
                                                </h4>
                                                <div class="read-more-btn">
                                                    <a class="rbt-btn btn-border hover-icon-reverse btn-sm radius-round"
                                                        href="{{ route('event_details_link', $event->title) }}">
                                                        <span class="icon-reverse-wrapper">
                                                            <span class="btn-text">Get Ticket</span>
                                                            <span class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span>
                                                            <span class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span>
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
                        <div class="tab-pane fade" id="trending" role="tabpanel" aria-labelledby="trending-tab">
                            <div class="row g-5">
                                @foreach ($nmss as $nms)
                                    <!-- Start Single Event  -->
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="rbt-card card-list-2 event-list-card variation-01 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('event_details_link', $nms->title) }}">
                                                    <img src="{{ $nms->illustrationUrl() }}" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-map-pin"></i>{!! $nms->lieu !!}</li><br>
                                                    <li><span><i
                                                                class="feather-calendar"></i>{{ date('d M \, Y', strtotime($nms->start_date)) }}</span>
                                                        <span style="padding-left: 10px;"><i
                                                                class="feather-clock"></i>{{ date('H:i ', strtotime($event->start_times)) }}
                                                            - {{ date('H:i ', strtotime($event->end_times)) }}
                                                    </li></span>
                                                </ul>
                                                <h4 class="rbt-card-title"><a
                                                        href="{{ route('event_details_link', $nms->title) }}">{{ $nms->title }}</a>
                                                </h4>
                                                <div class="read-more-btn">
                                                    <a class="rbt-btn btn-border hover-icon-reverse btn-sm radius-round"
                                                        href="{{ route('event_details_link', $event->title) }}">
                                                        <span class="icon-reverse-wrapper">
                                                            <span class="btn-text">Get Ticket</span>
                                                            <span class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span>
                                                            <span class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span>
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
                </div>
            </div>
        </div>
    </div>
@stop
