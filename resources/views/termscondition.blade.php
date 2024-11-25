@include('layouts.header', ['sortedMenu' => $sortedMenu])

<section class="search-top-section">
    <img src="{{ asset('img/aboutus-top-image.webp') }} " class="img-fluid" alt="">

    <div class="modify-search-top">
        <form id="flightSearch">
            <div class="container">
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="desti-form-control">
                            <div class="row w-100 align-items-center">
                                <div id="onwardTrigger" class="col-5 col-md-5">
                                    <div class="departure">
                                        <img class="d-none d-md-block" src="{{ asset('img/icons/depart-flight.svg') }}"
                                            alt="">
                                        <div>
                                            <small class="clr-7e" id="fromLabel">Departure</small>
                                            <input class="text-truncate w-100 fromdest" type="text" value=""
                                                placeholder="Airport" id="fromdest" name="fromdest">
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
                                        <img class="d-none d-md-block" src="{{ asset('img/icons/depart-flight.svg') }}"
                                            alt="">
                                        <div>
                                            <small class="clr-7e" id="toLabel">Destination </small>
                                            <input class="text-truncate w-100 todest" type="text" name="todest"
                                                id="todest" value="" placeholder="Airport">
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
                                    <input class="text-truncate w-100" type="text" name="departdate" id="departdate"
                                        value="" placeholder="">
                                </div>
                                <div class="col bdr-left-date destination_dt">
                                    <small class="clr-7e">Return Date</small>
                                    <input class="text-truncate w-100" type="text" name="returndate" id="returndate"
                                        value="" placeholder="">
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
                                                        stroke-linejoin="round" stroke-miterlimit="2" width="10"
                                                        height="10" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M24 10h-10v-10h-4v10h-10v4h10v10h4v-10h10z" />
                                                    </svg>
                                                </button>
                                                <button type="button" class="minus">
                                                    <svg clip-rule="evenodd" fill-rule="evenodd"
                                                        stroke-linejoin="round" stroke-miterlimit="2" width="10"
                                                        height="10" viewBox="0 0 24 24"
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
                                                        stroke-linejoin="round" stroke-miterlimit="2" width="10"
                                                        height="10" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M24 10h-10v-10h-4v10h-10v4h10v10h4v-10h10z" />
                                                    </svg>
                                                </button>
                                                <button type="button" class="minus">
                                                    <svg clip-rule="evenodd" fill-rule="evenodd"
                                                        stroke-linejoin="round" stroke-miterlimit="2" width="10"
                                                        height="10" viewBox="0 0 24 24"
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
                                            <input type="text" class="form-control infantcount" placeholder="0">
                                            <div class="control-btn">
                                                <button type="button" class="plus">
                                                    <svg clip-rule="evenodd" fill-rule="evenodd"
                                                        stroke-linejoin="round" stroke-miterlimit="2" width="10"
                                                        height="10" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M24 10h-10v-10h-4v10h-10v4h10v10h4v-10h10z" />
                                                    </svg>
                                                </button>
                                                <button type="button" class="minus">
                                                    <svg clip-rule="evenodd" fill-rule="evenodd"
                                                        stroke-linejoin="round" stroke-miterlimit="2" width="10"
                                                        height="10" viewBox="0 0 24 24"
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
                                            <input class="form-check-input m-0 me-2" id="first" type="checkbox"
                                                name="cabin_class" value="First Class" aria-label="3">
                                            <label for="first">First Class</label>
                                        </li>
                                        <li class="input-group-text">
                                            <input class="form-check-input m-0 me-2" id="business" type="checkbox"
                                                name="cabin_class" value="Business Class" checked aria-label="2">
                                            <label for="business">Business Class</label>
                                        </li>
                                        <li class="input-group-text">
                                            <input class="form-check-input m-0 me-2" id="premiumEco" type="checkbox"
                                                name="cabin_class" value="Pre.Economy Class" aria-label="4">
                                            <label for="premiumEco">Premium Economy</label>
                                        </li>
                                        <li class="input-group-text">
                                            <input class="form-check-input m-0 me-2" id="economy" type="checkbox"
                                                name="cabin_class" value="Economy Class" aria-label="1">
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
                        <button type="submit" class="btn-search w-100">Search</button>
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

