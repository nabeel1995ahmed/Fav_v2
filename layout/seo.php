<?php
/**
 * Central SEO for every public page.
 * Visible body copy is not defined here — only head tags, canonicals, and schema.
 */
if (!isset($fav_seo_pages)) {
    $fav_seo_pages = [
        'index.php' => [
            'slug' => '',
            'title' => 'Industrial & Business Solutions in Pakistan | Vawda',
            'description' => 'Vawda supplies industrial chemicals, automation, energy, security, office and warehousing solutions from Karachi with technical expertise and reliable delivery.',
            'keywords' => 'Vawda, industrial solutions Pakistan, textile chemicals, automation, energy solutions, office supplies Karachi',
            'type' => 'website',
            'section' => 'Home',
            'breadcrumb' => 'Home',
        ],
        'textile-dyes-and-chemicals.php' => [
            'slug' => 'textile-dyes-and-chemicals',
            'title' => 'Textile Dyes & Chemicals | Vawda',
            'description' => 'High-performance textile dyes and chemicals for modern mills. Vibrant colour, consistent quality, eco-friendly options and global standards supplied by Vawda.',
            'keywords' => 'textile dyes, textile chemicals, dyestuffs Pakistan, auxiliaries, optical brightener',
            'type' => 'product',
            'section' => 'Products',
            'breadcrumb' => 'Textile Dyes & Chemicals',
        ],
        'dyestuffs-range.php' => [
            'slug' => 'dyestuffs-range',
            'title' => 'Dyestuffs Range | Textile Dyes & Chemicals | Vawda',
            'description' => 'Explore Vawda dyestuffs range: reactive dyes, acid dyes, digital textile print inks, auxiliaries and e-brochures for modern dyeing and printing.',
            'keywords' => 'dyestuffs range, reactive dyes, acid dyes, digital textile inks, textile auxiliaries Pakistan',
            'type' => 'product',
            'section' => 'Products',
            'breadcrumb' => 'Dyestuffs Range',
        ],
        'masterbatch.php' => [
            'slug' => 'masterbatch',
            'title' => 'Masterbatch for Plastics | Vawda',
            'description' => 'Advanced colour and additive masterbatch for consistent, efficient plastic manufacturing. Concentrates for extrusion and moulding supplied by Vawda.',
            'keywords' => 'masterbatch, colour masterbatch, additive concentrates, plastic manufacturing Pakistan',
            'type' => 'product',
            'section' => 'Products',
            'breadcrumb' => 'Masterbatch',
        ],
        'veechem-industries.php' => [
            'slug' => 'veechem-industries',
            'title' => 'Veechem Industries Pvt. Ltd. | Vawda',
            'description' => 'Veechem Industries Pvt. Ltd. — pigment powders, emulsions and auxiliaries for textile printing. Part of Vawda Group.',
            'keywords' => 'Veechem Industries, pigment powder, pigment emulsion, industrial pigments, colourants Pakistan',
            'type' => 'product',
            'section' => 'Products',
            'breadcrumb' => 'Veechem Industries Pvt. Ltd.',
        ],
        'toner-cartridges.php' => [
            'slug' => 'toner-cartridges',
            'title' => 'Toner Cartridges | Vawda',
            'description' => 'Reliable toner cartridges for sharp text, rich graphics and consistent print performance. Office printing consumables from Vawda.',
            'keywords' => 'toner cartridges, printer toner, office printing consumables Pakistan',
            'type' => 'product',
            'section' => 'Products',
            'breadcrumb' => 'Toner Cartridges',
        ],
        'office-supplies.php' => [
            'slug' => 'office-supplies',
            'title' => 'Office Supplies | Vawda',
            'description' => 'Essential workplace office supplies to support daily operations and productivity. Quality stationery and business products from Vawda.',
            'keywords' => 'office supplies, stationery, workplace products Pakistan',
            'type' => 'product',
            'section' => 'Products',
            'breadcrumb' => 'Office Supplies',
        ],
        'industrial-automation-division.php' => [
            'slug' => 'industrial-automation-division',
            'title' => 'Industrial Automation Division | Vawda',
            'description' => 'Industrial automation products, drive solutions and technical support for reliable motor control. Authorized distributor of Schneider Electric, Siemens and Delixi Electric.',
            'keywords' => 'industrial automation, VFD, soft starter, Schneider Electric, Siemens, Delixi Electric, motor control Pakistan',
            'type' => 'product',
            'section' => 'Products',
            'breadcrumb' => 'Industrial Automation Division',
        ],
        'industrial-automation-quote.php' => [
            'slug' => 'industrial-automation-quote',
            'title' => 'Request a Quote | Industrial Automation | Vawda',
            'description' => 'Request a quote for industrial automation products, VFDs, soft starters and motor control solutions from Vawda. Authorized distributor of Schneider Electric, Siemens and Delixi Electric.',
            'keywords' => 'industrial automation quote, VFD quote, motor control enquiry Pakistan',
            'type' => 'product',
            'section' => 'Products',
            'breadcrumb' => 'Request a Quote',
        ],
        'industrial-air-compressor.php' => [
            'slug' => 'industrial-air-compressor',
            'title' => 'Industrial Air Compressors | Vawda',
            'description' => 'Industrial air compressors for reliable compressed air in manufacturing and plant operations. Equipment and support from Vawda in Pakistan.',
            'keywords' => 'industrial air compressor, compressed air systems, compressor Pakistan',
            'type' => 'product',
            'section' => 'Products',
            'breadcrumb' => 'Industrial Air Compressor',
        ],
        'confectionery.php' => [
            'slug' => 'confectionery',
            'title' => 'Confectionery Products | Vawda',
            'description' => 'High-quality confectionery sweets and treats for all occasions, with consumer confectionery products supplied by Vawda in Pakistan.',
            'keywords' => 'confectionery, sweets, candy production Pakistan',
            'type' => 'product',
            'section' => 'Products',
            'breadcrumb' => 'Confectionery',
        ],
        'security-solution.php' => [
            'slug' => 'security-solution',
            'title' => 'Security Solutions | Vawda',
            'description' => 'Comprehensive surveillance and security systems for businesses. Protect facilities with Vawda security solutions in Pakistan.',
            'keywords' => 'security solutions, CCTV, surveillance systems Pakistan',
            'type' => 'product',
            'section' => 'Products',
            'breadcrumb' => 'Security Solutions',
        ],
        'printing-machines.php' => [
            'slug' => 'printing-machines',
            'title' => 'Printing Machines | Vawda',
            'description' => 'Professional printing equipment for industrial and commercial output, including DTF, UV, DTG and sublimation machines from Vawda.',
            'keywords' => 'printing machines, DTF printer, UV printer, DTG, sublimation',
            'type' => 'product',
            'section' => 'Products',
            'breadcrumb' => 'Printing Machines',
        ],
        'energy-solutions.php' => [
            'slug' => 'energy-solutions',
            'title' => 'Energy Solutions | Vawda',
            'description' => 'Reliable power and energy systems, including batteries and efficient equipment, to keep businesses running sustainably with Vawda.',
            'keywords' => 'energy solutions, lithium battery, inverter, power systems Pakistan',
            'type' => 'product',
            'section' => 'Products',
            'breadcrumb' => 'Energy Solutions',
        ],
        'office-furniture.php' => [
            'slug' => 'office-furniture',
            'title' => 'Office Furniture | Vawda',
            'description' => 'Ergonomic office furniture combining comfort, durability and professional design. Chairs and workplace furniture from Vawda.',
            'keywords' => 'office furniture, office chairs, executive chairs Pakistan',
            'type' => 'product',
            'section' => 'Products',
            'breadcrumb' => 'Office Furniture',
        ],
        'warehousing-solutions.php' => [
            'slug' => 'warehousing-solutions',
            'title' => 'Warehousing Solutions | Vawda',
            'description' => 'Smart warehousing systems that improve storage, handling and operational efficiency. Logistics and warehouse solutions from Vawda.',
            'keywords' => 'warehousing solutions, warehouse systems, storage handling Pakistan',
            'type' => 'product',
            'section' => 'Products',
            'breadcrumb' => 'Warehousing Solutions',
        ],
        'about-us.php' => [
            'slug' => 'about-us',
            'title' => 'About Us | Vawda Group Since 1984',
            'description' => 'Vawda Group has served textile, plastics and industrial markets since 1984. ISO 9001 certified, with head office in Karachi and offices in Lahore and Faisalabad.',
            'keywords' => 'about Vawda, FAV Group, Farid Ahmed Vawda, ISO 9001, textile chemicals Pakistan',
            'type' => 'website',
            'section' => 'Company',
            'breadcrumb' => 'About Us',
        ],
        'certificates.php' => [
            'slug' => 'certificates',
            'title' => 'Certificates | ISO, EcoCert & Halal | Vawda',
            'description' => 'View Vawda Group certificates including ISO 9001, EcoCert and Halal quality credentials for industrial and confectionery operations in Pakistan.',
            'keywords' => 'Vawda certificates, ISO 9001, EcoCert, Halal certificate, BVQI',
            'type' => 'website',
            'section' => 'Company',
            'breadcrumb' => 'Certificates',
        ],
        'our-principals.php' => [
            'slug' => 'our-principals',
            'title' => 'Our Principals & Global Partners | Vawda',
            'description' => 'World-class manufacturers whose technologies power Vawda solutions across textiles, energy, compressors, toners and security.',
            'keywords' => 'Vawda principals, global partners, industrial manufacturers',
            'type' => 'website',
            'section' => 'Company',
            'breadcrumb' => 'Our Principals',
        ],
        'news-events.php' => [
            'slug' => 'news-events',
            'title' => 'News & Events | Vawda',
            'description' => 'Company announcements, industry highlights and upcoming exhibitions from Vawda Industrial and Business Solutions in Karachi, Pakistan.',
            'keywords' => 'Vawda news, industrial exhibitions, company events',
            'type' => 'website',
            'section' => 'News',
            'breadcrumb' => 'News & Events',
        ],
        'careers.php' => [
            'slug' => 'careers',
            'title' => 'Careers | Join Vawda',
            'description' => 'Build your career at Vawda. Explore openings in sales, technical support, warehousing and operations across Karachi, Lahore and Faisalabad.',
            'keywords' => 'Vawda careers, jobs Karachi, industrial jobs Pakistan, Vawda vacancies',
            'type' => 'website',
            'section' => 'Company',
            'breadcrumb' => 'Careers',
        ],
        'contact-us.php' => [
            'slug' => 'contact-us',
            'title' => 'Contact Us | Vawda Karachi',
            'description' => 'Contact Vawda in Karachi, Lahore or Faisalabad for product inquiries, technical support or partnerships. Head office S.I.T.E., phone +92 (21) 32550093-98.',
            'keywords' => 'contact Vawda, Vawda Karachi, S.I.T.E. Karachi, industrial supplier contact',
            'type' => 'website',
            'section' => 'Contact',
            'breadcrumb' => 'Contact Us',
        ],
        'privacy-policy.php' => [
            'slug' => 'privacy-policy',
            'title' => 'Privacy Policy | Vawda',
            'description' => 'Learn how Vawda collects, uses and protects personal information from website forms, careers applications and newsletter signups.',
            'keywords' => 'Vawda privacy policy, data protection, personal information Pakistan',
            'type' => 'website',
            'section' => 'Legal',
            'breadcrumb' => 'Privacy Policy',
        ],
        'terms-and-conditions.php' => [
            'slug' => 'terms-and-conditions',
            'title' => 'Terms & Conditions | Vawda',
            'description' => 'Terms and conditions for using the Vawda website, submitting inquiries and accessing product information online.',
            'keywords' => 'Vawda terms and conditions, website terms, legal',
            'type' => 'website',
            'section' => 'Legal',
            'breadcrumb' => 'Terms & Conditions',
        ],
    ];
}

