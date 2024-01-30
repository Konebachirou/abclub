@extends('users.layouts.app')
@section('content')
<div class="rbt-error-area  rbt-section-gap">
        <div class="error-area">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-10">
                        <h5 style="font-size: 36px;">Félicitation {{ Auth::user()->name}} ! <br> Bienvenue au sein de la famille African Business Club.</h5>
                        <p>Dans les  les prochaines heures, vous recevrez un email de l'équipe IT contenant votre adresse mail ABC.</p>
                        <a class="rbt-btn btn-gradient icon-hover" href="{{ route('home_link') }}">
                            <span class="btn-text">Acceuil</span>
                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop