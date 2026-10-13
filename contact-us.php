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
</head>

<body>
    <?php include './layout/header.php'; ?>

    <!-- =========================
         PAGE BANNER
    ========================== -->
    <section class="hero-section contact-us-banner-section">
        <div class="container">
            <div class="breadcrumb">
                <ul>
                    <li><a href="./">Home</a></li>
                    <li><i class="fal fa-angle-right"></i></li>
                    <li><span>Contact Us</span></li>
                </ul>
            </div>
            <span class="hero-label">GET IN TOUCH</span>
            <h1 class="hero-title">CONTACT <span>US</span></h1>
            <p class="cu-banner-text">
                Reach out to Vawda for product inquiries, technical support,
                or partnership opportunities across our industrial divisions.
            </p>
            <div class="hero-buttons">
                <a href="#contact-form" class="btn btn-warning text-white">
                    SEND A MESSAGE
                    <i class="fa fa-paper-plane"></i>
                </a>
                <a href="tel:+922132550093" class="btn btn-outline-light">
                    CALL US
                    <i class="fal fa-phone-alt"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- =========================
         CONTACT INFO CARDS
    ========================== -->
    <section class="cu-info-section">
        <div class="container">
            <div class="cu-section-head text-center">
                <span class="ne-eyebrow">HOW TO REACH US</span>
                <h2>We're Here to Help</h2>
                <p>
                    Connect with our team through any of the channels below.
                    We typically respond within one business day.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="cu-info-card">
                        <div class="cu-info-icon">
                            <i class="fal fa-map-marker-alt"></i>
                        </div>
                        <h3>Head Office</h3>
                        <p>B-66/A, S.I.T.E. Area,<br>Karachi-75700, Pakistan.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="cu-info-card">
                        <div class="cu-info-icon">
                            <i class="fal fa-phone-alt"></i>
                        </div>
                        <h3>Phone</h3>
                        <p>
                            <a href="tel:+922132550093">+92 (21) 32550093-98</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="cu-info-card">
                        <div class="cu-info-icon">
                            <i class="fal fa-envelope"></i>
                        </div>
                        <h3>Email</h3>
                        <p>
                            <a href="mailto:info@vawda.com">info@vawda.com</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="cu-info-card">
                        <div class="cu-info-icon">
                            <i class="fal fa-clock"></i>
                        </div>
                        <h3>Working Hours</h3>
                        <p>Mon - Sat<br>9:00 AM - 6:00 PM</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================
         BRANCH OFFICES
    ========================== -->
    <section class="cu-branches-section" id="branches">
        <div class="container">
            <div class="cu-section-head text-center">
                <span class="ne-eyebrow">OUR LOCATIONS</span>
                <h2>Branches Across Pakistan</h2>
                <p>
                    Head office in Karachi, with liaison offices in Lahore and Faisalabad
                    as listed on vawda.com.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <article class="cu-branch-card">
                        <span class="cu-branch-tag">Head Office</span>
                        <h3>Karachi</h3>
                        <p>B-66/A, S.I.T.E. Area, Karachi-75700, Pakistan.</p>
                        <ul>
                            <li><i class="fal fa-phone-alt"></i><a href="tel:+922132550093">+92 (21) 32550093-98</a></li>
                            <li><i class="fal fa-envelope"></i><a href="mailto:info@vawda.com">info@vawda.com</a></li>
                        </ul>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <article class="cu-branch-card">
                        <span class="cu-branch-tag">Liaison Office</span>
                        <h3>Lahore</h3>
                        <p>307-E, Nadir Street, Ferry Meadow Lane, West Canal Bank, Lahore.</p>
                        <ul>
                            <li><i class="fal fa-phone-alt"></i><a href="tel:+924236113239">+92 (42) 36113239</a></li>
                            <li><i class="fal fa-fax"></i><span>+92 (42) 35292819</span></li>
                        </ul>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <article class="cu-branch-card">
                        <span class="cu-branch-tag">Liaison Office</span>
                        <h3>Faisalabad</h3>
                        <p>P-68, Vawda House, Vawda Street 4, Zia Town, Faisalabad.</p>
                        <ul>
                            <li><i class="fal fa-phone-alt"></i><a href="tel:+92418524576">+92 (41) 8524576</a></li>
                            <li><i class="fal fa-fax"></i><span>+92 (41) 8524947</span></li>
                        </ul>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================
         CONTACT FORM + DETAILS
    ========================== -->
    <section class="cu-form-section" id="contact-form">
        <div class="container">
            <div class="row g-5 align-items-stretch">
                <div class="col-lg-7">
                    <div class="cu-form-panel">
                        <span class="ne-eyebrow">SEND A MESSAGE</span>
                        <h2>Tell Us How We Can Help</h2>
                        <p class="cu-form-intro">
                            Fill out the form and our team will get back to you shortly.
                        </p>

                        <form class="cu-contact-form" action="#" method="post">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="cu-name">Full Name <span>*</span></label>
                                    <input type="text" id="cu-name" name="name" placeholder="Your full name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="cu-email">Email Address <span>*</span></label>
                                    <input type="email" id="cu-email" name="email" placeholder="you@example.com" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="cu-phone">Phone Number</label>
                                    <input type="tel" id="cu-phone" name="phone" placeholder="+92 300 0000000">
                                </div>
                                <div class="col-md-6">
                                    <label for="cu-branch">Branch <span>*</span></label>
                                    <select id="cu-branch" name="branch" required>
                                        <option value="" disabled selected>Select a branch</option>
                                        <option value="karachi">Head Office — Karachi</option>
                                        <option value="lahore">Liaison Office — Lahore</option>
                                        <option value="faisalabad">Liaison Office — Faisalabad</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="cu-subject">Subject <span>*</span></label>
                                    <select id="cu-subject" name="subject" required>
                                        <option value="" disabled selected>Select a subject</option>
                                        <option value="general">General Inquiry</option>
                                        <option value="products">Product Information</option>
                                        <option value="quote">Request a Quote</option>
                                        <option value="support">Technical Support</option>
                                        <option value="partnership">Partnership</option>
                                        <option value="careers">Careers</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="cu-message">Message <span>*</span></label>
                                    <textarea id="cu-message" name="message" rows="6"
                                        placeholder="Write your message here..." required></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-warning text-white">
                                        SEND MESSAGE
                                        <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="cu-aside-panel">
                        <span class="ne-eyebrow">QUICK SUPPORT</span>
                        <h2>Prefer to Talk Directly?</h2>
                        <p>
                            Our sales and support teams are available during business hours
                            to discuss products, pricing, and technical requirements.
                        </p>

                        <ul class="cu-aside-list">
                            <li>
                                <i class="fal fa-headset"></i>
                                <div>
                                    <strong>Sales Inquiries</strong>
                                    <span>sales@vawda.com</span>
                                </div>
                            </li>
                            <li>
                                <i class="fal fa-tools"></i>
                                <div>
                                    <strong>Technical Support</strong>
                                    <span>support@vawda.com</span>
                                </div>
                            </li>
                        </ul>

                        <div class="cu-aside-social">
                            <span>Follow Us</span>
                            <div class="cu-social-links">
                                <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                                <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================
         MAP
    ========================== -->
    <section class="cu-map-section">
        <div class="container">
            <div class="cu-section-head text-center">
                <span class="ne-eyebrow">FIND US</span>
                <h2>Visit Our Head Office</h2>
            </div>
            <div class="cu-map-frame">
                <iframe
                    title="Vawda Head Office Location"
                    src="https://www.google.com/maps?q=B-66/A,+S.I.T.E.,+Karachi,+Pakistan&output=embed"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    allowfullscreen></iframe>
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
                        <a href="#contact-form" class="btn btn-warning text-white">
                            REQUEST A QUOTE
                            <i class="fa fa-paper-plane"></i>
                        </a>
                        <a href="tel:+922132550093" class="btn btn-outline-light">
                            CALL NOW
                            <i class="fal fa-phone-alt"></i>
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
</body>

</html>
