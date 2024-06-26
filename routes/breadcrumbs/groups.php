<?php

namespace Routes\Breadcrumbs;

use App\Models\Group;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('admin.groups.index', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.home');
    $trail->push('Grupos', route('admin.administration.groups.index'));
});

Breadcrumbs::for('admin.groups.edit', function (BreadcrumbTrail $trail, Group $group) {
    $trail->parent('admin.groups.index');
    $trail->push($group->name, route('admin.administration.groups.edit', $group));
});

Breadcrumbs::for('admin.groups.create', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.groups.index');
    $trail->push('Cadastrar', route('admin.administration.groups.create'));
});
