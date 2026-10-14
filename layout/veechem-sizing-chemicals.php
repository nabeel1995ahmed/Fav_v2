<?php
$veechem_sizing_series = [
    [
        'name' => 'VeeSiz Series',
        'image' => './assets/images/products-and-solutions/pigment-powders-and-emulsions/sizing.svg',
        'products' => [
            'VeeSiz PVA-17',
            'VeeSiz PVA-26',
            'VeeSiz PR-850',
            'VeeSiz CMC-300',
        ],
    ],
    [
        'name' => 'VeeWax Series',
        'image' => './assets/images/products-and-solutions/pigment-powders-and-emulsions/sizing.svg',
        'products' => [
            'VeeWax E-95',
            'VeeWax NE-75',
        ],
    ],
    [
        'name' => 'VeeBond Series',
        'image' => './assets/images/products-and-solutions/pigment-powders-and-emulsions/sizing.svg',
        'products' => [
            'VeeBond-71',
        ],
    ],
    [
        'name' => 'VeeACR Series',
        'image' => './assets/images/products-and-solutions/pigment-powders-and-emulsions/sizing.svg',
        'products' => [
            'VeeACR-100',
            'VeeACR-VA25',
        ],
    ],
];
?>

<div class="veechem-sizing-panel">
    <div class="veechem-sizing-header">
        <h4>Product Series</h4>
    </div>
    <div class="veechem-sizing-grid">
        <?php foreach ($veechem_sizing_series as $series): ?>
            <div class="veechem-sizing-card">
                <div class="veechem-sizing-card-media">
                    <img src="<?= htmlspecialchars($series['image']) ?>" alt="<?= htmlspecialchars($series['name']) ?>">
                </div>
                <div class="veechem-sizing-card-body">
                    <h6><?= htmlspecialchars($series['name']) ?></h6>
                    <ul class="veechem-sizing-products">
                        <?php foreach ($series['products'] as $product): ?>
                            <li><?= htmlspecialchars($product) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
