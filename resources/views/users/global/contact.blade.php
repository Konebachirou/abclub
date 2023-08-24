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
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                <div class="rbt-address">
                    <div class="icon">
                        <i class="feather-headphones"></i>
                    </div>
                    <div class="inner">
                        <h4 class="title">numéro de téléphone</h4>
                        <p><a href="tel:(+33) 6 44 80 33 59">(+33) 6 44 80 33 59</a></p>
                        <p><a href="tel:(+33) 6 44 80 33 59">(+33) 6 44 80 33 59</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate" data-sal="slide-up" data-sal-delay="200" data-sal-duration="800">
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
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate" data-sal="slide-up" data-sal-delay="250" data-sal-duration="800">
                <div class="rbt-address">
                    <div class="icon">
                        <i class="feather-map-pin"></i>
                    </div>
                    <div class="inner">
                        <h4 class="title">Notre emplacement</h4>
                        <p>Le siège de l’ABC est situé au sein de ESCP Business School</p> <br><p> <a href="#">79 Av. de la République, 75011 Paris</a></p>
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
                    <h5 class="title">Vous pouvez nous laisser un message et vous serez contacté dans les meilleurs delai.</h5>
                    <form id="contact-form" method="POST" action="mail.php" class="rainbow-dynamic-form max-width-auto">
                        <div class="form-group">
                            <input name="contact-name" id="contact-name" type="text">
                            <label>Name</label>
                            <span class="focus-border"></span>
                        </div>
                        <div class="form-group">
                            <input name="contact-phone" type="email">
                            <label>Email</label>
                            <span class="focus-border"></span>
                        </div>
                        <div class="form-group">
                            <input type="text" id="subject" name="subject">
                            <label>Your Subject</label>
                            <span class="focus-border"></span>
                        </div>
                        <div class="form-group">
                            <textarea name="contact-message" id="contact-message"></textarea>
                            <label>Message</label>
                            <span class="focus-border"></span>
                        </div>
                        <div class="form-submit-group">
                            <button name="submit" type="submit" id="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">
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
    <!-- <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319" height="600" style="border:0"></iframe> -->
    <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d156438.2348616241!2d2.2230238691543267!3d48.828650806917125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66df04ac5f25f%3A0x79e4f8d7de0de4bd!2sESCP%20Business%20School!5e0!3m2!1sfr!2sfr!4v1692810435372!5m2!1sfr!2sfr" height="600" style="border:0"></iframe>
</div>
@stop