<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('home') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="/images/logo/emd-global-logo-dark.png" alt="EMD Global Logo" width="100">
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Layouts -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Pages</span>
        </li>

        <!-- Home Pages -->
     <li class="menu-item {{ Route::currentRouteName() == 'cms_clients'   ||Route::currentRouteName() == 'cms_home_page' ||Route::currentRouteName() == 'cms_slider_text' ||Route::currentRouteName() == 'cms_slider_image' ||Route::currentRouteName() == 'cms_news' ?'active' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='bx bxs-dock-top me-2'></i>
                <div data-i18n="Home Page">Home Page </div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Route::currentRouteName() == 'cms_home_page' ? 'active' : '' }}">
                    <a href="{{ route('cms_home_page') }}" class="menu-link">
                        <div data-i18n="Content Home Page">Content Home Page</div>
                    </a>
                </li>

                <li class="menu-item {{ Route::currentRouteName() == 'cms_slider_image' ? 'active' : '' }}">
                    <a href="{{ route('cms_slider_image') }}" class="menu-link">
                        <div data-i18n="Sliders Image">Sliders Image</div>
                    </a>
                </li>

                <li class="menu-item {{ Route::currentRouteName() == 'cms_clients' ? 'active' : '' }}">
                    <a href="{{ route('cms_clients') }}" class="menu-link">
                        <div data-i18n="Clients">Clients</div>
                    </a>
                </li>

                <li class="menu-item {{ Route::currentRouteName() == 'cms_news' ? 'active' : '' }}">
                    <a href="{{ route('cms_news') }}" class="menu-link">
                        <div data-i18n="News">News</div>
                    </a>
                </li>

                <li class="menu-item {{ Route::currentRouteName() == 'cms_slider_text' ? 'active' : '' }}">
                    <a href="{{ route('cms_slider_text') }}" class="menu-link">
                        <div data-i18n="Slider Text">Slider Text</div>
                    </a>
                </li>
            </ul>
        </li> 


        <li class="menu-item {{   Route::currentRouteName() == 'cms_about' ? 'active' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='bx bxs-dock-top me-2'></i>
                <div data-i18n="Home Page">About Page </div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Route::currentRouteName() == 'cms_about' ? 'active' : '' }}">
                    <a href="{{ route('cms_about') }}" class="menu-link">
                        <div data-i18n="Content About Page">Content About Page</div>
                    </a>
                </li>

               
            </ul>
        </li> 


        <li class="menu-item {{ Route::currentRouteName() == 'cms_products' || Route::currentRouteName() == 'cms_components' || Route::currentRouteName() == 'cms_product_info' ? 'active' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='bx bxs-dock-top me-2'></i>
                <div data-i18n="Home Page">Products Page </div>
            </a>
            <ul class="menu-sub">

                <li class="menu-item {{ Route::currentRouteName() == 'cms_product_info' ? 'active' : '' }}">
                    <a href="{{ route('cms_product_info') }}" class="menu-link">
                        <div data-i18n="Products Page Content">Products Page Content</div>
                    </a>
                </li>
                
              

                <li class="menu-item {{ Route::currentRouteName() == 'cms_products' ? 'active' : '' }}">
                    <a href="{{ route('cms_products') }}" class="menu-link">
                        <div data-i18n="Product Detail Page">Product Detail Page</div>
                    </a>
                </li>
            </ul>
        </li> 
        <!-- Gallery -->
        <li class="menu-item {{ Route::currentRouteName() == 'cms_gallery' ? 'active' : '' }}">
            <a href="{{ Route('cms_gallery') }}" class="menu-link">
                <i class='bx bxs-dock-top me-2'></i>
                <div data-i18n="Gallery">Gallery</div>
            </a>
        </li>

         <!-- Marketing -->
         <li class="menu-item {{ Route::currentRouteName() == 'cms_marketing'   ||Route::currentRouteName() == 'cms_marketing_text' ||Route::currentRouteName() == 'cms_text' ||Route::currentRouteName() == 'cms_slider_image' ||Route::currentRouteName() == 'cms_news' ?'active' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='bx bxs-dock-top me-2'></i>
                <div data-i18n="Marketing Page">Marketing Page </div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Route::currentRouteName() == 'cms_marketing' ? 'active' : '' }}">
                    <a href="{{ route('cms_marketing') }}" class="menu-link">
                        <div data-i18n="Marketing">Marketing</div>
                    </a>
                </li>

                <li class="menu-item {{ Route::currentRouteName() == 'cms_marketing_text' ? 'active' : '' }}">
                    <a href="{{ route('cms_marketing_text') }}" class="menu-link">
                        <div data-i18n="Sliders Text Section 1">Sliders Text Section 1</div>
                    </a>
                </li>

                <li class="menu-item {{ Route::currentRouteName() == 'cms_text' ? 'active' : '' }}">
                    <a href="{{ route('cms_text') }}" class="menu-link">
                        <div data-i18n="Slider Text Section 2">Slider Text Section 2</div>
                    </a>
                </li>
                </li>
            </ul>
    </li> 


       <!-- Catalogs -->
       <li class="menu-item {{ Route::currentRouteName() == 'cms_catalog' ? 'active' : '' }}">
        <a href="{{ Route('cms_catalog') }}" class="menu-link">
            <i class='bx bxs-dock-top me-2'></i>
            <div data-i18n="Catalogs">Catalogs</div>
        </a>
    </li>

        <!-- Contact -->
        <li class="menu-item {{ Route::currentRouteName() == 'cms_contact'  ? 'active' : '' }}">
            <a href="{{ route('cms_contact') }}" class="menu-link">
                <i class='bx bxs-dock-top me-2'></i>
                <div data-i18n="Contact">Contact</div>
            </a>
        </li>


        <!-- Components -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Components</span>
        </li>

        <!-- Settings -->
        <li class="menu-item {{ Route::currentRouteName() == 'cms_settings' ? 'active' : '' }}">
            <a href="{{ route('cms_settings') }}" class="menu-link">
                <i class="bx bx-cog me-2"></i>
                <div data-i18n="Settings">Settings</div>
            </a>
        </li>
        
        <!-- SEO -->
        <li class="menu-item {{ Route::currentRouteName() == 'seoCms' || Route::currentRouteName() == 'seoEdit' ? 'active' : '' }}">
            <a href="{{ route('seoCms') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Seo">Seo</div>
            </a>
        </li>

        <!-- Logout -->
        <li class="menu-item">
            <a href="{{ route('logout') }}" class="menu-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="bx bx-power-off me-2"></i>
                <div data-i18n="Logout">Logout</div>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</aside>
