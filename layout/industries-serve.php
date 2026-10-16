<?php
/**
 * Shared INDUSTRIES WE SERVE block.
 * Expects $industries = [ ['label' => '...', 'image' => 'slug', 'text' => '...'], ... ]
 * Optional per item: 'src' => full image path (overrides image + base)
 * Optional: $industries_heading, $industries_intro, $industries_section_class,
 *           $industries_img_base, $industries_grid_class
 * $industries_img_base should point to the product applications folder when using slugs.
 */
if (empty($industries) || !is_array($industries)) {
    return;
}

$industries_heading = $industries_heading ?? 'INDUSTRIES WE SERVE';
$industries_section_class = trim('industries-serve-section pb-5 ' . ($industries_section_class ?? ''));
$industries_img_base = isset($industries_img_base) ? rtrim((string) $industries_img_base, '/') : '';
$industries_grid_class = trim((string) ($industries_grid_class ?? ''));

$has_industry_text = false;
foreach ($industries as $industry_item) {
    if (!empty($industry_item['text'])) {
        $has_industry_text = true;
        break;
    }
}

$grid_classes = 'industries-grid';
if ($has_industry_text) {
    $grid_classes .= ' industries-grid-with-text';
}
if ($industries_grid_class !== '') {
    $grid_classes .= ' ' . $industries_grid_class;
}
?>
    <section class="<?= htmlspecialchars($industries_section_class) ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading text-center mb-4">
                        <h2><?= htmlspecialchars($industries_heading) ?></h2>
                        <div class="seprator"></div>
                        <?php if (!empty($industries_intro)): ?>
                        <p class="industries-serve-intro"><?= htmlspecialchars($industries_intro) ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="<?= htmlspecialchars($grid_classes) ?>">
                        <?php foreach ($industries as $industry):
                            $label = $industry['label'] ?? '';
                            $slug = $industry['image'] ?? '';
                            $text = $industry['text'] ?? '';
                            if ($label === '') {
                                continue;
                            }

                            if (!empty($industry['src'])) {
                                $src = $industry['src'];
                            } elseif ($industries_img_base !== '' && $slug !== '') {
                                $src = $industries_img_base . '/' . rawurlencode($slug) . '.svg';
                            } else {
                                continue;
                            }
                        ?>
                        <div class="industry-box">
                            <div class="industry-round-shade">
                                <img src="<?= htmlspecialchars($src) ?>" alt="<?= htmlspecialchars($label) ?>">
                            </div>
                            <h4><?= htmlspecialchars($label) ?></h4>
                            <?php if ($text !== ''): ?>
                            <p><?= htmlspecialchars($text) ?></p>
                            <?php endif; ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
unset(
    $industries,
    $industries_heading,
    $industries_intro,
    $industries_section_class,
    $industries_img_base,
    $industries_grid_class
);
?>
