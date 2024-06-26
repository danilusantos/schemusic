<?php

namespace Routes\Breadcrumbs;

use App\Models\Group;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('admin.directivesGroup.edit', function (BreadcrumbTrail $trail, Group $group) {
    $trail->parent('admin.groups.index');
    $trail->push($group->name, route('admin.administration.directivesGroup.edit', $group));
});
