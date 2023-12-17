@extends('users.layouts.app') 
@section('content')
<div class="rbt-elements-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row gy-5 row--30">
                <div class="col-lg-8 offset-md-2">
                    <div class="rbt-contact-form contact-form-style-1 max-width-auto">
                        <h3 class="title">Créé son compte</h3>
                        <form class="max-width-auto">
                            <div class="row mb--30">
                                <div class="col-lg-12 col-12 mb--20">
                                    <label>Domaine d'activité *</label>
                                    <div class="rbt-modern-select bg-transparent height-45">
                                        <select name="Choisissez_option_liste" class="w-100">
                                            @foreach($selects as $item)
                                            <option value="{{$item}}">{{$item}}</option>
                                            @endforeach
                                        </select>
                                        @error('Choisissez_option_liste')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="nom" type="text" required />
                                        <label>Nom *</label>
                                        <span class="focus-border"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="prenom" type="text" required />
                                        <label>Prénom *</label>
                                        <span class="focus-border"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb--30">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="email" type="text" required />
                                        <label>Email  *</label>
                                        <span class="focus-border"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="tel" type="text"  pattern="[0-9]{8,}" maxlength="14" required/>
                                        <label>Téléphone *</label>
                                        <span class="focus-border"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input name="adress" type="text">
                                <label>Adresse *</label>
                                <span class="focus-border"></span>
                            </div>
                            <div class="row ">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="register_password" type="password" required>
                                        <label>Mot de Passe *</label>
                                        <span class="focus-border"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="password_confirmation" type="password" required>
                                        <label>Confirmez le mot de passe *</label>
                                        <span class="focus-border"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row mb--30">
                                <div class="col-lg-6 offset-md-6">
                                        <div class="rbt-checkbox">
                                            <input type="checkbox" id="rememberme" name="rememberme">
                                            <label for="rememberme">Devenir Membre de L'ABC </label>
                                        </div>
                                    </div>
                             </div> -->
                            <div class="form-submit-group">
                                <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Créé son compte</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </button>
                            </div>

                        </form>
                        <p class="mt-5">J'ai déja un Compte, <a href="{{ route('login_link') }}" >se connecter</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop