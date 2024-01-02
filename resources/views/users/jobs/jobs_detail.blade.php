@extends('users.layouts.app')
@section('titre', 'Jobs - African Business Club')
@section('content')
    <!-- Start Banner Area -->
    <div class="rbt-banner-area rbt-banner-1 variation-2 height-245"
        style="background-image: url({{ asset('../assets/images/bg/bg3.png') }}) !important;">
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
    <!-- Start Intructor Area  -->
    <div class="rbt-instructor rbt-shadow-box intructor-wrapper mt--30" id="intructor">
        <div class="about-author border-0 pb--0 pt--0">
            <div class="media align-items-center">
                <div class="thumbnail">
                    <a href="#">
                        <img src="{{ $job->imageUrl() }}" alt="{{ $job->job_title }}">
                    </a>
                </div>
                <div class="media-body">
                    <div class="author-info">
                        <h5 class="title">
                            <a class="hover-flip-item-wrapper" href="">{{ $job->job_title }}</a>
                        </h5>
                        <span class="b3 subtitle">{{ $job->company }}</span>
                        <ul class="rbt-meta mb--20 mt--10">
                            <li><i class="feather-bookmark"></i>{{ $job->type }}</li>
                            <li><i class="feather-map-pin"></i>{{ $job->location }}</li>
                            <li><i class="feather-award"></i>{{ $job->pole->name }}</li>
                        </ul>
                    </div>
                    <div class="content">
                        <p class="description">{{ $job->description }}</p>
                    </div>
                </div>
            </div>
            <div class="content" style="margin-top: 3%;">
                <h4 class="title">Description de l'offre </h4>
                <p class="description">{{ $job->content }}</p>
            </div>
            {{-- <div class="rbt-button-group text-center" style="margin-top: 2%;">
                <a class="rbt-moderbt-btn" href="{{ $job->job_link }}">
                    <span class="moderbt-btn-text">Postuler</span>
                    <i class="feather-arrow-right"></i>
                </a>
            </div> --}}
            <form action="{{ route('user_job_link') }}" method="POST">
                @csrf
                <input type="hidden" name="job_id" value="{{ $job->id }}">

                <button class="rbt-btn btn-gradient hover-icon-reverse">
                    <span class="icon-reverse-wrapper">
                        <span class="btn-text">Je candidate</span>
                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                    </span>
                </button>
            </form>
        </div>
    </div>
    <!-- End Intructor Area  -->

@stop
