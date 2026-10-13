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
    <link rel="stylesheet" href="./assets/styling/style.css?v=banners3">
    <link rel="stylesheet" href="./assets/slick-slider/slick/slick.css">
</head>

<body>
    <?php include './layout/header.php'; ?>

    <!-- =========================
         PAGE BANNER
    ========================== -->
    <section class="hero-section news-and-events-hero">
        <div class="container">
            <div class="breadcrumb">
                <ul>
                    <li><a href="./">Home</a></li>
                    <li><i class="fal fa-angle-right"></i></li>
                    <li><span>News & Events</span></li>
                </ul>
            </div>
            <span class="hero-label">STAY UPDATED</span>
            <h1 class="hero-title">NEWS &amp; <span>EVENTS</span></h1>
            <p class="ne-banner-text">
                Company announcements, industry highlights, and upcoming exhibitions
                from Vawda Industrial &amp; Business Solutions.
            </p>
            <div class="hero-buttons">
                <a href="#latest-news" class="btn btn-warning text-white">
                    LATEST NEWS
                    <i class="fal fa-newspaper"></i>
                </a>
                <a href="#upcoming-events" class="btn btn-outline-light">
                    UPCOMING EVENTS
                    <i class="fal fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- =========================
         LATEST NEWS & UPDATES
    ========================== -->
    <section class="ne-latest-section" id="latest-news">
        <div class="container">
            <div class="ne-section-head">
                <div class="ne-section-head-text">
                    <span class="ne-eyebrow">WHAT'S HAPPENING</span>
                    <h2>Latest News &amp; Updates</h2>
                </div>
                <a href="#" class="ne-view-all">View All News <i class="fal fa-arrow-right"></i></a>
            </div>

            <div class="row g-4">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <article class="ne-news-card">
                        <div class="ne-news-img">
                            <img src="./assets/images/news-events/news-industrial-1.jpg"
                                alt="Industrial production project">
                            <span class="ne-date-badge">28<br>JUL<br>2026</span>
                        </div>
                        <div class="ne-news-body">
                            <span class="ne-category">COMPANY NEWS</span>
                            <h3><a href="#">Vawda Expands Industrial Solutions Network</a></h3>
                            <p>
                                Strengthening distribution and technical support across key industrial markets in Pakistan.
                            </p>
                            <a href="#" class="ne-link">Read More <i class="fal fa-arrow-right"></i></a>
                        </div>
                    </article>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6">
                    <article class="ne-news-card">
                        <div class="ne-news-img">
                            <img src="./assets/images/news-events/news-industrial-2.jpg"
                                alt="Warehouse automation project">
                            <span class="ne-date-badge">15<br>JUL<br>2026</span>
                        </div>
                        <div class="ne-news-body">
                            <span class="ne-category">PROJECT UPDATE</span>
                            <h3><a href="#">New Warehouse Automation Capabilities Live</a></h3>
                            <p>
                                Faster fulfillment and dedicated support teams now serving textile and packaging clients.
                            </p>
                            <a href="#" class="ne-link">Read More <i class="fal fa-arrow-right"></i></a>
                        </div>
                    </article>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6">
                    <article class="ne-news-card">
                        <div class="ne-news-img">
                            <img src="./assets/images/news-events/news-industrial-3.jpg"
                                alt="Energy efficiency industrial project">
                            <span class="ne-date-badge">02<br>JUL<br>2026</span>
                        </div>
                        <div class="ne-news-body">
                            <span class="ne-category">INDUSTRY INSIGHTS</span>
                            <h3><a href="#">Energy Efficiency Trends for Smart Factories</a></h3>
                            <p>
                                How compressors, monitoring, and automation upgrades help reduce downtime and costs.
                            </p>
                            <a href="#" class="ne-link">Read More <i class="fal fa-arrow-right"></i></a>
                        </div>
                    </article>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6">
                    <article class="ne-news-card">
                        <div class="ne-news-img">
                            <img src="./assets/images/news-events/news-industrial-4.jpg"
                                alt="Industrial installation project">
                            <span class="ne-date-badge">20<br>JUN<br>2026</span>
                        </div>
                        <div class="ne-news-body">
                            <span class="ne-category">PARTNERSHIP</span>
                            <h3><a href="#">New Principals Join Energy Solutions Portfolio</a></h3>
                            <p>
                                Expanded product lines help factories improve power reliability and operational uptime.
                            </p>
                            <a href="#" class="ne-link">Read More <i class="fal fa-arrow-right"></i></a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================
         UPCOMING EVENTS
    ========================== -->
    <section class="ne-upcoming-section" id="upcoming-events">
        <div class="container">
            <div class="row gy-5 align-items-center">
                <div class="col-lg-4">
                    <div class="ne-upcoming-intro">
                        <span class="ne-eyebrow">UPCOMING EVENTS</span>
                        <h2>Join Us at Our Upcoming Events</h2>
                        <p>
                            Meet our specialists at exhibitions, workshops, and open days —
                            and discover solutions tailored to your industry.
                        </p>
                        <a href="#" class="btn btn-warning text-white">VIEW ALL EVENTS</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row g-4">
                        <div class="col-md-4">
                            <article class="ne-event-card">
                                <div class="ne-event-icon">
                                    <i class="fal fa-calendar-alt"></i>
                                </div>
                                <div class="ne-event-date">
                                    <span class="ne-event-day">05</span>
                                    <span class="ne-event-month">AUG 2026</span>
                                </div>
                                <h3>Textile Asia Trade Show</h3>
                                <p class="ne-event-location">
                                    <i class="fal fa-map-marker-alt"></i> Expo Centre, Karachi
                                </p>
                                <p>
                                    Meet our dyes, chemicals, and masterbatch teams for live demos and consultations.
                                </p>
                                <a href="#" class="ne-link">EVENT DETAILS <i class="fal fa-arrow-right"></i></a>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="ne-event-card">
                                <div class="ne-event-icon">
                                    <i class="fal fa-briefcase"></i>
                                </div>
                                <div class="ne-event-date">
                                    <span class="ne-event-day">18</span>
                                    <span class="ne-event-month">SEP 2026</span>
                                </div>
                                <h3>Automation Workshop</h3>
                                <p class="ne-event-location">
                                    <i class="fal fa-map-marker-alt"></i> Vawda Head Office
                                </p>
                                <p>
                                    Practical sessions on smart factory upgrades, compressors, and energy monitoring.
                                </p>
                                <a href="#" class="ne-link">EVENT DETAILS <i class="fal fa-arrow-right"></i></a>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="ne-event-card">
                                <div class="ne-event-icon">
                                    <i class="fal fa-users"></i>
                                </div>
                                <div class="ne-event-date">
                                    <span class="ne-event-day">22</span>
                                    <span class="ne-event-month">OCT 2026</span>
                                </div>
                                <h3>Customer Open Day</h3>
                                <p class="ne-event-location">
                                    <i class="fal fa-map-marker-alt"></i> Experience Center
                                </p>
                                <p>
                                    Explore security, office solutions, and industrial products with our specialists.
                                </p>
                                <a href="#" class="ne-link">EVENT DETAILS <i class="fal fa-arrow-right"></i></a>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================
         EVENTS GALLERY
    ========================== -->
    <section class="ne-gallery-section" id="events-gallery">
        <div class="container">
            <div class="ne-section-head">
                <div class="ne-section-head-text">
                    <span class="ne-eyebrow">EVENTS GALLERY</span>
                    <h2>Moments That Matter</h2>
                </div>
                <a href="#" class="ne-view-all">View Full Gallery <i class="fal fa-arrow-right"></i></a>
            </div>

            <div class="ne-gallery-slider">
                <div class="ne-gallery-item">
                    <img src="./assets/images/news-events/gallery-1.jpg"
                        alt="Industry exhibition project">
                </div>
                <div class="ne-gallery-item">
                    <img src="./assets/images/news-events/gallery-2.jpg"
                        alt="Factory production project">
                </div>
                <div class="ne-gallery-item">
                    <img src="./assets/images/news-events/gallery-3.jpg"
                        alt="Industrial site installation">
                </div>
                <div class="ne-gallery-item">
                    <img src="./assets/images/news-events/gallery-4.jpg"
                        alt="Laboratory testing project">
                </div>
                <div class="ne-gallery-item">
                    <img src="./assets/images/news-events/gallery-5.jpg"
                        alt="Warehouse operations project">
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
                        <a href="./contact-us.php" class="btn btn-warning text-white">REQUEST A QUOTE
                            <i class="fa fa-paper-plane"></i>
                        </a>
                        <a href="./contact-us.php" class="btn btn-outline-light">CONTACT US
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
<script src="./assets/jquery/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/slick-slider/slick/slick.min.js"></script>
    <script src="./assets/js/news-events.js"></script>
</body>

</html>
