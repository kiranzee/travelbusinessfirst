<div class="enquiry-section city-search-list">
    <div class="offers">
        <div class="off-discount">Get Up To <span class="clr-">50</span>% OFF!</div>
        <p>Book Now With Confidence!</p>
    </div>
    <div class="booking-tabs">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link " id="pills-oneway-tab" data-bs-toggle="pill" data-bs-target="#pills-oneway"
                    type="button" role="tab" aria-controls="pills-oneway" aria-selected="true">One Way</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-roundtrip-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-roundtrip" type="button" role="tab" aria-controls="pills-roundtrip"
                    aria-selected="false">Round Trip</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-multicity-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-multicity" type="button" role="tab" aria-controls="pills-multicity"
                    aria-selected="false">Multi City</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade" id="pills-oneway" role="tabpanel" aria-labelledby="pills-oneway-tab"
                tabindex="0">
                <form action="{{ route('submit-query') }}" method="POST">
                    @csrf
                    <input type="hidden" name="triptype" class="triptype" value="One Way">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="desti-form-control">
                                <div class="row w-100 align-items-center">
                                    <div id="onwardTrigger" class="col-5 col-md-5">
                                        <div class="departure">
                                            <img class="d-none d-md-block"
                                                src="{{ asset('img/icons/depart-flight.svg') }}" alt="">
                                            <div>
                                                <small class="clr-7e">From</small>
                                                <input class="text-truncate w-100 fromdest" type="text"
                                                    value="" id="fromdestow" name="from[]" placeholder="LON">
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
                                                <small class="clr-7e">To</small>
                                                <input class="text-truncate w-100 todest" type="text" value=""
                                                    name="to[]" placeholder="SYD">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="desti-form-control">
                                <img class="dep-flight" src="{{ asset('img/icons/calendar.svg') }}" alt="">
                                <div class="row g-0 w-100 align-items-center justify-content-between">
                                    <div class="col mrgn-left-32 departure_dt">
                                        <small class="clr-7e">Departure Date</small>
                                        <input class="text-truncate w-100 departdt" type="text"
                                            name="departure_date[]" id="departdateow" value="" placeholder="">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="pax-selection passengerTrigger-ow">
                                <div class="btn custom-filter ext-pd-left" for="" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img class="icons-left" src="{{ asset('img/icons/user_icon.svg') }}"
                                        alt="">
                                    <span class="me-1 me-md-3 passengers">2 Adults</span>
                                    <input type="hidden" name="passengers" value="" class="passengers">
                                    <span class="px-1 px-md-3">●</span>
                                    <span class="classtype">Business Class</span>
                                    <svg class="arrow-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" />
                                    </svg>
                                </div>
                                <div class="add-travelers passengerInput-ow">
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
                                                <input type="text" class="form-control childcount"
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
                                                <input class="form-check-input m-0 me-2" type="checkbox"
                                                    name="cabin_class_1" value="First Class" aria-label="3">
                                                <label for="economy">First Class</label>
                                            </li>
                                            <li class="input-group-text">
                                                <input class="form-check-input m-0 me-2" type="checkbox"
                                                    name="cabin_class_1" value="Business Class" checked
                                                    aria-label="2">
                                                <label for="business">Business Class</label>
                                            </li>
                                            <li class="input-group-text">
                                                <input class="form-check-input m-0 me-2" type="checkbox"
                                                    name="cabin_class_1" value="Premium Class" aria-label="4">
                                                <label for="premiumEco">Premium Class</label>
                                            </li>
                                            <li class="input-group-text">
                                                <input class="form-check-input m-0 me-2" type="checkbox"
                                                    name="cabin_class_1" value="Economy Class" aria-label="1">
                                                <label for="economy">Economy Class</label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-4">
                                            <button type="button" class="btn btn-pax-close closeButton-ow"
                                                id="">Done</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="user-control form-control">
                                <img src="{{ asset('img/icons/user_icon.svg') }}" alt="">
                                <div>
                                    <small class="clr-7e">Full Name</small>
                                    <input class="text-truncate w-100" name="customer_name" type="text"
                                        value="Sunil Singh" placeholder="Full Name">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="user-control form-control">
                                <img src="{{ asset('img/icons/email-dark.svg') }}" alt="">
                                <div>
                                    <small class="clr-7e">Email ID</small>
                                    <input class="text-truncate w-100" name="customer_email" type="email"
                                        value="kiran@kirang.com" placeholder="your@email.com">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="user-control form-control">
                                <img src="{{ asset('img/icons/call-now.svg') }}" alt="">
                                <div>
                                    <small class="clr-7e">Phone Number</small>
                                    <input class="text-truncate w-100" name="customer_phone" maxlength="10"
                                        type="text" value="9711205173" placeholder="9711205173">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="user-control form-control h-60">
                                <img src="{{ asset('img/icons/write-message.svg') }}" alt="">
                                <textarea rows="3" style="min-width: 300px" name="customer_comments" class="w-100" type="text"
                                    placeholder="Enter Your Comment"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="d-flex align-items-center">
                                <input class="form-check-input me-3" id="latestOffer" name="latest_offers"
                                    type="checkbox" value="">
                                <label for="latestOffer">Yes! Send me the latest
                                    offers.</label>
                            </div>
                        </div>
                        <div class="col-md-12 d-inline-flex justify-content-end">
                            <button type="submit" class="btn custom-btn d-block btn-dark w-100">Submit
                                Query</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade show active" id="pills-roundtrip" role="tabpanel"
                aria-labelledby="pills-roundtrip-tab" tabindex="0">
                <form action="{{ route('submit-query') }}" method="POST">
                    @csrf
                    <input type="hidden" name="triptype" class="triptype" value="Round Trip">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="desti-form-control">
                                <div class="row w-100 align-items-center">
                                    <div id="onwardTrigger" class="col-5 col-md-5">
                                        <div class="departure">
                                            <img class="d-none d-md-block"
                                                src="{{ asset('img/icons/depart-flight.svg') }}" alt="">
                                            <div>
                                                <small class="clr-7e">From</small>
                                                <input class="text-truncate w-100 fromdest" type="text"
                                                    value="" id="fromdestrt" name="from[]" placeholder="LHR">
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
                                                <small class="clr-7e">To</small>
                                                <input class="text-truncate w-100 todest" type="text"
                                                    value="" name="to[]" placeholder="DXB">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="desti-form-control">
                                <img class="dep-flight" src="{{ asset('img/icons/calendar.svg') }}" alt="">
                                <div class="row g-0 w-100 align-items-center justify-content-between">
                                    <div class="col mrgn-left-32 departure_dt">
                                        <small class="clr-7e">Departure Date</small>
                                        <input class="text-truncate w-100 departdtrt" type="text"
                                            name="departure_date[]" id="departdatert" value="" placeholder="">
                                    </div>
                                    <div class="col bdr-left-date departure_dt">
                                        <small class="clr-7e">Return Date</small>
                                        <input class="text-truncate w-100 departdtrt" type="text"
                                            name="return_date[]" id="returndatert" value="" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="pax-selection passengerTrigger-ow">
                                <div class="btn custom-filter ext-pd-left" for="" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img class="icons-left" src="{{ asset('img/icons/user_icon.svg') }}"
                                        alt="">
                                    <span class="me-1 me-md-3 passengers">2 Adults</span>
                                    <input type="hidden" name="passengers" value="2 Adults" class="passengers">
                                    <span class="px-1 px-md-3">●</span>
                                    <span class="classtype">Business Class</span>
                                    <svg class="arrow-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" />
                                    </svg>
                                </div>
                                <div class="add-travelers passengerInput-ow">
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
                                                    value="0">
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
                                                    placeholder="0" value="0">
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
                                                <input class="form-check-input m-0 me-2" type="checkbox"
                                                    name="cabin_class_2" value="First Class" aria-label="3">
                                                <label for="economy">First Class</label>
                                            </li>
                                            <li class="input-group-text">
                                                <input class="form-check-input m-0 me-2" type="checkbox"
                                                    name="cabin_class_2" value="Business Class" checked
                                                    aria-label="2">
                                                <label for="business">Business Class</label>
                                            </li>
                                            <li class="input-group-text">
                                                <input class="form-check-input m-0 me-2" type="checkbox"
                                                    name="cabin_class_2" value="Premium Class" aria-label="4">
                                                <label for="premiumEco">Premium Economy</label>
                                            </li>
                                            <li class="input-group-text">
                                                <input class="form-check-input m-0 me-2" type="checkbox"
                                                    name="cabin_class_2" value="Economy Class" aria-label="1">
                                                <label for="economy">Economy</label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-4">
                                            <button type="button"
                                                class="btn btn-pax-close closeButton-ow">Done</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="user-control form-control">
                                <img src="{{ asset('img/icons/user_icon.svg') }}" alt="">
                                <div>
                                    <small class="clr-7e">Full Name</small>
                                    <input class="text-truncate w-100" name="customer_name" type="text"
                                        value="Sunil Singh" placeholder="Sunil Singh">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="user-control form-control">
                                <img src="{{ asset('img/icons/email-dark.svg') }}" alt="">
                                <div>
                                    <small class="clr-7e">Email ID</small>
                                    <input class="text-truncate w-100" name="customer_email" type="email"
                                        value="kiran@kirang.com" placeholder="your@email.com">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="user-control form-control">
                                <img src="{{ asset('img/icons/call-now.svg') }}" alt="">
                                <div>
                                    <small class="clr-7e">Phone Number</small>
                                    <input class="text-truncate w-100" maxlength="10" name="customer_phone"
                                        type="text" value="9711205173" placeholder="9711205173">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="user-control form-control h-60">
                                <img src="{{ asset('img/icons/write-message.svg') }}" alt="">
                                <textarea rows="3" style="min-width: 300px" class="w-100" name="customer_comments" type="text"
                                    placeholder="Enter Your Comment"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="d-flex align-items-center">
                                <input class="form-check-input me-3 latestOffer" name="latest_offers"
                                    id="latestOffer" type="checkbox" value="" aria-label="Latest Offers">
                                <label for="latestOffer">Yes! Send me the latest
                                    offers.</label>
                            </div>
                        </div>
                        <div class="col-md-12 d-inline-flex justify-content-end">
                            <button type="submit" class="btn custom-btn d-block btn-dark w-100">Submit
                                Query</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="pills-multicity" role="tabpanel" aria-labelledby="pills-multicity-tab"
                tabindex="0">
                <form action="{{ route('submit-query') }}" method="POST">
                    @csrf
                    <input type="hidden" name="triptype" class="triptype" value="multi-city">
                    <div id="mcFlights">
                        <div class="multi-city">
                            <div class="row g-1 g-md-3 city-search">
                                <div class="col-8 col-md-8">
                                    <div class="desti-form-control">
                                        <div class="row g-1 w-100 align-items-center">
                                            <div id="onwardTrigger" class="col-5 col-md-5">
                                                <div class="departure">
                                                    <div>
                                                        <small class="clr-7e">From</small>
                                                        <input class="text-truncate w-100 fromdest" type="text"
                                                            value="" name="from[]" placeholder="Dubai"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2 col-md-2 d-inline-flex justify-content-center">
                                                <div class="swap-btn m-0">
                                                    <svg clip-rule="evenodd" fill-rule="evenodd"
                                                        stroke-linejoin="round" stroke-miterlimit="2"
                                                        viewBox="0 0 24 24" width="20" height="20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="m14.523 18.787s4.501-4.505 6.255-6.26c.146-.146.219-.338.219-.53s-.073-.383-.219-.53c-1.753-1.754-6.255-6.258-6.255-6.258-.144-.145-.334-.217-.524-.217-.193 0-.385.074-.532.221-.293.292-.295.766-.004 1.056l4.978 4.978h-14.692c-.414 0-.75.336-.75.75s.336.75.75.75h14.692l-4.979 4.979c-.289.289-.286.762.006 1.054.148.148.341.222.533.222.19 0 .378-.072.522-.215z"
                                                            fill-rule="nonzero" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div id="returnTrigger" class="col-5 col-md-5">
                                                <div class="destination">
                                                    <div>
                                                        <small class="clr-7e">To</small>
                                                        <input class="text-truncate w-100 todest" type="text"
                                                            value="" name="to[]" placeholder="London"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 col-md-4">
                                    <div class="desti-form-control departure_dt">
                                        <div>
                                            <small class="clr-7e">Departure Date</small>
                                            <input class="text-truncate w-100 departdt" type="text"
                                                id="departdatemc"
                                                style="border: none;
                                        outline: none;
                                        background: var(--white);"
                                                name="departure_date[]" value="" placeholder="" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-2 d-flex justify-content-end">
                        <button id="addBtn" class="btn btn-outline-danger">Add
                            City</button>
                    </div>

                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="pax-selection passengerTrigger-ow">
                                <div class="btn custom-filter ext-pd-left" for="" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img class="icons-left" src="{{ asset('img/icons/user_icon.svg') }}"
                                        alt="">
                                    <span class="me-1 me-md-3 passengers">2 Adults</span><input type="hidden"
                                        value="2 Adults" name="passengers" class="passengers"> <span
                                        class="px-1 px-md-3">●</span>
                                    <span class="classtype">Business Class</span>

                                    <svg class="arrow-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" />
                                    </svg>
                                </div>
                                <div class="add-travelers passengerInput-ow">
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
                                                    value="0">
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
                                                    placeholder="0" value="0">
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
                                                <input class="form-check-input m-0 me-2" type="checkbox"
                                                    name="cabin_class_3" value="First Class" aria-label="3">
                                                <label for="economy">First Class</label>
                                            </li>
                                            <li class="input-group-text">
                                                <input class="form-check-input m-0 me-2" type="checkbox"
                                                    name="cabin_class_3" value="Business Class" checked
                                                    aria-label="2">
                                                <label for="business">Business Class</label>
                                            </li>
                                            <li class="input-group-text">
                                                <input class="form-check-input m-0 me-2" type="checkbox"
                                                    name="cabin_class_3" value="Premium Class" aria-label="4">
                                                <label for="premiumEco">Premium Economy</label>
                                            </li>
                                            <li class="input-group-text">
                                                <input class="form-check-input m-0 me-2" type="checkbox"
                                                    name="cabin_class_3" value="Economy Class" aria-label="1">
                                                <label for="economy">Economy</label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-4">
                                            <button type="button"
                                                class="btn btn-pax-close closeButton-ow">Done</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="user-control form-control">
                                        <img src="{{ asset('img/icons/user_icon.svg') }}" alt="">
                                        <div>
                                            <small class="clr-7e">Full Name</small>
                                            <input class="text-truncate w-100 cust_name" type="text"
                                                value="Kiran" name="customer_name" placeholder="Traveller name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="user-control form-control">
                                        <img src="{{ asset('img/icons/email-dark.svg') }}" alt="">
                                        <div>
                                            <small class="clr-7e">Email ID</small>
                                            <input class="text-truncate w-100 cust_email" type="email"
                                                name="customer_email" value="kiran@kirang.com" placeholder="Your@"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="user-control form-control">
                                        <img src="{{ asset('img/icons/call-now.svg') }}" alt="">
                                        <div>
                                            <small class="clr-7e">Phone Number</small>
                                            <input class="text-truncate w-100 cust_phone" maxlength="10"
                                                type="text" name="customer_phone" value="7442249488"
                                                placeholder="+44" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="user-control form-control h-60">
                                        <img src="{{ asset('img/icons/write-message.svg') }}" alt="">
                                        <textarea rows="1" class="w-100 cust_comments" type="text" name="customer_comments"
                                            placeholder="Enter Your Comment"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row g-3 align-items-center">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <input class="form-check-input me-3 latestOffer" name="latest_offers"
                                            id="latestOffer" type="checkbox" value=""
                                            aria-label="Latest Offers">
                                        <label for="latestOffer">Yes! Send me the latest
                                            offers.</label>
                                    </div>
                                </div>
                                <div class="col-md-6 d-inline-flex justify-content-end">
                                    <button type="button" class="btn custom-btn btn-light me-3">Cancel</button>
                                    <button type="submit" class="btn custom-btn btn-dark">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script></script>
