<div>
    <div>

        <div class="col-lg-12">
            <form action="#">
                <input type="text" placeholder="Que cherchez-vous?" wire:model.live="search">
                <!-- <div class="submit-btn">
                    <a class="rbt-btn btn-gradient btn-md" href="#">Search</a>
                </div> -->
            </form>
        </div>
    </div>

    <div class="rbt-separator-mid">
        <hr class="rbt-separator m-0">
    </div>
    <div class="row g-4 pt--30 pb--60">

        <!-- Start Single Card  -->
        @forelse ($events as $event)
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="rbt-card variation-01 rbt-hover">
                    <div class="rbt-card-img">
                        <a href="{{ route('event_details_link', $event->title) }}">
                            <img src="{{ $event->illustrationUrl() }}" alt="{{ $event->title }}">
                        </a>
                    </div>
                    <div class="rbt-card-body">
                        <h5 class="rbt-card-title"><a
                                href="{{ route('event_details_link', $event->title) }}">{{ $event->title }}</a>
                        </h5>
                        <div class="rbt-review">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="rating-count"> Evenement</span>
                        </div>
                        <div class="rbt-card-bottom">
                            <div class="rbt-price">
                                <span class="current-price">{{ date('d M \, Y', strtotime($event->start_date)) }}</span>
                                <span class="current-price">{{ date('d M \, Y', strtotime($event->start_date)) }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
        @endforelse
        @if (!is_array($events) && count($events) > 0)
            {{ $events->links() }}
        @endif

        <!-- End Single Card  -->
    </div>
    <div class="rbt-separator-mid">
        <hr class="rbt-separator m-0">
    </div>
    <div class="row g-4 pt--30 pb--60">
        <!-- Start Single Card  -->
        @forelse ($reports as $report)
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="rbt-card variation-01 rbt-hover">
                    <div class="rbt-card-img">
                        <a href="{{ route('news_details_link', $report->title) }}">
                            <img src="{{ $report->illustrationUrl() }}" alt="{{ $report->title }}">
                        </a>
                    </div>
                    <div class="rbt-card-body">
                        <h5 class="rbt-card-title"><a
                                href="{{ route('news_details_link', $report->title) }}">{{ $report->title }}</a>
                        </h5>
                        <div class="rbt-review">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="rating-count"> News</span>
                        </div>
                        <div class="rbt-card-bottom">
                            <div class="rbt-price">
                                <span class="current-price">
                                    {{ date('d M \, Y', strtotime($report->created_at)) }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @empty
        @endforelse
        @if (!is_array($reports) && count($reports) > 0)
            {{ $reports->links() }}
        @endif


        <!-- End Single Card  -->
    </div>
</div>
