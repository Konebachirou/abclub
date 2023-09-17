@extends('users.layouts.app')
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
                                <li class="rbt-breadcrumb-item active">Actualités</li>
                            </ul>
                            <!-- End Breadcrumb Area  -->

                            <div class=" title-wrapper">
                                <h1 class="title mb--0">ABC Actualités</h1>
                                <a href="#" class="rbt-badge-2">
                                    <div class="image">🎉</div> 99 news
                                </a>
                            </div>
                            <p class="description">Tous savoir sur l'actualité de l'African Business Club. </p>
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
                            <li class="nav-item" role="presentation">
                                <button class="active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all"
                                    type="button" role="tab" aria-controls="all" aria-selected="true"><span
                                        class="filter-text">Toutes les News</span> <span
                                        class="course-number">{{ $reports->count() }}</span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button id="featured-tab" data-bs-toggle="tab" data-bs-target="#featured" type="button"
                                    role="tab" aria-controls="featured" aria-selected="false"><span
                                        class="filter-text">News Réseau</span> <span
                                        class="course-number">{{ $reseaux->count() }}</span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button id="popular-tab" data-bs-toggle="tab" data-bs-target="#popular" type="button"
                                    role="tab" aria-controls="popular" aria-selected="false"><span
                                        class="filter-text">News AMID</span> <span
                                        class="course-number">{{ $amids->count() }}</span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button id="trending-tab" data-bs-toggle="tab" data-bs-target="#trending" type="button"
                                    role="tab" aria-controls="trending" aria-selected="false"><span
                                        class="filter-text">News Meet & Share</span> <span
                                        class="course-number">{{ $nmss->count() }}</span></button>
                            </li>
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
                                @foreach ($reports as $report)
                                    <!-- Start Single Card  -->
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="rbt-blog-grid rbt-card variation-02 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('news_details_link', $report->title) }}">
                                                    <img src="assets/images/blog/blog-grid-04.jpg" alt="Card image"> </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h5 class="rbt-card-title"><a
                                                        href="{{ route('news_details_link', $report->title) }}">{{$report->title}}</a></h5>
                                                <ul class="blog-meta">
                                                    <li><i class="feather-user"></i> admin</li>
                                                    <li><i class="feather-clock"></i> August 3, 2023</li>
                                                    <li><i class="feather-watch"></i> 1 min read</li>
                                                </ul>
                                                <p class="rbt-card-text">There are many variations of passages of Lorem
                                                    Ipsum available, but the majority have suffered alteration in some form,
                                                    by injected humour, or randomised.</p>
                                                <div class="rbt-card-bottom">
                                                    <a class="transparent-button"
                                                        href="{{ route('news_details_link', $report->title) }}">Learn
                                                        More<i><svg width="17" height="12"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                                    <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                                                    <path stroke-linecap="square"
                                                                        d="M.663 5.572h14.594" />
                                                                </g>
                                                            </svg></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->
                                @endforeach

                            </div>
                        </div>
                        <div class="tab-pane fade" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                            <div class="row g-5">
                                @foreach ($reseaux as $reseau)
                                    <!-- Start Single Card  -->
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="rbt-blog-grid rbt-card variation-02 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('news_details_link', $reseau->title) }}">
                                                    <img src="assets/images/blog/blog-grid-04.jpg" alt="Card image"> </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h5 class="rbt-card-title"><a
                                                        href="{{ route('news_details_link', $reseau->title) }}">{{$reseau->title}}</a></h5>
                                                <ul class="blog-meta">
                                                    <li><i class="feather-user"></i> admin</li>
                                                    <li><i class="feather-clock"></i> August 3, 2023</li>
                                                    <li><i class="feather-watch"></i> 1 min read</li>
                                                </ul>
                                                <p class="rbt-card-text">There are many variations of passages of Lorem
                                                    Ipsum available, but the majority have suffered alteration in some form,
                                                    by injected humour, or randomised.</p>
                                                <div class="rbt-card-bottom">
                                                    <a class="transparent-button"
                                                        href="{{ route('news_details_link', $reseau->title) }}">Learn
                                                        More<i><svg width="17" height="12"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                                    <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                                                    <path stroke-linecap="square"
                                                                        d="M.663 5.572h14.594" />
                                                                </g>
                                                            </svg></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="popular" role="tabpanel" aria-labelledby="popular-tab">
                            <div class="row g-5">
                                @foreach ($amids as $amid)
                                    <!-- Start Single Card  -->
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="rbt-blog-grid rbt-card variation-02 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('news_details_link', $amid->title) }}">
                                                    <img src="assets/images/blog/blog-grid-04.jpg" alt="Card image"> </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h5 class="rbt-card-title elipses2"><a
                                                        href="{{ route('news_details_link', $amid->title) }}">{{$amid->title}}</a></h5>
                                                <ul class="blog-meta">
                                                    <li><i class="feather-user"></i> admin</li>
                                                    <li><i class="feather-clock"></i> August 3, 2023</li>
                                                    <li><i class="feather-watch"></i> 1 min read</li>
                                                </ul>
                                                <p class="rbt-card-text">There are many variations of passages of Lorem
                                                    Ipsum available, but the majority have suffered alteration in some form,
                                                    by injected humour, or randomised.</p>
                                                <div class="rbt-card-bottom">
                                                    <a class="transparent-button"
                                                        href="{{ route('news_details_link', $amid->title) }}">Learn
                                                        More<i><svg width="17" height="12"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                                    <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                                                    <path stroke-linecap="square"
                                                                        d="M.663 5.572h14.594" />
                                                                </g>
                                                            </svg></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->
                                @endforeach

                            </div>
                        </div>
                        <div class="tab-pane fade" id="trending" role="tabpanel" aria-labelledby="trending-tab">
                            <div class="row g-5">
                                @foreach ($nmss as $nms)
                                    <!-- Start Single Card  -->
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="rbt-blog-grid rbt-card variation-02 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="{{ route('news_details_link', $nms->title) }}">
                                                    <img src="assets/images/blog/blog-grid-04.jpg" alt="Card image"> </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <h5 class="rbt-card-title elipses2"><a
                                                        href="{{ route('news_details_link', $nms->title) }}">{{$nms->title}}</a></h5>
                                                <ul class="blog-meta">
                                                    <li><i class="feather-user"></i> admin</li>
                                                    <li><i class="feather-clock"></i> August 3, 2023</li>
                                                    <li><i class="feather-watch"></i> 1 min read</li>
                                                </ul>
                                                <p class="rbt-card-text">There are many variations of passages of Lorem
                                                    Ipsum available, but the majority have suffered alteration in some form,
                                                    by injected humour, or randomised.</p>
                                                <div class="rbt-card-bottom">
                                                    <a class="transparent-button"
                                                        href="{{ route('news_details_link', $nms->title) }}">Learn
                                                        More<i><svg width="17" height="12"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                                    <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                                                    <path stroke-linecap="square"
                                                                        d="M.663 5.572h14.594" />
                                                                </g>
                                                            </svg></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
