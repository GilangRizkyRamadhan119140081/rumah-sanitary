@extends('sanitary.layout.app')
@section('content')
    <main>
        <!-- section title area start -->
        <section class="tp-section-title-area pt-15 pb-10">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="tp-section-title-wrapper-7">
                            <h3 class="tp-section-title-7" style="font-size: 24px">Artikel Rumah Sanitary</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section title area end -->

        <!-- blog grid area start -->
        <section class="tp-blog-grid-area pb-35">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-8">
                        <div class="tp-blog-grid-wrapper">
                            <div class="tp-blog-grid-top d-flex justify-content-between mb-40">
                                <div class="tp-blog-grid-result">
                                    <p>Showing 1–14 of 26 results</p>
                                </div>
                                <div class="tp-blog-grid-tab tp-tab">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <button class="nav-link d-none d-md-block" id="nav-grid-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-grid" type="button" role="tab"
                                                aria-controls="nav-grid" aria-selected="true">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M16.3328 6.01317V2.9865C16.3328 2.0465 15.9061 1.6665 14.8461 1.6665H12.1528C11.0928 1.6665 10.6661 2.0465 10.6661 2.9865V6.0065C10.6661 6.95317 11.0928 7.3265 12.1528 7.3265H14.8461C15.9061 7.33317 16.3328 6.95317 16.3328 6.01317Z"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M16.3328 15.18V12.4867C16.3328 11.4267 15.9061 11 14.8461 11H12.1528C11.0928 11 10.6661 11.4267 10.6661 12.4867V15.18C10.6661 16.24 11.0928 16.6667 12.1528 16.6667H14.8461C15.9061 16.6667 16.3328 16.24 16.3328 15.18Z"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M7.33281 6.01317V2.9865C7.33281 2.0465 6.90614 1.6665 5.84614 1.6665H3.1528C2.0928 1.6665 1.66614 2.0465 1.66614 2.9865V6.0065C1.66614 6.95317 2.0928 7.3265 3.1528 7.3265H5.84614C6.90614 7.33317 7.33281 6.95317 7.33281 6.01317Z"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M7.33281 15.18V12.4867C7.33281 11.4267 6.90614 11 5.84614 11H3.1528C2.0928 11 1.66614 11.4267 1.66614 12.4867V15.18C1.66614 16.24 2.0928 16.6667 3.1528 16.6667H5.84614C6.90614 16.6667 7.33281 16.24 7.33281 15.18Z"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </button>
                                            <button class="nav-link active" id="nav-list-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-list" type="button" role="tab"
                                                aria-controls="nav-list" aria-selected="false">
                                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15 7.11133H1" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M15 1H1" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M15 13.2222H1" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </button>
                                        </div>
                                    </nav>
                                </div>
                            </div> <!-- top end -->

                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade" id="nav-grid" role="tabpanel" aria-labelledby="nav-grid-tab"
                                    tabindex="0">
                                    <!-- blog grid item wrapper -->
                                        <div class="tp-blog-grid-item-wrapper">
                                            <div class="row tp-gx-30">
                                                @foreach ($blog as $grid)
                                                    <div class="col-6 col-6">
                                                        <div class="tp-blog-grid-item p-relative mb-30">
                                                            <div class="tp-blog-grid-thumb w-img fix mb-30">
                                                                <a href="{{ route('product.detail', ['slug' => $grid->slug]) }}">
                                                                    <img src="{{ Storage::disk('s3')->url($grid->image) }}"
                                                                        alt="kampret" style="width: 398; height: 250px">
                                                                </a>
                                                            </div>
                                                            <div class="tp-blog-grid-content" style="height: 270px">
                                                                <div class="tp-blog-grid-meta">
                                                                    <span>
                                                                        <span>
                                                                            <svg width="16" height="17"
                                                                                viewBox="0 0 16 17" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M15 8.5C15 12.364 11.864 15.5 8 15.5C4.136 15.5 1 12.364 1 8.5C1 4.636 4.136 1.5 8 1.5C11.864 1.5 15 4.636 15 8.5Z"
                                                                                    stroke="currentColor" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M10.5972 10.7259L8.42715 9.43093C8.04915 9.20693 7.74115 8.66793 7.74115 8.22693V5.35693"
                                                                                    stroke="currentColor" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                        {{ \Carbon\Carbon::parse($grid->published_at)->format('d M, Y') }}
                                                                    </span>
                                                                </div>
                                                                <h3 class="tp-blog-grid-title">
                                                                    <a
                                                                        href="{{ route('product.detail', ['slug' => $grid->slug]) }}" style="font-size: 23px">{{ $grid->title }}</a>
                                                                </h3>
                                                                <p>
                                                                    <?php
                                                                    $content = strip_tags($grid->content); // Menghapus tag HTML dari konten
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
                                                                <div class="tp-blog-grid-btn">
                                                                    <a href="{{ route('product.detail', ['slug' => $grid->slug]) }}"
                                                                        class="tp-link-btn-3">
                                                                        Read More
                                                                        <span>
                                                                            <svg width="17" height="15"
                                                                                viewBox="0 0 17 15" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M16 7.5L1 7.5" stroke="currentColor"
                                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M9.9502 1.47541L16.0002 7.49941L9.9502 13.5244"
                                                                                    stroke="currentColor" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>

                                    </div>

                                <div class="tab-pane fade show active" id="nav-list" role="tabpanel"
                                    aria-labelledby="nav-list-tab" tabindex="0">
                                    <!-- blog list wrapper -->
                                    @foreach ($blog as $list)
                                        <div class="tp-blog-list-item-wrapper">
                                            <div class="tp-blog-list-item d-md-flex d-lg-block d-xl-flex">
                                                <div class="tp-blog-list-thumb">
                                                    <a href="{{ route('product.detail', ['slug' => $list->slug]) }}">
                                                        <img src="{{ Storage::disk('s3')->url($list->image) }}"
                                                            alt="" style="width: 383px; height: 308px">
                                                    </a>
                                                </div>
                                                <div class="tp-blog-list-content">
                                                    <div class="tp-blog-grid-content">
                                                        <div class="tp-blog-grid-meta">
                                                            <span>
                                                                <span>
                                                                    <svg width="16" height="17"
                                                                        viewBox="0 0 16 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M15 8.5C15 12.364 11.864 15.5 8 15.5C4.136 15.5 1 12.364 1 8.5C1 4.636 4.136 1.5 8 1.5C11.864 1.5 15 4.636 15 8.5Z"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M10.5972 10.7259L8.42715 9.43093C8.04915 9.20693 7.74115 8.66793 7.74115 8.22693V5.35693"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                </span>
                                                                {{ \Carbon\Carbon::parse($list->published_at)->format('d M, Y') }}
                                                            </span>
                                                        </div>
                                                        <h3 class="tp-blog-grid-title">
                                                            <a
                                                                href="{{ route('product.detail', ['slug' => $list->slug]) }}" style="font-size: 24px">{{ $list->title }}</a>
                                                        </h3>
                                                        <p>
                                                            <?php
                                                            $content = strip_tags($list->content); // Menghapus tag HTML dari konten
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

                                                        <div class="tp-blog-grid-btn">
                                                            <a href="{{ route('product.detail', ['slug' => $list->slug]) }}"
                                                                class="tp-link-btn-3">
                                                                Read More
                                                                <span>
                                                                    <svg width="17" height="15"
                                                                        viewBox="0 0 17 15" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M16 7.5L1 7.5" stroke="currentColor"
                                                                            stroke-width="1.5" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M9.9502 1.47541L16.0002 7.49941L9.9502 13.5244"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="tp-pagination">
                                    <nav>
                                        <ul>
                                            {{-- Previous Page Link --}}
                                            @if ($blog->appends(['category' => $selectedCategories])->onFirstPage())
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
                                                    <a href="{{ $blog->appends(['category' => $selectedCategories])->previousPageUrl() }}"
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
                                                $start = max(1, $blog->currentPage() - 2);
                                                $end = min($blog->lastPage(), $blog->currentPage() + 2);
                                            @endphp

                                            @for ($i = $start; $i <= $end; $i++)
                                                <li>
                                                    @if ($i == $blog->currentPage())
                                                        <span class="current">{{ $i }}</span>
                                                    @else
                                                        <a href="{{ $blog->url($i) }}">{{ $i }}</a>
                                                    @endif
                                                </li>
                                            @endfor

                                            {{-- Next Page Link --}}
                                            @if ($blog->hasMorePages())
                                                <li>
                                                    <a href="{{ $blog->nextPageUrl() }}" class="next page-numbers">
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
                    <div class="col-xl-3 col-lg-4">
                        <div class="tp-sidebar-wrapper tp-sidebar-ml--24">
                            <div class="tp-sidebar-widget mb-35">
                                <div class="tp-sidebar-search">
                                    <form action="#">
                                        <div class="tp-sidebar-search-input">
                                            <input type="text" placeholder="Search...">
                                            <button type="submit">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.11111 15.2222C12.0385 15.2222 15.2222 12.0385 15.2222 8.11111C15.2222 4.18375 12.0385 1 8.11111 1C4.18375 1 1 4.18375 1 8.11111C1 12.0385 4.18375 15.2222 8.11111 15.2222Z"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M16.9995 17L13.1328 13.1333" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- about -->
                            <div class="tp-sidebar-widget mb-35">
                                <h3 class="tp-sidebar-widget-title">About Us</h3>
                                <div class="tp-sidebar-widget-content">
                                    <div class="tp-sidebar-about py-0">
                                        <div class="tp-sidebar-about-thumb mb-5">
                                            <a href="{{ route('about') }}">
                                                <img src="{{ asset('img/logo_sanitary.png') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="tp-sidebar-about-content">
                                            <h3 class="tp-sidebar-about-title">
                                                <a href="{{ route('about') }}">RUMAH SANITARY</a>
                                            </h3>
                                            {{-- <span class="tp-sidebar-about-designation">Rumah Sanitary</span> --}}
                                            <p>Rumah sanitary merupakan direktori bisnis yang menyediakan berbagai macam
                                                kebutuhan sanitary lengkap dan berkualitas seperti kran air, shower, solar
                                                water heater, electric waterheater, dan lain-lain.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- about end -->

                            <!-- latest post start -->
                            <div class="tp-sidebar-widget mb-35">
                                <h3 class="tp-sidebar-widget-title">Latest Posts</h3>
                                <div class="tp-sidebar-widget-content">
                                    <div class="tp-sidebar-blog-item-wrapper">
                                        @foreach ($latestBlogs as $post)
                                            <div class="tp-sidebar-blog-item d-flex align-items-center">
                                                <div class="tp-sidebar-blog-thumb">
                                                    <a href="{{ route('product.detail', ['slug' => $post->slug]) }}">
                                                        <img src="{{ Storage::disk('s3')->url($post->image) }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="tp-sidebar-blog-content">
                                                    <div class="tp-sidebar-blog-meta">
                                                        <span>{{ $post->created_at->format('d M, Y') }}</span>
                                                    </div>
                                                    <h3 class="tp-sidebar-blog-title">
                                                        <a href="{{ route('product.detail', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- latest post end -->

                            <!-- categories start -->
                            <div class="tp-sidebar-widget widget_categories mb-0">
                                <h3 class="tp-sidebar-widget-title">Categories</h3>
                                <div class="tp-sidebar-widget-content">
                                        <ul>
                                            @foreach ($category as $item)
                                                <li>
                                                    <a
                                                        href="{{ route('blog', ['category' => $item->id]) }}">{{ $item->title }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                </div>
                            </div>
                            <!-- categories end -->

                            <!-- tag cloud start -->
                            {{-- <div class="tp-sidebar-widget mb-35">
                                <h3 class="tp-sidebar-widget-title">Popular Tags</h3>
                                <div class="tp-sidebar-widget-content tagcloud">
                                    <a href="#">Pipa</a>
                                    <a href="#">Kran</a>
                                    <a href="#">Shower</a>
                                    <a href="#">Brass</a>
                                    <a href="#">Stainless</a>
                                    <a href="#">Water Heather</a>
                                </div>
                            </div> --}}
                            <!-- tag cloud end -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog grid area end -->
    </main>
@endsection