if (!function_exists('fav_seo_origin')) {
    function fav_seo_origin()
    {
        $https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
            || ((int)($_SERVER['SERVER_PORT'] ?? 0) === 443)
            || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https');
        $scheme = $https ? 'https' : 'http';
        $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
        $script = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '/index.php');
        $dir = rtrim(dirname($script), '/');
        if ($dir === '' || $dir === '.' || $dir === '\\') {
            return $scheme . '://' . $host;
        }
        return $scheme . '://' . $host . $dir;
    }

    function fav_seo_page_url($origin, $slug)
    {
        if ($slug === '') {
            return $origin . '/';
        }
        // IIS host has no URL Rewrite — public URLs must include .php
        if (substr($slug, -4) !== '.php') {
            $slug .= '.php';
        }
        return $origin . '/' . $slug;
    }
}

$fav_seo_origin = fav_seo_origin();
$fav_seo_current = basename($_SERVER['PHP_SELF'] ?? 'index.php');
$fav_seo_fallback = [
    'slug' => pathinfo($fav_seo_current, PATHINFO_FILENAME),
    'title' => 'Vawda | Industrial & Business Solutions',
    'description' => 'Vawda is a diversified industrial and business solutions provider delivering quality products, technology and services from Karachi, Pakistan.',
    'keywords' => 'Vawda, industrial solutions, Pakistan',
    'type' => 'website',
    'section' => 'Pages',
    'breadcrumb' => 'Page',
];
$fav_seo = $fav_seo_pages[$fav_seo_current] ?? $fav_seo_fallback;
$fav_seo_canonical = fav_seo_page_url($fav_seo_origin, $fav_seo['slug']);
$fav_seo_logo = $fav_seo_origin . '/assets/images/logo/header/logo.png';
$fav_seo_image = $fav_seo_logo;
$fav_seo_title = $fav_seo['title'];
$fav_seo_desc = $fav_seo['description'];
$fav_seo_robots = 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1';

