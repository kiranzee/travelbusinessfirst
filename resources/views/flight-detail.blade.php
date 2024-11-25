@php
    use Carbon\Carbon;
@endphp

@include('layouts.header', ['sortedMenu' => $sortedMenu])
<section class="search-top-section">
    <img src="{{ asset('img/flight-search-top-image.webp') }}" class="img-fluid" alt="">
</section>
<!-- for mobile view only Select city Modal start -->



<!-- for mobile view only Select city Modal end -->

<div class="flight-details">
    <div class="container">
        <div class="row">
            @if ($flight->oneway != '1')
                <div class="flight-list">
                    <div class="non-refundable tag">Non-Refundable</div>
                    <div class="row align-items-center">
                        <div class="col-md-10 bdr-bottom border-md-end">
                            <div class="row border-bottom">
                                <div class="col-3 col-md-4">
                                    <div class="info-one al-logo">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset($flight->logo) }}" class="img-fluid"
                                                alt="{{ $flight->airline_name }}">
                                            <div class="flight-dtls">
                                                <p class="airline-name text-truncate">{{ $flight->airline_name }}
                                                </p>
                                                <span class="flt-no"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-9 col-md-8">
                                    <div class="desti-dtls">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="desti-name text-truncate">
                                                    {{ $flight->source_airport_name }}
                                                </div>
                                                <div class="desti-code">
                                                    {{ Carbon::parse($request->dDate)->format('D, d M y') }}
                                                </div>
                                            </div>
                                            <div class="col-4 d-flex justify-content-center">
                                                @if ($flight->route == 'Direct')
                                                    <div class="flt-stops" data-bs-placement="top"
                                                        data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip"
                                                        data-bs-title="{{ $flight->route }}">
                                                        {{ $stops = 'Non-Stop' }}
                                                    @elseif (!empty($flight->route2))
                                                        <div class="flt-stops" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-title="{{ $flight->route2 }}">
                                                            {{ $stops = '+2 Stops' }}
                                                        @elseif (!empty($flight->route3))
                                                            <div class="flt-stops" data-bs-placement="top"
                                                                data-bs-custom-class="custom-tooltip"
                                                                data-bs-toggle="tooltip"
                                                                data-bs-title="{{ $flight->route3 }}">
                                                                {{ $stops = '+3 Stops' }}
                                                            @else
                                                                <div class="flt-stops" data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-title="{{ $flight->route }}">
                                                                    {{ $stops = '+1 Stop' }}
                                                @endif



                                            </div>
                                        </div>
                                        <div class="col-4 text-end">
                                            <div class="desti-name text-truncate">
                                                {{ $flight->destination_airport_name }}
                                            </div>
                                            <div class="desti-code">({{ $flight->destination }})</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 col-md-4">
                                <div class="info-one al-logo">
                                    <!-- <div class="non-refundable">Non-Refundable</div> -->
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset($flight->logo) }}" class="img-fluid"
                                            alt="{{ $flight->airline_name }}">
                                        <div class="flight-dtls">
                                            <p class="airline-name text-truncate">
                                                {{ $flight->airline_name }}
                                            </p>
                                            <span class="flt-no"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-9 col-md-8">
                                <div class="desti-dtls">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="desti-name text-truncate">
                                                {{ $flight->destination_airport_name }}
                                            </div>
                                            <div class="desti-code">
                                                {{ Carbon::parse($request->rDate)->format('D, d M y') }}
                                            </div>
                                        </div>
                                        <div class="col-4 d-flex justify-content-center">
                                            @if ($flight->route == 'Direct')
                                                <div class="flt-stops" data-bs-placement="top"
                                                    data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip"
                                                    data-bs-title="{{ $flight->route }}">
                                                    {{ $stops = 'Non-Stop' }}
                                                @elseif (!empty($flight->route2))
                                                    <div class="flt-stops" data-bs-placement="top"
                                                        data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip"
                                                        data-bs-title="{{ $flight->route2 }}">
                                                        {{ $stops = '+2 Stops' }}
                                                    @elseif (!empty($flight->route3))
                                                        <div class="flt-stops" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-title="{{ $flight->route3 }}">
                                                            {{ $stops = '+3 Stops' }}
                                                        @else
                                                            <div class="flt-stops" data-bs-placement="top"
                                                                data-bs-custom-class="custom-tooltip"
                                                                data-bs-toggle="tooltip"
                                                                data-bs-title="{{ $flight->route }}">
                                                                {{ $stops = '+1 Stop' }}
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-4 text-end">
                                        <div class="desti-name text-truncate">
                                            {{ $flight->source_airport_name }}
                                        </div>
                                        <div class="desti-code">({{ $flight->source }})
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="price-section">
                        <div class="left-seat">Only 4 Seats left</div>
                        <div class="price"><span>£{{ $flight->adult_fare }}</span>
                            <small>Per Person</small>
                        </div>
                    </div>
                    <div id="#sendEnquiry" class="phone-offer">
                        <b>Phone only Offer</b><br>
                        Call our Travel Consultant<br>
                        <span class="fw-bold fs-6"><a href="#"
                                onclick="tel:+4402037276366">02037276360</a></span>
                    </div>
                </div>
                <div class="view-flt-dtls border-top">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-6 col-md-4">

                        </div>
                        <div class="col-6 col-md-6 d-inline-flex justify-content-end">
                            <div class="flt-feature"><img src="{{ asset('img/icons/seat.svg') }}" title="Cabin">
                                <span>
                                    @if ($flight->class == '1')
                                        Economy Class
                                    @elseif($flight->class == '2')
                                        Business Class
                                    @elseif($flight->class == '3')
                                        First Class
                                    @elseif($flight->class == '4')
                                        Premium Economy
                                    @endif
                                </span>
                            </div>
                            <div class="flt-feature"><img src="{{ asset('img/icons/meals.svg') }}" title=" Meal">
                                <span>{{ $flight->meal == '1' ? 'Free Meal' : 'No Meal' }}</span>
                            </div>
                            <div class="flt-feature"><img src="{{ asset('img/icons/baggage.svg') }}"
                                    title="23 KG Baggage">
                                <span>23 KG
                                    Baggage</span>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <!-- oneway flight details  -->
                <div class="flight-list oneway-dtls">
                    <div class="non-refundable tag">Non-Refundable</div>
                    <div class="row align-items-center">
                        <div class="col-md-8 bdr-bottom border-md-end">
                            <div class="row">
                                <div class="col-4 col-md-4 border-md-end">
                                    <div class="info-one al-logo">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset($flight->logo) }}" class="img-fluid"
                                                alt="{{ $flight->airline_name }}">
                                            <div class="flight-dtls">
                                                <p class="airline-name text-truncate">{{ $flight->airline_name }}
                                                </p>
                                                <span class="flt-no">{{ $flight->name }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8 col-md-8">
                                    <div class="desti-dtls">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="desti-name text-truncate">
                                                    {{ $flight->source_airport_name }}
                                                </div>
                                                <div class="desti-code">
                                                    {{ $flight->source }}
                                                </div>
                                            </div>
                                            <div class="col-4 d-flex justify-content-center">
                                                @if ($flight->route == 'Direct')
                                                    <div class="flt-stops" data-bs-placement="top"
                                                        data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip"
                                                        data-bs-title="{{ $flight->route }}">
                                                        {{ $stops = 'Non-Stop' }}
                                                    @elseif (!empty($flight->route2))
                                                        <div class="flt-stops" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-title="{{ $flight->route2 }}">
                                                            {{ $stops = '+2 Stops' }}
                                                        @elseif (!empty($flight->route3))
                                                            <div class="flt-stops" data-bs-placement="top"
                                                                data-bs-custom-class="custom-tooltip"
                                                                data-bs-toggle="tooltip"
                                                                data-bs-title="{{ $flight->route3 }}">
                                                                {{ $stops = '+3 Stops' }}
                                                            @else
                                                                <div class="flt-stops" data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-title="{{ $flight->route }}">
                                                                    {{ $stops = '+1 Stop' }}
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-4 text-end">
                                            <div class="desti-name text-truncate">
                                                {{ $flight->destination_airport_name }}
                                            </div>
                                            <div class="desti-code">({{ $flight->destination }})</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-md-4 d-inline-flex justify-content-between justify-content-md-evenly align-items-center">
                        <div class="price-section">
                            <div class="left-seat">Only 4 Seats left</div>
                            <div class="price"><span>£{{ $flight->adult_fare }}</span>
                                <small>Per Person</small>
                            </div>
                        </div>
                        <div id="#sendEnquiry" class="phone-offer">
                            <b>Phone only Offer</b><br>
                            Call our Travel Consultant<br>
                            <span class="fw-bold fs-6"><a href="#"
                                    onclick="tel:+4402037276366">+4402037276360</a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="view-flt-dtls border-top">
                    <div class="row justify-content-end align-items-center">
                        <div class="col-6 col-md-6 d-inline-flex justify-content-end">
                            <div class="flt-feature"><img src="{{ asset('img/icons/seat.svg') }}" title="Economy">
                                <span>
                                    @if ($flight->class == '1')
                                        Economy Class
                                    @elseif($flight->class == '2')
                                        Business Class
                                    @elseif($flight->class == '3')
                                        First Class
                                    @elseif($flight->class == '4')
                                        Premium Economy
                                    @endif
                                </span>
                            </div>
                            <div class="flt-feature"><img src="{{ asset('img/icons/meals.svg') }}" title=" Meal">
                                <span>{{ $flight->meal == '1' ? 'Free Meal' : 'No Meal' }}</span>
                            </div>
                            <div class="flt-feature"><img src="{{ asset('img/icons/baggage.svg') }}"
                                    title="23 KG Baggage">
                                <span>23 KG
                                    Baggage</span>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- oneway flight details  -->
        @endif
    </div>

</div>
</div>
</div>
</div>

<!-- Submit your Enquiry -->
<section class="section-padding">
    <form method="POST" action="{{ route('thankyou.ticketflightequiry') }}">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card p-4 rounded-4">
                        <h4 class="mb-3">Submit your Enquiry</h4>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label">First Name <span class="mandate">*</span></label>
                                <input class="form-control w-100" type="text" placeholder="First Name" required
                                    name="customer_firstname" value="">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Last Name <span class="mandate">*</span></label>
                                <input class="form-control w-100" type="text" placeholder="Last Name" required
                                    name="customer_lastname" value="">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Email ID <span class="mandate">*</span></label>
                                <input class="form-control w-100" type="email" placeholder="Email ID" required
                                    name="customer_email" value="">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Contact Number <span class="mandate">*</span></label>
                                <input class="form-control w-100" type="phone" placeholder="Contact Number"
                                    required name="customer_phone" value="">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">What is 5 + 2 = ? <span class="mandate">*</span></label>
                                <input class="form-control w-100" type="text" placeholder="What is 5 + 2 = ?">
                            </div>
                            <div class="col-md-6 d-flex align-items-end">
                                <input type="hidden" name="source" id="source"
                                    value="{{ $flight->source_airport_name }}">
                                <input type="hidden" name="destination" id="destination"
                                    value="{{ $flight->destination_airport_name }}">
                                <input type="hidden" name="departureDate" id="departureDate"
                                    value="{{ $request->dDate }}">
                                <input type="hidden" name="returnDate" id="returnDate"
                                    value="{{ $request->rDate }}">
                                <input type="hidden" name="flightId" id="flightId" value="{{ $flight->id }}">
                                <input type="hidden" name="passengers" id="passengers"
                                    value="{{ $request->passengers }}">
                                <input type="hidden" name="classType" id="classType" value="{{ $flight->class }}">
                                <button type="submit" class="btn btn-dark">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="need-halp">
                        <h4 class="mb-3">Need Help?</h4>
                        <p>To know more about timings, date change & cancellations for the
                            flights call our experts
                            now.
                        </p>

                        <div class="d-flex flex-column">
                            <a href="tel:+4402037276360"><img src="{{ asset('img/icons/phone.svg') }}"
                                    alt=""> +44 0203
                                727
                                6360</a>
                            <a href="mailto:info@travelbusinessfirst.co.uk"><img
                                    src="{{ asset('img/icons/message.svg') }}" alt="">
                                info@travelbusinessfirst.co.uk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>

<section class="section-padding bg-light-gray">

    <div class="container">
        <div class="info__box">
            <div class="info__head">
                <div class="info__heading ">
                    <h3>Information</h3>
                </div>
                <div class="info__content">
                    <ol>
                        <li>To find out if the chosen fare and flight are still available,
                            we ask that you get in
                            touch with us.</li>
                        <li>Due to restricted seat availability, an alternative flight
                            option or a higher fare may
                            be provided if the desired fare/flight is not available for the
                            selected dates.</li>
                        <li>When you make your inquiry, availability may not be guaranteed
                            at the quoted fares.
                            Throughout the period when it is promoted, the fare's
                            availability fluctuates often.
                        </li>
                        <li>The shown fare cannot be deleted since there are only a limited
                            number of seats
                            available for a given fare on a given date, and seat
                            availability fluctuates often due
                            to cancellations and other factors.</li>
                        <li>A booking fee of 1% of the total amount is applied to all
                            reservations.</li>
                        <li>Before finalizing any payment arrangement, please double-check
                            the fare and the airport
                            fees, as they differ depending on the airline and the
                            destination.</li>
                        <li>For additional information about cancellations or date
                            adjustments, please get in touch
                            with us.</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Our Flight Partners -->
<section class="section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="mb-3 text-center our-partners">
                    <h4 class="fw-bold">Our Flight Partners</h4>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            @include('layouts.flightpartner', ['flightpartner' => $flightpartner])
        </div>
    </div>
</section>


<!-- Explore More Links -->
<section class="explore-more">

    @include('footernav', ['popularDestinations' => $popularDestinations])

</section>



<!-- Footer Section -->
@include('layouts.footer')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->

<!-- Owl carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"
    integrity="sha512-HWlJyU4ut5HkEj0QsK/IxBCY55n5ZpskyjVlAoV9Z7XQwwkqXoYdCIC93/htL3Gu5H3R4an/S0h2NXfbZk3g7w=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<!-- custom js -->
<script src="{{ asset('js/custom.js') }}"></script>
<script>
    $(window).on('load', function() {
        // Hide the loading animation
        $('#loadingScreen').fadeOut(500, function() {
            // Show the page content once the loading animation is done
            $('#pageContent').fadeIn(500);
        });
    });
</script>
</body>

</html>
