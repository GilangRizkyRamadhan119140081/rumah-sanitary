@extends('sanitary.layout.app')
@section('content')
    <main>

        <!-- slider area start -->
        <section class="tp-slider-area p-relative z-index-1">
            <div class="tp-slider-active tp-slider-variation swiper-container ">
                <div class="swiper-wrapper">
                    @foreach ($banneratas as $banneratas)
                        <div class="tp-slider-item  d-flex align-items-center swiper-slide">
                            @if ($banneratas->imagemobile)
                                <img src="{{ Storage::disk('s3')->url($banneratas->imagemobile) }}" class="d-sm-none"
                                    style="width: 100%; height: auto;"
                                    alt="{{ Storage::disk('s3')->url($banneratas->imagemobile) }}">
                            @endif
                            @if ($banneratas->imageweb)
                                <img src="{{ Storage::disk('s3')->url($banneratas->imageweb) }}"
                                    class="d-none d-md-block d-lg-block d-xl-block" style="width: 100%; height: 500px;"
                                    alt="{{ Storage::disk('s3')->url($banneratas->imageweb) }}">
                            @endif
                        </div>
                    @endforeach
                </div>
                <div class="tp-slider-arrow tp-swiper-arrow">
                    <button type="button" class="tp-slider-button-prev">
                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 13L1 7L7 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                    <button type="button" class="tp-slider-button-next">
                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 13L7 7L1 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <div class="tp-slider-dot tp-swiper-dot"></div>
            </div>
        </section>
        <!-- slider area end -->

        <!-- product category area start -->
        <section class="tp-product-category pt-15 pb-5">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xl-5 col-6">
                        <div class="tp-section-title-wrapper mb-10">
                            <h3 class="tp-section-title tp-section-title-sm">Category
                                <svg width="80" height="35" viewBox="0 0 114 35" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M112 23.275C1.84952 -10.6834 -7.36586 1.48086 7.50443 32.9053"
                                        stroke="currentColor" stroke-width="4" stroke-miterlimit="3.8637"
                                        stroke-linecap="round" />
                                </svg>
                            </h3>
                        </div>
                    </div>
                    <div class="col-xl-7 col-6">
                        <div class="tp-product-category-more-wrapper d-flex justify-content-end">
                            <div
                                class="tp-product-category-arrow tp-swiper-arrow mb-10 text-end tp-product-category-border">
                                <button type="button" class="tp-category-slider-button-prev">
                                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 13L1 7L7 1" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <button type="button" class="tp-category-slider-button-next">
                                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 13L7 7L1 1" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-12">
                        <div class="tp-product-category-slider fix">
                            <div class="tp-product-category-active swiper-container">
                                <div class="swiper-wrapper">
                                    @foreach ($category as $categories)
                                        <div class="tp-product-item transition-3 mb-25 swiper-slide">
                                            <div class="tp-product-thumb p-relative fix m-img"
                                                style="width: 100%;overflow: hidden;display: flex;flex-direction: column;justify-content: center;">
                                                <a href="{{ route('product', ['category' => $categories->id]) }}">
                                                    @if ($categories->image)
                                                        <img src="{{ Storage::disk('s3')->url($categories->image) }}"
                                                            alt="" style="width: 100%; height:117px;">
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="tp-product-content d-flex justify-content-center pb-0 px-2"
                                                style="width: 100%; height: 50px;">
                                                <h3 class="tp-product-title"
                                                    style="align-items: center; display:flex; font-size: 13px">
                                                    <a href="{{ route('product', ['category' => $categories->id]) }}">
                                                        {{ ucwords(strtolower($categories->title)) }}
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product category area end -->

        <!-- Brand start -->
        <section class="tp-feature-area pb-40">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-12">
                        <div class="tp-section-title-wrapper mb-10">
                            <h3 class="tp-section-title tp-section-title-sm">Brand
                                <svg width="80" height="35" viewBox="0 0 114 35" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M112 23.275C1.84952 -10.6834 -7.36586 1.48086 7.50443 32.9053"
                                        stroke="currentColor" stroke-width="4" stroke-miterlimit="3.8637"
                                        stroke-linecap="round" />
                                </svg>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row px-3">
                    @foreach ($brand as $brands)
                        <div class="col-2 justify-content-center d-none d-md-flex">
                            <a href="{{ route('product', ['brand' => $brands->id]) }}">
                                @if ($brands->image)
                                    <img src="{{ Storage::disk('s3')->url($brands->image) }}" width="70"
                                        height="70" alt="{{ $brands->name }}">
                                @endif
                            </a>
                        </div>
                        <div class="col-2 justify-content-center d-flex d-md-none">
                            <a href="{{ route('product', ['brand' => $brands->id]) }}">
                                @if ($brands->image)
                                    <img src="{{ Storage::disk('s3')->url($brands->image) }}" width="50"
                                        height="50" alt="{{ $brands->name }}">
                                @endif
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Brand end -->

        <!-- product trending start -->
        <section class="tp-product-area pb-15">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xl-5 col-lg-6 col-md-5">
                        <div class="tp-section-title-wrapper mb-40">
                            <h3 class="tp-section-title tp-section-title-sm">Trending Products

                                <svg width="114" height="35" viewBox="0 0 114 35" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M112 23.275C1.84952 -10.6834 -7.36586 1.48086 7.50443 32.9053"
                                        stroke="currentColor" stroke-width="4" stroke-miterlimit="3.8637"
                                        stroke-linecap="round" />
                                </svg>
                            </h3>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-md-7">
                        <div class="tp-product-tab tp-product-tab-border mb-25 tp-tab d-flex justify-content-md-end">
                            <ul class="nav nav-tabs justify-content-sm-end" id="productTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="featured-tab" data-bs-toggle="tab"
                                        data-bs-target="#featured-tab-pane" type="button" role="tab"
                                        aria-controls="featured-tab-pane" aria-selected="true">Featured
                                        <span class="tp-product-tab-line">
                                            <svg width="52" height="13" viewBox="0 0 52 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 8.97127C11.6061 -5.48521 33 3.99996 51 11.4635"
                                                    stroke="currentColor" stroke-width="2" stroke-miterlimit="3.8637"
                                                    stroke-linecap="round" />
                                            </svg>
                                        </span>
                                    </button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="new-tab" data-bs-toggle="tab"
                                        data-bs-target="#new-tab-pane" type="button" role="tab"
                                        aria-controls="new-tab-pane" aria-selected="false">New
                                        <span class="tp-product-tab-line">
                                            <svg width="52" height="13" viewBox="0 0 52 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 8.97127C11.6061 -5.48521 33 3.99996 51 11.4635"
                                                    stroke="currentColor" stroke-width="2" stroke-miterlimit="3.8637"
                                                    stroke-linecap="round" />
                                            </svg>
                                        </span>
                                    </button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="topsell-tab" data-bs-toggle="tab"
                                        data-bs-target="#topsell-tab-pane" type="button" role="tab"
                                        aria-controls="topsell-tab-pane" aria-selected="false">Top Sellers
                                        <span class="tp-product-tab-line">
                                            <svg width="52" height="13" viewBox="0 0 52 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 8.97127C11.6061 -5.48521 33 3.99996 51 11.4635"
                                                    stroke="currentColor" stroke-width="2" stroke-miterlimit="3.8637"
                                                    stroke-linecap="round" />
                                            </svg>
                                        </span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tp-product-tab-content">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade" id="new-tab-pane" role="tabpanel" aria-labelledby="new-tab"
                                    tabindex="0">
                                    <div class="row">
                                        @foreach ($latestProduct as $product)
                                            <div class="col-xl-2 col-lg-2 col-6">
                                                <div class="tp-product-item p-relative transition-3 mb-25">
                                                    <div class="tp-product-thumb p-relative fix m-img"
                                                        style="width: 100%;height: 180px;overflow: hidden;display: flex;flex-direction: column;justify-content: center;">
                                                        <a
                                                            href="{{ route('product.detail', ['slug' => $product->slug]) }}">
                                                            @if ($product->image)
                                                                <img src="{{ Storage::disk('s3')->url($product->image) }}"
                                                                    alt="">
                                                            @endif
                                                        </a>

                                                        <!-- product badge -->
                                                        <div class="tp-product-badge">
                                                            @if ($product->label_produk && $product->label_produk->image)
                                                                <img src="{{ Storage::disk('s3')->url($product->label_produk->image) }}"
                                                                    style="width: 40%">
                                                            @endif
                                                        </div>


                                                        <!-- product action -->
                                                        <div class="tp-product-action">
                                                            <div class="tp-product-action-item d-flex flex-column">
                                                                <button type="button"
                                                                    class="tp-product-action-btn tp-product-add-cart-btn">
                                                                    <svg width="20" height="20"
                                                                        viewBox="0 0 20 20" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z"
                                                                            fill="currentColor" />
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z"
                                                                            fill="currentColor" />
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z"
                                                                            fill="currentColor" />

                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z"
                                                                            fill="currentColor" />
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z"
                                                                            fill="currentColor" />

                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z"
                                                                            fill="currentColor" />
                                                                    </svg>

                                                                    <span class="tp-product-tooltip">Add to Cart</span>
                                                                </button>
                                                                <button type="button"
                                                                    class="tp-product-action-btn tp-product-quick-view-btn"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#producQuickViewModal"
                                                                    data-product-id="{{ $product }}"
                                                                    data-image="{{ Storage::disk('s3')->url($product->image) }}">
                                                                    <svg width="20" height="17"
                                                                        viewBox="0 0 20 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z"
                                                                            fill="currentColor" />
                                                                        <g mask="url(#mask0_1211_721)">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z"
                                                                                fill="currentColor" />
                                                                        </g>
                                                                    </svg>

                                                                    <span class="tp-product-tooltip">Quick View</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- product content -->
                                                    <div class="tp-product-content px-2"
                                                        style="width: 100%;height: 150px;">
                                                        <div class="tp-product-category">
                                                            <a>{{ $product->kategori_produk->title }}</a>
                                                        </div>
                                                        <h3 class="tp-product-title">
                                                            <a href="{{ route('product.detail', ['slug' => $product->slug]) }}"
                                                                style="font-size: 13px">
                                                                {{ strlen($product->title) > 15 ? substr($product->title, 0, 15) . '...' : $product->title }}
                                                            </a>
                                                        </h3>
                                                        <div class="tp-product-rating d-flex align-items-center">
                                                            <div class="tp-product-rating-icon">
                                                                @if ($product->rating >= 1)
                                                                    <span><i class="fa-solid fa-star"></i></span>
                                                                @endif
                                                                @if ($product->rating >= 2)
                                                                    <span><i class="fa-solid fa-star"></i></span>
                                                                @endif
                                                                @if ($product->rating >= 3)
                                                                    <span><i class="fa-solid fa-star"></i></span>
                                                                @endif
                                                                @if ($product->rating >= 4)
                                                                    <span><i class="fa-solid fa-star"></i></span>
                                                                @endif
                                                                @if ($product->rating >= 5)
                                                                    <span><i class="fa-solid fa-star"></i></span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="tp-product-price-wrapper">
                                                            {{-- <span class="tp-product-price old-price">$320.00</span> --}}
                                                            <span class="tp-product-price new-price">Rp.
                                                                {{ number_format($product->price_disc, 0, ',', '.') }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane fade show active" id="featured-tab-pane" role="tabpanel"
                                    aria-labelledby="featured-tab" tabindex="0">
                                    <div class="row">
                                        @php $counter = 0; @endphp
                                        @foreach ($featuredProducts as $trendProduct)
                                            @if ($counter < 6)
                                                <div class="col-xl-2 col-lg-2 col-6">
                                                    <div class="tp-product-item transition-3 mb-25">
                                                        <div class="tp-product-thumb p-relative fix m-img"
                                                            style="width: 100%;height: 180px;overflow: hidden;display: flex;flex-direction: column;justify-content: center;">
                                                            <a
                                                                href="{{ route('product.detail', ['slug' => $trendProduct->data_produk->slug]) }}">
                                                                @if ($trendProduct->data_produk->image)
                                                                    <img src="{{ Storage::disk('s3')->url($trendProduct->data_produk->image) }}"
                                                                        alt="">
                                                                @endif
                                                            </a>

                                                            <!-- product badge -->
                                                            <div class="tp-product-badge">
                                                                @if ($trendProduct->data_produk->label_produk && $trendProduct->data_produk->label_produk->image)
                                                                    <img src="{{ Storage::disk('s3')->url($trendProduct->data_produk->label_produk->image) }}"
                                                                        style="width: 40%">
                                                                @endif
                                                            </div>


                                                            <!-- product action -->
                                                            <div class="tp-product-action">
                                                                <div class="tp-product-action-item d-flex flex-column">
                                                                    <button type="button"
                                                                        class="tp-product-action-btn tp-product-add-cart-btn">
                                                                        <svg width="20" height="20"
                                                                            viewBox="0 0 20 20" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z"
                                                                                fill="currentColor" />
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z"
                                                                                fill="currentColor" />
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z"
                                                                                fill="currentColor" />

                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z"
                                                                                fill="currentColor" />
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z"
                                                                                fill="currentColor" />

                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z"
                                                                                fill="currentColor" />
                                                                        </svg>

                                                                        <span class="tp-product-tooltip">Add to Cart</span>
                                                                    </button>
                                                                    <button type="button"
                                                                        class="tp-product-action-btn tp-product-quick-view-btn"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#producQuickViewModal"
                                                                        data-product-id="{{ $trendProduct->data_produk }}"
                                                                        data-image="{{ Storage::disk('s3')->url($trendProduct->data_produk->image) }}">
                                                                        <svg width="20" height="17"
                                                                            viewBox="0 0 20 17" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z"
                                                                                fill="currentColor" />
                                                                            <g mask="url(#mask0_1211_721)">
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z"
                                                                                    fill="currentColor" />
                                                                            </g>
                                                                        </svg>

                                                                        <span class="tp-product-tooltip">Quick View</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- product content -->
                                                        <div class="tp-product-content px-2"
                                                            style="width: 100%;height: 150px;">
                                                            <div class="tp-product-category">
                                                                <a>
                                                                    {{ $trendProduct->data_produk->kategori_produk->title }}</a>
                                                            </div>
                                                            <h3 class="tp-product-title">
                                                                <a href="{{ route('product.detail', ['slug' => $trendProduct->data_produk->slug]) }}"
                                                                    style="font-size: 13px">
                                                                    <a href="{{ route('product.detail', ['slug' => $trendProduct->data_produk->slug]) }}"
                                                                        style="font-size: 13px">
                                                                        {{ strlen($trendProduct->data_produk->title) > 15 ? substr($trendProduct->data_produk->title, 0, 15) . '...' : $trendProduct->data_produk->title }}
                                                                    </a>
                                                            </h3>
                                                            <div class="tp-product-rating d-flex align-items-center">
                                                                <div class="tp-product-rating-icon">
                                                                    @if ($trendProduct->data_produk->rating >= 1)
                                                                        <span><i class="fa-solid fa-star"></i></span>
                                                                    @endif
                                                                    @if ($trendProduct->data_produk->rating >= 2)
                                                                        <span><i class="fa-solid fa-star"></i></span>
                                                                    @endif
                                                                    @if ($trendProduct->data_produk->rating >= 3)
                                                                        <span><i class="fa-solid fa-star"></i></span>
                                                                    @endif
                                                                    @if ($trendProduct->data_produk->rating >= 4)
                                                                        <span><i class="fa-solid fa-star"></i></span>
                                                                    @endif
                                                                    @if ($trendProduct->data_produk->rating >= 5)
                                                                        <span><i class="fa-solid fa-star"></i></span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="tp-product-price-wrapper">
                                                                <span class="tp-product-price-2 new-price"> Rp.
                                                                    {{ number_format($trendProduct->data_produk->price, 0, ',', '.') }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @php $counter++; @endphp
                                            @else
                                            @break
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="topsell-tab-pane" role="tabpanel"
                                aria-labelledby="topsell-tab" tabindex="0">
                                <div class="row">
                                    @php $countertop = 0; @endphp
                                    @foreach ($topProducts as $topProduct)
                                        @if ($countertop < 6)
                                            <div class="col-xl-2 col-lg-2 col-6">
                                                <div class="tp-product-item transition-3 mb-25">
                                                    <div class="tp-product-thumb p-relative fix m-img"
                                                        style="width: 100%;height: 180px;overflow: hidden;display: flex;flex-direction: column;justify-content: center;">
                                                        <a
                                                            href="{{ route('product.detail', ['slug' => $topProduct->data_produk->slug]) }}">
                                                            @if ($topProduct->data_produk->image)
                                                                <img src="{{ Storage::disk('s3')->url($topProduct->data_produk->image) }}"
                                                                    alt="">
                                                            @endif
                                                        </a>

                                                        <!-- product badge -->
                                                        <div class="tp-product-badge">
                                                            @if ($topProduct->label_produk && $topProduct->label_produk->image)
                                                                <img src="{{ Storage::disk('s3')->url($topProduct->label_produk->image) }}"
                                                                    style="width: 40%">
                                                            @endif
                                                        </div>

                                                        <!-- product action -->
                                                        <div class="tp-product-action">
                                                            <div class="tp-product-action-item d-flex flex-column">
                                                                <button type="button"
                                                                    class="tp-product-action-btn tp-product-add-cart-btn">
                                                                    <svg width="20" height="20"
                                                                        viewBox="0 0 20 20" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z"
                                                                            fill="currentColor" />
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z"
                                                                            fill="currentColor" />
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z"
                                                                            fill="currentColor" />

                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z"
                                                                            fill="currentColor" />
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z"
                                                                            fill="currentColor" />

                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z"
                                                                            fill="currentColor" />
                                                                    </svg>

                                                                    <span class="tp-product-tooltip">Add to Cart</span>
                                                                </button>
                                                                <button type="button"
                                                                    class="tp-product-action-btn tp-product-quick-view-btn"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#producQuickViewModal"
                                                                    data-product-id="{{ $topProduct->data_produk }}"
                                                                    data-image="{{ Storage::disk('s3')->url($topProduct->data_produk->image) }}">
                                                                    <svg width="20" height="17"
                                                                        viewBox="0 0 20 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z"
                                                                            fill="currentColor" />
                                                                        <g mask="url(#mask0_1211_721)">
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z"
                                                                                fill="currentColor" />
                                                                        </g>
                                                                    </svg>

                                                                    <span class="tp-product-tooltip">Quick View</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- product content -->
                                                    <div class="tp-product-content px-2"
                                                        style="width: 100%;height: 150px;">
                                                        <div class="tp-product-category">
                                                            <a>{{ $topProduct->data_produk->kategori_produk->title }}</a>
                                                        </div>
                                                        <h3 class="tp-product-title">
                                                            <a href="{{ route('product.detail', ['slug' => $topProduct->data_produk->slug]) }}"
                                                                style="font-size: 13px">
                                                                <a href="{{ route('product.detail', ['slug' => $topProduct->data_produk->slug]) }}"
                                                                    style="font-size: 13px">
                                                                    {{ strlen($topProduct->data_produk->title) > 15 ? substr($topProduct->data_produk->title, 0, 15) . '...' : $topProduct->data_produk->title }}
                                                                </a>
                                                            </a>
                                                        </h3>
                                                        <div class="tp-product-rating d-flex align-items-center">
                                                            <div class="tp-product-rating-icon">
                                                                @if ($topProduct->rating >= 1)
                                                                    <span><i class="fa-solid fa-star"></i></span>
                                                                @endif
                                                                @if ($topProduct->rating >= 2)
                                                                    <span><i class="fa-solid fa-star"></i></span>
                                                                @endif
                                                                @if ($topProduct->rating >= 3)
                                                                    <span><i class="fa-solid fa-star"></i></span>
                                                                @endif
                                                                @if ($topProduct->rating >= 4)
                                                                    <span><i class="fa-solid fa-star"></i></span>
                                                                @endif
                                                                @if ($topProduct->rating >= 5)
                                                                    <span><i class="fa-solid fa-star"></i></span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="tp-product-price-wrapper">
                                                            <span class="tp-product-price-2 new-price">Rp.
                                                                {{ number_format($topProduct->data_produk->price_disc, 0, ',', '.') }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @php $countertop++; @endphp
                                        @else
                                        @break
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- product trending end -->

<!-- product banner area start -->
<div class="tp-slider-area p-relative z-index-1">
    <div class="tp-product-banner-slider fix">
        <div class="tp-product-banner-slider-active swiper-container d-none d-md-block d-lg-block d-xl-block">
            <div class="swiper-wrapper">
                @foreach ($bannertengah as $bannertengah1)
                    <div class="tp-product-banner-inner p-0 z-index-1 fix swiper-slide">
                        <img src="{{ Storage::disk('s3')->url($bannertengah1->imageweb) }}"
                            alt="{{ Storage::disk('s3')->url($bannertengah1->imageweb) }}"
                            style="width: 100%; height: 530px;">
                    </div>
                @endforeach
            </div>
            <div class="tp-product-banner-slider-dot tp-swiper-dot"></div>
        </div>
        <div class="tp-product-banner-slider-active swiper-container d-md-none">
            <div class="swiper-wrapper">
                @foreach ($bannertengah as $bannertengah3)
                    <div class="tp-product-banner-inner p-0 z-index-1 fix swiper-slide">
                        <img src="{{ Storage::disk('s3')->url($bannertengah3->imagemobile) }}"
                            alt="{{ Storage::disk('s3')->url($bannertengah3->imagemobile) }}"
                            style="width: 100%; height: 100%;">
                    </div>
                @endforeach
            </div>
            <div class="tp-product-banner-slider-dot tp-swiper-dot"></div>
        </div>
    </div>
</div>
<!-- product banner area end -->

<!-- product arrival area start -->
<section class="tp-product-arrival-area pb-0">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-xl-5 col-7">
                <div class="tp-section-title-wrapper mt-10 mb-10">
                    <h3 class="tp-section-title tp-section-title-sm">New Product

                        <svg width="114" height="35" viewBox="0 0 114 35" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M112 23.275C1.84952 -10.6834 -7.36586 1.48086 7.50443 32.9053"
                                stroke="currentColor" stroke-width="4" stroke-miterlimit="3.8637"
                                stroke-linecap="round" />
                        </svg>
                    </h3>
                </div>
            </div>
            <div class="col-xl-7 col-5">
                <div class="tp-product-arrival-more-wrapper d-flex justify-content-end">
                    <div class="tp-product-arrival-arrow tp-swiper-arrow mt-20 mb-20 text-end tp-product-arrival-border"
                        style="padding-left: 0px">
                        <button type="button" class="tp-arrival-slider-button-prev">
                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 13L1 7L7 1" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <button type="button" class="tp-arrival-slider-button-next">
                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 13L7 7L1 1" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="tp-product-arrival-slider fix">
                    <div class="tp-product-arrival-active swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($newProducts as $product)
                                <div class="tp-product-item transition-3 mb-25 swiper-slide">
                                    <div class="tp-product-thumb p-relative fix m-img"
                                        style="width: 100%;overflow: hidden;display: flex;flex-direction: column;justify-content: center;">
                                        <a href="{{ route('product.detail', ['slug' => $product->slug]) }}">
                                            @if ($product->image)
                                                <img src="{{ Storage::disk('s3')->url($product->image) }}"
                                                    alt="" style="width: 100%; height:160px;">
                                            @endif
                                        </a>
                                        <!-- product badge -->
                                        <div class="tp-product-badge">
                                            @if ($product->label_produk && $product->label_produk->image)
                                                <img src="{{ Storage::disk('s3')->url($product->label_produk->image) }}"
                                                    style="width: 40%">
                                            @endif
                                        </div>
                                        <!-- product action -->
                                        <div class="tp-product-action">
                                            <div class="tp-product-action-item d-flex flex-column">
                                                <button type="button"
                                                    class="tp-product-action-btn tp-product-add-cart-btn">
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z"
                                                            fill="currentColor" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z"
                                                            fill="currentColor" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z"
                                                            fill="currentColor" />

                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z"
                                                            fill="currentColor" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z"
                                                            fill="currentColor" />

                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z"
                                                            fill="currentColor" />
                                                    </svg>

                                                    <span class="tp-product-tooltip">Add to Cart</span>
                                                </button>
                                                <button type="button"
                                                    class="tp-product-action-btn tp-product-quick-view-btn"
                                                    data-bs-toggle="modal" data-bs-target="#producQuickViewModal"
                                                    data-product-id="{{ $product }}"
                                                    data-image="{{ Storage::disk('s3')->url($product->image) }}">
                                                    <svg width="20" height="17" viewBox="0 0 20 17"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z"
                                                            fill="currentColor" />
                                                        <g mask="url(#mask0_1211_721)">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z"
                                                                fill="currentColor" />
                                                        </g>
                                                    </svg>
                                                    <span class="tp-product-tooltip">Quick View</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product content -->
                                    <div class="tp-product-content px-2" style="width: 100%;height: 140px;">
                                        <div class="tp-product-category"
                                            style="align-items: center; display:flex; font-size: 13px">
                                            <a>{{ $product->kategori_produk->title }}</a>
                                        </div>
                                        <h3 class="tp-product-title"
                                            style="align-items: center; display:flex; font-size: 13px">
                                            <a href="{{ route('product.detail', ['slug' => $product->slug]) }}">
                                                <a href="{{ route('product.detail', ['slug' => $product->slug]) }}"
                                                    style="font-size: 13px">
                                                    {{ strlen($product->title) > 15 ? substr($product->title, 0, 15) . '...' : $product->title }}
                                                </a>
                                            </a>
                                        </h3>
                                        <div class="tp-product-rating d-flex align-items-center">
                                            <div class="tp-product-rating-icon">
                                                @if ($product->rating >= 1)
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                @endif
                                                @if ($product->rating >= 2)
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                @endif
                                                @if ($product->rating >= 3)
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                @endif
                                                @if ($product->rating >= 4)
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                @endif
                                                @if ($product->rating >= 5)
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="tp-product-price-wrapper"
                                            style="align-items: center; display:flex; font-size: 13px">
                                            <span class="tp-product-price new-price"> Rp.
                                                {{ number_format($product->price_disc, 0, ',', '.') }}</span>
                                            {{-- <span class="tp-product-price new-price">$7350.00</span> --}}
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
</section>
<!-- product arrival area end -->

<!-- product diskon area start -->
<section class="tp-product-diskon-area pb-0">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-xl-5 col-7">
                <div class="tp-section-title-wrapper mt-0 mb-20">
                    <h3 class="tp-section-title tp-section-title-sm">Discount Products

                        <svg width="64" height="20" viewBox="0 0 114 35" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M112 23.275C1.84952 -10.6834 -7.36586 1.48086 7.50443 32.9053"
                                stroke="currentColor" stroke-width="4" stroke-miterlimit="3.8637"
                                stroke-linecap="round" />
                        </svg>
                    </h3>
                </div>
            </div>
            <div class="col-xl-7 col-5">
                <div class="tp-product-diskon-more-wrapper d-flex justify-content-end">
                    <div class="tp-product-diskon-arrow tp-swiper-arrow mt-0 mb-20 text-end tp-product-diskon-border"
                        style="padding-left: 0px">
                        <button type="button" class="tp-diskon-slider-button-prev">
                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 13L1 7L7 1" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <button type="button" class="tp-diskon-slider-button-next">
                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 13L7 7L1 1" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="tp-product-diskon-slider fix">
                    <div class="tp-product-diskon-active swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($diskonProducts as $diskonProducts)
                                <div class="tp-product-item transition-3 mb-5 swiper-slide">
                                    <div class="tp-product-thumb p-relative fix m-img"
                                        style="width: 100%;overflow: hidden;display: flex;flex-direction: column;justify-content: center;">
                                        <a
                                            href="{{ route('product.detail', ['slug' => $diskonProducts->data_produk->slug]) }}">
                                            @if ($diskonProducts->data_produk->image)
                                                <img src="{{ Storage::disk('s3')->url($diskonProducts->data_produk->image) }}"
                                                    alt="" style="width: 100%; height:160px;">
                                            @endif
                                        </a>
                                        @php
                                            $discountPercentage =
                                                $diskonProducts->data_produk->price > 0
                                                    ? (($diskonProducts->data_produk->price - $diskonProducts->data_produk->price_disc) / $diskonProducts->data_produk->price) * 100
                                                    : 0;
                                        @endphp

                                        <!-- product badge -->
                                        <div class="tp-product-badge">
                                            <span class="product-sale">-{{ round($discountPercentage) }}%</span>
                                            {{-- @if ($diskonProducts->data_produk->label_produk && $diskonProducts->data_produk->label_produk->image)
                                                <img
                                                    src="{{ Storage::disk('s3')->url($diskonProducts->data_produk->label_produk->image) }}">
                                            @endif --}}
                                        </div>

                                        <!-- product action -->
                                        <div class="tp-product-action">
                                            <div class="tp-product-action-item d-flex flex-column">
                                                <button type="button"
                                                    class="tp-product-action-btn tp-product-add-cart-btn">
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z"
                                                            fill="currentColor" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z"
                                                            fill="currentColor" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z"
                                                            fill="currentColor" />

                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z"
                                                            fill="currentColor" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z"
                                                            fill="currentColor" />

                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z"
                                                            fill="currentColor" />
                                                    </svg>

                                                    <span class="tp-product-tooltip">Add to Cart</span>
                                                </button>
                                                <button type="button"
                                                    class="tp-product-action-btn tp-product-quick-view-btn"
                                                    data-bs-toggle="modal" data-bs-target="#producQuickViewModal"
                                                    data-product-id="{{ $diskonProducts->data_produk }}"
                                                    data-image="{{ Storage::disk('s3')->url($diskonProducts->data_produk->image) }}">
                                                    <svg width="20" height="17" viewBox="0 0 20 17"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z"
                                                            fill="currentColor" />
                                                        <g mask="url(#mask0_1211_721)">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z"
                                                                fill="currentColor" />
                                                        </g>
                                                    </svg>
                                                    <span class="tp-product-tooltip">Quick View</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product content -->
                                    <div class="tp-product-content px-2" style="width: 100%;height: 140px;">
                                        <div class="tp-product-category"
                                            style="align-items: center; display:flex; font-size: 13px">
                                            <a>{{ $diskonProducts->data_produk->kategori_produk->title }}</a></a>
                                        </div>
                                        <h3 class="tp-product-title"
                                            style="align-items: center; display:flex; font-size: 13px">
                                            <a
                                                href="{{ route('product.detail', ['slug' => $diskonProducts->data_produk->slug]) }}">
                                                {{ strlen($diskonProducts->data_produk->title) > 15 ? substr($diskonProducts->data_produk->title, 0, 15) . '...' : $diskonProducts->data_produk->title }}
                                            </a>
                                        </h3>
                                        <div class="tp-product-rating d-flex align-items-center">
                                            <div class="tp-product-rating-icon">
                                                @if ($diskonProducts->data_produk->rating >= 1)
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                @endif
                                                @if ($diskonProducts->data_produk->rating >= 2)
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                @endif
                                                @if ($diskonProducts->data_produk->rating >= 3)
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                @endif
                                                @if ($diskonProducts->data_produk->rating >= 4)
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                @endif
                                                @if ($diskonProducts->data_produk->rating >= 5)
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="tp-product-price-wrapper"
                                            style="align-items: center; font-size: 13px">
                                            <div class="tp-product-price old-price" style="font-size:11px">Rp.
                                                {{ number_format($diskonProducts->data_produk->price, 0, ',', '.') }}
                                            </div>
                                            <div class="tp-product-price new-price" style="font-size:13px"> Rp.
                                                {{ number_format($diskonProducts->data_produk->price_disc, 0, ',', '.') }}
                                            </div>
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
</section>
<!-- product diskon area end -->

<!-- product featured area start -->
<section class="tp-product-featured-area pb-0">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-xl-5 col-7">
                <div class="tp-section-title-wrapper mt-10 mb-20">
                    <h3 class="tp-section-title tp-section-title-sm">Featured Products

                        <svg width="64" height="20" viewBox="0 0 114 35" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M112 23.275C1.84952 -10.6834 -7.36586 1.48086 7.50443 32.9053"
                                stroke="currentColor" stroke-width="4" stroke-miterlimit="3.8637"
                                stroke-linecap="round" />
                        </svg>
                    </h3>
                </div>
            </div>
            <div class="col-xl-7 col-5">
                <div class="tp-product-featured-more-wrapper d-flex justify-content-end">
                    <div class="tp-product-featured-arrow tp-swiper-arrow mt-20 mb-20 text-end tp-product-featured-border"
                        style="padding-left: 0px">
                        <button type="button" class="tp-featured-slider-button-prev">
                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 13L1 7L7 1" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <button type="button" class="tp-featured-slider-button-next">
                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 13L7 7L1 1" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="tp-product-featured-slider fix">
                    <div class="tp-product-featured-active swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($featuredProducts as $featuredProducts)
                                <div class="tp-product-item transition-3 mb-25 swiper-slide">
                                    <div class="tp-product-thumb p-relative fix m-img"
                                        style="width: 100%;overflow: hidden;display: flex;flex-direction: column;justify-content: center;">
                                        <a
                                            href="{{ route('product.detail', ['slug' => $featuredProducts->data_produk->slug]) }}">
                                            @if ($featuredProducts->data_produk->image)
                                                <img src="{{ Storage::disk('s3')->url($featuredProducts->data_produk->image) }}"
                                                    alt="" style="width: 100%; height:160px;">
                                            @endif
                                        </a>

                                        <!-- product badge -->
                                        <div class="tp-product-badge">
                                            @if ($featuredProducts->data_produk->label_produk && $featuredProducts->data_produk->label_produk->image)
                                                <img src="{{ Storage::disk('s3')->url($featuredProducts->data_produk->label_produk->image) }}"
                                                    style="width: 40%">
                                            @endif
                                        </div>


                                        <!-- product action -->
                                        <div class="tp-product-action">
                                            <div class="tp-product-action-item d-flex flex-column">
                                                <button type="button"
                                                    class="tp-product-action-btn tp-product-add-cart-btn">
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z"
                                                            fill="currentColor" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z"
                                                            fill="currentColor" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z"
                                                            fill="currentColor" />

                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z"
                                                            fill="currentColor" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z"
                                                            fill="currentColor" />

                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z"
                                                            fill="currentColor" />
                                                    </svg>

                                                    <span class="tp-product-tooltip">Add to Cart</span>
                                                </button>
                                                <button type="button"
                                                    class="tp-product-action-btn tp-product-quick-view-btn"
                                                    data-bs-toggle="modal" data-bs-target="#producQuickViewModal"
                                                    data-product-id="{{ $featuredProducts->data_produk }}"
                                                    data-image="{{ Storage::disk('s3')->url($featuredProducts->data_produk->image) }}">
                                                    <svg width="20" height="17" viewBox="0 0 20 17"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z"
                                                            fill="currentColor" />
                                                        <g mask="url(#mask0_1211_721)">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z"
                                                                fill="currentColor" />
                                                        </g>
                                                    </svg>
                                                    <span class="tp-product-tooltip">Quick View</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product content -->
                                    <div class="tp-product-content px-2" style="width: 100%;height: 140px;">
                                        <div class="tp-product-category"
                                            style="align-items: center; display:flex; font-size: 13px">
                                            <a>{{ $featuredProducts->data_produk->kategori_produk->title }}</a></a>
                                        </div>
                                        <h3 class="tp-product-title"
                                            style="align-items: center; display:flex; font-size: 13px">
                                            <a
                                                href="{{ route('product.detail', ['slug' => $featuredProducts->data_produk->slug]) }}">
                                                {{ strlen($featuredProducts->data_produk->title) > 15 ? substr($featuredProducts->data_produk->title, 0, 15) . '...' : $featuredProducts->data_produk->title }}
                                            </a>
                                        </h3>
                                        <div class="tp-product-rating d-flex align-items-center">
                                            <div class="tp-product-rating-icon">
                                                @if ($featuredProducts->data_produk->rating >= 1)
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                @endif
                                                @if ($featuredProducts->data_produk->rating >= 2)
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                @endif
                                                @if ($featuredProducts->data_produk->rating >= 3)
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                @endif
                                                @if ($featuredProducts->data_produk->rating >= 4)
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                @endif
                                                @if ($featuredProducts->data_produk->rating >= 5)
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="tp-product-price-wrapper"
                                            style="align-items: center; display:flex; font-size: 13px">
                                            <span class="tp-product-price new-price"> Rp.
                                                {{ number_format($featuredProducts->data_produk->price_disc, 0, ',', '.') }}</span>
                                            {{-- <span class="tp-product-price new-price">$7350.00</span> --}}
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
</section>
<!-- product featured area end -->

<!-- product selling area start -->
<section class="tp-product-selling-area pb-0">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-xl-5 col-7">
                <div class="tp-section-title-wrapper mt-10 mb-0">
                    <h3 class="tp-section-title tp-section-title-sm">Selling Products

                        <svg width="64" height="20" viewBox="0 0 114 35" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M112 23.275C1.84952 -10.6834 -7.36586 1.48086 7.50443 32.9053"
                                stroke="currentColor" stroke-width="4" stroke-miterlimit="3.8637"
                                stroke-linecap="round" />
                        </svg>
                    </h3>
                </div>
            </div>
            <div class="col-xl-7 col-5">
                <div class="tp-product-selling-more-wrapper d-flex justify-content-end">
                    <div class="tp-product-selling-arrow tp-swiper-arrow mt-0 mb-0 text-end tp-product-selling-border"
                        style="padding-left: 0px">
                        <button type="button" class="tp-selling-slider-button-prev">
                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 13L1 7L7 1" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <button type="button" class="tp-selling-slider-button-next">
                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 13L7 7L1 1" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="tp-product-selling-slider fix">
                    <div class="tp-product-selling-active swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($sellingProducts as $sellingProducts)
                                <div class="tp-product-item transition-3 mb-25 swiper-slide">
                                    <div class="tp-product-thumb p-relative fix m-img"
                                        style="width: 100%;overflow: hidden;display: flex;flex-direction: column;justify-content: center;">
                                        <a
                                            href="{{ route('product.detail', ['slug' => $sellingProducts->data_produk->slug]) }}">
                                            @if ($sellingProducts->data_produk->image)
                                                <img src="{{ Storage::disk('s3')->url($sellingProducts->data_produk->image) }}"
                                                    alt="" style="width: 100%; height:160px;">
                                            @endif
                                        </a>

                                        <!-- product badge -->
                                        <div class="tp-product-badge">
                                            @if ($sellingProducts->data_produk->label_produk && $sellingProducts->data_produk->label_produk->image)
                                                <img src="{{ Storage::disk('s3')->url($sellingProducts->data_produk->label_produk->image) }}"
                                                    style="width: 40%">
                                            @endif
                                        </div>


                                        <!-- product action -->
                                        <div class="tp-product-action">
                                            <div class="tp-product-action-item d-flex flex-column">
                                                <button type="button"
                                                    class="tp-product-action-btn tp-product-add-cart-btn">
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z"
                                                            fill="currentColor" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z"
                                                            fill="currentColor" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z"
                                                            fill="currentColor" />

                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z"
                                                            fill="currentColor" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z"
                                                            fill="currentColor" />

                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z"
                                                            fill="currentColor" />
                                                    </svg>

                                                    <span class="tp-product-tooltip">Add to Cart</span>
                                                </button>
                                                <button type="button"
                                                    class="tp-product-action-btn tp-product-quick-view-btn"
                                                    data-bs-toggle="modal" data-bs-target="#producQuickViewModal"
                                                    data-product-id="{{ $sellingProducts->data_produk }}"
                                                    data-image="{{ Storage::disk('s3')->url($sellingProducts->data_produk->image) }}">
                                                    <svg width="20" height="17" viewBox="0 0 20 17"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z"
                                                            fill="currentColor" />
                                                        <g mask="url(#mask0_1211_721)">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z"
                                                                fill="currentColor" />
                                                        </g>
                                                    </svg>
                                                    <span class="tp-product-tooltip">Quick View</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product content -->
                                    <div class="tp-product-content" style="width: 100%;height: 140px;">
                                        <div class="tp-product-category"
                                            style="align-items: center; display:flex; font-size: 13px">
                                            <a>{{ $sellingProducts->data_produk->kategori_produk->title }}</a></a>
                                        </div>
                                        <h3 class="tp-product-title"
                                            style="align-items: center; display:flex; font-size: 13px">
                                            <a
                                                href="{{ route('product.detail', ['slug' => $sellingProducts->data_produk->slug]) }}">
                                                {{ strlen($sellingProducts->data_produk->title) > 15 ? substr($sellingProducts->data_produk->title, 0, 15) . '...' : $sellingProducts->data_produk->title }}
                                            </a>
                                        </h3>
                                        <div class="tp-product-rating d-flex align-items-center">
                                            <div class="tp-product-rating-icon">
                                                @if ($sellingProducts->data_produk->rating >= 1)
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                @endif
                                                @if ($sellingProducts->data_produk->rating >= 2)
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                @endif
                                                @if ($sellingProducts->data_produk->rating >= 3)
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                @endif
                                                @if ($sellingProducts->data_produk->rating >= 4)
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                @endif
                                                @if ($sellingProducts->data_produk->rating >= 5)
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="tp-product-price-wrapper"
                                            style="align-items: center; display:flex; font-size: 13px">
                                            <span class="tp-product-price new-price"> Rp.
                                                {{ number_format($sellingProducts->data_produk->price_disc, 0, ',', '.') }}</span>
                                            {{-- <span class="tp-product-price new-price">$7350.00</span> --}}
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
</section>
<!-- product selling area end -->

<!-- blog area start -->
<section class="tp-blog-area pt-20 pb-35">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-xl-4 col-md-6">
                <div class="tp-section-title-wrapper mb-50">
                    <h3 class="tp-section-title">Latest news & articles

                        <svg width="114" height="35" viewBox="0 0 114 35" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M112 23.275C1.84952 -10.6834 -7.36586 1.48086 7.50443 32.9053"
                                stroke="currentColor" stroke-width="4" stroke-miterlimit="3.8637"
                                stroke-linecap="round" />
                        </svg>
                    </h3>
                </div>
            </div>
            <div class="col-xl-8 col-md-6">
                <div class="tp-blog-more-wrapper d-flex justify-content-md-end">
                    <div class="tp-blog-more mb-50 text-md-end">
                        <a href="{{ route('blog') }}" class="tp-btn tp-btn-2 tp-btn-blue">View All Blog
                            <svg width="17" height="14" viewBox="0 0 17 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 6.99976L1 6.99976" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M9.9502 0.975414L16.0002 6.99941L9.9502 13.0244" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                        <span class="tp-blog-more-border"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="tp-blog-main-slider">
                    <div class="tp-blog-main-slider-active swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($latestBlogs as $blog)
                                <div class="tp-blog-item mb-30 swiper-slide">
                                    <div class="tp-blog-thumb p-relative fix">
                                        <a href="{{ route('product.detail', ['slug' => $blog->slug]) }}">
                                            @if ($blog->image)
                                                <img src="{{ Storage::disk('s3')->url($blog->image) }}"
                                                    alt="" width="384" height="270">
                                            @endif
                                        </a>
                                        <div class="tp-blog-meta tp-blog-meta-date">
                                            <span>{{ $blog->created_at->format('d F Y') }}</span>
                                        </div>
                                    </div>
                                    <div class="tp-blog-content">
                                        <h3 class="tp-blog-title">
                                            <a
                                                href="{{ route('product.detail', ['slug' => $blog->slug]) }}">{{ $blog->title }}</a>
                                        </h3>

                                        <div class="tp-blog-tag">
                                            <span><i class="fa-light fa-tag"></i></span>
                                            @if ($blog->kategori_blog)
                                                <a href="">{{ $blog->kategori_blog->title }}</a>
                                            @endif
                                            {{-- <a href="#">News</a> --}}
                                        </div>

                                        <p>
                                            <?php
                                            $content = strip_tags($blog->content); // Menghapus tag HTML dari konten
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
                                        <div class="tp-blog-btn">
                                            <a href="{{ route('product.detail', ['slug' => $blog->slug]) }}"
                                                class="tp-btn-2 tp-btn-border-2">
                                                Read More
                                                <span>
                                                    <svg width="17" height="15" viewBox="0 0 17 15"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16 7.5L1 7.5" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M9.9502 1.47541L16.0002 7.49941L9.9502 13.5244"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </a>
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
</section>
<!-- blog area end -->

<!-- instagram area start -->
<div class="tp-instagram-area pb-15">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-xl-5 col-6">
                <div class="tp-section-title-wrapper mb-40">
                    <h3 class="tp-section-title">Gallery

                        <svg width="114" height="35" viewBox="0 0 114 35" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M112 23.275C1.84952 -10.6834 -7.36586 1.48086 7.50443 32.9053"
                                stroke="currentColor" stroke-width="4" stroke-miterlimit="3.8637"
                                stroke-linecap="round" />
                        </svg>
                    </h3>
                </div>
            </div>
            <div class="col-xl-7 col-6">
                <div class="tp-product-gallery-more-wrapper d-flex justify-content-end">
                    <div
                        class="tp-product-gallery-arrow tp-swiper-arrow mb-40 text-end tp-product-gallery-border">
                        <button type="button" class="tp-gallery-slider-button-prev">
                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 13L1 7L7 1" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <button type="button" class="tp-gallery-slider-button-next">
                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 13L7 7L1 1" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="tp-product-gallery-slider fix">
                    <div class="tp-product-gallery-active swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($gallery as $gallery)
                                <div class="tp-product-item transition-3 mb-25 swiper-slide">
                                    <div class="tp-product-thumb p-relative fix m-img"
                                        style="width: auto; height: 250px;overflow: hidden;display: flex;flex-direction: column;justify-content: center;">
                                        <img src="{{ Storage::disk('s3')->url($gallery->image) }}"
                                            alt="{{ Storage::disk('s3')->url($gallery->image) }}">
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
<!-- instagram area end -->

<!-- subscribe area start -->
<section class="tp-subscribe-area pt-70 pb-65 theme-bg p-relative z-index-1">
    <div class="container">
        <div class="tp-subscribe-shape">
            <img class="tp-subscribe-shape-1"
                src="{{ url('app-sanitary/img/subscribe/subscribe-shape-1.png') }}" alt="">
            <img class="tp-subscribe-shape-2"
                src="{{ url('app-sanitary/img/subscribe/subscribe-shape-2.png') }}" alt="">
            <img class="tp-subscribe-shape-3"
                src="{{ url('app-sanitary/img/subscribe/subscribe-shape-3.png') }}" alt="">
            <img class="tp-subscribe-shape-4"
                src="{{ url('app-sanitary/img/subscribe/subscribe-shape-4.png') }}" alt="">
            <!-- plane shape -->
            <div class="tp-subscribe-plane">
                <img class="tp-subscribe-plane-shape" src="{{ url('app-sanitary/img/subscribe/plane.png') }}"
                    alt="">
                <svg width="399" height="110" class="d-none block" viewBox="0 0 399 110"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0.499634 1.00049C8.5 20.0005 54.2733 13.6435 60.5 40.0005C65.6128 61.6426 26.4546 130.331 15 90.0005C-9 5.5 176.5 127.5 218.5 106.5C301.051 65.2247 202 -57.9188 344.5 40.0003C364 53.3997 384 22 399 22"
                        stroke="white" stroke-opacity="0.5" stroke-dasharray="3 3" />
                </svg>
                <svg class="d-sm-none" width="193" height="110" viewBox="0 0 193 110" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1 1C4.85463 20.0046 26.9085 13.6461 29.9086 40.0095C32.372 61.6569 13.5053 130.362 7.98637 90.0217C-3.57698 5.50061 85.7981 127.53 106.034 106.525C145.807 65.2398 98.0842 -57.9337 166.742 40.0093C176.137 53.412 185.773 22.0046 193 22.0046"
                        stroke="white" stroke-opacity="0.5" stroke-dasharray="3 3" />
                </svg>
            </div>
        </div>
        <div class="tp-subscribe-content">
            <h3 class="tp-subscribe-title" style="font-size: 40px; margin-left:30px">FAQ</h3>
            {{-- <p class="tp-subscribe-title" style="font-size: 16px; margin-left:70px">Your paragraph content goes here.</p> --}}
        </div>
        <div class="element-section mb-50 mt-30">
            <div class="row">
                <div class="col-md-6 mb-md-30">
                    <img src="{{ url('img/faqs.svg') }}" alt="FAQ" class="lazy-load"
                        style="margin-top: -10px" width="100%">
                </div>
                <div class="col-md-6 mb-md-30">
                    <div class="accordion style-2" style="width: 100%">
                        @foreach ($faqs as $faq)
                            <div class="content-title">
                                <span class="active"><i class="active-icon"></i>{{ $faq->question }}</span>
                                <div class="content">{{ $faq->answer }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- subscribe area end -->

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
                    <div class="tp-product-details-action-wrapper">
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
    document.addEventListener('DOMContentLoaded', function() {
        const brandFilterLinks = document.querySelectorAll('.brand-filter');
        brandFilterLinks.forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault(); // Mencegah perilaku default dari link

                // Ambil merek dari atribut data
                const brand = this.dataset.brand;

                // Lakukan sesuatu dengan merek yang dipilih, misalnya, filter daftar produk
                console.log('Merek yang dipilih:', brand);
            });
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var titles = document.querySelectorAll('.content-title');

        titles.forEach(function(title) {
            title.addEventListener('click', function() {
                title.classList.toggle('active'); // Toggle kelas active pada elemen title
            });
        });
    });
    // Tangani klik pada tombol Quick View
    document.querySelectorAll('.tp-product-quick-view-btn').forEach(button => {
        button.addEventListener('click', function() {
            // Ambil ID produk dari atribut data-product-id
            const productId = this.getAttribute('data-product-id');
            console.log(productId)

            const data = JSON.parse(productId);
            const id = data.id;
            const title = data.title;
            const slug = data.slug;
            const excerpt = data.excerpt;
            const kategori_id = data.kategori_id;
            const brand_id = data.brand_id;
            const users_id = data.users_id;
            const deskripsi = data.deskripsi;
            const rating = data.rating;
            const price_disc = data.price_disc;
            const telp = data.sales_produk && data.sales_produk.telp ? data.sales_produk.telp :
                6285959512435;

            // const kategori_produk = JSON.parse(productId.kategori_produk)

            const buyNowLink = document.querySelector('.tp-product-details-action-wrapper a');
            const message = encodeURIComponent('Halo, Saya Ingin Bertanya Mengenai Produk' + ' " ' +
                title + ' " ');
            buyNowLink.href = 'https://wa.me/' + telp + '?text=' + message;
            buyNowLink.target = '_blank'; // Tambahkan atribut target


            document.querySelector('.tp-product-details-category span').textContent = data
                .kategori_produk.title;
            document.querySelector('.tp-product-details-title').textContent = title;


            const formattedPrice = new Intl.NumberFormat('id-ID').format(price_disc);
            document.querySelector('.tp-product-details-price.new-price').textContent =
                `Rp ${formattedPrice}`;
            const imageUrl = this.getAttribute('data-image');

            // Setel URL gambar ke elemen gambar dalam modal
            document.querySelector('.tp-product-details-thumb-wrapper img').src = imageUrl;

            document.querySelector('.tp-product-details-thumb-wrapper img').alt = slug;

            let styleRating = "";
            for (let i = 1; i <= 5; i++) {
                const star = '<span><i class="fa-solid fa-star"></i></span>';
                styleRating += i <= rating ? star : '';
            }

            document.querySelector('.tp-product-details-rating').innerHTML = styleRating;

            // Setel deskripsi ke elemen dalam modal
            const deskripsiAwal = deskripsi.split(' ').slice(0, 30).join(' ');
            document.querySelector('.tp-product-details-content').innerHTML = deskripsi;
        });
    });
</script>
@endsection
