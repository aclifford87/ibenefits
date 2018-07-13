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
    $trail->push(__('Insurance'), route('admin.insurance.index'));
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

// BREADCRUMS FOR MUSIC APPS
Breadcrumbs::for('admin.music-app.index', function ($trail) {
    $trail->push(__('Music Apps'), route('admin.music-app.index'));
});

Breadcrumbs::for('admin.music-app.edit', function ($trail) {
    $trail->parent('admin.music-app.index');
    $trail->push('edit', route('admin.music-app.edit', ''));
//    $trail->push(__('strings.backend.products.add_product.title'), route('admin.products.edit'));
});

Breadcrumbs::for('admin.music-app.create', function ($trail) {
    $trail->parent('admin.music-app.index');
    $trail->push(__('strings.backend.products.add_product.title'), route('admin.music-app.create'));
});

Breadcrumbs::for('admin.music-app.show', function ($trail) {
    $trail->push(__('strings.backend.products.add_product.title'), route('admin.music-app.show'));
});

// BREADCRUMS FOR ONLINE TRAINING
Breadcrumbs::for('admin.online-training.index', function ($trail) {
    $trail->push(__('Online Training'), route('admin.online-training.index'));
});

Breadcrumbs::for('admin.online-training.edit', function ($trail) {
    $trail->parent('admin.online-training.index');
    $trail->push('edit', route('admin.online-training.edit', ''));
});

Breadcrumbs::for('admin.online-training.create', function ($trail) {
    $trail->parent('admin.online-training.index');
    $trail->push(__('strings.backend.products.add_product.title'), route('admin.online-training.create'));
});

Breadcrumbs::for('admin.online-training.show', function ($trail) {
    $trail->push(__('strings.backend.products.add_product.title'), route('admin.online-training.show'));
});
require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
