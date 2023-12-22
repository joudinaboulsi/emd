    <!-- Footer area start here -->
    <footer class="footer-one secondary-bg">
        <div class="map">
            <img src="/images/map.png" alt="">
        </div>
        <div class="container">
            <div class="footer_one_top position-relative d-flex flex-wrap align-items-center justify-content-between pt-30 pb-30">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="/images/logo/emd-global-logo.png" alt="Emd Global Logo">
                    </a>
                </div>
                <div class="social-icon mt-sm-0">
                    <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#0"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#0"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
            <div class="bor-top position-relative">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
                        <div class="item">
                            <div class="title">
                                <h4>About Company</h4>
                            </div>
                            <div>{!!app('contact')->about!!}</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".4s">
                        <div class="item g-4">
                            <div class="title">
                                <h4>Official info</h4>
                            </div>
                            <ul>
                                <li><a href="{{app('contact')->location_url}}" target="_blank"><i class="fa-solid fa-location-dot pe-1 text-white"></i>
                                     {{app('contact')->location}}
                                    </a>
                                </li>
                                <li> <a href="tel:{{app('contact')->phone_url}}" target="_blank"><i class="fa-solid fa-phone-volume pe-1 text-white"></i>
                                    {{app('contact')->phone}}
                                    </a></li>
                                <li><a href="mailto:{{app('contact')->email}}" target="_blank"><i class="fa-solid fa-envelope pe-1 text-white"></i>
                                        {{app('contact')->email}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1.7s" data-wow-delay=".5s">
                        <div class="item">
                            <div class="title">
                                <h4>main menu</h4>
                            </div>
                            <div class="row g-2">
                                <div class="col-6">
                                    <ul>
                                        <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                                        <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
                                        <li><a href="{{ route('products') }}" class="{{ request()->routeIs('products') || request()->routeIs('product-details') ? 'active' : '' }}">Products</a></li>
                                        <li><a href="{{ route('marketing') }}" class="{{ request()->routeIs('marketing') ? 'active' : '' }}">Marketing</a></li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul>

                                        <li><a href="{{ route('gallery') }}"  class="{{ request()->routeIs('gallery') ? 'active' : '' }}">Gallery</a></li>
                                        <li><a href="{{ route('catalogs') }}" class="{{ request()->routeIs('catalogs') ? 'active' : '' }}">Catalogs</a></li>
                                        <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>© Copyright. All rights reserved. Legal Notices & Trademarks</p>
            </div>
        </div>
    </footer>
    <!-- Footer area end here -->