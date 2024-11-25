"use strict";
// passenger select
const passengerTrigger = document.getElementById("passengerTrigger");
const passengerInput = document.getElementById("passengerInput");
const closeButton = document.getElementById("closeButton");

if (passengerTrigger) {
  passengerTrigger.addEventListener("click", event => {
    event.stopPropagation();

    passengerInput.classList.add("d-block");
    passengerInput.classList.remove("d-none");
  });

  

  closeButton.addEventListener("click", event => {
    event.stopPropagation();
    closePassengerDetails();
  });

  passengerInput.addEventListener("click", event => {
    event.stopPropagation();
  });

  document.addEventListener("click", event => {
    if (event.target !== passengerTrigger && !passengerInput.contains(event.target)) {
      closePassengerDetails();
    }
  });
}
function closePassengerDetails() {
    passengerInput.classList.add("d-none");
    passengerInput.classList.remove("d-block");
  }

const passengerTriggerow = document.getElementsByClassName("passengerTrigger-ow");
const passengerInputow = document.getElementsByClassName("passengerInput-ow");
const closeButtonow = document.getElementsByClassName("closeButton-ow");

// Function to show the passenger input
function openPassengerDetailsow(passengerInputow) {
  passengerInputow.classList.add("d-block");
  passengerInputow.classList.remove("d-none");
}

// Function to close the passenger input
function closePassengerDetailsow(passengerInputow) {
  passengerInputow.classList.add("d-none");
  passengerInputow.classList.remove("d-block");
}

// Initialize event listeners for each section
function initializePassengerSelection(trigger, input, closeButton) {
  trigger.addEventListener("click", event => {
    event.stopPropagation();
    openPassengerDetailsow(input);
  });

  // Add event listener to the corresponding close button
  closeButton.addEventListener("click", event => {
    event.stopPropagation();
    closePassengerDetailsow(input);
  });

  // Prevent closing when clicking inside passenger input
  input.addEventListener("click", event => {
    event.stopPropagation();
  });

  // Close the passenger input if clicked outside
  document.addEventListener("click", event => {
    if (!trigger.contains(event.target) && !input.contains(event.target)) {
      closePassengerDetailsow(input);
    }
  });
}

// Loop through each passenger section and initialize events
Array.from(passengerTriggerow).forEach((trigger, index) => {
  initializePassengerSelection(trigger, passengerInputow[index], closeButtonow[index]);
});

document.querySelectorAll(".closeButton-ow").forEach(button => {
  button.addEventListener("click", function () {
    // Get the closest parent container of the clicked button
    const section = button.closest(".add-travelers");

    // Get values from the input fields within this section
    const adultCount = section.querySelector(".adultcount").value;
    const childCount = section.querySelector(".childcount").value;
    const infantCount = section.querySelector(".infantcount").value;
    const selectedCabinClass = section.querySelector('input[name^="cabin_class"]:checked').value;

    // Build the passengers and cabin type display string
    let passengerDisplay = `${adultCount} Adult${adultCount > 1 ? "s" : ""}`;
    if (childCount > 0) {
      passengerDisplay += `, ${childCount} Child${childCount > 1 ? "ren" : ""}`;
    }
    if (infantCount > 0) {
      passengerDisplay += `, ${infantCount} Infant${infantCount > 1 ? "s" : ""}`;
    }

    // Find the corresponding display elements within the same section
    //const passengerDisplayElement = section.closest('.passengerTrigger-ow').querySelector('.passengers');
    const passengerSection = this.closest(".passengerTrigger-ow");
    const cabinClassElement = section.closest(".passengerTrigger-ow").querySelector(".classtype");

    if (passengerDisplay) {
      passengerSection.querySelector("span.passengers").textContent = passengerDisplay;
      passengerSection.querySelector("input.passengers").value = passengerDisplay;
    }

    if (cabinClassElement) {
      cabinClassElement.textContent = selectedCabinClass;
    }

    // Log the passenger display string for debugging
  });
});

$(document).ready(function () {
  $(".content").each(function () {
    if ($(this).height() < $(this)[0].scrollHeight) {
      $(this).parent().find(".txtcol").show();
    }
  });
  $(".txtcol").click(function () {
    if ($(this).prev().hasClass("truncate")) {
      $(this).parent().find(".content").css("max-height", $(this).parent().find(".content")[0].scrollHeight);
      $(this).children("a").text("read less (-)");
    } else {
      $(this).parent().find(".content").css("max-height", "4rem");
      $(this).children("a").text("Read more (+)");
    }
    $(this).prev().toggleClass("truncate");
  });
  
  $(".menucontent").each(function () {
    if ($(this).height() < $(this)[0].scrollHeight) {
      $(this).parent().find(".menutxtcol").show();
    }
  });
  $(".menutxtcol").click(function () {
    if ($(this).prev().hasClass("truncate")) {
      $(this).parent().find(".menucontent").css("max-height", $(this).parent().find(".menucontent")[0].scrollHeight);
      $(this).children("a").text("read less (-)");
    } else {
      $(this).parent().find(".menucontent").css("max-height", "22rem");
      $(this).children("a").text("Read more (+)");
    }
    $(this).prev().toggleClass("truncate");
  });
  initializeDatePicker();
  

 
  
});

