<!-- mobile bottom drawer -->
<div class="bottom-drawer">
    <div class="m-bottom-menu">
        <a href="{{ url('/contactus') }}" class="m-footer-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                <path
                    d="M0 12l11 3.1 7-8.1-8.156 5.672-4.312-1.202 15.362-7.68-3.974 14.57-3.75-3.339-2.17 2.925v-.769l-2-.56v7.383l4.473-6.031 4.527 4.031 6-22z" />
            </svg>
            <span>Contact Us</span>
        </a>
        <a href="{{ url('/login') }}" class="m-footer-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                <path
                    d="M12 2c2.757 0 5 2.243 5 5.001 0 2.756-2.243 5-5 5s-5-2.244-5-5c0-2.758 2.243-5.001 5-5.001zm0-2c-3.866 0-7 3.134-7 7.001 0 3.865 3.134 7 7 7s7-3.135 7-7c0-3.867-3.134-7.001-7-7.001zm6.369 13.353c-.497.498-1.057.931-1.658 1.302 2.872 1.874 4.378 5.083 4.972 7.346h-19.387c.572-2.29 2.058-5.503 4.973-7.358-.603-.374-1.162-.811-1.658-1.312-4.258 3.072-5.611 8.506-5.611 10.669h24c0-2.142-1.44-7.557-5.631-10.647z" />
            </svg>
            <span>My Account</span>
        </a>
    </div>
    <div class="d-inline-flex justify-content-end">
        <a href="https://www.atol.org/check-for-atol/" target="_blank"><img class="img-fluid me-3"
                src="{{ asset('img/iata.png') }}" alt=""></a>
        <a href="https://store.iata.org/ieccacfree" target="_blank"><img class="img-fluid"
                src="{{ asset('img/NoPath.png') }}" alt=""></a>
    </div>
