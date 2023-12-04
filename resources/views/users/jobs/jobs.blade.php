@extends('users.layouts.app')
@section('titre', "Jobs - African Business Club")
@section('content')
<div class="slider-area rbt-banner-5 height-650 bg_image" style="background-image: url(assets/images/bg/bgjobs.jpg)" data-gradient-overlay="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class=" text-center">
                    <h1 class="title" style="color: white;">Les meilleures offres d'emploi en Afrique
                    </h1>
                    <p class="description" style="color: black;">Le recrutement de talents est une une priorité absolue pour les fondateurs de startups ainsi que les grandes entreprises.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="rbt-elements-area bg-color-white " style="margin-top: 6%;">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12">
                <div class="rbt-search-with-category">
                    <div class="filter-select rbt-modern-select search-by-category">
                        <select>
                            <option>All Categories</option>
                            <option>Education</option>
                            <option>Course</option>
                            <option>Art</option>
                            <option>Web Design</option>
                        </select>
                    </div>
                    <div class="search-field">
                        <input type="text" placeholder="Search Course">
                        <button class="rbt-round-btn serach-btn" type="submit"><i class="feather-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" style="margin-top: 2%;" > 
        <div class="row g-5">
            <div class="col-lg-12">
<div class="align-content-between" style="display: flex;
  flex-direction: row;">
    <p class="rbt-checkbox-wrapper mr-lg-2" style="margin-right: 2%;" >
        <input id="free" name="free" type="checkbox" value="yes">
        <label for="free">FREELANCE</label>
    </p>
    <p class="rbt-checkbox-wrapper " style="margin-right: 2%;" >
        <input id="full" name="full" type="checkbox" value="yes">
        <label for="full"> FULL TIME</label>
    </p>
    <p class="rbt-checkbox-wrapper" style="margin-right: 2%;" >
        <input id="intern" name="intern" type="checkbox" value="yes">
        <label for="intern">INTERNSHIP</label>
    </p>
    <p class="rbt-checkbox-wrapper" style="margin-right: 2%;" >
        <input id="part" name="part" type="checkbox" value="yes">
        <label for="part">PART TIME</label>
    </p>
    <p class="rbt-checkbox-wrapper">
        <input id="temp" name="temp" type="checkbox" value="yes">
        <label for="temp"> TEMPORARY </label>
    </p>
</div>
</div>
</div>
</div>

<div class="wishlist_area bg-color-white" style="margin-top: 3%;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#">
                    <div class="cart-table table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="pro-title">Entreprise</th>
                                    <th class="pro-title">Poste</th>
                                    <th class="pro-price">Localisation</th>
                                    <th class="pro-quantity">pôle</th>
                                    <th class="pro-quantity">Type</th>
                                    <th class="pro-subtotal">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for($i=0; $i < 5; $i++) <tr>
                                    <td class="pro-thumbnail"><a href="#"><img src="assets/images/product/1.png" alt="Product"></a></td>
                                    <td class="pro-title"><a href="#">Responsable marketing</a></td>
                                    <td class="pro-title"><a href="#">Canada</a></td>
                                    <td class="pro-price"><span>Réseau</span></td>
                                    <td class="pro-price"><span>STAGE</span></td>
                                    <td class="pro-addtocart">
                                        <a href="#" class="rbt-btn btn-gradient" data-bs-toggle="modal" data-bs-target="#modalPole-{{ $i }}">Voir Plus</a>
                                    </td>
                                    </td>
                                    </tr>
                                    <div class="rbt-team-modal modal fade rbt-modal-default" id="modalPole-{{ $i }}" tabindex="-1" aria-labelledby="modalPole-{{ $i }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" style="width: 60%;">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="rbt-round-btn" data-bs-dismiss="modal" aria-label="Close">
                                                        <i class="feather-x"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="inner">
                                                        <div class="rbt-instructor rbt-shadow-box intructor-wrapper mt--10" id="intructor">
                                                            <div class="about-author border-0 pb--0 pt--0">
                                                                <div class="row g-5 row--30 align-items-center">
                                                                    <!-- Start Intructor Area  -->

                                                                    <div class="col-md-6 col-12 mb--20">
                                                                        <label>Nom de famille </label>
                                                                        <input type="text" placeholder="Nom de famille " name="npù">
                                                                    </div>
                                                                    <div class="col-md-6 col-12 mb--10">
                                                                        <label>Prénom *</label>
                                                                        <input type="text" placeholder="Prénom" name="prenom">
                                                                    </div>
                                                                    <div class="col-md-6 col-12 mb--10">
                                                                        <label>Email</label>
                                                                        <input type="email" placeholder="Email" name="email">
                                                                    </div>
                                                                    <div class="col-md-6 col-12 mb--10">
                                                                        <label>Secteur d'activité *</label>
                                                                        <div class="rbt-modern-select bg-transparent height-45">
                                                                            <select class="w-100" name="">
                                                                                <option>Finance</option>
                                                                                <option>Informatique</option>
                                                                                <option>Commmerce</option>
                                                                                <option>Mecanique</option>
                                                                                <option>Droit</option>
                                                                                <option>Histoire</option>
                                                                                <option>Gestion</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mb--20">
                                                                        <div class="plceholder-button text-center mt--10">
                                                                            <a href="{{ route('jobs_detail_link') }}" class="rbt-btn btn-gradient hover-icon-reverse">
                                                                                <span class="icon-reverse-wrapper">
                                                                                    <span class="btn-text">Valider</span>
                                                                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="top-circle-shape"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endfor
                            </tbody>
                        </table>

                    </div>

                </form>
            </div>
            <div class="col-lg-12" style="margin-top: 2%;">
                <nav>
                    <ul class="rbt-pagination justify-content-center">
                        <li><a href="#" aria-label="Previous"><i class="feather-chevron-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#" aria-label="Next"><i class="feather-chevron-right"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

@stop