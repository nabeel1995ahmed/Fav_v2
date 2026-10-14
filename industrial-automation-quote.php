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
    <link rel="stylesheet" href="./assets/styling/style.css">
</head>

<body>
    <?php include './layout/header.php'; ?>

    <!-- =========================
         PAGE BANNER
    ========================== -->
    <section class="hero-section industrial-automation-division-hero iad-quote-hero">
        <div class="container">
            <div class="breadcrumb">
                <ul>
                    <li><a href="./">Home</a></li>
                    <li><i class="fal fa-chevron-right"></i></li>
                    <li><a href="./industrial-automation-division.php">Industrial Automation Division</a></li>
                    <li><i class="fal fa-chevron-right"></i></li>
                    <li><span>Request a Quote</span></li>
                </ul>
            </div>
            <span class="hero-label">INDUSTRIAL AUTOMATION</span>
            <h1 class="hero-title">REQUEST A <span>QUOTE</span></h1>
            <p class="hero-text">
                Tell us what you're looking for. Our team can help identify an appropriate product or solution for your application.
            </p>
        </div>
    </section>

    <!-- =========================
         QUOTE FORM
    ========================== -->
    <section class="iad-quote-page-section">
        <div class="container">
            <div class="row g-4 g-xl-5 align-items-start">
                <div class="col-lg-8">
                    <div class="iad-quote-panel" id="quote-form">
                        <div class="iad-quote-panel-head">
                            <span class="ne-eyebrow">WHAT INFORMATION SHOULD YOU PROVIDE?</span>
                            <h2>Request a Quote</h2>
                            <p>
                                To help us prepare an accurate quotation, please provide as much of the following information as available.
                            </p>
                        </div>

                        <form class="cu-contact-form iad-quote-form" action="#" method="post">
                            <div class="iad-quote-group">
                                <h3>Product Details</h3>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="iad-product">Product / Model</label>
                                        <input type="text" id="iad-product" name="product" placeholder="Product or model name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="iad-quantity">Quantity Required</label>
                                        <input type="text" id="iad-quantity" name="quantity" placeholder="e.g. 5 units">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="iad-brand">Preferred Brand</label>
                                        <select id="iad-brand" name="preferred_brand">
                                            <option value="" disabled selected>Select a brand</option>
                                            <option value="schneider">Schneider Electric</option>
                                            <option value="siemens">Siemens</option>
                                            <option value="delixi">Delixi Electric</option>
                                            <option value="any">No preference</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="iad-application">Application / Purpose</label>
                                        <input type="text" id="iad-application" name="application" placeholder="e.g. pump, fan, conveyor">
                                    </div>
                                </div>
                            </div>

                            <div class="iad-quote-group">
                                <h3>Motor Specifications</h3>
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <label for="iad-motor-rating">Motor Rating (kW / HP)</label>
                                        <input type="text" id="iad-motor-rating" name="motor_rating" placeholder="e.g. 15 kW">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="iad-motor-voltage">Motor Voltage (V)</label>
                                        <input type="text" id="iad-motor-voltage" name="motor_voltage" placeholder="e.g. 400 V">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="iad-motor-current">Motor Current (A)</label>
                                        <input type="text" id="iad-motor-current" name="motor_current" placeholder="e.g. 30 A">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="iad-timeline">Required Delivery Timeline</label>
                                        <input type="text" id="iad-timeline" name="timeline" placeholder="e.g. within 2 weeks">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="iad-remarks">Additional Requirements / Remarks</label>
                                        <input type="text" id="iad-remarks" name="remarks" placeholder="Any extra details for quoting">
                                    </div>
                                </div>
                            </div>

                            <div class="iad-quote-group">
                                <h3>Contact Information</h3>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="iad-company">Company Name <span>*</span></label>
                                        <input type="text" id="iad-company" name="company" placeholder="Your company name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="iad-contact">Contact Person <span>*</span></label>
                                        <input type="text" id="iad-contact" name="contact_person" placeholder="Full name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="iad-email">Email Address <span>*</span></label>
                                        <input type="email" id="iad-email" name="email" placeholder="you@example.com" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="iad-phone">Phone Number <span>*</span></label>
                                        <input type="tel" id="iad-phone" name="phone" placeholder="+92 300 0000000" required>
                                    </div>
                                </div>
                            </div>

                            <div class="iad-quote-actions">
                                <button type="submit" class="btn btn-warning text-white">
                                    SUBMIT YOUR REQUIREMENT
                                    <i class="fal fa-arrow-right"></i>
                                </button>
                                <a href="./industrial-automation-division.php" class="btn iad-quote-back-btn">
                                    <i class="fal fa-arrow-left"></i>
                                    RETURN BACK TO PRODUCT
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4">
                    <aside class="iad-quote-aside">
                        <div class="iad-quote-aside-card">
                            <span class="ne-eyebrow">NEED HELP?</span>
                            <h3>Selecting a Drive?</h3>
                            <p>
                                Send your motor power, voltage, current, application and required quantity for a more useful product recommendation.
                            </p>
                            <ul class="iad-quote-tips">
                                <li>
                                    <i class="fal fa-check"></i>
                                    <span>Authorized Schneider, Siemens &amp; Delixi partner</span>
                                </li>
                                <li>
                                    <i class="fal fa-check"></i>
                                    <span>Application &amp; technical support available</span>
                                </li>
                                <li>
                                    <i class="fal fa-check"></i>
                                    <span>Ready stock on selected drives &amp; products</span>
                                </li>
                            </ul>
                        </div>

                        <div class="iad-quote-aside-card iad-quote-contact-card">
                            <span class="ne-eyebrow">QUICK CONTACT</span>
                            <h3>Talk to Our Team</h3>
                            <ul class="iad-quote-contact-list">
                                <li>
                                    <i class="fal fa-phone-alt"></i>
                                    <div>
                                        <strong>Phone</strong>
                                        <a href="tel:+922132550093">+92 (21) 32550093-98</a>
                                    </div>
                                </li>
                                <li>
                                    <i class="fal fa-envelope"></i>
                                    <div>
                                        <strong>Email</strong>
                                        <a href="mailto:info@vawda.com">info@vawda.com</a>
                                    </div>
                                </li>
                                <li>
                                    <i class="fal fa-clock"></i>
                                    <div>
                                        <strong>Working Hours</strong>
                                        <span>Mon – Sat, 9:00 AM – 6:00 PM</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <a href="./industrial-automation-division.php#product-categories" class="iad-quote-explore-link">
                            Explore Product Categories
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    <?php include './layout/footer.php'; ?>
</body>

<script src="./assets/jquery/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    (function () {
        var formPanel = document.getElementById('quote-form');
        var firstInput = document.getElementById('iad-product');
        var header = document.querySelector('.main-header');

        if (!formPanel || window.location.hash !== '#quote-form') {
            return;
        }

        function getHeaderOffset() {
            return header ? header.offsetHeight + 16 : 90;
        }

        function focusQuoteForm() {
            var top = formPanel.getBoundingClientRect().top + window.pageYOffset - getHeaderOffset();
            window.scrollTo({ top: Math.max(top, 0), behavior: 'smooth' });

            if (firstInput) {
                setTimeout(function () {
                    firstInput.focus({ preventScroll: true });
                }, 400);
            }
        }

        // Stop the browser's default hash jump from overshooting upward
        if ('scrollRestoration' in history) {
            history.scrollRestoration = 'manual';
        }

        window.scrollTo(0, 0);
        window.addEventListener('load', function () {
            setTimeout(focusQuoteForm, 50);
        });
    })();
</script>

</html>
