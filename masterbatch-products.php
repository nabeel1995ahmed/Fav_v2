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

<?php
/* ------------------------------------------------------------------
   DATA
   Images live in: ./assets/images/products-and-solutions/masterbatch/products/
   An image is only shown if its file exists in that folder, so the page
   works before the images are uploaded and fills in as you add them.
------------------------------------------------------------------- */
$mb_img_url = './assets/images/products-and-solutions/masterbatch/products/';
$mb_img_dir = __DIR__ . '/assets/images/products-and-solutions/masterbatch/products/';

$mb_figure = function ($file, $alt, $caption = '') use ($mb_img_url, $mb_img_dir) {
    if (!$file || !file_exists($mb_img_dir . $file)) {
        return;
    }
    echo '<figure class="dyestuff-figure">'
        . '<img src="' . htmlspecialchars($mb_img_url . $file) . '" class="img-fluid" alt="' . htmlspecialchars($alt, ENT_QUOTES) . '" loading="lazy">'
        . ($caption ? '<figcaption>' . htmlspecialchars($caption, ENT_QUOTES) . '</figcaption>' : '')
        . '</figure>';
};

// Application columns for the white masterbatch table
$white_apps = ['Film', 'Blow Moulding', 'Injection Moulding', 'Engineering', 'Fiber'];

// [product, pigment loading, brightness agent, grade, base polymer, polymer compatibility, [film, blow, injection, engineering, fiber]]
$white_grades = [
    ['FAV White 750K',   'High',   'No',  'Premium',    'PE',  'PE, PP',   [1, 1, 1, 0, 0]],
    ['FAV White 700K',   'High',   'No',  'Premium',    'PE',  'PE, PP',   [1, 1, 1, 0, 0]],
    ['FAV White 700 CA', 'High',   'No',  'Value tier', 'PE',  'PE, PP',   [1, 1, 1, 0, 0]],
    ['FAV White OB-999', 'High',   'Yes', 'Value tier', 'PE',  'PE, PP',   [1, 1, 1, 0, 0]],
    ['FAV White 600K',   'Medium', 'No',  'Premium',    'PE',  'PE, PP',   [1, 1, 1, 0, 0]],
    ['FAV White 3585',   'Medium', 'Yes', 'Value tier', 'PE',  'PE, PP',   [1, 1, 1, 0, 0]],
    ['FAV White 500 A',  'Medium', 'No',  'Value tier', 'PE',  'PE, PP',   [1, 1, 1, 0, 0]],
    ['FAV White 999',    'Medium', 'Yes', 'Value tier', 'PE',  'PE, PP',   [1, 1, 1, 0, 0]],
    ['FAV White 7465',   'Medium', 'No',  'Value tier', 'PE',  'PE, PP',   [1, 1, 1, 0, 0]],
    ['FAV White 4325',   'Low',    'Yes', 'Economical', 'PE',  'PE, PP',   [1, 1, 1, 0, 0]],
    ['FAV White 4622',   'Low',    'Yes', 'Economical', 'PE',  'PE, PP',   [1, 1, 1, 0, 0]],
    ['FAV White 350A',   'Low',    'No',  'Economical', 'PE',  'PE, PP',   [1, 1, 1, 0, 0]],
    ['FAV White 6000K',  'High',   'No',  'Premium',    'PP',  'PP',       [1, 0, 1, 0, 1]],
    ['FAV White 7000K',  'High',   'No',  'Premium',    'PP',  'PP',       [1, 0, 1, 0, 1]],
    ['FAV White 1601',   'High',   'Yes', 'Premium',    'PET', 'PET, PBT', [0, 0, 1, 1, 1]],
    ['FAV White 4033',   'High',   'Yes', 'Premium',    'PC',  'PC',       [0, 0, 1, 1, 0]],
];

// Application spotlights per category
$spotlights = [
    'white' => [
        [
            'name'     => 'FAV WHITE-7384',
            'base'     => 'PE',
            'purpose'  => 'A premium grade white masterbatch designed for silage film used to wrap fodder for prolonged storage.',
            'features' => [
                'Exceptional whiteness & brightness',
                'Uniform color density through well-distributed pigment',
                'Good dispersion maintains film strength by reducing pigment agglomeration',
                'Superior opacity',
                'Refined pigment grade suitable for very thin film structure',
            ],
            'image'    => 'fav-white-7384-silage-film.jpg',
        ],
    ],
    'black' => [
        [
            'name'     => 'FAV BLACK-7383',
            'base'     => 'PE',
            'purpose'  => 'A premium grade black masterbatch designed for mulch film, applied to plants to inhibit the growth of weeds.',
            'features' => [
                'Uniform color density through well-distributed pigment',
                'Good dispersion maintains film strength by reducing pigment agglomeration',
                'Superior jetness',
                'Refined pigment grades suitable for very thin film structures',
            ],
            'image'    => 'fav-black-7383-mulch-film.jpg',
        ],
    ],
];

