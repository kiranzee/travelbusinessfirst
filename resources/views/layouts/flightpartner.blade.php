<div id="partnerCarousel" class="owl-carousel owl-theme">
    @if ($flightpartner->isNotEmpty())
        @foreach ($flightpartner as $partner)
            <div class="item"><img class="img-fluid" src="{{ asset('uploads/partners/' . $partner->image) }}"
                    alt=""></div>
        @endforeach
    @else
        <p>No Explore destinations available at the moment.</p>
    @endif

</div>
