<!DOCTYPE html>
<html lang="en">


<head>
    <title>Order Medicines from Your Friendly Neighbourhood Pharmacy | DrCure Pharmacy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="">
    <meta name="description"
        content="DrCure Pharmacy is one of the largest retail pharmacy groups in the Middle East and is now present in India. Order Medicines from DrCure Pharmacy stores and experience the fastest home delivery.">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/Astra%20Clear%20logo/Aster%20farmacy%20favicon.png" type="image/png">
    <link rel="stylesheet" href="{{ url('frontend/styles/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/styles/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/styles/aos.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/styles/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/styles/animate.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/owlCarousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/owlCarousel/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/styles/styles.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/styles/responsive.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    @vite(['resources/js/app.js'])
    <link
        href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
</head>

<body id="home" class="px-0">
    <header>
        <nav class="navbar navbar-light navbar-expand-lg w-100">
            <div class="container px-md-0">
                <!-- <a class="navbar-brand float-md-left" href="index.php"><img alt="logo" src="images/Logo.svg" width=""
                    class="img-fluid moblogo" />
            </a> -->
                <a class="navbar-brand float-md-left" href="index-2.html"><img alt="logo"
                        src="{{ url('frontend/images/Aster-Pharmacy-Logo.png') }}" width=""
                        class="img-fluid moblogo" />
                </a>
                <!-- Toggler/collapsibe Button -->

                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#storefinder">Nearest Pharmacy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about_us">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#product_range">Product Range</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#our_promise">Our Promise</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="partnershipDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Partnership
                            </a>
                            <div class="dropdown-menu" aria-labelledby="partnershipDropdown">
                                <a class="dropdown-item" href="#partner">Pratner With Us</a>
                                <a class="dropdown-item" href="#sell_pharmacy">Sell Your Pharmacy</a>
                                <a class="dropdown-item" href="#franchise">Franchise</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#careers">Careers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#feedback">Feedback</a>
                        </li>
                    </ul>
                </div>
                <button class="btn btn-warning text-left text-white font-weight-bold ml-2 mobbtn d-lg-block d-none">

                    <div style="display: inline-block; vertical-align: middle;"><span class="fhd"
                            class="text-center"> <strong>FREE HOME DELIVERY</strong></span>

                        <span class="fhdno mt-2"><a href="tel:+91 8317673857"
                                style="color:inherit; display: inline-block;">

                                <img src="{{ url('frontend/images/callicon.svg') }}" class="img-fluid"> +91
                                8317673857</a></span>

                        <span class=""><a href="https://api.whatsapp.com/send?phone=918317673857" target="_blank">
                                <img src="{{ url('frontend/images/whatsapp%20help%20icon.svg') }}"
                                    class="img-fluid display"> &nbsp;
                            </a> </span>
                    </div>
                </button>

                <a href="tel:+91 8317673857"
                    class="btn  text-left font-weight-bold ml-4 mobbtn d-lg-none d-block pt-1 pb-1 pl-0 pr-1">

                    <span class="tt hdno mt-2 text-bl"><img src="{{ url('frontend/images/callicon.svg') }}"
                            class="img-fluid text-blue"> +91
                        8317673857</span> </a>
                <a href="https://api.whatsapp.com/send?phone=918317673857"
                    class=" btn btn-warning  text-white font-weight-bold ml-5 mobbtn d-lg-none d-block pt-1 pb-1 pl-0 pr-1">
                    <span class="tt "><img src="{{ url('frontend/images/whatsapp%20help%20icon.svg') }}"
                            class="img-fluid btnwht">
                    </span></a>

                <span
                    class=" fhd btn btn-warning text-left text-blue font-weight-200 ml-4 mobbtn d-lg-none d-block pt-1 pb-1 pl-0 pr-1"><strong>FREE
                        HOME DELIVERY</strong></span>


                <button class="navbar-toggler float-right mt-1" type="button" data-toggle="collapse"
                    data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </header>