// Liquid masterbatch product lines (images are in the 'liquid' sub-folder)
$liquid_products = [
    [
        'id' => 'pt1000', 'pill' => 'Pt 1000 PU Foam', 'title' => 'PolyTint™ Pt 1000 for PU Foam',
        'meta' => 'Liquid Masterbatch / PU Slab Stock (Flexible) Foam',
        'lead' => 'A high quality, very fine pigment dispersion series for PU slab stock (flexible) foam application.',
        'points' => ['Good processability', 'Cost effective', 'Homogeneous finishing', 'Heat stable colorant'],
        'image' => 'polytint-pt1000-pu-foam.jpg',
    ],
    [
        'id' => 'pt2000', 'pill' => 'Pt 2000 PVC Leather/Shoe', 'title' => 'PolyTint™ Pt 2000 for PVC Leather/Shoe',
        'meta' => 'Liquid Masterbatch / PVC Leather & Shoe',
        'lead' => 'A high quality, ultra fine pigment dispersion series for PVC leather application.',
        'points' => ['Available in fluorescent and metallic colors', 'Special grades complying with the requirements of REACH', 'Non-bleeding', 'Heat stable compound'],
        'image' => 'polytint-pt2000-pvc-leather-shoe.jpg',
    ],
    [
        'id' => 'pt3000', 'pill' => 'Pt 3000 PU Shoe', 'title' => 'PolyTint™ Pt 3000 for PU Shoe',
        'meta' => 'Liquid Masterbatch / PU Shoe Sole',
        'lead' => 'A high quality, ultra fine pigment dispersion series for PU shoe sole application with splendid finishing attributes, compatible with polyester polyol systems.',
        'points' => ['Splendid finishing attributes', 'Compatible with polyester polyol systems', 'Good mold release', 'Suitable for both automatic and manual dosing shoe machines', 'Special grades complying with the requirements of REACH'],
        'image' => 'polytint-pt3000-pu-shoe.jpg',
    ],
    [
        'id' => 'pt4000', 'pill' => 'Pt 4000 PU Dry Leather', 'title' => 'PolyTint™ Pt 4000 for PU Dry Leather',
        'meta' => 'Liquid Masterbatch / PU Dry Leather',
        'lead' => 'A very fine pigment dispersion series with fine surface finish and heat stability, suitable for PU leather application.',
        'points' => ['Fine surface finish', 'Heat stability', 'Suitable for PU leather', 'Formulated using the coagulation process'],
        'image' => 'polytint-pt4000-pu-dry-leather.jpg',
    ],
    [
        'id' => 'pt5000', 'pill' => 'Pt 5000 PU Wet Leather', 'title' => 'PolyTint™ Pt 5000 for PU Wet Leather',
        'meta' => 'Liquid Masterbatch / PU Wet Leather',
        'lead' => 'A pigment dispersion series with good processability and fine surface finish, used for PU leather application.',
        'points' => ['Good processability', 'Fine surface finish', 'Used for PU leather', 'Formulated using the calendering process'],
        'image' => 'polytint-pt5000-pu-wet-leather.jpg',
    ],
    [
        'id' => 'pt9000', 'pill' => 'Pt 9000 Acrylic & PET', 'title' => 'PolyTint™ Pt 9000 for Acrylic Sheets and PET Bottles',
        'meta' => 'Liquid Masterbatch / Acrylic Sheets & PET Bottles',
        'lead' => 'A high quality, ultra fine pigment dispersion series for acrylic sheets and PET bottles.',
        'points' => ['Ultra fine pigment dispersion', 'For acrylic sheets and PET bottles', 'Suitable for the automotive industry', 'Suitable for food and beverage applications'],
        'image' => 'polytint-pt9000-acrylic-pet.jpg',
    ],
    [
        'id' => 'maxflow-aqueous', 'pill' => 'MAXFLOW Aqueous', 'title' => 'MAXFLOW™ Aqueous Medium for Paints',
        'meta' => 'Liquid Masterbatch / Water Based Paints',
        'lead' => 'A water based, fine pigment dispersion series designed to serve as a single product across a vast field of applications.',
        'points' => ['Water base decorative paints based on latex, acrylic and other vinyl emulsions', 'Stable across a range of temperature and climatic conditions', 'Stable in both rheology and color'],
        'image' => 'maxflow-aqueous-medium-paints.jpg',
    ],
    [
        'id' => 'maxflow-oil', 'pill' => 'MAXFLOW Oil Medium', 'title' => 'MAXFLOW™ Oil Medium for Paints',
        'meta' => 'Liquid Masterbatch / Solvent Media Paints',
        'lead' => 'A pigment dispersion series in solvent media based on long oil alkyd, selected high performance pigments, the respective carrier and a set of additives.',
        'points' => ['Stable because of fine dispersion (OM series)', 'No machinery required for grinding', 'Minimizes energy and labor'],
        'image' => 'maxflow-oil-medium-paints.jpg',
    ],
    [
        'id' => 'maxflow-solvent', 'pill' => 'MAXFLOW Solvent', 'title' => 'MAXFLOW™ Solvent Medium for Paints',
        'meta' => 'Liquid Masterbatch / Gravure Printing Inks on TPU Film',
        'lead' => 'A pigment dispersion series intended for gravure printing inks on TPU film applications, e.g. footballs.',
        'points' => ['Non-bleeding', 'Heat stable', 'Available in fluorescent and metallic colors', 'Special grades complying with the requirements of REACH'],
        'image' => 'maxflow-solvent-medium-tpu-film.jpg',
    ],
    [
        'id' => 'microfix-hf', 'pill' => 'MICROFIX HF Textiles', 'title' => 'MICROFIX™ HF for Textiles',
        'meta' => 'Liquid Masterbatch / Textile Printing & Dyeing',
        'lead' => 'A high quality, water based, ultra fine pigment dispersion series with super fastness levels.',
        'points' => ['Best suited for textile printing, pigment dyeing and coating of virtually all substrates used in the textile industry', 'Meets the requirements of Oeko-Tex Standard 100, IKEA, GOTS, REACH and ZDHC'],
        'image' => 'microfix-hf-textiles.jpg',
    ],
];

