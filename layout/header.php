<?php
$current_page = basename($_SERVER['PHP_SELF']);
$page_nav_map = [
    'index.php' => 'home',
    'index2.php' => 'home',
    'about-us.php' => 'about',
    'news-events.php' => 'news',
    'our-principals.php' => 'principals',
    'certificates.php' => 'certificates',
    'textile-dyes-and-chemicals.php' => 'products',
    'masterbatch.php' => 'products',
    'veechem-industries.php' => 'products',
    'toner-cartridges.php' => 'products',
    'office-supplies.php' => 'products',
    'industrial-automation-division.php' => 'products',
    'industrial-air-compressor.php' => 'products',
    'confectionery.php' => 'products',
    'security-solution.php' => 'products',
    'printing-machines.php' => 'products',
    'energy-solutions.php' => 'products',
    'office-furniture.php' => 'products',
    'warehousing-solutions.php' => 'products',
    'contact-us.php' => 'contact',
    'careers.php' => 'careers',
];
$active_nav = $page_nav_map[$current_page] ?? '';

function nav_active($key, $active_nav) {
    return $active_nav === $key ? ' active' : '';
}

function dropdown_active($href, $current_page) {
    $href_name = pathinfo(basename(parse_url($href, PHP_URL_PATH)), PATHINFO_FILENAME);
    $current_name = pathinfo($current_page, PATHINFO_FILENAME);
    return ($href_name === $current_name) ? ' active' : '';
}
?>
<a href="#main-content" class="visually-hidden-focusable">Skip to main content</a>

<header class="main-header">
    <nav class="navbar navbar-expand-xl navbar-dark">
        <div class="container">

            <a class="navbar-brand fw-bold p-0 m-0" href="./" aria-label="Vawda home">
                <img src="./assets/images/logo/header/logo.png" alt="Vawda - Industrial and Business Solutions" height="65">
            </a>
            <div class="call-us mobile-call">
                <div class="call-icon">
                    <i class="fal fa-phone-alt"></i>
                </div>
                <div class="call-text">
                    <span>Call us Anytime</span>
                    <p>+92 (21) 32550093-98</p>
                </div>
            </div>
            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link<?= nav_active('home', $active_nav) ?>" href="./" data-nav="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?= nav_active('about', $active_nav) ?>" href="./about-us.php" data-nav="about">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle<?= nav_active('products', $active_nav) ?>" href="#" role="button" aria-expanded="false" aria-haspopup="true" data-nav="products">
                            Products
                        </a>
                        <ul class="dropdown-menu products-dropdown">
                            <li><a href="./textile-dyes-and-chemicals.php" class="dropdown-item<?= dropdown_active('./textile-dyes-and-chemicals.php', $current_page) ?>">Textile Dyes & Chemicals</a></li>
                            <li><a href="./masterbatch.php" class="dropdown-item<?= dropdown_active('./masterbatch.php', $current_page) ?>">Masterbatch</a></li>
                            <li><a href="./veechem-industries.php" class="dropdown-item<?= dropdown_active('./veechem-industries.php', $current_page) ?>">Veechem Industries Pvt. Ltd.</a></li>
                            <li><a href="./toner-cartridges.php" class="dropdown-item<?= dropdown_active('./toner-cartridges.php', $current_page) ?>">Toner Cartridges</a></li>
                            <li><a href="./office-supplies.php" class="dropdown-item<?= dropdown_active('./office-supplies.php', $current_page) ?>">Office Supplies</a></li>
                            <li><a href="./industrial-automation-division.php" class="dropdown-item<?= dropdown_active('./industrial-automation-division.php', $current_page) ?>">Industrial Automation Division</a></li>
                            <li><a href="./industrial-air-compressor.php" class="dropdown-item<?= dropdown_active('./industrial-air-compressor.php', $current_page) ?>">Industrial Air Compressor</a></li>
                            <li><a href="./confectionery.php" class="dropdown-item<?= dropdown_active('./confectionery.php', $current_page) ?>">Confectionery</a></li>
                            <li><a href="./security-solution.php" class="dropdown-item<?= dropdown_active('./security-solution.php', $current_page) ?>">Security Solutions</a></li>
                            <li><a href="./printing-machines.php" class="dropdown-item<?= dropdown_active('./printing-machines.php', $current_page) ?>">Printing Machines</a></li>
                            <li><a href="./energy-solutions.php" class="dropdown-item<?= dropdown_active('./energy-solutions.php', $current_page) ?>">Energy Solutions</a></li>
                            <li><a href="./office-furniture.php" class="dropdown-item<?= dropdown_active('./office-furniture.php', $current_page) ?>">Office Furniture</a></li>
                            <li><a href="./warehousing-solutions.php" class="dropdown-item<?= dropdown_active('./warehousing-solutions.php', $current_page) ?>">Warehousing Solutons</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?= nav_active('principals', $active_nav) ?>" href="./our-principals.php" data-nav="principals">Our Principals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?= nav_active('certificates', $active_nav) ?>" href="./certificates.php" data-nav="certificates">Certificates</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?= nav_active('news', $active_nav) ?>" href="./news-events.php" data-nav="news">News & Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?= nav_active('careers', $active_nav) ?>" href="./careers.php" data-nav="careers">Careers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?= nav_active('contact', $active_nav) ?>" href="./contact-us.php" data-nav="contact">Contact Us</a>
                    </li>
                </ul>
                <div class="call-us desktop-call">
                    <div class="call-icon">
                        <i class="fal fa-phone-alt"></i>
                    </div>
                    <div class="call-text">
                        <span>Call us Anytime</span>
                        <p>+92 (21) 32550093-98</p>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<div id="main-content"></div>
