<?php
$GLOBALS['FAV_SEO_SILENT'] = true;
require __DIR__ . '/layout/seo.php';
header('Content-Type: text/plain; charset=UTF-8');
$sitemap = $fav_seo_origin . '/sitemap.php';
echo "User-agent: *\n";
echo "Allow: /\n";
echo "Disallow: /layout/\n";
echo "Disallow: /assets/slick-slider/\n";
echo "\n";
echo "Sitemap: {$sitemap}\n";
