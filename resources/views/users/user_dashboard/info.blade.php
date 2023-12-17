@extends('users.user_dashboard.layouts.master')
@section('content')

<div class="col-lg-9">
    <!-- Start Instructor Profile  -->
    <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
        <div class="content">
            <div class="section-title">
                <h4 class="rbt-title-style-3">My Profile</h4>
            </div>
            <!-- Start Profile Row  -->
            <div class="rbt-profile-row row row--15">
                <div class="col-lg-4 col-md-4">
                    <div class="rbt-profile-content b2">Registration Date</div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="rbt-profile-content b2">{{ date('D M \, Y', strtotime(Auth::user()->created_at)) }}</div>
                </div>
            </div>
            <!-- End Profile Row  -->

            <!-- Start Profile Row  -->
            <div class="rbt-profile-row row row--15 mt--15">
                <div class="col-lg-4 col-md-4">
                    <div class="rbt-profile-content b2">Nom et Prenom</div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="rbt-profile-content b2">{{Auth::user()->name}}</div>
                </div>
            </div>
            <!-- End Profile Row  -->
            <!-- Start Profile Row  -->
            <div class="rbt-profile-row row row--15 mt--15">
                <div class="col-lg-4 col-md-4">
                    <div class="rbt-profile-content b2">Email</div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="rbt-profile-content b2">{{Auth::user()->email}}</div>
                </div>
            </div>
            <!-- End Profile Row  -->

            <!-- Start Profile Row  -->
            <div class="rbt-profile-row row row--15 mt--15">
                <div class="col-lg-4 col-md-4">
                    <div class="rbt-profile-content b2">Phone Number</div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="rbt-profile-content b2">+1-202-555-0174</div>
                </div>
            </div>
            <!-- End Profile Row  -->

            <!-- Start Profile Row  -->
            <div class="rbt-profile-row row row--15 mt--15">
                <div class="col-lg-4 col-md-4">
                    <div class="rbt-profile-content b2">Skill/Occupation</div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="rbt-profile-content b2">Application Developer</div>
                </div>
            </div>
            <!-- End Profile Row  -->

            <!-- Start Profile Row  -->
            <div class="rbt-profile-row row row--15 mt--15">
                <div class="col-lg-4 col-md-4">
                    <div class="rbt-profile-content b2">Biography</div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="rbt-profile-content b2">I'm the Front-End Developer for #Rainbow IT in Bangladesh, OR. I have serious passion for UI effects, animations and creating intuitive, dynamic user experiences.</div>
                </div>
            </div>
            <!-- End Profile Row  -->
        </div>
    </div>
    <!-- End Instructor Profile  -->

</div>
@stop