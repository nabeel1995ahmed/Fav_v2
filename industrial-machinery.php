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
    <link rel="stylesheet" href="./assets/styling/style.css?v=im-tabs2">

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
         PRODUCT CATEGORIES
    ========================== -->

    <section id="product-categories" class="business-divisions industrial-machinery py-5">
        <div class="container">
            <div class="section-heading text-center mb-5">
                <h2>OUR PRODUCT CATEGORIES</h2>
                <div class="seprator"></div>
            </div>

            <?php
            $imgBase = './assets/images/products-and-solutions/industrial-machinery';

            $categories = [
                [
                    'id' => 'printing',
                    'title' => 'Printing Machines',
                    'short' => 'Printing Machines',
                    'folder' => 'digital-machine',
                    'products' => [
                        [
                            'name' => 'Oval Printing Machine',
                            'image' => 'digital-machine/oval-printing-machine.svg',
                            'text' => 'High-speed oval screen printing for apparel and textile decoration with consistent multi-station output.',
                        ],
                        [
                            'name' => 'DTF Printer',
                            'image' => 'digital-machine/dtf-printers.svg',
                            'text' => 'Direct-to-film printing for vibrant transfers on garments and mixed fabrics with strong wash durability.',
                        ],
                        [
                            'name' => 'DTG Printer',
                            'image' => 'digital-machine/dtg-printers.svg',
                            'text' => 'Direct-to-garment printing for detailed, soft-hand designs on cotton and blend apparel.',
                        ],
                        [
                            'name' => 'UV Flatbed Printer',
                            'image' => 'digital-machine/uv-flatbed-printers.svg',
                            'text' => 'UV flatbed printing on rigid and specialty media for signage, industrial marking and promotional products.',
                        ],
                        [
                            'name' => 'Sublimation Printer',
                            'image' => 'digital-machine/sublimation-printers.svg',
                            'text' => 'Dye-sublimation output for polyester textiles, sportswear and soft-signage applications.',
                        ],
                        [
                            'name' => 'Eco Solvent Printer',
                            'image' => 'digital-machine/eco-solvent-printers.svg',
                            'text' => 'Eco-solvent wide-format printing for durable indoor and outdoor graphics and banners.',
                        ],
                        [
                            'name' => 'Laser Marking Machine',
                            'image' => 'digital-machine/laser-marking-machine.svg',
                            'text' => 'Precision laser marking for industrial coding, branding and permanent part identification.',
                        ],
                        [
                            'name' => 'Laser Engraving',
                            'image' => 'digital-machine/laser-engraving.svg',
                            'text' => 'Laser engraving solutions for fine detail on metals, plastics and specialty materials.',
                        ],
                        [
                            'name' => 'Sublimation Roll Transfer',
                            'image' => 'digital-machine/sublimation-roll-transfer.svg',
                            'text' => 'Roll-to-roll sublimation transfer for continuous textile and soft-signage production.',
                        ],
                        [
                            'name' => 'Heat Press Machine',
                            'image' => 'digital-machine/heat-press-machine.svg',
                            'text' => 'Reliable heat press equipment for transfer applications across apparel and promotional goods.',
                        ],
                    ],
                    'catalogs' => [
                        ['file' => 'catalog.pdf', 'title' => 'Catalog'],
                    ],
                ],
                [
                    'id' => 'weaving',
                    'title' => 'Weaving Machine',
                    'short' => 'Weaving Machine',
                    'folder' => 'weaving',
                    'products' => [
                        [
                            'name' => 'Towel AirJet',
                            'image' => 'weaving/towel-airjet.svg',
                            'text' => 'Air-jet weaving for towel production with high speed, stable quality and efficient yarn handling.',
                        ],
                        [
                            'name' => 'Fabric AirJet',
                            'image' => 'weaving/fabric-airjet.svg',
                            'text' => 'Air-jet looms for fabric weaving focused on productivity, fabric quality and reduced operating cost.',
                        ],
                        [
                            'name' => 'Water Jet',
                            'image' => 'weaving/water-jet.svg',
                            'text' => 'Water-jet weaving machines suited for synthetic fabrics requiring clean, high-speed weft insertion.',
                        ],
                        [
                            'name' => 'Repair Looms',
                            'image' => 'weaving/repair-looms.svg',
                            'text' => 'Loom repair and support solutions to restore weaving efficiency and extend machine service life.',
                        ],
                    ],
                    'catalogs' => [
                        ['file' => 'air-jet-machinery.pdf', 'title' => 'Air Jet Machinery'],
                        ['file' => 'water-jet-catalog.pdf', 'title' => 'Water Jet Catalog'],
                    ],
                ],
                [
                    'id' => 'sizing',
                    'title' => 'Sizing Machine',
                    'short' => 'Sizing Machine',
                    'folder' => 'sizing',
                    'products' => [
                        [
                            'name' => 'Direct Warping',
                            'image' => 'sizing/direct-warping.svg',
                            'text' => 'Direct warping systems for preparing high-quality warp beams with accurate tension control.',
                        ],
                        [
                            'name' => 'Section Warping',
                            'image' => 'sizing/sectional-warping.svg',
                            'text' => 'Sectional warping for patterned and multi-colour warps with precise section build-up.',
                        ],
                        [
                            'name' => 'Sizing Machinery',
                            'image' => 'sizing/sizing-machine.svg',
                            'text' => 'Textile sizing machinery that strengthens warp yarns for smoother weaving and fewer breakages.',
                        ],
                    ],
                    'catalogs' => [
                        ['file' => 'Catalog.pdf', 'title' => 'Catalog'],
                        ['file' => 'FAV Jiacheng_Servo_Sizing_Machine_Features.pdf', 'title' => 'FAV Jiacheng Servo Sizing Machine Features'],
                        ['file' => 'machine-parameter.pdf', 'title' => 'Machine Parameters'],
                        ['file' => 'Textile Sizing Flyer.pdf', 'title' => 'Textile Sizing Flyer'],
                    ],
                ],
            ];

            $categories = array_values(array_filter($categories, static function ($category) {
                return !empty($category['products']);
            }));
            ?>

            <div class="iac-catalog">
                <ul class="nav nav-tabs iac-category-tabs" id="imCategoryTabs" role="tablist">
                    <?php foreach ($categories as $categoryIndex => $category):
                        $tabId = 'im-' . $category['id'];
                        $isActive = $categoryIndex === 0;
                    ?>
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link<?= $isActive ? ' active' : '' ?>"
                            id="<?= htmlspecialchars($tabId) ?>-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#<?= htmlspecialchars($tabId) ?>"
                            type="button"
                            role="tab"
                            aria-controls="<?= htmlspecialchars($tabId) ?>"
                            aria-selected="<?= $isActive ? 'true' : 'false' ?>"
                        >
                            <?= htmlspecialchars($category['short'] ?? $category['title']) ?>
                        </button>
                    </li>
                    <?php endforeach; ?>
                </ul>

                <div class="tab-content iac-category-content" id="imCategoryTabContent">
                    <?php foreach ($categories as $categoryIndex => $category):
                        $tabId = 'im-' . $category['id'];
                        $isActive = $categoryIndex === 0;
                        $catalogPath = $imgBase . '/' . $category['folder'] . '/';
                    ?>
                    <div
                        class="tab-pane fade<?= $isActive ? ' show active' : '' ?>"
                        id="<?= htmlspecialchars($tabId) ?>"
                        role="tabpanel"
                        aria-labelledby="<?= htmlspecialchars($tabId) ?>-tab"
                        tabindex="0"
                    >
                        <div class="iac-category-intro">
                            <span class="product-subheading"><?= htmlspecialchars($category['title']) ?></span>
                            <p><?= count($category['products']) ?> product<?= count($category['products']) === 1 ? '' : 's' ?> in this range</p>
                        </div>

                        <div class="iac-product-grid">
                            <?php foreach ($category['products'] as $productIndex => $product):
                                $productNumber = $productIndex + 1;
                                $imageSrc = $imgBase . '/' . $product['image'];
                                $alt = htmlspecialchars($product['name']);
                                $number = str_pad((string) $productNumber, 2, '0', STR_PAD_LEFT);
                            ?>
                            <article class="iac-product-card">
                                <div class="iac-product-media">
                                    <span class="iac-product-number"><?= $number ?></span>
                                    <img src="<?= htmlspecialchars($imageSrc) ?>" alt="<?= $alt ?>" loading="lazy">
                                </div>
                                <div class="iac-product-body">
                                    <h5><?= $alt ?></h5>
                                    <p><?= htmlspecialchars($product['text']) ?></p>
                                </div>
                            </article>
                            <?php endforeach; ?>
                        </div>

                        <?php if (!empty($category['catalogs'])): ?>
                        <div class="iac-catalog-downloads mt-4">
                            <span class="product-pdf-label">Catalogs &amp; Brochures</span>
                            <div class="veechem-cert-grid">
                                <?php foreach ($category['catalogs'] as $catalog): ?>
                                <a class="veechem-cert-card"
                                   href="<?= htmlspecialchars($catalogPath . rawurlencode($catalog['file'])) ?>"
                                   target="_blank"
                                   rel="noopener noreferrer">
                                    <span class="veechem-cert-icon"><i class="fal fa-file-pdf"></i></span>
                                    <span class="veechem-cert-meta">
                                        <span class="veechem-cert-title"><?= htmlspecialchars($catalog['title']) ?></span>
                                        <span class="veechem-cert-type">View PDF</span>
                                    </span>
                                    <span class="veechem-cert-action"><i class="fal fa-external-link"></i></span>
                                </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
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