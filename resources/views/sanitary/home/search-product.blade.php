<main>
    <!-- breadcrumb area start -->
    <section class="breadcrumb__area include-bg pt-100 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content p-relative z-index-1">
                        <h3 class="breadcrumb__title">Produk Sanitary</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- shop area start -->
    <section class="tp-shop-area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="tp-shop-sidebar mr-10">
                        <!-- filter -->
                        {{-- <div class="tp-shop-widget mb-35">
                            <h3 class="tp-shop-widget-title no-border">Price Filter</h3>

                            <div class="tp-shop-widget-content">
                                <div class="tp-shop-widget-filter">
                                    <div id="slider-range" class="mb-10"></div>
                                    <div
                                        class="tp-shop-widget-filter-info d-flex align-items-center justify-content-between">
                                        <span class="input-range">
                                            <input type="text" id="amount" readonly>
                                        </span>
                                        <button class="tp-shop-widget-filter-btn" type="button">Filter</button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- status -->
                        <div class="tp-shop-widget mb-50">
                            <h3 class="tp-shop-widget-title">Product Status</h3>

                            <div class="tp-shop-widget-content">
                                <div class="tp-shop-widget-checkbox">
                                    <ul class="filter-items filter-checkbox">
                                        <li class="filter-item checkbox">
                                            <input id="on_sale" type="checkbox">
                                            <label for="on_sale">On sale</label>
                                        </li>
                                        <li class="filter-item checkbox">
                                            <input id="in_stock" type="checkbox">
                                            <label for="in_stock">In Stock</label>
                                        </li>
                                    </ul><!-- .filter-items -->
                                </div>
                            </div>
                        </div>
                        <!-- categories -->
                        <div class="tp-shop-widget mb-50">
                            <h3 class="tp-shop-widget-title">Categories</h3>

                            <div class="tp-shop-widget-content">
                                <div class="tp-shop-widget-categories">
                                    @foreach ($category as $item)
                                        <ul>
                                            <li><a href="#">{{ $item->title }}<span></span></a></li>
                                        </ul>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <!-- product rating -->
                        <div class="tp-shop-widget mb-50">
                            <h3 class="tp-shop-widget-title">Top Rated Products</h3>

                            <div class="tp-shop-widget-content">
                                <div class="tp-shop-widget-product">
                                    @foreach ($top as $product)
                                        <div class="tp-shop-widget-product-item d-flex align-items-center">
                                            <div class="tp-shop-widget-product-thumb">
                                                <a href="product-details.html">
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
                                                            <svg width="12" height="12" viewBox="0 0 12 12"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <span>
                                                            <svg width="12" height="12" viewBox="0 0 12 12"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <span>
                                                            <svg width="12" height="12" viewBox="0 0 12 12"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <span>
                                                            <svg width="12" height="12" viewBox="0 0 12 12"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <span>
                                                            <svg width="12" height="12" viewBox="0 0 12 12"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M6 0L7.854 3.756L12 4.362L9 7.284L9.708 11.412L6 9.462L2.292 11.412L3 7.284L0 4.362L4.146 3.756L6 0Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                                <h4 class="tp-shop-widget-product-title">
                                                    <a
                                                        href="{{ route('product.detail', ['id' => $product->data_produk->id]) }}">{{ implode(' ', array_slice(str_word_count($product->data_produk->deskripsi, 1), 0, 2)) }}...</a>
                                                </h4>
                                                <div class="tp-shop-widget-product-price-wrapper">
                                                    <span
                                                        class="tp-shop-widget-product-price">Rp. {{ number_format($product->data_produk->price, 0, ',', '.') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- brand -->
                        <div class="tp-shop-widget mb-50">
                            <h3 class="tp-shop-widget-title">Popular Brands</h3>

                            <div class="tp-shop-widget-content ">

                                <div
                                    class="tp-shop-widget-brand-list d-flex align-items-center justify-content-between flex-wrap">
                                    @foreach ($popularBrands as $item)
                                        <div class="tp-shop-widget-brand-item">

                                            <a href="#">
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
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="tp-shop-main-wrapper">

                        <div class="tp-shop-top mb-45">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="tp-shop-top-left d-flex align-items-center ">
                                        <div class="tp-shop-top-tab tp-tab">
                                            <ul class="nav nav-tabs" id="productTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="grid-tab"
                                                        data-bs-toggle="tab" data-bs-target="#grid-tab-pane"
                                                        type="button" role="tab" aria-controls="grid-tab-pane"
                                                        aria-selected="true">
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
                                <div class="col-xl-6">
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
                                                    <svg width="16" height="15" viewBox="0 0 16 15"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M14.9998 3.45001H10.7998" stroke="currentColor"
                                                            stroke-width="1.5" stroke-miterlimit="10"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M3.8 3.45001H1" stroke="currentColor"
                                                            stroke-width="1.5" stroke-miterlimit="10"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path
                                                            d="M6.5999 5.9C7.953 5.9 9.0499 4.8031 9.0499 3.45C9.0499 2.0969 7.953 1 6.5999 1C5.2468 1 4.1499 2.0969 4.1499 3.45C4.1499 4.8031 5.2468 5.9 6.5999 5.9Z"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-miterlimit="10" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M15.0002 11.15H12.2002" stroke="currentColor"
                                                            stroke-width="1.5" stroke-miterlimit="10"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M5.2 11.15H1" stroke="currentColor"
                                                            stroke-width="1.5" stroke-miterlimit="10"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path
                                                            d="M9.4002 13.6C10.7533 13.6 11.8502 12.5031 11.8502 11.15C11.8502 9.79691 10.7533 8.70001 9.4002 8.70001C8.0471 8.70001 6.9502 9.79691 6.9502 11.15C6.9502 12.5031 8.0471 13.6 9.4002 13.6Z"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-miterlimit="10" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                Filter
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tp-shop-items-wrapper tp-shop-item-primary">
                            <div class="tab-content" id="productTabContent">
                                <div class="tab-pane fade show active" id="grid-tab-pane" role="tabpanel"
                                    aria-labelledby="grid-tab" tabindex="0">

                                    <div class="row infinite-container">
                                        @foreach ($produk as $grid)
                                            <div class="col-xl-4 col-md-6 col-sm-6 infinite-item">
                                                <div class="tp-product-item-2 mb-40">
                                                    <div class="tp-product-thumb-2 p-relative z-index-1 fix w-img">
                                                        <a href="product-detail/{{ $grid->id }}">
                                                            @if ($grid->image)
                                                                <img src="{{ Storage::disk('s3')->url($grid->image) }}"
                                                                    alt="">
                                                            @endif
                                                        </a>
                                                        <!-- product action -->
                                                        <div class="tp-product-action-2 tp-product-action-blackStyle">
                                                            <div class="tp-product-action-item-2 d-flex flex-column">
                                                                <button type="button"
                                                                    class="tp-product-action-btn-2 tp-product-quick-view-btn"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#producQuickViewModal">
                                                                    <svg width="18" height="15"
                                                                        viewBox="0 0 18 15" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M8.99948 5.06828C7.80247 5.06828 6.82956 6.04044 6.82956 7.23542C6.82956 8.42951 7.80247 9.40077 8.99948 9.40077C10.1965 9.40077 11.1703 8.42951 11.1703 7.23542C11.1703 6.04044 10.1965 5.06828 8.99948 5.06828ZM8.99942 10.7482C7.0581 10.7482 5.47949 9.17221 5.47949 7.23508C5.47949 5.29705 7.0581 3.72021 8.99942 3.72021C10.9407 3.72021 12.5202 5.29705 12.5202 7.23508C12.5202 9.17221 10.9407 10.7482 8.99942 10.7482Z"
                                                                            fill="currentColor" />
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M1.41273 7.2346C3.08674 10.9265 5.90646 13.1215 8.99978 13.1224C12.0931 13.1215 14.9128 10.9265 16.5868 7.2346C14.9128 3.54363 12.0931 1.34863 8.99978 1.34773C5.90736 1.34863 3.08674 3.54363 1.41273 7.2346ZM9.00164 14.4703H8.99804H8.99714C5.27471 14.4676 1.93209 11.8629 0.0546754 7.50073C-0.0182251 7.33091 -0.0182251 7.13864 0.0546754 6.96883C1.93209 2.60759 5.27561 0.00288103 8.99714 0.000185582C8.99894 -0.000712902 8.99894 -0.000712902 8.99984 0.000185582C9.00164 -0.000712902 9.00164 -0.000712902 9.00254 0.000185582C12.725 0.00288103 16.0676 2.60759 17.945 6.96883C18.0188 7.13864 18.0188 7.33091 17.945 7.50073C16.0685 11.8629 12.725 14.4676 9.00254 14.4703H9.00164Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                    <span
                                                                        class="tp-product-tooltip tp-product-tooltip-right">Quick
                                                                        View</span>
                                                                </button>
                                                                <button type="button"
                                                                    class="tp-product-action-btn-2 tp-product-add-cart-btn">
                                                                    <svg width="17" height="17"
                                                                        viewBox="0 0 17 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M3.34706 4.53799L3.85961 10.6239C3.89701 11.0923 4.28036 11.4436 4.74871 11.4436H4.75212H14.0265H14.0282C14.4711 11.4436 14.8493 11.1144 14.9122 10.6774L15.7197 5.11162C15.7384 4.97924 15.7053 4.84687 15.6245 4.73995C15.5446 4.63218 15.4273 4.5626 15.2947 4.54393C15.1171 4.55072 7.74498 4.54054 3.34706 4.53799ZM4.74722 12.7162C3.62777 12.7162 2.68001 11.8438 2.58906 10.728L1.81046 1.4837L0.529505 1.26308C0.181854 1.20198 -0.0501969 0.873587 0.00930333 0.526523C0.0705036 0.17946 0.406255 -0.0462578 0.746256 0.00805037L2.51426 0.313534C2.79901 0.363599 3.01576 0.5995 3.04042 0.888012L3.24017 3.26484C15.3748 3.26993 15.4139 3.27587 15.4726 3.28266C15.946 3.3514 16.3625 3.59833 16.6464 3.97849C16.9303 4.35779 17.0493 4.82535 16.9813 5.29376L16.1747 10.8586C16.0225 11.9177 15.1011 12.7162 14.0301 12.7162H14.0259H4.75402H4.74722Z"
                                                                            fill="currentColor" />
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M12.6629 7.67446H10.3067C9.95394 7.67446 9.66919 7.38934 9.66919 7.03804C9.66919 6.68673 9.95394 6.40161 10.3067 6.40161H12.6629C13.0148 6.40161 13.3004 6.68673 13.3004 7.03804C13.3004 7.38934 13.0148 7.67446 12.6629 7.67446Z"
                                                                            fill="currentColor" />
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M4.38171 15.0212C4.63756 15.0212 4.84411 15.2278 4.84411 15.4836C4.84411 15.7395 4.63756 15.9469 4.38171 15.9469C4.12501 15.9469 3.91846 15.7395 3.91846 15.4836C3.91846 15.2278 4.12501 15.0212 4.38171 15.0212Z"
                                                                            fill="currentColor" />
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M4.38082 15.3091C4.28477 15.3091 4.20657 15.3873 4.20657 15.4833C4.20657 15.6763 4.55592 15.6763 4.55592 15.4833C4.55592 15.3873 4.47687 15.3091 4.38082 15.3091ZM4.38067 16.5815C3.77376 16.5815 3.28076 16.0884 3.28076 15.4826C3.28076 14.8767 3.77376 14.3845 4.38067 14.3845C4.98757 14.3845 5.48142 14.8767 5.48142 15.4826C5.48142 16.0884 4.98757 16.5815 4.38067 16.5815Z"
                                                                            fill="currentColor" />
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M13.9701 15.0212C14.2259 15.0212 14.4333 15.2278 14.4333 15.4836C14.4333 15.7395 14.2259 15.9469 13.9701 15.9469C13.7134 15.9469 13.5068 15.7395 13.5068 15.4836C13.5068 15.2278 13.7134 15.0212 13.9701 15.0212Z"
                                                                            fill="currentColor" />
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M13.9692 15.3092C13.874 15.3092 13.7958 15.3874 13.7958 15.4835C13.7966 15.6781 14.1451 15.6764 14.1443 15.4835C14.1443 15.3874 14.0652 15.3092 13.9692 15.3092ZM13.969 16.5815C13.3621 16.5815 12.8691 16.0884 12.8691 15.4826C12.8691 14.8767 13.3621 14.3845 13.969 14.3845C14.5768 14.3845 15.0706 14.8767 15.0706 15.4826C15.0706 16.0884 14.5768 16.5815 13.969 16.5815Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                    <a target="_blank"
                                                                        href="https://wa.me/"class="tp-product-tooltip tp-product-tooltip-right">Contact
                                                                        Our Sales</a>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tp-product-content-2 pt-15">
                                                        <div class="tp-product-tag-2">
                                                            <a href="#">{{ $grid->kategori_produk->title }}</a>
                                                        </div>
                                                        <h3 class="tp-product-title-2">
                                                            <a href="product-detail/{{ $grid->id }}">
                                                                {{ $grid->title }}</a>
                                                        </h3>
                                                        <div class="tp-product-rating-icon tp-product-rating-icon-2">
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                        </div>
                                                        <div class="tp-product-price-wrapper-2">
                                                            <span
                                                                class="tp-product-price-2 new-price">Rp. {{ number_format($grid->price, 0, ',', '.') }}</span><br>
                                                            {{-- <span class="tp-product-price-2 old-price">$475.00</span> --}}
                                                        </div><br>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="list-tab-pane" role="tabpanel"
                                    aria-labelledby="list-tab" tabindex="0">
                                    <div class="tp-shop-list-wrapper tp-shop-item-primary mb-70">
                                        @foreach ($produk as $list)
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="tp-product-list-item d-md-flex">
                                                        <div class="tp-product-list-thumb p-relative fix">
                                                            <a href="product-detail/{{ $list->id }}">
                                                                @if ($list->image)
                                                                    <img src="{{ Storage::disk('s3')->url($list->image) }}"
                                                                        alt=""
                                                                        style="width: 350px; height: auto">
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
                                                                        data-bs-target="#producQuickViewModal">
                                                                        <svg width="18" height="15"
                                                                            viewBox="0 0 18 15" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M8.99948 5.06828C7.80247 5.06828 6.82956 6.04044 6.82956 7.23542C6.82956 8.42951 7.80247 9.40077 8.99948 9.40077C10.1965 9.40077 11.1703 8.42951 11.1703 7.23542C11.1703 6.04044 10.1965 5.06828 8.99948 5.06828ZM8.99942 10.7482C7.0581 10.7482 5.47949 9.17221 5.47949 7.23508C5.47949 5.29705 7.0581 3.72021 8.99942 3.72021C10.9407 3.72021 12.5202 5.29705 12.5202 7.23508C12.5202 9.17221 10.9407 10.7482 8.99942 10.7482Z"
                                                                                fill="currentColor" />
                                                                            <path fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M1.41273 7.2346C3.08674 10.9265 5.90646 13.1215 8.99978 13.1224C12.0931 13.1215 14.9128 10.9265 16.5868 7.2346C14.9128 3.54363 12.0931 1.34863 8.99978 1.34773C5.90736 1.34863 3.08674 3.54363 1.41273 7.2346ZM9.00164 14.4703H8.99804H8.99714C5.27471 14.4676 1.93209 11.8629 0.0546754 7.50073C-0.0182251 7.33091 -0.0182251 7.13864 0.0546754 6.96883C1.93209 2.60759 5.27561 0.00288103 8.99714 0.000185582C8.99894 -0.000712902 8.99894 -0.000712902 8.99984 0.000185582C9.00164 -0.000712902 9.00164 -0.000712902 9.00254 0.000185582C12.725 0.00288103 16.0676 2.60759 17.945 6.96883C18.0188 7.13864 18.0188 7.33091 17.945 7.50073C16.0685 11.8629 12.725 14.4676 9.00254 14.4703H9.00164Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                        <span
                                                                            class="tp-product-tooltip tp-product-tooltip-right">Quick
                                                                            View</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tp-product-list-content">
                                                            <div class="tp-product-content-2 pt-15">
                                                                <div class="tp-product-tag-2">
                                                                    <a
                                                                        href="#">{{ $list->kategori_produk->title }}</a>
                                                                    {{-- <a href="#">Branded</a> --}}
                                                                </div>
                                                                <h3 class="tp-product-title-2">
                                                                    <a
                                                                        href="product-detail/{{ $list->id }}">{{ $list->title }}</a>
                                                                </h3>
                                                                <div
                                                                    class="tp-product-rating-icon tp-product-rating-icon-2">
                                                                    <span><i class="fa-solid fa-star"></i></span>
                                                                    <span><i class="fa-solid fa-star"></i></span>
                                                                    <span><i class="fa-solid fa-star"></i></span>
                                                                    <span><i class="fa-solid fa-star"></i></span>
                                                                    <span><i class="fa-solid fa-star"></i></span>
                                                                </div>
                                                                <div class="tp-product-price-wrapper-2">
                                                                    <span
                                                                        class="tp-product-price-2 new-price">Rp. {{ number_format($list->price, 0, ',', '.') }}</span>
                                                                    {{-- <span
                                                                    class="tp-product-price-2 old-price">$99.00</span> --}}
                                                                </div>
                                                                <p>
                                                                    <?php
                                                                    $content = strip_tags($list->deskripsi); // Menghapus tag HTML dari konten
                                                                    $words = strtok($content, " "); // Memecah konten menjadi kata-kata

                                                                    // Membuat variabel untuk menghitung jumlah kata yang telah ditampilkan
                                                                    $count = 0;

                                                                    // Menampilkan maksimal 10 kata pertama
                                                                    while ($words !== false && $count < 10) {
                                                                        echo $words . " ";
                                                                        $words = strtok(" "); // Mendapatkan kata-kata berikutnya
                                                                        $count++; // Menambahkan hitungan kata yang telah ditampilkan
                                                                    }
                                                                    if ($words !== false) {
                                                                        echo "...";
                                                                    }
                                                                ?>
                                                                </p>
                                                                <div class="tp-product-details-action-wrapper">
                                                                    <h3 class="tp-product-details-action-title">Contact
                                                                        Our Sales</h3>
                                                                    <div
                                                                        class="tp-product-details-action-item-wrapper d-flex align-items-center">
                                                                    </div>
                                                                    <a target="_blank" href="https://wa.me/"
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
                            {{-- <div class="tp-pagination">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="shop.html" class="tp-pagination-prev prev page-numbers">
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
                                        <li>
                                            <a href="shop.html">1</a>
                                        </li>
                                        <li>
                                            <span class="current">2</span>
                                        </li>
                                        <li>
                                            <a href="shop.html">3</a>
                                        </li>
                                        <li>
                                            <a href="shop.html" class="next page-numbers">
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
                                    </ul>
                                </nav>
                            </div> --}}

                                                                {{-- PAGINATION --}}
                            <div class="tp-pagination">
                                <nav>
                                    <ul>
                                        {{-- Previous Page Link --}}
                                        @if ($produk->onFirstPage())
                                            <li>
                                                <a href="javascript:void(0)"
                                                    class="tp-pagination-prev prev page-numbers" aria-disabled="true">
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
                                        @else
                                            <li>
                                                <a href="{{ $produk->previousPageUrl() }}"
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
                                                <a href="{{ $produk->url($i) }}">{{ $i }}</a>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shop area end -->
    @foreach ($produk as $modal)
        <div class="modal fade tp-product-modal" id="producQuickViewModal" tabindex="-1"
            aria-labelledby="producQuickViewModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="tp-product-modal-content d-lg-flex align-items-start">
                        <button type="button" class="tp-product-modal-close-btn" data-bs-toggle="modal"
                            data-bs-target="#producQuickViewModal"><i class="fa-regular fa-xmark"></i></button>
                        <div class="tp-product-details-thumb-wrapper tp-tab d-sm-flex">
                            <nav>
                                <div class="nav nav-tabs flex-sm-column " id="productDetailsNavThumb" role="tablist">
                                    <button class="nav-link active" id="nav-1-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-1" type="button" role="tab" aria-controls="nav-1"
                                        aria-selected="true">
                                        <img src="assets/img/product/details/nav/product-details-nav-1.jpg"
                                            alt="">
                                    </button>
                                    <button class="nav-link" id="nav-2-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-2" type="button" role="tab" aria-controls="nav-2"
                                        aria-selected="false">
                                        <img src="assets/img/product/details/nav/product-details-nav-2.jpg"
                                            alt="">
                                    </button>
                                    <button class="nav-link" id="nav-3-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-3" type="button" role="tab" aria-controls="nav-3"
                                        aria-selected="false">
                                        <img src="assets/img/product/details/nav/product-details-nav-3.jpg"
                                            alt="">
                                    </button>
                                    <button class="nav-link" id="nav-4-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-4" type="button" role="tab" aria-controls="nav-4"
                                        aria-selected="false">
                                        <img src="assets/img/product/details/nav/product-details-nav-4.jpg"
                                            alt="">
                                    </button>
                                </div>
                            </nav>
                            <div class="tab-content m-img" id="productDetailsNavContent">
                                <div class="tab-pane fade show active" id="nav-1" role="tabpanel"
                                    aria-labelledby="nav-1-tab" tabindex="0">
                                    <div class="tp-product-details-nav-main-thumb">
                                        <img src="assets/img/product/details/main/product-details-main-1.jpg"
                                            alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-2" role="tabpanel"
                                    aria-labelledby="nav-2-tab" tabindex="0">
                                    <div class="tp-product-details-nav-main-thumb">
                                        <img src="assets/img/product/details/main/product-details-main-2.jpg"
                                            alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-3" role="tabpanel"
                                    aria-labelledby="nav-3-tab" tabindex="0">
                                    <div class="tp-product-details-nav-main-thumb">
                                        <img src="assets/img/product/details/main/product-details-main-3.jpg"
                                            alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-4" role="tabpanel"
                                    aria-labelledby="nav-4-tab" tabindex="0">
                                    <div class="tp-product-details-nav-main-thumb">
                                        <img src="assets/img/product/details/main/product-details-main-4.jpg"
                                            alt="">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="tp-product-details-wrapper">
                            <div class="tp-product-details-category">
                                <span>{{ $modal->kategori_produk->title }}</span>
                            </div>
                            <h3 class="tp-product-details-title">{{ $modal->title }}</h3>

                            <!-- inventory details -->
                            <div class="tp-product-details-inventory d-flex align-items-center mb-10">
                                <div class="tp-product-details-stock mb-10">
                                    <span>In Stock</span>
                                </div>
                                <div class="tp-product-details-rating-wrapper d-flex align-items-center mb-10">
                                    <div class="tp-product-details-rating">
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                    </div>
                                </div>
                            </div>
                            <p>A Screen Everyone Will Love: Whether your family is streaming or video chatting with
                                friends
                                tablet A8... <span>See more</span></p>

                            <!-- price -->
                            <div class="tp-product-details-price-wrapper mb-20">
                                <span class="tp-product-details-price old-price">Rp. {{ number_format($modal->price, 0, ',', '.') }}</span>
                                {{-- <span class="tp-product-details-price new-price">$236.00</span> --}}
                            </div>

                            <!-- actions -->
                            <div class="tp-product-details-action-wrapper">
                                <h3 class="tp-product-details-action-title">Hubungi Sales Kami</h3>
                                <button class="tp-product-details-buy-now-btn w-100">Contact Us</button>
                            </div>
                            <div class="tp-product-details-action-sm">
                                <button type="button" class="tp-product-details-action-sm-btn">
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.575 12.6927C8.775 12.6927 8.94375 12.6249 9.08125 12.4895C9.21875 12.354 9.2875 12.1878 9.2875 11.9907C9.2875 11.7937 9.21875 11.6275 9.08125 11.492C8.94375 11.3565 8.775 11.2888 8.575 11.2888C8.375 11.2888 8.20625 11.3565 8.06875 11.492C7.93125 11.6275 7.8625 11.7937 7.8625 11.9907C7.8625 12.1878 7.93125 12.354 8.06875 12.4895C8.20625 12.6249 8.375 12.6927 8.575 12.6927ZM8.55625 5.0638C8.98125 5.0638 9.325 5.17771 9.5875 5.40553C9.85 5.63335 9.98125 5.92582 9.98125 6.28294C9.98125 6.52924 9.90625 6.77245 9.75625 7.01258C9.60625 7.25272 9.3625 7.5144 9.025 7.79763C8.7 8.08087 8.44063 8.3795 8.24688 8.69352C8.05313 9.00754 7.95625 9.29385 7.95625 9.55246C7.95625 9.68792 8.00938 9.79567 8.11563 9.87572C8.22188 9.95576 8.34375 9.99578 8.48125 9.99578C8.63125 9.99578 8.75625 9.94653 8.85625 9.84801C8.95625 9.74949 9.01875 9.62635 9.04375 9.47857C9.08125 9.23228 9.16562 9.0137 9.29688 8.82282C9.42813 8.63195 9.63125 8.42568 9.90625 8.20402C10.2812 7.89615 10.5531 7.58829 10.7219 7.28042C10.8906 6.97256 10.975 6.62775 10.975 6.246C10.975 5.59333 10.7594 5.06996 10.3281 4.67589C9.89688 4.28183 9.325 4.0848 8.6125 4.0848C8.1375 4.0848 7.7 4.17716 7.3 4.36187C6.9 4.54659 6.56875 4.81751 6.30625 5.17463C6.20625 5.31009 6.16563 5.44863 6.18438 5.59025C6.20313 5.73187 6.2625 5.83962 6.3625 5.91351C6.5 6.01202 6.64688 6.04281 6.80313 6.00587C6.95937 5.96892 7.0875 5.88272 7.1875 5.74726C7.35 5.5256 7.54688 5.35627 7.77813 5.23929C8.00938 5.1223 8.26875 5.0638 8.55625 5.0638ZM8.5 15.7775C7.45 15.7775 6.46875 15.5897 5.55625 15.2141C4.64375 14.8385 3.85 14.3182 3.175 13.6532C2.5 12.9882 1.96875 12.2062 1.58125 11.3073C1.19375 10.4083 1 9.43547 1 8.38873C1 7.35431 1.19375 6.38762 1.58125 5.48866C1.96875 4.58969 2.5 3.80772 3.175 3.14273C3.85 2.47775 4.64375 1.95438 5.55625 1.57263C6.46875 1.19088 7.45 1 8.5 1C9.5375 1 10.5125 1.19088 11.425 1.57263C12.3375 1.95438 13.1313 2.47775 13.8063 3.14273C14.4813 3.80772 15.0156 4.58969 15.4094 5.48866C15.8031 6.38762 16 7.35431 16 8.38873C16 9.43547 15.8031 10.4083 15.4094 11.3073C15.0156 12.2062 14.4813 12.9882 13.8063 13.6532C13.1313 14.3182 12.3375 14.8385 11.425 15.2141C10.5125 15.5897 9.5375 15.7775 8.5 15.7775ZM8.5 14.6692C10.2625 14.6692 11.7656 14.0534 13.0094 12.822C14.2531 11.5905 14.875 10.1128 14.875 8.38873C14.875 6.6647 14.2531 5.18695 13.0094 3.95549C11.7656 2.72404 10.2625 2.10831 8.5 2.10831C6.7125 2.10831 5.20312 2.72404 3.97188 3.95549C2.74063 5.18695 2.125 6.6647 2.125 8.38873C2.125 10.1128 2.74063 11.5905 3.97188 12.822C5.20312 14.0534 6.7125 14.6692 8.5 14.6692Z"
                                            fill="currentColor" stroke="currentColor" stroke-width="0.3" />
                                    </svg>
                                    Ask a question
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</main>
