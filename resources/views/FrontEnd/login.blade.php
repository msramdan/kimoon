@extends('FrontEnd.main.master-front-end')

@section('title', __('Login'))

@section('content')
    <section class="page-header">
        <div class="page-header__bg"></div>
        <div class="container">
            @if ($setting)
                <img src="{{ Storage::url('public/img/setting_app/') . $setting->favicon }}" alt="products left sidebar"
                    class="page-header__shape" style="width: 60px">
            @endif
            <ul class="solox-breadcrumb list-unstyled">
                <li><a href="{{ route('web.home') }}">Home</a></li>
                <li><span>Login</span></li>
            </ul>
            <h2 class="page-header__title">Login</h2>
        </div>
    </section>
    <section class="login-page">
        <div class="container">
            <div class="login-page__info">
                <p>Silahkan login untuk masuk kedalam aplikasi</p>
            </div>
            <div class="row">
                <div class="col-lg-6 ">
                    <div class="login-page__wrap">

                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="login-page__wrap">
                        <h3 class="login-page__wrap__title">Login</h3>
                        <form class="login-page__form">
                            <div class="login-page__form-input-box">
                                <input type="email" placeholder="Username of email *">
                            </div>
                            <div class="login-page__form-input-box">
                                <input type="password" placeholder="Password *">
                            </div>
                            <div class="login-page__form-btn-box">
                                <button type="submit" class="solox-btn solox-btn--base"><span>Login</span>
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