if (!empty($GLOBALS['FAV_SEO_SILENT'])) {
    return;
}

$e = static function ($value) {
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
};

$breadcrumb_items = [
    ['name' => 'Home', 'url' => fav_seo_page_url($fav_seo_origin, '')],
];
if ($fav_seo['slug'] !== '') {
    $breadcrumb_items[] = ['name' => $fav_seo['breadcrumb'], 'url' => $fav_seo_canonical];
}

$graph = [
    [
        '@type' => 'Organization',
        '@id' => $fav_seo_origin . '/#organization',
        'name' => 'Vawda',
        'alternateName' => ['FAV', 'FAV Group', 'Vawda Industrial & Business Solutions'],
        'url' => $fav_seo_origin . '/',
        'logo' => [
            '@type' => 'ImageObject',
            'url' => $fav_seo_logo,
        ],
        'email' => 'info@vawda.com',
        'telephone' => '+92-21-32550093',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => 'B-66/A, S.I.T.E., Area',
            'addressLocality' => 'Karachi',
            'postalCode' => '75700',
            'addressCountry' => 'PK',
        ],
        'areaServed' => 'PK',
        'foundingLocation' => [
            '@type' => 'Place',
            'name' => 'Karachi, Pakistan',
        ],
    ],
    [
        '@type' => 'WebSite',
        '@id' => $fav_seo_origin . '/#website',
        'url' => $fav_seo_origin . '/',
        'name' => 'Vawda',
        'publisher' => ['@id' => $fav_seo_origin . '/#organization'],
        'inLanguage' => 'en',
    ],
    [
        '@type' => ($fav_seo_current === 'contact-us.php' ? 'ContactPage' : 'WebPage'),
        '@id' => $fav_seo_canonical . '#webpage',
        'url' => $fav_seo_canonical,
        'name' => $fav_seo_title,
        'description' => $fav_seo_desc,
        'isPartOf' => ['@id' => $fav_seo_origin . '/#website'],
        'about' => ['@id' => $fav_seo_origin . '/#organization'],
        'inLanguage' => 'en',
        'primaryImageOfPage' => $fav_seo_image,
    ],
    [
        '@type' => 'BreadcrumbList',
        '@id' => $fav_seo_canonical . '#breadcrumb',
        'itemListElement' => array_map(static function ($item, $index) {
            return [
                '@type' => 'ListItem',
                'position' => $index + 1,
                'name' => $item['name'],
                'item' => $item['url'],
            ];
        }, $breadcrumb_items, array_keys($breadcrumb_items)),
    ],
];

