<div>
    <div class="scroll-animation-wrapper no-overlay mt--50">
        <div class="scroll-animation scroll-right-left">
            @foreach ($partners as $partner)
                <!-- Start Single Testimonial  -->
                <div class="single-column-20 bg-theme-gradient-odd">
                    <div class="rbt-testimonial-box style-2">
                        <div class="inner">
                            <div class="icons">
                                <img src="{{ $partner->photoUrl }}" alt="{{ $partner->name }}">
                            </div>
                            <div class="description">
                                <p class="subtitle-3">{{ $partner->description }}.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->
            @endforeach


        </div>
    </div>
</div>
