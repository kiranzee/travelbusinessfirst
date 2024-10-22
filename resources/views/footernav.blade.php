<div class="tab-pane fade show active" id="cityFlight" role="tabpanel" aria-labelledby="cityFlight-tab">
    <div class="row">
        @if ($popularDestinations->isNotEmpty())
            @foreach ($popularDestinations->chunk(10) as $chunkedDestinations)
                <div class="col-6 col-md-3">
                    @foreach ($chunkedDestinations as $destination)
                        <a href="{{ url('/flight-city-search/' . $destination->title . '/' . $destination->id) }}">Flights
                            to {{ $destination->title }}</a>
                    @endforeach
                </div>
            @endforeach
        @else
            <p>No popular destinations available at the moment.</p>
        @endif






    </div>
</div>
{{-- <div class="tab-pane fade" id="explore" role="tabpanel" aria-labelledby="explore-tab">
    <div class="row">
        <div class="col-6 col-md-3">
            <a href="javascript:void(0)">Things to do in Rome</a>
            <a href="javascript:void(0)">Things to do in Venice</a>
            <a href="javascript:void(0)">Things to do in Vienna</a>
            <a href="javascript:void(0)">Things to do in Berlin</a>
            <a href="javascript:void(0)">Things to do in Cairo</a>
            <a href="javascript:void(0)">Things to do in Dubai</a>
            <a href="javascript:void(0)">Things to do in Milan</a>
            <a href="javascript:void(0)">Things to do in Abu Dhabi</a>
            <a href="javascript:void(0)">Things to do in London</a>
            <a href="javascript:void(0)">Things to do in Paris</a>
        </div>
        <div class="col-6 col-md-3">
            <a href="javascript:void(0)">Things to do in Dallas</a>
            <a href="javascript:void(0)">Things to do in Tijuana</a>
            <a href="javascript:void(0)">Things to do in Washington, D.C.</a>
            <a href="javascript:void(0)">Things to do in Manila</a>
            <a href="javascript:void(0)">Things to do in San Francisco</a>
            <a href="javascript:void(0)">Things to do in Paris</a>
            <a href="javascript:void(0)">Things to do in Cancún</a>
            <a href="javascript:void(0)">Things to do in Houston</a>
            <a href="javascript:void(0)">Things to do in Barcelona</a>
            <a href="javascript:void(0)">Things to do in Bangkok</a>
        </div>
        <div class="col-6 col-md-3">
            <a href="javascript:void(0)">Things to do in Dallas</a>
            <a href="javascript:void(0)">Things to do in Tijuana</a>
            <a href="javascript:void(0)">Things to do in Washington, D.C.</a>
            <a href="javascript:void(0)">Things to do in Manila</a>
            <a href="javascript:void(0)">Things to do in San Francisco</a>
            <a href="javascript:void(0)">Things to do in Paris</a>
            <a href="javascript:void(0)">Things to do in Cancún</a>
            <a href="javascript:void(0)">Things to do in Houston</a>
            <a href="javascript:void(0)">Things to do in Barcelona</a>
            <a href="javascript:void(0)">Things to do in Bangkok</a>
        </div>
        <div class="col-6 col-md-3">
            <a href="javascript:void(0)">Things to do in Dallas</a>
            <a href="javascript:void(0)">Things to do in Tijuana</a>
            <a href="javascript:void(0)">Things to do in Washington, D.C.</a>
            <a href="javascript:void(0)">Things to do in Manila</a>
            <a href="javascript:void(0)">Things to do in San Francisco</a>
            <a href="javascript:void(0)">Things to do in Paris</a>
            <a href="javascript:void(0)">Things to do in Cancún</a>
            <a href="javascript:void(0)">Things to do in Houston</a>
            <a href="javascript:void(0)">Things to do in Barcelona</a>
            <a href="javascript:void(0)">Things to do in Bangkok</a>
        </div>
    </div>
</div> --}}
