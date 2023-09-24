<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="description"
        content="From image analysis and human activity recognition to semantic search and manual task automation, we provide AI consulting services and develop custom artificial intelligence solutions that give you a competitive edge">
    <meta name="keywords" content="artificial intelligence,Machine learning, ">
    <meta name="author" content="HiBootstrap">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <title>Xcrotech Software Solutions - AI consulting & development services</title>

    @if($basic->basic_favIcon)
        <link rel="icon" href="{{ asset('uploads/admin/basic/'.$basic->basic_favIcon) }}" alt=""
        type="image/png" sizes="16x16">
    @else
        <link rel="icon" href="{{ asset('contents/website') }}/assets/images/favicon.png"
            type="image/png" sizes="16x16">
    @endif


    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('contents/website') }}/assets/css/bootstrap.min.css"
        media="all" />
    <link rel="stylesheet" href="{{ asset('contents/website') }}/assets/css/animate.min.css"
        media="all" />
    <link rel="stylesheet" href="{{ asset('contents/website') }}/assets/css/owl.carousel.min.css"
        media="all" />
    <link rel="stylesheet"
        href="{{ asset('contents/website') }}/assets/css/owl.theme.default.min.css" media="all" />
    <link rel="stylesheet" href="{{ asset('contents/website') }}/assets/css/meanmenu.min.css"
        media="all" />
    <link rel="stylesheet" href="{{ asset('contents/website') }}/assets/css/slick.css"
        media="all" />
    <link rel='stylesheet' href="{{ asset('contents/website') }}/assets/css/icofont.min.css"
        media="all" />
    <link rel='stylesheet' href="{{ asset('contents/website') }}/assets/css/flaticon.css"
        media="all" />
    <link rel="stylesheet" href="{{ asset('contents/website') }}/assets/css/style.css"
        media="all" />
    <link rel="stylesheet" href="{{ asset('contents/website') }}/assets/css/responsive.css"
        media="all" />
</head>

