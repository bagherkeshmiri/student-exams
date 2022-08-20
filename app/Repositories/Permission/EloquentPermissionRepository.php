<?php

namespace App\Repositories\Permission;

use App\Models\Permission;
use App\Models\Role;
use App\Repositories\EloquentBaseRepository;


class EloquentPermissionRepository extends EloquentBaseRepository implements PermissionRepositoryInterface
{

    protected string $model = Permission::class;

    }
