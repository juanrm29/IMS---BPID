<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="BPID">
    <meta name="author" content="Juan">
    <link rel="shortcut icon" href="{{ asset ('backend/img/fav.png') }}" />

    <!-- Title -->
    <title>IMS - Login</title>


    <!-- *************
			************ Common Css Files *************
		************ -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset ('backend/css/bootstrap.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset ('backend/css/main.css') }}">


    <!-- *************
			************ Vendor Css Files *************
		************ -->

</head>

<body class="authentication">

    <!-- Loading wrapper start -->
    <div id="loading-wrapper">
        <div class="spinner-border"></div>
        Loading...
    </div>
    <!-- Loading wrapper end -->

    <!-- *************
			************ Login container start *************
		************* -->
    <div class="login-container">

        <div class="container-fluid h-100">

            <!-- Row start -->
            <div class="row g-0 h-100">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="login-about">
                        <div class="slogan">
                            <span>Improve</span>
                            <span>Your</span>
                            <span>Company.</span>
                        </div>
                        <div class="about-desc">
                            IMS (Improvement Management System) a data dashboard is an information management tool that
                            visually tracks, analyzes and displays Improvement.
                        </div>
                        <a href="crm.html" class="know-more">Know More <img
                                src="{{ asset ('backend/img/right-arrow.svg') }}" alt="Juan Admin"></a>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="login-wrapper">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="login-screen">
                                <div class="login-body">
                                    <a href="crm.html" class="login-logo">
                                        <img src="{{ asset ('backend/img/logo.svg')}}" alt="iChat">
                                    </a>
                                    <h6>Welcome back,<br>Please login to your account.</h6>
                                    <div class="field-wrapper">
                                        <input type="email" autofocus id="email" name="email">
                                        <div class="field-placeholder">Email ID</div>
                                    </div>
                                    <div class="field-wrapper mb-3">
                                        <input type="password" id="password" name="password">
                                        <div class="field-placeholder">Password</div>
                                    </div>
                                    <div class="actions">
                                        <a href="{{ route('password.request') }}">Forgot password?</a>
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                </div>
                                <div class="login-footer">
                                    <span class="additional-link">No Account? <a href="{{ route('register') }}"
                                            class="btn btn-light">Sign Up</a></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Row end -->

        </div>
    </div>
    <!-- *************
			************ Login container end *************
		************* -->

    <!-- *************
			************ Required JavaScript Files *************
		************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="{{ asset ('backend/js/jquery.min.js') }}"></script>
    <script src="{{ asset ('backend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset ('backend/js/modernizr.js') }}"></script>
    <script src="{{ asset ('backend/js/moment.js') }}"></script>

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Main Js Required -->
    <script src="{{ asset ('backend/js/main.js')}}"></script>

</body>

</html>