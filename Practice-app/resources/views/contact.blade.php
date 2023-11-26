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


    <!-- contact section -->
    <section class="contact_section layout_padding-bottom">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Get In Touch
                </h2>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="form_container">
                        <form action="">
                            <div>
                                <input type="text" placeholder="Full Name" />
                            </div>
                            <div>
                                <input type="email" placeholder="Email" />
                            </div>
                            <div>
                                <input type="text" placeholder="Phone Number" />
                            </div>
                            <div>
                                <input type="text" class="message-box" placeholder="Message" />
                            </div>
                            <div class="btn_box">
                                <button>
                                    SEND
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="img-box">
                        <img src="images/contact-img.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact section -->

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
                                <a href="{{ Route('testimonial') }}">
                                    Testimonial
                                </a>
                                <a class="active" href="{{ Route('contact') }}">
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
