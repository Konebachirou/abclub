@extends('users.user_dashboard.layouts.master')
@section('content')
<div class="col-lg-9">
    <!-- Start Instructor Profile  -->
    <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
        <div class="content">
            <div class="section-title">
                <h4 class="rbt-title-style-3">Enrolled Jobs</h4>
            </div>
            <div class="row g-5">
                <!-- @for($i = 0; $i < 4; $i++) -->
                <div class="cart-table table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="pro-title">Entreprise</th>
                                <th class="pro-title">Poste</th>
                                <!-- <th class="pro-price">Localisation</th> -->
                                <!-- <th class="pro-quantity">pôle</th> -->
                                <th class="pro-quantity">Type</th>
                                <th class="pro-subtotal">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for($i=0; $i < 5; $i++) <tr>
                                <td class="pro-thumbnail"><a href="#"><img src="assets/images/product/1.png" alt="Product"></a></td>
                                <td class="pro-title"><a href="#">Responsable marketing</a></td>
                                <!-- <td class="pro-title"><a href="#">Canada</a></td> -->
                                <!-- <td class="pro-price"><span>Réseau</span></td> -->
                                <td class="pro-price"><span>STAGE</span></td>
                                <td class="pro-addtocart">
                                    <a href="{{ route('jobs_detail_link') }}" class="rbt-btn btn-gradient">Voir Plus</a>
                                </td>
                                </td>
                                </tr>
                                @endfor
                        </tbody>
                    </table>

                </div>
                <!-- @endfor -->

            </div>
        </div>
    </div>
</div>

@stop