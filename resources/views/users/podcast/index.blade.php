@extends('users.layouts.app')
@section('titre', 'Podcast - African Business Club')

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
                            <li class="rbt-breadcrumb-item"><a href="{{ route('home_link') }}">Accueil</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">Podcast</li>
                        </ul>
                        <!-- End Breadcrumb Area  -->

                        <div class=" title-wrapper">
                            <h1 class="title mb--0">African Business Talks</h1>
                        </div>
                        <p class="description">Tous savoir sur l'actualité de l'African Business Club. </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Content Top  -->
    </div>
    <!-- End Banner Content Top  -->

</div>
</div>

<div class="rbt-section-overlayping-top rbt-section-gapBottom">
    <div class="container">
        <!-- Start Card Area -->
        <div class="row">
            <div class="row g-5">
                @foreach($podcasts as $podcast)
            <div class="col-lg-4 p-2">
                <div class="video-popup-wrapper">
                    <img class="w-100 rbt-radius" src="{{$podcast->illustrationUrl()}}" alt="Video Images">
                    <a class="rbt-btn rounded-player-2 popup-video position-to-top with-animation btn-theme-color" href="{{$podcast->lien}}">
                        <span class="play-icon"></span>
                    </a>
                </div>
            </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>
@stop