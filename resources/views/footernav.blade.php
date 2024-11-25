 <div class="container">
     <div class="mt-2 mt-md-3 mb-3 mb-md-4">
         <h4 class="mb-0 text-white">Explore More Flights</h4>
     </div>
     {{-- <div class="nav nav-tabs" id="exploreTab" role="tablist">
         <button class="nav-link active" id="cityFlight-tab" data-bs-toggle="tab" data-bs-target="#cityFlight"
             type="button" role="tab" aria-controls="cityFlight" aria-selected="true">Flight To Cities</button> --}}
     {{-- <button class="nav-link" id="countryFlight-tab" data-bs-toggle="tab" data-bs-target="#countryFlight"
                    type="button" role="tab" aria-controls="countryFlight" aria-selected="false">Flight To Top
                    Countries</button>
                <button class="nav-link" id="flightRoute-tab" data-bs-toggle="tab" data-bs-target="#flightRoute"
                    type="button" role="tab" aria-controls="flightRoute" aria-selected="false">Top Flight
                    Routes</button> --}}
     {{-- <button class="nav-link" id="explore-tab" data-bs-toggle="tab" data-bs-target="#explore"
                    type="button" role="tab" aria-controls="explore" aria-selected="false">Explore</button> --}}
     {{-- </div> --}}
     <div class="tab-content explore-contents" id="exploreTabContent">
         <div class="tab-pane fade show active" id="cityFlight" role="tabpanel" aria-labelledby="cityFlight-tab">
             <div class="row menucontent truncate">
                 @if ($popularDestinations->isNotEmpty())
                     @foreach ($popularDestinations->chunk(10) as $chunkedDestinations)
                         <div class="col-6 col-md-3">
                             @foreach ($chunkedDestinations as $destination)
                                 <a
                                     href="{{ route('flight-city-search.citySearch', ['cityname' => $destination->link_name]) }}">Flights
                                     to {{ $destination->title }}</a>
                             @endforeach
                         </div>
                     @endforeach
                 @else
                     <p>No popular destinations available at the moment.</p>
                 @endif






             </div>
             <div class="menutxtcol"><a>Read more +</a></div>
         </div>
     </div>
 </div>

 </section>
