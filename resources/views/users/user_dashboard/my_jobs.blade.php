@extends('users.user_dashboard.layouts.master')
@section('content')
    <div class="col-lg-9">
        <!-- Start Instructor Profile  -->
        <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
            <div class="content">
                <div class="section-title">
                    <h4 class="rbt-title-style-3">Mes Jobs</h4>
                </div>
                <div class="row g-5">

                    <div class="cart-table table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="pro-title">Entreprise</th>
                                    <th class="pro-quantity">Domaine</th>
                                    <th class="pro-title">Poste</th>
                                    <th class="pro-price">Localisation</th>
                                    <th class="pro-quantity">Type</th>
                                    <th class="pro-subtotal">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($userJobs as $job)
                                    <tr>
                                        <td class="pro-thumbnail"><a href="{{ route('jobs_detail_link', $job->slug) }}"><img
                                                    src="{{ $job->imageUrl() }}" alt="{{ $job->company }}"></a></td>
                                        <td class="pro-price"><span>{{ $job->domain }}</span></td>
                                        <td class="pro-title"><a
                                                href="{ route('jobs_detail_link', $job->slug) }}">{{ $job->job_title }}</a>
                                        </td>
                                        <td class="pro-title"><a
                                                href="{ route('jobs_detail_link', $job->slug) }}">{{ $job->location }}</a>
                                        </td>
                                        <td class="pro-price"><span>{{ $job->type }}</span></td>
                                        <td class="pro-addtocart">
                                            <a href="{{ route('jobs_detail_link', $job->slug) }}"
                                                class="rbt-btn btn-gradient">Voir Plus</a>
                                        </td>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $userJobs->links() }}

                    </div>


                </div>
            </div>
        </div>
    </div>

@stop
