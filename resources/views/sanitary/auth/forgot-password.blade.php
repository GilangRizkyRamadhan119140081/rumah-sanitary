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
                                <h3 class="tp-login-title">Reset Passowrd</h3>
                                <p>Enter your email address to request password reset.</p>
                            </div>
                            <div class="tp-login-option">
                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    <div class="tp-login-input-wrapper">
                                        <div class="tp-login-input-box">
                                            <div class="tp-login-input">
                                                <input id="email" type="email" placeholder="users@gmail.com">
                                            </div>
                                            <div class="tp-login-input-title">
                                                <label for="email">Your Email</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-login-bottom mb-15">
                                        <button type="submit" class="tp-login-btn w-100">Send Mail</button>
                                    </div>
                                </form>
                                <div class="tp-login-suggetions d-sm-flex align-items-center justify-content-center">
                                    <div class="tp-login-forgot">
                                        <span>Remeber Passowrd? <a href="{{ route('login.user') }}"> Login</a></span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- login area end -->

    </main>
@endsection
