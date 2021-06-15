<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Suchona Company Website Template" name="keywords">
    <meta content="Suchona Company Website Template" name="description">

    <!-- Favicon -->
    <link rel="icon" href="{{asset('frontend/assets/images/letter-s-logo.jpg')}}" type="image/gif" sizes="20x20">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <!--<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{asset('frontend/assets/lib/flaticon/font/flaticon.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/lib/slick/slick.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/lib/slick/slick-theme.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
<div class="wrapper">
    <!--TopBar Start Here-->
    <section class="topBar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-5 float-left topbar-phone">
                    <i class="fas fa-phone-alt"></i>
                    <a href="#">+880 163 0008 000</a>
                </div>
                <div class="col-md-8 col-sm-7 topbar-login">
                    <div class="float-right">
                        <a class="" href="{{route('login')}}">Login &nbsp; </a>  <span> |  </span>
                        <a class="" href="{{route('register')}}"> &nbsp; <span>Registration</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--TopBar End Here-->

    <!--Nav Start-->
    <div class="navbar navbar-expand-md mb-0 nav-wrapper" role="navigation">
        <a class="navbar-brand ml-3 mr-5" href="{{route('main')}}">Suchona</a>
        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class=" text-white bg-dark"><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto p-2">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('main')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown active" style="cursor:pointer">
                    <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Courses</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown1">
                        <li class="dropdown-item" ><a href="{{route('graphicCourse')}}">Graphic Design</a></li>
                        <li class="dropdown-item" ><a href="{{route('webCourse')}}">Web Design & Web Development</a></li>
                        <li class="dropdown-item" ><a href="{{route('digitalMarketCourse')}}">Digital Marketing</a></li>
                    </ul>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('success')}}">Success</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('contact')}}" target="_blank">Contact</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="{{route('blogs')}}">Blog</a>
                </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search..." aria-label="Search">
                <button class="btn my-2 my-sm-0 bg-white text-dark" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>
    <!--Navbar End here-->

    @yield('content')





    <!-- Footer Start -->
    <div class="footer wow fadeIn" data-wow-delay="0.3s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="footer-contact">
                        <h2>Office Contact</h2>
                        <p><i class="fa fa-map-marker-alt"></i>123 Street, Dhaka, Bangladesh</p>
                        <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                        <p><i class="fa fa-envelope"></i>suchona@gmail.com</p>
                        <div class="footer-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-link">
                        <h2>Hot courses</h2>
                        <a href="{{route('webCourse')}}">Web design and development</a>
                        <a href="{{route('graphicCourse')}}">Graphics Design</a>
                        <a href="">Programming for kids</a>
                        <a href="">Spoken English</a>
                        <a href="">Video editing</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-link">
                        <h2>Useful Pages</h2>
                        <a href="">About Us</a>
                        <a href="{{route('contact')}}">Contact Us</a>
                        <a href="{{route('main')}}">Our Team</a>
                        <a href="">Projects</a>
                        <a href="">Testimonial</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="newsletter">
                        <h2>Newsletter</h2>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulpu
                        </p>
                        <div class="form">
                            <input class="form-control" placeholder="Email here">
                            <button class="btn">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container footer-menu">
            <div class="f-menu">
                <a href="">Terms of use</a>
                <a href="">Privacy policy</a>
                <a href="">Cookies</a>
                <a href="{{route('contact')}}">Help</a>
                <a href="{{route('main')}}">FQAs</a>
            </div>
        </div>
        <div class="container copyright">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; <a href="{{route('main')}}">suchona.com</a>, All Right Reserved.</p>
                </div>
                <div class="col-md-6">
                    <p>Designed By <a href="{{route('main')}}">Team Suchona</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('frontend/assets/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('frontend/assets/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('frontend/assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/assets/lib/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/assets/lib/lightbox/js/lightbox.min.js')}}"></script>
<script src="{{asset('frontend/assets/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('frontend/assets/lib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('frontend/assets/lib/slick/slick.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('frontend/assets/js/main.js')}}"></script>



<!--success js-->
<script>
    $(document).ready(function(){
        $(".read").click(function(){
            $(this).prev().toggle();
            $(this).siblings('.dots').toggle();

            if($(this).text()=='read more'){
                $(this).text('read less');
            }
            else{
                $(this).text('read more');
            }
        });
    });
</script>
<!----------------------- js link end ------------------------->

</body>
</html>