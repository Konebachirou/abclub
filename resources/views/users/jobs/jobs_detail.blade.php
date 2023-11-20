@extends('users.layouts.app')
@section('titre', "Jobs - African Business Club")
@section('content')
<!-- Start Banner Area -->
<div class="rbt-banner-area rbt-banner-1 variation-2 height-245" style="background-image: url(../assets/images/bg/bg3.png) !important;">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-12">
                <div class="content">
                    <div class="inner text-center" >
                        <h3 class="color-white " style="margin-top: 8%;">Les meilleures offres d'emploi en Afrique</h3>
                        <p class="color-white">Le recrutement de talents est une une priorité absolue pour les fondateurs de startups ainsi que les grandes entreprises.</p>
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
                    <img src="{{asset('assets/images/product/1.png')}}" alt="Author Images">
                </a>
            </div>
            <div class="media-body">
                <div class="author-info">
                    <h5 class="title">
                        <a class="hover-flip-item-wrapper" href="">Responsable marketing</a>
                    </h5>
                    <span class="b3 subtitle">Organisation des nations unies pour l'education et la culture</span>
                    <ul class="rbt-meta mb--20 mt--10">
                        <li><i class="feather-bookmark"></i>Stage</li>
                        <li><i class="feather-map-pin"></i>Canada</li>
                        <li><i class="feather-award"></i>Pôle Réseau</li>
                    </ul>
                </div>
                <div class="content">
                    <p class="description">As Marketing Graphic Designer, your primary responsibility is to assist the Marketing and Social Media team with a variety of graphic design</p>
                </div>
            </div>
        </div>
        <div class="content" style="margin-top: 3%;">
            <h4 class="title">Description de l'offre </h4>
            <p class="description">As Marketing Graphic Designer, your primary responsibility is to assist the Marketing and Social Media team with a variety of graphic design tasks ranging from email, ads, print, and website design. You will be responsible to take a set of instructions, or a stated problem, and produce clean, modern design assets that are within the brand requirements of our company and our products. As part of the process, this person will collaborate with members of the marketing, design and product teams to gain a clear understanding of the campaign expectations, target audience, and product positioning.

                The right candidate will possess video production and editing skills. You will work with the marketing and social media team in the video production cycle from pre-production planning through post-production editing (video training available).

                For website design, a basic level of coding is required in order to turn designs into live websites.</p>
        </div>
        <div class="rbt-button-group text-center" style="margin-top: 2%;">
                        <a class="rbt-moderbt-btn" href="#">
                            <span class="moderbt-btn-text">Postuler</span>
                            <i class="feather-arrow-right"></i>
                        </a>
                    </div>

    </div>
</div>
<!-- End Intructor Area  -->

@stop