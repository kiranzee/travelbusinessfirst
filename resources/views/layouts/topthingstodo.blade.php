<div id="topthingsCarousel" class="owl-carousel owl-theme">
    @if ($topthingstodo->isNotEmpty())
        @foreach ($topthingstodo as $tothings)
            <div class="items">
                <a href="javascript:void(0)" class="card attraction-card">
                    <div class="card-img-outer">
                        <img src="{{ asset('uploads/' . $tothings->image) }}" class="img-fluid" alt="London attractions">
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <h5 class="card-head">{{ $tothings->title }}</h5>
                                <p class="fs-14">{{ $tothings->short_description }}</p>
                                <div class="d-flex justify-content-between align-items-end mt-2 mt-md-3">
                                    <div class="d-flex flex-column">
                                        <small class="clr-7e fs-14">Starting From</small>
                                        <h4 class="fw-bold m-0">£{{ number_format($tothings->price, 0) }}</h4>
                                    </div>
                                    <div class="rating-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z" />
                                        </svg>
                                        <span>{{ $tothings->rating }}/5</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    @else
        <p>No popular destinations available at the moment.</p>
    @endif
</div>
