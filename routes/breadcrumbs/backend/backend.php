<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

Breadcrumbs::for('admin.products', function ($trail) {
    $trail->push(__('strings.backend.products.title'), route('admin.products'));
});

require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
