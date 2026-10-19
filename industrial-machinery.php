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

    <link rel="stylesheet" href="./assets/slick-slider/slick/slick.css">
</head>

<body>
    <?php include './layout/header.php'; ?>

<!-- =========================
         HERO SECTION
    ========================== -->

    <section class="hero-section industrial-machinery-hero">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-7">
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                <a href="./">Home</a>
                            </li>
                            <li>
                                <i class="fal fa-chevron-right"></i>
                            </li>
                            <li>
                                <a href="./#business-divisions">Divisions</a>
                            </li>
                            <li>
                                <i class="fal fa-chevron-right"></i>
                            </li>
                            <li>
                                <span>Industrial Machinery</span>
                            </li>
                        </ul>
                    </div>
                    <h1 class="hero-title">
                        <span>INDUSTRIAL MACHINERY</span>
                    </h1>

                    <p class="hero-text">
                    Advanced industrial machinery delivering precision, efficiency, and high-quality performance for textile manufacturing, printing, and laboratory testing applications.
                     </p>

                    <div class="hero-list">
                        <ul>
                            <li>
                                <span><i class="fal fa-check-circle"></i></span>
                                <p>Printing Machines</p>
                            </li>
                            <li>
                                <span><i class="fal fa-check-circle"></i></span>
                                <p>Weaving Machine</p>
                            </li>
                            <li>
                                <span><i class="fal fa-check-circle"></i></span>
                                <p>Sizing Machine</p>
                            </li>
                            <li>
                                <span><i class="fal fa-check-circle"></i></span>
                                <p>Laboratory & Testing Equipment</p>
                            </li>
                        </ul>
                    </div>

                    <div class="hero-buttons">

                        <a href="./contact-us.php" class="btn btn-warning text-white">REQUEST A QUOTE
                            <i class="fa fa-paper-plane"></i>
                        </a>

                        <a href="#product-categories" class="btn btn-outline-light">
                            EXPLORE PRODUCTS
                            <i class="fal fa-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- =========================
         ABOUT OUR SECITON
    ========================== -->

    <section class="why-us second-why-us-section pt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="choose-text">
                        <span class="section-subtitle">
                            ABOUT OUR PRINTING MACHINES DIVISION
                        </span>
                        <h2 class="section-title">
                            Professional Printers For Apparel, Signage And Industry
                        </h2>
                        <p class="text-muted mt-3 mw-100">
                            Vawda supplies professional printing equipment including date printers, eco-solvent, DTF, UV, UV DTF, DTG and sublimation machines. The range is aimed at commercial printers and manufacturers who need reliable colour output and versatile media handling.
                        </p>
                        <!-- <a href="#" class="btn btn-outline-light">
                            EXPLORE OUR PRODUCTS <i class="fal fa-arrow-right"></i>
                        </a> -->
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="feature-grid">

                        <div class="feature-box">
                            <div class="feature-icon">
                                <i class="far fa-award"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Print Quality</h4>
                                <p>Sharp colour on fabric and hard goods</p>
                            </div>
                        </div>

                        <div class="feature-box">
                            <div class="feature-icon">
                                <i class="far fa-user-headset"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Application Support</h4>
                                <p>Help matching machine to job</p>
                            </div>
                        </div>

                        <div class="feature-box">
                            <div class="feature-icon">
                                <i class="far fa-recycle"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Versatile Tech</h4>
                                <p>DTF, DTG, UV and sublimation</p>
                            </div>
                        </div>

                        <div class="feature-box">
                            <div class="feature-icon">
                                <i class="far fa-user-friends"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Wide Range</h4>
                                <p>From date printers to UV flats</p>
                            </div>
                        </div>

                        <div class="feature-box">
                            <div class="feature-icon">
                                <i class="far fa-badge-check"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Reliable Supply</h4>
                                <p>Equipment for growing print shops</p>
                            </div>
                        </div>

                        <div class="feature-box">
                            <div class="feature-icon">
                                <i class="far fa-shield-check"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Production Ready</h4>
                                <p>Machines built for daily output</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- =========================
         BUSINESS DIVISIONS
    ========================== -->



<?php
$machinery_base = './assets/images/products-and-solutions/industrial-machinery/';

// Turns "pw-1215-uv-printer.svg" into "pw-1215-uv-printer" for the sub product modifier class
function machinery_slug(string $file): string {
    return trim(preg_replace('/[^a-z0-9]+/', '-', strtolower(pathinfo($file, PATHINFO_FILENAME))), '-');
}

