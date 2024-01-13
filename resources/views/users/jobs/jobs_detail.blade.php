@extends('users.layouts.app')
@section('titre', 'Jobs - African Business Club')
@section('content')
<!-- Start Banner Area -->
<div class="rbt-banner-area rbt-banner-1 variation-2 height-245" style="background-image: url({{ asset('../assets/images/bg/bg3.png') }}) !important;">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-12">
                <div class="content">
                    <div class="inner text-center">
                        <h3 class="color-white " style="margin-top: 8%;">Les meilleures offres d'emploi en Afrique</h3>
                        <p class="color-white">Le recrutement de talents est une une priorité absolue pour les fondateurs
                            de startups ainsi que les grandes entreprises.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Banner Area -->

<div class="rbt-course-details-area ">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12">
                <div class="course-details-content">
                    <div class="rbt-course-feature-box rbt-shadow-box thuumbnail mt--30">
                        <div class="about-author border-0 pb--0 pt--0 ">
                            <div class="media align-items-center">
                                <div class="thumbnail">
                                    <a>
                                        <img src="{{ $job->imageUrl() }}" alt="{{ $job->job_title }}">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <div class="author-info">
                                        <h5 class="title">
                                            <a class="hover-flip-item-wrapper" href="">{{ $job->job_title }}</a>
                                        </h5>
                                        <ul class="rbt-meta mb--20 mt--10">
                                            <li><i class="feather-bookmark"></i>{{ $job->type }}</li>
                                            <li><i class="feather-map-pin"></i>{{ $job->location }}</li>
                                            <li><i class="feather-award"></i>{{ $job->domain }}</li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rbt-inner-onepage-navigation sticky-top mt--30" style="top:90px">
                        <nav class="mainmenu-nav onepagenav">
                            <ul class="mainmenu">
                                <li class="current">
                                    <a href="#company">Entreprise</a>
                                </li>
                                <li>
                                    <a href="#description">Description de la mission </a>
                                </li>
                                <li>
                                    <a href="#profil">Profil du candidat</a>
                                </li>
                                <li>
                                    <a href="#recrutement">Processus de recrutement </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <!-- Start jobs company Box  -->
                    <div class="rbt-course-feature-box overview-wrapper rbt-shadow-box mt--30 has-show-more" id="company">
                        <div class="rbt-course-feature-inner has-show-more-inner-content">
                            <div class="section-title">
                                <h4 class="rbt-title-style-3">Entreprise</h4>
                            </div>
                            {!! $job->company_desc !!}

                        </div>
                        <div class="rbt-show-more-btn">Show More</div>
                    </div>
                    <!-- End jobs company Box  -->


                    <!-- start jobs Description Box  -->
                    <div class="rbt-course-feature-box overview-wrapper rbt-shadow-box mt--30 has-show-more" id="description">
                        <div class="rbt-course-feature-inner has-show-more-inner-content">
                            <div class="section-title">
                                <h4 class="rbt-title-style-3">Description de la mission</h4>
                            </div>
                            {!! $job->mission !!}
                        </div>
                        <div class="rbt-show-more-btn">Show More</div>
                    </div>
                    <!-- End jobs Description Box  -->

                    <!-- Start Course Feature Box  -->
                    <div class="rbt-course-feature-box rbt-shadow-box details-wrapper mt--30" id="profil">
                        <!-- <div class="section-title">
                            <h4 class="rbt-title-style-3">Profil du candidat</h4>
                        </div> -->
                        <div class="row g-5">
                            <!-- Start Feture Box  -->
                            <div class="col-lg-6">
                                <div class="section-title">
                                    <h4 class="rbt-title-style-3 mb--20">Diplôme requis </h4>
                                </div>
                                <div>
                                    {!! $job->diplomes !!}

                                </div>
                            </div>
                            <!-- End Feture Box  -->

                            <!-- Start Feture Box  -->
                            <div class="col-lg-6">
                                <div class="section-title">
                                    <h4 class="rbt-title-style-3 mb--20">Expériences requises</h4>
                                </div>
                                <div>
                                    {!! $job->experiences !!}

                                </div>
                            </div>
                            <!-- End Feture Box  -->

                            <!-- Start Feture Box  -->
                            <div class="col-lg-6">
                                <div class="section-title">
                                    <h4 class="rbt-title-style-3 mb--20">Langues</h4>
                                </div>
                                <div>
                                    {!! $job->languages !!}

                                </div>
                            </div>
                            <!-- End Feture Box  -->

                            <!-- Start Feture Box  -->
                            <div class="col-lg-6 has-show-more">
                                <div class="section-title">
                                    <h4 class="rbt-title-style-3 mb--20">Compétences et expertises</h4>
                                </div>
                                <div class="rbt-course-feature-inner has-show-more-inner-content">
                                    {!! $job->competences !!}
                                </div>
                            <div class="rbt-show-more-btn">Show More</div>
                            </div>
                            <!-- End Feture Box  -->
                        </div>
                    </div>
                    <!-- End Course Feature Box  -->

                    <!-- Start Intructor Area  -->
                    <div class="rbt-instructor rbt-shadow-box intructor-wrapper mt--30 has-show-more" id="recrutement">
                        <div class="about-author border-0 pb--0 pt--0">
                            <div class="section-title mb--30">
                                <h4 class="rbt-title-style-3">Processus de recrutement</h4>
                            </div>
                            <div class="rbt-course-feature-inner has-show-more-inner-content">
                                {!! $job->process !!}
                            </div>
                            <div class="rbt-show-more-btn">Show More</div>
                        </div>
                    </div>
                    <!-- End Intructor Area  -->
                    <div class=" col-lg-4 offset-md-4 mt--30">
                        {{-- <div class="rbt-button-group text-center" style="margin-top: 2%;">
                <a class="rbt-moderbt-btn" href="{{ $job->job_link }}">
                        <span class="moderbt-btn-text">Postuler</span>
                        <i class="feather-arrow-right"></i>
                        </a>
                    </div> --}}
                    <form action="{{ route('user_job_link') }}" method="POST">
                        @csrf
                        <input type="hidden" name="job_id" value="{{ $job->id }}">

                        <button class="rbt-btn btn-gradient hover-icon-reverse" style="width: 100%;">
                            <span class="icon-reverse-wrapper">
                                <span class="btn-text">Je candidate</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@stop