<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ isset($pages) ? $pages->title : '' }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ isset($pages) ? $pages->meta_desc : 'Default Meta Description' }}">
    <meta name="description" content="{{ isset($pages) ? $pages->seo_title : 'Default SEO Title' }}">
    <meta name="keywords" content="{{ isset($pages) ? $pages->keyword : 'Default Keywords' }}">

    @if (trim($__env->yieldContent('image')))
        <meta property="og:image"
            content="{{ !empty(trim($__env->yieldContent('image'))) ? Storage::disk('s3')->url($__env->yieldContent('image')) : '' }}">
    @else
        <meta property="og:image"
            content="{{ isset($pages->media) ? Storage::disk('s3')->url($pages->media) : 'https://rumahsanitary.com/frontend-assets/img/logo-1.png' }} ">
    @endif

    <meta property="og:image:width" content="240">
    <meta property="og:image:height" content="90">

    <!-- Search Console -->
    @if (isset($searchConsole))
        <meta name="google-site-verification" content="{{ $searchConsole->content }}" />
    @endif
    <!-- End Search Console -->

    <!-- Place favicon.ico in the root directory -->
    @if ($icon->first() && $icon->first()->logo)
        <link rel="shortcut icon" type="image/x-icon" href="{{ Storage::disk('s3')->url($icon->first()->favicon) }}">
    @endif

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ url('app-sanitary/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('app-sanitary/css/animate.css') }}">
    <link rel="stylesheet" href="{{ url('app-sanitary/css/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ url('app-sanitary/css/slick.css') }}">
    <link rel="stylesheet" href="{{ url('app-sanitary/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('app-sanitary/css/font-awesome-pro.css') }}">
    <link rel="stylesheet" href="{{ url('app-sanitary/css/flaticon_shofy.css') }}">
    <link rel="stylesheet" href="{{ url('app-sanitary/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ url('app-sanitary/css/main.css') }}">
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    @if (isset($gtagManager))
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{ $gtagManager->code }}" height="0"
                width="0" style="display:none;visibility:hidden"></iframe></noscript>
    @endif
    <!-- End Google Tag Manager (noscript) -->
    <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

    <!-- back to top start -->
    {{-- <div class="back-to-top-wrapper">
        <button id="back_to_top" type="button" class="back-to-top-btn">
            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
    </div> --}}
    <div class="floating-container d-none d-md-block"
        style="margin: 0 !important; z-index:99999 !important; position:fixed !important; bottom:2rem !important; right:1rem !important; height:50px !important; width:50px !important; ">
        <div class="floating-button"style="position:unset !important; "><img
                src="{{ url('frontend-assets/pic/facility/middle.png') }}"
                data-at2x="{ url('frontend-assets/pic/facility/chat1.png') }" width="35" alt=""></div>
    </div>

    <!-- back to top end -->

    <!-- offcanvas area start -->
    <div class="offcanvas__area offcanvas__radius">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__close">
                <button class="offcanvas__close-btn offcanvas-close-btn">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-70 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo logo">
                        <a href="index.html">
                            @if ($icon->first() && $icon->first()->logo)
                                <img src="{{ Storage::disk('s3')->url($icon->first()->logo) }}" width="80px"
                                    alt="">
                            @endif
                        </a>
                    </div>
                </div>
                <div class="offcanvas__category pb-30 pt-30">
                    <button class="tp-offcanvas-category-toggle">
                        All Menu
                    </button>

                </div>
                <div class="tp-main-menu-mobile fix d-lg-none mb-40"></div>

                <div class="offcanvas__contact align-items-center d-none">
                    <div class="offcanvas__contact-icon mr-20">
                        <span>
                            <img src="{{ url('app-sanitary/img/icon/contact.png') }}" alt="">
                        </span>
                    </div>
                    <div class="offcanvas__contact-content">
                        <h3 class="offcanvas__contact-title">
                            <a href="tel:098-852-987">004524865</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="body-overlay"></div>
    <!-- offcanvas area end -->

    <!-- mobile menu area start -->
    <div id="tp-bottom-menu-sticky" class="tp-mobile-menu d-lg-none">
        <div class="container">
            <div class="row row-cols-5">
                <div class="col">
                    <div class="tp-mobile-item text-center">
                        <a href="{{ route('homepage') }}" class="tp-mobile-item-btn">
                            <i class="flaticon-store"></i>
                            <span>Home</span>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="tp-mobile-item text-center">
                        <a href="{{ route('product') }}" class="tp-mobile-item-btn">
                            <i class="fa-solid fa-box-open mb-2"></i>
                            <span>Product</span>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="tp-mobile-item text-center">
                        <a target="_blank" href="https://wa.me/6285959512435" class="tp-mobile-item-btn">
                            <i class="fa-brands fa-whatsapp mb-2"></i>
                            <span>Contact</span>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="tp-mobile-item text-center">
                        <a href="{{ route('brosur') }}" class="tp-mobile-item-btn">
                            <i class="fa-solid fa-download"></i>
                            <span>Download</span>
                        </a>
                    </div>
                </div>
                {{-- <div class="col">
                    <div class="tp-mobile-item text-center">
                        <a href="{{ route('blog') }}" class="tp-mobile-item-btn">
                            <i class="fa-brands fa-blogger"></i>
                            <span>Blog</span>
                        </a>
                    </div>
                </div> --}}
                <div class="col">
                    <div class="tp-mobile-item text-center">
                        <button class="tp-mobile-item-btn tp-offcanvas-open-btn">
                            <i class="flaticon-menu-1"></i>
                            <span>Menu</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile menu area end -->

    <!-- search area start -->
    <section class="tp-search-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="tp-search-form">
                        <div class="tp-search-close text-center mb-20">
                            <button class="tp-search-close-btn tp-search-close-btn"></button>
                        </div>
                        <form action="#">
                            <div class="tp-search-input mb-10">
                                <input type="text" placeholder="Search for product...">
                                <button type="submit"><i class="flaticon-search-1"></i></button>
                            </div>
                            <div class="tp-search-category">
                                <span>Search by : </span>
                                <a href="#">Men, </a>
                                <a href="#">Women, </a>
                                <a href="#">Children, </a>
                                <a href="#">Shirt, </a>
                                <a href="#">Demin</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- search area end -->

    <!-- cart mini area start -->
    <div class="cartmini__area tp-all-font-roboto">
        <div class="cartmini__wrapper d-flex justify-content-between flex-column">
            <div class="cartmini__top-wrapper">
                <div class="cartmini__top p-relative">
                    <div class="cartmini__top-title">
                        <h4>Shopping cart</h4>
                    </div>
                    <div class="cartmini__close">
                        <button type="button" class="cartmini__close-btn cartmini-close-btn"><i
                                class="fal fa-times"></i></button>
                    </div>
                </div>
                <div class="cartmini__shipping">
                    <p> Free Shipping for all orders over <span>$50</span></p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                            data-width="70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="cartmini__widget">
                    <div class="cartmini__widget-item">
                        <div class="cartmini__thumb">
                            <a href="product-details.html">
                                <img src="{{ url('app-sanitary/img/product/product-1.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="cartmini__content">
                            <h5 class="cartmini__title"><a href="product-details.html">Level Bolt Smart Lock</a></h5>
                            <div class="cartmini__price-wrapper">
                                <span class="cartmini__price">$46.00</span>
                                <span class="cartmini__quantity">x2</span>
                            </div>
                        </div>
                        <a href="#" class="cartmini__del"><i class="fa-regular fa-xmark"></i></a>
                    </div>
                </div>
                <!-- for wp -->
                <!-- if no item in cart -->
                <div class="cartmini__empty text-center d-none">
                    <img src="{{ url('app-sanitary/img/product/cartmini/empty-cart.png') }}" alt="">
                    <p>Your Cart is empty</p>
                    <a href="shop.html" class="tp-btn">Go to Shop</a>
                </div>
            </div>
            <div class="cartmini__checkout">
                <div class="cartmini__checkout-title mb-30">
                    <h4>Subtotal:</h4>
                    <span>$113.00</span>
                </div>
                <div class="cartmini__checkout-btn">
                    <a href="cart.html" class="tp-btn mb-10 w-100"> view cart</a>
                    <a href="checkout.html" class="tp-btn tp-btn-border w-100"> checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- cart mini area end -->

    @include('sanitary.layout.header')

    <div id="content">
        <!-- content page-->
        @yield('content')
        <!-- ! content page-->
    </div>

    @include('sanitary.layout.footer')

    <!-- JS here -->
    <script type="text/javascript" src="{{ url('app-sanitary/js/vendor/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ url('app-sanitary/js/vendor/waypoints.js') }}"></script>
    <script type="text/javascript" src="{{ url('app-sanitary/js/bootstrap-bundle.js') }}"></script>
    <script type="text/javascript" src="{{ url('app-sanitary/js/meanmenu.js') }}"></script>
    <script type="text/javascript" src="{{ url('app-sanitary/js/swiper-bundle.js') }}"></script>
    <script type="text/javascript" src="{{ url('app-sanitary/js/slick.js') }}"></script>
    <script type="text/javascript" src="{{ url('app-sanitary/js/range-slider.js') }}"></script>
    <script type="text/javascript" src="{{ url('app-sanitary/js/magnific-popup.js') }}"></script>
    <script type="text/javascript" src="{{ url('app-sanitary/js/nice-select.js') }}"></script>
    <script type="text/javascript" src="{{ url('app-sanitary/js/purecounter.js') }}"></script>
    <script type="text/javascript" src="{{ url('app-sanitary/js/countdown.js') }}"></script>
    <script type="text/javascript" src="{{ url('app-sanitary/js/wow.js') }}"></script>
    <script type="text/javascript" src="{{ url('app-sanitary/js/isotope-pkgd.js') }}"></script>
    <script type="text/javascript" src="{{ url('app-sanitary/js/imagesloaded-pkgd.js') }}"></script>
    <script type="text/javascript" src="{{ url('app-sanitary/js/ajax-form.js') }}"></script>
    <script type="text/javascript" src="{{ url('app-sanitary/js/main.js') }}"></script>
</body>
<script>
    document.querySelector('.floating-button').addEventListener('click', function() {
        var message = encodeURIComponent("HALLO RUMAH SANITARY, SAYA INGIN BERTANYA ");
        window.location.href = 'https://wa.me/6285959512435?text=' + message;
    });
</script>

<!-- Google Tag Manager -->
@if (isset($gtagManager))
    <script defer>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', '{{ $gtagManager->code }}');
    </script>
@endif
<!-- End Google Tag Manager -->

{{-- Analytics --}}
@if (isset($analytics))
    <script defer src="https://www.googletagmanager.com/gtag/js?id={{ $analytics->code }}"></script>
    <script defer>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', '{{ $analytics->code }}');
    </script>
@endif
{{-- End Analytics --}}
@if ($tagManager)
    <script defer src="https://www.googletagmanager.com/gtag/js?id={{ $tagManager->codeTag }}"></script>
    <script defer>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', '{{ $tagManager->codeTag }}');
    </script>
@endif

</html>
