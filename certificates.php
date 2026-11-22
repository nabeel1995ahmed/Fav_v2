<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './layout/seo.php'; ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="./assets/styling/style.css?v=banner14">
</head>

<body>
    <?php include './layout/header.php'; ?>

    <?php
    $certThumbBase = './assets/images/certificates/thumbs';

    $certificate_groups = [
        [
            'id' => 'fav',
            'folder' => 'FAV',
            'label' => 'FAV & Co.',
            'short' => 'FAV',
            'items' => [
                [
                    'file' => 'FAV-ISO-9001-2015.pdf',
                    'thumb' => 'FAV/FAV-ISO-9001-2015.jpg',
                    'title' => 'ISO 9001:2015',
                    'type' => 'Quality Management',
                    'code' => 'ISO 9001',
                ],
                [
                    'file' => 'FAV-food.pdf',
                    'thumb' => 'FAV/FAV-food.jpg',
                    'title' => 'Food Certificate',
                    'type' => 'Food Safety',
                    'code' => 'Food',
                ],
            ],
        ],
        [
            'id' => 'plastico',
            'folder' => 'Plastico',
            'label' => 'FAV Plastico (Pvt.) Limited',
            'short' => 'Plastico',
            'items' => [
                [
                    'file' => 'ISO 9001 Certificate 2025.pdf',
                    'thumb' => 'Plastico/ISO-9001-Certificate-2025.jpg',
                    'title' => 'ISO 9001',
                    'type' => 'Quality Management',
                    'code' => 'ISO 9001',
                ],
                [
                    'file' => 'ISO-22000-2018.pdf',
                    'thumb' => 'Plastico/ISO-22000-2018.jpg',
                    'title' => 'ISO 22000:2018',
                    'type' => 'Food Safety',
                    'code' => 'ISO 22000',
                ],
                [
                    'file' => 'IHC Halal Certificate-FAV PLASTICO (PVT) LIMITED-2026-2027.pdf',
                    'thumb' => 'Plastico/IHC-Halal-Certificate.jpg',
                    'title' => 'IHC Halal Certificate 2026–2027',
                    'type' => 'Halal Certification',
                    'code' => 'Halal',
                ],
                [
                    'file' => 'IHC Halal Certificate Annexure -FAV PLASTICO (PVT) LIMITED-2026-2027.pdf',
                    'thumb' => 'Plastico/IHC-Halal-Certificate-Annexure.jpg',
                    'title' => 'IHC Halal Certificate Annexure 2026–2027',
                    'type' => 'Halal Certification',
                    'code' => 'Annexure',
                ],
            ],
        ],
        [
            'id' => 'veechem',
            'folder' => 'Veechem',
            'label' => 'Veechem Industries (Pvt.) Ltd.',
            'short' => 'Veechem',
            'items' => [
                [
                    'file' => 'Veechem-ISO-9001-2015.pdf',
                    'thumb' => 'Veechem/Veechem-ISO-9001-2015.jpg',
                    'title' => 'ISO 9001:2015',
                    'type' => 'Quality Management',
                    'code' => 'ISO 9001',
                ],
                [
                    'file' => 'ISO-14001-2015.pdf',
                    'thumb' => 'Veechem/ISO-14001-2015.jpg',
                    'title' => 'ISO 14001:2015',
                    'type' => 'Environmental Management',
                    'code' => 'ISO 14001',
                ],
                [
                    'file' => 'ISO-45001-2018.jpg',
                    'thumb' => 'Veechem/ISO-45001-2018.jpg',
                    'title' => 'ISO 45001:2018',
                    'type' => 'Occupational Health & Safety',
                    'code' => 'ISO 45001',
                ],
                [
                    'file' => 'GCL GOTS S4.pdf',
                    'thumb' => 'Veechem/GCL-GOTS-S4.jpg',
                    'title' => 'GOTS',
                    'type' => 'Organic Textile',
                    'code' => 'GOTS',
                ],
                [
                    'file' => 'ZDHC-level-3.pdf',
                    'thumb' => 'Veechem/ZDHC-level-3.jpg',
                    'title' => 'ZDHC Level 3',
                    'type' => 'Chemical Management',
                    'code' => 'ZDHC',
                ],
            ],
        ],
    ];

    $totalCertificates = array_sum(array_map(static fn($group) => count($group['items']), $certificate_groups));
    ?>

    <section class="hero-section cert-banner-section">
        <div class="container">
            <div class="breadcrumb">
                <ul>
                    <li><a href="./">Home</a></li>
                    <li><i class="fal fa-angle-right"></i></li>
                    <li><span>Certificates</span></li>
                </ul>
            </div>
            <span class="hero-label">QUALITY ASSURANCE</span>
            <h1 class="hero-title">OUR <span>CERTIFICATES</span></h1>
            <p class="cu-banner-text">
                Verified credentials across FAV, Plastico and Veechem — ISO, Halal, GOTS and ZDHC documentation for audits, tenders and customer assurance.
            </p>
            <div class="hero-buttons">
                <a href="#certificate-gallery" class="btn btn-warning text-white">
                    VIEW CERTIFICATES
                    <i class="fal fa-file-certificate"></i>
                </a>
                <a href="./about-us.php" class="btn btn-outline-light">
                    ABOUT US
                    <i class="fal fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <section class="cert-intro-section">
        <div class="container">
            <div class="cert-intro-copy">
                <span class="ne-eyebrow">ACCREDITATION</span>
                <h2>Trusted standards for manufacturing and supply</h2>
                <p>
                    Our group companies maintain internationally recognised certifications covering quality systems, food safety, environmental responsibility, occupational health, Halal compliance and chemical management.
                </p>
            </div>
            <div class="cert-intro-metrics">
                <div class="cert-metric">
                    <strong><?= (int) $totalCertificates ?></strong>
                    <span>Active certificates</span>
                </div>
                <div class="cert-metric">
                    <strong>3</strong>
                    <span>Group companies</span>
                </div>
                <div class="cert-metric">
                    <strong>ISO</strong>
                    <span>9001 · 14001 · 22000 · 45001</span>
                </div>
            </div>
        </div>
    </section>

    <section class="cert-gallery-section" id="certificate-gallery">
        <div class="container">
            <div class="cu-section-head text-center">
                <span class="ne-eyebrow">OFFICIAL DOCUMENTS</span>
                <h2>Certificate library</h2>
                <p>Preview each certificate and open the original document in a new tab.</p>
            </div>

            <div class="iac-catalog cert-catalog">
                <ul class="nav nav-tabs iac-category-tabs" id="certCompanyTabs" role="tablist">
                    <?php foreach ($certificate_groups as $groupIndex => $group):
                        $tabId = 'cert-' . $group['id'];
                        $isActive = $groupIndex === 0;
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
                            <?= htmlspecialchars($group['short']) ?>
                        </button>
                    </li>
                    <?php endforeach; ?>
                </ul>

                <div class="tab-content iac-category-content" id="certCompanyTabContent">
                    <?php foreach ($certificate_groups as $groupIndex => $group):
                        $tabId = 'cert-' . $group['id'];
                        $isActive = $groupIndex === 0;
                    ?>
                    <div
                        class="tab-pane fade<?= $isActive ? ' show active' : '' ?>"
                        id="<?= htmlspecialchars($tabId) ?>"
                        role="tabpanel"
                        aria-labelledby="<?= htmlspecialchars($tabId) ?>-tab"
                        tabindex="0"
                    >
                        <div class="iac-category-intro">
                            <span class="product-subheading"><?= htmlspecialchars($group['label']) ?></span>
                            <p><?= count($group['items']) ?> certificate<?= count($group['items']) === 1 ? '' : 's' ?> in this range</p>
                        </div>

                        <div class="cert-grid">
                            <?php foreach ($group['items'] as $item):
                                $ext = strtolower(pathinfo($item['file'], PATHINFO_EXTENSION));
                                $href = './assets/images/certificates/'
                                    . ($group['folder'] === 'FAV' ? '' : rawurlencode($group['folder']) . '/')
                                    . rawurlencode($item['file']);
                                $thumb = !empty($item['thumb'])
                                    ? $certThumbBase . '/' . $item['thumb']
                                    : $href;
                            ?>
                                <a class="cert-doc"
                                    href="<?= htmlspecialchars($href) ?>"
                                    target="_blank"
                                    rel="noopener noreferrer">
                                    <div class="cert-doc-frame">
                                        <div class="cert-doc-preview has-image">
                                            <img src="<?= htmlspecialchars($thumb) ?>"
                                                alt="<?= htmlspecialchars($item['title']) ?>"
                                                loading="lazy">
                                        </div>
                                        <span class="cert-doc-badge">
                                            <i class="fal fa-<?= $ext === 'pdf' ? 'file-pdf' : 'image' ?>" aria-hidden="true"></i>
                                            <?= htmlspecialchars(strtoupper($ext)) ?>
                                        </span>
                                    </div>
                                    <div class="cert-doc-body">
                                        <span class="cert-doc-type"><?= htmlspecialchars($item['type']) ?></span>
                                        <h4><?= htmlspecialchars($item['title']) ?></h4>
                                        <span class="cert-doc-action">
                                            View certificate
                                            <i class="fal fa-arrow-right" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <h2>Need documentation for a tender or audit?</h2>
                    <p>Contact our Karachi, Lahore or Faisalabad office and we will share the relevant credentials.</p>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="hero-buttons">
                        <a href="./contact-us.php" class="btn btn-warning text-white">
                            CONTACT US
                            <i class="fa fa-paper-plane"></i>
                        </a>
                        <a href="./about-us.php" class="btn btn-outline-light">
                            OUR STORY
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include './layout/footer.php'; ?>

    <script src="./assets/jquery/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    (function () {
        var hash = window.location.hash;
        if (!hash || hash.indexOf('#cert-') !== 0) {
            return;
        }
        var tabTrigger = document.querySelector('[data-bs-target="' + hash + '"]');
        if (!tabTrigger || typeof bootstrap === 'undefined') {
            return;
        }
        bootstrap.Tab.getOrCreateInstance(tabTrigger).show();
        var gallery = document.getElementById('certificate-gallery');
        if (gallery) {
            gallery.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    })();
    </script>
</body>

</html>
