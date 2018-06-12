<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

Breadcrumbs::for('admin.products', function ($trail) {
    $trail->push(__('strings.backend.products.title'), route('admin.products'));
});

Breadcrumbs::for('admin.addProduct', function ($trail) {
    $trail->push(__('strings.backend.products.add_product.title'), route('admin.addProduct'));
});

require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