<body>
    <!-- Preloader -->
    <!-- <div class="preloader">
            <div class="preloader-wrapper">
                <div class="preloader-content">
                    <div class="blob-1"></div>
	                <div class="blob-2"></div>
                </div>
            </div>
        </div> -->
    <!-- Preloader -->
    <!-- Navbar -->

    <a href="https://wa.me/31687857915=" target="_blank" class="fixedwhatsapp" title="whatsapp"><img
            src="{{ asset('contents/website') }}/assets/images/whatsapp.png" class="w-100"
            alt="whatsapp" title="whatsapp"></a>

    <div class="fixed-top">
        <div class="topbar">
            <div class="container">
                <div class="topbar-inner">
                    <div class="row justify-content-center justify-content-lg-between">
                        <div class="topbar-item topbar-left">
                            <ul class="topbar-list">
                                <li>
                                    @if($contact->cu_number1)
                                        <i class="icofont-headphone"></i>
                                        <a href="tel:+{{ $contact->cu_number1 }}">+{{ $contact->cu_number1 }}</a>
                                    @endif
                                </li>
                                <li>

                                    @if($contact->cu_email1)
                                        <i class="icofont-ui-message"></i>
                                        <a
                                            href="https://templates.envytheme.com/cdn-cgi/l/email-protection#84edeae2ebc4e1f6f1e0e1fcaae7ebe9"><span
                                                class="__cf_email__"
                                                data-cfemail="b2dbdcd4ddf2d7c0c7d6d7ca9cd1dddf">[{{ $contact->cu_email1 }}]</span></a>
                                    @endif

                                </li>
                            </ul>
                        </div>
                        <!-- <div class="topbar-item topbar-right">
                            <ul class="topbar-list">
                                <li>
                                    <i class="icofont-paper-plane"></i>
                                    <a href="contact.html">Request For Free Quotation</a>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-area sticky-black">
            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="{{ route ('/') }}">

                            @if($basic->basic_Mlogo)
                                <img src="{{ asset('uploads/admin/basic/'.$basic->basic_Mlogo) }}"
                                    alt="" class="img-fluid">
                            @else
                                <img src="{{ asset('contents/website') }}/assets/images/mlogo.png"
                                    alt="logo" class="logo">
                            @endif

                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto">

                                <li class="nav-item">
                                    <a href="#aboutus" class="nav-link">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#technology" class="nav-link">Technology</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#services" class="nav-link">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#WhyChoose" class="nav-link">Why Choose</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#portfolio" class="nav-link">Work</a>
                                </li>


                                <li class="nav-item">
                                    <a href="#contact" class="nav-link">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <header class="header header-bg-lg header-bg-shape border-bottom-1" id="home">
        <div class="container-fluid p-lg-0">
            <div class="row m-lg-0">
                <div class="col-lg-6 p-lg-0">
                    <div class="max-585 ms-auto">
                        <div class="header-content">
                            <h1>{{ $banner->ban_title }}</h1>
                            <p></p>
                            <div class="button-group button-group-animated">
                                <a href="#" class="btn main-btn">{{ $banner->ban_btn }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-image-shape">
            @if($banner->ban_pic)
                <img src="{{ asset('uploads/admin/banner/'.$banner->ban_pic) }}" alt=""
                    class="img-fluid">
            @else
                <img src="{{ asset('contents/website') }}/assets/images/banner.png"
                    alt="" class="img-fluid">
            @endif
        </div>
        <div class="header-animation-shapes animation-d-none">
            <div class="header-animation-shape"></div>
        </div>
    </header>

    <section class="about-section bg-off-white pb-70" id="services">
        <div class="container color-black">
            <div class="section-title section-title-lg">
                <small>Services</small>
                <h2>Our Purpose Is To Deliver Excellence <br> In Software Service And Development</h2>

            </div>
            <div class="row">
                @foreach($service as $service)
                    <div class="col-md-6 col-lg-4 pb-30">
                        <div class="service-card">
                            <div class="service-card-thumb">
                                <i class="{{ $service->ser_icon }}"></i>
                            </div>
                            <div class="service-card-body">
                                <h3>{{ $service->ser_title }}</h3>
                                <ul class="m-0 p-0 services-list">
                                    <li>{{ $service->ser_elem1 }}</li>
                                    <li>{{ $service->ser_elem2 }}</li>
                                    <li>{{ $service->ser_elem3 }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>

    <section class="feature-section pb-70" id="technology">
        <div class="container">
            <div class="section-title section-title-lg">
                <small>Our Technology Stack</small>
                <h2>Any Sufficiently Advanced <br> Technology Is Indistinguishable From Magic</h2>
            </div>
            <div class="container">
                <div class="row">
                    @foreach($technology as $tech)
                        <div class="col-md-6 col-lg-3 pb-30">
                            <div class="feature-card">
                                <div class="feature-card-header">
                                    <div class="feature-card-thumb feature-card-thumb-green">
                                        <i class="{{ $tech->tech_icon }}"></i>
                                    </div>
                                    <span>{{ $tech->tech_title }}</span>
                                </div>
                                <div class="feature-card-body">
                                    <p>{{ $tech->tech_description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <!-- <div class="col-md-6 col-lg-3 pb-30">
                        <div class="feature-card">
                            <div class="feature-card-header">
                                <div class="feature-card-thumb feature-card-thumb-yellow">
                                    <i class="flaticon-voice-recognition"></i>
                                </div>
                                <span>Computer Vision</span>
                            </div>
                            <div class="feature-card-body">
                                <p>From biometric authentication to CCTV monitoring and live video analysis, we develop
                                    AI solutions that accurately recognize and interpret visual information.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 pb-30">
                        <div class="feature-card">
                            <div class="feature-card-header">
                            <div class="feature-card-thumb feature-card-thumb-blue">
                                    <i class="flaticon-machine-learning"></i>
                                </div>
                                <span>Data Engineering</span>
                            </div>
                            <div class="feature-card-body">
                                <p>Our team of qualified and experienced Data Engineers and Consultants will create
                                    large scale big data solution and trun them into valuable business insight</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 pb-30">
                        <div class="feature-card">
                            <div class="feature-card-header">
                                <div class="feature-card-thumb feature-card-thumb-violet">
                                    <i class="flaticon-processor"></i>
                                </div>
                                <span>Deep Learning & NLP</span>
                            </div>
                            <div class="feature-card-body">
                                <p>Utilizing the power of multi-layered neural networks, we architect AI business
                                    solutions that mimic — and even outperform — human intelligence.
                                </p>

                            </div>
                        </div>
                    </div> -->

                </div>
            </div>
        </div>
    </section>

    <section class="about-section bg-off-white pb-70 color-black" id="aboutus">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 pb-30">
                    <div class="about-section-item about-item-image text-center">
                        @if($aboutus->about_pic != '')
                            <img src="{{ asset('uploads/admin/about/'.$aboutus->about_pic) }}"
                                alt="shape">
                        @else
                            <img src="{{ asset('contents/website') }}/assets/images/aboutus.png"
                                alt="shape">
                        @endif

                    </div>
                </div>
                <div class="col-lg-6 pb-30">
                    <div class="about-section-item about-item-details">
                        <div class="section-title section-title-left text-start">
                            <small>{{ $aboutus->about_subtitle }}</small>
                            <h2>{{ $aboutus->about_title }}</h2>
                        </div>
                        <div class="about-content">
                            <p>{{ $aboutus->about_description }}</p>
                            <p>What makes us different:</p>
                            <ul>
                                <li>{{ $aboutus->about_elem1 }}/li>
                                <li>{{ $aboutus->about_elem2 }}</li>
                                <li>{{ $aboutus->about_elem3 }}</li>
                                <li>{{ $aboutus->about_elem4 }}</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section pb-70" id="WhyChoose">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 pb-30">
                    <div class="about-section-item about-item-details">
                        <div class="section-title section-title-left text-start">
                            <small>{{ $choose->cho_main_subtitle }}</small>
                            <h2>{{ $choose->cho_main_title }}</h2>
                        </div>
                        <div class="choose-content">
                            <ul>
                                @foreach($choose->cho_type as $type)
                                    <li>
                                        <span>{{ $type->id }}<i class="{{ $type->cho_icon }}"></i></span>
                                        <h3>{{ $type->cho_title }}</h3>
                                        <p>{{ $type->cho_detail }}</p>
                                    </li>
                                @endforeach
                                <!-- <li class="ml">
                                    <span>02 <i class="icofont-live-support"></i></span>
                                    <h3>Quality and expertise: </h3>
                                    <p>Our perfectionism and aspiration for quality motivates us to hone our expertise
                                        on daily basis, and is the reason behind our choice of technology.</p>
                                </li>
                                <li class="ml-25">
                                    <span>03 <i class="icofont-live-messenger"></i></span>
                                    <h3>Live Support</h3>
                                    <p>Our support is avaialble 24X7 for our customers.</p>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pb-30">
                    <div class="about-section-item about-item-image text-center">
                        @if($choose->cho_main_pic != '')
                            <img src="{{ asset('uploads/admin/choose/'.$choose->cho_main_pic) }}"
                                alt="shape">
                        @else
                            <img src="{{ asset('contents/website') }}/assets/images/choose.png"
                                alt="shape">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-70 bg-off-white color-black">
        <div class="container">
            <div class="section-title section-title-lg">
                <small>{{ $aiservice->ai_main_subtitle }}</small>
                <h2>{{ $aiservice->ai_main_title }}</h2>
            </div>
            <div class="row">
                <div class="col-lg-11">
                    <ul class="orange-slider__list slider aiservices">
                        @foreach($aiservice->ai_type as $type)
                            <li class="orange-slider__list-item">
                                <div class="orange-slider__item">
                                    <div class="orange-slider__title"> {{ $type->ai_title }}</div>
                                </div>
                            </li>
                        @endforeach
                        <!-- <li class="orange-slider__list-item">
                            <div class="orange-slider__item">
                                <div class="orange-slider__title"> Advance customer experience</div>
                            </div>
                        </li>

                        <li class="orange-slider__list-item">
                            <div class="orange-slider__item">
                                <div class="orange-slider__title"> Mitigate business risks</div>
                            </div>
                        </li>
                        <li class="orange-slider__list-item">
                            <div class="orange-slider__item">
                                <div class="orange-slider__title"> Simplify data management</div>
                            </div>
                        </li>
                        <li class="orange-slider__list-item">
                            <div class="orange-slider__item">
                                <div class="orange-slider__title"> Increase revenues</div>
                            </div>
                        </li>
                        <li class="orange-slider__list-item">
                            <div class="orange-slider__item">
                                <div class="orange-slider__title"> Increase revenues</div>
                            </div>
                        </li>
                        <li class="orange-slider__list-item">
                            <div class="orange-slider__item">
                                <div class="orange-slider__title"> Increase revenues</div>
                            </div>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--
        <section class="about-section pt-100 pb-70" id="technologies">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 pb-30">
                        <div class="about-section-item about-item-details">
                            <div class="section-title section-title-left text-start">
                                <h2>Technologies That Enable and Assist Wide Adoption of AI</h2>
                            </div>
                            <div class="about-content">
                                <p>The development of artificial intelligence solutions for optimizing business processes needs amalgamating AI capabilities with the leading-edge and rapidly emerging industry-level technologies. At USM, we have a group highly experienced tech professionals who acquired best practices on embedding varied AI technologies to come with innovative and intelligent solutions.</p>
                                <p>The development of artificial intelligence solutions for optimizing business processes needs amalgamating AI capabilities with the leading-edge and rapidly emerging industry-level technologies. At USM, we have a group highly experienced tech professionals who acquired best practices on embedding varied AI technologies to come with innovative and intelligent solutions.</p>
                                <a href="about-us.html" class="btn main-btn mt-2">Lets Discuss Your Project!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pb-30">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="technology-item">
                                    <div class="techlo-img">
                                        <img src="{{ asset('contents/website') }}/assets/images/python-1.webp" alt="Python">
                                    </div>
                                    <h5>Python</h5>
                                    <p>Our technologists have proven experience in developing Artificial Intelligence Apps using python.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="technology-item">
                                    <div class="techlo-img">
                                        <img src="{{ asset('contents/website') }}/assets/images/python-1.webp" alt="Python">
                                    </div>
                                    <h5>Python</h5>
                                    <p>Our technologists have proven experience in developing Artificial Intelligence Apps using python.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="technology-item">
                                    <div class="techlo-img">
                                        <img src="{{ asset('contents/website') }}/assets/images/python-1.webp" alt="Python">
                                    </div>
                                    <h5>Python</h5>
                                    <p>Our technologists have proven experience in developing Artificial Intelligence Apps using python.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="technology-item">
                                    <div class="techlo-img">
                                        <img src="{{ asset('contents/website') }}/assets/images/python-1.webp" alt="Python">
                                    </div>
                                    <h5>Python</h5>
                                    <p>Our technologists have proven experience in developing Artificial Intelligence Apps using python.</p>
                                </div>
                            </div>
                        </div>
                    </div>                   
                </div>
            </div>
        </section>
       -->

    <!-- <section class="testimonial-section p-tb-100 bg-off-white  position-relative" id="testimonial">
            <div class="section-inner-center-shape animation-d-none">
                 <img src="{{ asset('contents/website') }}/assets/images/round-shape.png" alt="shape">
            </div>
            <div class="container">
                <div class="section-title">
                    <small>Testimonials</small>
                    <h2>What Say Our Clients About Our Awesome Service</h2>
                </div>
                <div class="testimonial-carousel default-carousel owl-carousel owl-theme">
                    <div class="item">
                        <div class="testimonial-card">
                            <div class="testimonial-card-body">
                                <div class="testimonial-card-inner-header">
                                    <h3>Deltabel</h3>
                                    <div class="testimonial-quote">
                                        <i class="icofont-quote-left"></i>
                                    </div>
                                </div>
                                <p class="testimonial-para">Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin. Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin.</p>
                                <ul class="review-star-list">
                                    <li class="starred"><i class="icofont-star"></i></li>
                                    <li class="starred"><i class="icofont-star"></i></li>
                                    <li class="starred"><i class="icofont-star"></i></li>
                                    <li class="starred"><i class="icofont-star"></i></li>
                                    <li class="starred"><i class="icofont-star"></i></li>
                                </ul>
                            </div>
                            <div class="testimonial-card-info">
                                <div class="testimonial-card-info-thumb">
                                    <img src="{{ asset('contents/website') }}/assets/images/testimonial-1.jpg" alt="testimonial">
                                </div>
                                <div class="testimonial-card-info-text">
                                    <h3 class="testimonial-name">Johnson Mandel</h3>
                                    <p class="testimonial-address">Los Angel</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-card">
                            <div class="testimonial-card-body">
                                <div class="testimonial-card-inner-header">
                                    <h3>Pentham CX</h3>
                                    <div class="testimonial-quote">
                                        <i class="icofont-quote-left"></i>
                                    </div>
                                </div>
                                <p class="testimonial-para">Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin. Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin.</p>
                                <ul class="review-star-list">
                                    <li class="starred"><i class="icofont-star"></i></li>
                                    <li class="starred"><i class="icofont-star"></i></li>
                                    <li class="starred"><i class="icofont-star"></i></li>
                                    <li class="starred"><i class="icofont-star"></i></li>
                                    <li class="starred"><i class="icofont-star"></i></li>
                                </ul>
                            </div>
                            <div class="testimonial-card-info">
                                <div class="testimonial-card-info-thumb">
                                    <img src="{{ asset('contents/website') }}/assets/images/testimonial-2.jpg" alt="testimonial">
                                </div>
                                <div class="testimonial-card-info-text">
                                    <h3 class="testimonial-name">Bentham Rober</h3>
                                    <p class="testimonial-address">Bremen</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-card">
                            <div class="testimonial-card-body">
                                <div class="testimonial-card-inner-header">
                                    <h3>Floradex  TL</h3>
                                    <div class="testimonial-quote">
                                        <i class="icofont-quote-left"></i>
                                    </div>
                                </div>
                                <p class="testimonial-para">Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin. Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin.</p>
                                <ul class="review-star-list">
                                    <li class="starred"><i class="icofont-star"></i></li>
                                    <li class="starred"><i class="icofont-star"></i></li>
                                    <li class="starred"><i class="icofont-star"></i></li>
                                    <li class="starred"><i class="icofont-star"></i></li>
                                    <li class="starred"><i class="icofont-star"></i></li>
                                </ul>
                            </div>
                            <div class="testimonial-card-info">
                                <div class="testimonial-card-info-thumb">
                                    <img src="{{ asset('contents/website') }}/assets/images/testimonial-3.jpg" alt="testimonial">
                                </div>
                                <div class="testimonial-card-info-text">
                                    <h3 class="testimonial-name">Thomas Albin</h3>
                                    <p class="testimonial-address">New York</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-card">
                            <div class="testimonial-card-body">
                                <div class="testimonial-card-inner-header">
                                    <h3>Fantabulous</h3>
                                    <div class="testimonial-quote">
                                        <i class="icofont-quote-left"></i>
                                    </div>
                                </div>
                                <p class="testimonial-para">Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin. Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin.</p>
                                <ul class="review-star-list">
                                    <li class="starred"><i class="icofont-star"></i></li>
                                    <li class="starred"><i class="icofont-star"></i></li>
                                    <li class="starred"><i class="icofont-star"></i></li>
                                    <li class="starred"><i class="icofont-star"></i></li>
                                    <li class="starred"><i class="icofont-star"></i></li>
                                </ul>
                            </div>
                            <div class="testimonial-card-info">
                                <div class="testimonial-card-info-thumb">
                                    <img src="{{ asset('contents/website') }}/assets/images/testimonial-4.jpg" alt="testimonial">
                                </div>
                                <div class="testimonial-card-info-text">
                                    <h3 class="testimonial-name">John Doe</h3>
                                    <p class="testimonial-address">Los Angel</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->


    <!-- portfolio banner -->


    <section class="portfolio_banner bg-off-white pb-70" id="portfolio">
        <div class="container">
            <div class="section-title section-title-lg ">
                <small class="text_white">{{ $portfolio->port_sub_1 }}</small>
                <h1 class="text_white">{{ $portfolio->port_title }}</h1>
                <small class="text_white">{{ $portfolio->port_sub_2 }}</small>
            </div>
        </div>
    </section>
    <!-- portfolio -->
    <section class="bg-off-white">
        <div class="container">
            <div class="row">
                <div class="portfolio_tabs">
                    <button class="btn btn-default filter-button active" data-filter="all">All</button>
                    @foreach($filtertype as $button)
                        <button class="btn btn-default filter-button"
                            data-filter="{{ $button->fil_type_btn }}">{{ $button->fil_type_title }}</button>
                    @endforeach
                    <!-- <button class="btn btn-default filter-button" data-filter="website">Website, ERP and CRM</button>
                    <button class="btn btn-default filter-button" data-filter="website">UX/UI Design</button>
                    <button class="btn btn-default filter-button" data-filter="nlp">NLP (Chatbot)</button>
                    <button class="btn btn-default filter-button" data-filter="digital-marketing">Digital
                        Marketing</button> -->
                </div>
                <!-- e blood connect+ -->
                @foreach($filter as $filter)
                    <div
                        class="col-12 col-md-6 col-lg-4 pb-30 gallery_product filter {{ $filter->category->fil_type_btn }}">
                        <div class="service-card project_card blood_connect_home portfolio_card">
                            <div class="card_hoverable">
                                <h2 class="project_title">{{ $filter->fil_title }}</h2>
                                <p>{{ $filter->fil_detail }}</p>

                            </div>
                            <a href="ehr-bloodconnect.html" class="cover"></a>
                        </div>
                    </div>
                @endforeach
                <!-- My role -->
                <div class="col-12 col-md-6 col-lg-4 pb-30 gallery_product filter website">
                    <div class="service-card project_card myrole_home portfolio_card">
                        <div class="card_hoverable">
                            <h2 class="project_title">My Role</h2>
                            <p>Video Create and Upload, Video like and share, Video Filters, Slideshow maker, Friend
                                Follow
                                and Following, Hall of Fame. </p>
                            <ul>
                                <li class="project_type">
                                    <span>Android</span>
                                </li>
                                <li class="project_type">
                                    <span>iOS</span>
                                </li>
                                <li class="project_type">
                                    <span>Website</span>
                                </li>
                            </ul>
                        </div>
                        <a href="my-role.html" class="cover"></a>
                    </div>
                </div>
                <!-- chatbot -->
                <div class="col-12 col-md-6 col-lg-4 pb-30 gallery_product filter app">
                    <div class="service-card project_card chatbot_home portfolio_card">

                        <div class="card_hoverable">
                            <h2 class="project_title">Dr. Medical Assistant chatbot</h2>
                            <p>A Dr. Medical Assistant chatbot is an advanced application of artificial intelligence in
                                the
                                healthcare field. This chatbot is designed to interact with patients,....</p>
                            <ul>
                                <li class="project_type">
                                    <span>Android</span>
                                </li>
                                <!--  <li class="project_type">
                                <span>iOS</span>
                            </li> -->
                                <li class="project_type">
                                    <span>Website</span>
                                </li>
                            </ul>
                        </div>
                        <a href="chatbot.html" class="cover"></a>
                    </div>
                </div>
                <!-- ttrox -->
                <div class="col-12 col-md-6 col-lg-4 pb-30 gallery_product filter website">
                    <div class="service-card project_card ttrox_home portfolio_card">


                        <div class="card_hoverable">
                            <h2 class="project_title">TechTrox</h2>
                            <p>TechTrox is an innovative ecommerce web portal that caters to the needs of gaming
                                enthusiasts
                                and mobile technology enthusiasts alike.... </p>
                            <ul>
                                <!-- <li class="project_type">
                                    <span>Android</span>
                                </li>
                                <li class="project_type">
                                    <span>iOS</span>
                                </li> -->
                                <li class="project_type_home">
                                    <span>Website</span>
                                </li>
                            </ul>
                        </div>
                        <a href="ttrox.html" class="cover"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- === PortFolio End === -->


    <!-- === Ai Driven Software Start === -->
    <section class="pb-70">
        <div class="container">
            <div class="section-title section-title-lg">
                <small>{{ $process->pro_main_subtitle }}</small>
                <h2>{{ $process->pro_main_title }}</h2>
            </div>
            <div class="row">
                <div class="col-lg-11 mx-auto">
                    <ul class="section-process-list">
                        @foreach($process->pro_type as $type)
                            <li class="section-process-list__list-item makeThisMove">
                                <div class="section-process-list__item">
                                    <div class="section-process-list__title">{{ $type->pro_title }}</div>
                                    <div class="section-process-list__content">
                                        <ul>
                                            <li>{{ $type->pro_elem1 }}</li>
                                            <li>{{ $type->pro_elem2 }}</li>
                                            <li>{{ $type->pro_elem3 }}</li>
                                            <li>{{ $type->pro_elem4 }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                        <!-- <li class="section-process-list__list-item makeThisMove">
                            <div class="section-process-list__item">
                                <div class="section-process-list__title">Project Setup</div>
                                <div class="section-process-list__content">
                                    <ul>
                                        <li>Select the engagement model</li>
                                        <li>Build the core team</li>
                                        <li>Prepare a roadmap for the project</li>
                                        <li>Prepare tech documents</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="section-process-list__list-item">
                            <div class="section-process-list__item">
                                <div class="section-process-list__title">Development</div>
                                <div class="section-process-list__content">
                                    <ul>
                                        <li>Use Agile development methodology</li>
                                        <li>Progress reporting on each iteration</li>
                                        <li>Perform internal and release testing</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="section-process-list__list-item">
                            <div class="section-process-list__item">
                                <div class="section-process-list__title">Live Release</div>
                                <div class="section-process-list__content">
                                    <ul>
                                        <li>Final testing of the complete system</li>
                                        <li>Solve possible issues</li>
                                        <li>Live release after approval</li>
                                        <li>Collect feedback</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="section-process-list__list-item">
                            <div class="section-process-list__item">
                                <div class="section-process-list__title">Support</div>
                                <div class="section-process-list__content">
                                    <ul>
                                        <li>Knowledge transfer</li>
                                        <li>Perform continuous server monitoring</li>
                                        <li>Allocate team members to fix bugs and make improvements</li>
                                    </ul>
                                </div>
                            </div>
                        </li> -->

                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="news-section pb-70 bg-off-white color-black" id="contact">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-lg-6 pb-30">
                    <div class="about-section-item about-item-image text-center">

                        @if($gettouch->get_pic != '')
                            <img src="{{ asset('uploads/admin/contact/'.$gettouch->get_pic) }}"
                                alt="shape">
                        @else
                            <img src="{{ asset('contents/website') }}/assets/images/contact.png"
                                alt="shape">
                        @endif

                    </div>
                </div>
                <div class="col-lg-6 pb-30">
                    <div class="about-section-item about-item-details">
                        <div class="section-title section-title-left text-start">
                            <small>{{ $gettouch->get_sub }}</small>
                            <h2>{{ $gettouch->get_title }}</h2>
                        </div>
                        <form method="post" action="{{ route ('contact_message.send') }}"
                            class="contact-form" id="contact-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <input name="name" type="text" class="form-control" placeholder="Name *">
                                    @error('name')
                                        <span class="invalid_msg" alert="role">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <input name="email" type="text" class="form-control" placeholder="Email *">
                                    @error('email')
                                        <span class="invalid_msg" alert="role">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <input name="phone" type="text" class="form-control" placeholder="Phone">
                                </div>
                                <div class="col-md-6">
                                    <input name="Subject" type="text" class="form-control" placeholder="Subject">
                                </div>
                                <div class="col-md-12">
                                    <textarea class="form-control contact-form__input_textarea" name="message"
                                        placeholder="Message">{{ old('message') }}</textarea>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn main-btn">
                                        Send Message
                                    </button>
                                    <div class="col-md-7 mt-16">
                                        @if(Session::has('success'))
                                            <span
                                                class="success_msg">{{ Session::get('success') }}
                                            </span>
                                        @endif
                                    </div>

                                </div>
                            </div>
                            <div class="form-response"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News-section -->
    <!-- Newsletter-section -->


    <!-- Newsletter-section -->
    <!-- Footer -->
    <footer class="feature-section pb-30 color-white">
        <div class=" footer-upper pt-100 position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="footer-content-item">
                            <div class="footer-logo">
                                <a href="{{ route ('/') }}">
                                    @if($basic->basic_Flogo != '')
                                        <img src="{{ asset('uploads/admin/basic/'.$basic->basic_Flogo) }}"
                                            alt="shape">
                                    @else
                                        <img src="{{ asset('contents/website') }}/assets/images/flogo.png"
                                            alt="logo">
                                    @endif

                                </a>
                            </div>
                            <div class="footer-details color-white">
                                <p>{{ $basic->basic_description }}.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="footer-content-list footer-content-item desk-pad-left-70">
                            <div class="footer-content-title">
                                <h3>Industry</h3>
                            </div>
                            <ul class="footer-details footer-list">
                                <li>Ed-Tech</li>

                                <li>E-Health</li>
                                <li>Banking</li>
                                <li>Manufacturing Automation</a></li>
                                <li>E-Commerce</li>
                                <li>Business Analytics</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="footer-content-list footer-content-item desk-pad-left-70">
                            <div class="footer-content-title">
                                <h3>Services</h3>
                            </div>
                            <ul class="footer-details footer-list">
                                <li>Computer Vision & Deep Learning</li>
                                <li>Predictive Analytic</li>
                                <li>Naltural Language Processing</li>
                                <li>Business Intelligence</li>
                                <li>Data Mining & Warehouse</li>
                                <li>Big Data Solution</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 ">
                        <div class="footer-content-list footer-content-item desk-pad-left-70">
                            <div class="footer-content-title">
                                <h3>Contact</h3>
                            </div>
                            <div class="footer-details color-white footer-address">
                                <div class="footer-address-item">
                                    <div class="footer-address-text">
                                        <h4>Phone:</h4>
                                        <p>@if($contact->cu_number1)
                                            <i class="icofont-headphone"></i>
                                            <a href="tel:{{ $contact->cu_number1 }}">{{ $contact->cu_number1 }}</a>
                                            @endif
                                        </p>

                                        <p>@if($contact->cu_number2)
                                            <i class="icofont-headphone"></i>
                                            <a href="tel:{{ $contact->cu_number2 }}">{{ $contact->cu_number2 }}</a>
                                            @endif
                                        </p>

                                        <p>@if($contact->cu_number3)
                                            <i class="icofont-headphone"></i>
                                            <a href="tel:{{ $contact->cu_number3 }}">{{ $contact->cu_number3 }}</a>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="footer-address-item">
                                    <div class="footer-address-text">
                                        <h4>Email:</h4>
                                        <p>
                                            @if($contact->cu_email1)
                                                <i class="icofont-headphone"></i>
                                                <a
                                                    href="https://templates.envytheme.com/cdn-cgi/l/email-protection#84edeae2ebc4e1f6f1e0e1fcaae7ebe9">{{ $contact->cu_email1 }}</a>
                                            @endif</p>

                                            @if($contact->cu_email2)
                                                <i class="icofont-headphone"></i>
                                                <a
                                                    href="https://templates.envytheme.com/cdn-cgi/l/email-protection#84edeae2ebc4e1f6f1e0e1fcaae7ebe9">{{ $contact->cu_email2 }}</a>
                                            @endif</p>

                                            @if($contact->cu_email3)
                                                <i class="icofont-headphone"></i>
                                                <a
                                                    href="https://templates.envytheme.com/cdn-cgi/l/email-protection#84edeae2ebc4e1f6f1e0e1fcaae7ebe9">{{ $contact->cu_email3 }}</a>
                                            @endif</p>
                                    </div>
                                </div>
                                <div class="footer-address-item">
                                    <div class="footer-address-text">
                                        <h4>Address:</h4>
                                        @if($contact->cu_address1)
                                            <p>{{ $contact->cu_address1 }}</p>
                                        @endif

                                        @if($contact->cu_address2)
                                            <p>{{ $contact->cu_address2 }}</p>
                                        @endif

                                        @if($contact->cu_address3)
                                            <p>{{ $contact->cu_address2 }}</p>
                                        @endif

                                        @if($contact->cu_address4)
                                            <p>{{ $contact->cu_address2 }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-lower bg-blue position-relative">
            <div class="container">
                <div class="footer-copyright-text footer-copyright-text-white color-white">
                    <p>{{ $basic->basic_copy }} </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer -->

    <!-- Scroll-top -->
    <div class="scroll-top" id="scrolltop">
        <div class="scroll-top-inner">
            <i class="icofont-long-arrow-up"></i>
        </div>
    </div>
    <!-- Scroll-top -->

    <!-- Topbar-side-modal -->
    <div class="side-modal-wrapper">
        <div class="side-modal">
            <div class="side-modal-header">
                <div class="side-modal-logo">
                    <a href="{{ route ('/') }}"><img
                            src="{{ asset('contents/website') }}/assets/images/logo.png"
                            alt="logo"></a>
                </div>
                <div class="side-modal-close">
                    <i class="icofont-close"></i>
                </div>
            </div>
            <div class="side-modal-body">
                <div class="sidebar-info-content">
                    <h3>Contact Us</h3>
                    <div class="sidebar-info-list">
                        <div class="sidebar-info-list-item">
                            <i class="icofont-headphone"></i>
                            <a href="tel:00321-654-98">+31 687 857 915
                            </a>
                        </div>
                        <div class="sidebar-info-list-item">
                            <i class="icofont-ui-message"></i>
                            <a
                                href="https://templates.envytheme.com/cdn-cgi/l/email-protection#e28b8c848da287909786879acc818d8f"><span
                                    class="__cf_email__"
                                    data-cfemail="a3cacdc5cce3c6d1d6c7c6db8dc0ccce">[email&#160;protected]</span></a>
                        </div>
                        <div class="sidebar-info-list-item">
                            <i class="icofont-paper-plane"></i>
                            <a href="#">Request For Demo</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Topbar-side-modal -->

    <!-- Search-overlay -->
    <div class="search-overlay">
        <div class="search-close">
            <i class="icofont-close"></i>
        </div>
        <div class="search-form-area">
            <div class="search-area-logo">
                <a href="{{ route ('/') }}">
                    <img src="{{ asset('contents/website') }}/assets/images/logo-white.png"
                        alt="logo">
                </a>
            </div>
            <form>
                <div class="form-group search-form-group">
                    <input type="text" placeholder="Search..." class="form-control" autofocus="autofocus">
                    <button>
                        <i class="icofont-search-1"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- Search-overlay -->


    <!-- essential js -->
    <script src="{{ asset('contents/website') }}/assets/js/jquery.min.js"></script>
    <script src="{{ asset('contents/website') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('contents/website') }}/assets/js/owl.carousel.min.js"></script>
    <script src="{{ asset('contents/website') }}/assets/js/slick.js"></script>
    <!-- <script src="{{ asset('contents/website') }}/assets/js/jquery.meanmenu.min.js"></script> -->
    <script src="{{ asset('contents/website') }}/assets/js/script.js"></script>
    <script src="{{ asset('contents/website') }}/assets/js/custom.js"></script>

</body>

<!-- Mirrored from tekseers.com/{{ route ('/') }} by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Sep 2023 13:00:24 GMT -->

</html>
