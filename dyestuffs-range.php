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

    <section class="hero-section textile-dyes-and-chemicals-hero">

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
                                <a href="./textile-dyes-and-chemicals.php">Textile Dyes & Chemicals</a>
                            </li>
                            <li>
                                <i class="fal fa-chevron-right"></i>
                            </li>
                            <li>
                                <span>Dyestuffs Range</span>
                            </li>
                        </ul>
                    </div>
                    <h1 class="hero-title">
                        DYESTUFFS <br> <span>RANGE</span>
                    </h1>

                    <p class="hero-text">
                        Reactive dyes, acid dyes, digital print inks, auxiliaries and technical e-brochures for modern textile mills.
                    </p>

                    <div class="hero-list">
                        <ul>
                            <li>
                                <span><i class="fal fa-check-circle"></i></span>
                                <p>Reactive Dyes</p>
                            </li>
                            <li>
                                <span><i class="fal fa-check-circle"></i></span>
                                <p>Acid Dyes</p>
                            </li>
                            <li>
                                <span><i class="fal fa-check-circle"></i></span>
                                <p>Digital Print Inks</p>
                            </li>
                            <li>
                                <span><i class="fal fa-check-circle"></i></span>
                                <p>Textile Auxiliaries</p>
                            </li>
                        </ul>
                    </div>

                    <div class="hero-buttons">

                        <a href="./contact-us.php" class="btn btn-warning text-white">REQUEST A QUOTE
                            <i class="fa fa-paper-plane"></i>
                        </a>

                        <a href="./textile-dyes-and-chemicals.php" class="btn btn-outline-light">
                            BACK TO PRODUCT PAGE
                            <i class="fal fa-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <?php
    $dyestuffs_standalone = true;
    include './layout/dyestuffs-range.php';
    ?>

    <?php include './layout/footer.php'; ?>
</body>
<script src="./assets/jquery/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="./assets/slick-slider/slick/slick.min.js"></script>
<script>
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

    animateOnScroll();
    $(window).on('scroll', function () {
        animateOnScroll();
    });

    if (window.location.hash === '#dyestuffs-range') {
        var $target = $('#dyestuffs-range');
        if ($target.length) {
            setTimeout(function () {
                $('html, body').animate({
                    scrollTop: $target.offset().top - 100
                }, 300);
            }, 50);
        }
    }
});
</script>

</html>
