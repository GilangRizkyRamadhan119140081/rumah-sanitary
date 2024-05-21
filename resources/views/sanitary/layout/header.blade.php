<!-- header area start -->
<header>
    {{-- <div class="tp-header-area p-relative z-index-11"> --}}

    <!-- header main start -->
    {{-- <div class="tp-header-main tp-header-sticky-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2 col-md-4 col-6">
                        <div class="logo">
                            <a href="{{ route('homepage') }}">
                                <img src="{{ url('app-sanitary/img/logo/logo.png') }}" alt="" style="width: 100px">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7 d-none d-lg-block">
                        <div class="tp-header-search pl-70">
                            <form action="{{ route('search') }}" method="GET">
                                <div class="tp-header-search-wrapper d-flex align-items-center">
                                    <div class="tp-header-search-box">
                                        <input type="text" id="searchInput" name="query" placeholder="Search for Products...">
                                    </div>
                                    <div class="tp-header-search-btn">
                                        <button type="submit">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M19 19L14.65 14.65" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-3 col-md-8 col-6">
                        <div class="tp-header-main-right d-flex align-items-center justify-content-end">
                            <div class="tp-header-login d-none d-lg-block">
                                <a href="profile.html" class="d-flex align-items-center">
                                    <div class="tp-header-login-icon">
                                        <span>
                                            <svg width="17" height="21" viewBox="0 0 17 21" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="8.57894" cy="5.77803" r="4.77803" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M1.00002 17.2014C0.998732 16.8655 1.07385 16.5337 1.2197 16.2311C1.67736 15.3158 2.96798 14.8307 4.03892 14.611C4.81128 14.4462 5.59431 14.336 6.38217 14.2815C7.84084 14.1533 9.30793 14.1533 10.7666 14.2815C11.5544 14.3367 12.3374 14.4468 13.1099 14.611C14.1808 14.8307 15.4714 15.27 15.9291 16.2311C16.2224 16.8479 16.2224 17.564 15.9291 18.1808C15.4714 19.1419 14.1808 19.5812 13.1099 19.7918C12.3384 19.9634 11.5551 20.0766 10.7666 20.1304C9.57937 20.2311 8.38659 20.2494 7.19681 20.1854C6.92221 20.1854 6.65677 20.1854 6.38217 20.1304C5.59663 20.0773 4.81632 19.9641 4.04807 19.7918C2.96798 19.5812 1.68652 19.1419 1.2197 18.1808C1.0746 17.8747 0.999552 17.5401 1.00002 17.2014Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="tp-header-login-content d-none d-xl-block">
                                        <span>Hello, Sign In</span>
                                        <h5 class="tp-header-login-title">Your Account</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

    <!-- header bottom start -->
    {{-- <div class="tp-header-bottom tp-header-bottom-border d-none d-lg-block">
            <div class="container">
                <div class="tp-mega-menu-wrapper p-relative">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">

                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="main-menu menu-style-1">
                                <nav class="tp-main-menu-content">
                                    <ul>
                                        <li>
                                            <a href="{{ route('homepage') }}">Home</a>
                                        </li>
                                        <li><a href="{{ route('product') }}">Products</a></li>
                                        <li><a href="{{ route('blog') }}">Blog</a></li>
                                        <li><a href="{{ route('contact') }}">Contact</a></li>
                                        <li><a href="{{ route('about') }}">About Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3">
                            <div class="tp-header-contact d-flex align-items-center justify-content-end">
                                <div class="tp-header-contact-icon">
                                    <span>
                                        <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M1.96977 3.24859C2.26945 2.75144 3.92158 0.946726 5.09889 1.00121C5.45111 1.03137 5.76246 1.24346 6.01544 1.49057H6.01641C6.59631 2.05874 8.26011 4.203 8.35352 4.65442C8.58411 5.76158 7.26378 6.39979 7.66756 7.5157C8.69698 10.0345 10.4707 11.8081 12.9908 12.8365C14.1058 13.2412 14.7441 11.9219 15.8513 12.1515C16.3028 12.2459 18.4482 13.9086 19.0155 14.4894V14.4894C19.2616 14.7414 19.4757 15.0537 19.5049 15.4059C19.5487 16.6463 17.6319 18.3207 17.2583 18.5347C16.3767 19.1661 15.2267 19.1544 13.8246 18.5026C9.91224 16.8749 3.65985 10.7408 2.00188 6.68096C1.3675 5.2868 1.32469 4.12906 1.96977 3.24859Z"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M12.936 1.23685C16.4432 1.62622 19.2124 4.39253 19.6065 7.89874"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M12.936 4.59337C14.6129 4.92021 15.9231 6.23042 16.2499 7.90726"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="tp-header-contact-content">
                                    <h5>No Telphone:</h5>
                                    <p><a href="tel:+6285959512435">+(62) 859 5951 2435 </a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    {{-- </div> --}}
    <div id="header-sticky-2" class="tp-header-sticky-area pt-2">
        <div class="container">
            <div class="tp-mega-menu-wrapper p-relative">
                <div class="row align-items-center">
                    <div class="row col-12 col-md-12 col-sm-12 d-flex">
                        <div class="col-2 logo">
                            <a href="{{ route('homepage') }}">
                                <img src="{{ url('img/logo_sanitary_crop.png') }}" alt="" style="width: 60px">
                            </a>
                        </div>
                        <div class="col-8 col-md-6 tp-header-search">
                            <form action="{{ route('search') }}" method="GET">
                                <div class="tp-header-search-wrapper d-flex align-items-center">
                                    <div class="tp-header-search-box" style="width: 100%">
                                        <input type="text" id="searchInput" name="query"
                                            placeholder="Search Products...">
                                    </div>
                                    <div class="tp-header-search-btn">
                                        <button type="submit">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M19 19L14.65 14.65" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-2 sm-12">
                            <div class="tp-header-main-right d-flex align-items-center justify-content-end">
                                @auth
                                    <div class="tp-header-login ">
                                        <a href="{{ route('profile') }}" class="d-flex align-items-center">
                                            <div class="tp-header-login-icon">
                                                <span>
                                                    <svg width="17" height="21" viewBox="0 0 17 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="8.57894" cy="5.77803" r="4.77803" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.00002 17.2014C0.998732 16.8655 1.07385 16.5337 1.2197 16.2311C1.67736 15.3158 2.96798 14.8307 4.03892 14.611C4.81128 14.4462 5.59431 14.336 6.38217 14.2815C7.84084 14.1533 9.30793 14.1533 10.7666 14.2815C11.5544 14.3367 12.3374 14.4468 13.1099 14.611C14.1808 14.8307 15.4714 15.27 15.9291 16.2311C16.2224 16.8479 16.2224 17.564 15.9291 18.1808C15.4714 19.1419 14.1808 19.5812 13.1099 19.7918C12.3384 19.9634 11.5551 20.0766 10.7666 20.1304C9.57937 20.2311 8.38659 20.2494 7.19681 20.1854C6.92221 20.1854 6.65677 20.1854 6.38217 20.1304C5.59663 20.0773 4.81632 19.9641 4.04807 19.7918C2.96798 19.5812 1.68652 19.1419 1.2197 18.1808C1.0746 17.8747 0.999552 17.5401 1.00002 17.2014Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="tp-header-login-content d-none d-xl-block">
                                                <span>Hello, {{ Auth::user()->name }}</span>
                                                <h5 class="tp-header-login-title">My Account</h5>
                                            </div>
                                        </a>
                                    </div>
                                @else
                                    <div class="tp-header-login ">
                                        <a href="{{ route('login.user') }}" class="d-flex align-items-center">
                                            <div class="tp-header-login-icon">
                                                <span>
                                                    <svg width="17" height="21" viewBox="0 0 17 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="8.57894" cy="5.77803" r="4.77803" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.00002 17.2014C0.998732 16.8655 1.07385 16.5337 1.2197 16.2311C1.67736 15.3158 2.96798 14.8307 4.03892 14.611C4.81128 14.4462 5.59431 14.336 6.38217 14.2815C7.84084 14.1533 9.30793 14.1533 10.7666 14.2815C11.5544 14.3367 12.3374 14.4468 13.1099 14.611C14.1808 14.8307 15.4714 15.27 15.9291 16.2311C16.2224 16.8479 16.2224 17.564 15.9291 18.1808C15.4714 19.1419 14.1808 19.5812 13.1099 19.7918C12.3384 19.9634 11.5551 20.0766 10.7666 20.1304C9.57937 20.2311 8.38659 20.2494 7.19681 20.1854C6.92221 20.1854 6.65677 20.1854 6.38217 20.1304C5.59663 20.0773 4.81632 19.9641 4.04807 19.7918C2.96798 19.5812 1.68652 19.1419 1.2197 18.1808C1.0746 17.8747 0.999552 17.5401 1.00002 17.2014Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="tp-header-login-content d-none d-xl-block">
                                                <span>Hello, Sign In</span>
                                                <h5 class="tp-header-login-title">Your Account</h5>
                                            </div>
                                        </a>
                                    </div>
                                @endauth
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="tp-header-bottom tp-header-bottom-border ">
                <div class="container">
                    <div class="tp-mega-menu-wrapper p-relative">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-3">

                            </div>
                            <div class="col-xl-6 col-lg-6 d-none d-md-block">
                                <div class="main-menu menu-style-1">
                                    <nav class="tp-main-menu-content">
                                        <ul>
                                            <li>
                                                <a href="{{ route('homepage') }}">Home</a>
                                            </li>
                                            <li><a href="{{ route('product') }}">Products</a></li>
                                            <li><a href="{{ route('blog') }}">Blog</a></li>
                                            <li><a href="{{ route('contact') }}">Contact</a></li>
                                            <li><a href="{{ route('about') }}">About Us</a></li>
                                            <li class="has-dropdown">
                                                <a href="">Other</a>
                                                <ul class="tp-submenu">
                                                  <li><a href="{{ route ('brosur')}}">Download Brosur</a></li>
                                                  <li><a href="{{ route ('companyprofile')}}">Download Company Profile</a></li>
                                                  <li><a href="{{route ('pricelist')}}">Download Price List</a></li>
                                                </ul>
                                              </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="tp-header-contact d-flex align-items-center justify-content-end">
                                    <div class="tp-header-contact-icon">
                                        <span>
                                            <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M1.96977 3.24859C2.26945 2.75144 3.92158 0.946726 5.09889 1.00121C5.45111 1.03137 5.76246 1.24346 6.01544 1.49057H6.01641C6.59631 2.05874 8.26011 4.203 8.35352 4.65442C8.58411 5.76158 7.26378 6.39979 7.66756 7.5157C8.69698 10.0345 10.4707 11.8081 12.9908 12.8365C14.1058 13.2412 14.7441 11.9219 15.8513 12.1515C16.3028 12.2459 18.4482 13.9086 19.0155 14.4894V14.4894C19.2616 14.7414 19.4757 15.0537 19.5049 15.4059C19.5487 16.6463 17.6319 18.3207 17.2583 18.5347C16.3767 19.1661 15.2267 19.1544 13.8246 18.5026C9.91224 16.8749 3.65985 10.7408 2.00188 6.68096C1.3675 5.2868 1.32469 4.12906 1.96977 3.24859Z"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M12.936 1.23685C16.4432 1.62622 19.2124 4.39253 19.6065 7.89874"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M12.936 4.59337C14.6129 4.92021 15.9231 6.23042 16.2499 7.90726"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="tp-header-contact-content">
                                        <h5>No Telphone:</h5>
                                        <p><a href="tel:+6285959512435">+(62) 859 5951 2435 </a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .login-button {
                display: inline-block;
                padding: 10px;
                font-size: 15px;
                font-weight: bold;
                text-align: center;
                text-decoration: none;
                color: #fff;
                background-color: #0989FF;
                /* warna biru tua */
                border: 2px solid #0989FF;
                /* border tebal */
                border-radius: 10px;
                /* border bulat */
                /* transition: background-color 0.3s, color 0.3s, border-color 0.3s; */
                cursor: pointer;
            }

            .login-button:hover {
                background-color: #0069c0;
                /* warna biru tua lebih gelap ketika hover */
                border-color: #0069c0;
                /* border warna biru tua lebih gelap ketika hover */
            }
        </style>

</header>
<!-- header area end -->
