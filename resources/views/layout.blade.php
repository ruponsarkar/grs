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
    <meta property="og:title" content="GRS Publisher" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />

    <meta name="author" content="PageUp Technologies" />

    <meta name="description" content="" />
    <!-- Google Fonts -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine"> -->

    <!-- <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet"> -->

    <!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet"> -->

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <!-- <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet"> -->
    <!-- Bootstrap CSS -->
    <link href="{{ url('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <!-- <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> -->
    <!-- <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet"> -->
    <!-- Template Main CSS File -->
    <link href="{{ url('assets/css/styles.css') }}" rel="stylesheet">

    <!-- CDN Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <title>@yield('title')</title>

    <style>
        @media (max-width: 768px) {
            .img-fluid {
                width: 40% !important;
                /*padding: 25px 15px 25px 15px;*/

                /*max-width: 0 !important;*/
            }
        }
    </style>
</head>

<body class="stripe-1">
    <div class=" bg-white">
        <!-- ======= Top Bar ======= -->
        <div class="row m-0">
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
                            <i class="bi bi-whatsapp d-flex align-items-center"></i>
                        </a>
                        <div class="vr"></div>
                        {{-- <a href="#" style="padding: 2px;">
                            <i class="bi bi-twitter d-flex align-items-center"></i>
                        </a>
                        <div class="vr"></div>
                        <a href="#" style="padding: 2px;">
                            <i class="bi bi-linkedin d-flex align-items-center"></i>
                        </a> --}}

                    </div>

                    <div class="contact-info d-flex align-items-end">

                    </div>
                </div>
            </div>
        </div>


        {{-- <div class="row logo-header">
            <div class="col-md-6 d-flex align-items-center">
                <div class="row">
                    <div class="col-md-6">
                        <div class="img">
                            <a href="{{url('/')}}" class="logo me-auto me-lg-0"><img src="{{url('assets/homeAssets/'.$logo)}}"
                                    alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">

            </div>
        </div> --}}

        {{-- <div class="row" style="background-image:url({{url('assets/homeAssets/'.$banner)}}); background-size:cover; background-position: center; min-height:180px"> --}}
        <div class="row logo-header" style="background-image: url(assets/homeAssets/{{$banner}})">
            <div class="col-md-2 d-flex align-items-center justify-content-center">
                <div class="">
                    <a href="{{ url('/') }}" class=" me-auto me-lg-0"><img
                            src="{{ url('assets/homeAssets/' . $logo) }}" alt="" class=" logo">
                            {{-- src="{{ url('/logo.png') }}" alt="" class=" logo"> --}}
                    </a>
                </div>
            </div>
            <div class="col-md-8 d-flex align-items-center justify-content-center">
                <div class="h-border text-center">
                       
            


                    <h3 class="h-name px-2">
                        Global Research Society Publisher
                    </h3>
                    {{-- <h3 class="h-name px-2">
                    GRS Publisher
                    </h3> --}}

                    {{-- <div class="h-sub-name">
                        International Journal of GRS Publisher
                    </div> --}}
                </div>
            </div>
            <div class="col-md-2 d-flex align-items-center justify-content-center">
                <div class="issn my-3">
                    <strong>
                        <!-- ISSN: 2584-1610 (Online) -->
                    </strong>
                </div>
            </div>
        </div>



        <div class="row m-0">
           
            <header id="header" class="header">
                <nav id="navbar" class="navbar order-last order-lg-0 bg-nav-dark">
                    <ul>
                        <li><a class="nav-link scrollto {{url()->current() == url('/') ? 'active' : ''}}" href="{{ url('/') }}">Home</a></li>
                        <li><a class="nav-link scrollto {{url()->current() == url('/about') ? 'active' : ''}}" href="{{ url('about') }}">About Us</a></li>
                        <li><a class="nav-link scrollto {{url()->current() == url('/journals') ? 'active' : ''}}" href="{{ url('journals') }}">Journals</a></li>
                        <li class="dropdown"><a href="#"><span>For Authors</span> <i
                                    class="bi bi-chevron-down"></i></a>
                            <ul>
                                <!--<li><a href="authorGuidlines">Author Guidlines</a></li>-->
                                <li><a href="{{ url('authorGuidlines') }}">Author Guidlines</a></li>
                                <li><a href="{{url('PeerReviewPolicy')}}">Peer Review Process</a></li>
                                <li><a href="{{url('OpenAccessPolicy')}}">Open Access Policy</a></li>
                                <li><a href="{{url('ProcessingFee')}}">Processing Fee</a></li>
                            </ul>
                        </li>
                        {{-- <li class="dropdown"><a href="#"><span>For Editors</span> <i
                                    class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="{{ url('editorsGuidlines') }}">Editors Guidlines</a></li>
                                <li><a href="{{ url('Join_editor') }}">Join as Editors</a></li>
                            </ul>
                        </li> --}}
                        {{-- <li class="dropdown"><a href="#"><span>For Reviewers</span> <i
                                    class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="reviewersGuidlines">Reviewers Guidlines</a></li>
                                <li><a href="{{ url('join_reviewer') }}">Join as Reviewers</a></li>
                            </ul>
                        </li> --}}
                        {{-- <li><a class="nav-link " href="{{url('conference')}}">Conference Proceedings</a></li> --}}
                        
                        <li><a class="nav-link scrollto {{url()->current() == url('/manuscript') ? 'active' : ''}}" href="{{ url('manuscript') }}"> Submit Manuscript</a></li>
                        <li><a class="nav-link scrollto {{url()->current() == url('/Payments') ? 'active' : ''}}" href="{{ url('#') }}"> Payments</a></li>
                        <li><a class="nav-link scrollto {{url()->current() == url('/contactUs') ? 'active' : ''}}" href="{{ url('contactUs') }}">Contact Us</a></li>


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
        {{-- <div class="container-fluid"> --}}
            {{-- <img src="{{ url('assets/homeAssets/' . $logo) }}" alt="" class=" logo" /> --}}
            
        @yield('content')
        {{-- </div> --}}

        


        <div class="manus" id="manus" >
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

    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                {{-- <div class="row" data-aos="zoom-in" data-aos-delay="100"> --}}
                <div class="row">

                    {{-- <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>About Us </h3>
                            <p>
                            GRS Publisher aims to be a leading platform for innovative and impactful publishing, dedicated to enhancing the dissemination of high-quality academic, professional, and creative content. Our goal is to bridge the gap between authors and 
                                ...<a href="{{ url('about') }}"> Read more</a>
                            </p>
                        </div>
                    </div> --}}
                    <div class="col-md-3">
                        <div class="footer-info">
                            <h4><b><u>Quick Links</u></b></h4>
                            <li>
                                <a href="{{ url('about') }}">
                                    ABOUT US
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('journals') }}">
                                    JOURNALS
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('authorGuidlines') }}">
                                    FOR AUTHORS
                                </a>
                            </li>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="footer-info">
                            <h4><b><u>Join Us</u></b></h4>
                            <li>
                                <a href="{{ url('Join_editor') }}">
                                    JOIN AS EDITOR
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('join_reviewer') }}">
                                    JOIN AS REVIEWER
                                </a>
                            </li>
                            <li>
                                <a href="{{url('PrivacyPolicy')}}">
                                    PRIVACY POLICY
                                </a>
                            </li>
                        </div>
                    </div>

                    <div class="col-md-3 footer-links">
                        <!-- <h4>Open Access Licence</h4> -->
                        <a rel="license" href="https://creativecommons.org/licenses/by-nc/4.0/"> <img
                                alt="Creative Commons License" style="border-width:0;float:left"
                                src="{{ url('assets/img/li.png') }}"></a><br>
                        <p class="about-us" style="text-align:left">
                            <br><i><small>
                                 work is licensed under a Creative Commons Attribution-NonCommercial 4.0
                            International License.
                            </small></i>
                        </p>
                    </div>

                    <div class="col-md-3 footer-info">
                        <h4><b><u>Contact Information</u></b></h4>
                        <p><i class="bi bi-geo-alt-fill"></i>
                            Dighaljhar, Hojai, Assam 782439(India)
                            <br>
                            <i class="bi bi-envelope"></i>
                            <strong>Email:</strong> contact@GRSpublisher.com<br><br>


                            <strong>Principal Contact :</strong> Director, GRS
                            <br><br>
                            <i class="bi bi-envelope"></i>
                            <strong>Email:</strong> director@GRSpublishers.com<br><br>

                    </div>

                </div>
            </div>
        </div>

        <div class="container p-4">
            <div class="copyright">
                &copy; Copyright <strong><span>GRS Publishers</span></strong>. All Rights Reserved
            </div>
            {{-- <div class="credits">
                Developed by <a href="https://pageuptechnologies.com"><b> PageUpTechnologies </b></a>
            </div> --}}
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ url('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <!-- <script src="assets/vendor/swiper/swiper-bundle.min.js"></script> -->
    <!-- <script src="assets/vendor/glightbox/js/glightbox.min.js"></script> -->

    <!-- Template Main JS File -->
    <script src="{{ url('assets/js/main.js') }}"></script>
</body>

</html>
