@extends('users.layouts.app') 
@section('content')
<div class="rbt-elements-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row gy-5 row--30">
                <div class="col-lg-8  offset-md-2">
                    <div class="rbt-contact-form contact-form-style-1 max-width-auto">
                        <h4 class="title">Mot de passe oublier</h4>
                        <p class="mt-5">Saisissez votre adresse électronique dans le champ ci-dessous et cliquer sur le bouton "Demander un nouveau mot de passe".
                             Un email permettant de changer votre mot de passe vous sera envoyé.</p>
                        <form class="max-width-auto">
                            <div class="form-group">
                                <input name="mail" type="email" />
                                <label>Email *</label>
                                <span class="focus-border"></span>
                            </div>
                            
                            <div class="form-submit-group">
                                <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Demander un nouveau mot de passe</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </button>
                            </div>
                        </form>
                        <!-- <p class="mt-5">Je n'ai pas de Compte, Je<a href="{{ route('register_link') }}" > crée mon compte</a></p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop