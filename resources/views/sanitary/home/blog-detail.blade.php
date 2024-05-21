@extends('sanitary.layout.app')
@section('image',$blogDetail->image)
@section('content')

    <main>
        <!-- blog details area start -->
        <section class="tp-postbox-details-area pb-35 pt-25">
            <div class="container">

                <div class="row">
                    {{-- @foreach ($blog as $item) --}}
                    <div class="col-xl-12">

                        <div class="tp-postbox-details-top">
                            <div class="tp-postbox-details-category">
                                <span>
                                    <a href="#">{{ $blogDetail->keywoard }}</a>
                                </span>
                                <span>
                                    <a href="#">{{ $blogDetail->keywoard }}</a>
                                </span>
                            </div>
                            <h3 class="tp-postbox-details-title">{{ $blogDetail->title }}</h3>
                            <div class="tp-postbox-details-meta mb-50">
                                <span data-meta="author">
                                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.4104 8C9.33922 8 10.9028 6.433 10.9028 4.5C10.9028 2.567 9.33922 1 7.4104 1C5.48159 1 3.91797 2.567 3.91797 4.5C3.91797 6.433 5.48159 8 7.4104 8Z"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M13.4102 15.0001C13.4102 12.2911 10.721 10.1001 7.41016 10.1001C4.09933 10.1001 1.41016 12.2911 1.41016 15.0001"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    By <a>{{ $blogDetail->created_by }}</a>
                                </span>
                                <span>
                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15 8.5C15 12.364 11.864 15.5 8 15.5C4.136 15.5 1 12.364 1 8.5C1 4.636 4.136 1.5 8 1.5C11.864 1.5 15 4.636 15 8.5Z"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M10.5972 10.7259L8.42721 9.43093C8.04921 9.20693 7.74121 8.66793 7.74121 8.22693V5.35693"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    {{ $blogDetail->created_at->format('d M, Y') }}
                                </span>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-12">
                        <div class="tp-postbox-details-thumb">
                            <img src="{{ Storage::disk('s3')->url($blogDetail->image) }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-9 col-lg-8">
                        <div class="tp-postbox-details-main-wrapper">
                            <div class="tp-postbox-details-content">
                                <p class="tp-dropcap">{!! $blogDetail->content !!}</p>
                                <div class="tp-postbox-details-share-wrapper">
                                    <div class="row">
                                        <div class="col-xl-8 col-lg-6">
                                            <div class="tp-postbox-details-tags tagcloud">
                                                <span>Tags:</span>
                                                @foreach ($kategoriTags->fasilitas as $tag)
                                                    <a href="#">{{ $tag->title}}</a>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6">
                                            <div class="tp-postbox-details-share text-md-end">
                                                <span>Share:</span>
                                                <a href="http://twitter.com/share?url={{ urlencode($url) }}" target="_blank" class="twitter-share-button"><i class="fa-brands fa-twitter"></i></a>
                                                <a href="https://whatsapp://send?text={{ urlencode($url) }}" data-action="share/whatsapp/share"><i class="fa-brands fa-whatsapp"></i></a>
                                                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode($url) }}" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="tp-sidebar-wrapper tp-sidebar-ml--24">

                            <!-- about -->
                            <div class="tp-sidebar-widget mb-35">
                                <h3 class="tp-sidebar-widget-title">About Us</h3>
                                <div class="tp-sidebar-widget-content">
                                    <div class="tp-sidebar-about">
                                        <div class="tp-sidebar-about-thumb mb-25">
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
                                                    <a href="{{ $post->id }}">
                                                        <img src="{{ Storage::disk('s3')->url($post->image) }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="tp-sidebar-blog-content">
                                                    <div class="tp-sidebar-blog-meta">
                                                        <span>{{ $post->created_at->format('d M, Y') }}</span>
                                                    </div>
                                                    <h3 class="tp-sidebar-blog-title">
                                                        <a href="{{ $post->slug }}">{{ $post->title }}</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- latest post end -->

                            <!-- categories start -->
                            <div class="tp-sidebar-widget widget_categories mb-35">
                                <h3 class="tp-sidebar-widget-title">Categories</h3>
                                <div class="tp-sidebar-widget-content">
                                    <ul>
                                        @foreach ($category as $item)
                                            <li><a
                                                    href="{{ route('blog', ['category' => $item->id]) }}">{{ $item->title }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- categories end -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog details area end -->
    </main>
@endsection