if (($fav_seo['type'] ?? '') === 'product') {
    $graph[] = [
        '@type' => 'Service',
        'name' => $fav_seo['breadcrumb'],
        'description' => $fav_seo_desc,
        'provider' => ['@id' => $fav_seo_origin . '/#organization'],
        'areaServed' => 'PK',
        'url' => $fav_seo_canonical,
    ];
}

$json_ld = [
    '@context' => 'https://schema.org',
    '@graph' => $graph,
];
?>
    <title><?= $e($fav_seo_title) ?></title>
    <meta name="description" content="<?= $e($fav_seo_desc) ?>">
    <meta name="keywords" content="<?= $e($fav_seo['keywords']) ?>">
    <meta name="author" content="Vawda">
    <meta name="publisher" content="Vawda">
    <meta name="robots" content="<?= $e($fav_seo_robots) ?>">
    <meta name="googlebot" content="<?= $e($fav_seo_robots) ?>">
    <meta name="theme-color" content="#0b1f3a">
    <meta name="format-detection" content="telephone=yes">
    <meta name="geo.region" content="PK-SD">
    <meta name="geo.placename" content="Karachi">
    <meta name="geo.position" content="24.9056;67.0020">
    <meta name="ICBM" content="24.9056, 67.0020">
    <link rel="canonical" href="<?= $e($fav_seo_canonical) ?>">
    <link rel="alternate" hreflang="en" href="<?= $e($fav_seo_canonical) ?>">
    <link rel="alternate" hreflang="x-default" href="<?= $e($fav_seo_canonical) ?>">
    <link rel="icon" href="./assets/images/logo/header/logo.png" type="image/png">
    <link rel="apple-touch-icon" href="./assets/images/logo/header/logo.png">
    <link rel="sitemap" type="application/xml" title="Sitemap" href="<?= $e($fav_seo_origin) ?>/sitemap.php">
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://pro.fontawesome.com" crossorigin>
    <link rel="dns-prefetch" href="https://pro.fontawesome.com">
    <meta property="og:locale" content="en_PK">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vawda">
    <meta property="og:title" content="<?= $e($fav_seo_title) ?>">
    <meta property="og:description" content="<?= $e($fav_seo_desc) ?>">
    <meta property="og:url" content="<?= $e($fav_seo_canonical) ?>">
    <meta property="og:image" content="<?= $e($fav_seo_image) ?>">
    <meta property="og:image:alt" content="Vawda">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= $e($fav_seo_title) ?>">
    <meta name="twitter:description" content="<?= $e($fav_seo_desc) ?>">
    <meta name="twitter:image" content="<?= $e($fav_seo_image) ?>">
    <script type="application/ld+json"><?= json_encode($json_ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>
