<?php

namespace App\Repositories\Answer;

use App\Models\Answer;
use App\Repositories\EloquentBaseRepository;


class EloquentAnswerRepository extends EloquentBaseRepository implements AnswerRepositoryInterface
{

    protected string $model = Answer::class;

    }
