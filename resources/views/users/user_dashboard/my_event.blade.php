@extends('users.user_dashboard.layouts.master')
@section('content')
<div class="col-lg-9">
    <!-- Start Instructor Profile  -->
    <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
        <div class="content">
            <div class="section-title">
                 <h4 class="rbt-title-style-3">Enrolled Events</h4>
            </div>
            <div class="row g-5">
                @for($i = 0; $i < 4; $i++)
                <!-- Start Single Event  -->
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="rbt-card event-grid-card variation-01 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="">
                                <img src="assets/images/event/grid-type-01.jpg" alt="Card image">
                                <!-- <div class="rbt-badge-3 bg-white">
                                    <span>11 Jan</span>
                                    <span>2023</span>
                                </div> -->
                            </a>
                        </div>
                        <div class="rbt-card-body">
                        <ul class="rbt-meta">
                            <li><i class="feather-map-pin"></i>Vancouver</li><br>
                            <li><span ><i class="feather-calendar"></i>11 Jan, 2023</span> 
                            <span style="padding-left: 10px;"><i class="feather-clock"></i>8:00 am - 5:00 pm </span> </li>
                         </ul>
                            <h4 class="rbt-card-title"><a href="">International Education Fair 2023</a></h4>

                            <div class="read-more-btn">
                                <a class="rbt-btn btn-border hover-icon-reverse btn-sm radius-round" href="event-details.html">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Get Ticket</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Event  -->
                @endfor

            </div>
        </div>
    </div>
</div>

@stop