$machinery_categories = [
    [
        'slug'   => 'printing',
        'title'  => 'Printing Machines',
        'folder' => 'digital-machine/',
        'products' => [
            ['file' => 'oval-printing-machine.svg',         'title' => 'Oval Printing Machine',         'alt' => 'Oval Printing Machine'],
            ['file' => 'dtf-printers.svg',  'title' => 'DTF Printer',  'alt' => 'DTF Printer'],
            ['file' => 'dtg-printers.svg',  'title' => 'DTG Printer',  'alt' => 'DTG Printer'],
            ['file' => 'uv-flatbed-printers.svg',    'title' => 'UV Flatbed Printer',    'alt' => 'UV Flatbed Printer'],
            ['file' => 'sublimation-printers.svg',   'title' => 'Sublimation Printer',   'alt' => 'Sublimation Printer'],
            ['file' => 'eco-solvent-printers.svg', 'title' => 'Eco Solvent Printer', 'alt' => 'Eco Solvent Printer'],
            ['file' => 'laser-marking-machine.svg',        'title' => 'Laser Marking Machine',        'alt' => 'Laser Marking Machine'],
            ['file' => 'laser-engraving.svg',  'title' => 'Laser Engraving',  'alt' => 'Laser Engraving'],
            ['file' => 'sublimation-roll-transfer.svg',  'title' => 'Sublimation Roll Transfer',  'alt' => 'Sublimation Roll Transfer'],
            ['file' => 'heat-press-machine.svg',  'title' => 'Heat Press Machine',  'alt' => 'Heat Press Machine'],
        ],
        'catalogs' => [
            ['file' => 'catalog.pdf', 'title' => 'Catalog'],
        ],
    ],
    [
        'slug'   => 'weaving',
        'title'  => 'Weaving Machine',
        'folder' => 'weaving/',
        'products' => [
            ['file' => 'towel-airjet.svg',  'title' => 'Towel AirJet',  'alt' => 'Towel AirJet weaving machine'],
            ['file' => 'fabric-airjet.svg', 'title' => 'Fabric AirJet', 'alt' => 'Fabric AirJet weaving machine'],
            ['file' => 'water-jet.svg',     'title' => 'Water Jet',     'alt' => 'Water Jet weaving machine'],
            ['file' => 'repair-looms.svg',  'title' => 'Repair Looms',  'alt' => 'Repair Looms'],
        ],
        'catalogs' => [
            ['file' => 'air-jet-machinery.pdf', 'title' => 'Air Jet Machinery'],
            ['file' => 'water-jet-catalog.pdf', 'title' => 'Water Jet Catalog'],
        ],
    ],
    [
        'slug'   => 'sizing',
        'title'  => 'Sizing Machine',
        'folder' => 'sizing/',
        'products' => [
            ['file' => 'direct-warping.svg',    'title' => 'Direct Warping',    'alt' => 'Direct Warping machine'],
            ['file' => 'sectional-warping.svg', 'title' => 'Section Warping',   'alt' => 'Section Warping machine'],
            ['file' => 'sizing-machine.svg',    'title' => 'Sizing Machinery',  'alt' => 'Sizing Machinery'],
        ],
        'catalogs' => [
            ['file' => 'Catalog.pdf', 'title' => 'Catalog'],
            ['file' => 'FAV Jiacheng_Servo_Sizing_Machine_Features.pdf', 'title' => 'FAV Jiacheng Servo Sizing Machine Features'],
            ['file' => 'machine-parameter.pdf', 'title' => 'Machine Parameters'],
            ['file' => 'Textile Sizing Flyer.pdf', 'title' => 'Textile Sizing Flyer'],
        ],
    ],
    /*[
        'slug'   => 'laboratory',
        'title'  => 'Laboratory & Testing Equipment',
        'folder' => 'laboratory-testing/',
        'products' => [
            ['file' => 'lab-1.svg', 'title' => 'Laboratory Equipment', 'alt' => 'Laboratory Equipment'],
        ],
        'catalogs' => [
            ['file' => 'Laboratory Catalog.pdf', 'title' => 'Laboratory & Testing Catalog'],
        ],
    ], */
];
?>

