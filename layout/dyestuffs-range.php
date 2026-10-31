<?php
$dyestuffs_standalone = !empty($dyestuffs_standalone);

// Folder that holds the product shade charts / comparison images
$dyestuffs_img = './assets/images/products-and-solutions/textile-dyes-and-chemicals/dyestuffs/';

// Renders one captioned image
$dye_figure = function ($file, $alt, $caption) use ($dyestuffs_img) {
    echo '<figure class="dyestuff-figure">'
        . '<img src="' . htmlspecialchars($dyestuffs_img . $file) . '" class="img-fluid" alt="' . htmlspecialchars($alt, ENT_QUOTES) . '" loading="lazy">'
        . '<figcaption>' . htmlspecialchars($caption, ENT_QUOTES) . '</figcaption>'
        . '</figure>';
};
?>
<section class="dyestuffs-range-section<?= $dyestuffs_standalone ? ' dyestuffs-range-standalone' : '' ?> pb-5">
    <div class="container">
        <div class="dyestuffs-range-block" id="dyestuffs-range">
            <?php if (!$dyestuffs_standalone): ?>
            <button class="dyestuffs-range-toggle collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#dyestuffsRangeCollapse"
                aria-expanded="false" aria-controls="dyestuffsRangeCollapse">
                <span class="dyestuffs-range-toggle-text">
                    <span class="dyestuffs-kicker">Product Category</span>
                    <span class="dyestuffs-range-title">Dyestuffs Range</span>
                    <span class="dyestuffs-range-subtitle">Reactive dyes, acid dyes, digital print inks, auxiliaries and e-brochures</span>
                </span>
                <span class="dyestuffs-range-toggle-icon">
                    <i class="fal fa-plus"></i>
                    <i class="fal fa-minus"></i>
                </span>
            </button>
            <?php endif; ?>

            <div class="<?= $dyestuffs_standalone ? '' : 'collapse' ?>" id="dyestuffsRangeCollapse">
                <ul class="nav nav-tabs dyestuff-category-tabs" id="dyestuffCategoryTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="reactive-dyes-tab" data-bs-toggle="tab" data-bs-target="#reactive-dyes" type="button" role="tab" aria-controls="reactive-dyes" aria-selected="true">Reactive Dyes</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="acid-dyes-tab" data-bs-toggle="tab" data-bs-target="#acid-dyes" type="button" role="tab" aria-controls="acid-dyes" aria-selected="false">Acid Dyes</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="digital-inks-tab" data-bs-toggle="tab" data-bs-target="#digital-inks" type="button" role="tab" aria-controls="digital-inks" aria-selected="false">Inks For Textile Digital Print</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="auxiliaries-tab" data-bs-toggle="tab" data-bs-target="#auxiliaries-textile" type="button" role="tab" aria-controls="auxiliaries-textile" aria-selected="false">Auxiliaries for Textile</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="e-brochure-tab" data-bs-toggle="tab" data-bs-target="#e-brochure" type="button" role="tab" aria-controls="e-brochure" aria-selected="false">E Brochure</button>
                    </li>
                </ul>

                <div class="tab-content dyestuff-category-content">

                    <!-- Reactive Dyes -->
                    <div class="tab-pane fade show active" id="reactive-dyes" role="tabpanel" aria-labelledby="reactive-dyes-tab" tabindex="0">
                        <div class="dyestuffs-range-heading">
                            <span class="dyestuffs-kicker">Dyestuffs</span>
                            <h3>Reactive Dyes</h3>
                            <p>
                                Reactive dyes for natural and regenerated cellulose fibers and their blends. Suitable for exhaust dyeing, cold pad-batch, continuous dyeing, garment dyeing, and printing—helping mills deliver consistent shade quality with efficient, high-yield processes.
                            </p>
                        </div>

                        <div class="dyestuffs-range-panel">
                            <div class="dyestuff-product-switch">
                                <span class="dyestuff-switch-label">Product Lines</span>
                                <ul class="nav nav-pills dyestuff-product-pills" id="reactiveProductTabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="everzol-tab" data-bs-toggle="tab" data-bs-target="#everzol-product" type="button" role="tab" aria-controls="everzol-product" aria-selected="true">Everzol</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="everzol-fc-tab" data-bs-toggle="tab" data-bs-target="#everzol-fc-product" type="button" role="tab" aria-controls="everzol-fc-product" aria-selected="false">Everzol FC</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="everzol-ed-tab" data-bs-toggle="tab" data-bs-target="#everzol-ed-product" type="button" role="tab" aria-controls="everzol-ed-product" aria-selected="false">Everzol ED</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="everzol-black-ed3r-tab" data-bs-toggle="tab" data-bs-target="#everzol-black-ed3r-product" type="button" role="tab" aria-controls="everzol-black-ed3r-product" aria-selected="false">Everzol Black ED-3R</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="everzol-edn-tab" data-bs-toggle="tab" data-bs-target="#everzol-edn-product" type="button" role="tab" aria-controls="everzol-edn-product" aria-selected="false">Everzol EDN</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="everzol-cs-tab" data-bs-toggle="tab" data-bs-target="#everzol-cs-product" type="button" role="tab" aria-controls="everzol-cs-product" aria-selected="false">Everzol CS</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="everzol-edg-tab" data-bs-toggle="tab" data-bs-target="#everzol-edg-product" type="button" role="tab" aria-controls="everzol-edg-product" aria-selected="false">Everzol ED-G</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="everzol-lxlf-tab" data-bs-toggle="tab" data-bs-target="#everzol-lxlf-product" type="button" role="tab" aria-controls="everzol-lxlf-product" aria-selected="false">Everzol LX &amp; LF</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="everzol-erc-tab" data-bs-toggle="tab" data-bs-target="#everzol-erc-product" type="button" role="tab" aria-controls="everzol-erc-product" aria-selected="false">Everzol ERC</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="everzol-yellow-cen-tab" data-bs-toggle="tab" data-bs-target="#everzol-yellow-cen-product" type="button" role="tab" aria-controls="everzol-yellow-cen-product" aria-selected="false">Everzol Yellow CE-N</button>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content" id="reactiveProductContent">

                                <!-- Everzol -->
                                <div class="tab-pane fade show active" id="everzol-product" role="tabpanel" aria-labelledby="everzol-tab" tabindex="0">
                                    <div class="dyestuff-product-panel">
                                        <div class="dyestuff-product-header">
                                            <div>
                                                <h4>Everzol</h4>
                                                <p class="dyestuff-product-meta">Reactive Dyes / Exhaust Dyeing</p>
                                            </div>
                                        </div>
                                        <p class="dyestuff-product-lead">
                                            Everzol dyes are reactive dyes for dyeing natural cellulose fibers, regenerated cellulose fibers, and their blends. Designed for exhaust dyeing and related processes, they help mills achieve consistent shade quality with cost-effective, high-yield results.
                                        </p>
                                        <div class="row g-4">
                                            <div class="col-lg-6">
                                                <div class="dyestuff-info-card">
                                                    <h5>Key Advantages</h5>
                                                    <ul class="dyestuff-check-list">
                                                        <li>Cost-effective with excellent build-up</li>
                                                        <li>High exhaustion and high fixation</li>
                                                        <li>Excellent levelling properties and high color yield</li>
                                                        <li>Easy wash-off with excellent compatibility</li>
                                                        <li>Excellent fastness properties and reliable reproducibility (“Right First Time”)</li>
                                                        <li>Environmentally friendly approach that supports lower wastewater load</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="dyestuff-info-card">
                                                    <h5>Applications</h5>
                                                    <ul class="dyestuff-app-list">
                                                        <li>Piece dyeing</li>
                                                        <li>Package &amp; hank dyeing</li>
                                                        <li>Jig dyeing</li>
                                                        <li>Garment dyeing</li>
                                                        <li>Cold pad-batch</li>
                                                        <li>Pad-dry-pad-steam</li>
                                                        <li>Pad-dry-baking</li>
                                                        <li>Printing</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dyestuff-info-card mt-4">
                                            <h5>Shade Range Highlights <span>(Everzol on Cotton)</span></h5>
                                            <div class="row g-3">
                                                <div class="col-md-6">
                                                    <div class="dyestuff-shade-box">
                                                        <strong>Yellows &amp; Oranges</strong>
                                                        <p>Brilliant Yellow 4GL, Yellow 3GL, Yellow C-GL, Yellow PFG 150%, Yellow GR, Yellow CE-N, Golden Yellow RNL, Yellow 3RS, Orange 3R</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="dyestuff-shade-box">
                                                        <strong>Reds &amp; Scarlets</strong>
                                                        <p>Scarlet 3GF, Red C-3B, Brilliant Red F2B, Red BB, Brilliant Red F3B, Red 3BS, Red BS</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="dyestuff-shade-box">
                                                        <strong>Blues &amp; Navies</strong>
                                                        <p>Turq. Blue G, Brilliant Blue R s/p, Royal Blue E-FR, Blue BB, Blue BRF 150%, Navy Blue FBN, Navy Blue GG, Navy Blue RGB H/C</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="dyestuff-shade-box">
                                                        <strong>Blacks</strong>
                                                        <p>Black B, Black C-RL, Black GR, Black GRN, Black N, Black NR, Black GSP, Black MWF, Black DGL, Black DRL</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="dyestuff-info-card mt-4">
                                            <h5>Recommended Dyes by Shade &amp; Performance</h5>
                                            <div class="row g-3">
                                                <div class="col-md-6">
                                                    <div class="dyestuff-shade-box">
                                                        <strong>Pale-Medium Shades</strong>
                                                        <p>Everzol Yellow LX, Red LX, Blue LX<br><em>Supplementary:</em> Navy LX, Blue BRF 150%, Yellow CGL, Red C-3B, Blue BB</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="dyestuff-shade-box">
                                                        <strong>Excellent Light-Fastness in Pale Shades</strong>
                                                        <p>Everzol Yellow LX, Red LF-2B, Red LF-B, Blue LX, Grey LF<br><em>Supplementary:</em> Blue BRF 150%, Brilliant Blue R s/p, Blue ED-G, Dark Blue LF</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="dyestuff-shade-box">
                                                        <strong>Brilliant Yellow, Blue &amp; Green Shades</strong>
                                                        <p>Everzol Yellow 3GL, Brilliant Yellow 4GL, Turq. Blue G, Blue ED-G<br><em>Supplementary:</em> Brilliant Blue R s/p, Yellow ED-2G, Royal Blue E-FR</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="dyestuff-shade-box">
                                                        <strong>Red, Orange &amp; Scarlet Shades</strong>
                                                        <p>Everzol Yellow 3RS, Orange FC, Orange 3R, Scarlet FC, Scarlet 3GF, Red BS, Red 3BS<br><em>Supplementary:</em> Golden Yellow RNL, Brilliant Red F2B</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="dyestuff-shade-box">
                                                        <strong>Royal Blue &amp; Violet Shades</strong>
                                                        <p>Everzol Red 3BS, Red FC, Red 6B, Brilliant Blue R s/p, Blue ED-G, Royal Blue E-FR<br><em>Supplementary:</em> Rubine ED, Blue FC</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="dyestuff-shade-box">
                                                        <strong>Medium-Heavy Shades</strong>
                                                        <p>Everzol Yellow 3RS, Red 3BS, Navy Blue FBN, Black B<br><em>Supplementary:</em> Golden Yellow RNL, Red BS, Navy Blue RGB</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="dyestuff-shade-box">
                                                        <strong>High Fastness to Chlorinated Water</strong>
                                                        <p>Everzol Yellow 3RS, Red 3BS, Navy Blue FBN</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="dyestuff-shade-box">
                                                        <strong>UK-TO (BS-1006-1998) Multicycle Laundering</strong>
                                                        <p>Everzol Yellow 3RS, Red 3BS, Navy Blue FBN</p>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="dyestuff-shade-box">
                                                        <strong>Black Shades</strong>
                                                        <p>Everzol Black GR, Black GRN, Black N, Black NR, Black GSP, Black MW, Black LNS, Black DGL, Black DRL</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Everzol FC -->
                                <div class="tab-pane fade" id="everzol-fc-product" role="tabpanel" aria-labelledby="everzol-fc-tab" tabindex="0">
                                    <div class="dyestuff-product-panel">
                                        <div class="dyestuff-product-header">
                                            <div>
                                                <h4>Everzol FC</h4>
                                                <p class="dyestuff-product-meta">Reactive Dyes / Exhaust Dyeing</p>
                                            </div>
                                        </div>
                                        <p class="dyestuff-product-lead">
                                            Everzol FC is a breakthrough range for high chromaticity and fastness on cellulose dyeing. Extremely brilliant reactive dyes with a wider gamut than conventional dyes, helping close the gap between cellulose and synthetic substrates for fashion colors.
                                        </p>
                                        <div class="dyestuff-info-card">
                                            <h5>Key Advantages</h5>
                                            <ul class="dyestuff-check-list">
                                                <li>Extremely brilliant reactive dyes</li>
                                                <li>Aligned with fashion color trends</li>
                                                <li>Warm dyeing and easy dyeing behavior</li>
                                                <li>Versatile application across processes</li>
                                                <li>Unique fastness performance</li>
                                                <li>Wider gamut than conventional reactive dyes</li>
                                            </ul>
                                        </div>
                                        <div class="dyestuff-info-card mt-4">
                                            <h5>Shade Chart</h5>
                                            <?php $dye_figure('everzol-fc-shade-chart.jpg', 'Everzol FC shade chart showing Flavine FC, Orange FC, Scarlet FC, Red FC and Blue FC at 0.3% and 3.0%', 'Everzol FC — Flavine, Orange, Scarlet, Red and Blue at 0.3% and 3.0%'); ?>
                                        </div>
                                    </div>
                                </div>

                                <!-- Everzol ED -->
                                <div class="tab-pane fade" id="everzol-ed-product" role="tabpanel" aria-labelledby="everzol-ed-tab" tabindex="0">
                                    <div class="dyestuff-product-panel">
                                        <div class="dyestuff-product-header">
                                            <div>
                                                <h4>Everzol ED</h4>
                                                <p class="dyestuff-product-meta">Reactive Dyes / Exhaust Dyeing</p>
                                            </div>
                                        </div>
                                        <p class="dyestuff-product-lead">
                                            Everzol ED is a high color-yield, eco-efficient reactive range with excellent build-up. Mainly designed for cellulose dyeing at 60°C, with selected items suitable for continuous dyeing or cold pad-batch. Supports cost efficiency, energy savings, and lower CO<sub>2</sub> emission.
                                        </p>
                                        <p class="dyestuff-product-lead"><strong>A novel reactive dyestuff range with superb color yield and eco-efficiency.</strong></p>
                                        <div class="row g-4">
                                            <div class="col-lg-6">
                                                <div class="dyestuff-info-card">
                                                    <h5>Key Advantages</h5>
                                                    <ul class="dyestuff-check-list">
                                                        <li>Superb color yield and high fixation</li>
                                                        <li>Lower dye quantities than conventional dyes (approx. 50–60%)</li>
                                                        <li>Excellent compatibility within Everzol &amp; Everzol ED</li>
                                                        <li>Excellent reproducibility</li>
                                                        <li>High fixation with easy wash-off</li>
                                                        <li>Warm dyeing with energy savings</li>
                                                        <li>Selected dyes suitable for continuous dyeing and C.P.B</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="dyestuff-info-card">
                                                    <h5>Trichromatic Highlights</h5>
                                                    <ul class="dyestuff-check-list">
                                                        <li><strong>Medium to dark:</strong> Yellow ED-R, Red ED-3B, Blue L-ED</li>
                                                        <li><strong>Green shades:</strong> Yellow ED-2G, Blue ED-G, Turq. Blue G 133%</li>
                                                        <li><strong>Very dark:</strong> Orange ED-4R, Cardinal ED, Red ED-7BN, Navy ED</li>
                                                        <li><strong>Crush mark / layer difference:</strong> Orange ED-4R, Cardinal ED, Red ED-7BN, Blue L-ED</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dyestuff-info-card mt-4">
                                            <h5>Shade Chart</h5>
                                            <?php $dye_figure('everzol-ed-shade-chart.jpg', 'Everzol ED shade chart with yellow, orange, red, blue, navy and black shades', 'Everzol ED shade chart — items marked with a dot are suitable for cold pad-batch dyeing'); ?>
                                        </div>
                                    </div>
                                </div>

                                <!-- Everzol Black ED-3R -->
                                <div class="tab-pane fade" id="everzol-black-ed3r-product" role="tabpanel" aria-labelledby="everzol-black-ed3r-tab" tabindex="0">
                                    <div class="dyestuff-product-panel">
                                        <div class="dyestuff-product-header">
                                            <div>
                                                <h4>Everzol Black ED-3R</h4>
                                                <p class="dyestuff-product-meta">Reactive Dyes / Exhaust Dyeing</p>
                                            </div>
                                        </div>
                                        <p class="dyestuff-product-lead">
                                            Premium reactive black with Inditex AAA accreditation, designed for product safety and production stability. Supports global compliance expectations including ZDHC-MRSL and REACH for Europe, with more stable shade in post acidic finishing.
                                        </p>
                                        <div class="row g-4">
                                            <div class="col-lg-6">
                                                <div class="dyestuff-info-card">
                                                    <h5>Key Advantages</h5>
                                                    <ul class="dyestuff-check-list">
                                                        <li>Inditex AAA premium accredited</li>
                                                        <li>Complies with global environment and consumer safety expectations</li>
                                                        <li>More stable shade in post acidic finishing</li>
                                                        <li>Unique build-up with reduced pollution</li>
                                                        <li>Versatile across dyeing processes</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="dyestuff-info-card">
                                                    <h5>Process Suitability</h5>
                                                    <ul class="dyestuff-app-list">
                                                        <li>Exhaust — Very Good</li>
                                                        <li>Jigger — Very Good</li>
                                                        <li>Continuous — Very Good</li>
                                                        <li>CPB — Very Good</li>
                                                        <li>Discharge / Neutral — Good</li>
                                                        <li>Discharge / Alkaline — Good</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dyestuff-info-card mt-4">
                                            <h5>Shade Comparison</h5>
                                            <div class="row g-4">
                                                <div class="col-md-6">
                                                    <?php $dye_figure('black-ed3r-commercial-black-shade.jpg', 'Commercial reactive black dye fabric sample with DE 2.73, greenish shade', 'Commercial reactive black — DE 2.73, greenish'); ?>
                                                </div>
                                                <div class="col-md-6">
                                                    <?php $dye_figure('black-ed3r-on-tone-shade.jpg', 'Everzol Black ED-3R fabric sample with DE 0.15, on tone', 'Everzol Black ED-3R — DE 0.15, on tone'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Everzol Black EDN -->
                                <div class="tab-pane fade" id="everzol-edn-product" role="tabpanel" aria-labelledby="everzol-edn-tab" tabindex="0">
                                    <div class="dyestuff-product-panel">
                                        <div class="dyestuff-product-header">
                                            <div>
                                                <h4>Everzol Black EDN</h4>
                                                <p class="dyestuff-product-meta">Reactive Dyes / Exhaust Dyeing</p>
                                            </div>
                                        </div>
                                        <p class="dyestuff-product-lead">
                                            Everzol Black EDN is an innovative reactive black focused on reducing effluent and easy wash-off. It supports short liquor ratio dyeing, high fixation, and lower environmental impact while delivering strong levelness and Right First Time performance.
                                        </p>
                                        <div class="row g-4">
                                            <div class="col-lg-6">
                                                <div class="dyestuff-info-card">
                                                    <h5>Key Advantages</h5>
                                                    <ul class="dyestuff-check-list">
                                                        <li>Suitable for extra short liquor ratio dyeing</li>
                                                        <li>High wash-off supported by high fixation</li>
                                                        <li>Less effluent and lower environmental impact</li>
                                                        <li>Excellent levelness and outstanding R.F.T.</li>
                                                        <li>Low Nylon/Lycra cross-dyeing on cotton blends</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="dyestuff-info-card">
                                                    <h5>Recommended Trichromatic</h5>
                                                    <ul class="dyestuff-check-list">
                                                        <li>Everzol Yellow ED</li>
                                                        <li>Everzol Yellow ED-R</li>
                                                        <li>Everzol Red ED-3B</li>
                                                        <li>Everzol Red ED-7BN</li>
                                                        <li>Everzol Black EDN</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dyestuff-info-card mt-4">
                                            <h5>Wash-off Comparison <span>(Everzol Black EDN vs Commercial Reactive Dyes)</span></h5>
                                            <div class="row g-4">
                                                <div class="col-md-6">
                                                    <?php $dye_figure('black-edn-wash-off-1.jpg', 'Dye residue in wash-off baths from 30°C to 98°C and back to 30°C', 'Dye residue across wash-off temperatures (30°C → 60°C → 98°C → 80°C → 60°C → 30°C)'); ?>
                                                </div>
                                                <div class="col-md-6">
                                                    <?php $dye_figure('black-edn-wash-off-2.jpg', 'Dye residue in wash-off baths from 30°C to 98°C and back to 30°C for the comparison dye', 'Dye residue across wash-off temperatures (30°C → 60°C → 98°C → 80°C → 60°C → 30°C)'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dyestuff-info-card mt-4">
                                            <h5>Cotton / Nylon / Lycra Cross-Dyeing</h5>
                                            <?php $dye_figure('black-edn-cross-dyeing.jpg', 'Cross-dyeing comparison of Everzol Black EDN and commercial reactive dyes on cotton, nylon and lycra', 'Everzol Black EDN vs commercial reactive dyes on cotton, nylon and lycra'); ?>
                                        </div>
                                    </div>
                                </div>

                                <!-- Everzol CS -->
                                <div class="tab-pane fade" id="everzol-cs-product" role="tabpanel" aria-labelledby="everzol-cs-tab" tabindex="0">
                                    <div class="dyestuff-product-panel">
                                        <div class="dyestuff-product-header">
                                            <div>
                                                <h4>Everzol CS</h4>
                                                <p class="dyestuff-product-meta">Reactive Dyes / Exhaust Dyeing</p>
                                            </div>
                                        </div>
                                        <p class="dyestuff-product-lead">
                                            Everzol CS is a critical earth-tone color solution based on tertiary color concepts for trouble-shooting difficult shades with high fastness demands. Built for exceptional levelness, lab-to-bulk reproducibility, and reduced reprocessing risk.
                                        </p>
                                        <div class="dyestuff-info-card">
                                            <h5>Key Advantages</h5>
                                            <ul class="dyestuff-check-list">
                                                <li>Exceptional levelness performance</li>
                                                <li>Confident lab-to-bulk Right First Time reproducibility</li>
                                                <li>Helps eliminate reprocessing risk</li>
                                                <li>Excellent lightfastness and chlorinated water fastness</li>
                                                <li>Non-photochromic behavior</li>
                                                <li>Strong compatibility for emerized fabric and cold pad-batch critical colors</li>
                                            </ul>
                                        </div>
                                        <div class="dyestuff-info-card mt-4">
                                            <h5>Dyeing on Emerized Fabric for Critical Color by Cold Pad-Batch</h5>
                                            <p>
                                                Emerized fabric without face-back sidedness is achieved thanks to the combination of Everzol CS dyes, which have a synchronal uptake mechanism on the fabric. The results show excellent compatibility of Everzol CS dyes, delivering high reproducibility and practically trouble-free dyeing with no tailing or shade variation during padding and fixation.
                                            </p>
                                            <div class="row g-4">
                                                <div class="col-lg-6">
                                                    <?php $dye_figure('everzol-cs-series.jpg', 'Everzol CS Series dye samples, Taiwan Excellence Gold Award 2026', 'Everzol CS Series'); ?>
                                                </div>
                                                <div class="col-lg-6">
                                                    <?php $dye_figure('everzol-cs-shade-chart.jpg', 'Everzol CS shade chart: Yellow, Orange, Red Brown, Olive and Grey CS at 5 g/l and 20 g/l', 'Everzol CS shade chart at 5 g/l and 20 g/l'); ?>
                                                </div>
                                                <div class="col-12">
                                                    <?php $dye_figure('everzol-cs-emerized-face-back.jpg', 'Khaki, olive and grey shades on emerized fabric, face and back, with Everzol CS recipes', 'Khaki, olive and grey shades on emerized fabric — face and back, with recipes in g/l'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Everzol ED-G -->
                                <div class="tab-pane fade" id="everzol-edg-product" role="tabpanel" aria-labelledby="everzol-edg-tab" tabindex="0">
                                    <div class="dyestuff-product-panel">
                                        <div class="dyestuff-product-header">
                                            <div>
                                                <h4>Everzol ED-G</h4>
                                                <p class="dyestuff-product-meta">Reactive Dyes / Exhaust Dyeing — Black ED-G &amp; ED-R</p>
                                            </div>
                                        </div>
                                        <p class="dyestuff-product-lead">
                                            Everzol Black ED-G and Black ED-R are reactive black dyes designed for fashion-driven deep shades with low effluent and easy wash-off. They offer high color yield, economical deep black recipes, and reduced nylon/elastane cross-dyeing on blend fabrics.
                                        </p>
                                        <p class="dyestuff-product-lead"><strong>Reactive black dyes with low effluents and easy wash-off.</strong></p>
                                        <div class="row g-4">
                                            <div class="col-lg-6">
                                                <div class="dyestuff-info-card">
                                                    <h5>Key Advantages</h5>
                                                    <ul class="dyestuff-check-list">
                                                        <li>Low effluent with easy wash-off</li>
                                                        <li>Very low nylon &amp; elastane (Lycra) cross-dyeing in C/N/L blends</li>
                                                        <li>Suitable for discharge printing</li>
                                                        <li>High color yield for deep shades</li>
                                                        <li>Strong wet, washing, perspiration, and rubbing fastness</li>
                                                        <li>Supports multi-cycle oxidative laundering performance (UK-TO)</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="dyestuff-info-card">
                                                    <h5>Unique Fastness Properties</h5>
                                                    <ul class="dyestuff-check-list">
                                                        <li>Wet fastness</li>
                                                        <li>Washing fastness</li>
                                                        <li>Perspiration fastness</li>
                                                        <li>Multi-cycle oxidative laundering test (UK-TO)</li>
                                                        <li>Dry/wet rubbing fastness</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dyestuff-info-card mt-4">
                                            <h5>Exhaust &amp; Cold Pad-Batch Results</h5>
                                            <?php $dye_figure('black-edg-exhaust-cpb.png', 'Everzol Black ED-G and ED-R fabric samples dyed by exhaust at 2% and 6% and cold pad-batch at 20 g/l and 60 g/l', 'Black ED-G and ED-R — exhaust dyeing (2%, 6%) and cold pad-batch (20 g/l, 60 g/l)'); ?>
                                        </div>
                                        <div class="dyestuff-info-card mt-4">
                                            <h5>Wash-off &amp; Cross-Dyeing Performance</h5>
                                            <div class="row g-4">
                                                <div class="col-lg-5">
                                                    <?php $dye_figure('black-edg-wash-off.png', 'Wash-off comparison of Everzol Black ED-G 5%, Black ED-R 5% and Reactive Black N 10%', 'Wash-off: Black ED-G 5%, Black ED-R 5% vs Reactive Black N 10%'); ?>
                                                </div>
                                                <div class="col-lg-7">
                                                    <?php $dye_figure('black-edg-cross-dyeing.png', 'Cross-dyeing on cotton, nylon and lycra for Everzol Black ED-G, Black ED-R and Reactive Black N', 'Cotton / nylon / lycra cross-dyeing: Black ED-G and ED-R vs Reactive Black N'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Everzol LX & LF -->
                                <div class="tab-pane fade" id="everzol-lxlf-product" role="tabpanel" aria-labelledby="everzol-lxlf-tab" tabindex="0">
                                    <div class="dyestuff-product-panel">
                                        <div class="dyestuff-product-header">
                                            <div>
                                                <h4>Everzol LX &amp; LF</h4>
                                                <p class="dyestuff-product-meta">Reactive Dyes / Exhaust Dyeing</p>
                                            </div>
                                        </div>
                                        <p class="dyestuff-product-lead">
                                            Everzol LX / LF dyes deliver excellent levelness and lab-to-bulk reproducibility for pale shade dyeing. LX focuses on compatibility and low sensitivity to dyeing parameter variation, while LF adds high light and perspiration-light fastness.
                                        </p>
                                        <div class="row g-4">
                                            <div class="col-lg-6">
                                                <div class="dyestuff-info-card">
                                                    <h5>Key Advantages</h5>
                                                    <ul class="dyestuff-check-list">
                                                        <li>Excellent compatibility on pale shades</li>
                                                        <li>On-tone migration and synchronal dyeing behavior</li>
                                                        <li>High Right First Time from lab to bulk and bulk to bulk</li>
                                                        <li>Less sensitivity to dyeing parameter variation</li>
                                                        <li>LF selection: excellent light &amp; perspiration-light fastness</li>
                                                        <li>Metal-free options: Red LF-B &amp; Red LF-2B</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="dyestuff-info-card">
                                                    <h5>Supplementary Options</h5>
                                                    <ul class="dyestuff-app-list">
                                                        <li>Brilliant Yellow 4GL</li>
                                                        <li>Brilliant Blue R s/p</li>
                                                        <li>Blue BRF 150%</li>
                                                        <li>Blue ED-G</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dyestuff-info-card mt-4">
                                            <h5>Shade Range</h5>
                                            <div class="row g-3 mb-3">
                                                <div class="col-md-6">
                                                    <div class="dyestuff-shade-box">
                                                        <strong>Everzol LX</strong>
                                                        <p>Yellow LX, Red LX, Blue LX, Navy LX</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="dyestuff-shade-box">
                                                        <strong>Everzol LF</strong>
                                                        <p>Red LF-B, Red LF-2B, Dark Blue LF, Grey LF</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php $dye_figure('everzol-lx-lf-shade-chart.jpg', 'Everzol LX and LF shade chart at 0.1% and 1% with supplementary brilliant yellow and blue dyes', 'Everzol LX & LF shade chart at 0.1% and 1%'); ?>
                                        </div>
                                    </div>
                                </div>

                                <!-- Everzol ERC -->
                                <div class="tab-pane fade" id="everzol-erc-product" role="tabpanel" aria-labelledby="everzol-erc-tab" tabindex="0">
                                    <div class="dyestuff-product-panel">
                                        <div class="dyestuff-product-header">
                                            <div>
                                                <h4>Everzol ERC</h4>
                                                <p class="dyestuff-product-meta">Reactive Dyes / Exhaust Dyeing Solution</p>
                                            </div>
                                        </div>
                                        <p class="dyestuff-product-lead">
                                            Everzol ERC Solution is an eco-resources conservation approach for exhaust dyeing, combining easy wash-off, high fastness, and excellent build-up for fashion-forward and high-chroma shades.
                                        </p>
                                        <div class="dyestuff-info-card">
                                            <h5>Solution Highlights</h5>
                                            <ul class="dyestuff-check-list">
                                                <li>Everzol Blue ERC — easy wash-off, high fastness, excellent build-up</li>
                                                <li>Everzol Bordeaux ERC — energy-saving / easy wash-off Bordeaux</li>
                                                <li>Everzol Saffron ERC — breakthrough in chroma and fastness</li>
                                                <li>Everzol Light Red ERC — effective for sensitive red shade work</li>
                                                <li>Strong support for fashion and macaron color recipes</li>
                                            </ul>
                                        </div>
                                        <div class="dyestuff-info-card mt-4">
                                            <h5>Shade Range</h5>
                                            <ul class="dyestuff-app-list mb-3">
                                                <li>Lemon</li>
                                                <li>Amber</li>
                                                <li>Yellow</li>
                                                <li>Carrot</li>
                                                <li>Saffron</li>
                                                <li>Coral</li>
                                                <li>Pink</li>
                                                <li>Light Red</li>
                                                <li>Rose</li>
                                                <li>Burnt Orange</li>
                                                <li>Deep Orange</li>
                                                <li>Cardinal</li>
                                                <li>Bordeaux</li>
                                                <li>Turquoise Blue</li>
                                                <li>Sky Blue</li>
                                                <li>Blue</li>
                                                <li>Dark Blue</li>
                                                <li>Navy</li>
                                                <li>Marine</li>
                                                <li>Black</li>
                                            </ul>
                                            <?php $dye_figure('everzol-erc-shade-chart.png', 'Everzol ERC shade range from Lemon ERC to Black ERC', 'Everzol ERC shade range'); ?>
                                        </div>
                                    </div>
                                </div>

                                <!-- Everzol Yellow CE-N -->
                                <div class="tab-pane fade" id="everzol-yellow-cen-product" role="tabpanel" aria-labelledby="everzol-yellow-cen-tab" tabindex="0">
                                    <div class="dyestuff-product-panel">
                                        <div class="dyestuff-product-header">
                                            <div>
                                                <h4>Everzol Yellow CE-N</h4>
                                                <p class="dyestuff-product-meta">Reactive Dyes / Exhaust Dyeing</p>
                                            </div>
                                        </div>
                                        <p class="dyestuff-product-lead">
                                            A true golden yellow reactive dye with non-photochromism. Performs strongly in exhaustion, CPB, and continuous dyeing, with excellent padding liquor stability and broad matching from pale-medium to heavy shades.
                                        </p>
                                        <div class="row g-4">
                                            <div class="col-lg-6">
                                                <div class="dyestuff-info-card">
                                                    <h5>Key Advantages</h5>
                                                    <ul class="dyestuff-check-list">
                                                        <li>Non-photochromic golden yellow</li>
                                                        <li>High performance in Exhaustion, CPB, and Continuous dyeing</li>
                                                        <li>Excellent padding liquor stability in CPB and Emoist wet process</li>
                                                        <li>Broad matching from pale-medium to heavy shade</li>
                                                        <li>On-tone face-back on emerized fabric</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="dyestuff-info-card">
                                                    <h5>Trichromatic Recommendations</h5>
                                                    <ul class="dyestuff-check-list">
                                                        <li><strong>Pale to medium:</strong> Yellow CE-N, Red LF-B / Red LF-2B, Blue C-BRF</li>
                                                        <li><strong>Medium to dark:</strong> Yellow CE-N, Red ED-7BN, Blue L-ED / Blue C-BRF</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dyestuff-info-card mt-4">
                                            <h5>Shade Chart</h5>
                                            <?php $dye_figure('everzol-yellow-cen-shade-chart.jpg', 'Everzol Yellow CE-N with Red LF-B, Red LF-2B, Red ED-7BN, Blue C-BRF and Blue L-ED at 10 g/l and 30 g/l', 'Yellow CE-N and trichromatic partners at 10 g/l and 30 g/l'); ?>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Acid Dyes -->
                    <div class="tab-pane fade" id="acid-dyes" role="tabpanel" aria-labelledby="acid-dyes-tab" tabindex="0">
                        <div class="dyestuffs-range-heading">
                            <span class="dyestuffs-kicker">Dyestuffs</span>
                            <h3>Acid Dyes</h3>
                            <p>
                                Acid dyes for nylon, polyamide, and related fibers—including ultrafine and elastane blends. These ranges support levelling pale shades, brilliant deep colors, and high wet and light fastness for apparel, hosiery, swimwear, and performance textiles.
                            </p>
                        </div>

                        <div class="dyestuffs-range-panel">
                            <div class="dyestuff-product-switch">
                                <span class="dyestuff-switch-label">Product Lines</span>
                                <ul class="nav nav-pills dyestuff-product-pills" id="acidProductTabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="everacid-tab" data-bs-toggle="tab" data-bs-target="#everacid-product" type="button" role="tab" aria-controls="everacid-product" aria-selected="true">Everacid</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="ever-pa-tab" data-bs-toggle="tab" data-bs-target="#ever-pa-product" type="button" role="tab" aria-controls="ever-pa-product" aria-selected="false">Ever PA</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="ever-s-tab" data-bs-toggle="tab" data-bs-target="#ever-s-product" type="button" role="tab" aria-controls="ever-s-product" aria-selected="false">Ever S</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="ever-xbw-tab" data-bs-toggle="tab" data-bs-target="#ever-xbw-product" type="button" role="tab" aria-controls="ever-xbw-product" aria-selected="false">Ever X-BW</button>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content" id="acidProductContent">

                                <!-- Everacid A / N / S -->
                                <div class="tab-pane fade show active" id="everacid-product" role="tabpanel" aria-labelledby="everacid-tab" tabindex="0">
                                    <div class="dyestuff-product-panel">
                                        <div class="dyestuff-product-header">
                                            <div>
                                                <h4>Everacid A / N / S</h4>
                                                <p class="dyestuff-product-meta">Acid Dyes / Nylon &amp; Polyamide</p>
                                            </div>
                                        </div>
                                        <p class="dyestuff-product-lead">
                                            The Everacid family covers levelling, milling, and super-milling acid dyes for nylon dyeing—from pale, metal-free shades to brilliant deep colors—with trichromatic systems for consistent recipe matching.
                                        </p>
                                        <div class="row g-4">
                                            <div class="col-lg-6">
                                                <div class="dyestuff-info-card">
                                                    <h5>Range Overview</h5>
                                                    <ul class="dyestuff-check-list">
                                                        <li><strong>Everacid A:</strong> High light fastness for pale shades, excellent levelling, largely metal-free</li>
                                                        <li><strong>Everacid N:</strong> Good build-up for medium to heavy shades, mainly metal-free</li>
                                                        <li><strong>Everacid S:</strong> Brilliant dyes for nylon with strong wet and light fastness on deep shades</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="dyestuff-info-card">
                                                    <h5>Trichromatic Support</h5>
                                                    <p class="mb-0">Dedicated trichromatic combinations within A, N, and S selections help mills standardize shade matching across pale, medium, and deep nylon dyeing without compromising fastness targets.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="dyestuff-info-card mt-4">
                                            <h5>Everacid A Dyes</h5>
                                            <div class="row g-4">
                                                <div class="col-lg-7">
                                                    <p class="fw-semibold mb-2">Properties</p>
                                                    <ul class="dyestuff-check-list">
                                                        <li>High light fastness for pale shades</li>
                                                        <li>High wet fastness in pale shades; medium shades need after-treatment</li>
                                                        <li>Outstanding migration and excellent levelling properties</li>
                                                        <li>Very good coverage on physical barriness, e.g. barré</li>
                                                        <li>Full color yield in trichromatic combinations</li>
                                                        <li>Metal-free</li>
                                                        <li>Simple dyeing method</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-5">
                                                    <p class="fw-semibold mb-2">Dyes</p>
                                                    <ul class="dyestuff-app-list">
                                                        <li>Yellow A-FG</li>
                                                        <li>Yellow A-4R</li>
                                                        <li>Red A-RL</li>
                                                        <li>Bordeaux A-RL</li>
                                                        <li>Blue A-RRL</li>
                                                        <li>Blue A-RL</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="dyestuff-info-card mt-4">
                                            <h5>Everacid N Dyes</h5>
                                            <div class="row g-4">
                                                <div class="col-lg-7">
                                                    <p class="fw-semibold mb-2">Properties</p>
                                                    <ul class="dyestuff-check-list">
                                                        <li>Good build-up for medium-heavy shades</li>
                                                        <li>Moderate to excellent light fastness properties</li>
                                                        <li>Good wet fastness for medium depths; heavy shades require after-treatment</li>
                                                        <li>Medium to good migration</li>
                                                        <li>Good coverage on barriness</li>
                                                        <li>Trichromatic and suitable for single dyeing</li>
                                                        <li>Simple dyeing method</li>
                                                        <li>Mainly metal-free (except blacks)</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-5">
                                                    <p class="fw-semibold mb-2">Dyes</p>
                                                    <ul class="dyestuff-app-list">
                                                        <li>Yellow N-5GW</li>
                                                        <li>Yellow N-MR</li>
                                                        <li>Yellow N-3RL</li>
                                                        <li>Yellow N-3R</li>
                                                        <li>Orange N-G</li>
                                                        <li>Orange N-GTL</li>
                                                        <li>Red N-B</li>
                                                        <li>Red N-2BL</li>
                                                        <li>Red N-FGS</li>
                                                        <li>Red N-RFL</li>
                                                        <li>Red N-RFN</li>
                                                        <li>Red Brown N-V</li>
                                                        <li>Rubine N-5BL</li>
                                                        <li>Turq. Blue N-GRL</li>
                                                        <li>Blue N-AFN</li>
                                                        <li>Blue N-RL</li>
                                                        <li>Cyanine N-5R</li>
                                                        <li>Dark Green N-A</li>
                                                        <li>Black LDN</li>
                                                        <li>Black MR</li>
                                                        <li>Black LD</li>
                                                        <li>Black ACE</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="dyestuff-info-card mt-4">
                                            <h5>Everacid S Dyes</h5>
                                            <div class="row g-4">
                                                <div class="col-lg-7">
                                                    <p class="fw-semibold mb-2">Properties</p>
                                                    <ul class="dyestuff-check-list">
                                                        <li>Brilliant acid dyes</li>
                                                        <li>Very good build-up and levelness on nylon</li>
                                                        <li>Excellent light fastness properties for deep shades</li>
                                                        <li>Very high wet fastness properties in deep shades</li>
                                                        <li>Moderate coverage on barriness</li>
                                                        <li>Good compatibility</li>
                                                        <li>Simple dyeing method</li>
                                                        <li>Medium migration</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-5">
                                                    <p class="fw-semibold mb-2">Dyes</p>
                                                    <ul class="dyestuff-app-list">
                                                        <li>Yellow S-7G</li>
                                                        <li>Yellow S-4GL</li>
                                                        <li>Orange S-GSN</li>
                                                        <li>Red S-GS</li>
                                                        <li>Red S-3B</li>
                                                        <li>Red S-BL</li>
                                                        <li>Red S-GWN</li>
                                                        <li>Rhodamine S-BN</li>
                                                        <li>Violet S-RWN</li>
                                                        <li>Blue S-BLW</li>
                                                        <li>Blue S-2R</li>
                                                        <li>Turq. S-5G</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="dyestuff-info-card mt-4">
                                            <h5>Recommended Trichromatic Dyes</h5>
                                            <div class="row g-3">
                                                <div class="col-md-4">
                                                    <div class="dyestuff-shade-box">
                                                        <strong>Pale-Medium Shades</strong>
                                                        <p>Everacid Yellow A-4R, Red A-RL, Blue A-RL</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="dyestuff-shade-box">
                                                        <strong>Medium Shades</strong>
                                                        <p>Everacid Yellow N-3R, Red N-2BL, Blue N-RL</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="dyestuff-shade-box">
                                                        <strong>Deep Shades</strong>
                                                        <p>Everacid Orange N-GTL, Rubine N-5BL, Cyanine N-5R</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Everset PA -->
                                <div class="tab-pane fade" id="ever-pa-product" role="tabpanel" aria-labelledby="ever-pa-tab" tabindex="0">
                                    <div class="dyestuff-product-panel">
                                        <div class="dyestuff-product-header">
                                            <div>
                                                <h4>Everset PA</h4>
                                                <p class="dyestuff-product-meta">Acid Dyes / Nylon &amp; Nylon/Elastane</p>
                                            </div>
                                        </div>
                                        <p class="dyestuff-product-lead">
                                            Everset PA is engineered for high fastness on nylon and nylon/elastane fabrics, with strong performance on ultrafine polyamide constructions where build-up and compatibility are critical.
                                        </p>
                                        <div class="row g-4">
                                            <div class="col-lg-6">
                                                <div class="dyestuff-info-card">
                                                    <h5>Key Advantages</h5>
                                                    <ul class="dyestuff-check-list">
                                                        <li>Excellent wet, light, and chlorinated water fastness</li>
                                                        <li>Outstanding build-up on ultrafine nylon</li>
                                                        <li>Excellent compatibility within the range</li>
                                                        <li>Suitable for demanding nylon/elastane articles</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="dyestuff-info-card">
                                                    <h5>Typical Applications</h5>
                                                    <ul class="dyestuff-app-list">
                                                        <li>Swimwear &amp; sportswear</li>
                                                        <li>Legwear &amp; hosiery</li>
                                                        <li>Microfiber nylon apparel</li>
                                                        <li>High-fastness fashion nylon</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dyestuff-info-card mt-4">
                                            <h5>Shade Range</h5>
                                            <ul class="dyestuff-app-list mb-3">
                                                <li>Yellow PA-4G</li>
                                                <li>Yellow PA-2G</li>
                                                <li>Yellow PA</li>
                                                <li>Orange PA-2R</li>
                                                <li>Red PA-3G</li>
                                                <li>Red PA</li>
                                                <li>Red PA-4B</li>
                                                <li>Bordeaux PA</li>
                                                <li>Blue PA-2R</li>
                                                <li>Blue PA</li>
                                                <li>Navy PA</li>
                                                <li>Black PA-R</li>
                                            </ul>
                                            <?php $dye_figure('everset-pa-shade-chart.jpg', 'Everset PA shade chart at 1/12N and 1/1N standard depth', 'Everset PA shade chart at 1/12N and 1/1N'); ?>
                                        </div>
                                    </div>
                                </div>

                                <!-- Everacid S -->
                                <div class="tab-pane fade" id="ever-s-product" role="tabpanel" aria-labelledby="ever-s-tab" tabindex="0">
                                    <div class="dyestuff-product-panel">
                                        <div class="dyestuff-product-header">
                                            <div>
                                                <h4>Everacid S</h4>
                                                <p class="dyestuff-product-meta">Acid Dyes / Nylon Brilliant Shades</p>
                                            </div>
                                        </div>
                                        <p class="dyestuff-product-lead">
                                            Everacid S delivers brilliant acid dyes optimized for single-shade nylon dyeing, including nylon/elastane goods where wet fastness and shade versatility matter for bulk production.
                                        </p>
                                        <p class="dyestuff-product-lead">
                                            The Everacid S range is specially designed for brilliant colors on nylon and is dominant in single shade dyeing. For certain shades, shading with Everacid N and S dyes can be combined.
                                        </p>
                                        <div class="dyestuff-info-card">
                                            <h5>Key Advantages</h5>
                                            <ul class="dyestuff-check-list">
                                                <li>Brilliant shade appearance on nylon</li>
                                                <li>Focused on efficient single-shade dyeing</li>
                                                <li>Strong wet fastness performance</li>
                                                <li>Versatile for nylon and nylon/elastane substrates</li>
                                                <li>Very good build-up and levelness on nylon</li>
                                                <li>Excellent light fastness and very high wet fastness in deep shades</li>
                                                <li>Good compatibility and a simple dyeing method</li>
                                            </ul>
                                        </div>
                                        <div class="dyestuff-info-card mt-4">
                                            <h5>Shade Chart <span>(Nylon Knits)</span></h5>
                                            <?php $dye_figure('everacid-s-shade-chart.jpg', 'Everacid S shade chart on nylon knits at 1/12N and 1/1N', 'Everacid S shade chart on nylon knits at 1/12N and 1/1N'); ?>
                                        </div>
                                    </div>
                                </div>

                                <!-- Everacid Black X-BWE -->
                                <div class="tab-pane fade" id="ever-xbw-product" role="tabpanel" aria-labelledby="ever-xbw-tab" tabindex="0">
                                    <div class="dyestuff-product-panel">
                                        <div class="dyestuff-product-header">
                                            <div>
                                                <h4>Everacid Black X-BWE</h4>
                                                <p class="dyestuff-product-meta">Acid Dyes / Nylon Microfiber Black</p>
                                            </div>
                                        </div>
                                        <p class="dyestuff-product-lead">
                                            Everacid Black X-BWE offers an eco-oriented build-up route for deep black on nylon microfibers, combining excellent absorption with reduced wastewater load for lasting, rich black shades.
                                        </p>
                                        <div class="row g-4">
                                            <div class="col-lg-6">
                                                <div class="dyestuff-info-card">
                                                    <h5>Key Advantages</h5>
                                                    <ul class="dyestuff-check-list">
                                                        <li>Unique build-up for nylon microfiber blacks</li>
                                                        <li>Excellent dye absorption efficiency</li>
                                                        <li>Reduced wastewater versus conventional black routes</li>
                                                        <li>Deep, durable black appearance</li>
                                                        <li>37% lower recipe and 98% lower optical residual versus commercial acid black</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="dyestuff-info-card">
                                                    <h5>Process Focus</h5>
                                                    <ul class="dyestuff-app-list">
                                                        <li>Nylon microfiber piece dyeing</li>
                                                        <li>Deep black sport &amp; fashion nylon</li>
                                                        <li>Eco-conscious black shade programs</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dyestuff-info-card mt-4">
                                            <h5>Dyeing Residue Comparison</h5>
                                            <?php $dye_figure('everacid-black-xbwe-residue.jpg', 'Dyeing residue and three wash-off baths for commercial acid black 9.5% versus Everacid Black X-BWE 6.0%', 'Commercial acid black 9.5% vs Everacid Black X-BWE 6.0% — 37% less recipe, 98% less optical residual'); ?>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Inks For Textile Digital Print -->
                    <div class="tab-pane fade" id="digital-inks" role="tabpanel" aria-labelledby="digital-inks-tab" tabindex="0">
                        <div class="dyestuffs-range-heading">
                            <span class="dyestuffs-kicker">Digital Textile</span>
                            <h3>Inks For Textile Digital Print</h3>
                            <p>
                                Everjet textile digital inks support direct and transfer printing on woven and knitted fabrics. Formulated for stable jetting, sharp color, and reliable fastness, they help print houses move from sampling to bulk with predictable results on acid- and reactive-compatible substrates.
                            </p>
                        </div>

                        <div class="dyestuffs-range-panel">
                            <div class="dyestuff-product-panel">
                                <div class="dyestuff-product-header">
                                    <div>
                                        <h4>Everjet Textile Digital Inks</h4>
                                        <p class="dyestuff-product-meta">Inks For Textile Digital Printing</p>
                                    </div>
                                </div>
                                <p class="dyestuff-product-lead">
                                    Choose acid-based Everjet AT for polyamide-driven print programs, or reactive-based Everjet RT for cellulose and blend applications—both aligned with industrial digital textile production requirements.
                                </p>
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div class="dyestuff-info-card h-100">
                                            <h5>Everjet AT — Acid Ink for Textile</h5>
                                            <ul class="dyestuff-check-list">
                                                <li>Acid ink system for nylon and polyamide digital print</li>
                                                <li>Brilliant shades with stable print performance</li>
                                                <li>Suitable for fashion, sport, and technical nylon prints</li>
                                                <li>Compatible with industrial digital print workflows</li>
                                            </ul>
                                            <p class="fw-semibold mt-3 mb-2">Colors</p>
                                            <ul class="dyestuff-app-list mb-3">
                                                <li>Cyan</li>
                                                <li>Light Cyan</li>
                                                <li>Magenta</li>
                                                <li>Light Magenta</li>
                                                <li>Yellow</li>
                                                <li>Orange</li>
                                                <li>Black</li>
                                                <li>Grey</li>
                                                <li>Red</li>
                                                <li>Blue</li>
                                                <li>Flavine</li>
                                                <li>Rhodamine</li>
                                            </ul>
                                            <?php $dye_figure('everjet-at-colors.jpg', 'Everjet AT color chart: cyan, light cyan, magenta, light magenta, yellow, orange, black, grey, red, blue, flavine and rhodamine', 'Everjet AT color chart'); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="dyestuff-info-card h-100">
                                            <h5>Everjet RT — Reactive Ink for Textile</h5>
                                            <ul class="dyestuff-check-list">
                                                <li>Reactive ink system for cotton, viscose, and cellulose blends</li>
                                                <li>Strong color gamut for apparel and home textile print</li>
                                                <li>Supports direct-to-fabric and related digital processes</li>
                                                <li>Designed for consistent bulk production quality</li>
                                            </ul>
                                            <p class="fw-semibold mt-3 mb-2">Colors</p>
                                            <ul class="dyestuff-app-list mb-3">
                                                <li>Light Cyan</li>
                                                <li>Cyan</li>
                                                <li>Light Magenta</li>
                                                <li>Magenta</li>
                                                <li>Yellow</li>
                                                <li>Black</li>
                                                <li>Grey</li>
                                                <li>Orange</li>
                                                <li>Red</li>
                                                <li>Blue</li>
                                            </ul>
                                            <?php $dye_figure('everjet-rt-colors.jpg', 'Everjet RT color chart on mercerized cotton and silk: light cyan, cyan, light magenta, magenta, yellow, black, grey, orange, red and blue', 'Everjet RT color chart on mercerized cotton and silk'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Auxiliaries for Textile -->
                    <div class="tab-pane fade" id="auxiliaries-textile" role="tabpanel" aria-labelledby="auxiliaries-tab" tabindex="0">
                        <div class="dyestuffs-range-heading">
                            <span class="dyestuffs-kicker">Process Chemicals</span>
                            <h3>Auxiliaries for Textile</h3>
                        </div>

                        <div class="dyestuffs-range-panel">
                            <?php include __DIR__ . '/jintex-catalog.php'; ?>
                        </div>
                    </div>

                    <!-- E Brochure -->
                    <div class="tab-pane fade" id="e-brochure" role="tabpanel" aria-labelledby="e-brochure-tab" tabindex="0">
                        <div class="dyestuffs-range-heading">
                            <span class="dyestuffs-kicker">Downloads</span>
                            <h3>E Brochure</h3>
                            <p>
                                Download textile color-chemistry brochures for technical reference, shade planning, and customer presentations.
                            </p>
                        </div>

                        <div class="dyestuffs-range-panel">
                            <div class="dyestuff-brochure-grid row g-4">
                                <div class="col-md-6 col-lg-4">
                                    <div class="dyestuff-brochure-card dyestuff-info-card h-100">
                                        <h5>Color Chemical for Textile (2019)</h5>
                                        <p>Overview of Everlight textile color chemistry and product families.</p>
                                        <a class="dyestuff-source-btn" href="./assets/images/products-and-solutions/textile-dyes-and-chemicals/e-brochures/color-chemical-for-textile-2019.pdf" target="_blank" rel="noopener noreferrer">
                                            Download PDF <i class="fal fa-file-pdf"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="dyestuff-brochure-card dyestuff-info-card h-100">
                                        <h5>Evertex Series</h5>
                                        <p>Technical brochure for Evertex disperse and related textile color solutions.</p>
                                        <a class="dyestuff-source-btn" href="./assets/images/products-and-solutions/textile-dyes-and-chemicals/e-brochures/evertex-series.jpg" target="_blank" rel="noopener noreferrer">
                                            View Brochure <i class="fal fa-file-image"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="dyestuff-brochure-card dyestuff-info-card h-100">
                                        <h5>Everacid &amp; Everset Dyes</h5>
                                        <p>Acid dye ranges for nylon and polyamide—including fastness-focused selections.</p>
                                        <a class="dyestuff-source-btn" href="./assets/images/products-and-solutions/textile-dyes-and-chemicals/e-brochures/everacid-everset-dyes.jpg" target="_blank" rel="noopener noreferrer">
                                            View Brochure <i class="fal fa-file-image"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="dyestuff-brochure-card dyestuff-info-card h-100">
                                        <h5>Everzol Dyes</h5>
                                        <p>Reactive dye portfolio for cellulose exhaust, CPB, continuous, and print.</p>
                                        <a class="dyestuff-source-btn" href="./assets/images/products-and-solutions/textile-dyes-and-chemicals/e-brochures/everzol-dyes.jpg" target="_blank" rel="noopener noreferrer">
                                            View Brochure <i class="fal fa-file-image"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="dyestuff-brochure-card dyestuff-info-card h-100">
                                        <h5>Everzol ERC Solution</h5>
                                        <p>Eco-resources conservation reactive dyeing concept and shade highlights.</p>
                                        <a class="dyestuff-source-btn" href="./assets/images/products-and-solutions/textile-dyes-and-chemicals/e-brochures/everzol-erc-solution.jpg" target="_blank" rel="noopener noreferrer">
                                            View Brochure <i class="fal fa-file-image"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="dyestuff-brochure-card dyestuff-info-card h-100">
                                        <h5>Safe and Friendly Dyestuff</h5>
                                        <p>Sustainability and compliance-oriented dyestuff selections for responsible supply chains.</p>
                                        <a class="dyestuff-source-btn" href="./assets/images/products-and-solutions/textile-dyes-and-chemicals/e-brochures/safe-and-friendly-dyestuff.jpg" target="_blank" rel="noopener noreferrer">
                                            View Brochure <i class="fal fa-file-image"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>