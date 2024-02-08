@extends('users.user_dashboard.layouts.master')
@section('content')
    <div class="col-lg-9">
        <!-- Start Instructor Profile  -->
        <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
            <div class="content">
                <div class="section-title">
                    <h4 class="rbt-title-style-3">Mes Events</h4>
                </div>
                <div class="row g-5">
                    @foreach ($userEvents as $event)
                        <!-- Start Single Event  -->
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="rbt-card card-list-2 event-list-card variation-01 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="{{ route('event_details_link', $event->title) }}">
                                        <img src="{{ $event->illustrationUrl() }}" alt="{{ $event->title }}">
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <ul class="rbt-meta">
                                        <li><i class="feather-map-pin"></i>{!! $event->lieu !!}</li><br>
                                        <li><span><i
                                                    class="feather-calendar"></i>{{ date('d M \, Y', strtotime($event->start_date)) }}</span>
                                            <span style="padding-left: 10px;"><i
                                                    class="feather-clock"></i>{{ date('H:i ', strtotime($event->start_times)) }}
                                                - {{ date('H:i ', strtotime($event->end_times)) }}
                                        </li>
                                        </span>
                                    </ul>
                                    <h4 class="rbt-card-title"><a
                                            href="{{ route('event_details_link', $event->title) }}">{{ $event->title }}</a>
                                    </h4>
                                    <div class="read-more-btn">
                                        <a class="rbt-btn btn-border hover-icon-reverse btn-sm radius-round"
                                            href="{{ route('event_details_link', $event->title) }}">
                                            <span class="icon-reverse-wrapper">
                                                <span class="btn-text">Get Ticket</span>
                                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Event  -->
                    @endforeach
                    {{ $userEvents->links() }}
                </div>
            </div>
        </div>
    </div>

@stop
