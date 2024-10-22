<div id="mainCarousel" class="owl-carousel owl-theme">
    @if($herosection->isNotEmpty())
    @foreach($herosection as $hero)
    
    <div class="item">
        <div class="main-slider">
            <span class="overlay-left"></span>
            <img src="{{ asset('uploads/' . $hero->image) }}" alt="{{ $hero->title }}" class="img-fluid">
            <div class="top-content">
                <div class="container">
                    <h5 class="fs-3 text-white fw-normal">{{$hero->heading}}</h5>
                    <h2 class="fs-1 fw-bold text-white">{{$hero->title}}</h2>
                    <p class="fs-4 text-white">{!!$hero->description!!}
                       
                    </p>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="item">
        <div class="main-slider">
            <span class="overlay-left"></span>
            <img src="img/flight-banner-2.jpg" class="img-fluid" alt="">
            <div class="top-content">
                <div class="container">
                    <h5 class="fs-3 text-white fw-normal">Flight</h5>
                    <h2 class="fs-1 fw-bold text-white">Deals to Dubai</h2>
                    <p class="fs-4 text-white">Looking for a cheap last-minute deal or the
                        best return flight to
                        London?
                        <br>
                        Find the lowest prices on one-way and return tickets right here.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="main-slider">
            <span class="overlay-left"></span>
            <img src="img/flight-banner-3.jpg" class="img-fluid" alt="">
            <div class="top-content">
                <div class="container">
                    <h5 class="fs-3 text-white fw-normal">Flight</h5>
                    <h2 class="fs-1 fw-bold text-white">Deals to Sydney</h2>
                    <p class="fs-4 text-white">Looking for a cheap last-minute deal or the
                        best return flight to
                        London?
                        <br>
                        Find the lowest prices on one-way and return tickets right here.
                    </p>
                </div>
            </div>
        </div>
    </div> --}}
    @endforeach
    @else
        <p>No popular destinations available at the moment.</p>
    @endif
</div>