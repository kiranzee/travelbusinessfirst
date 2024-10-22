@php
    use Carbon\Carbon;
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Search Result - Travel Business First</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

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
    <section class="search-top-section">
        <img src="{{ asset('img/flight-search-top-image.webp') }}" class="img-fluid" alt="">
        <div class="deal-outer">
            <div class="container">
                <p>Business Class Flights</p>
                <div class="deal-text d-flex">
                    <div class="disc-upto">
                        Off<div>Upto</div>
                    </div>
                    <div class="discount">50</div>
                    <div class="disc-upto">%</div>
                </div>
            </div>
        </div>

        <div class="modify-search-top">
            <form id="flightSearch">
                <div class="container">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="desti-form-control">
                                <div class="row w-100 align-items-center">
                                    <div id="onwardTrigger" class="col-5 col-md-5">
                                        <div class="departure">
                                            <img class="d-none d-md-block"
                                                src="{{ asset('img/icons/depart-flight.svg') }}" alt="">
                                            <div>
                                                <small class="clr-7e" id="fromLabel">From</small>
                                                <input class="text-truncate w-100" type="text" id="fromdest"
                                                    name="fromdest" value="{{ $request->from }}" placeholder="Dubai">
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
                                                <small class="clr-7e" id="toLabel">To </small>
                                                <input class="text-truncate w-100" type="text" name="todest"
                                                    id="todest" value="{{ $request->to }}" placeholder="London">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="desti-form-control">
                                <img class="dep-flight" src="{{ asset('img/icons/calendar.svg') }}" alt="">
                                <div class="row g-0 w-100 align-items-center justify-content-between">
                                    <div class="col mrgn-left-32 departure_dt">
                                        <small class="clr-7e">Departure Date</small>
                                        <input class="text-truncate w-100" type="text" name="departdate"
                                            id="dtdate" value="" placeholder="">
                                    </div>
                                    <div class="col bdr-left-date destination_dt">
                                        <small class="clr-7e">Return Date</small>
                                        <input class="text-truncate w-100" type="text" name="returndate"
                                            id="rtdate" value="" placeholder="">
                                    </div>



                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="pax-selection" id="passengerTrigger">
                                <div class="btn custom-filter ext-pd-left" for="" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img class="icons-left" src="img/icons/user_icon.svg" alt="">
                                    <span class="me-1 me-md-3" id="passengers">{{ $request->passengers }} Adult</span>
                                    <span class="px-1 px-md-3">●</span>
                                    <span id="classtype">Class</span>
                                    <svg class="arrow-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" />
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
                                                    id="childcount">
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
                                                    id="infantcount">
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
                                                <input class="form-check-input m-0 me-2" id="economy"
                                                    type="checkbox" name="cabin_class" value="Economy Class"
                                                    aria-label="1">
                                                <label for="economy">Economy</label>
                                            </li>
                                            <li class="input-group-text">
                                                <input class="form-check-input m-0 me-2" id="business"
                                                    type="checkbox" name="cabin_class" value="Business Class"
                                                    aria-label="2">
                                                <label for="business">Business Class</label>
                                            </li>
                                            <li class="input-group-text">
                                                <input class="form-check-input m-0 me-2" id="premiumEco"
                                                    type="checkbox" name="cabin_class" value="Pre.Economy Class"
                                                    aria-label="4">
                                                <label for="premiumEco">Premium Economy</label>
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
                        <div class="col-md-1">
                            <button class="btn-search w-100" type="submit">Modify</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- for mobile view only Select city Modal start -->
    <div id="onwardModal" class="slide-modal">
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
                    <input type="text" class="form-control" id="fromdestm" placeholder="Enter City / Country"
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

    <nav class="container" aria-label="breadcrumb">
        <ol class="breadcrumb tbf-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Flight</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $request->from }} to {{ $request->to }}</li>
        </ol>
    </nav>

    <section class="border-top section-padding">
        <div class="container">
            <div class="flight-dtls-section">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Best Departure Flights From</h4>
                    </div>
                    <div class="col-md-6 d-none d-md-flex justify-content-end">
                        <div class="track-section">
                            <button type="button" class="btn btn-light"><img
                                    src="{{ asset('img/icons/track-price-icon.png') }}" class="img-fluid"
                                    alt=""> Track Prices
                                <img src="img/icons/info.svg" class="img-fluid info-icon" data-bs-placement="top"
                                    data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip"
                                    data-bs-title="When prices for the dates you have searched change, receive email updates.
                                You'll also receive email-based travel advice. as well, as keep an eye on any
                                dates to receive email notifications on when London – Malé prices drop."></img>
                            </button>

                            <button type="button" class="btn btn-light"><img
                                    src="{{ asset('img/icons/date-grid-icon.png') }}" class="img-fluid"
                                    alt=""> Date Grid</button>
                            <button type="button" class="btn btn-light"><img
                                    src="{{ asset('img/icons/price-graph-icon.png') }}" class="img-fluid"
                                    alt=""> Price Graph</button>
                        </div>
                    </div>
                    <div class="col-md-12">

                        <div class="selected-flights">
                            <div><img src="{{ asset('img/icons/depart-flight.svg') }}" alt=""><span>
                                    @php
                                        $fromAirport = $airports->firstWhere('airport_code', $request->from);
                                        $toAirport = $airports->firstWhere('airport_code', $request->to);
                                    @endphp
                                    @if ($fromAirport)
                                        {{ $fromAirport->airport_name }}
                                    @endif
                                    ({{ $request->from }})
                                </span>
                            </div>
                            <div><img src="{{ asset('img/icons/depart-flight.svg') }}" alt=""> <span>
                                    @if ($toAirport)
                                        {{ $toAirport->airport_name }}
                                    @endif
                                    ({{ $request->to }})
                                </span>
                                </span> </div>
                            <div class="px-3">|</div>
                            <div><img src="{{ asset('img/icons/calendar.svg') }}" alt=""> <span>


                                    {{ Carbon::parse($request->departure)->format('D, d M') }} -
                                    {{ Carbon::parse($request->returndt)->format('D, d M') }}</span></div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="filter-section">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center justify-content-between justify-content-md-start">
                            <div class="filter-btn">
                                <img src="{{ asset('img/icons/filter.svg') }}" alt=""> <span
                                    class="d-none d-md-block">Filter</span>
                            </div>
                            {{-- <div class="cheapest">
                                <img src="img/icons/cheapest-icon.svg" alt="">
                                <div class="flight-info">
                                    <p>Cheapest</p>
                                    <small>£ 1403 | 26h 50m</small>
                                </div>
                            </div> --}}
                            <div class="fastest">
                                <img src="{{ asset('img/icons/fastest-icon.svg') }}" alt="">
                                <div class="flight-info">
                                    <p>Fastest</p>
                                    <small>
                                        @if ($bestPrice)
                                            £ {{ $fastest->adult_fare }}
                                        @endif
                                    </small>
                                </div>
                            </div>
                            <div class="bestvalue">
                                <img src="{{ asset('img/icons/bestvalue-icon.svg') }}" alt="">
                                <div class="flight-info">
                                    <p>Best Value</p>
                                    <small>
                                        @if ($bestPrice)
                                            £ {{ $bestPrice->adult_fare }}
                                        @endif
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row g-3 justify-content-end">
                            <div class="col-5 col-md-4">
                                <div class="btn custom-filter direct-flight">
                                    <div class="d-flex align-items-center">
                                        <input class="form-check-input me-3" id="directFlight" type="checkbox"
                                            value="" aria-label="Direct Flight Only">
                                        <label for="directFlight">Direct Flight <span
                                                class="d-none d-md-inline-block">Only</span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-md-4">
                                <div class="dropdown tbf-dropdown">
                                    <div class="btn custom-filter ps-md-5" for="" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <span>Regular Fare</span>
                                        <svg class="arrow-down" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" />
                                        </svg>
                                        <img class="icons-left d-none d-md-inline-flex"
                                            src="{{ asset('img/icons/flight_icon.svg') }}" alt="flight ticket">
                                    </div>

                                </div>
                            </div>
                            <div class="col-3 col-md-3">
                                <div class="dropdown tbf-dropdown">
                                    <div class="btn custom-filter" for="" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <span>Sort By</span>
                                        <svg class="arrow-down" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" />
                                        </svg>
                                    </div>
                                    <ul class="dropdown-menu">
                                        <li class="input-group-text">
                                            <input class="form-check-input" id="low-high" type="checkbox" checked
                                                value="" aria-label="">
                                            <label for="low-high">Price Low - High</label>
                                        </li>
                                        <li class="input-group-text">
                                            <input class="form-check-input" id="high-low" type="checkbox"
                                                value="" aria-label="">
                                            <label for="high-low">Price High - Low</label>
                                        </li>
                                        <li class="input-group-text">
                                            <input class="form-check-input" id="cheapest" type="checkbox"
                                                value="" aria-label="">
                                            <label for="cheapest">Cheapest Flights</label>
                                        </li>
                                        <li class="input-group-text">
                                            <input class="form-check-input" id="fastest" type="checkbox"
                                                value="" aria-label="">
                                            <label for="fastest">Fastest Flights</label>
                                        </li>
                                        <li class="input-group-text">
                                            <input class="form-check-input" id="earlierDep" type="checkbox"
                                                value="" aria-label="">
                                            <label for="earlierDep">Earlier Departure</label>
                                        </li>
                                        <li class="input-group-text">
                                            <input class="form-check-input" id="lateDep" type="checkbox"
                                                value="" aria-label="">
                                            <label for="lateDep">Late Departure</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding pt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">




                    @foreach ($results as $result)
                        <div class="flight-list flight-search">
                            <div class="row">
                                <div class="col-6 col-md-3">
                                    <div class="info-one">
                                        <div class="non-refundable">Non-Refundable</div>
                                        <div class="d-flex align-items-center mt-2">
                                            <img src="{{ $result->logo }}" class="img-fluid" alt="royal jordanian">
                                            <div class="flight-dtls">
                                                <p class="airline-name">{{ $result->airline_name }}</p>
                                                <span class="flt-no">{{ $result->airline }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 border-start order-3 order-md-2">
                                    <div class="desti-dtls border-bottom bdr-top">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="desti-name">{{ $result->source_airport_name }}</div>
                                                <div class="desti-code">{{ $result->source }}</div>
                                            </div>
                                            <div class="col-6 d-flex justify-content-center">
                                                @if ($result->route == 'Direct')
                                                    <div class="flt-stops" data-bs-placement="top"
                                                        data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip"
                                                        data-bs-title="{{ $result->route }}">
                                                        {{ $stops = 'Non-Stop' }}
                                                    @elseif (!empty($result->route2))
                                                        <div class="flt-stops" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-title="{{ $result->route2 }}">
                                                            {{ $stops = '+2 Stops' }}
                                                        @elseif (!empty($result->route3))
                                                            <div class="flt-stops" data-bs-placement="top"
                                                                data-bs-custom-class="custom-tooltip"
                                                                data-bs-toggle="tooltip"
                                                                data-bs-title="{{ $result->route3 }}">
                                                                {{ $stops = '+3 Stops' }}
                                                            @else
                                                                <div class="flt-stops" data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-title="{{ $result->route }}">
                                                                    {{ $stops = '+1 Stop' }}
                                                @endif



                                            </div>
                                        </div>
                                        <div class="col-3 text-end">
                                            <div class="desti-name">{{ $result->destination_airport_name }}</div>
                                            <div class="desti-code">{{ $result->destination }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="desti-dtls">
                                    <div class="row">
                                        <div class="col-3">

                                            <div class="desti-name">{{ $result->destination_airport_name }}</div>
                                            <div class="desti-code">{{ $result->destination }}</div>
                                        </div>
                                        <div class="col-6 d-flex justify-content-center">
                                            <div class="flt-stops">Dummy</div>
                                        </div>
                                        <div class="col-3 text-end">

                                            <div class="desti-name">{{ $result->source_airport_name }}</div>
                                            <div class="desti-code">{{ $result->source }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-6 col-md-2 border-start d-inline-flex flex-column justify-content-end align-items-end order-2 order-md-3">
                                <div class="price-section">
                                    <div class="left-seat">Only 4 Seats left</div>
                                    <div class="price"><span>£{{ $result->adult_fare }}</span>
                                        <small>Per Person</small>
                                    </div>
                                    <button
                                        onclick="bookFlight({{ $result->id }}, {{ $passengers }},'{{ $request->departure }}','{{ $request->return }}');"
                                        type="button" class="btn btn-book mt-2 text-end">Book Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="view-flt-dtls border-top">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-6 col-md-4">
                                    <a href="javascript:void(0)" class="view-flt-details">View Flight Details
                                        ></a>
                                </div>
                                <div class="col-6 col-md-6 d-inline-flex justify-content-end">
                                    <div class="flt-feature"><img src="{{ asset('img/icons/seat.svg') }}"
                                            title="Economy">
                                        <span>
                                            @if ($result->class == '1')
                                                Economy Class
                                            @elseif($result->class == '2')
                                                Business Class
                                            @elseif($result->class == '3')
                                                First Class
                                            @elseif($result->class == '4')
                                                Premium Economy
                                            @endif
                                        </span>
                                    </div>
                                    <div class="flt-feature"><img src="{{ asset('img/icons/meals.svg') }}"
                                            title="Free Meal">
                                        <span>{{ $result->meal == '1' ? 'Free Meal' : 'No Meal' }}</span>
                                    </div>
                                    <div class="flt-feature"><img src="{{ asset('img/icons/baggage.svg') }}"
                                            title="23 KG Baggage">
                                        <span>23 KG Baggage</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                @endforeach



            </div>
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

    <script src="{{ asset('js/mobiscroll.jquery.min.js') }}"></script>

    <!-- custom js -->
    <script src="{{ asset('js/custom.js') }}"></script>

    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

        function bookFlight(flightId, passengers, departureDate, returnDate) {

            // Redirect to the flight-detail page with flight ID and passenger count as query parameters
            window.location.href =
                `/flight-detail/${flightId}?passengers=${passengers}&dDate=${encodeURIComponent(departureDate)}&rDate=${encodeURIComponent(returnDate)}`;
        }
    </script>
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

            // Convert PHP date string to a JavaScript Date object
            const departureDate = new Date('{{ $request->departure }}');
            const returnDate = new Date('{{ $request->return }}');

            // Set formatted date to input field
            document.getElementById('dtdate').value = formatDate(departureDate);
            // Set Return Date to input field           
            document.getElementById('rtdate').value = formatDate(returnDate);






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
                    $('#loadingScreen').removeClass('d-none');

                    // Capture the user inputs
                    var fromDest = $('#fromdest').val();
                    var toDest = $('#todest').val();
                    var departureDate = $('#dtdate').val(); // Replace with correct selector for date
                    var returnDate = $('#rtdate').val(); // Replace with correct selector for date
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

                            //window.location.href = '/search-results';
                            // Display the search results
                            //$('.search-results').html(data);
                            // Create URL with parameters
                            const url =
                                `/search-results?from=${encodeURIComponent(fromDest)}&to=${encodeURIComponent(toDest)}&departure=${encodeURIComponent(formatDateToYYYYMMDD(departureDate))}&return=${encodeURIComponent(formatDateToYYYYMMDD(returnDate))}&passengers=${encodeURIComponent(numberOfPassengers[0])}&cabin_class=${encodeURIComponent(cabinClass)}&direct_flight=${encodeURIComponent(directFlight)}`;

                            // Redirect to search results page with URL parameters
                            window.location.href = url;
                            //$('#loadingScreen').addClass('d-none');
                        },
                        error: function(xhr, status, error) {
                            console.log(status, error);
                            // Hide the loading screen in case of error
                            $('#loadingScreen').addClass('d-none');

                            // Show an error message
                            alert('An error occurred while fetching the data: ' + error);
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
        $('#dtdate').mobiscroll().datepicker({
            controls: ['calendar'],
            select: 'range',
            startInput: '#dtdate',
            endInput: '#rtdate',

            display: 'center', // Change this to your preferred display mode
            dateFormat: 'DDD, DD MMM YY' // Set the date format to 'Sun, 23 Oct 24'
        });

        // This function will run when the page is fully loaded
        window.onload = function() {
            // Define the cabin class you want to check
            var selectedCabinClass = '{{ $request->cabin_class }}';

            // Find all checkboxes with the name 'cabin_class'
            var checkboxes = document.querySelectorAll('input[name="cabin_class"]');

            // Loop through each checkbox
            checkboxes.forEach(function(checkbox) {
                // Check if the aria-label value matches the selected cabin class
                if (checkbox.getAttribute('aria-label') === selectedCabinClass) {
                    checkbox.checked = true; // Check the checkbox
                }
            });
            const updatedselectedCabinClass = document.querySelector('input[name="cabin_class"]:checked')
                .value;
            document.getElementById('classtype').textContent = updatedselectedCabinClass;
        };
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
