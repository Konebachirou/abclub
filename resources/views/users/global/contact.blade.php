@extends('users.layouts.app')
@section('content')

    <div class="rbt-conatct-area bg-gradient-11 rbt-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb--60">
                        <span class="subtitle bg-secondary-opacity2">Contactez nous</span>
                        <h2 class="title">pour plus d'informations sur ABC, <br> vous pouvez nous contacter.</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate" data-sal="slide-up" data-sal-delay="150"
                    data-sal-duration="800">
                    <div class="rbt-address">
                        <div class="icon">
                            <i class="feather-cast"></i>
                        </div>
                        <div class="inner">
                            <h4 class="title">Nos réseau sociaux</h4>
                            <div class="social-share-wrapper mt--40">
                                <ul class="social-icon social-default transparent-with-border">
                                    <li><a href="https://www.facebook.com/Africanbusinessclub">
                                            <i class="feather-facebook"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://twitter.com/AfricanBC">
                                            <i class="feather-twitter"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://instagram.com/africanbusinessclub_?igshid=MzRlODBiNWFlZA==">
                                            <i class="feather-instagram"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.linkedin.com/company/african-business-club/">
                                            <i class="feather-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate" data-sal="slide-up" data-sal-delay="200"
                    data-sal-duration="800">
                    <div class="rbt-address">
                        <div class="icon">
                            <i class="feather-mail"></i>
                        </div>
                        <div class="inner">
                            <h4 class="title">Notre adresse e-mail</h4>
                            <p><a href="mailto:contact@abclub-paris.com">contact@abclub-paris.com</a></p>
                            <p><a href="mailto:contact@abclub-paris.com">contact@abclub-paris.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate" data-sal="slide-up" data-sal-delay="250"
                    data-sal-duration="800">
                    <div class="rbt-address">
                        <div class="icon">
                            <i class="feather-map-pin"></i>
                        </div>
                        <div class="inner">
                            <h4 class="title">Notre emplacement</h4>
                            <p> <a href="#">situé à Paris 17ème. 8 avenue de la Porte de Champerret, 75017 - Métro
                                    Ligne 3 - Louise Michel.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-contact-address">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="thumbnail">
                        <img class="w-100 radius-6" src="assets/images/about/contactus1.png" alt="Contact Images">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="rbt-contact-form contact-form-style-1 max-width-auto">
                        <div class="section-title text-start">
                            <span class="subtitle bg-primary-opacity">African Business Club Message</span>
                        </div>
                        <h5 class="title">Vous pouvez nous laisser un message et vous serez contacté dans les meilleurs
                            delai.</h5>
                        <form id="contact-form" method="POST" action="{{ route('contact-send') }}"
                            class="rainbow-dynamic max-width-auto">
                            @csrf
                            <div class="form-group">
                                <input name="full_name" id="contact-name" type="text">
                                <label>Name</label>
                                <span class="focus-border"></span>
                                @if ($errors->has('full_name'))
                                    <span class="main__table-text--red">{{ $errors->first('full_name') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input name="email" type="email">
                                <label>Email</label>
                                <span class="focus-border"></span>
                                @if ($errors->has('email'))
                                    <span class="main__table-text--red">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="text" id="subject" name="subject">
                                <label>Your Subject</label>
                                <span class="focus-border"></span>
                                @if ($errors->has('subject'))
                                    <span class="main__table-text--red">{{ $errors->first('subject') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="contact-message"></textarea>
                                <label>Message</label>
                                <span class="focus-border"></span>
                                @if ($errors->has('message'))
                                    <span class="main__table-text--red">{{ $errors->first('message') }}</span>
                                @endif
                            </div>
                            <div class="form-submit-group">
                                <button name="submit" type="submit" id="submit"
                                    class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Envoyer</span>
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

    <div class="rbt-google-map bg-color-white rbt-section-gapTop">
        <iframe class="w-100"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10494.015762209065!2d2.2688718280432645!3d48.88673243750144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66f8f730590b1%3A0x3a3962d81eb2fde4!2s8%20Av.%20de%20la%20Prte%20de%20Champerret%2C%2075017%20Paris!5e0!3m2!1sfr!2sfr!4v1694026637652!5m2!1sfr!2sfr"
            height="600" style="border:0"></iframe>
    </div>
@stop
