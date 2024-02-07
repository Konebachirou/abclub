@extends('users.layouts.app')
@section('content')
    <div class="rbt-elements-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row gy-5 row--30">
                <div class="col-lg-8 offset-md-2">
                    <div class="rbt-contact-form contact-form-style-1 max-width-auto">
                        <h3 class="title">Créer son compte</h3>
                        <form class="max-width-auto" method="POST" action="{{ route('registration') }}">
                            @csrf
                            <!-- Domaine d'activité -->
                            <div class="row mb--30">
                                <div class="col-lg-12 col-12 mb--20">
                                    <label>Domaine d'activité *</label>
                                    <div class="rbt-modern-select bg-transparent height-45">
                                        <select name="domaine" class="w-100">
                                            <!-- Options de domaine d'activité -->
                                            @foreach ($selects as $item)
                                                <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- Nom et prénom -->
                            <div class="row mb--30">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="firstName" type="text" required />
                                        <label>Nom *</label>
                                        <span class="focus-border"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="lastName" type="text" required />
                                        <label>Prénom *</label>
                                        <span class="focus-border"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Email et téléphone -->
                            <div class="row mb--30">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="email" type="text" required />
                                        <label>Email *</label>
                                        <span class="focus-border"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="tel" type="text" />
                                        <label>Téléphone</label>
                                        <span class="focus-border"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Adresse -->
                            <div class="form-group">
                                <input name="address" type="text">
                                <label>Adresse</label>
                                <span class="focus-border"></span>
                            </div>
                            <!-- Mot de passe et confirmation -->
                            <div class="row ">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="password" type="password" required>
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
                            <!-- Bouton de soumission -->
                            <div class="form-submit-group">
                                <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Créer son compte</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </button>
                            </div>
                        </form>
                        <!-- Lien de connexion pour les utilisateurs existants -->
                        <p class="mt-5">J'ai déjà un compte, <a href="{{ route('login_link') }}">se connecter</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