// jQuery slide out modal behavior
$(document).ready(function () {
  $("#onwardTrigger").click(function () {
    $("#onwardModal").fadeIn(300, function() {
      $("#fromdestm").focus(); // Set focus after fadeIn completes
  });
  });
  $("#returnTrigger").click(function () {
    $("#returnModal").fadeIn(300, function() {
      $("#todestm").focus(); // Set focus after fadeIn completes
  });
  });

  $(".go-back").click(function () {
    $("#onwardModal").fadeOut();
  });
  $(".go-back").click(function () {
    $("#returnModal").fadeOut();
  });

  $(window).click(function (event) {
    if ($(event.target).is("#onwardModal")) {
      $("#onwardModal").fadeOut();
    }
  });
  $(window).click(function (event) {
    if ($(event.target).is("#returnModal")) {
      $("#returnModal").fadeOut();
    }
  });
});

// Home Carousel script
$(document).ready(function ($) {
  $("#mainCarousel").owlCarousel({
    loop: false,
    nav: false,
    dots: false,
    autoplay: true,
    items: 1,
    autoplayTimeout: 5000,
    smartSpeed: 800,
    autoplayHoverPause: true
  });

  $("#popularCarousel").owlCarousel({
    loop: false,
    margin: 18,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 5000,
    animateOut: "fadeOut",
    animateIn: "fadeIn",
    smartSpeed: 800,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
        dots: true,
        nav: false
      },
      600: {
        items: 2
      },
      1000: {
        items: 2.5
      }
    }
  });

  $("#mpfdCarousel").owlCarousel({
    nav: true,
    dots: false,
    autoplayTimeout: 6000,
    animateOut: "fadeOut",
    animateIn: "fadeIn",
    smartSpeed: 800,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
        dots: true,
        nav: false
      },
      600: {
        items: 1
      },
      1000: {
        items: 1
      }
    }
  });

  $("#ouruspCarousel").owlCarousel({
    loop: false,
    margin: 18,
    nav: false,
    dots: true,
    autoplay: true,
    autoplayTimeout: 5000,
    animateOut: "fadeOut",
    animateIn: "fadeIn",
    smartSpeed: 800,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 3
      }
    }
  });

  $("#topthingsCarousel").owlCarousel({
    loop: false,
    margin: 18,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 5000,
    animateOut: "fadeOut",
    animateIn: "fadeIn",
    smartSpeed: 800,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
        dots: true,
        nav: false
      },
      600: {
        items: 2
      },
      1000: {
        items: 3
      }
    }
  });

  $("#activityCarousel").owlCarousel({
    margin: 18,
    nav: true,
    autoplay: true,
    autoplayTimeout: 5000,
    animateOut: "fadeOut",
    animateIn: "fadeIn",
    smartSpeed: 800,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
        dots: true,
        nav: false
      },
      600: {
        items: 2
      },
      1000: {
        items: 2.5
      }
    }
  });

  $("#partnerCarousel").owlCarousel({
    margin: 18,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 5000,
    animateOut: "fadeOut",
    animateIn: "fadeIn",
    smartSpeed: 800,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 3
      },
      600: {
        items: 4
      },
      1000: {
        items: 8
      }
    }
  });

  $("#exploreCarousel").owlCarousel({
    margin: 18,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 5000,
    animateOut: "fadeOut",
    animateIn: "fadeIn",
    smartSpeed: 800,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 2,
        dots: true,
        nav: false
      },
      600: {
        items: 2
      },
      1000: {
        items: 4
      }
    }
  });
  $("#attractionCarousel").owlCarousel({
    margin: 18,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 5000,
    animateOut: "fadeOut",
    animateIn: "fadeIn",
    smartSpeed: 800,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
        dots: true,
        nav: false
      },
      600: {
        items: 2
      },
      1000: {
        items: 4
      }
    }
  });

  $("#clientCarousel").owlCarousel({
    autoplayHoverPause: false,
    items: 5,
    center: true,
    nav: false,
    dots: true,
    responsive: {
      0: { items: 1 },
      991: { items: 5 }
    }
  });
});



function initializeDatePicker() {
  var now = new Date();
    $('.departdt').each(function () {
        // Prevent multiple initializations
        if ($(this).data('daterangepicker')) {
            $(this).data('daterangepicker').remove();
        }

        // Initialize daterangepicker
        $(this).daterangepicker({
            singleDatePicker: true,
            minDate: moment(), // Disable past dates
            locale: {
              format: 'ddd, D MMM YY'
          }
        });

        // Attach specific event handlers
        $(this).on('apply.daterangepicker', function (ev, picker) {
            $(this).val(picker.startDate.format('ddd, D MMM YY'));
        });

        $(this).on('cancel.daterangepicker', function (ev, picker) {
            $(this).val('');
        });
        
    });

     //round trip
     $('#departdatert').daterangepicker({
      autoUpdateInput: false,
      minDate: moment(), // Disable past dates
      locale: {
         format: 'ddd, D MMM YY',
          cancelLabel: 'Clear'
      }
  });
  $('#departdatert').on('apply.daterangepicker', function(ev, picker) {
      $(this).val(picker.startDate.format('ddd, D MMM YY'));
      // Set only the end date in the arrival-date field      
      $('#returndatert').val(picker.endDate.format('ddd, D MMM YY'));
  });

  $('#departdatert').on('cancel.daterangepicker', function(ev, picker) {
      $(this).val('');
  });
}

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