<section id="product-categories" class="industrial-machinery py-5">
    <div class="container">

        <div class="industrial-machinery__header section-heading text-center mb-5">
            <h2>OUR PRODUCT CATEGORIES</h2>
            <div class="seprator"></div>
        </div>

        <?php foreach ($machinery_categories as $cat):
            $path = $machinery_base . $cat['folder'];
        ?>
            <div class="machinery-category machinery-category--<?= htmlspecialchars($cat['slug']) ?> animate-on-scroll"
                 id="<?= htmlspecialchars($cat['slug']) ?>-machinery">

                <h3 class="machinery-category__title"><?= htmlspecialchars($cat['title']) ?></h3>

                <!-- Sub products: image + sub heading -->
                <div class="machinery-products">
                    <?php foreach ($cat['products'] as $product): ?>
                        <div class="machinery-product machinery-product--<?= machinery_slug($product['file']) ?>">
                            <div class="machinery-product__media">
                                <img class="machinery-product__img img-fluid"
                                     src="<?= htmlspecialchars($path . rawurlencode($product['file'])) ?>"
                                     alt="<?= htmlspecialchars($product['alt']) ?>"
                                     loading="lazy">
                            </div>
                            <h4 class="machinery-product__title"><?= htmlspecialchars($product['title']) ?></h4>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- PDF catalogs -->
                <?php if (!empty($cat['catalogs'])): ?>
                    <div class="machinery-catalogs">
                        <?php foreach ($cat['catalogs'] as $catalog): ?>
                            <a class="machinery-catalog"
                               href="<?= htmlspecialchars($path . rawurlencode($catalog['file'])) ?>"
                               target="_blank"
                               rel="noopener noreferrer">
                                <span class="machinery-catalog__icon"><i class="fal fa-file-pdf"></i></span>
                                <span class="machinery-catalog__info">
                                    <span class="machinery-catalog__title"><?= htmlspecialchars($catalog['title']) ?></span>
                                    <span class="machinery-catalog__type">View PDF</span>
                                </span>
                                <span class="machinery-catalog__action"><i class="fal fa-external-link"></i></span>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

            </div>
        <?php endforeach; ?>

    </div>
</section>
        <!-- =========================
     INDUSTRIES WE SERVE
