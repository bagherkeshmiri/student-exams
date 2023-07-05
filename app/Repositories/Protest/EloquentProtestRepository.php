<?php

namespace App\Repositories\Protest;

use App\Models\Protest;
use App\Repositories\EloquentBaseRepository;


class EloquentProtestRepository extends EloquentBaseRepository implements ProtestRepositoryInterface
{

    protected string $model = Protest::class;

    }
