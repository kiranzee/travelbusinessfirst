@php
    use Carbon\Carbon;
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Details - Travel Business First</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.3/assets/owl.theme.default.min.css"
        integrity="sha512-0AyL4lDHb+ytzn5Ygvvie+ThlNNVAoEQ6e/ZjP8Uoi+goYM1Wzb1VS3vga3ORrLXtyxflJ41bm6v1WY8m9gpdA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body id="pageContent">
    @include('layouts.header', ['menu' => $menu])
    <section class="search-top-section">
        <img src="{{ asset('img/flight-search-top-image.webp') }}" class="img-fluid" alt="">
    </section>
    <!-- for mobile view only Select city Modal start -->



    <!-- for mobile view only Select city Modal end -->

    <div class="flight-details">
        <div class="container">
            <div class="row">
                <div class="flight-list">
                    <div class="non-refundable tag">Non-Refundable</div>
                    <div class="row align-items-center">
                        <div class="col-md-10 bdr-bottom border-md-end">
                            <div class="row border-bottom">
                                <div class="col-4 col-md-4">
                                    <div class="info-one al-logo">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset($flight->logo) }}" class="img-fluid"
                                                alt="{{ $flight->airline_name }}">
                                            <div class="flight-dtls">
                                                <p class="airline-name text-truncate">{{ $flight->airline_name }}</p>
                                                <span class="flt-no"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8 col-md-8">
                                    <div class="desti-dtls">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="desti-name text-truncate">{{ $flight->source_airport_name }}
                                                </div>
                                                <div class="desti-code">
                                                    {{ Carbon::parse($request->dDate)->format('D, d M y') }}</div>
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
                                                {{ $flight->destination_airport_name }} </div>
                                            <div class="desti-code">({{ $flight->destination }})</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 col-md-4">
                                <div class="info-one al-logo">
                                    <!-- <div class="non-refundable">Non-Refundable</div> -->
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset($flight->logo) }}" class="img-fluid"
                                            alt="{{ $flight->airline_name }}">
                                        <div class="flight-dtls">
                                            <p class="airline-name text-truncate">{{ $flight->airline_name }}</p>
                                            <span class="flt-no"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8 col-md-8">
                                <div class="desti-dtls">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="desti-name text-truncate">
                                                {{ $flight->destination_airport_name }}</div>
                                            <div class="desti-code">
                                                {{ Carbon::parse($request->rDate)->format('D, d M y') }}</div>
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
                                        <div class="desti-name text-truncate">{{ $flight->source_airport_name }}
                                        </div>
                                        <div class="desti-code">({{ $flight->source }})</div>
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
                                    <input class="form-control w-100" type="text" placeholder="First Name"
                                        required name="customer_firstname" value="Kiran">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Last Name <span class="mandate">*</span></label>
                                    <input class="form-control w-100" type="text" placeholder="Last Name" required
                                        name="customer_lastname" value="Gadipelli">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Email ID <span class="mandate">*</span></label>
                                    <input class="form-control w-100" type="email" placeholder="Email ID" required
                                        name="customer_email" value="kiran@kirang.com">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Contact Number <span class="mandate">*</span></label>
                                    <input class="form-control w-100" type="phone" placeholder="Contact Number"
                                        required name="customer_phone" value="07442249488">
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
                                    <input type="hidden" name="flightId" id="flightId"
                                        value="{{ $flight->id }}">
                                    <input type="hidden" name="passengers" id="passengers"
                                        value="{{ $request->passengers }}">
                                    <input type="hidden" name="classType" id="classType"
                                        value="{{ $flight->class }}">
                                    <button type="submit" class="btn btn-dark">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="need-halp">
                            <h4 class="mb-3">Need Help?</h4>
                            <p>To know more about timings, date change & cancellations for the flights call our experts
                                now.
                            </p>

                            <div class="d-flex flex-column">
                                <a href="tel:+4402037276360"><img src="{{ asset('img/icons/phone.svg') }}"
                                        alt=""> + 0203 727
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
        {{-- <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="fw-bold mb-3">Flights to Abu Dhabi</h3>
                    <div class="description">
                        <p>The Middle East has been transformed over the years and has now become a must see
                            destination. Abu Dhabi is the capital of the United Arab Emirates of which Dubai and Sharjah
                            is also a part. You can save upto 50% by booking cheap flights to the major cities of the
                            UAE – Dubai, Sharjah and Abu Dhabi. We are specialists in selling discounted, cheap flights
                            to Abu Dhabi in Business Class, First Class, Premium Economy and Economy with lowest fare
                            and unbeatable price. As well as great fares for this year, we also have special fares for
                            2018. Book your flights to Abu Dhabi for 2018 now to be certain of getting the cheapest fare
                            now.</p>
                        <p>We are confident that we offer cheap flights to Abu Dhabi at unbelievable discount. We
                            provide a best price, best service promise. But should you happen to find the same flight at
                            a cheaper fare somewhere else, we will happily match it whether you are flying First class
                            to Abu Dhabi, Business class flight to Abu Dhabi or economy flights. Our experienced travel
                            experts are available to take your call and help book your flights to Abu Dhabi. Our offers
                            and fares are always changing. Why not sign-up with our newsletter to get a heads up on the
                            latest offers. As well as direct flights with leading airlines such as Etihad Airways and
                            Emirates you also have cheap flights with British Airways and Virgin Atlantic. There a
                            number of indirect flight options too with short flight times with airlines such as Oman
                            Air, Saudi Arabia and Qatar.</p>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="container">
            <div class="info__box">
                <div class="info__head">
                    <div class="info__heading ">
                        <h3>Information</h3>
                    </div>
                    <div class="info__content">
                        <ol>
                            <li>To find out if the chosen fare and flight are still available, we ask that you get in
                                touch with us.</li>
                            <li>Due to restricted seat availability, an alternative flight option or a higher fare may
                                be provided if the desired fare/flight is not available for the selected dates.</li>
                            <li>When you make your inquiry, availability may not be guaranteed at the quoted fares.
                                Throughout the period when it is promoted, the fare's availability fluctuates often.
                            </li>
                            <li>The shown fare cannot be deleted since there are only a limited number of seats
                                available for a given fare on a given date, and seat availability fluctuates often due
                                to cancellations and other factors.</li>
                            <li>A booking fee of 1% of the total amount is applied to all reservations.</li>
                            <li>Before finalizing any payment arrangement, please double-check the fare and the airport
                                fees, as they differ depending on the airline and the destination.</li>
                            <li>For additional information about cancellations or date adjustments, please get in touch
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
        <div class="container">
            <div class="mt-2 mt-md-3 mb-3 mb-md-5">
                <h3 class="mb-2 text-white">Explore More Links</h3>
            </div>
            <div class="nav nav-tabs" id="exploreTab" role="tablist">
                <button class="nav-link active" id="cityFlight-tab" data-bs-toggle="tab"
                    data-bs-target="#cityFlight" type="button" role="tab" aria-controls="cityFlight"
                    aria-selected="true">Flight To Cities</button>

            </div>
            <div class="tab-content explore-contents" id="exploreTabContent">
                @include('footernav', ['popularDestinations' => $popularDestinations])
            </div>
        </div>
    </section>

    <!-- mobile bottom drawer -->
    <div class="bottom-drawer">
        <div class="m-bottom-menu">
            <a href="javascript:void(0)" class="m-footer-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                    <path
                        d="M0 12l11 3.1 7-8.1-8.156 5.672-4.312-1.202 15.362-7.68-3.974 14.57-3.75-3.339-2.17 2.925v-.769l-2-.56v7.383l4.473-6.031 4.527 4.031 6-22z" />
                </svg>
                <span>Enquiry</span>
            </a>
            <a href="javascript:void(0)" class="m-footer-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                    <path
                        d="M12 2c2.757 0 5 2.243 5 5.001 0 2.756-2.243 5-5 5s-5-2.244-5-5c0-2.758 2.243-5.001 5-5.001zm0-2c-3.866 0-7 3.134-7 7.001 0 3.865 3.134 7 7 7s7-3.135 7-7c0-3.867-3.134-7.001-7-7.001zm6.369 13.353c-.497.498-1.057.931-1.658 1.302 2.872 1.874 4.378 5.083 4.972 7.346h-19.387c.572-2.29 2.058-5.503 4.973-7.358-.603-.374-1.162-.811-1.658-1.312-4.258 3.072-5.611 8.506-5.611 10.669h24c0-2.142-1.44-7.557-5.631-10.647z" />
                </svg>
                <span>My Account</span>
            </a>
        </div>
        <div class="d-inline-flex justify-content-end">
            <img class="img-fluid me-3" src="img/iata.png" alt="">
            <img class="img-fluid" src="img/NoPath.png" alt="">
        </div>
    </div>

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
