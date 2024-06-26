<?php

namespace Routes\Breadcrumbs;

use App\Models\Plan;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('admin.plans.index', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.home');
    $trail->push('Planos', route('admin.administration.plans.index'));
});

Breadcrumbs::for('admin.plans.edit', function (BreadcrumbTrail $trail, Plan $plan) {
    $trail->parent('admin.plans.index');
    $trail->push(
        ucwords($plan->name),
        route('admin.administration.plans.edit', $plan)
    );
});

Breadcrumbs::for('admin.plans.create', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.plans.index');
    $trail->push('Cadastrar', route('admin.administration.plans.create'));
});