$mb_yes = '<i class="fal fa-check-circle mb-yes" aria-label="Suitable"></i>';
$mb_no  = '<i class="fal fa-times-circle mb-no" aria-label="Not suitable"></i>';

// Renders the spotlight cards of one category
$mb_spotlight = function ($items, $heading) use ($mb_figure) {
    foreach ($items as $p) {
        ?>
        <div class="dyestuff-info-card mt-4">
            <h5><?= htmlspecialchars($heading) ?></h5>
            <div class="row g-4 align-items-center">
                <div class="col-lg-7">
                    <h6 class="mb-product-name"><?= htmlspecialchars($p['name']) ?></h6>
                    <?php if (!empty($p['base'])): ?>
                        <p class="dyestuff-product-meta mb-2">Base polymer: <?= htmlspecialchars($p['base']) ?></p>
                    <?php endif; ?>
                    <p><?= htmlspecialchars($p['purpose']) ?></p>
                    <ul class="dyestuff-check-list">
                        <?php foreach ($p['features'] as $f): ?>
                            <li><?= htmlspecialchars($f) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <?php $mb_figure($p['image'], $p['name']); ?>
                </div>
            </div>
        </div>
        <?php
    }
};
?>

    <!-- =========================
         HERO SECTION
    ========================== -->

    <section class="hero-section masterbatch-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="breadcrumb">
                        <ul>
                            <li><a href="./">Home</a></li>
                            <li><i class="fal fa-chevron-right"></i></li>
                            <li><a href="./masterbatch.php">Masterbatch</a></li>
                            <li><i class="fal fa-chevron-right"></i></li>
                            <li><span>Products</span></li>
                        </ul>
                    </div>
                    <h1 class="hero-title">
                        <span>MASTERBATCH PRODUCTS</span>
                    </h1>
                    <p class="hero-text">
                        White, black and liquid masterbatch from FAV Plastico for consistent color and efficient plastic manufacturing.
                    </p>
                    <div class="hero-buttons">
                        <a href="./contact-us.php" class="btn btn-warning text-white">REQUEST A QUOTE
                            <i class="fa fa-paper-plane"></i>
                        </a>
                        <a href="https://favplastico.com.pk/" class="btn btn-outline-light" target="_blank" rel="noopener noreferrer">
                            VISIT WEBSITE
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================
         MASTERBATCH RANGE (same layout as the Dyestuffs range)
    ========================== -->

    <section class="dyestuffs-range-section dyestuffs-range-standalone masterbatch-range-section py-5">
        <div class="container">
            <div class="dyestuffs-range-block" id="masterbatch-range">

                <ul class="nav nav-tabs dyestuff-category-tabs" id="masterbatchCategoryTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="white-masterbatch-tab" data-bs-toggle="tab" data-bs-target="#white-masterbatch" type="button" role="tab" aria-controls="white-masterbatch" aria-selected="true">White Masterbatch</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="black-masterbatch-tab" data-bs-toggle="tab" data-bs-target="#black-masterbatch" type="button" role="tab" aria-controls="black-masterbatch" aria-selected="false">Black Masterbatch</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="liquid-masterbatch-tab" data-bs-toggle="tab" data-bs-target="#liquid-masterbatch" type="button" role="tab" aria-controls="liquid-masterbatch" aria-selected="false">Liquid Masterbatch</button>
                    </li>
                </ul>

                <div class="tab-content dyestuff-category-content">

                    <!-- White Masterbatch -->
                    <div class="tab-pane fade show active" id="white-masterbatch" role="tabpanel" aria-labelledby="white-masterbatch-tab" tabindex="0">
                        <div class="dyestuffs-range-heading">
                            <span class="dyestuffs-kicker">Masterbatch</span>
                            <h3>White Masterbatch</h3>
                            <p>
                                FAV Plastico offers a diverse range of white masterbatches with varying concentrations of white pigment, available with or without brightness agent, and categorized into economical and premium product segments.
                            </p>
                            <p>
                                Our white masterbatches are specially formulated to align with customer applications, ensuring optimal compatibility with the carrier resin to enhance processability.
                            </p>
                        </div>

                        <div class="dyestuffs-range-panel">
                            <div class="dyestuff-product-panel">
                                <div class="dyestuff-product-header">
                                    <div>
                                        <h4>FAV White Range</h4>
                                        <p class="dyestuff-product-meta">Film / Blow Moulding / Injection Moulding / Engineering / Fiber</p>
                                    </div>
                                </div>
                                <p class="dyestuff-product-lead">
                                    We offer both standard and customized grades designed for a wide array of applications, including film, blow moulding, injection moulding, fiber and engineering plastics. Select a grade based on the opacity, whiteness, processability, application and cost you need.
                                </p>

                                <div class="dyestuff-info-card">
                                    <h5>Commercialised Standard Grades</h5>
                                    <div class="table-responsive">
                                        <table class="table mb-table align-middle">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2">Product</th>
                                                    <th rowspan="2">Pigment Loading</th>
                                                    <th rowspan="2">Brightness Agent</th>
                                                    <th rowspan="2">Grade</th>
                                                    <th rowspan="2">Base Polymer</th>
                                                    <th rowspan="2">Polymer Compatibility</th>
                                                    <th colspan="5" class="text-center">Application</th>
                                                </tr>
                                                <tr>
                                                    <?php foreach ($white_apps as $app): ?>
                                                        <th class="text-center"><?= htmlspecialchars($app) ?></th>
                                                    <?php endforeach; ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($white_grades as $g): ?>
                                                    <tr>
                                                        <td class="fw-semibold"><?= htmlspecialchars($g[0]) ?></td>
                                                        <td><?= htmlspecialchars($g[1]) ?></td>
                                                        <td><?= htmlspecialchars($g[2]) ?></td>
                                                        <td><span class="mb-tier mb-tier-<?= strtolower(str_replace(' ', '-', $g[3])) ?>"><?= htmlspecialchars($g[3]) ?></span></td>
                                                        <td><?= htmlspecialchars($g[4]) ?></td>
                                                        <td><?= htmlspecialchars($g[5]) ?></td>
                                                        <?php foreach ($g[6] as $ok): ?>
                                                            <td class="text-center"><?= $ok ? $mb_yes : $mb_no ?></td>
                                                        <?php endforeach; ?>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <p class="mb-table-note">
                                        <?= $mb_yes ?> Suitable &nbsp;&nbsp; <?= $mb_no ?> Not suitable
                                    </p>
                                </div>

                                <?php $mb_spotlight($spotlights['white'], 'Application Spotlight'); ?>
                            </div>
                        </div>
                    </div>

                    <!-- Black Masterbatch -->
                    <div class="tab-pane fade" id="black-masterbatch" role="tabpanel" aria-labelledby="black-masterbatch-tab" tabindex="0">
                        <div class="dyestuffs-range-heading">
                            <span class="dyestuffs-kicker">Masterbatch</span>
                            <h3>Black Masterbatch</h3>
                        </div>

                        <div class="dyestuffs-range-panel">
                            <div class="dyestuff-product-panel">
                                <?php $mb_spotlight($spotlights['black'], 'Featured Grade'); ?>
                            </div>
                        </div>
                    </div>

                    <!-- Liquid Masterbatch -->
                    <div class="tab-pane fade" id="liquid-masterbatch" role="tabpanel" aria-labelledby="liquid-masterbatch-tab" tabindex="0">
                        <div class="dyestuffs-range-heading">
                            <span class="dyestuffs-kicker">Masterbatch</span>
                            <h3>Liquid Masterbatch</h3>
                        </div>

                        <div class="dyestuffs-range-panel">
                            <div class="dyestuff-product-switch">
                                <span class="dyestuff-switch-label">Product Lines</span>
                                <ul class="nav nav-pills dyestuff-product-pills" id="liquidProductTabs" role="tablist">
                                    <?php foreach ($liquid_products as $i => $lp): ?>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link <?= $i === 0 ? 'active' : '' ?>" id="liq-<?= $lp['id'] ?>-tab" data-bs-toggle="tab" data-bs-target="#liq-<?= $lp['id'] ?>-product" type="button" role="tab" aria-controls="liq-<?= $lp['id'] ?>-product" aria-selected="<?= $i === 0 ? 'true' : 'false' ?>"><?= htmlspecialchars($lp['pill']) ?></button>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>

                            <div class="tab-content" id="liquidProductContent">
                                <?php foreach ($liquid_products as $i => $lp): ?>
                                    <div class="tab-pane fade <?= $i === 0 ? 'show active' : '' ?>" id="liq-<?= $lp['id'] ?>-product" role="tabpanel" aria-labelledby="liq-<?= $lp['id'] ?>-tab" tabindex="0">
                                        <div class="dyestuff-product-panel">
                                            <div class="dyestuff-product-header">
                                                <div>
                                                    <h4><?= htmlspecialchars($lp['title']) ?></h4>
                                                    <p class="dyestuff-product-meta"><?= htmlspecialchars($lp['meta']) ?></p>
                                                </div>
                                            </div>
                                            <p class="dyestuff-product-lead"><?= htmlspecialchars($lp['lead']) ?></p>
                                            <div class="row g-4 align-items-center">
                                                <div class="col-lg-7">
                                                    <div class="dyestuff-info-card h-100">
                                                        <h5>Key Properties</h5>
                                                        <ul class="dyestuff-check-list">
                                                            <?php foreach ($lp['points'] as $pt): ?>
                                                                <li><?= htmlspecialchars($pt) ?></li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5">
                                                    <figure class="dyestuff-figure">
                                                        <img src="<?= htmlspecialchars($mb_img_url . $lp['image']) ?>" class="img-fluid" alt="<?= htmlspecialchars($lp['title'], ENT_QUOTES) ?>" loading="lazy">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- =========================
         CTA
    ========================== -->

    <section class="cta-section detail-cta-section pt-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="detail-cta-wrapper">
                        <h2>Looking For High Quality Masterbatch?</h2>
                        <p>Get in touch with our experts today!</p>
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

    <?php include './layout/footer.php'; ?>
</body>

<script src="./assets/jquery/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Open the tab named in the URL, e.g. masterbatch-products.php#liquid-masterbatch
    (function () {
        var hash = window.location.hash;
        if (hash) {
            var trigger = document.querySelector('[data-bs-target="' + hash + '"]');
            if (trigger) {
                bootstrap.Tab.getOrCreateInstance(trigger).show();
                var block = document.getElementById('masterbatch-range');
                if (block) { block.scrollIntoView(); }
            }
        }
        // Keep the URL in step with the open tab so it can be shared
        document.querySelectorAll('#masterbatchCategoryTabs [data-bs-toggle="tab"]').forEach(function (btn) {
            btn.addEventListener('shown.bs.tab', function (e) {
                history.replaceState(null, '', e.target.getAttribute('data-bs-target'));
            });
        });
    })();
</script>

</html>