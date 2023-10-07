@extends('users.layouts.app')
@section('content')
    <div class="rbt-elements-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row gy-5 row--30">
                <div class="col-lg-6  offset-md-3">
                    <div class="rbt-contact-form contact-form-style-1 max-width-auto">
                        <h3 class="title">Connexion</h3>
                        <form class="max-width-auto" method="POST" action="{{ route('authentification') }}">
                            @csrf
                            <div class="form-group">
                                <input name="email" type="email" />
                                <label>Email *</label>
                                <span class="focus-border"></span>
                                @if ($errors->has('email'))
                                    <span class="#">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input name="password" type="password">
                                <label>Mot de passe *</label>
                                <span class="focus-border"></span>
                                @if ($errors->has('password'))
                                    <span class="#">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <div class="row mb--30">
                                <div class="col-lg-6">
                                    <!-- <div class="rbt-checkbox">
                                        <input type="checkbox" id="rememberme" name="rememberme">
                                        <label for="rememberme">Resté connecter</label>
                                    </div> -->
                                </div>
                                <div class="col-lg-6">
                                    <div class="rbt-lost-password text-end">
                                        <a class="rbt-btn-link" href="{{ route('forgotPassword_link') }}">Mot de passe
                                            oublié?</a>
                                    </div>
                                </div>
                            </div>

                            <div class="form-submit-group">
                                <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Se connecter</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
