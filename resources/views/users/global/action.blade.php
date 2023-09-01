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
                                <li class="rbt-breadcrumb-item"><a href="index.html">Home</a></li>
                                <li>
                                    <div class="icon-right"><i class="feather-chevron-right"></i></div>
                                </li>
                                <li class="rbt-breadcrumb-item active">Nos Actions</li>
                            </ul>
                            <!-- End Breadcrumb Area  -->

                            <div class=" title-wrapper">
                                <h1 class="title mb--0">Nos Actions</h1>
                            </div>

                            <p class="description">Courses that help beginner designers become true unicorns. </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Banner Content Top  -->
        </div>
    </div>

    <div class="rbt-section-overlayping-top rbt-section-gapBottom">
        <div class="container">
            <!-- Start Card Area -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="rbt-course-grid-column active-list-view">
                        @for($i=0; $i < 5 ; $i++)
                         <!-- Start Single Course  -->
                        <div class="course-grid-3">
                            <div class="rbt-card variation-01 rbt-hover card-list-2">
                                <div class="rbt-card-img">
                                    <a href="course-details.html">
                                        <img src="assets/images/course/language-academy-01.jpg" alt="Card image">
                                        <!-- <div class="rbt-badge-1 bg-white">
                                            <span>-40%</span>
                                            <span>Off</span>
                                        </div> -->
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h3 class="rbt-card-title"><a href="course-details.html">React Front To
                                            Back</a>
                                    </h3>

                                    <ul class="rbt-meta">
                                        <li><i class="feather-calendar"></i>11 Jan, 2023</li>
                                        <li><i class="feather-map-pin"></i>IAC</li>
                                    </ul>

                                    <p class="rbt-card-text">It is a long established fact that a reader will be
                                        distracted. It is a long established fact that a reader will be
                                        distracted. It is a long established fact that a reader will be
                                        distracted. It is a long established fact that a reader will be
                                        distracted.It is a long established fact that a reader will be
                                        distracted.</p>
                                    <div class="rbt-card-bottom">
                                        <div class="rbt-price">
                                            <!-- <span class="current-price">$60</span>
                                            <span class="off-price">$120</span> -->
                                        </div>
                                        <a class="rbt-btn-link" href="course-details.html">Learn
                                            More<i class="feather-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Course  -->
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop