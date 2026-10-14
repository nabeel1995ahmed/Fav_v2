<?php
/**
 * Shared INDUSTRIES WE SERVE block.
 * Expects $industries = [ ['label' => '...', 'image' => 'slug'], ... ]
 * Optional: $industries_heading, $industries_intro, $industries_section_class, $industries_img_base
 * $industries_img_base should point to the product applications folder.
 */
if (empty($industries) || !is_array($industries)) {
    return;
}

$industries_heading = $industries_heading ?? 'INDUSTRIES WE SERVE';
$industries_section_class = trim('industries-serve-section pb-5 ' . ($industries_section_class ?? ''));
if (empty($industries_img_base)) {
    return;
}
$industries_img_base = rtrim($industries_img_base, '/');
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
                    <div class="industries-grid">
                        <?php foreach ($industries as $industry):
                            $label = $industry['label'] ?? '';
                            $slug = $industry['image'] ?? '';
                            if ($label === '' || $slug === '') {
                                continue;
                            }
                            $src = $industries_img_base . '/' . rawurlencode($slug) . '.svg';
                        ?>
                        <div class="industry-box">
                            <div class="industry-round-shade">
                                <img src="<?= htmlspecialchars($src) ?>" alt="<?= htmlspecialchars($label) ?>">
                            </div>
                            <h4><?= htmlspecialchars($label) ?></h4>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
unset($industries, $industries_heading, $industries_intro, $industries_section_class, $industries_img_base);
?>
