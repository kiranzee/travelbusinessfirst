<div class="row mb-3 justify-content-center">
    <div class="col-md-12">
        <h3 class="mb-2">What Our Clients Say</h3>
        <div class="d-flex py-4 justify-content-center">
            <img src="img/icons/big-comas.svg" class="img-fluid" alt="">
        </div>
    </div>
    <div class="col-md-12">
        <p class="about-client">Exploring London was an unforgettable journey through history and culture.
            From
            iconic landmarks like Big Ben and Buckingham Palace to the vibrant streets of Camden and Notting
            Hill, every corner revealed a new story. The diversity of experiences from museums to markets
            made
            it a truly enriching adventure.</p>
    </div>
</div>
<div class="py-4">
    <div class="row justify-content-center">
        <div class="col-md-9 d-flex justify-content-center">
            <div id="clientCarousel" class="owl-carousel owl-theme">
                @if ($clientsay->isNotEmpty())
                    @foreach ($clientsay as $client)
                        <div class="item">
                            <div class="card client-speak">
                                <div class="img-card">
                                    <img class="img-fluid rounded-circle" src="{{ asset('uploads/' . $client->image) }}"
                                        alt="{{ $client->name }}">
                                </div>
                                <div class="client-details">
                                    <p class="client-name">{{ $client->name }}</p>
                                    <div class="rating">
                                        <div class="stars d-flex align-items-center justify-content-center">
                                            <!-- Loop through the rating and display filled stars -->
                                            @for ($i = 1; $i <= $client->rating; $i++)
                                                @if ($i <= $client->rating)
                                                    <!-- Filled Star SVG -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                        height="12" viewBox="0 0 24 24">
                                                        <path
                                                            d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z">
                                                        </path>
                                                    </svg>
                                                @else
                                                    <!-- Empty Star SVG (optional, if you want to show the outline of the remaining stars) -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                        height="12" viewBox="0 0 24 24" fill="none"
                                                        stroke="black">
                                                        <path
                                                            d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z">
                                                        </path>
                                                    </svg>
                                                @endif
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                @endif
            </div>
        </div>
    </div>
</div>
