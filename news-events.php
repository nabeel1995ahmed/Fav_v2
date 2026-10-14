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
    <link rel="stylesheet" href="./assets/styling/style.css?v=gallery6">
</head>

<body>
    <?php
    $galleryRoot = __DIR__ . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'news-events';
    $webBase = './assets/images/news-events';
    $imageExts = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
    $videoExts = ['mp4', 'webm', 'mov'];

    $slugify = static function (string $value): string {
        $slug = strtolower(preg_replace('/[^a-z0-9]+/i', '-', $value));
        return trim($slug, '-') ?: 'event';
    };

    $categoryMeta = [
        'picnic' => [
            'label' => 'Picnic',
            'pattern' => '/picnic/i',
            'blurb' => 'Annual team outings and celebrations',
            'order' => 1,
        ],
        'textile' => [
            'label' => 'Textile',
            'pattern' => '/textile/i',
            'blurb' => 'Textile Asia exhibitions and showcases',
            'order' => 2,
        ],
        'plastico' => [
            'label' => 'Plastico',
            'pattern' => '/plastico/i',
            'blurb' => '3P Plastico industry exhibitions',
            'order' => 3,
        ],
        'milestone' => [
            'label' => 'Milestone',
            'pattern' => '/milestone/i',
            'blurb' => 'Company achievements and recognitions',
            'order' => 4,
        ],
        'food-expo' => [
            'label' => 'Food Expo',
            'pattern' => '/food\s*expo|mera\s*brand/i',
            'blurb' => 'Mera Brand Pakistan Food Expo',
            'order' => 5,
        ],
        'august' => [
            'label' => '14 August',
            'pattern' => '/^august\b/i',
            'blurb' => 'Independence Day celebrations',
            'order' => 6,
        ],
        'meeting' => [
            'label' => 'Meeting',
            'pattern' => '/meeting/i',
            'blurb' => 'Corporate meetings and gatherings',
            'order' => 7,
        ],
        'eid' => [
            'label' => 'Eid Lunch',
            'pattern' => '/eid/i',
            'blurb' => 'Eid-ul-Fitr team lunch moments',
            'order' => 8,
        ],
        'china' => [
            'label' => 'China',
            'pattern' => '/china/i',
            'blurb' => 'International visits and collaborations',
            'order' => 9,
        ],
        'dps' => [
            'label' => 'DPS',
            'pattern' => '/\bdps\b/i',
            'blurb' => 'DPS event highlights',
            'order' => 10,
        ],
    ];

    $resolveCategory = static function (string $dirName) use ($categoryMeta): array {
        foreach ($categoryMeta as $id => $meta) {
            if (preg_match($meta['pattern'], $dirName)) {
                return [
                    'id' => $id,
                    'label' => $meta['label'],
                    'blurb' => $meta['blurb'],
                    'order' => $meta['order'],
                ];
            }
        }

        $fallback = trim(preg_replace('/\b20\d{2}\b/', '', $dirName));
        $fallback = trim(preg_replace('/\s+/', ' ', $fallback));
        if ($fallback === '') {
            $fallback = $dirName;
        }

        $id = strtolower(preg_replace('/[^a-z0-9]+/i', '-', $fallback));
        $id = trim($id, '-') ?: 'events';

        return [
            'id' => $id,
            'label' => $fallback,
            'blurb' => 'Event highlights and moments',
            'order' => 99,
        ];
    };

    $categories = [];

    if (is_dir($galleryRoot)) {
        $dirs = scandir($galleryRoot);
        sort($dirs, SORT_NATURAL | SORT_FLAG_CASE);

        foreach ($dirs as $dirName) {
            if ($dirName === '.' || $dirName === '..' || strcasecmp($dirName, 'old') === 0) {
                continue;
            }

            $dirPath = $galleryRoot . DIRECTORY_SEPARATOR . $dirName;
            if (!is_dir($dirPath)) {
                continue;
            }

            $category = $resolveCategory($dirName);
            $categoryId = $category['id'];

            if (!isset($categories[$categoryId])) {
                $categories[$categoryId] = [
                    'id' => $categoryId,
                    'title' => $category['label'],
                    'blurb' => $category['blurb'],
                    'order' => $category['order'],
                    'years' => [],
                    'events' => [],
                    'subcategories' => [],
                    'items' => [],
                    'cover' => null,
                    'count' => 0,
                    'image_count' => 0,
                    'video_count' => 0,
                    'latest_year' => null,
                ];
            }

            $year = null;
            if (preg_match('/\b(20\d{2})\b/', $dirName, $yearMatch)) {
                $year = (int) $yearMatch[1];
                $categories[$categoryId]['years'][$year] = $year;
                if (
                    $categories[$categoryId]['latest_year'] === null
                    || $year > $categories[$categoryId]['latest_year']
                ) {
                    $categories[$categoryId]['latest_year'] = $year;
                }
            }

            $eventId = $slugify($dirName);
            $categories[$categoryId]['events'][$dirName] = $dirName;

            if (!isset($categories[$categoryId]['subcategories'][$eventId])) {
                $categories[$categoryId]['subcategories'][$eventId] = [
                    'id' => $eventId,
                    'title' => $dirName,
                    'year' => $year,
                    'count' => 0,
                    'image_count' => 0,
                    'video_count' => 0,
                ];
            }

            $iterator = new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator($dirPath, FilesystemIterator::SKIP_DOTS)
            );

            foreach ($iterator as $fileInfo) {
                if (!$fileInfo->isFile()) {
                    continue;
                }

                $ext = strtolower($fileInfo->getExtension());
                $isImage = in_array($ext, $imageExts, true);
                $isVideo = in_array($ext, $videoExts, true);

                if (!$isImage && !$isVideo) {
                    continue;
                }

                $relative = str_replace('\\', '/', substr($fileInfo->getPathname(), strlen($dirPath) + 1));
                $segments = array_map('rawurlencode', explode('/', $relative));
                $src = $webBase . '/' . rawurlencode($dirName) . '/' . implode('/', $segments);

                $item = [
                    'src' => $src,
                    'type' => $isVideo ? 'video' : 'image',
                    'name' => $fileInfo->getFilename(),
                    'event' => $dirName,
                    'event_id' => $eventId,
                    'year' => $year,
                ];

                $categories[$categoryId]['items'][] = $item;
                $categories[$categoryId]['count']++;
                $categories[$categoryId]['subcategories'][$eventId]['count']++;

                if ($isImage) {
                    $categories[$categoryId]['image_count']++;
                    $categories[$categoryId]['subcategories'][$eventId]['image_count']++;
                    if ($categories[$categoryId]['cover'] === null) {
                        $categories[$categoryId]['cover'] = $src;
                    }
                } else {
                    $categories[$categoryId]['video_count']++;
                    $categories[$categoryId]['subcategories'][$eventId]['video_count']++;
                }
            }
        }

        foreach ($categories as &$category) {
            usort($category['items'], static function ($a, $b) {
                $yearA = $a['year'] ?? 0;
                $yearB = $b['year'] ?? 0;
                if ($yearA !== $yearB) {
                    return $yearB <=> $yearA;
                }
                $eventCmp = strnatcasecmp($a['event'], $b['event']);
                if ($eventCmp !== 0) {
                    return $eventCmp;
                }
                return strnatcasecmp($a['name'], $b['name']);
            });

            foreach ($category['items'] as $item) {
                if ($item['type'] === 'image') {
                    $category['cover'] = $item['src'];
                    break;
                }
            }

            $subcategories = array_values(array_filter(
                $category['subcategories'],
                static fn($sub) => $sub['count'] > 0
            ));

            usort($subcategories, static function ($a, $b) {
                $yearA = $a['year'] ?? 0;
                $yearB = $b['year'] ?? 0;
                if ($yearA !== $yearB) {
                    return $yearB <=> $yearA;
                }
                return strnatcasecmp($a['title'], $b['title']);
            });

            $category['subcategories'] = $subcategories;

            rsort($category['years'], SORT_NUMERIC);
            $category['years'] = array_values($category['years']);
            $category['events'] = array_values($category['events']);
            sort($category['events'], SORT_NATURAL | SORT_FLAG_CASE);
        }
        unset($category);

        uasort($categories, static function ($a, $b) {
            if ($a['order'] !== $b['order']) {
                return $a['order'] <=> $b['order'];
            }
            return strnatcasecmp($a['title'], $b['title']);
        });

        $categories = array_values(array_filter($categories, static fn($c) => $c['count'] > 0));
    }

    $albums = $categories;
    $totalItems = array_sum(array_column($albums, 'count'));
    $totalImages = array_sum(array_column($albums, 'image_count'));
    $totalVideos = array_sum(array_column($albums, 'video_count'));
    ?>

    <?php include './layout/header.php'; ?>

    <!-- =========================
         PAGE BANNER
    ========================== -->
    <section class="hero-section news-and-events-hero">
        <div class="container">
            <div class="breadcrumb">
                <ul>
                    <li><a href="./">Home</a></li>
                    <li><i class="fal fa-angle-right"></i></li>
                    <li><span>News & Events</span></li>
                </ul>
            </div>
            <span class="hero-label">STAY UPDATED</span>
            <h1 class="hero-title">NEWS &amp; <span>EVENTS</span></h1>
            <p class="ne-banner-text">
                Explore highlights from exhibitions, company gatherings, and industry moments
                captured across Vawda Industrial &amp; Business Solutions.
            </p>
            <div class="hero-buttons">
                <a href="#event-albums" class="btn btn-warning text-white">
                    BROWSE CATEGORIES
                    <i class="fal fa-images"></i>
                </a>
                <a href="#events-gallery" class="btn btn-outline-light">
                    VIEW GALLERY
                    <i class="fal fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- =========================
         EVENT CATEGORIES
    ========================== -->
    <section class="ne-albums-section" id="event-albums">
        <div class="container">
            <div class="ne-section-head ne-section-head-center">
                <div class="ne-section-head-text">
                    <span class="ne-eyebrow">PHOTO GALLERY</span>
                    <h2>Event Categories</h2>
                    <p class="ne-section-sub">
                        Browse curated collections from exhibitions, celebrations, and company milestones.
                    </p>
                </div>
            </div>

            <?php if ($albums): ?>
                <div class="ne-album-grid">
                    <?php foreach ($albums as $album): ?>
                        <?php
                        $countLabel = $album['image_count'] . ' photo' . ($album['image_count'] === 1 ? '' : 's');
                        if ($album['video_count'] > 0) {
                            $countLabel .= ' · ' . $album['video_count'] . ' video' . ($album['video_count'] === 1 ? '' : 's');
                        }
                        $yearLabel = !empty($album['years']) ? implode(' · ', $album['years']) : 'Archive';
                        ?>
                        <button type="button"
                            class="ne-album-card"
                            data-album="<?php echo htmlspecialchars($album['id'], ENT_QUOTES, 'UTF-8'); ?>"
                            aria-pressed="false">
                            <div class="ne-album-cover">
                                <?php if ($album['cover']): ?>
                                    <img src="<?php echo htmlspecialchars($album['cover'], ENT_QUOTES, 'UTF-8'); ?>"
                                        alt="<?php echo htmlspecialchars($album['title'], ENT_QUOTES, 'UTF-8'); ?>"
                                        loading="lazy">
                                <?php else: ?>
                                    <div class="ne-album-cover-fallback">
                                        <i class="fal fa-video"></i>
                                    </div>
                                <?php endif; ?>
                                <span class="ne-album-shade" aria-hidden="true"></span>
                                <div class="ne-album-body">
                                    <span class="ne-album-year"><?php echo htmlspecialchars($yearLabel, ENT_QUOTES, 'UTF-8'); ?></span>
                                    <h3><?php echo htmlspecialchars($album['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                                    <p class="ne-album-blurb"><?php echo htmlspecialchars($album['blurb'], ENT_QUOTES, 'UTF-8'); ?></p>
                                    <span class="ne-album-count"><?php echo htmlspecialchars($countLabel, ENT_QUOTES, 'UTF-8'); ?></span>
                                </div>
                            </div>
                        </button>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="ne-gallery-empty">
                    <i class="fal fa-images"></i>
                    <p>No event photos available yet. Please check back soon.</p>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- =========================
         EVENTS GALLERY
    ========================== -->
    <section class="ne-gallery-section" id="events-gallery">
        <div class="container">
            <div class="ne-section-head ne-section-head-stack">
                <div class="ne-section-head-text">
                    <span class="ne-eyebrow">MOMENTS THAT MATTER</span>
                    <h2 id="ne-gallery-heading">All Events</h2>
                    <p class="ne-section-sub" id="ne-gallery-count">
                        Showing <?php echo (int) $totalItems; ?> media items
                    </p>
                </div>
                <div class="ne-filter-stack">
                    <div class="ne-gallery-filters" role="tablist" aria-label="Filter gallery by category">
                        <button type="button"
                            class="ne-filter-btn is-active"
                            data-filter="all"
                            data-category="all"
                            role="tab">
                            All
                            <span class="ne-filter-count"><?php echo (int) $totalItems; ?></span>
                        </button>
                        <?php foreach ($albums as $album): ?>
                            <button type="button"
                                class="ne-filter-btn"
                                data-filter="<?php echo htmlspecialchars($album['id'], ENT_QUOTES, 'UTF-8'); ?>"
                                data-category="<?php echo htmlspecialchars($album['id'], ENT_QUOTES, 'UTF-8'); ?>"
                                role="tab">
                                <?php echo htmlspecialchars($album['title'], ENT_QUOTES, 'UTF-8'); ?>
                                <span class="ne-filter-count"><?php echo (int) $album['count']; ?></span>
                            </button>
                        <?php endforeach; ?>
                    </div>

                    <div class="ne-subfilters-wrap" id="ne-subfilters-wrap">
                        <?php foreach ($albums as $album): ?>
                            <?php if (count($album['subcategories']) > 1): ?>
                                <div class="ne-subfilters"
                                    data-parent="<?php echo htmlspecialchars($album['id'], ENT_QUOTES, 'UTF-8'); ?>"
                                    hidden>
                                    <div class="ne-subfilters-list" role="tablist"
                                        aria-label="<?php echo htmlspecialchars($album['title'], ENT_QUOTES, 'UTF-8'); ?> events">
                                        <button type="button"
                                            class="ne-subfilter-btn is-active"
                                            data-category="<?php echo htmlspecialchars($album['id'], ENT_QUOTES, 'UTF-8'); ?>"
                                            data-event="all"
                                            role="tab">
                                            All <?php echo htmlspecialchars($album['title'], ENT_QUOTES, 'UTF-8'); ?>
                                            <span class="ne-filter-count"><?php echo (int) $album['count']; ?></span>
                                        </button>
                                        <?php foreach ($album['subcategories'] as $sub): ?>
                                            <button type="button"
                                                class="ne-subfilter-btn"
                                                data-category="<?php echo htmlspecialchars($album['id'], ENT_QUOTES, 'UTF-8'); ?>"
                                                data-event="<?php echo htmlspecialchars($sub['id'], ENT_QUOTES, 'UTF-8'); ?>"
                                                role="tab">
                                                <?php echo htmlspecialchars($sub['title'], ENT_QUOTES, 'UTF-8'); ?>
                                                <span class="ne-filter-count"><?php echo (int) $sub['count']; ?></span>
                                            </button>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <?php if ($albums): ?>
                <div class="ne-masonry-gallery" id="ne-masonry-gallery">
                    <?php
                    $globalIndex = 0;
                    foreach ($albums as $album):
                        foreach ($album['items'] as $item):
                            $eventTitle = $item['event'];
                            $alt = $eventTitle . ' — ' . pathinfo($item['name'], PATHINFO_FILENAME);
                            ?>
                            <button type="button"
                                class="ne-masonry-item"
                                data-album="<?php echo htmlspecialchars($album['id'], ENT_QUOTES, 'UTF-8'); ?>"
                                data-event="<?php echo htmlspecialchars($item['event_id'], ENT_QUOTES, 'UTF-8'); ?>"
                                data-type="<?php echo htmlspecialchars($item['type'], ENT_QUOTES, 'UTF-8'); ?>"
                                data-src="<?php echo htmlspecialchars($item['src'], ENT_QUOTES, 'UTF-8'); ?>"
                                data-title="<?php echo htmlspecialchars($eventTitle, ENT_QUOTES, 'UTF-8'); ?>"
                                data-index="<?php echo (int) $globalIndex; ?>"
                                aria-label="Open <?php echo htmlspecialchars($alt, ENT_QUOTES, 'UTF-8'); ?>"
                                style="--ne-delay: <?php echo min($globalIndex % 12, 11) * 40; ?>ms">
                                <?php if ($item['type'] === 'video'): ?>
                                    <video muted preload="metadata" playsinline>
                                        <source src="<?php echo htmlspecialchars($item['src'], ENT_QUOTES, 'UTF-8'); ?>#t=0.5"
                                            type="video/mp4">
                                    </video>
                                    <span class="ne-media-badge ne-media-badge-video">
                                        <i class="fal fa-play"></i> Video
                                    </span>
                                <?php else: ?>
                                    <img src="<?php echo htmlspecialchars($item['src'], ENT_QUOTES, 'UTF-8'); ?>"
                                        alt="<?php echo htmlspecialchars($alt, ENT_QUOTES, 'UTF-8'); ?>"
                                        loading="lazy">
                                <?php endif; ?>
                                <span class="ne-masonry-overlay">
                                    <i class="fal fa-search-plus"></i>
                                    <span><?php echo htmlspecialchars($eventTitle, ENT_QUOTES, 'UTF-8'); ?></span>
                                    <em><?php echo htmlspecialchars($album['title'], ENT_QUOTES, 'UTF-8'); ?></em>
                                </span>
                            </button>
                            <?php
                            $globalIndex++;
                        endforeach;
                    endforeach;
                    ?>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Lightbox -->
    <div class="ne-lightbox" id="ne-lightbox" hidden aria-hidden="true">
        <div class="ne-lightbox-backdrop" data-lightbox-close></div>
        <div class="ne-lightbox-dialog" role="dialog" aria-modal="true" aria-label="Media viewer">
            <button type="button" class="ne-lightbox-close" data-lightbox-close aria-label="Close">
                <i class="fal fa-times"></i>
            </button>
            <button type="button" class="ne-lightbox-nav ne-lightbox-prev" aria-label="Previous">
                <i class="fal fa-angle-left"></i>
            </button>
            <button type="button" class="ne-lightbox-nav ne-lightbox-next" aria-label="Next">
                <i class="fal fa-angle-right"></i>
            </button>
            <div class="ne-lightbox-stage">
                <img class="ne-lightbox-image" alt="">
                <video class="ne-lightbox-video" controls playsinline></video>
            </div>
            <div class="ne-lightbox-caption">
                <strong class="ne-lightbox-title"></strong>
                <span class="ne-lightbox-counter"></span>
            </div>
        </div>
    </div>

    <!-- =========================
         CTA SECTION
    ========================== -->
    <section class="cta-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <h2>
                        Ready to Find the Right Solution
                        for Your Business?
                    </h2>
                    <p>
                        Get expert advice and the best products
                        for your industry.
                    </p>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="hero-buttons">
                        <a href="./contact-us.php" class="btn btn-warning text-white">REQUEST A QUOTE
                            <i class="fa fa-paper-plane"></i>
                        </a>
                        <a href="./contact-us.php" class="btn btn-outline-light">CONTACT US
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include './layout/footer.php'; ?>
    <script src="./assets/jquery/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/news-events.js?v=gallery4"></script>
</body>

</html>
