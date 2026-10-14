<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './layout/seo.php'; ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="./assets/styling/style.css">
    <style>
        .brochure-hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 18px;
        }

        .brochure-sheet {
            background: #f5f7fa;
            padding: 40px 0 60px;
        }

        .brochure-toolbar {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }

        .brochure-toolbar h2 {
            margin: 0;
            color: #021a3a;
            font-size: 22px;
            font-weight: 700;
        }

        .brochure-toolbar p {
            margin: 4px 0 0;
            color: #5a6472;
            font-size: 14px;
        }

        .brochure-page {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 16px 40px rgba(2, 26, 58, 0.08);
            margin-bottom: 28px;
        }

        .brochure-page img {
            width: 100%;
            height: auto;
            display: block;
        }

        .brochure-summary {
            background: #fff;
            border: 1px solid rgba(2, 26, 58, 0.08);
            border-radius: 16px;
            padding: 28px 30px;
            margin-bottom: 28px;
        }

        .brochure-summary h3 {
            color: #021a3a;
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 12px;
        }

        .brochure-summary p {
            color: #3a4553;
            margin-bottom: 14px;
        }

        .brochure-cats {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 14px 18px;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .brochure-cats li {
            background: #f8fafc;
            border-radius: 10px;
            padding: 14px 16px;
        }

        .brochure-cats strong {
            display: block;
            color: #021a3a;
            font-size: 14px;
            margin-bottom: 4px;
        }

        .brochure-cats span {
            color: #5a6472;
            font-size: 13px;
            line-height: 1.55;
        }

        @media (max-width: 767px) {
            .brochure-cats {
                grid-template-columns: 1fr;
            }

            .brochure-sheet {
                padding: 24px 0 40px;
            }
        }

        @media print {
            .main-header,
            .brochure-toolbar,
            .hero-buttons,
            footer,
            .brochure-summary {
                display: none !important;
            }

            .brochure-sheet {
                background: #fff;
                padding: 0;
            }

            .brochure-page {
                box-shadow: none;
                border-radius: 0;
                margin-bottom: 0;
                page-break-after: always;
            }
        }
    </style>
</head>

<body>
    <?php include './layout/header.php'; ?>

    <section class="hero-section textile-dyes-and-chemicals-hero" style="min-height:auto;padding:90px 0 50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="breadcrumb">
                        <ul>
                            <li><a href="./">Home</a></li>
                            <li><i class="fal fa-chevron-right"></i></li>
                            <li><a href="./textile-dyes-and-chemicals.php">Textile Dyes & Chemicals</a></li>
                            <li><i class="fal fa-chevron-right"></i></li>
                            <li><span>Brochure</span></li>
                        </ul>
                    </div>
                    <h1 class="hero-title">TEXTILE DYES &amp; <span>CHEMICALS</span></h1>
                    <p class="hero-text">
                        Official division brochure prepared from the FAV Group Profile — wet processing solutions backed by 41 years of supply excellence.
                    </p>
                    <div class="brochure-hero-actions hero-buttons">
                        <a class="btn btn-warning text-white"
                            href="./assets/images/products-and-solutions/textile-dyes-and-chemicals/brochure/download.php?dl=1">
                            DOWNLOAD PDF
                            <i class="fal fa-file-pdf"></i>
                        </a>
                        <button type="button" class="btn btn-outline-light" onclick="window.print()">
                            PRINT BROCHURE
                            <i class="fal fa-print"></i>
                        </button>
                        <a href="./textile-dyes-and-chemicals.php" class="btn btn-outline-light">
                            BACK TO PRODUCT PAGE
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="brochure-sheet">
        <div class="container">
            <div class="brochure-toolbar">
                <div>
                    <h2>Division Brochure</h2>
                    <p>Extracted from FAV Group Profile (Textile Dyes &amp; Chemicals section)</p>
                </div>
                <a class="btn btn-warning text-white"
                    href="./assets/images/products-and-solutions/textile-dyes-and-chemicals/brochure/download.php?dl=1">
                    Download PDF <i class="fal fa-download"></i>
                </a>
            </div>

            <div class="brochure-summary">
                <h3>At a Glance</h3>
                <p>
                    FAV Group of Companies is a leading supplier of textile dyestuffs &amp; chemicals for over 41 years,
                    working with high-profile, reliable principals to deliver complete solutions across textile wet processing.
                </p>
                <ul class="brochure-cats">
                    <li>
                        <strong>Sizing</strong>
                        <span>After warping / waxing agents, PVA replacers, acrylics, softeners, waxes and after-waxing agents.</span>
                    </li>
                    <li>
                        <strong>Auxiliaries</strong>
                        <span>Full pre-treatment, dyeing, printing and finishing range — knitting oils, enzymes, sequesters, wetting &amp; dispersing agents, levelers, fixing agents and more.</span>
                    </li>
                    <li>
                        <strong>Dyestuffs</strong>
                        <span>Reactive (normal, deep/dark, light / wash / chlorine fast), Direct, Acid, Disperse and Vat dyestuffs.</span>
                    </li>
                    <li>
                        <strong>Printing Inks</strong>
                        <span>Water-based &amp; plastisol systems — rubber paste, binders, metallic, foil, puff, anti-migration and fluorescent pigment inks.</span>
                    </li>
                    <li>
                        <strong>Optical Brighteners</strong>
                        <span>OBA range for cotton, rayon, polyester, T/C, T/R, nylon, polyamide, wool, silk and acrylic.</span>
                    </li>
                    <li>
                        <strong>Finish &amp; Special Finishes</strong>
                        <span>Silicones, emulsions, water &amp; oil repellents, moisture management, fastness improvers, anti-pilling and related finishes.</span>
                    </li>
                </ul>
            </div>

            <div class="brochure-page">
                <img src="./assets/images/products-and-solutions/textile-dyes-and-chemicals/brochure/textile-dyes-brochure-page-01.png"
                    alt="Textile Dyes & Chemicals brochure page 1">
            </div>
            <div class="brochure-page">
                <img src="./assets/images/products-and-solutions/textile-dyes-and-chemicals/brochure/textile-dyes-brochure-page-02.png"
                    alt="Textile Dyes & Chemicals brochure page 2">
            </div>
        </div>
    </section>

    <?php include './layout/footer.php'; ?>
</body>
<script src="./assets/jquery/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
