    <!-- Header area start here -->
    <header class="header header-one">
        <div class="header-top d-none d-xl-block">
            <div class="container">
                <div class="header-top-wrp">
                        <a href="{{ route('home') }}" class="logo">
                            <img src="{{asset('assets/settings/'.app('contact')->logo)}}" alt="{{app('contact')->alt}}">
                        </a>
                    <ul class="info">
                        <li><i class="fa-solid primary-color fa-paper-plane"></i> <a href="#0">{{app('contact')->email}}</a></li>
                        <li class="bor-left fw-bold ms-4 ps-4"><i class="fa-solid primary-color fa-phone-volume"></i> <a href="tel:{{app('contact')->phone_url}}">{{app('contact')->phone}}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-section">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo d-block d-xl-none">
                    <a href="{{ route('home') }}">
                        <img src="{{asset('assets/settings/'.app('contact')->logo2)}}" alt="{{app('contact')->alt2}}">
</a>
                    </div>
                    <div class="header-bar d-xl-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <ul class="main-menu">
                        <li>
                            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                        </li>
                        <li>
                            <a href="{{ route('products') }}" class="{{ request()->routeIs('products') || request()->routeIs('product-details') ? 'active' : '' }}">Products</a>
                        </li>
                        <li>
                            <a href="{{ route('marketing') }}" class="{{ request()->routeIs('marketing') ? 'active' : '' }}">Marketing</a>
                        </li>
                        <li>
                            <a href="{{ route('gallery') }}" class="{{ request()->routeIs('gallery') ? 'active' : '' }}">Gallery</a>
                        </li>
                        <li>
                            <a href="{{ route('catalogs') }}" class="{{ request()->routeIs('catalogs') ? 'active' : '' }}">Catalogs</a>
                        </li>
                        <li class="d-block d-xl-none">
                            <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                        </li>
                    </ul>
                    <div class="header_one_info d-none d-xl-flex align-items-center">
                        <a href="{{ route('contact') }}" class="btn-one"><span>Contact Us</span> <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header area end here -->