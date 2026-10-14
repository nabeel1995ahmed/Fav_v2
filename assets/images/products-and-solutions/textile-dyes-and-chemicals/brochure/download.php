<?php
/**
 * Streams the textile dyes brochure PDF with correct headers.
 */
$file = __DIR__ . '/textile-dyes-and-chemicals-brochure.pdf';
$name = 'textile-dyes-and-chemicals-brochure.pdf';

if (!is_file($file)) {
    http_response_code(404);
    header('Content-Type: text/plain; charset=UTF-8');
    echo 'Brochure PDF not found.';
    exit;
}

$inline = !isset($_GET['dl']);

header('Content-Type: application/pdf');
header('Content-Length: ' . filesize($file));
header(
    'Content-Disposition: ' . ($inline ? 'inline' : 'attachment')
    . '; filename="' . $name . '"'
);
header('Cache-Control: private, max-age=0, must-revalidate');
header('Accept-Ranges: bytes');
header('X-Content-Type-Options: nosniff');

readfile($file);
exit;
