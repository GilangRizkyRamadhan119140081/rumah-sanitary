@extends('sanitary.layout.app')
@section('image', $product->image)
@section('content')
    <main>

        <!-- product details area start -->
        <section class="tp-product-details-area pt-80" data-bg-color="#EFF1F5">
            <div class="tp-product-details-top pb-115">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-6">
                            <div class="tp-product-details-thumb-wrapper tp-product-details-thumb-style2 tp-tab">
                                <div class="tab-content m-img" id="productDetailsNavContent">
                                    <div class="tab-pane fade show active" id="nav-1" role="tabpanel"
                                        aria-labelledby="nav-1-tab" tabindex="0">
                                        <div class="tp-product-details-nav-main-thumb">
                                            {{-- {{ url('app-sanitary/img/logo/favicon.png') }} --}}
                                            @if ($product->image)
                                                <img src="{{ Storage::disk('s3')->url($product->image) }}" alt="">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-2-tab"
                                        tabindex="0">
                                        <div class="tp-product-details-nav-main-thumb">
                                            <img src="{{ url('app-sanitary/img/product/details/2/main/product-details-main-2.jpg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav-3-tab"
                                        tabindex="0">
                                        <div class="tp-product-details-nav-main-thumb">
                                            <img src="{{ url('app-sanitary/img/product/details/2/main/product-details-main-3.jpg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-4" role="tabpanel" aria-labelledby="nav-4-tab"
                                        tabindex="0">
                                        <div class="tp-product-details-nav-main-thumb">
                                            <img src="{{ url('app-sanitary/img/product/details/2/main/product-details-main-4.jpg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-5" role="tabpanel" aria-labelledby="nav-5-tab"
                                        tabindex="0">
                                        <div class="tp-product-details-nav-main-thumb">
                                            <img src="{{ url('app-sanitary/img/product/details/2/main/product-details-main-5.jpg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                                {{-- <nav>
                                    <div class="nav nav-tabs " id="productDetailsNavThumb" role="tablist">
                                        <button class="nav-link active" id="nav-1-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-1" type="button" role="tab" aria-controls="nav-1"
                                            aria-selected="true">
                                            <img src="{{ url('app-sanitary/img/product/details/2/nav/product-details-nav-1.jpg') }}"
                                                alt="">
                                        </button>
                                        <button class="nav-link" id="nav-2-tab" data-bs-toggle="tab" data-bs-target="#nav-2"
                                            type="button" role="tab" aria-controls="nav-2" aria-selected="false">
                                            <img src="{{ url('app-sanitary/img/product/details/2/nav/product-details-nav-2.jpg') }}"
                                                alt="">
                                        </button>
                                        <button class="nav-link" id="nav-3-tab" data-bs-toggle="tab" data-bs-target="#nav-3"
                                            type="button" role="tab" aria-controls="nav-3" aria-selected="false">
                                            <img src="{{ url('app-sanitary/img/product/details/2/nav/product-details-nav-3.jpg') }}"
                                                alt="">
                                        </button>
                                        <button class="nav-link" id="nav-4-tab" data-bs-toggle="tab" data-bs-target="#nav-4"
                                            type="button" role="tab" aria-controls="nav-4" aria-selected="false">
                                            <img src="{{ url('app-sanitary/img/product/details/2/nav/product-details-nav-4.jpg') }}"
                                                alt="">
                                        </button>
                                        <button class="nav-link" id="nav-5-tab" data-bs-toggle="tab" data-bs-target="#nav-5"
                                            type="button" role="tab" aria-controls="nav-5" aria-selected="false">
                                            <img src="{{ url('app-sanitary/img/product/details/2/nav/product-details-nav-5.jpg') }}"
                                                alt="">
                                        </button>
                                    </div>
                                </nav> --}}
                            </div>
                        </div> <!-- col end -->
                        <div class="col-xl-5 col-lg-6">
                            <div class="tp-product-details-wrapper tp-product-details-wrapper-style2">
                                <div class="tp-product-details-category">
                                    <span>{{ $product->keywoard }}</span>
                                </div>
                                <h3 class="tp-product-details-title">{{ $product->title }}</h3>

                                <!-- inventory details -->
                                <div class="tp-product-details-inventory d-flex align-items-center justify-content-between">
                                    <!-- price -->
                                    <div class="tp-product-details-price-wrapper">
                                        <span class="tp-product-details-price">Rp.
                                            {{ number_format($product->price_disc, 0, ',', '.') }}</span>
                                    </div>
                                    {{-- @foreach ($product as $item) --}}
                                    <!-- Tampilkan informasi produk di sini, termasuk rating -->
                                    <div class="tp-product-rating-icon tp-product-rating-icon-2">
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
                                        <!-- Lanjutkan untuk menampilkan bintang sesuai dengan rating -->
                                    </div>
                                    {{-- @endforeach --}}
                                </div>
                                <p>{!! $product->deskripsi !!}</p>

                                <div class="tp-product-details-query">
                                    <div class="tp-product-details-query-item d-flex align-items-center">
                                        <span>Category: </span>
                                        @if (isset($product->brand_produk->title))
                                            <p>{{ $product->kategori_produk->title }}</p>
                                        @endif
                                    </div>
                                    <div class="tp-product-details-query-item d-flex align-items-center">
                                        <span>Brands: </span>
                                        <p>
                                            @if (isset($product->brand_produk->title))
                                                <p>{{ $product->brand_produk->title }}</p>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="tp-product-details-action-wrapper">
                                    <h3 class="tp-product-details-action-title">Contact Our Sales</h3>
                                    <div class="tp-product-details-action-item-wrapper d-flex align-items-center">
                                    </div>
                                    <a target="_blank"
                                        href="https://wa.me/{{ $nohp }}?text=Hallo%2C%20Saya%20Ingin%20Bertanya%20Mengenai%20Produk%20%22{{ urlencode($product->title) }}%22"
                                        class="tp-product-details-buy-now-btn w-100"
                                        style="display: flex; justify-content: center; align-items: center;">
                                        <i class="fab fa-whatsapp"></i> <span style="margin-left: 10px;">Hubungi
                                            Kami!</span>
                                    </a>
                                </div>
                                <div class="tp-product-details-action-wrapper">
                                    <h3 class="tp-product-details-action-title">Beli sekarang di</h3>
                                    <div class="tp-product-details-icons">
                                        <a href="#"><img src="{{ url('frontend-assets/img/shopee.png') }}"
                                                alt="shopee" style="max-width: 30%; max-height: 40%;"></a>
                                        <a href="#"><img src="{{ url('frontend-assets/img/tokopedia.png') }}"
                                                alt="tokopedia" style="max-width: 35%; max-height: 40%;"></a>
                                        <a href="#"><img src="{{ url('frontend-assets/img/lazada.png') }}"
                                                alt="lazada" style="max-width: 30%; max-height: 40%;"></a>
                                    </div>
                                </div>
                                <div class="tp-product-details-action-wrapper">
                                    <div class="tp-product-details-social">
                                        <h3 class="tp-product-details-action-title">Share</h3>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($url) }}"
                                            target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a href="https://www.instagram.com/?url={{ urlencode($url) }}" target="_blank"><i
                                                class="fa-brands fa-instagram"></i></a>
                                    </div>
                                    <div class="tp-postbox-details-tags tagcloud">
                                        <span>Tags:</span>
                                        @foreach ($kategoriTags->fasilitas as $tag)
                                            <a href="#">{{ $tag->title }}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tp-product-details-bottom tp-product-details-bottom-style2 pt-95 pb-85 white-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="tp-product-details-tab-nav tp-tab">
                                    <nav>
                                        <div class="nav nav-tabs p-relative tp-product-tab justify-content-sm-start justify-content-center"
                                            id="nav-tab" role="tablist">
                                            <button class="nav-link active" id="nav-description-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-description" type="button" role="tab"
                                                aria-controls="nav-description" aria-selected="true">Description</button>
                                            <button class="nav-link" id="nav-addInfo-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-addInfo" type="button" role="tab"
                                                aria-controls="nav-addInfo" aria-selected="false">Additional
                                                information</button>
                                            <span id="productTabMarker" class="tp-product-details-tab-line"></span>
                                        </div>
                                    </nav>
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-description" role="tabpanel"
                                            aria-labelledby="nav-description-tab" tabindex="0">
                                            <div class="tp-product-details-desc-wrapper-2 pt-15">
                                                <div class="row justify-content-center">
                                                    <div class="col-xl-12">
                                                        <div class="tp-product-details-desc-item-2 pb-120">
                                                            <div class="row">
                                                                <div class="col-lg-5">
                                                                    <div
                                                                        class="tp-product-details-desc-content-2 pt-3 pb-45 pr-100">
                                                                        <h3 class="tp-product-details-desc-title-2">
                                                                            {!! $product->deskripsi !!}
                                                                        </h3>
                                                                        {{-- <p>{{ $product->excerpt }} </p> --}}
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-7">
                                                                    <div class="tp-product-details-desc-thumb m-img">
                                                                        @if ($product->image)
                                                                            <img src="{{ Storage::disk('s3')->url($product->image) }}"
                                                                                alt="">
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-addInfo" role="tabpanel"
                                            aria-labelledby="nav-addInfo-tab" tabindex="0">

                                            <div class="tp-product-details-additional-info  tp-table-style-2">
                                                <!-- add 'tp-table-style-2' class name to view second style -->
                                                <div class="row justify-content-center">
                                                    <div class="col-xl-10">
                                                        @if ($product_info)
                                                            <h3 class="tp-product-details-additional-info-title">Additional
                                                                information</h3>
                                                            <!-- default hidden. its for second style -->
                                                            <table>
                                                                <tbody>
                                                                    @foreach ($product_info as $item)
                                                                        <tr>
                                                                            <td>{{ $item['name'] }}</td>
                                                                            <td>{{ $item['value'] }}</td>
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        @else
                                                            <h3 class="tp-product-details-additional-info-title">Belum ada
                                                                informasi</h3>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-review" role="tabpanel"
                                            aria-labelledby="nav-review-tab" tabindex="0">
                                            <div
                                                class="tp-product-details-review-wrapper tp-product-details-review-wrapper-2 pt-50">
                                                <h3 class="tp-product-details-review-wrapper-title-2">2 review for
                                                    Perfecting
                                                    Facial Oil</h3>
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="tp-product-details-review-item-wrapper-2">
                                                            <div class="tp-product-details-review-item-2">
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-5">
                                                                        <div
                                                                            class="tp-product-details-review-avater-2 d-flex align-items-center">
                                                                            <div
                                                                                class="tp-product-details-review-avater-thumb">
                                                                                <a href="#">
                                                                                    <img src="{{ url('app-sanitary/img/users/user-3.jpg') }}"
                                                                                        alt="">
                                                                                </a>
                                                                            </div>
                                                                            <div
                                                                                class="tp-product-details-review-avater-content">
                                                                                <h3
                                                                                    class="tp-product-details-review-avater-title">
                                                                                    Shahnewaz Sakil</h3>
                                                                                <span
                                                                                    class="tp-product-details-review-avater-meta">06
                                                                                    March, 2023 </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-7">
                                                                        <div
                                                                            class="tp-product-details-review-avater-rating d-flex align-items-center">
                                                                            <span><i class="fa-solid fa-star"></i></span>
                                                                            <span><i class="fa-solid fa-star"></i></span>
                                                                            <span><i class="fa-solid fa-star"></i></span>
                                                                            <span><i class="fa-solid fa-star"></i></span>
                                                                            <span><i class="fa-solid fa-star"></i></span>
                                                                        </div>
                                                                        <div
                                                                            class="tp-product-details-review-avater-comment">
                                                                            <p>I'm happy with my purchase of Olay eyes. I
                                                                                just
                                                                                received my second jar. Although I don't
                                                                                notice
                                                                                a difference with "puffiness", it seems my
                                                                                fine.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tp-product-details-review-item-2">
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-5">
                                                                        <div
                                                                            class="tp-product-details-review-avater-2 d-flex align-items-center">
                                                                            <div
                                                                                class="tp-product-details-review-avater-thumb">
                                                                                <a href="#">
                                                                                    <img src="{{ url('app-sanitary/img/users/user-3.jpg') }}"
                                                                                        alt="">
                                                                                </a>
                                                                            </div>
                                                                            <div
                                                                                class="tp-product-details-review-avater-content">
                                                                                <h3
                                                                                    class="tp-product-details-review-avater-title">
                                                                                    Shahnewaz Sakil</h3>
                                                                                <span
                                                                                    class="tp-product-details-review-avater-meta">06
                                                                                    March, 2023 </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-7">
                                                                        <div
                                                                            class="tp-product-details-review-avater-rating d-flex align-items-center">
                                                                            <span><i class="fa-solid fa-star"></i></span>
                                                                            <span><i class="fa-solid fa-star"></i></span>
                                                                            <span><i class="fa-solid fa-star"></i></span>
                                                                            <span><i class="fa-solid fa-star"></i></span>
                                                                            <span><i class="fa-solid fa-star"></i></span>
                                                                        </div>
                                                                        <div
                                                                            class="tp-product-details-review-avater-comment">
                                                                            <p>I'm happy with my purchase of Olay eyes. I
                                                                                just
                                                                                received my second jar. Although I don't
                                                                                notice
                                                                                a difference with "puffiness", it seems my
                                                                                fine.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tp-product-details-review-form pt-55">
                                                            <h3 class="tp-product-details-review-form-title">Add a Review
                                                            </h3>
                                                            <p>Your email address will not be published. Required fields are
                                                                marked *</p>
                                                            <form action="#">
                                                                <div
                                                                    class="tp-product-details-review-form-rating d-flex align-items-center">
                                                                    <p>Your Rating :</p>
                                                                    <div
                                                                        class="tp-product-details-review-form-rating-icon d-flex align-items-center">
                                                                        <span><i class="fa-solid fa-star"></i></span>
                                                                        <span><i class="fa-solid fa-star"></i></span>
                                                                        <span><i class="fa-solid fa-star"></i></span>
                                                                        <span><i class="fa-solid fa-star"></i></span>
                                                                        <span><i class="fa-solid fa-star"></i></span>
                                                                    </div>
                                                                </div>
                                                                <div class="tp-product-details-review-input-wrapper">
                                                                    <div class="tp-product-details-review-input-box">
                                                                        <div class="tp-product-details-review-input">
                                                                            <textarea id="msg" name="msg" placeholder="Write your review here..."></textarea>
                                                                        </div>
                                                                        <div class="tp-product-details-review-input-title">
                                                                            <label for="msg">Your Review</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div
                                                                                class="tp-product-details-review-input-box">
                                                                                <div
                                                                                    class="tp-product-details-review-input">
                                                                                    <input name="name" id="name"
                                                                                        type="text"
                                                                                        placeholder="Shahnewaz Sakil">
                                                                                </div>
                                                                                <div
                                                                                    class="tp-product-details-review-input-title">
                                                                                    <label for="name">Your Name</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div
                                                                                class="tp-product-details-review-input-box">
                                                                                <div
                                                                                    class="tp-product-details-review-input">
                                                                                    <input name="email" id="email"
                                                                                        type="email"
                                                                                        placeholder="shofy@mail.com">
                                                                                </div>
                                                                                <div
                                                                                    class="tp-product-details-review-input-title">
                                                                                    <label for="email">Your
                                                                                        Email</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tp-product-details-review-suggetions mb-20">
                                                                    <div class="tp-product-details-review-remeber">
                                                                        <input id="remeber" type="checkbox">
                                                                        <label for="remeber">Save my name, email, and
                                                                            website
                                                                            in this browser for the next time I
                                                                            comment.</label>
                                                                    </div>
                                                                </div>
                                                                <div class="tp-product-details-review-btn-wrapper">
                                                                    <button
                                                                        class="tp-product-details-review-btn">Submit</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- product details area end -->

        <!-- related product area start -->
        <section class="tp-related-product pt-95 pb-120">
            <div class="container">
                <div class="row">
                    <div class="tp-section-title-wrapper-6 text-center mb-40">
                        <h3 class="tp-section-title-6">Related Products</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="tp-product-related-slider">
                        <div class="tp-product-related-slider-active swiper-container mb-10">
                            <div class="swiper-wrapper">
                                @foreach ($relatedProducts as $item)
                                    <div class="swiper-slide">
                                        <div class="tp-product-item-3 tp-product-style-primary mb-50">
                                            <div class="tp-product-thumb-3 mb-15 fix p-relative z-index-1">
                                                <a href="{{ route('product.detail', ['slug' => $item->slug]) }}">
                                                    @if ($item->image)
                                                        <img src="{{ Storage::disk('s3')->url($item->image) }}"
                                                            alt="">
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="tp-product-content-3">
                                                <div class="tp-product-tag-3">
                                                    <span>{{ $item->kategori_produk->title }}</span>
                                                </div>
                                                <h3 class="tp-product-title-3">
                                                    <a href="{{ route('product.detail', ['slug' => $item->slug]) }}">
                                                        {{ strlen($item->title) > 20 ? substr($item->title, 0, 20) . '...' : $item->title }}</a>
                                                </h3>
                                                <div class="tp-product-rating d-flex align-items-center">
                                                    <div class="tp-product-rating-icon">
                                                        @if ($item->rating >= 1)
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                        @endif
                                                        @if ($item->rating >= 2)
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                        @endif
                                                        @if ($item->rating >= 3)
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                        @endif
                                                        @if ($item->rating >= 4)
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                        @endif
                                                        @if ($item->rating >= 5)
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="tp-product-price-wrapper-3">
                                                    <span class="tp-product-price-3 new-price">Rp.
                                                        {{ number_format($item->price_disc, 0, ',', '.') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Add pagination if needed -->
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="tp-related-swiper-scrollbar tp-swiper-scrollbar"></div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- related product area end -->
    </main>
@endsection