// multi city flight search
if (document.querySelector(".multi-city")) {
  const addBtn = document.getElementById("addBtn");
  const container = document.getElementById("mcFlights");
  const multiCityContent = document.querySelector(".multi-city").innerHTML;
  //console.log(multiCityContent);

  addBtn.addEventListener("click", () => {
    const newCityDiv = document.createElement("div");
    newCityDiv.classList.add("multi-city");
    newCityDiv.innerHTML = multiCityContent;
    
    const closeButton = document.createElement("button");
    closeButton.textContent = "x";
    closeButton.classList.add("remove-city");
    newCityDiv.appendChild(closeButton);

    container.appendChild(newCityDiv);
    airportnames();
    initializeDatePicker();

    closeButton.addEventListener("click", () => {
      container.removeChild(newCityDiv);
    });
            // $('.departdt').daterangepicker({
            //     singleDatePicker: true,
            // });
            // $('.departdt').on('apply.daterangepicker', function(ev, picker) {
            //     $(this).val(picker.startDate.format('ddd, D MMM YY'));
            //     // Set only the end date in the arrival-date field               
            // });

            // $('.departdt').on('cancel.daterangepicker', function(ev, picker) {
            //     $(this).val('');
            // });
           
  });
}

function submitFlightEnquiry(form) {
  // Reference the form that was submitted
  var formData = $(form).serializeArray();

  var trip = $(form).find(".triptype").val();
  var from = $(form)
    .find(".fromdest")
    .map(function () {
      return $(this).val();
    })
    .get();
  var to = $(form)
    .find(".todest")
    .map(function () {
      return $(this).val();
    })
    .get();
  var departureDate = $(form)
    .find(".departdt")
    .map(function () {
      return $(this).val();
    })
    .get();

  var passengers = $(form).find(".passengers").text();
  var classType = $(form).find(".classtype").text();
  var customerName = $(form).find(".cust_name").val();
  var customerEmail = $(form).find(".cust_email").val();
  var customerPhone = $(form).find(".cust_phone").val();
  var customerComments = $(form).find(".cust_comments").val();
  var latestOffers = $(form).find(".latestOffer").is(":checked") ? 1 : 0;

  // Check if required fields are filled
  if (!customerName || !customerEmail || !customerPhone || !from.length || !to.length || !departureDate.length) {
    alert("Please fill all the required fields.");
    return;
  }

  // Make the AJAX call using the form data
  $.ajax({
    url: "/submit-query", // Assuming 'submit-query' is your route name
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
    },
    method: "POST",
    data: {
      trip: trip,
      from: from,
      to: to,
      departure_date: departureDate,
      passengers: passengers,
      class_type: classType,
      customer_name: customerName,
      customer_email: customerEmail,
      customer_phone: customerPhone,
      customer_comments: customerComments,
      latest_offers: latestOffers
    },
    success: function (response) {
      alert(response.message);
      window.location.href = "/thank-you"; // Redirect to a thank-you page
    },
    error: function (xhr, status, error) {
      console.log(xhr.responseText);
      alert("An error occurred. Please try again.");
    }
  });
}

// function submitFlightEnquiry() {

//   var trip = $('#triptype').val();
//   var from = $('.fromdest').map(function() { return $(this).val(); }).get();
//   var to = $('.todest').map(function() { return $(this).val(); }).get();
//   var departureDate = $('.departdate').map(function() { return $(this).val(); }).get();
//   //var returnDate = $('.returndate').map(function() { return $(this).val(); }).get();
//   var passengers = $('#passengers').text();
//   var classType = $('#classtype').text();
//   var customerName = $('#cust_name').val();
//   var customerEmail = $('#cust_email').val();
//   var customerPhone = $('#cust_phone').val();
//   var customerComments = $('#cust_comments').val();
//   var latestOffers = $('#latestOffer').is(':checked') ? 1 : 0;
//   //alert('Hi'+from);
//   $.ajax({
//       url: '/submit-query',  // Assuming 'submit-query' is your route name
//       headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     },
//       method: 'POST',
//       data: {

//           from: from,
//           to: to,
//           departure_date: departureDate,
//          // return_date: '2024-10-21',
//           passengers: passengers,
//           class_type: classType,
//           customer_name: customerName,
//           customer_email: customerEmail,
//           customer_phone: customerPhone,
//           customer_comments: customerComments,
//           latest_offers: latestOffers
//       },
//       success: function(response) {
//           alert(response.message);
//           window.location.href = '/thank-you';  // Redirect to a thank-you page
//       },
//       error: function(xhr, status, error) {
//           console.log(xhr.responseText);
//           alert('An error occurred. Please try again.');
//       }
//   });
// }

function flightEnquiry() {
  alert("clicked");

  return;
}
