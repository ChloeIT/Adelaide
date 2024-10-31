<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adelaide</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('faviconhoa.ico') }}" type="image/x-icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('assests/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assests/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assests/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assests/css/flaticon.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assests/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assests/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assests/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assests/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assests/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assests/css/style.css') }}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        <div class="search-icon  search-switch">
            <i class="icon_search"></i>
        </div>
        <div class="header-configure-area">
            <a href="/login" class="bk-btn">Login Now</a>
        </div>
        <nav class="mainmenu mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./rooms.html">Hotel</a></li>
                <li><a href="./about-us.html">Service</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="top-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-tripadvisor"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i> 0123456789 </li>
            <li><i class="fa fa-envelope"></i> adelaide@gmail.com </li>
        </ul>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tn-left">
                            <li><i class="fa fa-phone"></i> 0123456789 </li>
                            <li><i class="fa fa-envelope"></i> adelaide@gmail.com </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tn-right">
                            <div class="top-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            @if (Session::has('username'))
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="userMenu"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Hello, {{ Session::get('username') }}
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="userMenu">
                                        <a class="dropdown-item" href="#"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            @else
                                <a href="/login" class="bk-btn">Login Now</a>
                            @endif


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2" style="margin-top: 20px;">
                        <a href="/" style="font-family:monospace;">
                            <h4 class="text-black mb-3" style="font-size: 40px;">Adelaide</h4>
                        </a>
                    </div>

                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <li class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}"><a
                                        href="/">Home</a></li>
                                <li class="nav-item nav-link {{ Request::is('/hotel') ? 'active' : '' }}"><a
                                        href="/hotel">Hotel</a></li>
                                <li class="nav-item nav-link {{ Request::is('/service') ? 'active' : '' }}"><a
                                        href="/service">Service</a>
                                <li class="nav-item nav-link {{ Request::is('/contact') ? 'active' : '' }}"><a
                                        href="/contact">Contact</a></li>
                            </nav>
                            <div class="nav-right search-switch">
                                <i class="icon_search"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-text">
                        <h2>Contact Info</h2>
                        <p>We are here to help you! Contact us for support anytime, anywhere.</p>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="c-o">Address:</td>
                                    <td>New York</td>
                                </tr>
                                <tr>
                                    <td class="c-o">Phone:</td>
                                    <td>0123456789</td>
                                </tr>
                                <tr>
                                    <td class="c-o">Email:</td>
                                    <td>adelaide@gmail.com</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-7 offset-lg-1">
                    <form action="#" class="contact-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Your Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Your Email">
                            </div>
                            <div class="col-lg-12">
                                <textarea placeholder="Your Message"></textarea>
                                <button type="submit">Submit Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193570.81047059353!2d-74.11808637650337!3d40.70582544343095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c250b920dd0217%3A0xc80b8c579285bfc4!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1712213751233!5m2!1sen!2sbd"
                    height="470" style="border:0;" allowfullscreen="">
                </iframe>
            </div>

        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ft-about">
                            <div class="logo">
                                <a href="#">
                                    <img src="img/footer-logo.png" alt="">
                                </a>
                            </div>
                            <p>We inspire and reach millions of travelers<br /> across 90 local hotels</p>
                            <div class="fa-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-contact">
                            <h6>Contact Us</h6>
                            <ul>
                                <li>0123456789</li>
                                <li>adelaide@gmail.com</li>
                                <li>New York</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-newslatter">
                            <h6>New latest</h6>
                            <p>Get the latest updates and offers.</p>
                            <form action="#" class="fn-form">
                                <input type="text" placeholder="Email">
                                <button type="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Environmental Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="co-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i
                                    class="fa fa-heart" aria-hidden="true"></i> by <a target="_blank">Adelaide</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="{{ asset('assests/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assests/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assests/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assests/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assests/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assests/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('assests/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assests/js/main.js') }}"></script>
</body>

</html>
