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
                                <li class="rbt-breadcrumb-item active">Toutes les nouvelles</li>
                            </ul>
                            <!-- End Breadcrumb Area  -->

                            <div class="title-wrapper">
                                <h1 class="title mb--0">All Courses</h1>
                                <a href="#" class="rbt-badge-2">
                                    <div class="image">🎉</div> 50 Courses
                                </a>
                            </div>

                            <p class="description">Tous savoir sur l'actualité de l'African Business Club. </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Banner Content Top  -->

        </div>
    </div>
    <div class="rbt-section-overlayping-top rbt-section-gapBottom">
        <div class="container">
            <div class="row row--30 gy-5">
            <div class="col-lg-4">
                    <aside class="rbt-sidebar-widget-wrapper rbt-gradient-border">

                        <!-- Start Widget Area  -->
                        <div class="rbt-single-widget rbt-widget-search">
                            <div class="inner">
                                <form action="#" class="rbt-search-style-1">
                                    <input type="text" placeholder="Search Courses">
                                    <button class="search-btn"><i class="feather-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- End Widget Area  -->

                        <!-- Start Widget Area  -->
                        <div class="rbt-single-widget rbt-widget-recent">
                            <div class="inner">
                                <h4 class="rbt-widget-title">Recent Post</h4>
                                <ul class="rbt-sidebar-list-wrapper categories-list-check has-show-more-inner-content">
                                    <li class="rbt-check-group">
                                        <input id="cat-list-1" type="checkbox" name="cat-list-1">
                                        <label for="cat-list-1">Art &amp; Humanities <span class="rbt-lable count">15</span></label>
                                    </li>
                                    <li class="rbt-check-group">
                                        <input id="cat-list-2" type="checkbox" name="cat-list-2">
                                        <label for="cat-list-2">Web Design <span class="rbt-lable count">20</span></label>
                                    </li>
                                    <li class="rbt-check-group">
                                        <input id="cat-list-3" type="checkbox" name="cat-list-3">
                                        <label for="cat-list-3">Graphic Design <span class="rbt-lable count">10</span></label>
                                    </li>
                                    <li class="rbt-check-group">
                                        <input id="cat-list-4" type="checkbox" name="cat-list-4">
                                        <label for="cat-list-4">Art &amp; Humanities <span class="rbt-lable count">15</span></label>
                                    </li>
                                    <li class="rbt-check-group">
                                        <input id="cat-list-5" type="checkbox" name="cat-list-5">
                                        <label for="cat-list-5">Technology <span class="rbt-lable count">20</span></label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Widget Area  -->

                        <!-- Start Widget Area  -->
                        <div class="rbt-single-widget rbt-widget-recent">
                            <div class="inner">
                                <h4 class="rbt-widget-title">Popular Post</h4>
                                <ul class="rbt-sidebar-list-wrapper recent-post-list">
                                    <li>
                                        <div class="thumbnail">
                                            <a href="event-details.html">
                                                <img src="assets/images/event/grid-type-01.jpg" alt="Event Images">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h6 class="title"><a href="event-details.html">Elegant Light Box Paper Cut.</a></h6>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-clock"></i>26 Mar, 2025</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumbnail">
                                            <a href="event-details.html">
                                                <img src="assets/images/event/grid-type-06.jpg" alt="Event Images">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h6 class="title"><a href="event-details.html">Most Effective Ways Education.</a></h6>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-clock"></i>26 Mar, 2025</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumbnail">
                                            <a href="event-details.html">
                                                <img src="assets/images/event/grid-type-03.jpg" alt="Event Images">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h6 class="title"><a href="event-details.html">Elegant Light Box Paper Cut.</a></h6>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-clock"></i>26 Jan, 2025</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumbnail">
                                            <a href="event-details.html">
                                                <img src="assets/images/event/grid-type-05.jpg" alt="Event Images">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h6 class="title"><a href="event-details.html">Top 7 Common About Education.</a></h6>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-clock"></i>26 May, 2024</li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Widget Area  -->

                        <!-- Start Widget Area  -->
                        <div class="rbt-single-widget rbt-widget-tag">
                            <div class="inner">
                                <h4 class="rbt-widget-title">Tags</h4>
                                <div class="rbt-sidebar-list-wrapper rbt-tag-list">
                                    <a href="#">Histudy</a>
                                    <a href="#">Training</a>
                                    <a href="#">Courses</a>
                                    <a href="#">Learn</a>
                                    <a href="#">English</a>
                                    <a href="#">Online</a>
                                    <a href="#">Kids</a>
                                    <a href="#">Economic</a>
                                    <a href="#">Math</a>
                                    <a href="#">Marketing</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Widget Area  -->
                    </aside>
                </div>
                <div class="col-lg-8">
                    <!-- Start Card Area -->
                    <div class="row g-5">

                        <!-- Start Single Card  -->
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="rbt-blog-grid rbt-card variation-02 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="blog-details.html">
                                        <img src="assets/images/blog/blog-grid-05.jpg" alt="Card image"> </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h5 class="rbt-card-title"><a href="blog-details.html">The Latest Trend In
                                            Education.</a></h5>

                                    <ul class="blog-meta">
                                        <li><i class="feather-user"></i> admin</li>
                                        <li><i class="feather-clock"></i> August 3, 2023</li>
                                        <li><i class="feather-watch"></i> 1 min read</li>
                                    </ul>
                                    <p class="rbt-card-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised.</p>
                                    <div class="rbt-card-bottom">
                                        <a class="transparent-button" href="blog-details.html">Learn
                                            More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="rbt-blog-grid rbt-card variation-02 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="blog-details.html">
                                        <img src="assets/images/blog/blog-grid-03.jpg" alt="Card image"> </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h5 class="rbt-card-title"><a href="blog-details.html">The Modern Rules Of
                                            Education.</a></h5>
                                    <ul class="blog-meta">
                                        <li><i class="feather-user"></i> admin</li>
                                        <li><i class="feather-clock"></i> August 3, 2023</li>
                                        <li><i class="feather-watch"></i> 1 min read</li>
                                    </ul>
                                    <p class="rbt-card-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised.</p>
                                    <div class="rbt-card-bottom">
                                        <a class="transparent-button" href="blog-details.html">Learn
                                            More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="rbt-blog-grid rbt-card variation-02 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="blog-details.html">
                                        <img src="assets/images/blog/blog-grid-06.jpg" alt="Card image"> </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h5 class="rbt-card-title"><a href="blog-details.html">Why Is Education So
                                            Famous?</a></h5>
                                    <ul class="blog-meta">
                                        <li><i class="feather-user"></i> admin</li>
                                        <li><i class="feather-clock"></i> August 3, 2023</li>
                                        <li><i class="feather-watch"></i> 1 min read</li>
                                    </ul>
                                    <p class="rbt-card-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised.</p>
                                    <div class="rbt-card-bottom">
                                        <a class="transparent-button" href="blog-details.html">Learn
                                            More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="rbt-blog-grid rbt-card variation-02 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="blog-details.html">
                                        <img src="assets/images/blog/blog-grid-04.jpg" alt="Card image"> </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h5 class="rbt-card-title"><a href="blog-details.html">Why Is Education So
                                            Famous?</a></h5>
                                    <ul class="blog-meta">
                                        <li><i class="feather-user"></i> admin</li>
                                        <li><i class="feather-clock"></i> August 3, 2023</li>
                                        <li><i class="feather-watch"></i> 1 min read</li>
                                    </ul>
                                    <p class="rbt-card-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised.</p>
                                    <div class="rbt-card-bottom">
                                        <a class="transparent-button" href="blog-details.html">Learn
                                            More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                    </div>
                    <!-- End Card Area -->

                    <div class="row">
                        <div class="col-lg-12 mt--60">
                            <nav>
                                <ul class="rbt-pagination">
                                    <li><a href="#" aria-label="Previous"><i class="feather-chevron-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li class="active"><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#" aria-label="Next"><i class="feather-chevron-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@stop