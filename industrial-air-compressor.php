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
    <link rel="stylesheet" href="./assets/styling/style.css?v=iac-tabs2">

    <link rel="stylesheet" href="./assets/slick-slider/slick/slick.css">
</head>

<body>
    <?php include './layout/header.php'; ?>

<!-- =========================
         HERO SECTION
    ========================== -->

    <section class="hero-section industrial-air-compressor-hero">

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
                                <span>Industrial Air Compressor</span>
                            </li>
                        </ul>
                    </div>
                    <h1 class="hero-title">
                        <span>INDUSTRIAL AIR COMPRESSOR</span>
                    </h1>

                    <p class="hero-text">
                        Reliable compressed air equipment, dryers, filters and multi-brand spare parts for manufacturing and plant operations.
                     </p>

                    <div class="hero-list">
                        <ul>
                            <li>
                                <span><i class="fal fa-check-circle"></i></span>
                                <p>Reliable Air</p>
                            </li>
                            <li>
                                <span><i class="fal fa-check-circle"></i></span>
                                <p>Spare Parts</p>
                            </li>
                            <li>
                                <span><i class="fal fa-check-circle"></i></span>
                                <p>Multi Brand</p>
                            </li>
                            <li>
                                <span><i class="fal fa-check-circle"></i></span>
                                <p>Plant Uptime</p>
                            </li>
                        </ul>
                    </div>

                    <div class="hero-buttons">

                        <a href="./contact-us.php" class="btn btn-warning text-white">REQUEST A QUOTE
                            <i class="fa fa-paper-plane"></i>
                        </a>

                        <a href="./assets/images/products-and-solutions/industrial-air-compressor/favianair-brochure.pdf" class="btn btn-outline-light" target="_blank" rel="noopener">
                            DOWNLOAD BROCHURE
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
                            ABOUT OUR COMPRESSOR DIVISION
                        </span>
                        <h2 class="section-title">
                            Compressed Air Equipment, Parts And Service Support
                        </h2>
                        <p class="text-muted mt-3 mw-100">
                            Vawda supplies industrial air compressors, air dryers, receiver tanks, line filters and multi-brand spare parts including bearing kits, compressor oil, controllers, drain valves and oil filters. The range supports manufacturing plants that need reliable compressed air, servicing parts and technical backup.
                        </p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="feature-grid">

                        <div class="feature-box">
                            <div class="feature-icon">
                                <i class="far fa-award"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Equipment Quality</h4>
                                <p>Industrial-duty compressed air</p>
                            </div>
                        </div>

                        <div class="feature-box">
                            <div class="feature-icon">
                                <i class="far fa-user-headset"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Parts Support</h4>
                                <p>Filters, oil, kits and valves</p>
                            </div>
                        </div>

                        <div class="feature-box">
                            <div class="feature-icon">
                                <i class="far fa-recycle"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Energy Options</h4>
                                <p>Efficient compressor packages</p>
                            </div>
                        </div>

                        <div class="feature-box">
                            <div class="feature-icon">
                                <i class="far fa-user-friends"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Wide Range</h4>
                                <p>Machines and consumable spares</p>
                            </div>
                        </div>

                        <div class="feature-box">
                            <div class="feature-icon">
                                <i class="far fa-badge-check"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Reliable Supply</h4>
                                <p>Support for plant maintenance</p>
                            </div>
                        </div>

                        <div class="feature-box">
                            <div class="feature-icon">
                                <i class="far fa-shield-check"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Technical Help</h4>
                                <p>Matching parts to your model</p>
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

    <section id="product-categories" class="business-divisions py-5">
        <div class="container">
            <div class="section-heading text-center mb-5">
                <h2>OUR PRODUCT CATEGORIES</h2>
                <div class="seprator"></div>
            </div>

            <?php
            $imgBase = './assets/images/products-and-solutions/industrial-air-compressor';
            $imgRoot = __DIR__ . '/assets/images/products-and-solutions/industrial-air-compressor';

            /**
             * Build product rows dynamically from images inside a category folder.
             * Optional $catalog maps filename (without extension) => name/text/specs.
             */
            $loadCategoryProducts = static function (string $folder, array $catalog = [], string $defaultText = '') use ($imgRoot): array {
                $dir = $imgRoot . DIRECTORY_SEPARATOR . $folder;
                if (!is_dir($dir)) {
                    return [];
                }

                $files = array_values(array_filter(scandir($dir) ?: [], static function ($file) use ($dir) {
                    if ($file === '.' || $file === '..') {
                        return false;
                    }
                    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                    return in_array($ext, ['svg', 'png', 'jpg', 'jpeg', 'webp'], true) && is_file($dir . DIRECTORY_SEPARATOR . $file);
                }));

                natcasesort($files);
                $files = array_values($files);
                $products = [];

                foreach ($files as $file) {
                    $key = strtolower(pathinfo($file, PATHINFO_FILENAME));
                    $meta = $catalog[$key] ?? [];
                    $fallbackName = ucwords(str_replace(['-', '_'], ' ', pathinfo($file, PATHINFO_FILENAME)));

                    $products[] = [
                        'name' => $meta['name'] ?? $fallbackName,
                        'image' => $folder . '/' . $file,
                        'text' => $meta['text'] ?? $defaultText,
                        'specs' => $meta['specs'] ?? null,
                    ];
                }

                return $products;
            };

            $airReceiverTankProducts = $loadCategoryProducts(
                'air-receiver-tank',
                [
                    'air-storage-tank' => [
                        'name' => 'Air Storage Tank',
                        'text' => 'Stores compressed air to stabilize system pressure, reduce compressor cycling and support peak demand across the plant.',
                    ],
                ],
                'Industrial air receiver tank for stable compressed air storage and efficient plant air supply.'
            );

            $categories = [
                [
                    'id' => 'air-compressor',
                    'title' => 'Air Compressor',
                    'short' => 'Air Compressor',
                    'products' => [
                        [
                            'name' => 'VA Series Permanent Magnet Power Frequency Screw Air Compressor',
                            'image' => 'air-compressor/va-series-permanent-magnet-power-frequency-screw-air-compressor.svg',
                            'text' => 'Energy-efficient permanent magnet variable frequency screw compressor designed for stable pressure, lower power use and continuous industrial duty.',
                        ],
                        [
                            'name' => 'KB Series Double Stage Screw Air Compressor',
                            'image' => 'air-compressor/kb-Series-double-stage-screw-air-compressor.svg',
                            'text' => 'Two-stage compression for higher efficiency, lower discharge temperature and dependable performance in demanding plant applications.',
                        ],
                        [
                            'name' => 'Dry Oil Free Screw Air Compressor',
                            'image' => 'air-compressor/dry-oil-free-screw-compressor.svg',
                            'text' => 'Oil-free compressed air for sensitive processes where product purity and clean air quality are critical.',
                        ],
                        [
                            'name' => 'KN+ Series 5-in-1 Laser Cutting Screw Air Compressor',
                            'image' => 'air-compressor/kn-series-5-in-1-laser-cutting-screw-aircompressor.svg',
                            'text' => 'Integrated 5-in-1 package purpose-built for laser cutting lines, delivering clean, dry and stable high-pressure air.',
                        ],
                        [
                            'name' => 'KBO Series Oil-free Water Lubricated Screw Air Compressor',
                            'image' => 'air-compressor/kbo-series-oilfreewater-lubricated-screw-air-compressor.svg',
                            'text' => 'Water-lubricated oil-free technology for Class 0 air quality with reduced contamination risk and efficient cooling.',
                        ],
                        [
                            'name' => 'KPQ Series Skid Mounted 6-in-1 Machine',
                            'image' => 'air-compressor/kpqseries-skidmounted-6-in-1-machine.svg',
                            'text' => 'Skid-mounted all-in-one compressed air system combining multiple treatment stages for quick install and compact footprint.',
                        ],
                        [
                            'name' => 'KM Series Mobile Screw Air Compressor',
                            'image' => 'air-compressor/km-series-mobile-screw-aircompressor.svg',
                            'text' => 'Portable screw compressor for site work, temporary supply and applications that need flexible compressed air on the move.',
                        ],
                    ],
                ],
                [
                    'id' => 'air-dryer',
                    'title' => 'Air Dryer',
                    'short' => 'Air Dryer',
                    'products' => [
                        [
                            'name' => 'Refrigerated Dryer',
                            'image' => 'air-dryer/refrigrated-dryer.svg',
                            'text' => 'Removes moisture from compressed air through refrigeration, protecting tools, pipelines and process equipment from condensation damage.',
                        ],
                        [
                            'name' => 'Micro Thermal Adsorption Dryer',
                            'image' => 'air-dryer/micro-thermal-adsoption-dryer.svg',
                            'text' => 'Delivers very low dew points for applications that need ultra-dry air and high process reliability.',
                        ],
                        [
                            'name' => 'High Efficiency Oil Remover',
                            'image' => 'air-dryer/high-efficiency-oil-remover.svg',
                            'text' => 'High-efficiency oil removal stage that improves air purity and protects downstream equipment and end processes.',
                        ],
                    ],
                ],
                [
                    'id' => 'air-receiver-tank',
                    'title' => 'Air Receiver Tank',
                    'short' => 'Receiver Tank',
                    'products' => $airReceiverTankProducts,
                ],
                [
                    'id' => 'air-line-filter',
                    'title' => 'Air Line Filter',
                    'short' => 'Line Filter',
                    'products' => [
                        [
                            'name' => 'Stage Precision Filter',
                            'image' => 'air-line-filter/stage-precision-filter.svg',
                            'text' => 'Precision multi-stage filtration to remove dust, oil and contaminants from the compressed air line for cleaner, safer delivery.',
                        ],
                    ],
                ],
                [
                    'id' => 'multi-brand',
                    'title' => 'Multi Brand Air Compressor Spare Parts',
                    'short' => 'Multi Brand Spares',
                    'products' => [
                        [
                            'name' => 'Air Filter',
                            'image' => 'multi-brand/air-filter.svg',
                            'text' => 'Protects your compressor by removing dust, dirt and airborne contaminants from incoming air for better performance, improved efficiency and longer equipment life.',
                            'specs' => 'Filtration Efficiency: Up to 99% · Micron Rating: 5–20 microns (custom options available)',
                        ],
                        [
                            'name' => 'Oil Filter',
                            'image' => 'multi-brand/oil-filter.svg',
                            'text' => 'Maintains oil cleanliness by removing dirt, metal particles and contaminants, ensuring smooth operation and extending the life of internal components.',
                            'specs' => 'Filtration Rating: 10–25 microns · Efficiency: Up to 99% particle removal',
                        ],
                        [
                            'name' => 'Compressor Oil',
                            'image' => 'multi-brand/compressor-oil.svg',
                            'text' => 'High-performance compressor lubricants formulated for reliable lubrication, cooling and protection across oil-injected screw compressor systems.',
                        ],
                        [
                            'name' => 'Oil Separator',
                            'image' => 'multi-brand/oil-separator.svg',
                            'text' => 'Separates oil from compressed air in oil-injected compressors, ensuring cleaner air output while returning oil to the system and reducing consumption.',
                            'specs' => 'Filtration Efficiency: Up to 99.9% · Oil Carryover: ≤ 3 ppm',
                        ],
                        [
                            'name' => 'Controllers, HMI & Sensors',
                            'image' => 'multi-brand/controller-hmi.svg',
                            'text' => 'Essential for monitoring, control and automation of compressor systems—supporting energy-saving algorithms, fault protection and real-time operator visibility.',
                            'specs' => 'Automatic start/stop & load management · Fault detection · Multi-compressor compatibility',
                        ],
                        [
                            'name' => 'Wearing Kits',
                            'image' => 'multi-brand/wearing-kit.svg',
                            'text' => 'Service kits with essential wear parts designed to maintain efficiency, reduce downtime and keep compressors reliable at recommended service intervals.',
                            'specs' => '2,000 / 4,000 / 8,000 Hours kits · Customized kits as per compressor model',
                        ],
                        [
                            'name' => 'Rubber Coupling',
                            'image' => 'multi-brand/rubber-coupling.svg',
                            'text' => 'Flexible coupling that connects rotating shafts while absorbing vibration, shock and misalignment to protect motors and compressor drivetrains.',
                            'specs' => 'Material: Natural rubber / NBR / Polyurethane · Temperature Range: -20°C to +80°C',
                        ],
                        [
                            'name' => 'Bearing Kits',
                            'image' => 'multi-brand/bearing-kit.svg',
                            'text' => 'Precision bearing kits for air ends and drive assemblies, supporting smooth rotation, reduced vibration and dependable rebuild quality.',
                        ],
                        [
                            'name' => 'Drain Valves',
                            'image' => 'multi-brand/drain-valve.svg',
                            'text' => 'Manual and automatic drain valves remove condensate, oil and contaminants from receivers, filters and pipelines to prevent corrosion and protect air quality.',
                        ],
                        [
                            'name' => 'New & Used Air Ends',
                            'image' => 'multi-brand/new-used-air-ends.svg',
                            'text' => 'New precision-engineered screw air ends delivering high efficiency, durability, low noise and long service life for new installs or upgrades.',
                        ],
                        [
                            'name' => 'Used / Reconditioned Air Ends',
                            'image' => 'multi-brand/used-reconditioned-air-ends.svg',
                            'text' => 'Inspected, repaired and performance-tested reconditioned air ends with replaced bearings, seals and worn parts—a cost-effective industrial option.',
                        ],
                    ],
                ],
            ];

            $categories = array_values(array_filter($categories, static function ($category) {
                return !empty($category['products']);
            }));
            ?>

            <div class="iac-catalog">
                <ul class="nav nav-tabs iac-category-tabs" id="iacCategoryTabs" role="tablist">
                    <?php foreach ($categories as $categoryIndex => $category):
                        $tabId = 'iac-' . $category['id'];
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

                <div class="tab-content iac-category-content" id="iacCategoryTabContent">
                    <?php foreach ($categories as $categoryIndex => $category):
                        $tabId = 'iac-' . $category['id'];
                        $isActive = $categoryIndex === 0;
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
                                    <img src="<?= htmlspecialchars($imageSrc) ?>" alt="<?= $alt ?>">
                                </div>
                                <div class="iac-product-body">
                                    <h5><?= $alt ?></h5>
                                    <p><?= htmlspecialchars($product['text']) ?></p>
                                    <?php if (!empty($product['specs'])): ?>
                                    <strong class="iac-product-specs"><?= htmlspecialchars($product['specs']) ?></strong>
                                    <?php endif; ?>
                                </div>
                            </article>
                            <?php endforeach; ?>
                        </div>
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
        ['label' => 'Laser Cutting', 'image' => 'laser-cutting', 'text' => 'KN+ Series 5-in-1 packages for clean, dry cutting air.'],
        ['label' => 'Food & Beverage', 'image' => 'food-beverage', 'text' => 'Oil-free compressors with dryers for hygienic process air.'],
        ['label' => 'Pharmaceuticals', 'image' => 'pharmaceutical', 'text' => 'KBO and dry oil-free systems for sensitive process lines.'],
        ['label' => 'Manufacturing', 'image' => 'manufacturing', 'text' => 'VA & KB Series screw compressors for plant air supply.'],
        ['label' => 'Textiles', 'image' => 'textiles', 'text' => 'Stable compressed air with dryers and line filtration.'],
        ['label' => 'Automotive', 'image' => 'automotive', 'text' => 'Compressors and multi-brand spares for workshop uptime.'],
        ['label' => 'Construction', 'image' => 'construction', 'text' => 'KM Series mobile compressors for site and field air.'],
        ['label' => 'Metal Fabrication', 'image' => 'metal-fabrication', 'text' => 'Skid packages, tanks and filters for fab shop air systems.'],
    ];
    $industries_img_base = './assets/images/products-and-solutions/industrial-air-compressor/applications';

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
                            Your Trusted Partner for Compressed Air
                        </h2>
                        <p class="text-muted mt-2 mw-100">
                            Keep production lines supplied with stable air through compressors, genuine-fit spares and practical service support from Vawda.
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
                            <a href="./assets/images/products-and-solutions/industrial-air-compressor/gallery/air-dryer.svg" target="_blank">
                                <img src="./assets/images/products-and-solutions/industrial-air-compressor/gallery/air-dryer.svg" alt="Air Dryer">
                            </a>
                        </div>
                        <div class="gallery-image">
                            <a href="./assets/images/products-and-solutions/industrial-air-compressor/gallery/air-filter.svg" target="_blank">
                                <img src="./assets/images/products-and-solutions/industrial-air-compressor/gallery/air-filter.svg" alt="Air Filter">
                            </a>
                        </div>
                        <div class="gallery-image">
                            <a href="./assets/images/products-and-solutions/industrial-air-compressor/gallery/compressor.svg" target="_blank">
                                <img src="./assets/images/products-and-solutions/industrial-air-compressor/gallery/compressor.svg" alt="Compressor">
                            </a>
                        </div>
                        <div class="gallery-image">
                            <a href="./assets/images/products-and-solutions/industrial-air-compressor/gallery/controller-hmi.svg" target="_blank">
                                <img src="./assets/images/products-and-solutions/industrial-air-compressor/gallery/controller-hmi.svg" alt="Controller HMI">
                            </a>
                        </div>
                        <div class="gallery-image">
                            <a href="./assets/images/products-and-solutions/industrial-air-compressor/gallery/favion-compressor.svg" target="_blank">
                                <img src="./assets/images/products-and-solutions/industrial-air-compressor/gallery/favion-compressor.svg" alt="Favian Compressor">
                            </a>
                        </div>
                        <div class="gallery-image">
                            <a href="./assets/images/products-and-solutions/industrial-air-compressor/gallery/rubber-coupling.svg" target="_blank">
                                <img src="./assets/images/products-and-solutions/industrial-air-compressor/gallery/rubber-coupling.svg" alt="Rubber Coupling">
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
                            Looking For Industrial Air Compressors?
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
