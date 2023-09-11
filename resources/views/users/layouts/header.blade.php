<!-- Start Header Area -->
<header class="rbt-header rbt-header-4">
        <div class="rbt-sticky-placeholder"></div>
        <div class="rbt-header-wrapper header-space-betwween bg-color-white header-sticky">
            <div class="container-fluid">
                <div class="mainbar-row rbt-navigation-start align-items-center">
                    <div class="header-left">
                        <div class="logo">
                            <a href="{{ route('home_link') }}">
                                <img src="{{asset('assets/images/logo/logo1.png')}}" alt="Education Logo Images">
                            </a>
                        </div>
                    </div>
                    <div class="rbt-main-navigation d-none d-xl-block">
                        <nav class="mainmenu-nav">
                            <ul class="mainmenu">
                                <li class=" has-menu-child-item position-static"><a href="{{ route('home_link') }}">Accueil </a></li>
                                <li class=" has-menu-child-item position-static"><a href="{{ route('about_link') }}">L'association </a></li>
                                <li class=" has-menu-child-item position-static"><a href="{{ route('action_link') }}">Nos Actions </a></li>
                                <li class=" has-menu-child-item position-static"><a href="{{ route('news_link') }}">News </a></li>
                                <li class=" has-menu-child-item position-static"><a href="{{ route('event_link') }}">Events </a></li>

                                <!-- <li class="has-dropdown has-menu-child-item">
                                    <a href="#">Pôles
                                        <i class="feather-chevron-down"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li class="has-dropdown"><a href="#">Réseau</a>
                                            <ul class="submenu">
                                                <li><a href="#">offres d'emploi</a></li>
                                                <li><a href="#">Entreprise</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown"><a href="#">AMID</a>
                                            <ul class="submenu">
                                                <li><a href="#">ANE</a></li>
                                                <li><a href="#">ANP</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown"><a href="#">ABC CONNECT</a>
                                        </li>
                                        <li class="has-menu-child-item"><a href="#">Meet & Share</a>
                                            
                                        </li>
                                    </ul>
                                </li> -->
                                <li class="with-megamenu has-menu-child-item position-static"><a href="{{ route('contact_link') }}">Contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-right">
                        <!-- Navbar Icons -->
                        <ul class="quick-access">
                            @if(Auth::check() ==false)
                            <li class="access-icon rbt-user-wrapper right-align-dropdown">
                                <a class="rbt-round-btn" href="#">
                                    <i class="feather-user"></i>
                                </a>
                                <div class="rbt-user-menu-list-wrapper">
                                    <div class="inner">
                                        <div class="rbt-admin-profile">
                                            <div class="admin-thumbnail">
                                                <img src="{{asset('assets/images/team/team1.png')}}" alt="User Images">
                                            </div>
                                            <div class="admin-info">
                                                <span class="name">Bachir</span>
                                                <!-- <a class="rbt-btn-link color-primary" href="profile.html">View Profile</a> -->
                                            </div>
                                        </div>
                                        <ul class="user-list-wrapper">
                                            <li>
                                                <a href="{{ route('profil_link') }}">
                                                    <i class="feather-home"></i>
                                                    <span>My Profil</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('myEvent_link') }}">
                                                    <i class="feather-bookmark"></i>
                                                    <span>Enrolled Events</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('setting_link') }}">
                                                    <i class="feather-settings"></i>
                                                    <span>Settings</span>
                                                </a>
                                            </li>
                                           
                                        </ul>
                                        <hr class="mt--10 mb--10">
                                        <ul class="user-list-wrapper">
                                           
                                            <li>
                                                <a href="#">
                                                    <i class="feather-log-out"></i>
                                                    <span>Logout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            @else
                            <li class="access-icon rbt-user-wrapper right-align-dropdown">
                                <a class="rbt-round-btn" href="{{ route('login_link') }}">
                                    <i class="feather-user"></i>
                                </a>
                            </li>
                            @endif
                            <!-- <li class="access-icon rbt-mini-cart">
                                <a class="rbt-cart-sidenav-activation rbt-round-btn" href="#">
                                    <i class="feather-shopping-cart"></i>
                                    <span class="rbt-cart-count">4</span>
                                </a>
                            </li> -->
                            <li class="access-icon">
                                <a class="search-trigger-active rbt-round-btn" href="#">
                                    <i class="feather-search"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- Start Mobile-Menu-Bar -->
                        <div class="mobile-menu-bar d-block d-xl-none">
                            <div class="hamberger">
                                <button class="hamberger-button rbt-round-btn">
                                    <i class="feather-menu"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Start Mobile-Menu-Bar -->
                    </div>
                </div>
            </div>
            <!-- Start Search Dropdown  -->
            <div class="rbt-search-dropdown">
                <div class="wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="#">
                                <input type="text" placeholder="Que cherchez-vous?">
                                <!-- <div class="submit-btn">
                                    <a class="rbt-btn btn-gradient btn-md" href="#">Search</a>
                                </div> -->
                            </form>
                        </div>
                    </div>

                    <div class="rbt-separator-mid">
                        <hr class="rbt-separator m-0">
                    </div>

                    <div class="row g-4 pt--30 pb--60">
                        <!-- <div class="col-lg-12">
                            <div class="section-title">
                                <h5 class="rbt-title-style-2">Our Top Course</h5>
                            </div>
                        </div> -->

                        <!-- Start Single Card  -->
                        <!-- <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="rbt-card variation-01 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="course-details.html">
                                        <img src="{{asset('assets/images/course/course-online-01.jpg')}}" alt="Card image">
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h5 class="rbt-card-title"><a href="course-details.html">React Js</a>
                                    </h5>
                                    <div class="rbt-review">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rating-count"> (15 Reviews)</span>
                                    </div>
                                    <div class="rbt-card-bottom">
                                        <div class="rbt-price">
                                            <span class="current-price">$15</span>
                                            <span class="off-price">$25</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <!-- <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="rbt-card variation-01 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="course-details.html">
                                        <img src="{{asset('assets/images/course/course-online-02.jpg')}}" alt="Card image">
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h5 class="rbt-card-title"><a href="course-details.html">Java Program</a>
                                    </h5>
                                    <div class="rbt-review">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rating-count"> (15 Reviews)</span>
                                    </div>
                                    <div class="rbt-card-bottom">
                                        <div class="rbt-price">
                                            <span class="current-price">$10</span>
                                            <span class="off-price">$40</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <!-- <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="rbt-card variation-01 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="course-details.html">
                                        <img src="{{asset('assets/images/course/course-online-03.jpg')}}" alt="Card image">
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h5 class="rbt-card-title"><a href="course-details.html">Web Design</a>
                                    </h5>
                                    <div class="rbt-review">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rating-count"> (15 Reviews)</span>
                                    </div>
                                    <div class="rbt-card-bottom">
                                        <div class="rbt-price">
                                            <span class="current-price">$10</span>
                                            <span class="off-price">$20</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <!-- <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="rbt-card variation-01 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="course-details.html">
                                        <img src="{{asset('assets/images/course/course-online-04.jpg')}}" alt="Card image">
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h5 class="rbt-card-title"><a href="course-details.html">Web Design</a>
                                    </h5>
                                    <div class="rbt-review">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rating-count"> (15 Reviews)</span>
                                    </div>
                                    <div class="rbt-card-bottom">
                                        <div class="rbt-price">
                                            <span class="current-price">$20</span>
                                            <span class="off-price">$40</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- End Single Card  -->
                    </div>

                </div>
            </div>
            <!-- End Search Dropdown  -->
        </div>



    </header>
    <!-- Mobile Menu Section -->
    <div class="popup-mobile-menu">
        <div class="inner-wrapper">
            <div class="inner-top">
                <div class="content">
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{asset('assets/images/logo/logo.png')}}" alt="Education Logo Images">
                        </a>
                    </div>
                    <div class="rbt-btn-close">
                        <button class="close-button rbt-round-btn"><i class="feather-x"></i></button>
                    </div>
                </div>
                <p class="description">L' ABC est la preuve vivante de l'efficacité d'une initiative volontariste et solidaire menée avec passion, intégrité et compétence.</p>
                <p> Un message porteur d'espoir pour l'avenir...</p>
                <ul class="navbar-top-left rbt-information-list justify-content-start">
                    <li>
                        <a href="mailto:contact@abclub-paris.com"><i class="feather-mail"></i>contact@abclub-paris.com</a>
                    </li>
                   
                </ul>
            </div>

            <nav class="mainmenu-nav">
                <ul class="mainmenu">
                    <li class=" has-menu-child-item position-static"><a href="{{ route('home_link') }}">Accueil </a></li>
                    <li class=" has-menu-child-item position-static"><a href="{{ route('about_link') }}">L'association </a></li>
                    <li class=" has-menu-child-item position-static"><a href="{{ route('action_link') }}">Nos Actions </a></li>
                    <li class=" has-menu-child-item position-static"><a href="{{ route('news_link') }}">News </a></li>
                    <li class=" has-menu-child-item position-static"><a href="{{ route('event_link') }}">Events </a></li>

                    <!-- <li class="has-dropdown has-menu-child-item">
                        <a href="#">Pôles
                            <i class="feather-chevron-down"></i>
                        </a>
                        <ul class="submenu">
                            <li class="has-dropdown"><a href="#">Réseau</a>
                                <ul class="submenu">
                                    <li><a href="#">offres d'emploi</a></li>
                                    <li><a href="#">Entreprise</a></li>
                                </ul>
                            </li>
                            <li class="has-dropdown"><a href="#">AMID</a>
                                <ul class="submenu">
                                    <li><a href="#">Events</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">ANE</a></li>
                                    <li><a href="#">ANP</a></li>
                                </ul>
                            </li>
                            <li class="has-dropdown"><a href="#">ABC CONNECT</a>
                            </li>
                            <li class="has-dropdown"><a href="#">Meet & Share</a>
                                <ul class="submenu">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Profile</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li> -->
                    <li class="with-megamenu has-menu-child-item position-static"><a href="{{ route('contact_link') }}">Contacts</a></li>
                </ul>
            </nav>

            <div class="mobile-menu-bottom">

                <div class="social-share-wrapper">
                    <span class="rbt-short-title d-block">retrouver nous sur: </span>
                    <ul class="social-icon social-default transparent-with-border justify-content-start mt--20">
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
                </div>
            </div>

        </div>
    </div>
    <!-- Start Side Vav -->
    <!-- <div class="rbt-cart-side-menu">
        <div class="inner-wrapper">
            <div class="inner-top">
                <div class="content">
                    <div class="title">
                        <h4 class="title mb--0">Your shopping cart</h4>
                    </div>
                    <div class="rbt-btn-close" id="btn_sideNavClose">
                        <button class="minicart-close-button rbt-round-btn"><i class="feather-x"></i></button>
                    </div>
                </div>
            </div>
            <nav class="side-nav w-100">
                <ul class="rbt-minicart-wrapper">
                    <li class="minicart-item">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="{{asset('assets/images/product/1.jpg')}}" alt="Product Images">
                            </a>
                        </div>
                        <div class="product-content">
                            <h6 class="title"><a href="single-product.html">Miracle Morning</a></h6>

                            <span class="quantity">1 * <span class="price">$22</span></span>
                        </div>
                        <div class="close-btn">
                            <button class="rbt-round-btn"><i class="feather-x"></i></button>
                        </div>
                    </li>

                    <li class="minicart-item">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="{{asset('assets/images/product/7.jpg')}}" alt="Product Images">
                            </a>
                        </div>
                        <div class="product-content">
                            <h6 class="title"><a href="single-product.html">Happy Strong</a></h6>

                            <span class="quantity">1 * <span class="price">$30</span></span>
                        </div>
                        <div class="close-btn">
                            <button class="rbt-round-btn"><i class="feather-x"></i></button>
                        </div>
                    </li>

                    <li class="minicart-item">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="{{asset('assets/images/product/3.jpg')}}" alt="Product Images">
                            </a>
                        </div>
                        <div class="product-content">
                            <h6 class="title"><a href="single-product.html">Rich Dad Poor Dad</a></h6>

                            <span class="quantity">1 * <span class="price">$50</span></span>
                        </div>
                        <div class="close-btn">
                            <button class="rbt-round-btn"><i class="feather-x"></i></button>
                        </div>
                    </li>

                    <li class="minicart-item">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="{{asset('assets/images/product/4.jpg')}}" alt="Product Images">
                            </a>
                        </div>
                        <div class="product-content">
                            <h6 class="title"><a href="single-product.html">Momentum Theorem</a></h6>

                            <span class="quantity">1 * <span class="price">$50</span></span>
                        </div>
                        <div class="close-btn">
                            <button class="rbt-round-btn"><i class="feather-x"></i></button>
                        </div>
                    </li>
                </ul>
            </nav>

            <div class="rbt-minicart-footer">
                <hr class="mb--0">
                <div class="rbt-cart-subttotal">
                    <p class="subtotal"><strong>Subtotal:</strong></p>
                    <p class="price">$121</p>
                </div>
                <hr class="mb--0">
                <div class="rbt-minicart-bottom mt--20">
                    <div class="view-cart-btn">
                        <a class="rbt-btn btn-border icon-hover w-100 text-center" href="#">
                            <span class="btn-text">View Cart</span>
                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                        </a>
                    </div>
                    <div class="checkout-btn mt--20">
                        <a class="rbt-btn btn-gradient icon-hover w-100 text-center" href="#">
                            <span class="btn-text">Checkout</span>
                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div> -->
    <!-- End Side Vav -->
    <a class="close_side_menu" href="javascript:void(0);"></a>
