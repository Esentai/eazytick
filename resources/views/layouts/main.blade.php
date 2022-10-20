<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EAZYTICK - EVENT TICKETS ONLINE BOOKING.</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="icon" type="image/png" href="assets/img/favcion.png" />
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/css/slicknav.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/css/icofont.css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="all" />

</head>
<body>

<div id="preloader"></div>

<header class="header">
    <div class="container">
        <div class="header-area">
            <div class="logo">
                <a href="index.html"><h2>EazyTick</h2></a>
            </div>
            <div class="header-right">
                <form action="#">
                    <select>
                        <option value="Movies">Movies</option>
                        <option value="Movies">Movies</option>
                        <option value="Movies">Movies</option>
                    </select>
                    <input type="text"/>
                    <button><i class="icofont icofont-search"></i></button>
                </form>
                <ul>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"></a>
                        @else
                            <li><a class="login" href="{{ route('login') }}">Login</a></li>
                            @if (Route::has('register'))
                                <li><a class="login" href="{{ route('register') }}">Register</a></li>
                            @endif
                        @endauth

                    @endif
                    @auth
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
                    @endauth

                </ul>
            </div>
            <div class="menu-area">
                <div class="responsive-menu"></div>
                <div class="mainmenu">
                    <ul id="primary-menu">
                        <li><a href="{{route('welcome')}}">Home</a></li>
                        <li><a href="{{route('movies')}}">Movies</a></li>
                        <li><a href="#">CelebritiesList</a></li>
                        <li><a href="#">Top Movies</a></li>
                        <li><a href="{{route('blog')}}">News</a></li>
                        <li><a class="theme-btn" href="#"><i class="icofont icofont-ticket"></i> Tickets</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="buy-ticket">
    <div class="container">
        <div class="buy-ticket-area">
            <a href="#"><i class="icofont icofont-close"></i></a>
            <div class="row">
                <div class="col-lg-8">
                    <div class="buy-ticket-box">
                        <h4>Buy Tickets</h4>
                        <h5>Seat</h5>
                        <h6>Screen</h6>
                        <div class="ticket-box-table">
                            <table class="ticket-table-seat">
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                            </table>
                            <table>
                                <tr>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                </tr>
                            </table>
                            <table class="ticket-table-seat">
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td class="active">1</td>
                                    <td class="active">1</td>
                                    <td class="active">1</td>
                                    <td class="active">1</td>
                                    <td class="active">1</td>
                                    <td class="active">1</td>
                                    <td class="active">1</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                            </table>
                            <table>
                                <tr>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                </tr>
                            </table>
                            <table class="ticket-table-seat">
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                            </table>
                        </div>
                        <div class="ticket-box-available">
                            <input type="checkbox" />
                            <span>Available</span>
                            <input type="checkbox" checked />
                            <span>Unavailable</span>
                            <input type="checkbox" />
                            <span>Selected</span>
                        </div>
                        <a href="#" class="theme-btn">previous</a>
                        <a href="#" class="theme-btn">Next</a>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="buy-ticket-box mtr-30">
                        <h4>Your Information</h4>
                        <ul>
                            <li>
                                <p>Location</p>
                                <span>HB Cinema Box Corner</span>
                            </li>
                            <li>
                                <p>TIME</p>
                                <span>2018.07.09   20:40</span>
                            </li>
                            <li>
                                <p>Movie name</p>
                                <span>Home Alone</span>
                            </li>
                            <li>
                                <p>Ticket number</p>
                                <span>2 Adults, 2 Children, 2 Seniors</span>
                            </li>
                            <li>
                                <p>Price</p>
                                <span>89$</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@yield('content')


<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="widget">
                    <h2>EasyTick </h2>
                    <p>Manas St 34/1, Almaty 050000</p>
                    <h6><span>Call us: </span>+7 707 336 3282</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="widget">
                    <h4>Legal</h4>
                    <ul>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Security</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="widget">
                    <h4>Account</h4>
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Watchlist</a></li>
                        <li><a href="#">Collections</a></li>
                        <li><a href="#">User Guide</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="widget">
                    <h4>Newsletter</h4>
                    <p>Subscribe to our newsletter system now to get latest news from us.</p>
                    <form action="#">
                        <input type="text" placeholder="Enter your email.."/>
                        <button>SUBSCRIBE NOW</button>
                    </form>
                </div>
            </div>
        </div>
        <hr />
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left">
                    <div class="copyright-content">
                        <p>Copyright IITU 2023</p>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="copyright-content">
                        <a href="#" class="scrollToTop">
                            Back to top<i class="icofont icofont-arrow-up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.slicknav.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/main.js"></script>
</body>

</html>

