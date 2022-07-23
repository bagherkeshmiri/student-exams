<?php

namespace App\Repositories\Question;

use App\Models\Question;
use App\Repositories\EloquentBaseRepository;


class EloquentAdminRepository extends EloquentBaseRepository implements QuestionRepositoryInterface
{

    protected string $model = Question::class;

    }
