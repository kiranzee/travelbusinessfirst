<div id="attractionCarousel" class="owl-carousel owl-theme">
    @if ($bestofactivity->isNotEmpty())
        @foreach ($bestofactivity as $bestofactivity)
            <div class="item">
                <div class="card attraction-card">
                    <div class="card card-img-outer">
                        <img src="{{ asset('uploads/' . $bestofactivity->image) }}" class="img-fluid"
                            alt="{{ $bestofactivity->image_seo }}">
                        <div class="rating">
                            <div class="stars d-flex align-items-center">
                                <!-- Loop through the rating and display filled stars -->
                                @for ($i = 1; $i <= $bestofactivity->rating; $i++)
                                    @if ($i <= $bestofactivity->rating)
                                        <!-- Filled Star SVG -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z">
                                            </path>
                                        </svg>
                                    @else
                                        <!-- Empty Star SVG (optional, if you want to show the outline of the remaining stars) -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            viewBox="0 0 24 24" fill="none" stroke="black">
                                            <path
                                                d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z">
                                            </path>
                                        </svg>
                                    @endif
                                @endfor
                            </div>
                            <small class="">({{ $bestofactivity->rating_count }})</small>
                        </div>
                        <a href="{{ url('/holiday-deals/' . $bestofactivity->title . '/' . $bestofactivity->id) }}"
                            class="btn-on-hover view-details">View Details</a>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <h5 class="card-head">{{ $bestofactivity->title }}
                                </h5>
                                <div class="list-check">
                                    <div>
                                        <svg width="14" height="14" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                            <path
                                                d="M24 6.278l-11.16 12.722-6.84-6 1.319-1.49 5.341 4.686 9.865-11.196 1.475 1.278zm-22.681 5.232l6.835 6.01-1.314 1.48-6.84-6 1.319-1.49zm9.278.218l5.921-6.728 1.482 1.285-5.921 6.756-1.482-1.313z" />
                                        </svg>
                                        {{ $bestofactivity->package_heading }}
                                    </div>
                                    <div>
                                        @if ($bestofactivity->cancellation)
                                            <svg width="14" height="14" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                                                clip-rule="evenodd">
                                                <path
                                                    d="M24 6.278l-11.16 12.722-6.84-6 1.319-1.49 5.341 4.686 9.865-11.196 1.475 1.278zm-22.681 5.232l6.835 6.01-1.314 1.48-6.84-6 1.319-1.49zm9.278.218l5.921-6.728 1.482 1.285-5.921 6.756-1.482-1.313z" />
                                            </svg>
                                            Free Cancellation
                                        @else
                                            <svg width="14" height="14" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                                                clip-rule="evenodd">
                                                <path
                                                    d="M18.36 6.64l-1.41-1.41L12 10.17 7.05 5.23 5.64 6.64 10.59 11.59 5.64 16.54l1.41 1.41L12 13.41l4.95 4.95 1.41-1.41-4.95-4.95 4.95-4.95z" />
                                            </svg>
                                            No Free Cancellation
                                        @endif

                                    </div>

                                </div>
                                <div class="d-flex align-items-baseline mt-2 mt-md-3">
                                    <small class="clr-7e fs-14">From</small>
                                    <h4 class="fw-bold m-0 mx-2">£{{ number_format($bestofactivity->price, 0) }}</h4>
                                    <small class="clr-7e fs-14">Per Group</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No Best Of Activities available at the moment.</p>
    @endif
</div>
