<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});
// BREADCRUMS FOR OC HEALTH
Breadcrumbs::for('admin.occupational-health.index', function ($trail) {
    $trail->push(__('strings.backend.products.title'), route('admin.occupational-health.index'));
});

Breadcrumbs::for('admin.occupational-health.edit', function ($trail) {
    $trail->parent('admin.occupational-health.index');
    $trail->push('edit', route('admin.occupational-health.edit', ''));
//    $trail->push(__('strings.backend.products.add_product.title'), route('admin.products.edit'));
});

Breadcrumbs::for('admin.occupational-health.create', function ($trail) {
    $trail->parent('admin.occupational-health.index');
    $trail->push(__('strings.backend.products.add_product.title'), route('admin.occupational-health.create'));
});

Breadcrumbs::for('admin.occupational-health.show', function ($trail) {
    $trail->push(__('strings.backend.products.add_product.title'), route('admin.occupational-health.show'));
});
// BREADCRUMS FOR INSURANCE
Breadcrumbs::for('admin.insurance.index', function ($trail) {
    $trail->push(__('strings.backend.products.title'), route('admin.insurance.index'));
});

Breadcrumbs::for('admin.insurance.edit', function ($trail) {
    $trail->parent('admin.insurance.index');
    $trail->push('edit', route('admin.insurance.edit', ''));
//    $trail->push(__('strings.backend.products.add_product.title'), route('admin.products.edit'));
});

Breadcrumbs::for('admin.insurance.create', function ($trail) {
    $trail->parent('admin.insurance.index');
    $trail->push(__('strings.backend.products.add_product.title'), route('admin.insurance.create'));
});

Breadcrumbs::for('admin.insurance.show', function ($trail) {
    $trail->push(__('strings.backend.products.add_product.title'), route('admin.insurance.show'));
});
require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
