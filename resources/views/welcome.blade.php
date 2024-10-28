<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Business First</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- fonts -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@400..900;400..900&display=swap"
        rel="stylesheet"> -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.3/assets/owl.theme.default.min.css"
        integrity="sha512-0AyL4lDHb+ytzn5Ygvvie+ThlNNVAoEQ6e/ZjP8Uoi+goYM1Wzb1VS3vga3ORrLXtyxflJ41bm6v1WY8m9gpdA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="{{ asset('css/mobiscroll.jquery.min.css') }}" rel="stylesheet" />

</head>

<body id="pageContent">
    @include('layouts.header', ['menu' => $menu])


    <section class="top-section">
        @include('layouts.herosection', ['herosection' => $herosection])
    </section>

    <!-- for mobile view only Select city Modal start -->
    <div id="onwardModal" class="slide-modal">
        <div class="slide-content">
            <div class="search-control">
                <div class="input-group">
                    <span class="input-group-text go-back">
                        <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" width="20"
                            height="20" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="m9.474 5.209s-4.501 4.505-6.254 6.259c-.147.146-.22.338-.22.53s.073.384.22.53c1.752 1.754 6.252 6.257 6.252 6.257.145.145.336.217.527.217.191-.001.383-.074.53-.221.293-.293.294-.766.004-1.057l-4.976-4.976h14.692c.414 0 .75-.336.75-.75s-.336-.75-.75-.75h-14.692l4.978-4.979c.289-.289.287-.761-.006-1.054-.147-.147-.339-.221-.53-.221-.191-.001-.38.071-.525.215z"
                                fill-rule="nonzero" />
                        </svg>
                    </span>
                    <input type="text" class="form-control" id="fromdestm" placeholder="Enter City / Country"
                        aria-label="Enter City / Country">
                    <span class="input-group-text">
                        <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" width="20"
                            height="20" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="m15.97 17.031c-1.479 1.238-3.384 1.985-5.461 1.985-4.697 0-8.509-3.812-8.509-8.508s3.812-8.508 8.509-8.508c4.695 0 8.508 3.812 8.508 8.508 0 2.078-.747 3.984-1.985 5.461l4.749 4.75c.146.146.219.338.219.531 0 .587-.537.75-.75.75-.192 0-.384-.073-.531-.22zm-5.461-13.53c-3.868 0-7.007 3.14-7.007 7.007s3.139 7.007 7.007 7.007c3.866 0 7.007-3.14 7.007-7.007s-3.141-7.007-7.007-7.007z"
                                fill-rule="nonzero" />
                        </svg>
                    </span>
                </div>
            </div>
            <div class="search-list">
                <h6 class="mb-3">Top Searches</h6>
                <ul>
                    <li>

                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div id="returnModal" class="slide-modal">
        <div class="slide-content">
            <div class="slide-content">
                <div class="search-control">
                    <div class="input-group">
                        <span class="input-group-text go-back">
                            <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" width="20"
                                height="20" stroke-miterlimit="2" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m9.474 5.209s-4.501 4.505-6.254 6.259c-.147.146-.22.338-.22.53s.073.384.22.53c1.752 1.754 6.252 6.257 6.252 6.257.145.145.336.217.527.217.191-.001.383-.074.53-.221.293-.293.294-.766.004-1.057l-4.976-4.976h14.692c.414 0 .75-.336.75-.75s-.336-.75-.75-.75h-14.692l4.978-4.979c.289-.289.287-.761-.006-1.054-.147-.147-.339-.221-.53-.221-.191-.001-.38.071-.525.215z"
                                    fill-rule="nonzero" />
                            </svg>
                        </span>
                        <input type="text" class="form-control" id="todestm" placeholder="Enter City / Country"
                            aria-label="Enter City / Country">
                        <span class="input-group-text">
                            <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" width="20"
                                height="20" stroke-miterlimit="2" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m15.97 17.031c-1.479 1.238-3.384 1.985-5.461 1.985-4.697 0-8.509-3.812-8.509-8.508s3.812-8.508 8.509-8.508c4.695 0 8.508 3.812 8.508 8.508 0 2.078-.747 3.984-1.985 5.461l4.749 4.75c.146.146.219.338.219.531 0 .587-.537.75-.75.75-.192 0-.384-.073-.531-.22zm-5.461-13.53c-3.868 0-7.007 3.14-7.007 7.007s3.139 7.007 7.007 7.007c3.866 0 7.007-3.14 7.007-7.007s-3.141-7.007-7.007-7.007z"
                                    fill-rule="nonzero" />
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="search-list">
                    <h6 class="mb-3">Top Searches</h6>
                    <ul>
                        <li>

                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- for mobile view only Select city Modal end -->

    <!-- Flight Search section -->
    <section class="container">
        <form id="flightSearch">
            <div class="search-block">
                <h2 class="fw-bold mb-4">Flights from London, United Kingdom</h2>
                <div class="row g-3 mb-3">
                    <div class="col-md-10">
                        <div class="row g-3">
                            <div class="col-5 col-md-2 order-1">
                                <div class="dropdown tbf-dropdown">
                                    <div class="btn custom-filter" for="" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <span id="routeLabel">Round Trip</span>
                                        <svg class="arrow-down" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" />
                                        </svg>
                                    </div>


                                    <ul class="dropdown-menu">
                                        <li class="input-group-text">
                                            <input class="form-check-input" id="oneway" type="checkbox"
                                                name="route" value="One way" aria-label="">
                                            <label for="oneway">One Way</label>
                                        </li>
                                        <li class="input-group-text">
                                            <input class="form-check-input" id="roundtrip" type="checkbox" checked
                                                name="route" value="Round Trip" aria-label="">
                                            <label for="roundtrip">Round Trip</label>
                                        </li>
                                        {{-- <li class="input-group-text">
                                        <input class="form-check-input" id="multicity" type="checkbox" value=""
                                            aria-label="">
                                        <label for="multicity">Multi City</label>
                                    </li> --}}
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-5 order-3 order-md-2">
                                <div class="pax-selection" id="passengerTrigger">
                                    <div class="btn custom-filter ext-pd-left" for=""
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <img class="icons-left" src="{{ asset('img/icons/user_icon.svg') }}"
                                            alt="">
                                        <span class="me-1 me-md-3" id="passengers">2 Adult</span> <span
                                            class="px-1 px-md-3">●</span>
                                        <span id="classtype">Business Class</span>
                                        <svg class="arrow-down" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" />
                                        </svg>
                                    </div>
                                    <div class="add-travelers" id="passengerInput">
                                        <div class="row justify-content-between mb-3">
                                            <div class="col-5">
                                                <p>Adults</p>
                                                <small class="clr-7e">Above 12 years</small>
                                            </div>
                                            <div class="col-4">
                                                <div class="pax-number">
                                                    <input type="text" class="form-control" placeholder="2"
                                                        id="adultcount" value="2">
                                                    <div class="control-btn">
                                                        <button type="button" class="plus">
                                                            <svg clip-rule="evenodd" fill-rule="evenodd"
                                                                stroke-linejoin="round" stroke-miterlimit="2"
                                                                width="10" height="10" viewBox="0 0 24 24"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M24 10h-10v-10h-4v10h-10v4h10v10h4v-10h10z" />
                                                            </svg>
                                                        </button>
                                                        <button type="button" class="minus">
                                                            <svg clip-rule="evenodd" fill-rule="evenodd"
                                                                stroke-linejoin="round" stroke-miterlimit="2"
                                                                width="10" height="10" viewBox="0 0 24 24"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M0 10h24v4h-24z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-between mb-3">
                                            <div class="col-5">
                                                <p>Children</p>
                                                <small class="clr-7e">2 - 12 years</small>
                                            </div>
                                            <div class="col-4">
                                                <div class="pax-number">
                                                    <input type="text" class="form-control" placeholder="0"
                                                        id="childcount" value="0">
                                                    <div class="control-btn">
                                                        <button type="button" class="plus">
                                                            <svg clip-rule="evenodd" fill-rule="evenodd"
                                                                stroke-linejoin="round" stroke-miterlimit="2"
                                                                width="10" height="10" viewBox="0 0 24 24"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M24 10h-10v-10h-4v10h-10v4h10v10h4v-10h10z" />
                                                            </svg>
                                                        </button>
                                                        <button type="button" class="minus">
                                                            <svg clip-rule="evenodd" fill-rule="evenodd"
                                                                stroke-linejoin="round" stroke-miterlimit="2"
                                                                width="10" height="10" viewBox="0 0 24 24"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M0 10h24v4h-24z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-between mb-3">
                                            <div class="col-5">
                                                <p>Infant</p>
                                                <small class="clr-7e">Below 2 years</small>
                                            </div>
                                            <div class="col-4">
                                                <div class="pax-number">
                                                    <input type="text" class="form-control" placeholder="0"
                                                        id="infantcount" value="0">
                                                    <div class="control-btn">
                                                        <button type="button" class="plus">
                                                            <svg clip-rule="evenodd" fill-rule="evenodd"
                                                                stroke-linejoin="round" stroke-miterlimit="2"
                                                                width="10" height="10" viewBox="0 0 24 24"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M24 10h-10v-10h-4v10h-10v4h10v10h4v-10h10z" />
                                                            </svg>
                                                        </button>
                                                        <button type="button" class="minus">
                                                            <svg clip-rule="evenodd" fill-rule="evenodd"
                                                                stroke-linejoin="round" stroke-miterlimit="2"
                                                                width="10" height="10" viewBox="0 0 24 24"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M0 10h24v4h-24z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="cabin-class">
                                            <h6 class="fw-bold">Select Cabin Class</h6>
                                            <ul>
                                                <li class="input-group-text">
                                                    <input class="form-check-input m-0 me-2" id="premiumEco"
                                                        type="checkbox" name="cabin_class" value="First Class"
                                                        aria-label="3">
                                                    <label for="premiumEco">First Class</label>
                                                </li>

                                                <li class="input-group-text">
                                                    <input class="form-check-input m-0 me-2" id="business"
                                                        type="checkbox" name="cabin_class" value="Business Class"
                                                        checked aria-label="2">
                                                    <label for="business">Business Class</label>
                                                </li>
                                                <li class="input-group-text">
                                                    <input class="form-check-input m-0 me-2" id="premiumEco"
                                                        type="checkbox" name="cabin_class" value="Premium Class"
                                                        aria-label="4">
                                                    <label for="premiumEco">Premium Economy</label>
                                                </li>
                                                <li class="input-group-text">
                                                    <input class="form-check-input m-0 me-2" id="economy"
                                                        type="checkbox" name="cabin_class" value="Economy Class"
                                                        aria-label="1">
                                                    <label for="economy">Economy</label>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-4">
                                                <button type="button" class="btn btn-pax-close"
                                                    id="closeButton">Done</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md order-4 order-md-3">
                                <div class="dropdown tbf-dropdown">
                                    <div class="btn custom-filter ext-pd-left" for=""
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <span>Regular Fare</span>
                                        <svg class="arrow-down" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" />
                                        </svg>
                                        <img class="icons-left" src="{{ asset('img/icons/flight_icon.svg') }}"
                                            alt="flight ticket">
                                    </div>
                                    <ul class="dropdown-menu">
                                        <li class="input-group-text">
                                            <input class="form-check-input" id="regular" type="checkbox" checked
                                                value="" aria-label="">
                                            <label for="regular">Regular Fare</label>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-7 col-md order-2 order-md-4">
                                <div class="btn custom-filter direct-flight">
                                    <div class="d-flex align-items-center">
                                        <input class="form-check-input me-3" id="directFlight" type="checkbox"
                                            value="Direct" aria-label="Direct Flight Only">
                                        <label for="directFlight">Direct Flight <span
                                                class="d-none d-md-inline-block">Only</span></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-5">
                        <div class="desti-form-control">
                            <div class="row w-100 align-items-center">
                                <div id="onwardTrigger" class="col-5 col-md-5">
                                    <div class="departure">
                                        <img class="d-none d-md-block"
                                            src="{{ asset('img/icons/depart-flight.svg') }}" alt="">
                                        <div>
                                            <small class="clr-7e" id="fromLabel">Departure </small>
                                            <input class="text-truncate w-100" id="fromdest" name="fromdest"
                                                type="text" value="" placeholder="Airport" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2 col-md-2 d-inline-flex justify-content-center">
                                    <div class="swap-btn m-0">
                                        <img class="swap-icon" src="{{ asset('img/icons/swap-icon.svg') }}"
                                            alt="">
                                    </div>
                                </div>
                                <div id="returnTrigger" class="col-5 col-md-5">
                                    <div class="destination">
                                        <img class="d-none d-md-block"
                                            src="{{ asset('img/icons/depart-flight.svg') }}" alt="">
                                        <div>
                                            <small class="clr-7e" id="toLabel">Destination </small>
                                            <input class="text-truncate w-100" type="text" name="todest"
                                                id="todest" value="" placeholder="Airport" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="desti-form-control">
                            <img class="dep-flight" src="{{ asset('img/icons/calendar.svg') }}" alt="">
                            <div class="row g-0 w-100 align-items-center justify-content-between">
                                <div class="col mrgn-left-32 departure_dt">
                                    <small class="clr-7e">Departure Date</small>
                                    <input class="text-truncate w-100" type="text" name="departdate"
                                        id="departdate" value="" placeholder="">
                                </div>
                                <div class="col bdr-left-date destination_dt">
                                    <small class="clr-7e">Return Date</small>
                                    <input class="text-truncate w-100" type="text" name="returndate"
                                        id="returndate" value="" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn-search w-100">Search
                            Flight</button>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <!-- Business Class Flights -->
    <section class="business-flight">
        <div class="container">
            <div class="more-content">
                <h3>
                    Business Class Flights up to 50% saving.
                </h3>
                <div class="content truncate">
                    <p>
                        Business Class Flights up to 50% saving. Travel Business First is a specialist travel agency
                        that
                        can offer incredible fares on leading airlines and to all major destinations. Our highly
                        experienced
                        travel consultants seek to provide you with the best travel services at fares which can save you
                        as
                        much as 50% on normal rates. We can provide you with a complete travel solution with flights,
                        hotels, transfers, excursions and tour plans.
                    </p>
                    <h4>Our goal is best price, best service.</h4>
                    <p>We have access
                        to the fares of all the leading airlines (such as Emirates Airways, Qatar Airways and Singapore
                        Airlines) and can provide a full range of travel services for First, Business, Premium Economy
                        or
                        Economy class flights, discounted hotels and tour packages. Our Airfares can save upto 50% off
                        the
                        published rates. Coupled with our expert travel consultants and first class service, it’s
                        obvious
                        why more and more people are booking with us.</p>
                    <p>Travel Business First is a part of Super Destinations
                        Ltd, which has been successfully providing travel services for over 10 years. We are specialists
                        in
                        finding low fares for Business Class, First Class and Premium Economy flights. Our travel
                        consultants are highly knowledgeable with decades of industry experience and a real passion for
                        travel. Wherever your planned next trip , we can provide you a wide range of quality holiday
                        solutions at great locations anywhere in the world.</p>
                    <p>Whether its the Caribbean or North America,
                        Australia or New Zealand, Africa or the Middle East, the Far East or the Indian Ocean, we can
                        find
                        you your perfect holiday at highly affordable rates. Call us now on <b class="fs-5">020 3727
                            6360</b> or complete the
                        enquiry form alongside and start your holiday journey.</p>
                </div>
                <div class="txtcol"><a>Read more +</a></div>
            </div>
        </div>
    </section>

    <!-- Book your flights with confidence -->
    <section class="our-features bg-light-gray">
        <div class="container">
            <h5 class="mb-3">Book your flights with confidence</h5>
            <div class="row g-3">
                <div class="col-md-12">
                    <div id="ouruspCarousel" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="card">
                                <img class="img-fluid me-3" src="{{ asset('img/icons/register-badge.svg') }}"
                                    alt="">
                                <p class="mb-0">We are registered with ATOL and IATA</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <img class="img-fluid me-3" src="{{ asset('img/icons/call-24.svg') }}"
                                    alt="">
                                <p class="mb-0">We are Available 24x7 for you</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <img class="img-fluid me-3" src="{{ asset('img/icons/payment.svg') }}"
                                    alt="">
                                <p class="mb-0">We have a secure payment system</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Most Popular Flight Destination -->
    <section class="section-padding">
        <div class="container">
            <div class="mb-3">
                <h3 class="mb-2">Most Popular Flight Destination</h3>
                <p>Explore a diverse selection of holiday options.</p>
            </div>
            @include('layouts.populardestination', ['popularFlight' => $popularFlight])
        </div>
    </section>

    <!-- Top Things to do in London -->
    <section class="section-padding">
        <div class="container">
            <div class="mb-3">
                <h3 class="mb-2">Top Selling Business Class</h3>
                <p>Check out the cheap business class prices available.</p>
            </div>
            @include('layouts.topthingstodo', ['topthingstodo' => $topthingstodo])
        </div>
    </section>

    <!-- Explore London -->
    <section class="section-padding bg-f8">
        <div class="container">
            <div class="mb-3">
                <h3 class="mb-2">Best flight of the month
                </h3>
            </div>
            @include('layouts.exploredestination', ['exploredestination' => $exploredestination])
        </div>
    </section>

    <!-- Best of London Activities -->
    <section class="section-padding">
        <div class="container">
            <div class="mb-3">
                <h3 class="mb-2">Trending Holiday Deals</h3>
                <p>Check out the wide range of Holiday Deals from London.</p>
            </div>
            @include('layouts.bestofactivity', ['bestofactivity' => $bestofactivity])
        </div>
    </section>


    <!-- What Our Clients Say -->
    <section class="section-padding bg-f8">
        <div class="container">
            @include('layouts.clientsay', ['clientsay' => $clientsay])
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
                {{-- <button class="nav-link" id="countryFlight-tab" data-bs-toggle="tab" data-bs-target="#countryFlight"
                    type="button" role="tab" aria-controls="countryFlight" aria-selected="false">Flight To Top
                    Countries</button>
                <button class="nav-link" id="flightRoute-tab" data-bs-toggle="tab" data-bs-target="#flightRoute"
                    type="button" role="tab" aria-controls="flightRoute" aria-selected="false">Top Flight
                    Routes</button> --}}
                {{-- <button class="nav-link" id="explore-tab" data-bs-toggle="tab" data-bs-target="#explore"
                    type="button" role="tab" aria-controls="explore" aria-selected="false">Explore</button> --}}
            </div>
            <div class="tab-content explore-contents" id="exploreTabContent">
                @include('footernav', ['popularDestinations' => $popularDestinations])

            </div>
        </div>
    </section>

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

    <script src="{{ asset('js/mobiscroll.jquery.min.js') }}"></script>

    <!-- custom js -->
    <script src="{{ asset('js/custom.js') }}"></script>

    <script>
        $(document).ready(function() {

            function formatDate(date) {
                // Get abbreviated weekday
                const days = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
                const day = days[date.getDay()];

                // Get day of the month
                const dayOfMonth = date.getDate();

                // Get abbreviated month
                const months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
                const month = months[date.getMonth()];

                // Get last two digits of the year
                const year = date.getFullYear().toString().slice(-2);

                // Return formatted date as 'Sun, 23 Oct 24'
                return `${day}, ${dayOfMonth} ${month} ${year}`;
            }

            // Set formatted date to input field on page load
            document.getElementById('departdate').value = formatDate(new Date());
            // Set Return Date to current date + 8 days
            const returnDate = new Date();
            returnDate.setDate(returnDate.getDate() + 8); // Add 8 days to the current date
            document.getElementById('returndate').value = formatDate(returnDate);






            $('#flightSearch').on('submit', function(e) {
                e.preventDefault(); // Prevent form submission or page refresh
                var selectedCabinClasses = [];

                // Loop through each checked checkbox and get the value of aria-label
                $('input[name="cabin_class"]:checked').each(function() {
                    selectedCabinClasses.push($(this).attr('aria-label'));
                });

                // Log the selected cabin class values or do something with them
                //console.log(selectedCabinClasses[0]);

                if (this.checkValidity()) { // Only proceed if form is valid

                    // Show the loading screen
                    $('#loadingScreen').fadeIn(500);

                    // Capture the user inputs
                    var fromDest = $('#fromdest').val();
                    var toDest = $('#todest').val();
                    var departureDate = $('#departdate').val(); // Replace with correct selector for date
                    var returnDate = $('#returndate').val(); // Replace with correct selector for date
                    var passengers = $('#passengers').text();
                    var cabinClass = selectedCabinClasses[0];
                    var numberOfPassengers = passengers.match(/\d+/);
                    var directFlight = $('#directFlight').is(':checked');




                    // Perform the AJAX request to fetch search results
                    $.ajax({
                        url: '/search-results', // Replace with your actual search endpoint
                        type: 'GET',
                        data: {
                            from: fromDest,
                            to: toDest,
                            departure: formatDateToYYYYMMDD(departureDate), // Format departure date
                            return: formatDateToYYYYMMDD(returnDate), // Format return date
                            passengers: numberOfPassengers[0],
                            cabin_class: cabinClass,
                            direct_flight: directFlight
                        },
                        success: function(data) {
                            // Hide the loading screen
                            //$('#loadingScreen').addClass('d-none');

                            //window.location.href = '/search-results';
                            // Display the search results
                            //$('.search-results').html(data);
                            // Create URL with parameters
                            const url =
                                `/search-results?from=${encodeURIComponent(fromDest)}&to=${encodeURIComponent(toDest)}&departure=${encodeURIComponent(formatDateToYYYYMMDD(departureDate))}&return=${encodeURIComponent(formatDateToYYYYMMDD(returnDate))}&passengers=${encodeURIComponent(numberOfPassengers[0])}&cabin_class=${encodeURIComponent(cabinClass)}&direct_flight=${encodeURIComponent(directFlight)}`;
                            console.log(url);
                            // Redirect to search results page with URL parameters
                            window.location.href = url;
                            //$('#loadingScreen').addClass('d-none');
                        },
                        error: function(xhr, status, error) {
                            console.log(status, error);
                            // Hide the loading screen in case of error
                            $('#loadingScreen').addClass('d-none');

                            // Show an error message
                            //alert('An error occurred while fetching the data: ' + error);
                        }
                    });
                }
            });

            function formatDateToYYYYMMDD(dateStr) {
                const date = new Date(dateStr);
                const year = date.getFullYear();
                const month = (date.getMonth() + 1).toString().padStart(2,
                    '0'); // Add 1 because months are zero-based
                const day = date.getDate().toString().padStart(2, '0');

                return `${year}-${month}-${day}`; // Return formatted date as YYYY-MM-DD
            }
        });


        var path = "{{ route('typeahead_destination') }}";
        $('#fromdest').typeahead({
            source: function(query, process) {
                return $.get(path, {
                    query: query
                }, function(data) {
                    console.log(query);
                    // Map both airport code and name for display
                    // Map both 'airport_code' and 'airport_name' into a single string for each result
                    var airports = data.map(function(item) {
                        return item.airport_code + ' - ' + item
                            .airport_name; // Combine the two into a string
                        // return {
                        //     value: item.airport_code + ' - ' + item.airport_name,  // Full display value
                        //     name: item.airport_name, // Airport name only
                        //     code: item.airport_code                                
                        // };
                    });
                    return process(airports);
                });
            },
            // Customize the behavior of what is shown in the input when an item is selected
            updater: function(item) {
                // Split the selected item to get airport code and name
                var parts = item.split(' - ');
                var airport_code = parts[0]; // Extract airport code
                var airport_name = parts[1]; // Extract airport name
                // Set only the airport name in the input field
                $('#fromdest').val(airport_code); // Display airport name
                $('#fromLabel').text("From " + airport_name); // Display airport code in #fromlabel
                return airport_code; // Return the airport name for Typeahead
            }
        });
        $('#todest').typeahead({
            source: function(query, process) {
                return $.get(path, {
                    query: query
                }, function(data) {
                    // Map both 'airport_code' and 'airport_name' into a single string for each result
                    var airports = data.map(function(item) {
                        return item.airport_code + ' - ' + item
                            .airport_name; // Combine the two into a string
                        // return {
                        //     value: item.airport_code + ' - ' + item.airport_name,  // Full display value
                        //     name: item.airport_name, // Airport name only
                        //     code: item.airport_code                                
                        // };
                    });
                    return process(airports);
                });
            },
            // Customize the behavior of what is shown in the input when an item is selected
            updater: function(item) {
                // Split the selected item to get airport code and name
                var parts = item.split(' - ');
                var airport_code = parts[0]; // Extract airport code
                var airport_name = parts[1]; // Extract airport name
                // Set only the airport name in the input field
                $('#todest').val(airport_code); // Display airport name
                $('#toLabel').text("To " + airport_name); // Display airport code in #fromlabel
                return airport_code; // Return the airport name for Typeahead
            }
        });

        //for mobile view

        $('#fromdestm').typeahead({
            source: function(query, process) {
                return $.get(path, {
                    query: query
                }, function(data) {
                    //console.log(data);
                    // Map both 'airport_code' and 'airport_name' into a single string for each result
                    // Clear the existing list
                    $('.search-list ul').empty();

                    // Loop through the results and append them to the list
                    $.each(data, function(index, item) {
                        // Assuming the returned data is in the format of {airport_code, airport_name, city}
                        var listItem = `
    <li class="search-item" data-code="${item.airport_code}" data-name="${item.airport_name}">
        <div>
            <p class="city">${item.airport_name}, ${item.airport_code}</p>
            <small>${item.airport_name}</small>
        </div>
        <div class="ap-code">
            ${item.airport_code}
        </div>
    </li>
`;
                        $('.search-list ul').append(listItem);
                    });
                    // Add click event to each search result item
                    $('.search-item').on('click', function() {
                        console.log("clicked");
                        var selectedCode = $(this).data('code');
                        var selectedName = $(this).data('name');

                        // Set the selected data into the input field
                        $('#fromdest').val(selectedCode); // Display airport name
                        $('#fromLabel').text("From " + selectedName);
                        $("#onwardModal").fadeOut();
                        // Optionally, hide the dropdown after selection
                        $('.search-list ul').empty();
                    });

                });
            },
            // Customize the behavior of what is shown in the input when an item is selected

        });

        $('#todestm').typeahead({
            source: function(query, process) {
                return $.get(path, {
                    query: query
                }, function(data) {
                    console.log(data);
                    // Map both 'airport_code' and 'airport_name' into a single string for each result
                    // Clear the existing list
                    $('.search-list ul').empty();

                    // Loop through the results and append them to the list
                    $.each(data, function(index, item) {
                        // Assuming the returned data is in the format of {airport_code, airport_name, city}
                        var listItem = `
    <li class="search-item" data-code="${item.airport_code}" data-name="${item.airport_name}">
        <div>
            <p class="city">${item.airport_name}, ${item.airport_code}</p>
            <small>${item.airport_name}</small>
        </div>
        <div class="ap-code">
            ${item.airport_code}
        </div>
    </li>
`;
                        $('.search-list ul').append(listItem);
                    });
                    // Add click event to each search result item
                    $('.search-item').on('click', function() {
                        console.log("clicked");
                        var selectedCode = $(this).data('code');
                        var selectedName = $(this).data('name');

                        // Set the selected data into the input field
                        $('#todest').val(selectedCode); // Display airport name
                        $('#toLabel').text("To " + selectedName);
                        $("#returnModal").fadeOut();
                        // Optionally, hide the dropdown after selection
                        $('.search-list ul').empty();
                    });
                });
            },

        });

        document.addEventListener("DOMContentLoaded", function() {

            // the selector will match all input controls of type :checkbox
            // and attach a click event handler 
            $("input:checkbox").on('click', function() {
                // in the handler, 'this' refers to the box clicked on
                var $box = $(this);
                if ($box.is(":checked")) {
                    // the name of the box is retrieved using the .attr() method
                    // as it is assumed and expected to be immutable
                    var group = "input:checkbox[name='" + $box.attr("name") + "']";
                    // the checked state of the group/box on the other hand will change
                    // and the current value is retrieved using .prop() method
                    $(group).prop("checked", false);
                    $box.prop("checked", true);
                } else {
                    $box.prop("checked", false);
                }

            });


            // Function to update the count
            function updateCount(inputId, delta) {
                const inputField = document.getElementById(inputId);
                let currentValue = parseInt(inputField.value) || 0; // Default to 0 if empty
                currentValue += delta; // Increase or decrease
                // Ensure value doesn't go below allowed limits
                if (inputId === 'adultcount') {
                    if (currentValue < 1) {
                        currentValue = 1; // Set minimum value for adults to 1
                    }
                } else {
                    if (currentValue < 0) {
                        currentValue = 0; // Ensure no negative values for children and infants
                    }
                }

                inputField.value = currentValue; // Update input field
            }

            // Add event listeners for the adult count buttons
            document.querySelectorAll('#adultcount + .control-btn .plus').forEach(button => {
                button.addEventListener('click', function() {
                    updateCount('adultcount', 1);
                });
            });

            document.querySelectorAll('#adultcount + .control-btn .minus').forEach(button => {
                button.addEventListener('click', function() {
                    updateCount('adultcount', -1);
                });
            });

            // Add event listeners for the child count buttons
            document.querySelectorAll('#childcount + .control-btn .plus').forEach(button => {
                button.addEventListener('click', function() {
                    updateCount('childcount', 1);
                });
            });

            document.querySelectorAll('#childcount + .control-btn .minus').forEach(button => {
                button.addEventListener('click', function() {
                    updateCount('childcount', -1);
                });
            });

            // Add event listeners for the infant count buttons
            document.querySelectorAll('#infantcount + .control-btn .plus').forEach(button => {
                button.addEventListener('click', function() {
                    updateCount('infantcount', 1);
                });
            });

            document.querySelectorAll('#infantcount + .control-btn .minus').forEach(button => {
                button.addEventListener('click', function() {
                    updateCount('infantcount', -1);
                });
            });
            // Handle the Done button click
            document.getElementById('closeButton').addEventListener('click', function() {
                const adultCount = document.getElementById('adultcount').value;
                const childCount = document.getElementById('childcount').value;
                const infantCount = document.getElementById('infantcount').value;
                const selectedCabinClass = document.querySelector('input[name="cabin_class"]:checked')
                    .value;

                // Update the passengers and cabin type display
                // const passengerDisplay = `${adultCount} Adult${adultCount > 1 ? 's' : ''}, ${childCount} Child${childCount > 1 ? 'ren' : ''}, ${infantCount} Infant${infantCount > 1 ? 's' : ''}`;
                let passengerDisplay = `${adultCount} Adult${adultCount > 1 ? 's' : ''}`;
                if (childCount > 0) {
                    passengerDisplay += `, ${childCount} Child${childCount > 1 ? 'ren' : ''}`;
                }
                if (infantCount > 0) {
                    passengerDisplay += `, ${infantCount} Infant${infantCount > 1 ? 's' : ''}`;
                }

                document.getElementById('passengers').textContent = passengerDisplay;
                document.getElementById('classtype').textContent = selectedCabinClass;
            });

            // Function to update the selected route display
            function updateRoute() {

                const oneWayCheckbox = document.getElementById('oneway');
                const roundTripCheckbox = document.getElementById('roundtrip');
                //const multiCityCheckbox = document.getElementById('multicity');
                let selectedRoutes = [];

                // Check which checkboxes are selected and update the selectedRoutes array
                if (oneWayCheckbox.checked) {
                    selectedRoutes.push(oneWayCheckbox.value);
                }
                if (roundTripCheckbox.checked) {
                    selectedRoutes.push(roundTripCheckbox.value);
                }
                // if (multiCityCheckbox.checked) {
                //     selectedRoutes.push(multiCityCheckbox.value);
                // }
                // console.log(selectedRoutes[0]);
                // Update the display based on selected routes
                document.getElementById('routeLabel').textContent = selectedRoutes[0];
            }

            // Add event listeners to the checkboxes
            document.querySelectorAll('input[name="route"]').forEach(checkbox => {

                checkbox.addEventListener('change', updateRoute);
            });

            // Initialize the display with the checked checkbox value
            // updateRoute();

        });
        var now = new Date();
        $('#departdate').mobiscroll().datepicker({
            controls: ['calendar'],
            select: 'range',
            startInput: '#departdate',
            endInput: '#returndate',
            invalid: [{

                },
                new Date(now.getFullYear(), now.getMonth(), 25)
            ],
            inRangeInvalid: true,
            // Set the display format for the datepicker
            display: 'center', // Change this to your preferred display mode
            dateFormat: 'DDD, DD MMM YY' // Set the date format to 'Sun, 23 Oct 24'
        });
        // Ensure the entire page, including images and other resources, is fully loaded
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
