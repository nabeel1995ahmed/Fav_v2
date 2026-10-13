<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './layout/seo.php'; ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="./assets/styling/style.css?v=banners3">
</head>

<body>
    <?php include './layout/header.php'; ?>

    <?php
    $certificates = [
        [
            'file' => 'ecocert-1.jpg',
            'title' => 'EcoCert Certificate',
            'group' => 'EcoCert',
        ],
        [
            'file' => 'ecocert-2.jpg',
            'title' => 'EcoCert Certificate',
            'group' => 'EcoCert',
        ],
        [
            'file' => 'ecocert-3.jpg',
            'title' => 'EcoCert Certificate',
            'group' => 'EcoCert',
        ],
        [
            'file' => 'ecocert-4.jpg',
            'title' => 'EcoCert Certificate',
            'group' => 'EcoCert',
        ],
        [
            'file' => 'halal-1.jpg',
            'title' => 'Halal Certificate',
            'group' => 'Halal',
        ],
        [
            'file' => 'halal-2.jpg',
            'title' => 'Halal Certificate',
            'group' => 'Halal',
        ],
        [
            'file' => 'ISO-1.jpg',
            'title' => 'ISO 9001 Certificate',
            'group' => 'ISO 9001',
        ],
        [
            'file' => 'ISO-2.jpg',
            'title' => 'ISO 9001 Certificate',
            'group' => 'ISO 9001',
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
                ISO 9001 since 2003, EcoCert and Halal credentials — the same
                certificates published on vawda.com, presented here in a
                responsive gallery.
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
                        FAV &amp; Co. has been registered with ISO 9001 certification since 2003,
                        known for best practices in quality management, and is accredited by
                        British BVQI. After quality, environmental sustainability is an integral
                        part of our success.
                    </p>
                    <p>
                        We are committed to world-class products with less environmental
                        contamination, and we maintain Halal and EcoCert documentation for
                        relevant manufacturing units.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-sm-4 col-6">
                            <div class="op-stat-card">
                                <h3>ISO 9001</h3>
                                <p>Since 2003</p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div class="op-stat-card">
                                <h3>EcoCert</h3>
                                <p>Organic credentials</p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div class="op-stat-card">
                                <h3>Halal</h3>
                                <p>Certified products</p>
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
                <p>Tap any certificate to open the full-size scan in a new tab.</p>
            </div>
            <div class="row g-4">
                <?php foreach ($certificates as $item): ?>
                    <div class="col-lg-6 col-md-6">
                        <a class="cert-card"
                            href="./assets/images/certificates/<?= htmlspecialchars($item['file']) ?>"
                            target="_blank"
                            rel="noopener noreferrer">
                            <span class="cert-card-tag"><?= htmlspecialchars($item['group']) ?></span>
                            <div class="cert-card-img">
                                <img src="./assets/images/certificates/<?= htmlspecialchars($item['file']) ?>"
                                    alt="<?= htmlspecialchars($item['title']) ?>">
                            </div>
                            <div class="cert-card-body">
                                <h3><?= htmlspecialchars($item['title']) ?></h3>
                                <span>View full size <i class="fal fa-external-link"></i></span>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
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
</body>

</html>
