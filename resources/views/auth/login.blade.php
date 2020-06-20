<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <title>Login | DEECOLOUR</title>
        <meta name="description" content="Latest updates and statistic charts">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="{{ asset('assets/backOffice/demo/base/style.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="{{ asset('assets/backOffice/demo/media/img/logo/favicon.ico') }}" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
    </head>
    @php( $bg = "assets/backOffice/app/media/img//bg/bg-1.jpg" )
    <body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
        <div class="m-grid m-grid--hor m-grid--root m-page">
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-1" id="m_login" style="background-image: url( {{$bg}} )">
                <div class="m-grid__item m-grid__item--fluid m-login__wrapper">
                    <div class="m-login__container">
                        <div class="m-login__logo">
                            <a href="#">
                                <img src="{{ asset('assets/backOffice/app/media/img/logos/logo-1.png') }}">
                            </a>
                        </div>
                        <div class="m-login__signin">
                            <div class="m-login__head">
                                <h3 class="m-login__title">Sign In To Adminitrator Account System</h3>
                            </div>
                            {!! Form::open(['method'=>'POST', 'route'=>'login', 'class'=>'m-login__form m-form']) !!}
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input" type="text" placeholder="Email" name="email" autocomplete="off">
                                </div>
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password">
                                </div>
                                <div class="row m-login__form-sub">
                                    <div class="col m--align-left m-login__form-left">
                                        <label class="m-checkbox  m-checkbox--light">
                                            <input type="checkbox" name="remember"> Remember me
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="col m--align-right m-login__form-right">
                                        <a href="javascript:;" id="m_login_forget_password" class="m-link">Forget Password ?</a>
                                    </div>
                                </div>
                                <div class="m-login__form-action">
                                    <button id="m_login_signin_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn m-login__btn--primary">Sign In</button>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" type="text/javascript"></script>
        {!! Toastr::render() !!}
    </body>
</html>