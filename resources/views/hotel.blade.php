<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Flight City Details - Travel Business First</title>




    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.3/assets/owl.theme.default.min.css"
        integrity="sha512-0AyL4lDHb+ytzn5Ygvvie+ThlNNVAoEQ6e/ZjP8Uoi+goYM1Wzb1VS3vga3ORrLXtyxflJ41bm6v1WY8m9gpdA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/mobiscroll.jquery.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body id="pageContent">
    @include('layouts.header', ['menu' => $menu])

    <section class="search-top-section">
        <img src="{{ asset('img/hotel_deals/hotel-top-image.webp') }} " class="img-fluid" alt="">

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
                                                <small class="clr-7e" id="fromLabel">Departure</small>
                                                <input class="text-truncate w-100 fromdest" type="text" required
                                                    value="" placeholder="Airport" id="fromdest" name="fromdest">
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
                                                <input class="text-truncate w-100 todest" type="text" name="todest"
                                                    required id="todest" value="" placeholder="Airport">
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
                                        <input class="text-truncate w-100" type="text" name="departdate" required
                                            id="departdate" value="" placeholder="">
                                    </div>
                                    <div class="col bdr-left-date destination_dt">
                                        <small class="clr-7e">Return Date</small>
                                        <input class="text-truncate w-100" type="text" name="returndate" required
                                            id="returndate" value="" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="pax-selection" id="passengerTrigger">
                                <div class="btn custom-filter ext-pd-left" for="" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img class="icons-left" src="{{ asset('img/icons/user_icon.svg') }}" alt="">
                                    <span class="me-1 me-md-3 passengers" id="passengers">2 Adult</span> <span
                                        class="px-1 px-md-3">●</span>
                                    <span id="classtype" class="classtype">Business Class</span>
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
                                                <input type="text" class="form-control adultcount" placeholder="2"
                                                    value="2">
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
                                                <input type="text" class="form-control childcount" placeholder="0"
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
                                                <input type="text" class="form-control infantcount"
                                                    placeholder="0">
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
                                                <input class="form-check-input m-0 me-2" id="first"
                                                    type="checkbox" name="cabin_class" value="First Class"
                                                    aria-label="3">
                                                <label for="first">First Class</label>
                                            </li>
                                            <li class="input-group-text">
                                                <input class="form-check-input m-0 me-2" id="business"
                                                    type="checkbox" name="cabin_class" value="Business Class" checked
                                                    aria-label="2">
                                                <label for="business">Business Class</label>
                                            </li>
                                            <li class="input-group-text">
                                                <input class="form-check-input m-0 me-2" id="premiumEco"
                                                    type="checkbox" name="cabin_class" value="Pre.Economy Class"
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
                                            <button type="button" class="btn btn-pax-close closeButton"
                                                id="closeButton">Done</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <button type="submit" class="btn-search w-100">Flight Search</button>
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
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Hotel</a></li>

        </ol>
    </nav>

    <section class="section-padding border-top">
        <div class="container">
            <div class="row g-md-5">
                <div class="col-md-8">
                    <h2 class="fw-bold mb-3 mb-md-4">Hotels By Travel Business First</h2>


                    <div class="hotel-description">
                        <span>Travel Business First have negotiated best rates for 100,000’s of hotels and resorts
                            throughout the world. We can book you into the best 5 star hotels, including the leading
                            hotel chains, boutique hotels, apartments or simple bed and breakfast hotels. Our negotiated
                            rates mean that you could save upto 30% on the normal rates when booking direct.

                            Contact us now with your requirements</span>

                        <div class="info-text">
                            <section class="section-padding">
                                <form method="POST" action="{{ route('thankyou.hotelenquiry') }}">
                                    @csrf
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card p-4 rounded-4">
                                                    <h4 class="mb-3">Contact us now with your requirements.</h4>
                                                    <div class="row g-4">
                                                        <div class="col-md-4">
                                                            <label class="form-label">Destination <span
                                                                    class="mandate">*</span></label>
                                                            <input class="form-control w-100" type="text" required
                                                                placeholder="Destination Name" name="destination"
                                                                value="">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="form-label">Check In Date <span
                                                                    class="mandate">*</span></label>
                                                            <input class="form-control w-100" type="date" required
                                                                placeholder="" name="checkin" value="">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="form-label">Check Out Date <span
                                                                    class="mandate">*</span></label>
                                                            <input class="form-control w-100" type="date" required
                                                                placeholder="Email ID" name="checkout"
                                                                value="">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="form-label">No.of Night Stay <span
                                                                    class="mandate">*</span></label>
                                                            <select class="form-control w-100" name="noofnightstay"
                                                                id="nights_to_stay" required>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                                <option value="16">16</option>
                                                                <option value="17">17</option>
                                                                <option value="18">18</option>
                                                                <option value="19">19</option>
                                                                <option value="20">20</option>
                                                                <option value="21">21</option>
                                                                <option value="22">22</option>
                                                                <option value="23">23</option>
                                                                <option value="24">24</option>
                                                                <option value="25">25</option>
                                                                <option value="26">26</option>
                                                                <option value="27">27</option>
                                                                <option value="28">28</option>
                                                                <option value="29">29</option>
                                                                <option value="30">30</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <label class="form-label w-100"> Star Hotel <span
                                                                    class="mandate">*</span></label>
                                                            <select class="form-control" id="hotel_type"
                                                                name="hotel_type" required>
                                                                <option value="1* and above">1* and above</option>
                                                                <option value="2* and above">2* and above</option>
                                                                <option value="3* and above">3* and above</option>
                                                                <option value="4* and above">4* and above</option>
                                                                <option value="5* and above">5* and above</option>
                                                                <option value="6* and above">6* and above</option>
                                                                <option value="7* only">7* only</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="form-label w-100"> Room Type <span
                                                                    class="mandate">*</span></label>
                                                            <select class="form-control" id="room_type"
                                                                name="roomtype" required>
                                                                <option value="Room Only">Room Only</option>
                                                                <option value="Bed and Breakfast">Bed and Breakfast
                                                                </option>
                                                                <option value="Half Board">Half Board</option>
                                                                <option value="Full Board">Full Board</option>
                                                                <option value="All Inclusive">All Inclusive</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="form-label w-100"> Adult <span
                                                                    class="mandate">*</span></label>
                                                            <select class="form-control" id="adults"
                                                                name="adultcount" required>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="12+">12+</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="form-label w-100"> Child <span
                                                                    class="mandate">*</span></label>
                                                            <select class="form-control" id="adults"
                                                                name="childcount" required>
                                                                <option value="0">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="12+">12+</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="form-label w-100"> Infant <span
                                                                    class="mandate">*</span></label>
                                                            <select class="form-control" id="adults"
                                                                name="infantcount" required>
                                                                <option value="0">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="12+">12+</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="form-label w-100"> No.Of Rooms <span
                                                                    class="mandate">*</span></label>
                                                            <select class="form-control" id="no_of_rooms"
                                                                name="noofrooms" required>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="12+">12+</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                    <div class="row g-4">
                                                        <div class="col-md-4">
                                                            <label class="form-label">Customer Full Name <span
                                                                    class="mandate">*</span></label>
                                                            <input class="form-control w-100" type="text" required
                                                                placeholder="Full Name" name="customer_name"
                                                                value="">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="form-label">Customer Phone <span
                                                                    class="mandate">*</span></label>
                                                            <input class="form-control w-100" type="text" required
                                                                placeholder="+44" name="customer_phone"
                                                                value="">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="form-label">Customer Email <span
                                                                    class="mandate">*</span></label>
                                                            <input class="form-control w-100" type="email" required
                                                                placeholder="your@email.com" name="customer_email"
                                                                value="">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="user-control form-control h-60">
                                                                <textarea rows="3" style="min-width: 300px" class="w-100" name="customer_comments" type="text"
                                                                    placeholder="Enter Your Comment"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 d-flex align-items-end">

                                                            <button type="submit"
                                                                class="btn btn-dark">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </section>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="multi-fare-section">
                        <div class="class-fare">
                            <h5 class="clr-dark-pink fst-italic mb-3">Hotel Deals</h5>
                            <hr>
                            <div class="row py-md-2 px-3 justify-content-center"
                                style="position: relative; height: 462px; overflow: hidden; display: block;">
                                <div class="demo1 demof">
                                    <ul style="margin: 0px; position: absolute; top: 0px;">
                                        <li
                                            style="border-bottom: 1px solid rgb(234, 234, 234); margin: 0px; display: list-item;">
                                            <img src="{{ asset('img/hotel_deals/7d.jpg') }}" alt="Mauritius"><a
                                                href="#">Delhi</a>
                                            <p>7 nights, Half-board, Flight + Accommodation £845PP.</p>
                                        </li>


                                        <li
                                            style="border-bottom: 1px solid rgb(234, 234, 234); margin: 0px; display: list-item;">
                                            <img src="{{ asset('img/hotel_deals/1d.jpg') }}" alt="Gran-Canaria"><a
                                                href="#">New York and
                                                Orlando Twin Centre</a>
                                            <p>5 Nights in New York and 5 Nights in Orlando
                                                4* All Inclusive, Flights + Accommodation £1250PP </p>
                                        </li>

                                        <li style="border-bottom: 1px solid rgb(234, 234, 234); margin: 0px;"><img
                                                src="{{ asset('img/hotel_deals/2d.jpg') }}" alt="Gran-Canaria"><a
                                                href="#">Las Vegas and
                                                New York </a>
                                            <p>4 Nights at Las
                                                Vagas, 3 Nights at New
                                                York 4*ALL INCLUSIVE Flights + Accomo £899 PP.</p>
                                        </li>


                                        <li style="border-bottom: 1px solid rgb(234, 234, 234); margin: 0px;"><img
                                                src="{{ asset('img/hotel_deals/3d.jpg') }}" alt="Gran-Canaria"><a
                                                href="#">Las Vegas and
                                                Los Angeles </a>
                                            <p>4 Nights at <a
                                                    href="https://travelbusinessfirst.co.uk/flights-to-las-vegas.php">Las
                                                    Vagas</a>, 3 Nights at <a
                                                    href="https://travelbusinessfirst.co.uk/flights-to-los-angeles.php">Los
                                                    Angeles</a> 4* ALL INCLUSIVE Flights + Accomo £989 PP.</p>
                                        </li>


                                        <li style="border-bottom: 1px solid rgb(234, 234, 234); margin: 0px;"><img
                                                src="{{ asset('img/hotel_deals/4d.jpg') }}" alt="Gran-Canaria"><a
                                                href="#">
                                                Los Angeles, San Francisco &amp; Las Vegas</a>
                                            <p>3 Nights at Las
                                                Vagas, 3 Nights at Los
                                                Angeles and 3 Nights at San
                                                Francisco, 4* Flight+Accomo £1129 PP.</p>
                                        </li>


                                        <li style="border-bottom: 1px solid rgb(234, 234, 234); margin: 0px;"><img
                                                src="{{ asset('img/hotel_deals/dubai.jpg') }}" alt="Gran-Canaria"><a
                                                href="#">Dubai
                                                and
                                                Desert</a>
                                            <p>7 Nights in
                                                Dubai , 5* ALL INCLUSIVE Flight+Accomo £1499.00 PP.</p>
                                        </li>


                                        <li style="border-bottom: 1px solid rgb(234, 234, 234); margin: 0px;"><img
                                                src="{{ asset('img/hotel_deals/antigua.jpg') }}"
                                                alt="Gran-Canaria"><a href="#">Starfish
                                                Halcyon Cove Resort Antigua</a>
                                            <p>7 Nights in
                                                Antigua, 4* ALL INCLUSIVE Flight+Accomo £929.00 PP.</p>
                                        </li>



                                        <li style="border-bottom: 1px solid rgb(234, 234, 234); margin: 0px;"><img
                                                src="{{ asset('img/hotel_deals/barbadoos.jpg') }}"
                                                alt="Gran-Canaria"><a href="#">Butterfly Beach
                                                Hotel</a>
                                            <p>7 Nights in Barbadoos,
                                                5* ALL INCLUSIVE Flight+Accomo £819 PP.</p>
                                        </li>




                                        <li style="border-bottom: 1px solid rgb(234, 234, 234); margin: 0px;"><img
                                                src="{{ asset('img/hotel_deals/h5.jpg') }}" alt="Gran-Canaria"><a
                                                href="#">Veranda
                                                Palmar
                                                Beach, Mauritius</a>
                                            <p>7 Nights, 5*ALL INCLUSIVE Flight+Accomo £939 PP.</p>
                                        </li>



                                        <li style="border-bottom: 1px solid rgb(234, 234, 234); margin: 0px;"><img
                                                src="{{ asset('img/hotel_deals/h3.jpg') }}" alt="Gran-Canaria"><a
                                                href="#">Tanjong
                                                Jara
                                                Resort, Malaysia</a>
                                            <p>7 Nights, 4*ALL INCLUSIVE Flight+Accomo £859.00 PP.</p>
                                        </li>



                                        <li style="border-bottom: 1px solid rgb(234, 234, 234); margin: 0px;"><img
                                                src="{{ asset('img/hotel_deals/h2.jpg') }}" alt="Gran-Canaria"><a
                                                href="#">
                                                Xanadu Island, Turkey</a>
                                            <p>7 Nights, 4*ALL INCLUSIVE Flight+Accomo £855 PP.</p>
                                        </li>



                                        <li style="border-bottom: 1px solid rgb(234, 234, 234); margin: 0px;"><img
                                                src="{{ asset('img/hotel_deals/Jebel_Ali_palm.jpg') }}"
                                                alt="Gran-Canaria"><a href="#">Dubai-Jebel
                                                Ali</a>
                                            <p>7 Nights, 5*ALL INCLUSIVE Flight+Accomo £995 pp.</p>
                                        </li>



                                        <li style="border-bottom: 1px solid rgb(234, 234, 234); margin: 0px;"><img
                                                src="{{ asset('img/hotel_deals/4d.jpg') }}" alt="Gran-Canaria"><a
                                                href="#">Bangkok</a>
                                            <p>7 Nights, 5*ALL INCLUSIVE Flight+Accomo £995 pp.</p>
                                        </li>



                                        <li style="border-bottom: 1px solid rgb(234, 234, 234); margin: 0px;"><img
                                                src="{{ asset('img/hotel_deals/h6.jpg') }}" alt="Mauritius"><a
                                                href="#">The
                                                Residence
                                                Mauritius</a>
                                            <p>7 nights in Mauritius, Flight + Accommodation £999PP.</p>
                                        </li>




                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="enquiry-bottom">
                            <p>Enquire for 2024 and 2025 Hotel dates:</p>
                            <a href="tel:+4402037276366"><img src="{{ asset('img/icons/call-white.svg') }}"
                                    alt=""> +44 0203
                                727
                                6360</a>
                        </div>
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
            <img class="img-fluid me-3" src="{{ asset('img/iata.png') }}" alt="">
            <img class="img-fluid" src="{{ asset('img/NoPath.png') }}" alt="">
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
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/gh/vaakash/jquery-easy-ticker@ea9d510/dist/jquery.easy-ticker.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js">
    </script>

    <script src="{{ asset('js/mobiscroll.jquery.min.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/jquery-easy-ticker.js') }}"></script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
    <script>
        $(document).ready(function() {
            airportnames();

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
                    $('#loadingScreen').removeClass('d-none');

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


        function airportnames() {
            var path = "{{ route('typeahead_destination') }}";
            $('.fromdest').typeahead({
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
                    // Set only the airport code in the input field
                    $(this.$element).val(airport_code); // Update the input with the airport code

                    // Find the closest label to the input and update it
                    $(this.$element).closest('div').find('small.clr-7e').text("From " +
                        airport_name); // Update the label dynamically
                    return airport_code; // Return the airport name for Typeahead
                }
            });
            $('.todest').typeahead({
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
                    $(this.$element).val(airport_code); // Update the input with the airport code

                    // Find the closest label to the input and update it
                    $(this.$element).closest('div').find('small.clr-7e').text("To " +
                        airport_name); // Update the label dynamically
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
                            $('#toLabel').text("From " + selectedName);
                            $("#returnModal").fadeOut();
                            // Optionally, hide the dropdown after selection
                            $('.search-list ul').empty();
                        });
                    });
                },

            });
            //multicity
            $('.departdt').mobiscroll().datepicker({
                controls: ['calendar'],
                display: 'anchored',
                startInput: '#departdateow',
                invalid: [{},
                    new Date(now.getFullYear(), now.getMonth(), 25)
                ],
                inRangeInvalid: true,
                // Set the display format for the datepicker
                dateFormat: 'DDD, DD MMM YY' // Set the date format to 'Sun, 23 Oct 24'
            });
        }

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


            document.querySelectorAll('.control-btn .plus').forEach(button => {
                button.addEventListener('click', function() {
                    updateCount(1, this); // Pass the button as the context
                });
            });

            document.querySelectorAll('.control-btn .minus').forEach(button => {
                button.addEventListener('click', function() {
                    updateCount(-1, this); // Pass the button as the context
                });
            });

            function updateCount(delta, obj) {
                // Find the input field related to the clicked button
                const inputField = obj.closest('.pax-number').querySelector('input[type="text"]');

                let currentValue = parseInt(inputField.value) || 0; // Default to 0 if empty
                currentValue += delta; // Increase or decrease

                // Ensure value doesn't go below allowed limits
                if (inputField.classList.contains('adultcount')) {
                    // Check if the input field has the 'adultcount' class
                    if (currentValue < 1) {
                        currentValue = 1; // Set minimum value for adults to 1
                    }
                } else {
                    // If it's not an adult count, prevent negative values
                    if (currentValue < 0) {
                        currentValue = 0; // Ensure no negative values for other fields
                    }
                }
                inputField.value = currentValue; // Update input field
            }


            // Handle the Done button click
            document.querySelectorAll('.closeButton').forEach(button => {
                button.addEventListener('click', function() {
                    // Get values from the input fields using class names
                    const adultCount = document.getElementsByClassName('adultcount')[0].value;
                    const childCount = document.getElementsByClassName('childcount')[0].value;
                    const infantCount = document.getElementsByClassName('infantcount')[0].value;
                    const selectedCabinClass = document.querySelector(
                        'input[name="cabin_class"]:checked').value;

                    // Build the passengers and cabin type display string
                    let passengerDisplay = `${adultCount} Adult${adultCount > 1 ? 's' : ''}`;
                    if (childCount > 0) {
                        passengerDisplay += `, ${childCount} Child${childCount > 1 ? 'ren' : ''}`;
                    }
                    if (infantCount > 0) {
                        passengerDisplay += `, ${infantCount} Infant${infantCount > 1 ? 's' : ''}`;
                    }

                    // Update the display elements
                    document.getElementsByClassName('passengers')[0].textContent = passengerDisplay;
                    document.getElementsByClassName('classtype')[0].textContent =
                        selectedCabinClass;

                    // Log the passenger display string for debugging
                    console.log(passengerDisplay);
                });
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
        //one way
        $('.departdt').mobiscroll().datepicker({
            controls: ['calendar'],
            display: 'anchored',
            startInput: '#departdateow',
            invalid: [{},
                new Date(now.getFullYear(), now.getMonth(), 25)
            ],
            inRangeInvalid: true,
            // Set the display format for the datepicker
            dateFormat: 'DDD, DD MMM YY' // Set the date format to 'Sun, 23 Oct 24'
        });
        //round trip
        $('#departdatert').mobiscroll().datepicker({
            controls: ['calendar'],
            select: 'range',
            startInput: '#departdatert',
            endInput: '#returndatert',
            invalid: [{

                },
                new Date(now.getFullYear(), now.getMonth(), 25)
            ],
            inRangeInvalid: true,
            // Set the display format for the datepicker
            display: 'anchored', // Change this to your preferred display mode
            dateFormat: 'DDD, DD MMM YY' // Set the date format to 'Sun, 23 Oct 24'
        });



        $(window).on('load', function() {
            // Hide the loading animation
            $('#loadingScreen').fadeOut(500, function() {
                // Show the page content once the loading animation is done
                $('#pageContent').fadeIn(500);
            });
        });
    </script>
    <script>
        $(function() {
            $('.demo1').easyTicker({
                direction: 'up'
            });


            $('.demo2').easyTicker({
                direction: 'down',
            });

            $('.demo3').easyTicker({
                visible: 1,
                interval: 4000
            });

            $('.demo4').easyTicker({
                direction: 'up',
                easing: 'easeOutBounce',
                interval: 2500
            });

            $('.demo5').easyTicker({
                direction: 'up',
                visible: 3,
                easing: 'easeInBack',
                controls: {
                    up: '.btnUp',
                    down: '.btnDown',
                    toggle: '.btnToggle'
                }
            });
        });
    </script>
</body>

</html>
