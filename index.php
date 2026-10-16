<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './layout/seo.php'; ?>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/styling/style.css?v=divisions9">

    <link rel="stylesheet" href="./assets/slick-slider/slick/slick.css">
</head>

<body>
    <?php include './layout/header.php'; ?>

    <!-- =========================
         HERO SECTION
    ========================== -->

    <section class="hero-section home-page-hero">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-7">
                    <h1 class="hero-title">
                        TRUSTED <span>INDUSTRIAL &
                            BUSINESS </span>SOLUTIONS
                    </h1>

                    <p class="hero-text">
                        Serving industries worldwide with textile chemicals,
                        automation, energy, security and workplace solutions —
                        quality partners you can rely on.
                    </p>

                    <div class="hero-buttons">

                        <a href="./contact-us.php" class="btn btn-warning text-white">
                            REQUEST A QUOTE
                            <i class="fa fa-paper-plane"></i>
                        </a>

                        <a href="#business-divisions" class="btn btn-outline-light">
                            EXPLORE DIVISIONS
                            <i class="fal fa-arrow-right"></i>
                        </a>

                    </div>

                    <div class="hero-features">

                        <div class="feature-item">
                            <i class="fal fa-award"></i>
                            International <br> Standards
                        </div>

                        <div class="feature-item">
                            <i class="fal fa-globe"></i>
                            Global Supply <br> Network
                        </div>

                        <div class="feature-item">
                            <i class="fal fa-lightbulb"></i>
                            Technical <br> Expertise
                        </div>

                        <div class="feature-item">
                            <i class="fal fa-clock"></i>
                            On-Time <br> Delivery
                        </div>
                        <div class="feature-item">
                            <i class="fal fa-handshake"></i>
                            Trusted Industry <br> Partner
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================
         BUSINESS DIVISIONS
    ========================== -->

    <section class="business-divisions py-5">

        <div class="container">

            <div class="section-heading text-center mb-5" id="business-divisions">
                <h2>OUR BUSINESS DIVISIONS</h2>
                <div class="seprator"></div>
                <p class="divisions-intro">
                    Eight specialised divisions delivering industrial excellence
                    and business solutions across global markets.
                </p>
            </div>

            <div class="row g-3 g-md-4 divisions-grid">

                <div class="col-12 col-md-6 col-lg-3">
                    <article class="division-card">
                        <div class="division-media">
                            <img src="./assets/images/divisions/textile-dyes-and-chemicals.jpg" class="img-fluid" alt="Textile Chemicals">
                        </div>
                        <div class="division-content">
                            <div class="icon orange" aria-hidden="true">
                                <i class="fa fa-flask"></i>
                            </div>
                            <h5>Textile Chemicals</h5>
                            <ul>
                                <li><a href="./textile-dyes-and-chemicals.php">Textile Dyes &amp; Chemicals</a></li>
                                <li><a href="./masterbatch.php">Masterbatch</a></li>
                                <li><a href="./veechem-industries.php">Veechem Industries Pvt. Ltd.</a></li>
                            </ul>
                        </div>
                    </article>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <article class="division-card">
                        <div class="division-media">
                            <img src="./assets/images/divisions/office-solutions.jpg" class="img-fluid" alt="Office Solutions">
                        </div>
                        <div class="division-content">
                            <div class="icon cyan" aria-hidden="true">
                                <i class="fa fa-phone-office"></i>
                            </div>
                            <h5>Office Solutions</h5>
                            <ul>
                                <li><a href="./office-supplies.php">Office Supplies</a></li>
                                <li><a href="./office-furniture.php">Office Furniture</a></li>
                            </ul>
                        </div>
                    </article>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <article class="division-card">
                        <div class="division-media">
                            <img src="./assets/images/divisions/industrial-systems.jpg" class="img-fluid" alt="Industrial Systems">
                        </div>
                        <div class="division-content">
                            <div class="icon blue" aria-hidden="true">
                                <i class="fa fa-robot"></i>
                            </div>
                            <h5>Industrial Systems</h5>
                            <ul>
                                <li><a href="./industrial-automation-division.php">Industrial Automation Division</a></li>
                                <li><a href="./industrial-air-compressor.php">Industrial Air Compressors</a></li>
                            </ul>
                        </div>
                    </article>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <article class="division-card">
                        <div class="division-media">
                            <img src="./assets/images/divisions/consumer-products.jpg" class="img-fluid" alt="Consumer Products">
                        </div>
                        <div class="division-content">
                            <div class="icon red" aria-hidden="true">
                                <i class="fa fa-candy-cane"></i>
                            </div>
                            <h5>Consumer Products</h5>
                            <ul>
                                <li><a href="./confectionery.php">Confectionery</a></li>
                            </ul>
                        </div>
                    </article>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <article class="division-card">
                        <div class="division-media">
                            <img src="./assets/images/divisions/energy-solutions.jpg" class="img-fluid" alt="Energy Solutions">
                        </div>
                        <div class="division-content">
                            <div class="icon green" aria-hidden="true">
                                <i class="fa fa-bolt"></i>
                            </div>
                            <h5>Energy Solutions</h5>
                            <ul>
                                <li><a href="./energy-solutions.php">Energy Solutions</a></li>
                            </ul>
                        </div>
                    </article>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <article class="division-card">
                        <div class="division-media">
                            <img src="./assets/images/divisions/security-solutions.jpg" class="img-fluid" alt="Security Solutions">
                        </div>
                        <div class="division-content">
                            <div class="icon purple" aria-hidden="true">
                                <i class="fa fa-shield-check"></i>
                            </div>
                            <h5>Security Solutions</h5>
                            <ul>
                                <li><a href="./security-solution.php">Security Solutions</a></li>
                            </ul>
                        </div>
                    </article>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <article class="division-card">
                        <div class="division-media">
                            <img src="./assets/images/divisions/printing-solutions.jpg" class="img-fluid" alt="Printing Solutions">
                        </div>
                        <div class="division-content">
                            <div class="icon pink" aria-hidden="true">
                                <i class="fa fa-print"></i>
                            </div>
                            <h5>Printing Solutions</h5>
                            <ul>
                                <li><a href="./industrial-machinery.php">Printing Machines</a></li>
                            </ul>
                        </div>
                    </article>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <article class="division-card">
                        <div class="division-media">
                            <img src="./assets/images/divisions/infrastructure-solutions.jpg" class="img-fluid" alt="Infrastructure Solutions">
                        </div>
                        <div class="division-content">
                            <div class="icon orange" aria-hidden="true">
                                <i class="fa fa-warehouse"></i>
                            </div>
                            <h5>Infrastructure Solutions</h5>
                            <ul>
                                <li><a href="./warehousing-solutions.php">Warehouse Solutions</a></li>
                            </ul>
                        </div>
                    </article>
                </div>

            </div>

        </div>

    </section>


    <!-- =========================
         WHY CHOOSE US
    ========================== -->

    <section class="why-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="choose-text">
                        <span class="section-subtitle">
                            WHY CHOOSE VAWDA
                        </span>
                        <h2 class="section-title">
                            A Trusted Partner Across Industries
                        </h2>
                        <p class="text-muted mt-3">
                            Since 1984, we have delivered quality products and technical support
                            to manufacturers and businesses worldwide — with integrity, innovation
                            and a commitment to long-term partnerships.
                        </p>
                        <div class="hero-buttons">
                            <a href="./about-us.php" class="btn btn-outline-light">
                                ABOUT US <i class="fal fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row g-4">
                        <div class="col-6 col-md-6 col-lg-3 feature-card-box">
                            <div class="feature-card">
                                <i class="fa fa-award"></i>
                                <h5>Premium <br> Quality</h5>
                                <p>
                                    Products aligned with global quality standards
                                </p>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-3 feature-card-box">
                            <div class="feature-card">
                                <i class="fa fa-network-wired"></i>
                                <h5>Reliable <br> Supply Chain</h5>
                                <p>
                                    Consistent, on-time delivery worldwide
                                </p>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-3 feature-card-box">
                            <div class="feature-card">
                                <i class="fa fa-screwdriver"></i>
                                <h5>Expert <br> Support</h5>
                                <p>
                                    Technical guidance at every stage
                                </p>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-3 feature-card-box">
                            <div class="feature-card">
                                <i class="fa fa-users"></i>
                                <h5>Client-Focused <br> Service</h5>
                                <p>
                                    Long-term partnerships built on trust
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================
         FAV GROUP VIDEO
    ========================== -->

    <section class="fav-video-section py-5" id="fav-group-video">
        <div class="container">
            <div class="section-heading text-center mb-4">
                <h2>FAV GROUP VIDEO</h2>
                <div class="seprator"></div>
                <p class="fav-video-intro">
                    Discover how FAV Group delivers industrial and business solutions worldwide.
                </p>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8">
                    <div class="fav-video-frame">
                        <video
                            id="fav-group-video-player"
                            autoplay
                            muted
                            loop
                            playsinline
                            controls
                            preload="auto"
                            poster="./assets/images/home-page/why-we-choose-us-background.jpeg"
                            aria-label="FAV Group company video">
                            <source src="./assets/images/home-page/F%20A%20V%20VIDEO.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================
         COUNTER SECTION
    ========================== -->

    <section class="counter-section">
        <div class="container">
            <div class="counter-box-wrapper">
                <div class="row">
                    <div class="col-lg col-md-4 col-6">
                        <div class="counter-box">
                            <i class="fal fa-building"></i>
                            <div class="counter-text">
                                <h3 class="counter" data-count="10">0+</h3>
                                <p>Business Divisions</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg col-md-4 col-6">
                        <div class="counter-box">
                            <i class="fal fa-box-open"></i>
                            <div class="counter-text">
                                <h3 class="counter" data-count="500">0+</h3>
                                <p>Products</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg col-md-4 col-6">
                        <div class="counter-box">
                            <i class="fal fa-users"></i>
                            <div class="counter-text">
                                <h3 class="counter" data-count="1000">0+</h3>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg col-md-4 col-6">
                        <div class="counter-box">
                            <i class="fal fa-stopwatch"></i>
                            <div class="counter-text">
                                <h3 class="counter" data-count="20">0+</h3>
                                <p>Years of Experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================
     TRUSTED PARTNERS