========================== -->
    <?php
    $industries = [
        ['label' => 'Apparel Printing', 'image' => 'apparel-printing', 'text' => 'DTF and DTG machines for garment and apparel decoration.'],
        ['label' => 'Signage', 'image' => 'signage', 'text' => 'Eco-solvent and UV printers for outdoor and indoor signs.'],
        ['label' => 'Packaging', 'image' => 'packaging', 'text' => 'Date printers and UV systems for packaging workflows.'],
        ['label' => 'Promotional Products', 'image' => 'promotional', 'text' => 'UV and UV DTF solutions for custom promo merchandise.'],
        ['label' => 'Textile Printing', 'image' => 'textile-printing', 'text' => 'Sublimation and textile printers for fabric production.'],
        ['label' => 'Photography', 'image' => 'photography', 'text' => 'High-quality output for photo and studio print work.'],
        ['label' => 'Advertising', 'image' => 'advertising', 'text' => 'Wide-format print equipment for campaigns and displays.'],
        ['label' => 'Industrial Marking', 'image' => 'industrial-marking', 'text' => 'Date coding and marking printers for production lines.'],
    ];
    $industries_img_base = './assets/images/products-and-solutions/industrial-machinery/applications';

    include __DIR__ . '/layout/industries-serve.php';
    ?>

    <!-- =========================
         WHY CHOOSE US
    ========================== -->

    <section class="why-us second-why-us-section why-detail-section pb-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="choose-text">
                        <span class="section-subtitle">
                            WHY CHOOSE VAWDA
                        </span>
                        <h2 class="section-title">
                            Your Trusted Partner in Printing Equipment
                        </h2>
                        <p class="text-muted mt-2 mw-100">
                            Choose the right printer for garments, UV jobs or sublimation with a range designed for commercial quality and practical production.
                        </p>
                        <div class="why-list">
                            <ul>
                                <li>
                                    <span><i class="fa fa-check"></i></span>
                                    <p>Consistent Quality & Performance</p>
                                </li>
                                <li>
                                    <span><i class="fa fa-check"></i></span>
                                    <p>Competitive Pricing</p>
                                </li>
                                <li>
                                    <span><i class="fa fa-check"></i></span>
                                    <p>Advanced R&D & Innovation</p>
                                </li>
                                <li>
                                    <span><i class="fa fa-check"></i></span>
                                    <p>Global Reach & Reliable Delivery</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="section-heading text-center mb-4">
                        <h2>OUR GALLERY</h2>
                        <div class="seprator"></div>
                    </div>
                    <div class="gallery-slider">
                        <div class="gallery-image">
                            <a href="./assets/images/products-and-solutions/industrial-machinery/gallery/beam.svg" target="_blank">
                                <img src="./assets/images/products-and-solutions/industrial-machinery/gallery/beam.svg" alt="Date Printer">
                            </a>
                        </div>
                        <div class="gallery-image">
                            <a href="./assets/images/products-and-solutions/industrial-machinery/gallery/digital-machine.svg" target="_blank">
                                <img src="./assets/images/products-and-solutions/industrial-machinery/gallery/digital-machine.svg" alt="Eco Solvent Printer">
                            </a>
                        </div>
                        <div class="gallery-image">
                            <a href="./assets/images/products-and-solutions/industrial-machinery/gallery/lab.svg" target="_blank">
                                <img src="./assets/images/products-and-solutions/industrial-machinery/gallery/lab.svg" alt="H-602 DTF Printer">
                            </a>
                        </div>
                        <div class="gallery-image">
                            <a href="./assets/images/products-and-solutions/industrial-machinery/gallery/repair-loom.svg" target="_blank">
                                <img src="./assets/images/products-and-solutions/industrial-machinery/gallery/repair-loom.svg" alt="PW-1215 UV Printer">
                            </a>
                        </div>
                        <div class="gallery-image">
                            <a href="./assets/images/products-and-solutions/industrial-machinery/gallery/sizing-machine.svg" target="_blank">
                                <img src="./assets/images/products-and-solutions/industrial-machinery/gallery/sizing-machine.svg" alt="PW-4060CB UV Printer">
                            </a>
                        </div>
                        <div class="gallery-image">
                            <a href="./assets/images/products-and-solutions/industrial-machinery/gallery/weaving-machine.svg" target="_blank">
                                <img src="./assets/images/products-and-solutions/industrial-machinery/gallery/weaving-machine.svg" alt="PW-DP16 DTG Printer">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================
         certifications
    ========================== -->

    <section class="certifications pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="certifications-wrapper">
                        <div class="certification-item">
                            <img src="./assets/images/products-and-solutions/textile-dyes-and-chemicals/certifications-logo/bluesign.png" alt="Bluesign">
                        </div>

                        <div class="certification-item">
                            <img src="./assets/images/products-and-solutions/textile-dyes-and-chemicals/certifications-logo/oeko-tex.png" alt="OEKO-TEX">
                        </div>

                        <div class="certification-item">
                            <img src="./assets/images/products-and-solutions/textile-dyes-and-chemicals/certifications-logo/zdhc.png" alt="ZDHC">
                        </div>

                        <div class="certification-item">
                            <img src="./assets/images/products-and-solutions/textile-dyes-and-chemicals/certifications-logo/iso-9001-2015.png" alt="ISO 9001:2015">
                        </div>

                        <div class="certification-item">
                            <img src="./assets/images/products-and-solutions/textile-dyes-and-chemicals/certifications-logo/sgs.png" alt="SGS">
                        </div>

                        <div class="certification-item">
                            <img src="./assets/images/products-and-solutions/textile-dyes-and-chemicals/certifications-logo/tuv-australia.png" alt="TUV Austria">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section detail-cta-section pt-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="detail-cta-wrapper">
                        <h2>
                            Looking For Professional Printing Machines?
                        </h2>
                        <p>
                            Get in touch with our experts today!
                        </p>
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
        responsive: [
            {
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
        responsive: [
            {
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

    $('.gallery-slider').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        prevArrow: false,
        nextArrow: false,
        responsive: [
            {
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

    function animateOnScroll() {

        $('.animate-on-scroll, .product-head, .product-text').each(function () {

            var elementTop = $(this).offset().top;
            var windowBottom = $(window).scrollTop() + $(window).height();

            if (windowBottom > elementTop + 100) {
                $(this).addClass('show');
            }

        });

    }

    // Run on page load
    animateOnScroll();

    // Run when scrolling
    $(window).on('scroll', function () {
        animateOnScroll();
    });

});
</script>

</html>