<?php

namespace App\Repositories\Role;

use App\Models\Role;
use App\Repositories\EloquentBaseRepository;


class EloquentRoleRepository extends EloquentBaseRepository implements RoleRepositoryInterface
{

    protected string $model = Role::class;

    }
