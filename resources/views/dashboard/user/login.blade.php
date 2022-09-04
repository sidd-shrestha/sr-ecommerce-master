<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.svg') }}" />

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/LineIcons.3.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/plugins.css') }}" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/custom.css') }}" />

</head>

<body>
    <div class="account-login">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">

                    <form action="{{ route('user.check') }}" class="card login-form" method="post" autocomplete="off">
                        @csrf
                        <div class="card-body">
                            <div class="title">
                                <h3>Login Now</h3>
                                <!-- <p>You can login using your social media account or email address.</p> -->
                            </div>
                            <!-- <div class="social-login">
                              <div class="row">
                                  <div class="col-lg-4 col-md-4 col-12"><a class="btn facebook-btn"
                                          href="javascript:void(0)"><i class="lni lni-facebook-filled"></i> Facebook
                                          login</a></div>
                                  <div class="col-lg-4 col-md-4 col-12"><a class="btn twitter-btn"
                                          href="javascript:void(0)"><i class="lni lni-twitter-original"></i> Twitter
                                          login</a></div>
                                  <div class="col-lg-4 col-md-4 col-12"><a class="btn google-btn"
                                          href="javascript:void(0)"><i class="lni lni-google"></i> Google login</a>
                                  </div>
                              </div>
                          </div> -->
                            <!-- <div class="alt-option">
                                <span>Or</span>
                            </div> -->
                            <div class="form-group input-group">
                                <label for="reg-fn">Email</label>
                                <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                                <span class="text-danger">@error('email'){{ $message }} @enderror</span>

                            </div>
                            <div class="form-group input-group">
                                <label for="reg-fn">Password</label>

                                <input type="text" class="form-control" name="password" value="{{ old('password') }}">
                                <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                            </div>
                            <div class="d-flex flex-wrap justify-content-between bottom-content">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input width-auto" id="exampleCheck1">
                                    <label class="form-check-label">Remember me</label>
                                </div>
                                <a class="lost-pass" href="account-password-recovery.html">Forgot password?</a>
                            </div>
                            <div class="button">
                                <button class="btn" type="submit">Login</button>
                            </div>
                            <p class="outer-link">Don't have an account? <a href="{{route('user.register')}}">Register here </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('user/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('user/assets/js/tiny-slider.js')}}"></script>
    <script src="{{asset('user/assets/js/glightbox.min.js')}}"></script>
    <script src="{{asset('user/assets/js/main.js')}}"></script>
    <script src="{{asset('user/assets/js/JQuery.min.js')}}"></script>
    <script src="{{asset('user/assets/js/custom.js')}}"></script>
</body>

</html>