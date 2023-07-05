<?php

namespace App\Repositories\Question;

use App\Models\Question;
use App\Repositories\EloquentBaseRepository;


class EloquentQuestionRepository extends EloquentBaseRepository implements QuestionRepositoryInterface
{

    protected string $model = Question::class;

    }
