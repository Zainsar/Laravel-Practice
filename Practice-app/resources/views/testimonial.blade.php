@extends('web.main')


@section('main-section')
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="header_top">
                <div class="container">
                    <div class="contact_nav">
                        <a href="">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>
                                Call : +01 123455678990
                            </span>
                        </a>
                        <a href="">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>
                                Email : demo@gmail.com
                            </span>
                        </a>
                        <a href="">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>
                                Location
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="header_bottom">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg custom_nav-container ">
                        <a class="navbar-brand" href="{{ Route('home') }}">
                            <img src="images/logo.png" alt="">
                        </a>
                        </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class=""> </span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
                                <ul class="navbar-nav  ">
                                    <li class="nav-item ">
                                        <a class="nav-link" href="{{ Route('home') }}">Home <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ Route('about') }}"> About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ Route('treatment') }}">Treatment</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ Route('doctor') }}">Doctors</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ Route('testimonial') }}">Testimonial</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ Route('contact') }}">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="quote_btn-container">
                                <a href="">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <span>
                                        Login
                                    </span>
                                </a>
                                <a href="">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <span>
                                        Sign Up
                                    </span>
                                </a>
                                <form class="form-inline">
                                    <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- end header section -->
    </div>



    <!-- client section -->
    <section class="client_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    <span>Testimonial</span>
                </h2>
            </div>
        </div>
        <div class="container px-0">
            <div id="customCarousel2" class="carousel  carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="box">
                            <div class="client_info">
                                <div class="client_name">
                                    <h5>
                                        Morijorch
                                    </h5>
                                    <h6>
                                        Default model text
                                    </h6>
                                </div>
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                            <p>
                                editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will
                                uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their
                                default model text, and a search for 'lorem ipsum' will uncover many web sites still in
                                their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search
                                for 'lorem ipsum' will uncover many web sites still in their infancy. Various
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="box">
                            <div class="client_info">
                                <div class="client_name">
                                    <h5>
                                        Rochak
                                    </h5>
                                    <h6>
                                        Default model text
                                    </h6>
                                </div>
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                            <p>
                                Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem
                                ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem
                                Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web
                                sites still in their infancy. editors now use Lorem Ipsum as their default model text, and a
                                search for 'lorem ipsum' will uncover many web sites still in their infancy.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="box">
                            <div class="client_info">
                                <div class="client_name">
                                    <h5>
                                        Brad Johns
                                    </h5>
                                    <h6>
                                        Default model text
                                    </h6>
                                </div>
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                            <p>
                                Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem
                                ipsum' will uncover many web sites still in their infancy, editors now use Lorem Ipsum as
                                their default model text, and a search for 'lorem ipsum' will uncover many web sites still
                                in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a
                                search for 'lorem ipsum' will uncover many web sites still in their infancy. Various
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel_btn-box">
                    <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end client section -->


    <!-- info section -->
    <section class="info_section ">
        <div class="container">
            <div class="info_top">
                <div class="info_logo">
                    <a href="">
                        <img src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="info_form">
                    <form action="">
                        <input type="email" placeholder="Your email">
                        <button>
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
            <div class="info_bottom layout_padding2">
                <div class="row info_main_row">
                    <div class="col-md-6 col-lg-3">
                        <h5>
                            Address
                        </h5>
                        <div class="info_contact">
                            <a href="">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>
                                    Location
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>
                                    Call +01 1234567890
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-envelope"></i>
                                <span>
                                    demo@gmail.com
                                </span>
                            </a>
                        </div>
                        <div class="social_box">
                            <a href="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="info_links">
                            <h5>
                                Useful link
                            </h5>
                            <div class="info_links_menu">
                                <a href="{{ Route('home') }}">
                                    Home
                                </a>
                                <a href="{{ Route('about') }}">
                                    About
                                </a>
                                <a href="{{ Route('treatment') }}">
                                    Treatment
                                </a>
                                <a href="{{ Route('doctor') }}">
                                    Doctors
                                </a>
                                <a class="active" href="{{ Route('testimonial') }}">
                                    Testimonial
                                </a>
                                <a href="{{ Route('contact') }}">
                                    Contact us
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="info_post">
                            <h5>
                                LATEST POSTS
                            </h5>
                            <div class="post_box">
                                <div class="img-box">
                                    <img src="images/post1.jpg" alt="">
                                </div>
                                <p>
                                    Normal
                                    distribution
                                </p>
                            </div>
                            <div class="post_box">
                                <div class="img-box">
                                    <img src="images/post2.jpg" alt="">
                                </div>
                                <p>
                                    Normal
                                    distribution
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="info_post">
                            <h5>
                                News
                            </h5>
                            <div class="post_box">
                                <div class="img-box">
                                    <img src="images/post3.jpg" alt="">
                                </div>
                                <p>
                                    Normal
                                    distribution
                                </p>
                            </div>
                            <div class="post_box">
                                <div class="img-box">
                                    <img src="images/post4.png" alt="">
                                </div>
                                <p>
                                    Normal
                                    distribution
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end info_section -->
@endsection
