@extends('sanitary.layout.app')
@section('content')
    <main>

        <!-- breadcrumb area start -->
        <section class="breadcrumb__area include-bg text-center pt-20 pb-20">

            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__content p-relative z-index-1">
                            <h3 class="breadcrumb__title" style="font-size: 24px">Keep In Touch with Us</h3>
                            @if (session('success'))
                                <div class="alert alert-success" role="alert" id="successAlert">
                                    {{ session('success') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->


        <!-- contact area start -->
        <section class="tp-contact-area pb-20">
            <div class="container">
                <div class="tp-contact-inner">
                    <div class="row">
                        <div class="col-xl-9 col-lg-8">
                            <div class="tp-contact-wrapper">
                                <h3 class="tp-contact-title" style="font-size: 24px">Send A Message</h3>

                                <div class="tp-contact-form">
                                    <form role="form" id="contact-form" action="{{ route('contact.store') }}"
                                        method="POST">
                                        @csrf
                                        <div class="tp-contact-input-wrapper">
                                            <div class="tp-contact-input-box">
                                                <div class="tp-contact-input">
                                                    <input name="name" id="name" type="text">
                                                </div>
                                                <div class="tp-contact-input-title">
                                                    <label for="name">Your Name</label>
                                                </div>
                                            </div>
                                            <div class="tp-contact-input-box">
                                                <div class="tp-contact-input">
                                                    <input name="email" id="email" type="text">
                                                </div>
                                                <div class="tp-contact-input-title">
                                                    <label for="email">Your Email</label>
                                                </div>
                                            </div>
                                            <div class="tp-contact-input-box">
                                                <div class="tp-contact-input">
                                                    <input name="subject" id="subject" type="text">
                                                </div>
                                                <div class="tp-contact-input-title">
                                                    <label for="subject">Subject</label>
                                                </div>
                                            </div>
                                            <div class="tp-contact-input-box">
                                                <div class="tp-contact-input">
                                                    <textarea id="message" name="message" placeholder="Write your message here..."></textarea>
                                                </div>
                                                <div class="tp-contact-input-title">
                                                    <label for="message">Your Message</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tp-contact-btn">
                                            <button type="submit">Send Message</button>
                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div>
                        <div class="col-xl-3 col-lg-4 d-none d-lg-block">
                            <div class="tp-contact-info-wrapper">
                                <div class="tp-contact-info-item">
                                    <div class="tp-contact-info-icon">
                                        <span>
                                            <img src="{{ url('app-sanitary/img/contact/contact-icon-1.png') }}" alt="">
                                        </span>
                                    </div>
                                    <div class="tp-contact-info-content">
                                        <p data-info="mail"><a
                                                href="mailto:{{ $footer->email }}">{{ $footer->email }}</a></p>
                                        <p data-info="phone"><a href="tel:{{ $footer->phone_tr_1 }}">+(62)
                                            {{ substr($footer->phone_tr_1, 2) }}</a></p>
                                    </div>
                                </div>
                                <div class="tp-contact-info-item">
                                    <div class="tp-contact-info-icon">
                                        <span>
                                            <img src="{{ url('app-sanitary/img/contact/contact-icon-2.png') }}" alt="">
                                        </span>
                                    </div>
                                    <div class="tp-contact-info-content">
                                        <p>
                                            <a href="https://www.google.com/maps/search/?api=1&query={{ $footer->lat }},{{ $footer->lng }}"
                                                target="_blank"> {{ $footer->alamat }}</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="tp-contact-info-item">
                                    <div class="tp-contact-info-icon">
                                        <span>
                                            <img src="{{ url('app-sanitary/img/contact/contact-icon-3.png') }}" alt="">
                                        </span>
                                    </div>
                                    <div class="tp-contact-info-content">
                                        <div class="tp-contact-social-wrapper mt-5">
                                            <h4 class="tp-contact-social-title">Find on social media</h4>

                                            <div class="tp-contact-social-icon">
                                                <a href="https://www.instagram.com/rumah_sanitary/"><i class="fab fa-instagram"></i></a>
                                                <a><i class="fa-brands fa-facebook-f"></i></a>
                                                <a><i class="fa-brands fa-twitter"></i></a>
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
        <!-- contact area end -->
    </main>

    <script>
        // Set timeout untuk menghilangkan alert setelah 5 detik
        setTimeout(function() {
            document.getElementById('successAlert').style.display = 'none';
        }, 3000);
    </script>
@endsection
