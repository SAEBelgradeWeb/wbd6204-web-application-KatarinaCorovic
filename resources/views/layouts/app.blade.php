<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Prixilium</title>

{{--    <title>{{ config('app.name', 'Prixilium') }}</title>--}}

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

    <!-- Datepicker -->
    <link href='bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css' rel='stylesheet' type='text/css'>
    <script src='bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js' type='text/javascript'></script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" type="image/jpg" href="../public/assets/favicon.png"/>

</head>
<body>
    <div id="app">
        <doctors></doctors>
        <header>
            <div class="top-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-9 col-sm-8">
                            <ul class="header-left-content">
                                <li class="logo"><a href="/home"><img src="/images/healthcare.png" alt="telephone"><span>Prixlium</span></a></li>
                                <li class="phone vl">
                                    <i></i>
                                    <h4>Call now</h4>
                                    <h3><a href="">354-548965</a></h3>
                                </li>
                                <img src="/images/call.png" alt="telephone">
                                <li class="working-days vl">
                                    <h4>Monday-Friday</h4>
                                    <h3>08:00 AM - 08:00 PM</h3>
                                </li>
                                <img src="/images/clock.png" alt="telephone">
                            </ul>
                        </div>
                        <div class="col-lg-3 col-sm-4">
                            <ul class="header-right-content">
                                <li><a href=""><img src="/images/facebook.png" alt="facebook"></a></li>
                                <li><a href=""><img src="/images/twitter.png" alt="twitter"></a></li>
                                <li><a href=""><img src="/images/linkedin.png" alt="linkedin"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
{{--                    {{ config('app.name', 'Laravel') }}--}}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/home">Home</a>
                        </li>
                        <li><a class="nav-link" href="/appointment">Make an appointment</a></li>
                        <li><a class="nav-link" href="/doctor">Doctors</a></li>
                        <li><a class="nav-link" href="/doctors_report">Report</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


<!----------------------------------- main content------------------------------>


        <main class="pb-4">
            @yield('content')
        </main>
    </div>

<!--------------------------footer------------------------------->

    <section class="footer-area pt-100 pb-700">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget">
                        <a href="#">
                            <img src="/images/healthcare (2).png" alt="doctor"><h1>Prixilium</h1>
                        </a>
                        <p>Our priority is to ensure the well being of patients. Our service and the work efficiency of our staff are the reason for our success to ensure the well being.</p>
{{--                        <p class="address">--}}
{{--                            <span>Address: Nemanjina 11, Beograd</span>--}}
{{--                        </p>--}}
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget">
                        <h3>Our department</h3>
                        <ul>
                            <li><a href="">Pediatric clinic</a></li>
                            <li><a href="">Neurology</a></li>
                            <li><a href="">Cardiology</a></li>
                            <li><a href="">Gastroenterology</a></li>
                            <li><a href="">Ophtamology</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget">
                        <h3>Popular links</h3>
                        <ul>
                            <li><a href="">About us</a></li>
                            <li><a href="">Contact us</a></li>
                            <li><a href="">Find a doctor</a></li>
                            <li><a href="">Terms and conditions</a></li>
                            <li><a href="">Privacy policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget">
                        <h3>Contact us</h3>
                        <p>For 24/7 emergency please call us. If there is no emergency, contact at time.</p>
                        <ul>
                            <li><span>Call:</span>
                                <a href="">414135235</a>
                            </li>
                            <li>
                                <span>Email:</span>
                                <a href="">support@prixilium.com</a>
                            </li>
                        </ul>
                        <ul class="open-day">
                            <li>
                                Weekdays
                                <span>8:00 am - 7:00 pm</span>
                            </li>
                            <li>
                                Sunday
                                <span>9: 00 am - 3:00 pm</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!----------------------copyright------------------------------->

    <div class="copy-right-area">
        <div class="container">
            <p>Copyright @2021 Prixilium</p>
        </div>
    </div>

    <script src="{{mix('/js/app.js')}}"></script>
</body>
</html>
