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
    <script>
        // body { overflow-x: hidden } breaks native hash scrolling — handle #textile-auxiliaries-detail manually
        window.__scrollToTextileAuxDetail = (window.location.hash === '#textile-auxiliaries-detail');
        if (window.__scrollToTextileAuxDetail) {
            if ('scrollRestoration' in history) {
                history.scrollRestoration = 'manual';
            }
            history.replaceState(null, '', window.location.pathname + window.location.search);
        }
    </script>
</head>

<body>
    <?php include './layout/header.php'; ?>

    <!-- =========================
         HERO SECTION
    ========================== -->

    <section class="hero-section veechem-industries-hero">

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
                                <a href="./veechem-industries.php">Veechem Industries Pvt. Ltd.</a>
                            </li>
                            <li>
                                <i class="fal fa-chevron-right"></i>
                            </li>
                            <li>
                                <span>Textile Auxiliaries Detail</span>
                            </li>
                        </ul>
                    </div>
                    <h1 class="hero-title">
                        TEXTILE <br> <span>AUXILIARIES</span>
                    </h1>

                    <p class="hero-text">
                        Full product range of Veechem textile auxiliaries for pretreatment, dyeing and finishing processes.
                    </p>

                    <div class="hero-list">
                        <ul>
                            <li>
                                <span><i class="fal fa-check-circle"></i></span>
                                <p>Desizer & Wetting</p>
                            </li>
                            <li>
                                <span><i class="fal fa-check-circle"></i></span>
                                <p>Sequestering Agents</p>
                            </li>
                            <li>
                                <span><i class="fal fa-check-circle"></i></span>
                                <p>Dyeing Auxiliaries</p>
                            </li>
                            <li>
                                <span><i class="fal fa-check-circle"></i></span>
                                <p>Finishing Softeners</p>
                            </li>
                        </ul>
                    </div>

                    <div class="hero-buttons">

                        <a href="./contact-us.php" class="btn btn-warning text-white">REQUEST A QUOTE
                            <i class="fa fa-paper-plane"></i>
                        </a>

                        <a href="./veechem-industries.php" class="btn btn-outline-light">
                            BACK TO PRODUCT PAGE
                            <i class="fal fa-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="business-divisions py-5 veechem-aux-detail-page" id="textile-auxiliaries-detail">
        <div class="container">
            <?php include __DIR__ . '/layout/veechem-textile-auxiliaries.php'; ?>
        </div>
    </section>

    <?php include './layout/footer.php'; ?>

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
});

(function () {
    if (!window.__scrollToTextileAuxDetail) {
        return;
    }

    function offsetTop(el) {
        var top = 0;
        while (el) {
            top += el.offsetTop;
            el = el.offsetParent;
        }
        return top;
    }

    function scrollToTextileAuxDetail() {
        var target = document.getElementById('textile-auxiliaries-detail');
        if (!target) {
            return;
        }

        var header = document.querySelector('.main-header');
        var headerHeight = header ? header.offsetHeight : 95;
        var top = offsetTop(target) - headerHeight - 12;

        window.scrollTo(0, Math.max(0, top));
    }

    function finish() {
        scrollToTextileAuxDetail();
        if (window.location.hash !== '#textile-auxiliaries-detail') {
            history.replaceState(null, '', window.location.pathname + window.location.search + '#textile-auxiliaries-detail');
        }
    }

    if (document.readyState === 'complete') {
        finish();
    } else {
        window.addEventListener('load', finish);
    }

    window.addEventListener('pageshow', finish);
    setTimeout(finish, 50);
    setTimeout(finish, 250);
    setTimeout(finish, 600);
})();
</script>
</body>

</html>
