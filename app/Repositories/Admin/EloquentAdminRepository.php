<?php

namespace App\Repositories\Admin;

use App\Models\Admin;
use App\Repositories\EloquentBaseRepository;


class EloquentAdminRepository extends EloquentBaseRepository implements AdminRepositoryInterface
{

    protected string $model = Admin::class;

    }
