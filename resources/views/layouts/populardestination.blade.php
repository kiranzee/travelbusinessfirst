<div id="popularCarousel" class="owl-carousel owl-theme">
    @if ($popularFlight->isNotEmpty())
        @foreach ($popularFlight->slice(0, 21)->chunk(3) as $chunkedDestinations)
            <div class="item">
                @foreach ($chunkedDestinations as $destination)
                    <div class="card popular-desti-card">
                        <div class="card-img-outer">
                            <img src="{{ asset('uploads/' . $destination->title . '/' . $destination->image) }}"
                                class="img-fluid" alt="{{ $destination->title }}">
                            <h2 class="desti-name">{{ $destination->title }}</h2>
                            <div class="start-from-text"><sup>*</sup>PRICE STARTING FROM</div>
                            <div class="overlay-bottom"></div>
                        </div>
                        <div class="card-body">
                            <div class="row g-1 align-items-center">
                                <div class="col col-md border-end me-2">
                                    <small>FIRST CLASS</small>
                                    <p class="mb-0 fs-18 fw-bold">
                                        £{{ number_format($destination->first_class_price, 0) }}
                                    </p>
                                </div>
                                <div class="col col-md border-end me-2">
                                    <small>BUS. CLASS</small>
                                    <p class="mb-0 fs-18 fw-bold">
                                        £{{ number_format($destination->business_class_price, 0) }}</p>
                                </div>
                                <div class="col col-md border-end me-2">
                                    <small>PRE. ECON.</small>
                                    <p class="mb-0 fs-18 fw-bold">
                                        £{{ number_format($destination->premier_economy_price, 0) }}</p>
                                </div>
                                <div class="col col-md">
                                    <small>ECONOMY</small>
                                    <p class="mb-0 fs-18 fw-bold">£{{ number_format($destination->economy_price, 0) }}
                                    </p>
                                </div>
                                <div class="col col-md-3 d-inline-flex justify-content-end">
                                    <button
                                        onclick="window.location.href='{{ route('flight-city-search.citySearch', ['cityname' => $destination->link_name]) }}'"
                                        class="btn btn-view-details mt-2 mt-sm-0">
                                        <span class="d-none d-md-inline-block">View</span> Detail
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    @else
        <p>No popular destinations available at the moment.</p>
    @endif

</div>
