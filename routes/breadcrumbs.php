<?php

namespace Routes;

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('admin.home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('admin.dashboard.index'));
});

Breadcrumbs::for('admin.dashboard.index', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.home');
    $trail->push('Dashboard', route('admin.dashboard.index'));
});

require __DIR__ . '/breadcrumbs/users.php';

require __DIR__ . '/breadcrumbs/plans.php';

require __DIR__ . '/breadcrumbs/groups.php';

require __DIR__ . '/breadcrumbs/directivesGroup.php';

require __DIR__ . '/breadcrumbs/directives.php';
