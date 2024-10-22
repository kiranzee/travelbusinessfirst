<div id="exploreCarousel" class="owl-carousel owl-theme">
    @if ($exploredestination->isNotEmpty())
        @foreach ($exploredestination as $explore)
            <div class="item">
                <a href="javascript:void(0)" class="card explore-card">
                    <div class="card-img-outer">
                        <img src="{{ asset('uploads/' . $explore->image) }}" class="img-fluid"
                            alt="{{ $explore->image_seo }}">
                        <h1 class="explore-head">{{ $explore->title }}</h1>
                        <div class="explore-text">
                            <small class="">Starting from</small>
                            <h4 class="fw-bold m-0">£{{ number_format($explore->price, 0) }}</h4>
                        </div>
                        <div class="overlay-top"></div>
                    </div>
                    <div class="card-design-1"></div>
                    <div class="card-design-2"></div>
                </a>
            </div>
        @endforeach
    @else
        <p>No Explore destinations available at the moment.</p>
    @endif
</div>
