<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

Breadcrumbs::for('admin.products.index', function ($trail) {
    $trail->push(__('strings.backend.products.title'), route('admin.products.index'));
});

Breadcrumbs::for('admin.products.edit', function ($trail) {
    $trail->parent('admin.products.index');
    $trail->push('edit', route('admin.products.edit', ''));
//    $trail->push(__('strings.backend.products.add_product.title'), route('admin.products.edit'));
});

Breadcrumbs::for('admin.products.create', function ($trail) {
    $trail->parent('admin.products.index');
    $trail->push(__('strings.backend.products.add_product.title'), route('admin.products.create'));
});

Breadcrumbs::for('admin.products.show', function ($trail) {
    $trail->push(__('strings.backend.products.add_product.title'), route('admin.products.show'));
});

require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