<nav class="container" aria-label="breadcrumb">
    <ol class="breadcrumb tbf-breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Terms and Conditions</a></li>

    </ol>
</nav>

<section class="section-padding border-top">
    <div class="container">
        <div class="row g-md-5">
            <div class="col-md-10">
                <h2 class="fw-bold mb-3 mb-md-4">Terms and Conditions</h2>


                <div class="qt-page-body">

                    The following detailed booking conditions govern all bookings with Travel Business First Ltd
                    (indicated “we”, “us” or “our” throughout these Terms and Conditions) and whose trading office
                    is at 344-348 High Road, Ilford, Essex. IG11QP. The relevance of the booking conditions that
                    apply to you will be dependent on whether you have booked a ‘package’ or ‘other travel
                    arrangements’.

                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
                    </p>
                    <h4>1.Packaged Holiday Contract</h4>

                    <p>
                        A packaged holiday is one where you have booked a minimum of two of the following:
                        <br>a) transport ie flight, cruise etc
                        <br>b) accommodation
                        <br>c) another tourist service
                        <br>Such booking must be booked for all combinations must be made at the same time, all
                        inclusive and with full payment at the time of booking.
                        <br>Where you have booked just flights, flights and accommodation separately and at
                        different times, or a cruise, such elements are considered other travel arrangements.
                        <br>A package contract will assumed to be in place once you have completed the booking, read
                        and understood the terms and conditions of the booking as provided herein, or made the
                        appropriate payment to us and we have issued our confirmation invoice. Where you have booked
                        other travel arrangements, we act merely as a booking agent and your contract is with the
                        supplier(s) (e.g. the airline or hotel supplier or cruise or tour operator) concerned. The
                        booking conditions of that other company will also apply to you.
                        <br>All contracts with us and all matters arising from them are subject to English law and
                        to the jurisdiction of the courts of England and Wales.
                        <br>The person who makes the booking must be aged 18 or over, accepts these conditions on
                        behalf of all members of the party and is responsible for all payment due from the party.
                    </p>
                    <p></p>

                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
                    </p>
                    <h4>2.ATOL Protection</h4>

                    All the flights and flight-inclusive holidays on this website are financially protected by the
                    ATOL scheme. When you pay you will be supplied with an ATOL Certificate. Please ask for it and
                    check to ensure that everything you booked (flights, hotels and other services) is listed on it.
                    Please see our booking conditions for further information or for more information about
                    financial protection and the ATOL Certificate go to:
                    <a href="https://www.caa.co.uk"> www.caa.co.uk </a> Our ATOL Number is 10713.
                    <br><br>
                    At the time of booking you must pay a deposit, the amount of which varies from £100 per person
                    up to the total holiday cost, depending on the type of booking, and pay any balance of the cost
                    of the holiday no later than 8 weeks before departure. If you book inside 8 weeks of departure
                    full payment is required at time of booking. If you do not make the payments at the required
                    time, your booking will be cancelled and your deposit will be non-refundable.

                    <br><br>
                    Most payments on flights are payable in full; in line with advance purchase restrictions on
                    certain airfares. Your agent will make you aware of payment deadlines at the time of booking;
                    which will also be reflected on your confirmation invoice.
                    <br><br>
                    Note that on deposit payments for flights, fares are not guaranteed until full payment is taken.
                    The airline and agent reserves the right to pass on any increases in taxes, fuel or airfares at
                    the time of balance payment, in the unlikely event there are any increases. The airline and
                    agent also reserve the right to cancel bookings where balance payment is not made as agreed;
                    which will result in admin fees or in some cases loss of deposit.
                    <br><br>Payment can be made by all major credit and debit cards. We levy a charge of 2% of the
                    holiday cost when you use MasterCard or Visa, and a charge of 3% for American Express. There is
                    no charge for payments made through debit cards unless a debit card is registered outside the EU
                    in which case we levy a charge of 2% of the holiday cost.
                    <br><br>


                    <p></p>

                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
                    </p>
                    <h4>3. Your travel documents</h4>

                    We aim to send out your documents 14 days prior to departure by e-mail if not sooner. In most
                    cases travel documents are electronic, and e-mailed to you. We cannot be held responsible for
                    documents lost in the post. Special, Recorded or Registered post can be arranged at an
                    additional charge. We would also like to draw your attention to the purchases by credit or debit
                    cards where payment does not take place in person. In accordance with mail order regulations,
                    all documents will be posted to the billing address of the credit/debit card holder and not the
                    address of the passenger (unless they are one and the same).
                    <p></p>

                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
                    </p>
                    <h4>4. Alterations by you</h4>

                    If after booking you wish to change your travel arrangements; we will do our best to meet your
                    new requirements. You will need to confirm your instructions in writing and pay an amendment fee
                    per booking. Also you must pay any costs we incur in making the amendment, including any charges
                    that may be levied by suppliers (e.g. airlines, hotels). Please note that some travel
                    arrangements (e.g. Apex tickets) may not be changeable after a reservation has been made and any
                    alteration request could incur a cancellation charge of up to 100% of that part of the
                    arrangements.
                    <p></p>

                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
                    <h4>5. Transferring your booking if you are prevented from travelling (packages
                        only)</h4>

                    If you are prevented from travelling, you have the right to transfer your booking to another
                    person subject to both the original client(s) and the transferee(s) paying all costs
                    incurred by us in doing so. However the arrangements must remain exactly the same. We will
                    use our best endeavours to facilitate the transfer and in cases where a transfer is made an
                    additional administration charge per person must be paid. Such charge will be advised by
                    your Travel Consultant.
                    <br><br>Note that air tickets, once issued are non-transfereable.

                    </p>

                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
                    <h4>6. Cancellation by you</h4>

                    You may cancel your booking at any time providing that the cancellation is made by the
                    person making the booking and is communicated to us in writing. As we incur costs when you
                    cancel, we will retain your deposit and additional cancellation charges may apply.
                    <br><br>These charges vary between different suppliers that we use, and these terms and
                    conditions will be communicated to you.
                    <br><br><strong>You may cancel your booking at any time providing that the cancellation is
                        made by the person making the booking and is communicated to us in writing. As we incur
                        costs when you cancel, we will retain your deposit and additional cancellation charges
                        may apply.
                        These charges vary between different suppliers that we use, and these terms and
                        conditions will be communicated to you.</strong>

                    </p>

                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
                        <strong>Packages</strong>
                        The effect of cancelling a package is dependent on the date of original booking and the date
                        of travel.

                    </p>
                    <div class="row">
                        <div class="col-sm-12"><strong>Period before departure within which </strong></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6"><strong>notice of cancellation is received by us</strong></div>
                        <div class="col-sm-6"><strong>Cancellation charge</strong></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">More than 56 days</div>
                        <div class="col-sm-6">Deposit only</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">Between 28 and 56 days</div>
                        <div class="col-sm-6">60% of total holiday cost or full cost of deposit whichever is the
                            higher</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">Between 27 and 7 days</div>
                        <div class="col-sm-6">90% of total holiday cost</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">Less than seven days</div>
                        <div class="col-sm-6">100% of total holiday cost</div>
                    </div>
                    <p></p>

                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
                        <strong>Other travel arrangements</strong>
                        Most discounted airline tickets carry a 100% cancellation charge. Please check at time of
                        booking for the charges which apply to your ticket. Where you wish to cancel an air ticket
                        that has a refund value, you will need to inform us and we will pass the request to the
                        airline. When we receive a refund it will be paid to you. This usually takes 8-12 weeks but
                        in some cases may take considerably longer. Please ensure that any tickets or travel
                        documents returned to the company are sent by registered post.
                    </p>

                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
                    <h4>7. Alterations by us</h4>

                    We reserve the right to change the description of any flight and/or ground service before
                    you book, in which case you will be told before a confirmation invoice is issued.

                    </p>
                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
                        <strong>Packages</strong>

                        It is unlikely that we will have to make any changes to your travel arrangements, but we do
                        plan the arrangements many months in advance. Occasionally we and/or suppliers may have to
                        make changes and we reserve the right to do so at any time. Most of these changes will be
                        minor and we will advise you of them at the earliest possible date. If there is a major
                        change to your holiday, we will inform you as soon as reasonably possible if there is time
                        before your departure. You will have the choice of accepting the amendment as notified,
                        purchasing another holiday from us with the price difference payable/refundable as
                        appropriate, or cancelling the arrangement(s) and receiving a full refund of all monies
                        paid.
                    </p>
                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
                        <strong>Force majeure</strong>

                        This means that we will not pay you compensation if we have to cancel or change your travel
                        arrangements in any way because of unusual or unforeseeable circumstances beyond our
                        control. These can include, for example, war, riot, industrial dispute, terrorist activity
                        and its consequences, natural or nuclear disaster, fire, adverse weather condition.
                    </p>
                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
                        <strong>Other travel arrangements</strong>

                        We are obliged and will endeavour to notify all changes before departure if it is possible
                        to do so (please see clause 16. Flights). No compensation is payable by us in such cases. We
                        will endeavour to find you a suitable alternative if appropriate.
                    </p>
                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
                    <h4>8. Cancellation by us</h4>

                    <strong>Packages</strong>
                    We and/or suppliers reserve the right to cancel your holiday in certain circumstances. For
                    example, if the minimum number of clients required for a particular holiday is not reached,
                    we may have to cancel it. However we will not cancel your travel arrangements less than 8
                    weeks before your departure date, except for reasons of force majeure or failure by you to
                    pay the final balance. If we are unable to provide the booked travel arrangements, you have
                    the choice of purchasing another arrangement from us, if available, with the price
                    difference payable/refundable as appropriate, or of receiving a full refund of all monies
                    paid to us (except insurance premium).

                    </p>

                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
                        <strong>Other travel arrangements</strong>

                        In the unlikely event that a booking has to be cancelled, for any reason other than
                        non-payment by you, we will offer you alternative travel arrangements if these are
                        available. Or, you can have a full and prompt refund of all monies paid to us less any
                        insurance premiums and amendment fees. No compensation is payable.

                    </p>

                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
                    <h4>9. Pricing policy</h4>

                    All of our travel arrangements and fares are subject to availability. Once a confirmation
                    invoice has been issued the price shown on that invoice may only vary as outlined below or
                    if you amend your booking (see clauses 4 and 5).
                    <br><br>Once your airfare or holiday package has been confirmed with tickets issued, we
                    cannot be held liable for any special offers that may be released from the date of issue to
                    the date of departure. The price you pay at the time of booking is the current price that
                    you pay, and the price that is due to us or the supplier at the time of booking.


                    </p>

                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
                        <strong>Packages</strong>

                        The price of your travel arrangements can vary due to changes in transportation costs (e.g.
                        airfares and cost of fuel), changes in dues and taxes (including VAT) or fees payable for
                        services (e.g. landing taxes or embarkation/disembarkation fees at ports and airports) or to
                        reflect fluctuations in exchange rates. In the case of any small variation an amount
                        equivalent to 2% of the invoice price (excluding insurance premiums and amendment charges)
                        will be absorbed or retained. For larger variations this 2% will still be absorbed for
                        increases but not retained from refunds. If this means that you have to pay an increase of
                        more than 10% of the invoice price you will be entitled to cancel the booking and receive a
                        full refund of all monies paid (excluding amendment charges). We will consider an
                        appropriate refund of insurance premiums paid if you can show that you are unable to
                        transfer or reuse your policy. If you decide to cancel in these circumstances you must do so
                        within 14 days of the issue date on the surcharge invoice.


                    </p>

                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
                        <strong>Other travel arrangements</strong>

                        For air tickets, after we have received full payment in cleared funds we will not increase
                        the price. For all other situations, we reserve the right to pass on any cost increase
                        levied by the suppliers.


                    </p>

                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
                    <h4>10. Applications for products and services</h4>
                    <br>
                    Prices, and details, of products and services (and any offers) posted online are subject to
                    change without notice. Offers of any kind may also be subject to certain terms and
                    conditions. All products, services and offers are subject to availability and we and our
                    partners give no guarantee with regard to this point. The provision for details of products
                    and services or offers on this website are not, and should not be construed as an offer to
                    sell or buy such products or services by the relevant company. The company advertising the
                    products and services concerned may accept or reject your offer at its sole discretion.


                    </p>

                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
                        <strong>Seat reservations with airlines</strong>
                        <br>
                        Whilst we offer the service to facilitate passengers with seat requests, we cannot guarantee
                        seat reservations. This is due to aircraft type changing for operational reasons, or
                        migration problems between reservation systems.


                    </p>

                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
                    <h4>11. Commercial use</h4>

                    This website is for both commercial (e.g. travel agencies, airlines, car hire companies and
                    hotel operators etc.) and non-commercial (personal) use only. The products and services
                    contained on this website may be supplied on a commercial basis on the basis that the
                    commercial user clearly identifies all the Terms and Conditions upon which we trade to our
                    customers and by using this site the commercial user warrants their client consents to the
                    relevant Terms and Conditions (in so far as that “client” provides personal data which, by
                    using this website the commercial user consents to our processing such data in accordance
                    with these Terms and Conditions and our Privacy Policy and Security Statement).
                    <br>In the event that you use any of the products or services contained on this website for
                    commercial use, then we shall be entitled to charge you at our rates from time to time in
                    force and previously notified to you in respect of such commercial use. However and for the
                    avoidance of doubt, we are under no obligation to previously notify you in respect of such
                    commercial use.



                    </p>

                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
                    <h4>12. Our liability</h4>

                    In consideration of the fact that we act only as a booking agent, we have no liability
                    whatsoever for any aspect of the arrangements and, in particular, no liability for any loss,
                    personal injury or death however incurred, except where caused by our own proven negligence.

                    </p>

                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
                    <h4>13. Complaints</h4>

                    If a problem occurs whilst you are abroad, you must inform the relevant supplier (e.g.
                    hotel, tour operator, car rental company, airline) immediately so that the matter can be put
                    right. If the supplier cannot resolve the problem to your satisfaction, at the time, you
                    must also contact us immediately by telephoning<tcxspan tcxhref="0203737"
                        title="Call  020 3737  via 3CX"> 020 3737 </tcxspan>6323so that we are given the
                    opportunity to help. In the event that a complaint cannot be resolved at the time, you must
                    write to us within 28 days of your return, quoting your original invoice number, booking
                    reference and giving all relevant information. Failure to take these steps will hinder our
                    ability to resolve the problem and/or investigate it fully and in consequence, any right to
                    compensation you may have may be extinguished or reduced.

                    </p>

                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
                    <h4>14. Passport, visa and health requirements</h4>

                    Please ensure that you are aware of all passport, visa and health requirements and that you
                    allow adequate time to obtain them. You must check applicable requirements with the relevant
                    Embassy, Consulate or Passport Agency. Please note that many countries require that your
                    passport is valid for six months beyond the period of your stay. Requirements can change and
                    it is your responsibility to ensure that you comply with applicable passport, visa and
                    health requirements and take all necessary documents with you to gain access to any country
                    or region to which you make travel arrangements or transit through. We cannot accept any
                    responsibility for customers who do not possess the correct documents and if you fail to do
                    so, you will be solely responsible for any cost, loss or damage that you incur as a result
                    of your failure. Helpful information can be found on the websites
                    www.gov.uk/foreign-travel-advice and www.doh.gov.uk.

                    </p>

                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
                    <h4>15. Suppliers’ conditions</h4>

                    Please note that, as between you and any of the suppliers whose services form part of your
                    booking, the suppliers’ standard terms and conditions will apply. The suppliers’ standard
                    conditions may limit or exclude liability, often in accordance with international
                    conventions. Copies of these conditions may be requested in writing.

                    </p>

                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
                    <h4>16. Flights</h4>
                    Please note that a flight described as “direct” will not necessarily be non-stop. All
                    departure/arrival times are provided by the airlines concerned and are estimates only. They
                    may change due to air traffic control restrictions, weather conditions,
                    operational/maintenance requirements and the requirement for passengers to check in on time.
                    We will endeavour to advise if there is any change to a departure/arrival time previously
                    given to you or shown on your ticket but you are also h3ly advised to reconfirm your
                    flights, including departure times, with the airline, 72 hours prior to departure. We are
                    unable to make any special arrangements for you if you are delayed; these matters are at the
                    sole discretion of the airline concerned.

                    </p>

                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
                    <h4>17. Special requests</h4>
                    If you have any special requests, these will be passed on to the relevant supplier but
                    cannot be guaranteed by us.

                    </p>

                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
                    <h4>18. Your financial protection</h4>
                    When you buy an ATOL protected flight or flight inclusive holiday from us you will receive
                    an ATOL Certificate. This lists what is financially protected, where you can get information
                    on what this means for you and who to contact if things go wrong.
                    <br>We, or the suppliers identified on your ATOL Certificate, will provide you with the
                    services listed on the ATOL Certificate (or a suitable alternative). In some cases, where
                    neither we nor the supplier are able to do so for reasons of insolvency, an alternative ATOL
                    holder may provide you with the services you have bought or a suitable alternative (at no
                    extra cost to you). You agree to accept that in those circumstances the alternative ATOL
                    holder will perform those obligations and you agree to pay any money outstanding to be paid
                    by you under your contract to that alternative ATOL holder. However, you also agree that in
                    some cases it will not be possible to appoint an alternative ATOL holder, in which case you
                    will be entitled to make a claim under the ATOL scheme (or your credit card issuer where
                    applicable).
                    <br>If we, or the suppliers identified on your ATOL certificate, are unable to provide the
                    services listed (or a suitable alternative, through an alternative ATOL holder or otherwise)
                    for reasons of insolvency, the Trustees of the Air Travel Trust may make a payment to (or
                    confer a benefit on) you under the ATOL scheme. You agree that in return for such a payment
                    or benefit you assign absolutely to those Trustees any claims which you have or may have
                    arising out of or relating to the non-provision of the services, including any claim against
                    us, the travel agent (or your credit card issuer where applicable). You also agree that any
                    such claims may be re-assigned to another body, if that other body has paid sums you have
                    claimed under the ATOL scheme.


                    </p>

                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
                    <h4>19. Travel insurance</h4>
                    We highly recommend that you take out travel insurance for your whole journey.

                    </p>

                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
                    <h4>20. Copyright</h4>
                    The copyright in the material contained in this website belongs to us, our partners or our
                    licensed source. For the purposes of a transaction any person may copy any part of this
                    material, subject to the following conditions:
                    </p>
                    <ul>
                        <li>The material may not be used for any commercial purposes.</li>
                        <li>The copies must retain any copyrights or other intellectual property notices contained
                            in the original material.</li>
                        <li>The products and technology or processes described in this website may be subject to
                            other intellectual property rights reserved by us or other third parties (and no licence
                            is granted in respect of those intellectual property rights).</li>
                        <li>Images and logos on this website are protected by copyright and may not be reproduced or
                            appropriated in any manner without the written permission of their respective owner(s).
                        </li>
                    </ul>


                    <p></p>

                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
                    <h4>21. Changes to terms and records of agreement</h4>
                    We and our partners reserve the right to change these terms and conditions at any time by
                    posting changes on this or our partners’ website(s). It is your responsibility to review the
                    website terms and conditions regularly to ensure you are aware of the same. Your use of this
                    website after a change has been posted will be deemed to signify your acceptance of the
                    modified terms and conditions. We recommend that you print off and retain for your records a
                    copy of these terms and conditions from time to time and a copy of any terms and conditions
                    relating to any product or service which you apply for online, together with any related
                    application and/or proposal form duly completed and submitted to us or our partners (and
                    received by us or our partners). Any amendment to any terms and conditions must be agreed in
                    writing by us or by the relevant company with whom you contract.


                    </p>
                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
                    <h4>22. Disclaimers</h4>
                    Whilst we have taken care in the preparation of the contents of this website, the website
                    and information, names, images, pictures, logos and icons regarding or relating to us or our
                    partners, or the products and services of the same (or to third party products and services
                    or those of our carefully selected partners), are provided on an “as existing” basis without
                    any representation or endorsement being made and without any warranty of any kind, whether
                    express or implied, including but not limited to, any implied warranties of satisfactory
                    quality, fitness for a particular purpose, non-infringement, compatibility, security and
                    accuracy. To the extent permitted by law, all such terms and warranties are hereby excluded.
                    In no event will we or our partners be liable (whether in contract or tort, including
                    negligence or breach of statutory duty or otherwise) for any losses sustained and arising
                    out of or in connection with use of this website including, without limitation, indirect or
                    consequential losses, loss of profit, loss of data or special loss.
                    <br><br>We do not make claim that the information contained in this website is accurate,
                    comprehensive, verified or complete, and shall accept no liability for the accuracy or
                    completeness of the information contained in the website or for any reliance placed by any
                    person or party (including but not limited to any third party) on the information contained
                    herein. Furthermore and for the avoidance of doubt, should a manual input “pricing” or
                    “description” error occur, or the fare is increased by the airline before the balance has
                    been paid in full by you, we reserve the right to inform you, cancel your booking for “nil”
                    cost and give you the option to re-book at the higher price or lower price (as dictated at
                    the time).
                    <br><br>We do not warrant that the functions or materials accessible from or contained in
                    this website will be uninterrupted or error free, that defects will be corrected or that
                    this website or the server that makes it available are virus or bug free or represent the
                    full functionality, accuracy or reliability of the materials.
                    <br><br>If any of these Terms and Conditions (or any terms and conditions relating to a
                    product or service referred to in this or any of our partners website should be determined
                    to be illegal, invalid or otherwise unenforceable by reason of the laws of any state or
                    country in which such terms and conditions are intended to be effective, then to the extent
                    of such illegality, invalidity or unenforceability, and in relation to such state or country
                    only, such terms or condition shall be deleted and severed from the rest of the relevant
                    terms and conditions and the remaining terms and conditions shall survive, remain in full
                    force and effect and continue to be binding and enforceable. Nothing in these terms and
                    conditions shall exclude our liability for death or personal injury resulting from our
                    negligence.



                    </p>

                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
                    <h4>23. Headings</h4>
                    Headings used in these terms and conditions are for convenience only and shall not affect
                    their interpretation.

                    </p>

                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
                    <h4>24. Jurisdiction and law</h4>
                    Unless otherwise specified, the products and services described in this website are
                    available only to UK residents (excluding the Channel Islands and Isle of Man). The
                    information on this website is not directed at anyone other than UK residents and
                    applications from others will, unless otherwise stated, not be accepted. We make no
                    representation that any product or service referred to on this or our partners’ website is
                    appropriate for use or available in other locations. The information and other materials
                    contained in this website may not satisfy the laws of any other country and those who choose
                    to access this site from other locations are responsible for compliance with local laws if
                    and to the extent local laws are applicable. The phone numbers provided only apply to phone
                    calls made from within the UK.
                    <br>These Terms and Conditions and any terms and conditions relating to products or services
                    described in this website shall be governed by and construed in accordance with the laws of
                    England and Wales. Disputes arising in relation to the same shall, unless otherwise
                    expressly agreed, be subject to the exclusive jurisdiction of the courts of England and
                    Wales.


                    </p>

                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
                    <h4>25. Links to other websites</h4>
                    Certain (hypertext) links may lead you to websites that are not under the control of us or
                    our carefully selected partners. When you activate any of these links, you will leave our
                    website and we have no control over and will accept no responsibility or liability in
                    respect of the material on any such other website. By allowing links with third party
                    websites we do not intend to solicit business or offer any security to any person in any
                    country, directly or indirectly.

                    </p>

                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
                    <h4>26. Monitoring of phone calls/e-mails</h4>
                    Entirely subject to our Privacy Policy, telephone calls using the telephone numbers provided
                    on this website and e-mail correspondence with us at the e-mail addresses accessible
                    through, or discernible from, this website may be recorded or monitored. By using such
                    communication methods you are consenting to the recording or monitoring of the same.

                    </p>

                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
                    <h4>27. Product terms and conditions</h4>

                    If you apply for any product or service detailed on this website, these Terms and Conditions
                    should be read in conjunction with any other terms and conditions which relate to any such
                    product or service, i.e. booking terms &amp; conditions (in particular those of our
                    carefully selected partners e.g. airlines, car hire companies and hotel operators) and, in
                    the event of any contradiction between these Terms and Conditions and the specific terms and
                    conditions relating to such product or service, the latter shall prevail. For the purposes
                    of these Terms and Conditions, “product(s)” and “service(s)” shall not include, without
                    limitation, any representation and/or warranty and/or advice as to the suitability and/or
                    fitness for purpose of either for the user’s express and/or implied purpose. Nothing in
                    these Terms and Conditions affects your statutory rights as a consumer.

                    </p>
                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
                    <h4>28. Trademarks</h4>
                    The images, logos and names on this website identify us and our carefully selected partners.
                    Nothing contained in this website shall be deemed to confer on any person any licence or
                    right on the part of the companies mentioned above or any third party with respect to any
                    such image, logo or name.

                    </p>



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
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
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
                        direct_flight: directFlight,
                        tripType: tripType
                    },
                    success: function(data) {
                        // Hide the loading screen

                        //window.location.href = '/search-results';
                        // Display the search results
                        //$('.search-results').html(data);
                        // Create URL with parameters
                        console.log(returnDate);
                        let returnDateParam = returnDate ? encodeURIComponent(
                            formatDateToYYYYMMDD(returnDate)) : '';
                        let url =
                            `/search-results?from=${encodeURIComponent(fromDest)}&to=${encodeURIComponent(toDest)}&departure=${encodeURIComponent(formatDateToYYYYMMDD(departureDate))}&return=${returnDateParam}&passengers=${encodeURIComponent(numberOfPassengers[0])}&cabin_class=${encodeURIComponent(cabinClass)}&direct_flight=${encodeURIComponent(directFlight)}&trip_type=${tripType}`;

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
    $('input[name="departdate"]').daterangepicker({
        autoUpdateInput: false,
        minDate: moment(), // Disable past dates
        locale: {
            cancelLabel: 'Clear'
        }
    });

    $('input[name="departdate"]').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('ddd, D MMM YY'));
        // Set only the end date in the arrival-date field
        $('input[name="returndate"]').val(picker.endDate.format('ddd, D MMM YY'));
    });

    $('input[name="departdate"]').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
    });




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