========================== -->

    <section class="partners-section pt-5 pb-2">

        <div class="container">
            <div class="section-heading text-center mb-4">
                <h2>OUR GLOBAL PARTNERS</h2>
                <div class="seprator"></div>
            </div>
            <div class="row align-items-center justify-content-center g-4">
                <div class="trust-logo-slider">
                    <div class="trust-logo-wrapper">

                        <!-- first set  -->
                        <div class="trust-logo"><img src="./assets/images/home-page/partners/siemens.svg" alt="Siemens" class="partner-logo"></div>
                        <div class="trust-logo"><img src="./assets/images/home-page/partners/schneider.svg" alt="Schneider Electric" class="partner-logo"></div>
                        <div class="trust-logo"><img src="./assets/images/home-page/partners/delixi.svg" alt="Delixi" class="partner-logo"></div>
                        <div class="trust-logo"><img src="./assets/images/home-page/partners/everlight.svg" alt="Everlight" class="partner-logo"></div>
                        <div class="trust-logo"><img src="./assets/images/home-page/partners/jintex.svg" alt="Jintex" class="partner-logo"></div>
                        <div class="trust-logo"><img src="./assets/images/home-page/partners/favianair.svg" alt="Favianair" class="partner-logo"></div>
                        <div class="trust-logo"><img src="./assets/images/home-page/partners/gti.svg" alt="GTI" class="partner-logo"></div>
                        <div class="trust-logo"><img src="./assets/images/home-page/partners/clt.svg" alt="CLT" class="partner-logo"></div>
                        <div class="trust-logo"><img src="./assets/images/home-page/partners/c-d.svg" alt="C&amp;D" class="partner-logo"></div>
                        <div class="trust-logo"><img src="./assets/images/home-page/partners/salipt.svg" alt="Salipt" class="partner-logo"></div>
                        <div class="trust-logo"><img src="./assets/images/home-page/partners/jitat.svg" alt="Jitat" class="partner-logo"></div>
                        <div class="trust-logo"><img src="./assets/images/home-page/partners/fyi.svg" alt="FYI" class="partner-logo"></div>
                        <div class="trust-logo"><img src="./assets/images/home-page/partners/soalr.svg" alt="Solar" class="partner-logo"></div>
                        <!-- second set  -->
                        <div class="trust-logo"><img src="./assets/images/home-page/partners/siemens.svg" alt="Siemens" class="partner-logo"></div>
                        <div class="trust-logo"><img src="./assets/images/home-page/partners/schneider.svg" alt="Schneider Electric" class="partner-logo"></div>
                        <div class="trust-logo"><img src="./assets/images/home-page/partners/delixi.svg" alt="Delixi" class="partner-logo"></div>
                        <div class="trust-logo"><img src="./assets/images/home-page/partners/everlight.svg" alt="Everlight" class="partner-logo"></div>
                        <div class="trust-logo"><img src="./assets/images/home-page/partners/jintex.svg" alt="Jintex" class="partner-logo"></div>
                        <div class="trust-logo"><img src="./assets/images/home-page/partners/favianair.svg" alt="Favianair" class="partner-logo"></div>
                        <div class="trust-logo"><img src="./assets/images/home-page/partners/gti.svg" alt="GTI" class="partner-logo"></div>
                        <div class="trust-logo"><img src="./assets/images/home-page/partners/clt.svg" alt="CLT" class="partner-logo"></div>
                        <div class="trust-logo"><img src="./assets/images/home-page/partners/c-d.svg" alt="C&amp;D" class="partner-logo"></div>
                        <div class="trust-logo"><img src="./assets/images/home-page/partners/salipt.svg" alt="Salipt" class="partner-logo"></div>
                        <div class="trust-logo"><img src="./assets/images/home-page/partners/jitat.svg" alt="Jitat" class="partner-logo"></div>
                        <div class="trust-logo"><img src="./assets/images/home-page/partners/fyi.svg" alt="FYI" class="partner-logo"></div>
                        <div class="trust-logo"><img src="./assets/images/home-page/partners/soalr.svg" alt="Solar" class="partner-logo"></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- =========================
     FEATURED PRODUCT & SOLUTIONS
========================== -->

    <section class="featured-section pt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading text-center mb-4">
                        <h2>FEATURED PRODUCTS & SOLUTIONS</h2>
                        <div class="seprator"></div>
                    </div>
                    <div class="feature-product-slider">
                        <div class="feature-product-box">
                            <a href="./textile-dyes-and-chemicals.php">
                                <div class="feature-img">
                                    <img src="./assets/images/products-and-solutions/textile-dyes-and-chemicals/textile-dyes-and-chemicals.svg" alt="">
                                </div>
                                <div class="feature-title">
                                    <h4>Textile Dyes & Chemicals</h4>
                                </div>
                            </a>
                        </div>
                        <div class="feature-product-box">
                            <a href="./masterbatch.php">
                                <div class="feature-img">
                                    <img src="./assets/images/products-and-solutions/masterbatch/masterbatch.svg" alt="">
                                </div>
                                <div class="feature-title">
                                    <h4>Masterbatch</h4>
                                </div>
                            </a>
                        </div>
                        <div class="feature-product-box">
                            <a href="./veechem-industries.php">
                                <div class="feature-img">
                                    <img src="./assets/images/products-and-solutions/pigment-powders-and-emulsions/pigment-powder-and-emulsion.svg" alt="">
                                </div>
                                <div class="feature-title">
                                    <h4>Veechem Industries Pvt. Ltd.</h4>
                                </div>
                            </a>
                        </div>
                        <div class="feature-product-box">
                            <a href="./office-supplies.php">
                                <div class="feature-img">
                                    <img src="./assets/images/products-and-solutions/office-supplies/office-supplies.svg" alt="">
                                </div>
                                <div class="feature-title">
                                    <h4>Office Supplies</h4>
                                </div>
                            </a>
                        </div>
                        <div class="feature-product-box">
                            <a href="./industrial-automation-division.php">
                                <div class="feature-img">
                                    <img src="./assets/images/products-and-solutions/industrial-automation-division/industrial-automation-division.svg" alt="">
                                </div>
                                <div class="feature-title">
                                    <h4>Industrial Automation Division</h4>
                                </div>
                            </a>
                        </div>
                        <div class="feature-product-box">
                            <a href="./industrial-air-compressor.php">
                                <div class="feature-img">
                                    <img src="./assets/images/products-and-solutions/industrial-air-compressor/industrial-air-compressor.svg" alt="">
                                </div>
                                <div class="feature-title">
                                    <h4>Industrial Air Compressor</h4>
                                </div>
                            </a>
                        </div>
                        <div class="feature-product-box">
                            <a href="./confectionery.php">
                                <div class="feature-img">
                                    <img src="./assets/images/products-and-solutions/confectionery/confectionery.svg" alt="">
                                </div>
                                <div class="feature-title">
                                    <h4>Confectionery</h4>
                                </div>
                            </a>
                        </div>
                        <div class="feature-product-box">
                            <a href="./security-solution.php">
                                <div class="feature-img">
                                    <img src="./assets/images/products-and-solutions/security-solutions/security-solutions.svg" alt="">
                                </div>
                                <div class="feature-title">
                                    <h4>Security Solutions</h4>
                                </div>
                            </a>
                        </div>
                        <div class="feature-product-box">
                            <a href="./industrial-machinery.php">
                                <div class="feature-img">
                                    <img src="./assets/images/products-and-solutions/industrial-machinery/main-banner.svg" alt="">
                                </div>
                                <div class="feature-title">
                                    <h4>Printing Machines</h4>
                                </div>
                            </a>
                        </div>
                        <div class="feature-product-box">
                            <a href="./energy-solutions.php">
                                <div class="feature-img">
                                    <img src="./assets/images/products-and-solutions/energy-solutions/energy-solutions.svg" alt="">
                                </div>
                                <div class="feature-title">
                                    <h4>Energy Solutions</h4>
                                </div>
                            </a>
                        </div>
                        <div class="feature-product-box">
                            <a href="./office-furniture.php">
                                <div class="feature-img">
                                    <img src="./assets/images/products-and-solutions/office-furnitures/office-furnitures.svg" alt="">
                                </div>
                                <div class="feature-title">
                                    <h4>Office Furniture</h4>
                                </div>
                            </a>
                        </div>
                        <div class="feature-product-box">
                            <a href="./warehousing-solutions.php">
                                <div class="feature-img">
                                    <img src="./assets/images/products-and-solutions/warehousing-solutions/warehousing-solutions.svg" alt="">
                                </div>
                                <div class="feature-title">
                                    <h4>Warehousing Solutions</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================
     TESTIMONIALS
========================== -->

    <section class="testimonial-section py-5 bg-light">

        <div class="container">

            <div class="section-heading text-center mb-5">
                <h2>WHAT OUR CLIENTS SAY</h2>
                <div class="seprator"></div>
            </div>

            <div class="testimonial-slider">
                <div class="testimonial-card">
                    <i class="fa fa-quote-left quote-icon"></i>
                    <p>
                        Vawda has been a dependable partner for our
                        operations. Product quality and technical
                        support consistently meet international expectations.
                    </p>
                    <div class="client-info">
                        <img src="./assets/images/clients/client1.svg" alt="" class="client-img">
                        <div>
                            <h6>Ahmad Raza</h6>
                            <span>Operations Manager,</span>
                            <span>Textile Industry</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <i class="fa fa-quote-left quote-icon"></i>
                    <p>
                        From industrial automation to energy solutions,
                        everything under one roof. A professional team
                        with reliable service delivery.
                    </p>
                    <div class="client-info">
                        <img src="./assets/images/clients/client2.svg" alt="" class="client-img">
                        <div>
                            <h6>Sarah Khan</h6>
                            <span>Procurement Head,</span>
                            <span>Manufacturing Industry</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <i class="fa fa-quote-left quote-icon"></i>
                    <p>
                        Reliable, efficient and client-focused.
                        We value the consistency of their products
                        and after-sales support.
                    </p>
                    <div class="client-info">
                        <img src="./assets/images/clients/client3.svg" alt="" class="client-img">
                        <div>
                            <h6>Imran Sheikh</h6>
                            <span>General Manager,</span>
                            <span>Packaging Industry</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <i class="fa fa-quote-left quote-icon"></i>
                    <p>
                        Vawda has been a dependable partner for our
                        operations. Product quality and technical
                        support consistently meet international expectations.
                    </p>
                    <div class="client-info">
                        <img src="./assets/images/clients/client1.svg" alt="" class="client-img">
                        <div>
                            <h6>Ahmad Raza</h6>
                            <span>Operations Manager,</span>
                            <span>Textile Industry</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <i class="fa fa-quote-left quote-icon"></i>
                    <p>
                        From industrial automation to energy solutions,
                        everything under one roof. A professional team
                        with reliable service delivery.
                    </p>
                    <div class="client-info">
                        <img src="./assets/images/clients/client2.svg" alt="" class="client-img">
                        <div>
                            <h6>Sarah Khan</h6>
                            <span>Procurement Head,</span>
                            <span>Manufacturing Industry</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <i class="fa fa-quote-left quote-icon"></i>
                    <p>
                        Reliable, efficient and client-focused.
                        We value the consistency of their products
                        and after-sales support.
                    </p>
                    <div class="client-info">
                        <img src="./assets/images/clients/client3.svg" alt="" class="client-img">
                        <div>
                            <h6>Imran Sheikh</h6>
                            <span>General Manager,</span>
                            <span>Packaging Industry</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================
     CTA SECTION
========================== -->

    <section class="cta-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <h2>
                        Looking for the Right Solution
                        for Your Business?
                    </h2>
                    <p>
                        Speak with our specialists for tailored products
                        and technical guidance for your industry.
                    </p>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="hero-buttons">
                        <a href="./contact-us.php" class="btn btn-warning text-white">
                            REQUEST A QUOTE
                            <i class="fa fa-paper-plane"></i>
                        </a>
                        <a href="./contact-us.php" class="btn btn-outline-light">
                            CONTACT US
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- =========================
         FOOTER
    ========================== -->
    <?php include './layout/footer.php'; ?>
</body>
<script src="./assets/jquery/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="./assets/slick-slider/slick/slick.min.js"></script>
<script>
    $('.testimonial-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        prevArrow: false,
        nextArrow: false,
        responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    $('.feature-product-slider').slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        prevArrow: '<button type="button" class="slick-prev"><i class="fal fa-angle-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fal fa-angle-right"></i></button>',
        responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 550,
                settings: {
                    slidesToShow: 2
                }
            }
        ]
    });

    jQuery(document).ready(function ($) {

    function startCounters() {

        $('.counter').each(function () {

            var $this = $(this);

            if ($this.hasClass('counted')) {
                return;
            }

            var elementTop = $this.offset().top;
            var windowBottom = $(window).scrollTop() + $(window).height();

            if (windowBottom > elementTop + 50) {

                $this.addClass('counted');

                var target = parseInt($this.attr('data-count'));

                $({ countNum: 0 }).animate({
                    countNum: target
                }, {
                    duration: 2000,
                    easing: 'swing',

                    step: function () {
                        $this.text(Math.floor(this.countNum) + '+');
                    },

                    complete: function () {
                        $this.text(target + '+');
                    }
                });
            }
        });


        // Animate 24/7 text
        $('.counter-text').each(function () {

            var $this = $(this);

            if ($this.hasClass('counted')) {
                return;
            }

            var elementTop = $this.offset().top;
            var windowBottom = $(window).scrollTop() + $(window).height();

            if (windowBottom > elementTop + 50) {

                $this.addClass('counted');

                $this.css({
                    opacity: 0,
                    transform: 'translateY(20px)'
                });

                $this.animate({
                    opacity: 1
                }, 800);

                $this.css({
                    transform: 'translateY(0)',
                    transition: 'transform 0.8s ease'
                });
            }
        });

    }

    startCounters();

    $(window).on('scroll', function () {
        startCounters();
    });

    function scrollToAnchor(targetId) {
        var target = document.getElementById(targetId);
        if (!target) return false;
        var header = document.querySelector('.main-header');
        var headerOffset = header ? header.offsetHeight : 95;
        var top = target.getBoundingClientRect().top + window.pageYOffset - headerOffset - 12;
        window.scrollTo({ top: Math.max(0, top), behavior: 'smooth' });
        return true;
    }

    $(document).on('click', 'a[href="#business-divisions"]', function (e) {
        e.preventDefault();
        if (scrollToAnchor('business-divisions')) {
            history.pushState(null, '', '#business-divisions');
        }
    });

    if (window.location.hash === '#business-divisions') {
        setTimeout(function () {
            scrollToAnchor('business-divisions');
        }, 50);
    }

    var favVideo = document.getElementById('fav-group-video-player');
    if (favVideo) {
        favVideo.muted = true;
        var tryPlay = function () {
            var playPromise = favVideo.play();
            if (playPromise && typeof playPromise.catch === 'function') {
                playPromise.catch(function () {});
            }
        };
        tryPlay();
        favVideo.addEventListener('loadeddata', tryPlay);
        if ('IntersectionObserver' in window) {
            var videoObserver = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        tryPlay();
                    } else {
                        favVideo.pause();
                    }
                });
            }, { threshold: 0.35 });
            videoObserver.observe(favVideo);
        }
    }

});
</script>

</html>