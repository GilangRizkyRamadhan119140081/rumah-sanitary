@extends('sanitary.layout.app')
@section('content')
    <main>

        <!-- login area start -->
        <section class="tp-login-area pb-140 p-relative z-index-1 fix">
            <div class="tp-login-shape">
                <img class="tp-login-shape-1" src="app-sanitary/img/login/login-shape-1.png" alt="">
                <img class="tp-login-shape-2" src="app-sanitary/img/login/login-shape-2.png" alt="">
                <img class="tp-login-shape-3" src="app-sanitary/img/login/login-shape-3.png" alt="">
                <img class="tp-login-shape-4" src="app-sanitary/img/login/login-shape-4.png" alt="">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="tp-login-wrapper">
                            <div class="tp-login-top text-center mb-30">
                                <h3 class="tp-login-title">Sign Up.</h3>
                                <p>Already have an account? <span><a href="{{ route('login.user') }}">Sign In</a></span></p>
                            </div>
                            <div class="tp-login-option">
                                <div
                                    class="tp-login-social mb-10 d-flex flex-wrap align-items-center justify-content-center">
                                    <div class="tp-login-option-item has-google">
                                        <a href="#">
                                            <img src="app-sanitary/img/icon/login/google.svg" alt="">
                                            Sign up with google
                                        </a>
                                    </div>
                                    <div class="tp-login-option-item">
                                        <a href="#">
                                            <img src="app-sanitary/img/icon/login/facebook.svg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="tp-login-mail text-center mb-40">
                                    <p>or Sign up with <a href="#">Email</a></p>
                                </div>
                                <form role="form" method="POST" action="{{ route('registrasi.form') }}">
                                    @csrf
                                    <div class="tp-login-input-wrapper">
                                        <div class="tp-login-input-box">
                                            <div class="tp-login-input">
                                                <input id="name" type="text" name="name"
                                                    placeholder="Lulu Agustin">
                                            </div>
                                            <div class="tp-login-input-title">
                                                <label for="name">Your Name</label>
                                            </div>
                                        </div>
                                        <div class="tp-login-input-box">
                                            <div class="tp-login-input">
                                                <input id="email" type="email" name="email"
                                                    placeholder="users@gmail.com">
                                            </div>
                                            <div class="tp-login-input-title">
                                                <label for="email">Your Email</label>
                                            </div>
                                            @error('email')
                                            <span style="color: red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="tp-login-input-box">
                                            <div class="tp-login-input">
                                                <input id="password" type="password" name="password"
                                                    placeholder="Min. 6 character">
                                            </div>
                                            <div class="tp-login-input-eye" id="password-show-toggle">
                                                <span id="open-eye" class="open-eye">
                                                </span>
                                                <span id="close-eye" class="open-close">
                                                </span>
                                            </div>
                                            <div class="tp-login-input-title">
                                                <label for="password">Password</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="tp-login-suggetions d-sm-flex align-items-center justify-content-between mb-20">
                                        <div class="tp-login-remeber">
                                            <input id="remeber" type="checkbox">
                                            <label for="remeber">I accept the terms of the Service & <a
                                                    href="#">Privacy Policy</a>.</label>
                                        </div>
                                    </div>
                                    <div class="tp-login-bottom">
                                        <button type="submit" class="tp-login-btn w-100">Sign Up</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- login area end -->

    </main>
@endsection