</div>
<!-- Footer Section -->
<section class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-md-5 mb-3 mb-md-0">
                <img class="img-fluid logo-white" src="{{ asset('img/logo-white.png') }}" alt="Travel Business First">
                <p class="mt-2">Travel Business First is part of the Super Destinations Group which has been
                    providing travel services for more than 10 years. We are experts in providing best service at
                    discounted fares for business and first class travel. Our travel consultants are highly
                    experienced with an average industry experience of 15 years. For our regular clients, we provide
                    a dedicated Personal Travel Consultant that understands fully your requirements and thus is able
                    to provide tailor made solutions.</p>
                <div><img src="{{ asset('img/icons/creditcard-icon.webp') }}" class=""></div>

            </div>
            <div class="col-5 col-md-3">
                <h5>QUICK LINKS</h5>
                <ul class="footer-links">
                    <li><a href="{{ url('/aboutus') }}">About Us</a></li>
                    <li><a href="{{ url('/termscondition') }}">Terms &amp; Conditions</a></li>
                    <li><a href="{{ url('/privacypolicy') }}">Privacy and Policy</a></li>
                    <li><a href="{{ url('/foreigntraveladvice') }}">Foreign Travel Advice</a></li>
                </ul>
            </div>
            <div class="col-7 col-md-4">
                <h5>CONTACT INFO</h5>
                <div class="contact-info">
                    <div class="d-flex align-items-start">
                        <img class="mt-1" src="{{ asset('img/icons/location.svg') }}" alt="location">
                        <p>Sir Robert Peel House, 344-348 High Road, Ilford, Essex, UK IG1 1QP</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="mt-1" src="{{ asset('img/icons/whatsapp.svg') }}" alt="location">
                        <a href="https://wa.me/447496275343?text=I'm%20interested!" target="_blank">
                            +44 7496275343
                        </a>
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="mt-1" src="{{ asset('img/icons/call.svg') }}" alt="location">
                        <a href="tel:0203 727 6360">
                            0203 727 6360
                        </a>
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="mt-1" src="{{ asset('img/icons/email.svg') }}" alt="location">
                        <a href="emailto:info@travelbusinessfirst.co.uk">
                            info@travelbusinessfirst.co.uk
                        </a>
                    </div>
                </div>
                <div class="social-section">
                    <h5>SOCIAL MEDIA</h5>
                    <div class="d-flex social-icons">
                        <a href="javascript:void">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 240 240"
                                fill="none">
                                <g clip-path="url(#clip0_1059_8)">
                                    <mask id="mask0_1059_8" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0"
                                        y="0" width="240" height="240">
                                        <path d="M240 0H0V240H240V0Z" fill="white"></path>
                                    </mask>
                                    <g mask="url(#mask0_1059_8)">
                                        <path
                                            d="M221.472 -0.248045H18.768C16.3031 -0.249097 13.8621 0.23563 11.5846 1.17844C9.30704 2.12125 7.23766 3.50365 5.49468 5.24663C3.7517 6.98961 2.36929 9.059 1.42648 11.3365C0.483677 13.614 -0.00104967 16.055 1.70666e-06 18.52V221.224C-0.00104967 223.689 0.483677 226.13 1.42648 228.407C2.36929 230.685 3.7517 232.754 5.49468 234.497C7.23766 236.24 9.30704 237.623 11.5846 238.565C13.8621 239.508 16.3031 239.993 18.768 239.992H221.472C223.937 239.993 226.378 239.508 228.655 238.565C230.933 237.623 233.002 236.24 234.745 234.497C236.488 232.754 237.871 230.685 238.814 228.407C239.756 226.13 240.241 223.689 240.24 221.224V18.52C240.241 16.055 239.756 13.614 238.814 11.3365C237.871 9.059 236.488 6.98961 234.745 5.24663C233.002 3.50365 230.933 2.12125 228.655 1.17844C226.378 0.23563 223.937 -0.249097 221.472 -0.248045ZM226.168 221.224C226.166 222.469 225.67 223.662 224.79 224.542C223.91 225.422 222.717 225.918 221.472 225.92H18.768C17.5232 225.918 16.33 225.422 15.4498 224.542C14.5695 223.662 14.0741 222.469 14.072 221.224V18.52C14.0741 17.2751 14.5695 16.0819 15.4498 15.2017C16.33 14.3215 17.5232 13.8261 18.768 13.824H221.472C222.717 13.8261 223.91 14.3215 224.79 15.2017C225.67 16.0819 226.166 17.2751 226.168 18.52V221.224Z"
                                            fill="white" stroke="white" stroke-width="1.4"></path>
                                        <path
                                            d="M135.984 78.9039C139.363 78.9974 142.719 79.5025 145.976 80.4079L149.072 62.0079C141.807 60.1802 134.315 59.4203 126.832 59.7519C123.114 59.513 119.396 60.218 116.024 61.8013C112.652 63.3846 109.735 65.7948 107.544 68.8079C104.38 74.4797 102.986 80.9691 103.544 87.4399V99.4959H91.1279V117.464H103.56V179.864H126.84V117.464H145.28L146.64 99.4959H126.84V85.4799C126.84 80.6399 131.128 78.9039 135.984 78.9039Z"
                                            fill="white"></path>
                                    </g>
                                </g>
                                <defs>
                                    <clipPath id="clip0_1059_8">
                                        <rect width="240" height="240" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <a href="javascript:void">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 240 240"
                                fill="none">
                                <g clip-path="url(#clip0_1059_16)">
                                    <mask id="mask0_1059_16" style="mask-type:luminance" maskUnits="userSpaceOnUse"
                                        x="0" y="0" width="240" height="240">
                                        <path d="M240 0H0V240H240V0Z" fill="white"></path>
                                    </mask>
                                    <g mask="url(#mask0_1059_16)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M116.96 185.456C129.906 185.456 142.561 181.617 153.325 174.425C164.09 167.232 172.479 157.009 177.433 145.049C182.388 133.088 183.684 119.927 181.158 107.23C178.633 94.5329 172.398 82.8698 163.244 73.7156C154.09 64.5614 142.427 58.3273 129.73 55.8017C117.033 53.2761 103.872 54.5723 91.911 59.5265C79.9505 64.4807 69.7276 72.8704 62.5352 83.6346C55.3428 94.3987 51.5039 107.054 51.5039 120C51.5039 137.36 58.4001 154.009 70.6755 166.284C82.9509 178.56 99.5999 185.456 116.96 185.456ZM116.96 163.64C125.591 163.64 134.028 161.081 141.205 156.285C148.382 151.49 153.975 144.674 157.278 136.7C160.581 128.726 161.445 119.952 159.761 111.486C158.078 103.021 153.921 95.245 147.818 89.1418C141.715 83.0387 133.939 78.8824 125.474 77.1985C117.008 75.5146 108.234 76.3789 100.26 79.6819C92.2854 82.9849 85.4698 88.5783 80.6746 95.7549C75.8794 102.931 73.3199 111.369 73.3199 120C73.3199 125.731 74.4487 131.406 76.6418 136.7C78.8349 141.995 82.0494 146.806 86.1018 150.858C94.2859 159.042 105.386 163.64 116.96 163.64Z"
                                            fill="white"></path>
                                        <path
                                            d="M182.416 43.6399C180.258 43.6399 178.148 44.2799 176.354 45.4789C174.559 46.6779 173.16 48.3821 172.335 50.376C171.509 52.37 171.293 54.564 171.714 56.6807C172.135 58.7974 173.174 60.7418 174.7 62.2678C176.226 63.7939 178.17 64.8332 180.287 65.2542C182.404 65.6753 184.598 65.4592 186.592 64.6333C188.586 63.8074 190.29 62.4087 191.489 60.6143C192.688 58.8198 193.328 56.7101 193.328 54.5519C193.328 51.6578 192.178 48.8823 190.132 46.8359C188.085 44.7895 185.31 43.6399 182.416 43.6399Z"
                                            fill="white"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M4.08815 35.7359C-3.04785 49.7359 -3.04785 68.0639 -3.04785 104.728V135.272C-3.04785 171.928 -3.04785 190.256 4.08815 204.264C10.3648 216.579 20.3793 226.591 32.6961 232.864C46.6961 240 65.0241 240 101.688 240H132.232C168.888 240 187.216 240 201.224 232.864C213.542 226.589 223.557 216.574 229.832 204.256C236.968 190.256 236.968 171.928 236.968 135.264V104.728C236.968 68.0719 236.968 49.7439 229.832 35.7359C223.557 23.4179 213.542 13.4032 201.224 7.12794C187.224 -0.00805712 168.896 -0.00805664 132.232 -0.00805664H101.688C65.0322 -0.00805664 46.7041 -0.00805712 32.6961 7.12794C20.3784 13.4037 10.3639 23.4182 4.08815 35.7359ZM132.232 21.8159H101.688C83.0001 21.8159 70.2961 21.8159 60.4721 22.6159C54.3148 22.7468 48.2428 24.084 42.6002 26.5519C34.389 30.7414 27.7153 37.4235 23.5361 45.6399C21.0599 51.2809 19.7145 57.3529 19.5761 63.5119C18.7761 73.3279 18.7761 86.0399 18.7761 104.728V135.272C18.7761 153.96 18.7761 166.664 19.5761 176.488C19.707 182.645 21.0442 188.717 23.5121 194.36C27.6961 202.572 34.3724 209.248 42.5841 213.432C48.2267 215.9 54.2987 217.238 60.4561 217.368C70.2801 218.168 82.9841 218.168 101.672 218.168H132.216C150.904 218.168 163.608 218.168 173.432 217.368C179.59 217.238 185.662 215.9 191.304 213.432C199.516 209.248 206.192 202.572 210.376 194.36C212.845 188.717 214.182 182.645 214.312 176.488C215.112 166.664 215.112 153.96 215.112 135.272V104.728C215.112 86.0399 215.112 73.3359 214.312 63.5119C214.182 57.3545 212.845 51.2825 210.376 45.6399C206.192 37.4282 199.516 30.7519 191.304 26.5679C185.668 24.0965 179.601 22.7539 173.448 22.6159C163.624 21.8159 150.92 21.8159 132.232 21.8159Z"
                                            fill="white" stroke="white" stroke-width="0.4"></path>
                                    </g>
                                </g>
                                <defs>
                                    <clipPath id="clip0_1059_16">
                                        <rect width="240" height="240" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <a href="javascript:void">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 240 240" fill="none">
                                <path
                                    d="M189.01 11.53H225.81L145.41 103.43L240 228.46H165.94L107.94 152.62L41.56 228.46H4.74L90.74 130.16L0 11.54H75.94L128.37 80.86L189.01 11.53ZM176.1 206.44H196.49L64.86 32.4H42.98L176.1 206.44Z"
                                    fill="white"></path>
                            </svg>
                        </a>
                        <a href="javascript:void">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 240 240" fill="none">
                                <g clip-path="url(#clip0_1059_2)">
                                    <path
                                        d="M120 40C128.55 40 137.32 40.22 145.82 40.58L155.86 41.06L165.47 41.63L174.47 42.24L182.69 42.88C191.612 43.5589 200.008 47.3643 206.4 53.626C212.791 59.8877 216.768 68.204 217.63 77.11L218.03 81.36L218.78 90.46C219.48 99.89 220 110.17 220 120C220 129.83 219.48 140.11 218.78 149.54L218.03 158.64L217.63 162.89C216.768 171.798 212.789 180.115 206.396 186.377C200.002 192.639 191.604 196.443 182.68 197.12L174.48 197.75L165.48 198.37L155.86 198.94L145.82 199.42C137.218 199.793 128.61 199.986 120 200C111.39 199.986 102.782 199.793 94.18 199.42L84.14 198.94L74.53 198.37L65.53 197.75L57.31 197.12C48.3881 196.441 39.992 192.636 33.6004 186.374C27.2089 180.112 23.2319 171.796 22.37 162.89L21.97 158.64L21.22 149.54C20.4583 139.711 20.0514 129.858 20 120C20 110.17 20.52 99.89 21.22 90.46L21.97 81.36L22.37 77.11C23.2316 68.2055 27.2071 59.8905 33.5966 53.6291C39.9861 47.3676 48.3799 43.5612 57.3 42.88L65.51 42.24L74.51 41.63L84.13 41.06L94.17 40.58C102.775 40.2073 111.387 40.0139 120 40ZM120 60C111.75 60 103.26 60.22 95 60.56L85.22 61.03L75.83 61.58L67.01 62.18L58.93 62.81C54.6819 63.1074 50.6769 64.9013 47.6266 67.8728C44.5763 70.8444 42.6784 74.8012 42.27 79.04C41.1 91.13 40 106.18 40 120C40 133.82 41.1 148.87 42.27 160.96C43.12 169.68 50.04 176.46 58.93 177.19L67.01 177.81L75.83 178.41L85.22 178.97L95 179.44C103.26 179.78 111.75 180 120 180C128.25 180 136.74 179.78 145 179.44L154.78 178.97L164.17 178.42L172.99 177.82L181.07 177.19C185.318 176.893 189.323 175.099 192.373 172.127C195.424 169.156 197.322 165.199 197.73 160.96C198.9 148.87 200 133.82 200 120C200 106.18 198.9 91.13 197.73 79.04C197.322 74.8012 195.424 70.8444 192.373 67.8728C189.323 64.9013 185.318 63.1074 181.07 62.81L172.99 62.19L164.17 61.59L154.78 61.03L145 60.56C136.671 60.2025 128.336 60.0158 120 60ZM100 95.75C99.9994 94.7726 100.237 93.8099 100.694 92.9455C101.15 92.0812 101.81 91.3413 102.618 90.7903C103.425 90.2394 104.354 89.8939 105.326 89.7841C106.297 89.6742 107.28 89.8033 108.19 90.16L109 90.56L151 114.8C151.836 115.283 152.544 115.96 153.063 116.774C153.581 117.589 153.896 118.517 153.979 119.478C154.062 120.44 153.912 121.408 153.542 122.3C153.171 123.192 152.591 123.981 151.85 124.6L151 125.2L109 149.45C108.154 149.94 107.2 150.216 106.223 150.253C105.246 150.291 104.274 150.089 103.393 149.665C102.511 149.241 101.747 148.608 101.166 147.821C100.585 147.034 100.205 146.117 100.06 145.15L100 144.25V95.75Z"
                                        fill="white"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_1059_2">
                                        <rect width="240" height="240" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>

                    </div>

                </div>
                <div class="row mt-3">
                    <div class="col-6 col-md-5"><a href="https://g.co/kgs/UoiqnP7" target="_blank"><img
                                src="{{ asset('img/google-review.webp') }}" class="img-fluid" /></a> </div>
                    <div class="col-6 col-md-7">
                        <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
                        <!-- End TrustBox script -->

                        <!-- TrustBox widget - Review Collector -->
                        <div class="trustpilot-widget" data-locale="en-GB"
                            data-template-id="56278e9abfbbba0bdcd568bc"
                            data-businessunit-id="673e0f8c7a770a6694f805e0" data-style-height="52px"
                            data-style-width="100%">
                            <a href="https://uk.trustpilot.com/review/travelbusinessfirst.co.uk" target="_blank"
                                rel="noopener">Trustpilot</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- Copyrights -->
<section class="footer-end">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-between text-center">
            <div class="col-8 col-md-3 d-flex">
                &copy; 2024 All rights Reserved. Travel Business First
            </div>
            <div class="col-6 col-md-6 d-none d-md-block">
                <img src="{{ asset('img/icons/footer-logos.svg') }}" alt="group logos">
            </div>
            <div class="col-6 col-md-3 justify-content-end d-none d-md-inline-flex">

                <a href="{{ url('/contactus') }}">Contact Us</a> &nbsp;&nbsp;
                <a href="https://superdestinations.co.uk" target="_blank" class="me-2">Super Destination Ltd</a>
            </div>
        </div>
    </div>
</section>
<!-- Loading Spinner Overlay -->
<div id="loadingScreen" class="loading-overlay">
    <div class="spinner">

        <img src="{{ asset('img/svg-loaders/ball-triangle.svg') }}" alt="Loading...">
    </div>
</div>

<!-- Search Results Section -->
<div class="search-results">
    <!-- This will be populated with the results from the search -->
</div>
