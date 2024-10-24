<header class="main-header">
    <nav class="navbar navbar-expand-lg bg-white py-0">
        <div class="container-fluid pd-left pe-0">
            <div class="d-flex justify-content-between align-items-center px-4 header-left">
                <a class="navbar-brand me-md-4 order-2 order-md-1" href="{{ url('/') }}"><img
                        src="{{ asset('img/tbf-logo.png') }}" class="img-fluid" alt="Travel Business First"></a>
                <button class="navbar-toggler order-1 d-md-none" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <!-- <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="m21 4c0-.478-.379-1-1-1h-16c-.62 0-1 .519-1 1v16c0 .621.52 1 1 1h16c.478 0 1-.379 1-1zm-16.5.5h15v15h-15zm12.5 10.75c0-.414-.336-.75-.75-.75h-8.5c-.414 0-.75.336-.75.75s.336.75.75.75h8.5c.414 0 .75-.336.75-.75zm0-3.248c0-.414-.336-.75-.75-.75h-8.5c-.414 0-.75.336-.75.75s.336.75.75.75h8.5c.414 0 .75-.336.75-.75zm0-3.252c0-.414-.336-.75-.75-.75h-8.5c-.414 0-.75.336-.75.75s.336.75.75.75h8.5c.414 0 .75-.336.75-.75z"
                            fill-rule="nonzero"></path>
                    </svg> -->
                    <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="m13 16.745c0-.414-.336-.75-.75-.75h-9.5c-.414 0-.75.336-.75.75s.336.75.75.75h9.5c.414 0 .75-.336.75-.75zm9-5c0-.414-.336-.75-.75-.75h-18.5c-.414 0-.75.336-.75.75s.336.75.75.75h18.5c.414 0 .75-.336.75-.75zm-4-5c0-.414-.336-.75-.75-.75h-14.5c-.414 0-.75.336-.75.75s.336.75.75.75h14.5c.414 0 .75-.336.75-.75z"
                            fill-rule="nonzero" />
                    </svg>
                </button>
                <div class="call-mob order-3 d-md-none">
                    <a href="tel:+02037276366" class="text-decoration-none">
                        <img class="img-fluid" src="{{ asset('img/icons/phone.svg') }}" alt="">
                    </a>
                </div>
            </div>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header p-0">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                            <path
                                d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z" />
                        </svg>
                    </button>
                </div>

                <div class="offcanvas-body p-0 pt-4 pt-md-0">
                    <ul class="navbar-nav mb-2 mb-lg-0 w-100 align-items-center">
                        <li class="nav-item border-md-end">
                            <a class="nav-link px-4  {{ request()->is('hotel') ? '' : 'active' }}" aria-current="page"
                                href="{{ url('/') }}">Flights</a>
                        </li>
                        <li class="nav-item border-md-end">
                            <a class="nav-link px-4 {{ request()->is('hotel') ? 'active' : '' }}"
                                href="{{ url('/hotel') }}">Hotels</a>
                        </li>
                        <li class="nav-item dropdown border-md-end">
                            <a class="nav-link px-4 {{ request()->is('flight-city-search') ? 'active' : '' }}"
                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Destinations
                                <svg class="ms-2" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                    viewBox="0 0 24 24">
                                    <path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" />
                                </svg>
                            </a>
                            <ul class="dropdown-menu desti-dropdown">
                                <div class="row">
                                    @if ($menu->isNotEmpty())
                                        @foreach ($menu as $region => $destinations)
                                            <div class="col-6 col-md-3">
                                                <h6 class="fw-bold clr-dark-pink mb-2">{{ $region }}</h6>
                                                <ul>
                                                    @foreach ($destinations as $destination)
                                                        <li><a
                                                                href="{{ url('/flight-city-search/' . $destination->title . '/' . $destination->id) }}">{{ $destination->title }}</a>
                                                        </li> <!-- Assuming title is the destination name -->
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endforeach
                                    @else
                                        <p>No popular destinations available at the moment.</p>
                                    @endif
                                </div>

                            </ul>
                        </li>
                        <li class="ms-4 no-nav-link">
                            <img class="mx-2" src="{{ asset('img/iata.png') }}" alt="">
                        </li>
                        <li class="no-nav-link">
                            <img class="mx-2" src="{{ asset('img/NoPath.png') }}" alt="">
                        </li>
                        <li class="nav-item border-md-end ms-auto pe-3 no-nav-link">
                            <img src="{{ asset('img/icons/phone.svg') }}" alt="">
                            <a href="tel:+02037276366" class="text-decoration-none mx-2">0203 727 6360</a>
                        </li>
                        <li class="nav-item border-md-end px-4 no-nav-link">
                            <img src="{{ asset('img/icons/message.svg') }}" alt="">
                            <a href="mailto:info@travelbusinessfirst.co.uk"
                                class="text-decoration-none mx-2">info@travelbusinessfirst.co.uk</a>
                        </li>
                        <li class="user_profile ps-4 pe-4 no-nav-link">
                            <a href="{{ url('/login') }}">
                                <img src="{{ asset('img/icons/user_placeholder.svg') }}" alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
<div class="bottom-drawer">
    <div class="m-bottom-menu">
        <a href="javascript:void(0)" class="m-footer-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                <path
                    d="M0 12l11 3.1 7-8.1-8.156 5.672-4.312-1.202 15.362-7.68-3.974 14.57-3.75-3.339-2.17 2.925v-.769l-2-.56v7.383l4.473-6.031 4.527 4.031 6-22z" />
            </svg>
            <span>Enquiry</span>
        </a>
        <a href="javascript:void(0)" class="m-footer-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                <path
                    d="M12 2c2.757 0 5 2.243 5 5.001 0 2.756-2.243 5-5 5s-5-2.244-5-5c0-2.758 2.243-5.001 5-5.001zm0-2c-3.866 0-7 3.134-7 7.001 0 3.865 3.134 7 7 7s7-3.135 7-7c0-3.867-3.134-7.001-7-7.001zm6.369 13.353c-.497.498-1.057.931-1.658 1.302 2.872 1.874 4.378 5.083 4.972 7.346h-19.387c.572-2.29 2.058-5.503 4.973-7.358-.603-.374-1.162-.811-1.658-1.312-4.258 3.072-5.611 8.506-5.611 10.669h24c0-2.142-1.44-7.557-5.631-10.647z" />
            </svg>
            <span>My Account</span>
        </a>
    </div>
    <div class="d-inline-flex justify-content-end">
        <img class="img-fluid me-3" src="{{ asset('img/iata.png') }}" alt="">
        <img class="img-fluid" src="{{ asset('img/NoPath.png') }}" alt="">
    </div>
</div>
