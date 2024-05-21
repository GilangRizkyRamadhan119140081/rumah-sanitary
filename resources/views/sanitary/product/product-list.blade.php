@extends('sanitary.layout.app')
@section('content')
    <!-- filter offcanvas area start -->
    <div class="tp-filter-offcanvas-area">
        <div class="tp-filter-offcanvas-wrapper">
            <div class="tp-filter-offcanvas-close">
                <button type="button" class="tp-filter-offcanvas-close-btn filter-close-btn">
                    <i class="fa-solid fa-xmark"></i>
                    Close
                </button>
            </div>
            <div class="tp-shop-sidebar">
                <!-- category -->
                <div class="tp-shop-widget mb-50">
                    <h3 class="tp-shop-widget-title">Categories</h3>

                    <div class="tp-shop-widget-content">
                        <div class="tp-shop-widget-category">
                            @foreach ($category as $item)
                                <ul>
                                    <li><a href="#">{{ $item->title }}<span>10</span></a></li>
                                </ul>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- filter offcanvas area end -->

    <main>
        <!-- breadcrumb area start -->
        <section class="breadcrumb__area include-bg pt-10 pb-15">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__content p-relative z-index-1">
                            <h3 style="font-size: 24px" class="breadcrumb__title">Produk Sanitary</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- shop area start -->
        <section class="tp-shop-area pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4">
                        <div class="tp-shop-sidebar mr-10">
                            <!-- categories -->
                            <div class="tp-shop-widget mb-15">
                                <h3 class="d-none d-lg-block tp-shop-widget-title">Categories</h3>

                                <div class="tp-shop-widget-content">
                                    <div class="tp-shop-widget-category">
                                        <ul class="d-none d-lg-block">
                                            @foreach ($category as $item)
                                                <li>
                                                    {{-- <a href="{{ route('product', ['category' => $item->id]) }}">{{ $item->title }}</a> --}}
                                                    <a href="{{ route('product', ['category' => $item->id]) }}"
                                                        @if (isset($_GET['category']) && $_GET['category'] == $item->id) style="font-weight: bold;" @endif>
                                                        {{ $item->title }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <div class="tp-shop-top-select d-block d-lg-none d-flex">
                                            <p style="font-size: 18px; margin-right: 10px" class="mt-1">Categories</p>
                                            <select onchange="window.location.href=this.value" class="w-100">
                                                <option value="{{ route('product') }}" selected>All Category</option>
                                                @foreach ($category as $item)
                                                    <option value="{{ route('product', ['category' => $item->id]) }}"
                                                        {{ isset($_GET['category']) && $_GET['category'] == $item->id ? 'selected' : '' }}>
                                                        {{ $item->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- @if ($popularBrands)
                                <!-- brand -->
                                <div class="tp-shop-widget mb-15 pt-30 d-none d-lg-block">
                                    <h3 class="tp-shop-widget-title">Popular Brands</h3>

                                    <div class="tp-shop-widget-content ">

                                        <div class="tp-shop-widget-brand-list d-flex align-items-center  flex-wrap">
                                            @foreach ($popularBrands as $item)
                                                <div class="tp-shop-widget-brand-item"
                                                    style="display: flex;align-items: center;justify-content: center;">

                                                    <a href="">
                                                        @if ($item->image)
                                                            <img src="{{ Storage::disk('s3')->url($item->image) }}"
                                                                alt="" style="width:80px; height:70px;">
                                                        @endif
                                                    </a>

                                                </div>
                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                            @endif --}}

                            <!-- product rating -->
                            <div class="tp-shop-widget mb-35 d-none d-lg-block">
                                <h3 class="tp-shop-widget-title">Top Rated Products</h3>

                                <div class="tp-shop-widget-content">
                                    <div class="tp-shop-widget-product">
                                        @foreach ($top as $product)
                                            <div class="tp-shop-widget-product-item d-flex align-items-center">
                                                <div class="tp-shop-widget-product-thumb">
                                                    <a
                                                        href="{{ route('product.detail', ['slug' => $product->data_produk->slug]) }}">
                                                        @if ($product->data_produk->image)
                                                            <img src="{{ Storage::disk('s3')->url($product->data_produk->image) }}"
                                                                alt="">
                                                        @endif
                                                    </a>
                                                </div>
                                                <div class="tp-shop-widget-product-content">
                                                    <div
                                                        class="tp-shop-widget-product-rating-wrapper d-flex align-items-center">
                                                        <div class="tp-shop-widget-product-rating">
                                                            <span>
                                                                <img width="12" height="12"
                                                                    src="{{ asset('app-sanitary/svg/star.svg') }}"
                                                                    alt="Icon">
                                                            </span>
                                                            <span>
                                                                <img width="12" height="12"
                                                                    src="{{ asset('app-sanitary/svg/star.svg') }}"
                                                                    alt="Icon">
                                                            </span>
                                                            <span>
                                                                <img width="12" height="12"
                                                                    src="{{ asset('app-sanitary/svg/star.svg') }}"
                                                                    alt="Icon">
                                                            </span>
                                                            <span>
                                                                <img width="12" height="12"
                                                                    src="{{ asset('app-sanitary/svg/star.svg') }}"
                                                                    alt="Icon">
                                                            </span>
                                                            <span>
                                                                <img width="12" height="12"
                                                                    src="{{ asset('app-sanitary/svg/star.svg') }}"
                                                                    alt="Icon">
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <h4 class="tp-shop-widget-product-title">
                                                        <a
                                                            href="{{ route('product.detail', ['slug' => $product->data_produk->slug]) }}">{{ $product->data_produk->title }}</a>
                                                    </h4>
                                                    <div class="tp-shop-widget-product-price-wrapper">
                                                        <span class="tp-shop-widget-product-price">Rp.
                                                            {{ number_format($product->data_produk->price_disc, 0, ',', '.') }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            @if ($popularBrands)
                                <!-- brand -->
                                <div class="tp-shop-widget mb-15">
                                    <h3 class="tp-shop-widget-title">Popular Brands</h3>
                                    <div class="tp-shop-widget-content ">
                                        <div class="tp-shop-widget-brand-list d-flex align-items-center flex-wrap">
                                            @foreach ($popularBrands as $item)
                                                <div class="tp-shop-widget-brand-item">
                                                    <a href="{{ route('product', ['brand' => $item->id]) }}"
                                                        class="brand-filter" data-brand="{{ $item->title }}">
                                                        @if ($item->image)
                                                            <img src="{{ Storage::disk('s3')->url($item->image) }}"
                                                                alt="{{ $item->title }}" style="width:80px; height:70px;"
                                                                data-brand="{{ $item->title }}">
                                                        @endif
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif


                            {{-- @if ($popularBrands)
                                <!-- brand -->
                                <div class="tp-shop-widget mb-15">
                                    <h3 class="tp-shop-widget-title">Popular Brands</h3>

                                    <div class="tp-shop-widget-content ">

                                        <div class="tp-shop-widget-brand-list d-flex align-items-center flex-wrap">
                                            @foreach ($popularBrands as $item)
                                                <div class="tp-shop-widget-brand-item">
                                                    <a href="{{ route('product', ['brand' => $item->id]) }}" class="brand-filter" data-brand="{{ $item->title }}">
                                                        @if ($item->image)
                                                            <img src="{{ Storage::disk('s3')->url($item->image) }}" alt="" style="width:80px; height:70px;">
                                                        @endif
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif --}}
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8">
                        <div class="tp-shop-main-wrapper">
                            <div class="tp-shop-top mb-20">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="tp-shop-top-left d-flex align-items-center ">
                                            <div class="tp-shop-top-tab tp-tab">
                                                <ul class="nav nav-tabs" id="productTab" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link active" id="grid-tab" data-bs-toggle="tab"
                                                            data-bs-target="#grid-tab-pane" type="button" role="tab"
                                                            aria-controls="grid-tab-pane" aria-selected="true">
                                                            <svg width="18" height="18" viewBox="0 0 18 18"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M16.3327 6.01341V2.98675C16.3327 2.04675 15.906 1.66675 14.846 1.66675H12.1527C11.0927 1.66675 10.666 2.04675 10.666 2.98675V6.00675C10.666 6.95341 11.0927 7.32675 12.1527 7.32675H14.846C15.906 7.33341 16.3327 6.95341 16.3327 6.01341Z"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path
                                                                    d="M16.3327 15.18V12.4867C16.3327 11.4267 15.906 11 14.846 11H12.1527C11.0927 11 10.666 11.4267 10.666 12.4867V15.18C10.666 16.24 11.0927 16.6667 12.1527 16.6667H14.846C15.906 16.6667 16.3327 16.24 16.3327 15.18Z"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path
                                                                    d="M7.33268 6.01341V2.98675C7.33268 2.04675 6.90602 1.66675 5.84602 1.66675H3.15268C2.09268 1.66675 1.66602 2.04675 1.66602 2.98675V6.00675C1.66602 6.95341 2.09268 7.32675 3.15268 7.32675H5.84602C6.90602 7.33341 7.33268 6.95341 7.33268 6.01341Z"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path
                                                                    d="M7.33268 15.18V12.4867C7.33268 11.4267 6.90602 11 5.84602 11H3.15268C2.09268 11 1.66602 11.4267 1.66602 12.4867V15.18C1.66602 16.24 2.09268 16.6667 3.15268 16.6667H5.84602C6.90602 16.6667 7.33268 16.24 7.33268 15.18Z"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                        </button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="list-tab" data-bs-toggle="tab"
                                                            data-bs-target="#list-tab-pane" type="button" role="tab"
                                                            aria-controls="list-tab-pane" aria-selected="false">
                                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M15 7.11108H1" stroke="currentColor"
                                                                    stroke-width="2" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path d="M15 1H1" stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M15 13.2222H1" stroke="currentColor"
                                                                    stroke-width="2" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tp-shop-top-result">
                                                <p>Showing 1–14 of 26 results</p>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="col-xl-6">
                                        <div class="tp-shop-top-right d-sm-flex align-items-center justify-content-xl-end">
                                            <div class="tp-shop-top-select">
                                                <select>
                                                    <option>Default Sorting</option>
                                                    <option>Low to Hight</option>
                                                    <option>High to Low</option>
                                                    <option>New Added</option>
                                                    <option>On Sale</option>
                                                </select>
                                            </div>
                                            <div class="tp-shop-top-filter">
                                                <button type="button" class="tp-filter-btn filter-open-btn">
                                                    <span>
                                                        <img width="16" height="15"
                                                            src="{{ asset('app-sanitary/svg/filter.svg') }}"
                                                            alt="Icon">
                                                    </span>
                                                    Filter
                                                </button>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>

                            <div class="tp-shop-items-wrapper tp-shop-item-primary">
                                <div class="tab-content" id="productTabContent">
                                    <div class="tab-pane fade show active" id="grid-tab-pane" role="tabpanel"
                                        aria-labelledby="grid-tab" tabindex="0">

                                        <div class="row infinite-container">
                                            @foreach ($produk as $grid)
                                                <div class="col-xl-2 col-md-3 col-6 infinite-item px-1">
                                                    <div class="tp-product-item-2 mb-25"
                                                        style="border: 1px solid #ddd; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); padding: 15px;">
                                                        <div class="tp-product-thumb-2 p-relative z-index-1 fix w-img">
                                                            <a href="{{ route('product.detail', ['slug' => $grid->slug]) }}">
                                                                @if ($grid->image)
                                                                    <img src="{{ Storage::disk('s3')->url($grid->image) }}"
                                                                        alt="" width="150" height="145">
                                                                @endif
                                                            </a>
                                                            <!-- product action -->
                                                            <div class="tp-product-action-2 tp-product-action-blackStyle">
                                                                <div class="tp-product-action-item-2 d-flex flex-column">
                                                                    <button type="button"
                                                                        class="tp-product-action-btn-2 tp-product-quick-view-btn"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#producQuickViewModal"
                                                                        data-product-id="{{ $grid }}"
                                                                        data-image="{{ Storage::disk('s3')->url($grid->image) }}">
                                                                        <img width="18" height="15"
                                                                            src="{{ asset('app-sanitary/svg/eyeview.svg') }}"
                                                                            alt="Icon">
                                                                        <span
                                                                            class="tp-product-tooltip tp-product-tooltip-right">Quick
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tp-product-content-2 pt-0"
                                                            style="width: 100%;height: 150px;">
                                                            <div class="tp-product-tag-2">
                                                                <a href="#"
                                                                    style="font-size: 13px">{{ ucwords(strtolower($grid->kategori_produk->title)) }}</a>
                                                            </div>
                                                            <h3 class="tp-product-title-2">
                                                                <a href="{{ route('product.detail', ['slug' => $grid->slug]) }}"
                                                                    style="font-size: 13px">
                                                                    {{ strlen($grid->title) > 20 ? substr($grid->title, 0, 20) . '...' : $grid->title }}
                                                                </a>
                                                            </h3>

                                                            <!-- Tampilkan informasi produk di sini, termasuk rating -->
                                                            <div class="tp-product-rating-icon tp-product-rating-icon-2">

                                                                {{-- {{ $grid->rating }} --}}

                                                                @if ($grid->rating >= 1)
                                                                    <span><i class="fa-solid fa-star"></i></span>
                                                                @endif
                                                                @if ($grid->rating >= 2)
                                                                    <span><i class="fa-solid fa-star"></i></span>
                                                                @endif
                                                                @if ($grid->rating >= 3)
                                                                    <span><i class="fa-solid fa-star"></i></span>
                                                                @endif
                                                                @if ($grid->rating >= 4)
                                                                    <span><i class="fa-solid fa-star"></i></span>
                                                                @endif
                                                                @if ($grid->rating >= 5)
                                                                    <span><i class="fa-solid fa-star"></i></span>
                                                                @endif
                                                                <!-- Lanjutkan untuk menampilkan bintang sesuai dengan rating -->

                                                            </div>
                                                            <div class="tp-product-price-wrapper-2">
                                                                <span class="tp-product-price-2 new-price"
                                                                    style="font-size: 13px">Rp.
                                                                    {{ number_format($grid->price_disc, 0, ',', '.') }}</span><br>
                                                                {{-- <span class="tp-product-price-2 old-price">Rp. {{ number_format($grid->price, 0, ',', '.') }}</span> --}}
                                                            </div><br>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="list-tab-pane" role="tabpanel"
                                        aria-labelledby="list-tab" tabindex="0">
                                        <div class="tp-shop-list-wrapper tp-shop-item-primary mb-30">
                                            @foreach ($produk as $list)
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="tp-product-list-item d-md-flex mb-10"
                                                            style="border: 1px solid #ddd; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); padding: 15px;">
                                                            <div class="tp-product-list-thumb p-relative fix"
                                                                style="width: 350px; height: 310px">
                                                                <a href="{{ route('product.detail', ['slug' => $list->slug]) }}">
                                                                    @if ($list->image)
                                                                        <img src="{{ Storage::disk('s3')->url($list->image) }}"
                                                                            alt="">
                                                                    @endif
                                                                </a>
                                                                <!-- product action -->
                                                                <div
                                                                    class="tp-product-action-2 tp-product-action-blackStyle">
                                                                    <div
                                                                        class="tp-product-action-item-2 d-flex flex-column">
                                                                        <button type="button"
                                                                            class="tp-product-action-btn-2 tp-product-quick-view-btn"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#producQuickViewModal"
                                                                            data-product-id="{{ $list }}"
                                                                            data-image="{{ Storage::disk('s3')->url($list->image) }}">
                                                                            <img width="18" height="15"
                                                                                src="{{ asset('app-sanitary/svg/eyeview.svg') }}"
                                                                                alt="Icon">
                                                                            <span
                                                                                class="tp-product-tooltip tp-product-tooltip-right">Quick
                                                                            </span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tp-product-list-content" style="border: none;">
                                                                <div class="tp-product-content-2 pt-0">
                                                                    <div class="tp-product-tag-2">
                                                                        <a
                                                                            href="#">{{ $list->kategori_produk->title }}</a>
                                                                        {{-- <a href="#">Branded</a> --}}
                                                                    </div>
                                                                    <h3 class="tp-product-title-2">
                                                                        <a
                                                                            href="{{ route('product.detail', ['slug' => $list->slug]) }}">{{ $list->title }}</a>
                                                                    </h3>
                                                                    <div
                                                                        class="tp-product-rating-icon tp-product-rating-icon-2">

                                                                        @if ($list->rating >= 1)
                                                                            <span><i class="fa-solid fa-star"></i></span>
                                                                        @endif
                                                                        @if ($list->rating >= 2)
                                                                            <span><i class="fa-solid fa-star"></i></span>
                                                                        @endif
                                                                        @if ($list->rating >= 3)
                                                                            <span><i class="fa-solid fa-star"></i></span>
                                                                        @endif
                                                                        @if ($list->rating >= 4)
                                                                            <span><i class="fa-solid fa-star"></i></span>
                                                                        @endif
                                                                        @if ($list->rating >= 5)
                                                                            <span><i class="fa-solid fa-star"></i></span>
                                                                        @endif
                                                                        <!-- Lanjutkan untuk menampilkan bintang sesuai dengan rating -->

                                                                    </div>
                                                                    <div class="tp-product-price-wrapper-2">
                                                                        <span class="tp-product-price-2 new-price">Rp.
                                                                            {{ number_format($list->price_disc, 0, ',', '.') }}</span>
                                                                        {{-- <span
                                                                        class="tp-product-price-2 old-price">$99.00</span> --}}
                                                                    </div>
                                                                    <p>
                                                                        <?php
                                                                        $content = strip_tags($list->deskripsi); // Menghapus tag HTML dari konten
                                                                        $words = strtok($content, ' '); // Memecah konten menjadi kata-kata

                                                                        // Membuat variabel untuk menghitung jumlah kata yang telah ditampilkan
                                                                        $count = 0;

                                                                        // Menampilkan maksimal 10 kata pertama
                                                                        while ($words !== false && $count < 10) {
                                                                            echo $words . ' ';
                                                                            $words = strtok(' '); // Mendapatkan kata-kata berikutnya
                                                                            $count++; // Menambahkan hitungan kata yang telah ditampilkan
                                                                        }
                                                                        if ($words !== false) {
                                                                            echo '...';
                                                                        }
                                                                        ?>
                                                                    </p>
                                                                    <div class="tp-product-details-action-wrapper">
                                                                        <h3 class="tp-product-details-action-title">Contact
                                                                            Our Sales</h3>
                                                                        <div
                                                                            class="tp-product-details-action-item-wrapper d-flex align-items-center">
                                                                        </div>
                                                                        <a target="_blank"
                                                                            href='https://wa.me/{{ $list->sales_produk->telp ?? '6285959512435' }}?text=Hallo%2C%20Saya%20Ingin%20Bertanya%20Mengenai%20Produk%20%22{{ urlencode($list->title) }}%22'
                                                                            class="tp-product-details-buy-now-btn w-80">Click
                                                                            Here!</a>

                                                                    </div><br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="infinite-pagination d-none">
                                <a href="shop.html" class="infinite-next-link">Next</a>
                            </div>
                            <div class="tp-shop-pagination mt-20">
                                {{-- PAGINATION --}}
                                <div class="tp-pagination">
                                    <nav>
                                        <ul>
                                            {{-- Previous Page Link --}}
                                            {{-- @if ($produk->onFirstPage()) --}}
                                            @if (isset($selectedCategories) &&
                                                    $selectedCategories &&
                                                    $produk->appends(['category' => $selectedCategories])->onFirstPage())
                                                <li>
                                                    <a href="javascript:void(0)" aria-disabled="true">
                                                        <svg width="15" height="13" viewBox="0 0 15 13"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1.00017 6.77879L14 6.77879" stroke="currentColor"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path d="M6.24316 11.9999L0.999899 6.77922L6.24316 1.55762"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </a>
                                                </li>
                                            @elseif(empty($selectedCategories) && $produk->onFirstPage())
                                                <!-- Handle jika $selectedCategories kosong dan halaman pertama -->
                                                <!-- Tidak ada tindakan yang diambil -->
                                            @else
                                                <li>

                                                    <a href="{{ $produk->appends(['category' => $selectedCategories ?? ''])->previousPageUrl() }}"
                                                        class="tp-pagination-prev prev page-numbers">
                                                        <svg width="15" height="13" viewBox="0 0 15 13"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1.00017 6.77879L14 6.77879" stroke="currentColor"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path d="M6.24316 11.9999L0.999899 6.77922L6.24316 1.55762"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </a>
                                                </li>
                                            @endif

                                            {{-- Pagination Elements --}}
                                            @php
                                                $start = max(1, $produk->currentPage() - 2);
                                                $end = min($produk->lastPage(), $produk->currentPage() + 2);
                                            @endphp

                                            @for ($i = $start; $i <= $end; $i++)
                                                <li>
                                                    @if ($i == $produk->currentPage())
                                                        <span class="current">{{ $i }}</span>
                                                    @else
                                                        <a href="{{ $produk->url($i) }}"
                                                            class="page-numbers">{{ $i }}</a>
                                                    @endif
                                                </li>
                                            @endfor

                                            {{-- Next Page Link --}}
                                            @if ($produk->hasMorePages())
                                                <li>
                                                    <a href="{{ $produk->nextPageUrl() }}" class="next page-numbers">
                                                        <svg width="15" height="13" viewBox="0 0 15 13"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M13.9998 6.77883L1 6.77883" stroke="currentColor"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path d="M8.75684 1.55767L14.0001 6.7784L8.75684 12"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </a>
                                                </li>
                                            @else
                                                <li>
                                                    <a href="javascript:void(0)" class="next page-numbers"
                                                        aria-disabled="true">
                                                        <svg width="15" height="13" viewBox="0 0 15 13"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M13.9998 6.77883L1 6.77883" stroke="currentColor"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path d="M8.75684 1.55767L14.0001 6.7784L8.75684 12"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </a>
                                                </li>
                                            @endif
                                        </ul>
                                    </nav>
                                </div>




                            </div>

                            @if ($popularBrands)
                                <!-- brand -->
                                <div class="tp-shop-widget mb-15 pt-30 d-lg-none">
                                    <h3 class="tp-shop-widget-title">Popular Brands</h3>

                                    <div class="tp-shop-widget-content ">

                                        <div class="tp-shop-widget-brand-list d-flex align-items-center  flex-wrap">
                                            @foreach ($popularBrands as $item)
                                                <div class="tp-shop-widget-brand-item"
                                                    style="display: flex;align-items: center;justify-content: center;">

                                                    <a href="">
                                                        @if ($item->image)
                                                            <img src="{{ Storage::disk('s3')->url($item->image) }}"
                                                                alt="" style="width:80px; height:70px;">
                                                        @endif
                                                    </a>

                                                </div>
                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                            @endif

                            <!-- product rating -->
                            <div class="tp-shop-widget mb-35 d-lg-none">
                                <h3 class="tp-shop-widget-title">Top Rated Products</h3>

                                <div class="tp-shop-widget-content">
                                    <div class="tp-shop-widget-product">
                                        @foreach ($top as $product)
                                            <div class="tp-shop-widget-product-item d-flex align-items-center">
                                                <div class="tp-shop-widget-product-thumb">
                                                    <a
                                                        href="{{ route('product.detail', ['slug' => $product->data_produk->slug]) }}">
                                                        @if ($product->data_produk->image)
                                                            <img src="{{ Storage::disk('s3')->url($product->data_produk->image) }}"
                                                                alt="">
                                                        @endif
                                                    </a>
                                                </div>
                                                <div class="tp-shop-widget-product-content">
                                                    <div
                                                        class="tp-shop-widget-product-rating-wrapper d-flex align-items-center">
                                                        <div class="tp-shop-widget-product-rating">
                                                            <span>
                                                                <img width="12" height="12"
                                                                    src="{{ asset('app-sanitary/svg/star.svg') }}"
                                                                    alt="Icon">
                                                            </span>
                                                            <span>
                                                                <img width="12" height="12"
                                                                    src="{{ asset('app-sanitary/svg/star.svg') }}"
                                                                    alt="Icon">
                                                            </span>
                                                            <span>
                                                                <img width="12" height="12"
                                                                    src="{{ asset('app-sanitary/svg/star.svg') }}"
                                                                    alt="Icon">
                                                            </span>
                                                            <span>
                                                                <img width="12" height="12"
                                                                    src="{{ asset('app-sanitary/svg/star.svg') }}"
                                                                    alt="Icon">
                                                            </span>
                                                            <span>
                                                                <img width="12" height="12"
                                                                    src="{{ asset('app-sanitary/svg/star.svg') }}"
                                                                    alt="Icon">
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <h4 class="tp-shop-widget-product-title">
                                                        <a
                                                            href="{{ route('product.detail', ['slug' => $product->data_produk->slug]) }}">{{ $product->data_produk->title }}</a>
                                                    </h4>
                                                    <div class="tp-shop-widget-product-price-wrapper">
                                                        <span class="tp-shop-widget-product-price">Rp.
                                                            {{ number_format($product->data_produk->price_disc, 0, ',', '.') }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- shop area end -->

        <div class="modal fade tp-product-modal" id="producQuickViewModal" tabindex="-1"
            aria-labelledby="producQuickViewModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="tp-product-modal-content d-lg-flex align-items-start">
                        <button type="button" class="tp-product-modal-close-btn" data-bs-toggle="modal"
                            data-bs-target="#producQuickViewModal"><i class="fa-regular fa-xmark"></i></button>
                        <div class="tp-product-details-thumb-wrapper tp-tab d-sm-flex" style="width: 50%">
                            <div class="tab-content m-img" id="productDetailsNavContent">
                                <div class="tab-pane fade show active" id="nav-1" role="tabpanel"
                                    aria-labelledby="nav-1-tab" tabindex="0">
                                    {{-- <div class="tp-product-details-nav-main-thumb"> --}}
                                    <img src="{{ url('app-sanitary/img/product/details/main/product-details-main-1.jpg') }}"
                                        alt="">
                                    {{-- </div> --}}
                                </div>

                            </div>
                        </div>
                        <div class="tp-product-details-wrapper">
                            <div class="tp-product-details-category">
                                <span>Computers & Tablets</span>
                            </div>
                            <h3 class="tp-product-details-title">Samsung galaxy A8 tablet</h3>

                            <!-- inventory details -->
                            <div class="tp-product-details-inventory d-flex align-items-center mb-10">
                                <div class="tp-product-details-rating-wrapper d-flex align-items-center mb-10">
                                    <div class="tp-product-details-rating">
                                        {{-- <span><i class="fa-solid fa-star"></i></span> --}}
                                    </div>
                                </div>
                            </div>
                            <p class="tp-product-details-content">A Screen Everyone Will Love: Whether your family is
                                streaming or video chatting with friends
                                tablet A8...</p>

                            <!-- price -->
                            <div class="tp-product-details-price-wrapper mb-20">
                                {{-- <span class="tp-product-details-price old-price">$320.00</span> --}}
                                <span class="tp-product-details-price new-price">$236.00</span>
                            </div>

                            <!-- actions -->
                            <div class="tp-product-details-action-wrapper sendtowa">
                                <a href="" class="tp-product-details-buy-now-btn w-75 text-center">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        // Menangani klik pada gambar merek
        document.addEventListener('DOMContentLoaded', function () {
            const brandFilterLinks = document.querySelectorAll('.brand-filter');
            brandFilterLinks.forEach(link => {
                link.addEventListener('click', function (event) {
                    event.preventDefault(); // Mencegah perilaku default dari link

                    // Ambil merek dari atribut data
                    const brand = this.dataset.brand;

                    // Redirect ke halaman produk dengan parameter merek yang dipilih
                    window.location.href = `${this.getAttribute('href')}?brand=${encodeURIComponent(brand)}`;
                });
            });
        });
    </script>

    {{-- <script>
        var brandImages = document.querySelectorAll('.brand-filter');
        brandImages.forEach(function(image) {
            image.addEventListener('click', function(event) {
                event.preventDefault();
                var clickedBrand = image.getAttribute('data-brand');
                var productItems = document.querySelectorAll('.product-item');
                productItems.forEach(function(item) {
                    var productName = item.getAttribute('data-brand');
                    if (productName === clickedBrand) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    </script> --}}
    <script>
        document.querySelectorAll('.tp-product-quick-view-btn').forEach(button => {
            button.addEventListener('click', function() {
                const productId = this.getAttribute('data-product-id');
                const data = JSON.parse(productId);
                console.log(productId)
                const id = data.id;
                const title = data.title;
                const slug = data.slug;
                const excerpt = data.excerpt;
                const kategori_id = data.kategori_id;
                const kategori_title = data.kategori_produk ? data.kategori_produk.title : '';
                const brand_id = data.rand_id;
                const users_id = data.users_id;
                const deskripsi = data.deskripsi;
                const price_disc = data.price_disc;
                const rating = data.rating;

                const telp = data.sales_produk && data.sales_produk.telp ? data.sales_produk.telp :
                    6285959512435;

                const buyNowLink = document.querySelector('.sendtowa a');
                const message = encodeURIComponent('Halo, Saya Ingin Bertanya Mengenai Produk' + ' " ' +
                    title + ' " ');
                buyNowLink.href = 'https://wa.me/' + telp + '?text=' + message;
                buyNowLink.target = '_blank';

                document.querySelector('.tp-product-details-category span').textContent = kategori_title;
                document.querySelector('.tp-product-details-title').textContent = title;

                let styleRating = "";
                for (let i = 1; i <= 5; i++) {
                    const star = '<span><i class="fa-solid fa-star"></i></span>';
                    styleRating += i <= rating ? star : '';
                }
                document.querySelector('.tp-product-details-rating').innerHTML = styleRating;
                const formattedPrice = new Intl.NumberFormat('id-ID').format(price_disc);
                document.querySelector('.tp-product-details-price.new-price').textContent =
                    `Rp ${formattedPrice}`;
                const imageUrl = this.getAttribute('data-image');
                document.querySelector('.tp-product-details-thumb-wrapper img').src = imageUrl;
                document.querySelector('.tp-product-details-thumb-wrapper img').alt = slug;
                const deskripsiAwal = deskripsi.split(' ').slice(0, 30).join(' ');
                document.querySelector('.tp-product-details-content').innerHTML = deskripsi;
            });

        });

        $(document).ready(function() {
            $('#category_filter').on('change', function() {
                var category_id = $(this).val();
                $.ajax({
                    url: "{{ route('product') }}?category=" + category_id,
                    type: 'GET',
                    data: {
                        category: category_id
                    },
                    success: function(data) {
                        $('.product-list').html(data);
                    },

                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            });
        });
    </script>
@endsection
