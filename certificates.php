<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './layout/seo.php'; ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="./assets/styling/style.css?v=certs2">
</head>

<body>
    <?php include './layout/header.php'; ?>

    <?php
    $certificate_groups = [
        [
            'id' => 'fav',
            'folder' => 'FAV',
            'label' => 'FAV & Co.',
            'items' => [
                [
                    'file' => 'FAV-ISO-9001-2015.pdf',
                    'title' => 'ISO 9001:2015',
                    'type' => 'Quality Management',
                ],
                [
                    'file' => 'FAV-food.pdf',
                    'title' => 'Food Certificate',
                    'type' => 'Food Safety',
                ],
            ],
        ],
        [
            'id' => 'plastico',
            'folder' => 'Plastico',
            'label' => 'FAV Plastico (Pvt.) Limited',
            'items' => [
                [
                    'file' => 'ISO 9001 Certificate 2025.pdf',
                    'title' => 'ISO 9001',
                    'type' => 'Quality Management',
                ],
                [
                    'file' => 'ISO-22000-2018.pdf',
                    'title' => 'ISO 22000:2018',
                    'type' => 'Food Safety',
                ],
                [
                    'file' => 'IHC Halal Certificate-FAV PLASTICO (PVT) LIMITED-2026-2027.pdf',
                    'title' => 'IHC Halal Certificate 2026–2027',
                    'type' => 'Halal',
                ],
                [
                    'file' => 'IHC Halal Certificate Annexure -FAV PLASTICO (PVT) LIMITED-2026-2027.pdf',
                    'title' => 'IHC Halal Certificate Annexure 2026–2027',
                    'type' => 'Halal',
                ],
            ],
        ],
        [
            'id' => 'veechem',
            'folder' => 'Veechem',
            'label' => 'Veechem Industries (Pvt.) Ltd.',
            'items' => [
                [
                    'file' => 'Veechem-ISO-9001-2015.pdf',
                    'title' => 'ISO 9001:2015',
                    'type' => 'Quality Management',
                ],
                [
                    'file' => 'ISO-14001-2015.pdf',
                    'title' => 'ISO 14001:2015',
                    'type' => 'Environmental Management',
                ],
                [
                    'file' => 'ISO-45001-2018.jpg',
                    'title' => 'ISO 45001:2018',
                    'type' => 'Occupational Health & Safety',
                ],
                [
                    'file' => 'GCL GOTS S4.pdf',
                    'title' => 'GOTS',
                    'type' => 'Organic Textile',
                ],
                [
                    'file' => 'ZDHC-level-3.pdf',
                    'title' => 'ZDHC Level 3',
                    'type' => 'Chemical Management',
                ],
            ],
        ],
    ];
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
                Current certificates for FAV, Plastico and Veechem — ISO,
                Halal, GOTS and ZDHC documents grouped by company.
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
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <span class="ne-eyebrow">CERTIFICATIONS</span>
                    <h2>International quality standards</h2>
                    <p>
                        Certificates are organised by company folder: FAV, Plastico and
                        Veechem. Each document is labelled by certificate type, including
                        quality, environmental, food safety, Halal, GOTS and ZDHC.
                    </p>
                    <p>
                        FAV holds ISO 9001:2015. Plastico holds ISO 9001, ISO 22000:2018
                        and IHC Halal for 2026–2027. Veechem holds ISO 9001:2015,
                        ISO 14001:2015, ISO 45001:2018, GOTS and ZDHC Level 3.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-sm-4 col-6">
                            <div class="op-stat-card">
                                <h3>ISO</h3>
                                <p>9001, 14001, 22000, 45001</p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div class="op-stat-card">
                                <h3>Halal</h3>
                                <p>Plastico 2026–2027</p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div class="op-stat-card">
                                <h3>GOTS</h3>
                                <p>Veechem textile</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cert-gallery-section" id="certificate-gallery">
        <div class="container">
            <div class="cu-section-head text-center">
                <span class="ne-eyebrow">DOCUMENT GALLERY</span>
                <h2>Certificates</h2>
                <p>Grouped by company folder. Open any certificate in a new tab.</p>
            </div>
            <?php foreach ($certificate_groups as $group): ?>
                <div class="cert-group" id="<?= htmlspecialchars($group['id']) ?>">
                    <div class="cert-group-head">
                        <h3><?= htmlspecialchars($group['label']) ?></h3>
                        <span><?= htmlspecialchars($group['folder']) ?></span>
                    </div>
                    <div class="row g-4">
                        <?php foreach ($group['items'] as $item):
                            $ext = strtolower(pathinfo($item['file'], PATHINFO_EXTENSION));
                            $href = './assets/images/certificates/'
                                . ($group['folder'] === 'FAV' ? '' : rawurlencode($group['folder']) . '/')
                                . rawurlencode($item['file']);
                        ?>
                            <div class="col-lg-4 col-md-6">
                                <a class="cert-card"
                                    href="<?= htmlspecialchars($href) ?>"
                                    target="_blank"
                                    rel="noopener noreferrer">
                                    <span class="cert-card-tag"><?= htmlspecialchars($item['type']) ?></span>
                                    <div class="cert-card-img">
                                        <?php if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp'], true)): ?>
                                            <img src="<?= htmlspecialchars($href) ?>"
                                                alt="<?= htmlspecialchars($item['title']) ?>">
                                        <?php else: ?>
                                            <div class="cert-card-file">
                                                <i class="fal fa-file-pdf"></i>
                                                <span><?= htmlspecialchars(strtoupper($ext)) ?></span>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="cert-card-body">
                                        <h3><?= htmlspecialchars($item['title']) ?></h3>
                                        <span>Open certificate <i class="fal fa-external-link"></i></span>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
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
</body>

</html>
