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
    $principals = [
        [
            'category' => 'textiles',
            'label' => 'Textiles',
            'name' => 'Everlight Chemical Industrial Corporation',
            'logo' => 'principals-everlight-chemicals-industrial-corporation.png',
            'text' => 'Founded in 1972, Everlight began in dyestuffs with research, production and sales. Today it manufactures specialty chemicals that support industrial growth and high-performance textile applications.',
        ],
        [
            'category' => 'textiles',
            'label' => 'Textiles',
            'name' => 'Jintex Corporation Limited',
            'logo' => 'principals-jintex-corporation-limited.png',
            'text' => 'Established in 1978, Jintex is built on integrity, innovation, service and care. Continuous process improvement has made it one of Asia’s leading specialty chemical manufacturers.',
        ],
        [
            'category' => 'textiles',
            'label' => 'Textiles',
            'name' => 'Resil Chemicals Pvt Ltd',
            'logo' => 'principals-resil-chemicals-pvt-ltd.png',
            'text' => 'Resil developed one of the widest silicone portfolios for fabric finishing, combining application knowledge with products that transform textile performance.',
        ],
        [
            'category' => 'textiles',
            'label' => 'Textiles',
            'name' => 'Zydex Industries',
            'logo' => 'principals-zydex-industries.png',
            'text' => 'Zydex commercializes eco-friendly water-based polymer technologies for sizing, dyeing and finishing — delivering performance and process economics for modern mills.',
        ],
        [
            'category' => 'textiles',
            'label' => 'Textiles',
            'name' => 'Jitat Company Limited',
            'logo' => 'principals-jitat-company-limited.png',
            'text' => 'A Hong Kong and China based company since 1985, Jitat specializes in optical brighteners, textile auxiliaries, dyes, pigments and UV absorbents with over 1,000 tons of OBA capacity annually.',
        ],
        [
            'category' => 'textiles',
            'label' => 'Textiles',
            'name' => 'Fang Yuan Instrument Co. Ltd',
            'logo' => 'principals-fang-yuan-instrument.png',
            'text' => 'FYI designs and manufactures cost-effective laboratory instruments for textile, dyeing, garment, leather, fibre and related industrial testing applications.',
        ],
        [
            'category' => 'textiles',
            'label' => 'Textiles',
            'name' => 'Contherm Scientific',
            'logo' => 'principals-contherm-scientific.png',
            'text' => 'A leading Australasian manufacturer of laboratory ovens, incubators and environmental chambers, exporting across the Asia Pacific region since 1962.',
        ],
        [
            'category' => 'textiles',
            'label' => 'Textiles',
            'name' => 'Shanghai C&D International Chemical Co., Ltd.',
            'logo' => 'principals-tolas-international-trading.png',
            'text' => 'Part of a group established in 1961, Shanghai C&D focuses on warp sizing, fine chemicals and applied textile technology with strong R&D and after-sales support.',
        ],
        [
            'category' => 'textiles',
            'label' => 'Textiles',
            'name' => 'GTI Graphic Technology',
            'logo' => 'principals-gti-true-color.png',
            'text' => 'Founded in 1975 in Newburgh, NY, GTI manufactures precision color viewing systems with in-house spectroradiometric verification and worldwide availability.',
        ],
        [
            'category' => 'toners',
            'label' => 'Toners',
            'name' => 'Trend Tone Imaging',
            'logo' => 'principals-tti.png',
            'text' => 'Established in 1990 in Hsinchu Science Park, TTI was Taiwan’s first independent toner manufacturer and remains one of the world’s largest producers of copier and laser printer toners.',
        ],
        [
            'category' => 'energy',
            'label' => 'Energy & Inverters',
            'name' => 'Delixi Electric',
            'logo' => 'principals-delixi.png',
            'text' => 'A leading China low-voltage brand providing distribution and industrial automation solutions for power, building, infrastructure, metallurgy and aviation projects.',
        ],
        [
            'category' => 'energy',
            'label' => 'Energy & Inverters',
            'name' => 'Schneider Electric',
            'logo' => 'principals-schneider.png',
            'text' => 'Schneider Electric develops connected technologies to manage energy and processes that are safe, reliable, efficient and sustainable — with sustainability at the core of its strategy.',
        ],
        [
            'category' => 'compressors',
            'label' => 'Air Compressors',
            'name' => 'ALUP Kompressoren',
            'logo' => 'principals-alup.png',
            'text' => 'Founded in 1923 near Stuttgart, ALUP is known for screw compressor technology from 2.2 to 400 kW, with a reputation for innovation, reliability and service.',
        ],
        [
            'category' => 'compressors',
            'label' => 'Air Compressors',
            'name' => 'DENAIR',
            'logo' => 'principals-denair.png',
            'text' => 'A Sino-German joint venture in Shanghai offering oil-injected and oil-free screw compressors, portable units, high-pressure piston compressors and air treatment equipment.',
        ],
        [
            'category' => 'security',
            'label' => 'Security',
            'name' => 'GKB',
            'logo' => 'principals-gkb.png',
            'text' => 'Based in Taichung, Taiwan, GKB is a global security solutions company covering HD-CCTV, IP, home automation, fire detection and mobile video for installers and end users.',
        ],
        [
            'category' => 'security',
            'label' => 'Security',
            'name' => 'Vacron',
            'logo' => 'principals-vacron.png',
            'text' => 'Vacron delivers cameras, DVRs, IP surveillance and vehicle recorders — a complete product line for professional and commercial security demands.',
        ],
        [
            'category' => 'security',
            'label' => 'Security',
            'name' => 'Rexon Industrial',
            'logo' => 'principals-rexon.png',
            'text' => 'Listed on the Taiwan Stock Exchange since 1995, Rexon designs and manufactures bench power tools for major global retailers and leading brands across the USA, Europe and Asia.',
        ],
    ];
    ?>

    <section class="hero-section op-banner-section">
        <div class="container">
            <div class="breadcrumb">
                <ul>
                    <li><a href="./">Home</a></li>
                    <li><i class="fal fa-angle-right"></i></li>
                    <li><span>Our Principals</span></li>
                </ul>
            </div>
            <span class="hero-label">GLOBAL PARTNERSHIPS</span>
            <h1 class="hero-title">OUR <span>PRINCIPALS</span></h1>
            <p class="cu-banner-text">
                World-class manufacturers whose technologies power FAV Group solutions
                across textiles, energy, compressors, toners and security.
            </p>
            <div class="hero-buttons">
                <a href="#principals-grid" class="btn btn-warning text-white">
                    VIEW PRINCIPALS
                    <i class="fal fa-handshake"></i>
                </a>
                <a href="./contact-us.php" class="btn btn-outline-light">
                    BECOME A PARTNER
                    <i class="fal fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <section class="op-intro-section">
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-lg-6">
                    <span class="ne-eyebrow">FAV GROUP</span>
                    <h2>The lifeblood of business success at FAV &amp; Co.</h2>
                    <p>
                        Vawda Group strives for excellence in every aspect of business by making
                        quality an integral part of all our actions. Our principals are carefully
                        selected global partners who share that commitment.
                    </p>
                    <p>
                        Through these alliances we deliver proven products, technical expertise
                        and reliable supply to industries across Pakistan — from Karachi to
                        Lahore and Faisalabad.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="op-stat-card">
                                <h3>17+</h3>
                                <p>Global Principals</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="op-stat-card">
                                <h3>5</h3>
                                <p>Industry Segments</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="op-stat-card">
                                <h3>40+</h3>
                                <p>Years of Partnerships</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="op-stat-card">
                                <h3>3</h3>
                                <p>Offices in Pakistan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="op-grid-section" id="principals-grid">
        <div class="container">
            <div class="cu-section-head text-center">
                <span class="ne-eyebrow">TRUSTED MANUFACTURERS</span>
                <h2>Our Principals</h2>
                <p>
                    Explore the brands we represent. Filter by industry to find the right technology partner.
                </p>
            </div>

            <div class="op-filters">
                <button type="button" class="op-filter-btn active" data-filter="all">All</button>
                <button type="button" class="op-filter-btn" data-filter="textiles">Textiles</button>
                <button type="button" class="op-filter-btn" data-filter="toners">Toners</button>
                <button type="button" class="op-filter-btn" data-filter="energy">Energy &amp; Inverters</button>
                <button type="button" class="op-filter-btn" data-filter="compressors">Air Compressors</button>
                <button type="button" class="op-filter-btn" data-filter="security">Security</button>
            </div>

            <div class="row g-4">
                <?php foreach ($principals as $item): ?>
                    <div class="col-lg-4 col-md-6 op-card-wrap" data-category="<?= htmlspecialchars($item['category']) ?>">
                        <article class="op-card">
                            <div class="op-card-logo">
                                <img src="./assets/images/principals/<?= htmlspecialchars($item['logo']) ?>"
                                    alt="<?= htmlspecialchars($item['name']) ?>">
                            </div>
                            <span class="op-card-tag"><?= htmlspecialchars($item['label']) ?></span>
                            <h3><?= htmlspecialchars($item['name']) ?></h3>
                            <p><?= htmlspecialchars($item['text']) ?></p>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="op-cta-band">
        <div class="container">
            <div class="row align-items-center gy-3">
                <div class="col-lg-8">
                    <h2>Looking for a specific brand or technology?</h2>
                    <p>Our team can match your application with the right principal and product range.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="./contact-us.php" class="btn btn-warning text-white">
                        TALK TO OUR TEAM
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

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
    </section>

    <?php include './layout/footer.php'; ?>

    <script src="./assets/jquery/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelectorAll('.op-filter-btn').forEach(function (btn) {
            btn.addEventListener('click', function () {
                document.querySelectorAll('.op-filter-btn').forEach(function (b) {
                    b.classList.remove('active');
                });
                btn.classList.add('active');
                var cat = btn.getAttribute('data-filter');
                document.querySelectorAll('.op-card-wrap').forEach(function (card) {
                    var match = cat === 'all' || card.getAttribute('data-category') === cat;
                    card.style.display = match ? '' : 'none';
                });
            });
        });
    </script>
</body>

</html>
