<!DOCTYPE html>
<html lang="en">
@include('users.layouts.head')
<body class="rbt-header-sticky">
  @include('users.layouts.header')
  <!-- <main class="rbt-main-wrapper"> -->
  <div class="rbt-page-banner-wrapper">
    <!-- Start Banner BG Image  -->
    <div class="rbt-banner-image"></div>
     <!-- End Banner BG Image  -->
</div>
    <div class="rbt-dashboard-area rbt-section-overlayping-top rbt-section-gapBottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Start Dashboard Top  -->
                <div class="rbt-dashboard-content-wrapper">
                    <div class="tutor-bg-photo bg_image  height-350" style="background-image: url(./assets/images/banner/banner.png);"></div>
                        <!-- Start Tutor Information  -->
                        <div class="rbt-tutor-information">
                            <div class="rbt-tutor-information-left">
                                <div class="thumbnail rbt-avatars size-lg">
                                @if (Auth::user()->image !== '')
                                                    <img src="{{asset('assets/images/team/'.Auth::user()->image)}}" alt="">
                                                    @else
                                                    <img src="{{asset('assets/images/icons/avatar.png')}}" alt="">
                                                @endif
                                </div>
                                <div class="tutor-content">
                                    <h5 class="title">{{Auth::user()->name}}</h5>
                                </div>
                            </div>
                        </div>
                        <!-- End Tutor Information  -->
                </div>
                    <!-- End Dashboard Top  -->

                <div class="row g-5">
                        <div class="col-lg-3">
                            <!-- Start Dashboard Sidebar  -->
                            <div class="rbt-default-sidebar sticky-top rbt-shadow-box rbt-gradient-border">
                                <div class="inner">
                                    <div class="content-item-content">

                                        <div class="rbt-default-sidebar-wrapper">
                                            <nav class="mainmenu-nav">
                                                <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                                                    <!-- <li><a href="{{ route('dashboard_link') }}"><i class="feather-home"></i><span>Dashboard</span></a></li> -->
                                                    <li><a href="{{ route('profil_link') }}"><i class="feather-user"></i><span>View Profile</span></a></li>
                                                    <li><a href="{{ route('myEvent_link') }}"><i class="feather-book-open"></i><span>Enrolled Events</span></a></li>
                                                    <li><a href="{{ route('myjobs_link') }}"><i class="feather-book-open"></i><span>Enrolled Jobs</span></a></li>
                                                    <!-- <li><a href="instructor-order-history.html"><i class="feather-shopping-bag"></i><span>Order History</span></a></li> -->
                                                </ul>
                                            </nav>

                                            <!-- <div class="section-title mt--40 mb--20">
                                                <h6 class="rbt-title-style-2">User</h6>
                                            </div> -->

                                            <nav class="mainmenu-nav">
                                                <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                                                    <li><a href="{{ route('setting_link') }}"><i class="feather-settings"></i><span>Settings</span></a></li>
                                                    <li><a href="{{ route('filament.admin.auth.logout') }}"><i class="feather-log-out"></i><span>Logout</span></a></li>
                                                </ul>
                                            </nav>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- End Dashboard Sidebar  -->
                        </div>
                        @yield('content')
                        
                </div>
            </div>
        </div>
    </div>
</div>  
  <!-- </main> -->
    @include('users.layouts.footer')
    @include('users.layouts.js')
</body>
</html> 