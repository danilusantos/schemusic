<?php

namespace Routes\Breadcrumbs;

use App\Models\Permission as Directive;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('admin.directives.index', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.home');
    $trail->push('Diretivas', route('admin.administration.directives.index'));
});

Breadcrumbs::for('admin.directives.edit', function (BreadcrumbTrail $trail, Directive $directive) {
    $trail->parent('admin.directives.index');
    $trail->push($directive->name, route('admin.administration.directives.edit', $directive));
});

Breadcrumbs::for('admin.directives.create', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.directives.index');
    $trail->push('Cadastrar', route('admin.administration.directives.create'));
});
