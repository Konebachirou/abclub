<div>
    <!-- Start Brand Area  -->
   <div class="rbt-brand-area bg-color-secondary-alt" style="padding-top: 5%; padding-bottom: 5%;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="section-title text-center mb--40">
                        <h4 class="small-title w-600">Ils nous font confiance</h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <ul class="brand-list brand-style-1">
                        @foreach ($partners as $partner)
                            <li><a href="{{$partner->website}}"><img src="{{ $partner->logoUrl() }}" alt="{{$partner->name}}"></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>  
    <!-- End Brand Area  -->
</div>
