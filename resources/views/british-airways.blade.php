@include('layouts.header', ['sortedMenu' => $sortedMenu])

<section class="search-top-section">
    <img src="{{ asset('img/britishairways-top-image.webp') }}" class="img-fluid" alt="" height="175px">

    <div class="modify-search-top">
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
                                    <img class="swap-icon" src="{{ asset('img/icons/swap-icon.svg') }}" alt="">
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
                                                <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round"
                                                    stroke-miterlimit="2" width="10" height="10"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M24 10h-10v-10h-4v10h-10v4h10v10h4v-10h10z" />
                                                </svg>
                                            </button>
                                            <button type="button" class="minus">
                                                <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round"
                                                    stroke-miterlimit="2" width="10" height="10"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
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
                                                <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round"
                                                    stroke-miterlimit="2" width="10" height="10"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M24 10h-10v-10h-4v10h-10v4h10v10h4v-10h10z" />
                                                </svg>
                                            </button>
                                            <button type="button" class="minus">
                                                <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round"
                                                    stroke-miterlimit="2" width="10" height="10"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
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
                                                <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round"
                                                    stroke-miterlimit="2" width="10" height="10"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M24 10h-10v-10h-4v10h-10v4h10v10h4v-10h10z" />
                                                </svg>
                                            </button>
                                            <button type="button" class="minus">
                                                <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round"
                                                    stroke-miterlimit="2" width="10" height="10"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
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
                                    <button class="btn btn-pax-close closeButton" id="closeButton">Done</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                    <button onclick='#' class="btn-search w-100">Search</button>
                </div>
            </div>
        </div>
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
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">British Airways</a></li>

    </ol>
</nav>

<section class="section-padding border-top">
    <div class="container">
        <div class="row g-md-5">
            <div class="col-md-8">

                <div>
                    <h1>British Airways</h1>
                    <div class="flight-description">
                        <div class="info-text">
                            <div class="row">
                                <div class="col-lg-12">
                                    <p>British Airways is one of the world's leading global premium airlines and the
                                        largest international carrier in the UK.</p>

                                    <p>The carrier has its home base at London Heathrow, the world's busiest
                                        international airport, and flies to more than 170 destinations in 70 countries.
                                    </p>
                                    <p>This Airline has a fleet of more than 280 aircraft, including the A380 and 787.
                                    </p>
                                    <p>The airline carries more than 40 million customers a year.</p>
                                    <p>Travel Business First has great discounts with British Airline. Save upto 50% on
                                        over 100 routes offered by the airline.</p>
                                </div>
                            </div>
                            <div class="info-text">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                        <img src="{{ asset('img/ba-1.jpg') }}"
                                            class="w-100 shadow-1-strong rounded mb-4"
                                            alt="British Airways Business Class" />
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="{{ asset('img/ba-2.jpg') }}"
                                            class="w-100 shadow-1-strong rounded mb-4"
                                            alt="British Airways Business class" />
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="{{ asset('img/ba-4.jpg') }}"
                                            class="w-100 shadow-1-strong rounded mb-4"
                                            alt="British Airways Business Class" />

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>



            </div>
            <div class="col-md-4">

                @include('layouts.enquiryform')
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
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>
<script>
    $(document).ready(function() {
        airportnames();
        $('.btn-search').on('click', function(e) {
            e.preventDefault(); // Prevent form submission or page refresh
            var selectedCabinClasses = [];

            // Loop through each checked checkbox and get the value of aria-label
            $('input[name="cabin_class"]:checked').each(function() {
                selectedCabinClasses.push($(this).attr('aria-label'));
            });

            // Log the selected cabin class values or do something with them
            //console.log(selectedCabinClasses[0]);
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
            // Determine selected trip type
            const tripType = $('#oneway').is(':checked') ? 'oneway' : 'roundtrip';

            // Extract only the number



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
        });

        function formatDateToYYYYMMDD(dateStr) {
            const date = new Date(dateStr);
            const year = date.getFullYear();
            const month = (date.getMonth() + 1).toString().padStart(2,
                '0'); // Add 1 because months are zero-based
            const day = date.getDate().toString().padStart(2, '0');

            return `${year}-${month}-${day}`; // Return formatted date as YYYY-MM-DD
        }

        // Set formatted date to input field on page load
        document.getElementById('departdate').value = formatDate(new Date());
        // Set Return Date to current date + 8 days
        const returnDate = new Date();
        returnDate.setDate(returnDate.getDate() + 8); // Add 8 days to the current date
        document.getElementById('returndate').value = formatDate(returnDate);

        // Set formatted date to input field on page load
        document.getElementById('departdateow').value = formatDate(new Date());
        document.getElementById('departdatert').value = formatDate(new Date());
        $('input[name="departure_date[]"]').val(formatDate(new Date()));
        // Set Return Date to current date + 8 days
        const returnDatert = new Date();
        returnDatert.setDate(returnDatert.getDate() + 8); // Add 8 days to the current date
        document.getElementById('returndatert').value = formatDate(returnDatert);

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
                        var listItem =
                            `<li class="search-item" data-code="${item.airport_code}" data-name="${item.airport_name}"><div><p class="city">${item.airport_name}, ${item.airport_code}</p><small>${item.airport_name}</small></div><div class="ap-code">${item.airport_code}</div></li>`;
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
                        var listItem =
                            `<li class="search-item" data-code="${item.airport_code}" data-name="${item.airport_name}"><div><p class="city">${item.airport_name}, ${item.airport_code}</p><small>${item.airport_name}</small></div><div class="ap-code">${item.airport_code}</div></li>`;
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
