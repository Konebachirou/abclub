@extends('users.layouts.app')
@section('titre', 'Jobs - African Business Club')
@section('content')
    <div class="slider-area rbt-banner-5 height-450 bg_image" style="background-image: url(assets/images/bg/bgjobs.jpg)"
        data-gradient-overlay="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class=" text-center">
                        <h1 class="title" style="color: white;">Les meilleures offres d'emploi en Afrique
                        </h1>
                        <p class="description" style="color: black;">Le recrutement de talents est une une priorité absolue
                            pour les fondateurs de startups ainsi que les grandes entreprises.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <livewire:job.list-job-component />
@stop
