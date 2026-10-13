<?php
header('Content-Type: application/xml; charset=UTF-8');
$GLOBALS['FAV_SEO_SILENT'] = true;
require __DIR__ . '/layout/seo.php';

$today = date('Y-m-d');
$priorities = [
    'index.php' => ['1.0', 'daily'],
    'contact-us.php' => ['0.8', 'monthly'],
    'about-us.php' => ['0.8', 'monthly'],
    'certificates.php' => ['0.7', 'monthly'],
    'our-principals.php' => ['0.7', 'monthly'],
    'news-events.php' => ['0.7', 'weekly'],
    'careers.php' => ['0.7', 'weekly'],
    'privacy-policy.php' => ['0.4', 'yearly'],
    'terms-and-conditions.php' => ['0.4', 'yearly'],
];

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($fav_seo_pages as $file => $meta):
    $loc = fav_seo_page_url($fav_seo_origin, $meta['slug']);
    $prio = $priorities[$file][0] ?? '0.8';
    $freq = $priorities[$file][1] ?? 'monthly';
    ?>
    <url>
        <loc><?= htmlspecialchars($loc, ENT_XML1 | ENT_QUOTES, 'UTF-8') ?></loc>
        <lastmod><?= $today ?></lastmod>
        <changefreq><?= $freq ?></changefreq>
        <priority><?= $prio ?></priority>
    </url>
<?php endforeach; ?>
</urlset>
