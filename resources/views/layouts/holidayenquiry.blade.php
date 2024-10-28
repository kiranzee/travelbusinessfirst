<div class="enquiry-section city-search-list">
    <div class="offers">
        <div class="off-discount">Get Best <span class="clr-">Deals</span>!</div>
        <p>Book Now With Confidence!</p>
    </div>
    <div class="booking-tabs">

        <div class="tab-content" id="pills-tabContent">
            <form action="{{ route('holiday-enquiry') }}" method="POST">
                @csrf
                <div>
                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="desti-form-control">
                                <div class="row w-100 align-items-center">
                                    <div id="onwardTrigger" class="col-5 col-md-5">
                                        <div class="departure">
                                            <img class="d-none d-md-block"
                                                src="{{ asset('img/icons/depart-flight.svg') }}" alt="">
                                            <div>
                                                <small class="clr-7e">Holiday Deal</small>
                                                <input type="text" value="{{ $bestofactivity->title }}"
                                                    placeholder="Dubai">
                                                <input type="hidden" name="bestofactivityId"
                                                    value="{{ $bestofactivity->id }}">
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
                                    <div class="col mrgn-left-32">
                                        <small class="clr-7e">Holiday Plan Date</small>
                                        <input type="date" class="text-truncate w-100 departdate" name="holiday_date"
                                            required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="user-control form-control">
                                <img src="{{ asset('img/icons/user_icon.svg') }}" alt="">
                                <div>
                                    <small class="clr-7e">Full Name</small>
                                    <input class="text-truncate w-100" type="text" value="" name="cust_name"
                                        id="cust_name" placeholder="Traveller Name">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="user-control form-control">
                                <img src="{{ asset('img/icons/email-dark.svg') }}" alt="">
                                <div>
                                    <small class="clr-7e">Email ID</small>
                                    <input class="text-truncate w-100" type="email" value="" name="cust_email"
                                        id="cust_email" placeholder="...@gmail.com">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="user-control form-control">
                                <img src="{{ asset('img/icons/call-now.svg') }}" alt="">
                                <div>
                                    <small class="clr-7e">Phone Number</small>
                                    <input class="text-truncate w-100" maxlength="10" type="text" value=""
                                        name="cust_phone" id="cust_phone" placeholder="+440">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="user-control form-control h-60">
                                <img src="{{ asset('img/icons/write-message.svg') }}" alt="">
                                <textarea rows="3" style="min-width: 300px" class="w-100" type="text" name="cust_comments"
                                    placeholder="Enter Your Comment">testing</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="d-flex align-items-center">
                                <input class="form-check-input me-3" id="latestOffer" name="latest_offers"
                                    type="checkbox">
                                <label for="latestOffer">Yes! Send me the latest
                                    offers.</label>
                            </div>
                        </div>
                        <div class="col-md-12 d-inline-flex justify-content-end">
                            <button type="submit" class="btn custom-btn d-block btn-dark w-100">Submit
                                Enquiry</button>
                        </div>
                    </div>
                </div>


            </form>
        </div>
    </div>
</div>
