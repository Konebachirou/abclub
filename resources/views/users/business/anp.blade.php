@extends('users.layouts.app')
@section('titre', "Entrepreneuriat - African Business Club")
@section('content')
<!-- Start Banner Area -->
<div class="rbt-banner-area rbt-banner-1 variation-2 height-450" style="background-image: url(../assets/images/bg/bg3.png) !important;">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-7">
                <div class="content">
                    <div class="inner">
                        <h3 class="">
                            <span class="header-caption">
                                <span class="cd-headline clip is-full-width">
                                    <span class="cd-words-wrapper">
                                        <b class="is-visible ">AFRICAN NEXT POSITION</b>
                                        <b class="is-hidden theme-gradient">AFRICAN NEXT POSITION</b>
                                    </span>
                                </span>

                            </span>

                        </h3>
                        <h3 class="color-white text-center" style="font-size: 30px;">Un concours visant à promouvoir des projets d’innovation portés par des entrepreneurs de la diaspora africaine en France</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="content">
                    <div class="banner-card pb--60 swiper rbt-dot-bottom-center banner-swiper-active">
                        <div class="swiper-wrapper">
                            <img src="{{asset('assets/images/bg/anp.png')}}" alt="Card image">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Banner Area -->


@stop