@extends('users.layouts.app')
@section('titre', "Jobs - African Business Club")
@section('content')
<div class="slider-area rbt-banner-5 height-450 bg_image" style="background-image: url(assets/images/bg/bgjobs.jpg)" data-gradient-overlay="5">
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
<div class="rbt-elements-area bg-color-white " style="margin-top: 4%;">
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
<div class="container" style="margin-top: 2%;">
    <div class="row">
        <div class="col-sm-2">
            <p class="rbt-checkbox-wrapper">
                <input id="free" name="free" type="checkbox" value="yes">
                <label for="free">FREELANCE</label>
            </p>
        </div>
        <div class="col-sm-2">
            <p class="rbt-checkbox-wrapper">
                <input id="cdi" name="cdi" type="checkbox" value="yes">
                <label for="cdi">CDI</label>
            </p>
        </div>
        <div class="col-sm-2">
            <p class="rbt-checkbox-wrapper">
                <input id="cdd" name="cdd" type="checkbox" value="yes">
                <label for="cdd">CDD</label>
            </p>
        </div>
        <div class="col-sm-2">
            <p class="rbt-checkbox-wrapper">
                <input id="alte" name="alte" type="checkbox" value="yes">
                <label for="alte">Alternance</label>
            </p>
        </div>
        <div class="col-sm-2">
            <p class="rbt-checkbox-wrapper">
                <input id="stage" name="stage" type="checkbox" value="yes">
                <label for="stage">Stage</label>
            </p>
        </div>
        <div class="col-sm-2">
            <p class="rbt-checkbox-wrapper">
                <input id="interim" name="interim" type="checkbox" value="yes">
                <label for="interim">Intérime</label>
            </p>
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
                                    <th class="pro-title">Localisation</th>
                                    <th class="pro-title">Type</th>
                                    <th class="pro-subtotal">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for($i=0; $i < 5; $i++) <tr>
                                    <td class="pro-thumbnail text-center" style="text-align: center; vertical-align: middle;"><img src="assets/images/product/1.png" alt="Product"></td>
                                    <td class="pro-title text-center">Responsable marketing</td>
                                    <td class="pro-title text-center"><i class="feather-map-pin"></i> Canada</td>
                                    <!-- <td class="pro-price"><span>Réseau</span></td> -->
                                    <td class="pro-price text-center"><span>STAGE</span></td>
                                    <td class="pro-addtocart align-items-center">
                                        <a href="{{ route('jobs_detail_link') }}" class="rbt-btn btn-gradient text-center"><i class="feather-eye"></i></a>
                                    </td>

                                    </tr>

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