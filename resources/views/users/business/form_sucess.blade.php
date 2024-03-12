@extends('users.layouts.app')
@section('content')
<div class="rbt-error-area  rbt-section-gap">
        <div class="error-area">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-10">
                        <h5 style="font-size: 36px;">Félicitation Votre Candidature a été prise en compte !</h5>
                        <p>Vous pouver télécharger votre formulaire de candidature ci-dessous</p>
                        <a class="rbt-btn btn-gradient icon-hover" href="{{ route('valide-candidature', $ane) }}">
                            <span class="btn-text">Télécharger</span>
                            <span class="btn-icon"><i class="feather-arrow-down"></i></span>
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop