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
    <link rel="stylesheet" href="./assets/styling/style.css?v=footer7">

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
                        COMPLETE <span>INDUSTRIAL &
                            BUSINESS </span>SOLUTIONS
                    </h1>

                    <p class="hero-text">
                        From industrial chemicals to automation,
                        energy and security — we deliver everything
                        your business needs to grow.
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
                            Premium Quality <br> Products
                        </div>

                        <div class="feature-item">
                            <i class="fal fa-truck-moving"></i>
                            Reliable Supply <br> Chain
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
                            <i class="fal fa-user"></i>
                            Customer First <br> Approach
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================
         BUSINESS DIVISIONS
    ========================== -->

    <section class="business-divisions py-5" id="business-divisions">

        <div class="container">

            <div class="section-heading text-center mb-5">
                <h2>OUR BUSINESS DIVISIONS</h2>
                <div class="seprator"></div>
            </div>

            <div class="row g-4">

                <!-- Card 1 -->

                <div class="col-lg-3 col-md-6 col-6">
                    <div class="division-card">
                        <img src="./assets/images/divisions/textile-dyes-and-chemicals.svg" class="img-fluid" alt="">
                        <div class="division-content">
                            <div class="icon orange">
                                <i class="fa fa-flask"></i>
                            </div>
                            <h5>TEXTILE CHEMICALS</h5>
                            <ul>
                                <li><a href="./textile-dyes-and-chemicals.php">Textile Dyes & Chemicals</a></li>
                                <li><a href="./masterbatch.php">Masterbatch</a></li>
                                <li><a href="./veechem-industries.php">Veechem Industries Pvt. Ltd.</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->

                <div class="col-lg-3 col-md-6 col-6">

                    <div class="division-card">

                        <img src="./assets/images/divisions/office-solutions.svg" class="img-fluid" alt="">

                        <div class="division-content">

                            <div class="icon cyan">
                                <i class="fa fa-phone-office"></i>
                            </div>

                            <h5>OFFICE SOLUTIONS</h5>

                            <ul>
                                <li><a href="./toner-cartridges.php">Toner Cartridges</a></li>
                                <li><a href="./office-supplies.php">Office Supplies</a></li>
                                <li><a href="./office-furniture.php">Office Furniture</a></li>
                            </ul>
                        </div>

                    </div>

                </div>

                <!-- Card 3 -->
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="division-card">
                        <img src="./assets/images/divisions/industrial-systems.svg" class="img-fluid" alt="">
                        <div class="division-content">
                            <div class="icon blue">
                                <i class="fa fa-robot"></i>
                            </div>
                            <h5>INDUSTRIAL SYSTEMS</h5>
                            <ul>
                                <li><a href="./industrial-automation-division.php">Industrial Automation Division</a></li>
                                <li><a href="./industrial-air-compressor.php">Industrial Air Compressors</a></li>
                            </ul>
                        </div>

                    </div>

                </div>

                <!-- Card 4 -->

                <div class="col-lg-3 col-md-6 col-6">

                    <div class="division-card">

                        <img src="./assets/images/divisions/consumer-products.svg" class="img-fluid" alt="">

                        <div class="division-content">

                            <div class="icon red">
                                <i class="fa fa-candy-cane"></i>
                            </div>

                            <h5>CONSUMER PRODUCTS</h5>

                            <ul>
                                <li><a href="./confectionery.php">Confectionery</a></li>
                            </ul>
                        </div>

                    </div>

                </div>

                <!-- Card 5 -->

                <div class="col-lg-3 col-md-6 col-6">

                    <div class="division-card">

                        <img src="./assets/images/divisions/energy-solutions.svg" class="img-fluid" alt="">

                        <div class="division-content">

                            <div class="icon green">
                                <i class="fa fa-bolt"></i>
                            </div>

                            <h5>ENERGY SOLUTIONS</h5>

                            <ul>
                                <li><a href="./energy-solutions.php">Energy Solution</a></li>
                            </ul>
                        </div>

                    </div>

                </div>

                <!-- Card 6 -->

                <div class="col-lg-3 col-md-6 col-6">

                    <div class="division-card">

                        <img src="./assets/images/divisions/security-solutions.svg" class="img-fluid" alt="">

                        <div class="division-content">

                            <div class="icon purple">
                                <i class="fa fa-shield-check"></i>
                            </div>

                            <h5>SECURITY SOLUTIONS</h5>

                            <ul>
                                <li><a href="./security-solution.php">Security Solution</a></li>
                            </ul>
                        </div>

                    </div>

                </div>

                <!-- Card 7 -->

                <div class="col-lg-3 col-md-6 col-6">

                    <div class="division-card">

                        <img src="./assets/images/divisions/printing-solutions.svg" class="img-fluid" alt="">

                        <div class="division-content">

                            <div class="icon pink">
                                <i class="fa fa-print"></i>
                            </div>

                            <h5>PRINTING SOLUTIONS</h5>

                            <ul>
                                <li><a href="./printing-machines.php">Printing Machines</a></li>
                            </ul>
                        </div>

                    </div>

                </div>

                <!-- Card 8 -->

                <div class="col-lg-3 col-md-6 col-6">

                    <div class="division-card">

                        <img src="./assets/images/divisions/infrastructure-solutions.svg" class="img-fluid" alt="">

                        <div class="division-content">

                            <div class="icon orange">
                                <i class="fa fa-warehouse"></i>
                            </div>

                            <h5>INFRASTRUCTURE SOLUTIONS</h5>

                            <ul>
                                <li><a href="./warehousing-solutions.php">Warehouse Solutions</a></li>
                            </ul>
                        </div>

                    </div>

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
                            Your Trusted Partner For Growth
                        </h2>
                        <p class="text-muted mt-3">
                            We are committed to delivering superior quality products and services with integrity,
                            innovation and a customer-first approach.
                        </p>
                        <a href="#" class="btn btn-outline-light">
                            ABOUT US <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row g-4">
                        <div class="col-6 col-md-6 col-lg-3 feature-card-box">
                            <div class="feature-card">
                                <i class="fa fa-award"></i>
                                <h5>Premium <br> Quality</h5>
                                <p>
                                    International standards you can trust
                                </p>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-3 feature-card-box">
                            <div class="feature-card">
                                <i class="fa fa-network-wired"></i>
                                <h5>Reliable <br> Supply Chain</h5>
                                <p>
                                    Timely delivery every time
                                </p>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-3 feature-card-box">
                            <div class="feature-card">
                                <i class="fa fa-screwdriver"></i>
                                <h5>Expert <br> Support</h5>
                                <p>
                                    Technical expertise at every step
                                </p>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-3 feature-card-box">
                            <div class="feature-card">
                                <i class="fa fa-users"></i>
                                <h5>100% <br> Satisfaction</h5>
                                <p>
                                    Customer satisfaction is our prionty
                                </p>
                            </div>
                        </div>
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
                                <p>Years Experience</p>
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
                <h2>OUR TRUSTED PARTNERS</h2>
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
                            <a href="./toner-cartridges.php">
                                <div class="feature-img">
                                    <img src="./assets/images/products-and-solutions/toner-cartridges/toner-cartridges.svg" alt="">
                                </div>
                                <div class="feature-title">
                                    <h4>Toner Cartridges</h4>
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
                            <a href="./printing-machines.php">
                                <div class="feature-img">
                                    <img src="./assets/images/products-and-solutions/printing-machines/printing-machines.svg" alt="">
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
                                    <h4>Warehousing Solutons</h4>
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
                        Vawda has been an exceptional partner for our
                        business. Their product quality and support
                        have exceeded expectations.
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
                        From automation to energy solutions,
                        everything under one roof. Professional
                        team and excellent service.
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
                        Reliable, efficient and customer-focused.
                        We are completely satisfied with the
                        services and support.
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
                        Vawda has been an exceptional partner for our
                        business. Their product quality and support
                        have exceeded expectations.
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
                        From automation to energy solutions,
                        everything under one roof. Professional
                        team and excellent service.
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
                        Reliable, efficient and customer-focused.
                        We are completely satisfied with the
                        services and support.
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
                        Ready to Find the Right Solution
                        for Your Business?
                    </h2>
                    <p>
                        Get expert advice and the best products
                        for your industry.
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

});
</script>

</html>