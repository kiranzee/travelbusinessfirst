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
        <li class="breadcrumb-item"><a href="#">About Us</a></li>

    </ol>
</nav>

<section class="section-padding border-top">
    <div class="container">
        <div class="row g-md-5">
            <div class="col-md-10">
                <h2 class="fw-bold mb-3 mb-md-4">About Travel Business First</h2>


                <div class="hotel-description">
                    <span>
                        <p>At <strong>Travel Business First</strong>, we specialize in delivering premium travel
                            experiences, offering exclusive Business Class and First Class airline tickets, along
                            with luxurious holiday packages to breathtaking destinations across the globe. Our
                            mission is to provide seamless, personalized, and top-tier travel services, ensuring our
                            clients enjoy every aspect of their journey.</p>

                        <p> As part of the Super Destinations Ltd, which has been a trusted name in travel for over
                            10 years, we are committed to offering the best service at discounted fares for business
                            and first-class travelers. Our experienced travel consultants, with an average of 15
                            years in the industry, are dedicated to crafting bespoke travel solutions that cater to
                            the specific needs of each client. For our regular clients, we assign a dedicated
                            Personal Travel Consultant who understands your preferences and delivers tailor-made
                            solutions to enhance your travel experience.</p>

                        <p> We are proud to be an ATOL-protected company (Registration No. 10713), which guarantees
                            that your holiday is financially protected. ATOL (Air Travel Organiser’s Licence) is a
                            UK financial protection scheme that ensures your money is safeguarded in case of any
                            unforeseen circumstances, giving you peace of mind when booking your flights and
                            holidays with us.</p>

                        <p>In addition, we are a registered IATA (International Air Transport Association) member,
                            reinforcing our credibility and global standing within the airline and travel industry.
                            Our IATA accreditation allows us to access the best airfares and ensures that we adhere
                            to the highest standards of professionalism, safety, and reliability.</p>

                        <p> Choose Travel Business First for exceptional service, exclusive fares, and luxurious
                            travel experiences backed by both ATOL and IATA protection.</p>
                    </span>
                    <hr>
                    <h4>A Note from Our CEO</h4>

                    <span>
                        <p>At Travel Business First, we believe that travel should be more than just reaching a
                            destination—it should be an experience of luxury, comfort, and exceptional service from
                            start to finish. Over the years, we’ve built a reputation for offering bespoke travel
                            solutions that cater to the unique needs of each of our clients, ensuring that every
                            journey feels as special as the destinations they explore.</p>

                        <p> As part of the Super Destinations Group, we take pride in the legacy of over 10 years of
                            delivering top-tier travel services. Our success has always been driven by one
                            principle: putting our clients first. That’s why we’ve assembled a team of highly
                            experienced travel consultants who are dedicated to offering personalized service,
                            securing the best fares, and making your travel as smooth and enjoyable as possible.</p>

                        <p> Whether you’re flying for business or planning your dream holiday, our goal is to exceed
                            your expectations at every step of the way. We are deeply committed to providing the
                            highest level of service, and we look forward to continuing to serve you on your future
                            travels.</p>

                        <p> Thank you for choosing Travel Business First. We’re excited to help you explore the
                            world in style.</p>

                        Warm regards,<br />
                        <img src="{{ asset('img/ceo_signature.webp') }}" alt=""><br />
                        Chief Executive Officer<br />
                        Travel Business First
                        <span>
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
