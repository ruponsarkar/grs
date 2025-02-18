<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <!--<link href="assets/img/apple-touch-icon.jpg" rel="apple-touch-icon">-->


    <meta property="og:type" content="" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />

    <meta name="author" content="PageUp Technologies" />

    <meta name="description" content="" />
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">

    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="{{url('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <!-- <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> -->
    <!-- <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet"> -->
    <!-- Template Main CSS File -->
    <link href="{{url('assets/css/styles.css')}}" rel="stylesheet">
    
    <style>
        @media (max-width: 768px) {
        .img-fluid {
            width: 40% !important;
            /*padding: 25px 15px 25px 15px;*/
            
            /*max-width: 0 !important;*/
            }
            }
    </style>

    <!-- CDN Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <title>@yield('title')</title>
</head>

<body class="stripe-1">
    <div class="container-fluid bg-white">
        <!-- ======= Top Bar ======= -->
        <div class="row">
            <div id="topbar">
                <div class="container" style="display: flex; justify-content: space-between;">
                    <div class="contact-info d-flex">

                        <a href="#" style="padding: 2px;">
                            <i class="bi bi-facebook d-flex align-items-center"></i>
                        </a>
                        <div class="vr"></div>
                        <a href="#" style="padding: 2px;">
                            <i class="bi bi-instagram d-flex align-items-center"></i>
                        </a>
                        <div class="vr"></div>
                        <a href="#" style="padding: 2px;">
                            <i class="bi bi-twitter d-flex align-items-center"></i>
                        </a>
                        <div class="vr"></div>
                        <a href="#" style="padding: 2px;">
                            <i class="bi bi-linkedin d-flex align-items-center"></i>
                        </a>

                    </div>

                    <div class="contact-info d-flex align-items-end">

                        <i style="color:green;" onclick="window.location.href='https://wa.me/+919935883014';"
                            class="bi bi-whatsapp d-flex align-items-center">
                            <span>
                                <a style="color:green; font-weight:bold;" href="https://wa.me/+919935883014">
                                    WhatsApp
                                </a>
                            </span>
                        </i>
                        <i class="bi bi-envelope d-flex align-items-center ms-4">
                            <span>
                                <a style="color:black;" href="mailto:contact@IRASSpublishers.com">
                                    contact@IRASSpublishers.com</a>
                            </span>
                        </i>
                    </div>
                </div>
            </div>
        </div>


        <div class="row p-3" style="background-image:url('assets/img/header.jpg'); background-size:cover; background-position: center">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="img">
                            <a href="index.html" class="logo me-auto me-lg-0"><img src="{{url('assets/img/logo.png')}}"
                                    alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">

            </div>
        </div>
        <div class="row">
            <header id="header" class="header">
                <nav id="navbar" class="navbar order-last order-lg-0 bg-nav-dark">
                    <ul>
                        <li><a class="nav-link scrollto active" href="{{ url('/') }}">Home</a></li>
                        <li><a class="nav-link scrollto" href="{{ url('journals') }}">Journals</a></li>
                        <li class="dropdown"><a href="#"><span>For Authors</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="{{url('author-guidlines')}}">Author Guidlines</a></li>
                                <li><a href="#">Processing Fee</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>For Editors</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="{{url('editors-guidlines')}}">Editors Guidlines</a></li>
                                <li><a href="{{ url('Join_editor')}}">Join as Editors</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>For Reviewers</span> <i
                                    class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="{{url('reviewers-guidlines')}}">Reviewers Guidlines</a></li>
                                <li><a href="{{ url('join_reviewer')}}">Join as Reviewers</a></li>
                            </ul>
                        </li>
                        <!--<li><a class="nav-link scrollto" href="#services">Books</a></li>-->
                        <li><a class="nav-link scrollto " href="{{url('contact-us')}}">Contact</a></li>
                        <li><a class="nav-link scrollto " href="{{url('about-us')}}">About Us</a></li>
                        
                        <!--<li class="dropdown"><a href="#"><span>Others</span> <i class="bi bi-chevron-down"></i></a>-->
                        <!--    <ul>-->
                        <!--        <li><a href="#">About Us</a></li>-->
                        <!--    </ul>-->
                        <!--</li>-->
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->
            </header>

        </div>
        <!-- navbar -->
        @yield('content')

       <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row" data-aos="zoom-in" data-aos-delay="100">

                        <div class="col-lg-4 col-md-6">
                            <div class="footer-info">
                                <h3>About Us </h3>
                                <p>
                                    Pharmadico Publishers is an independent, open-access, international research based
                                    publishing house committed to providing a 'peer reviewed' platform to outstanding
                                    researchers and
                                    ...<a href="{{url('about-us')}}"> Read more</a>
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 footer-links">
                            <h4>Open Access Licence</h4>
                            <a rel="license" href="https://creativecommons.org/licenses/by-nc/4.0/"> <img
                                    alt="Creative Commons License" style="border-width:0;float:left"
                                    src="{{url('assets/img/li.png')}}"></a><br>
                            <p class="about-us" style="text-align:left">
                                <br>This work is licensed under a Creative Commons Attribution-NonCommercial 4.0
                                International License.
                            </p>
                        </div>

                        <div class="col-lg-4 col-md-6 footer-info">
                            <h4>Contact Information</h4>

                            <h6 style="color:red; font-weight:bold;">Principal Contact</h6>
                            <p><i class="bi bi-people"></i>
                                XXXXX XXXXXX <br>
                            <p><i class="bi bi-geo-alt-fill"></i>
                                XXXXXX XXXXXXXXXXXXXXXX XXX<br>
                                <i class="bi bi-envelope"></i>
                                <strong>Email:</strong> contact@Pharmadicopublishers.com<br>
                                <i class="bi bi-phone"></i>
                                +9xxxxxxxxx<br>

                        </div>

                        <!--<div class="col-lg-3 col-md-6 footer-info">-->
                        <!--    <h4>.</h4>-->


                        <!--    <h6 style="color:red; font-weight:bold;">Contact Information</h6>-->
                        <!--    <p><i class="bi bi-phone"></i>-->
                        <!--        +639175072883<br>-->
                        <!--        <i class="bi bi-envelope"></i>-->
                        <!--        <strong>Email:</strong> contact@Pharmadicopublishers.com<br><br>-->
                        <!--    </p>-->


                        <!--</div>-->

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>Pharmadico Publishers</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    Developed by <a href="https://pageuptechnologies.com"><b> PageUpTechnologies </b></a>
                </div>
            </div>
        </footer>


        <div class="manus" id="manus" data-aos="flip-down">
            <div class="submit-container">
                <div class="submit-item">
                    <a href="{{ url('manuscript') }}" class="btn effect02" target="_blank"><span>
                            <i class="bi bi-telegram"></i>
                            Submit Manuscript </span></a>
                </div>
            </div>
        </div>

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{url('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <!-- <script src="assets/vendor/swiper/swiper-bundle.min.js"></script> -->
    <!-- <script src="assets/vendor/glightbox/js/glightbox.min.js"></script> -->

    <!-- Template Main JS File -->
    <script src="{{url('assets/js/main.js')}}"></script>
</body>

</html>