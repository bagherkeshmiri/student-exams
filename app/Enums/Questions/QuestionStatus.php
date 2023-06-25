<?php

namespace App\Enums\Questions;

enum QuestionStatus: int
{
    case Raw = 0;
    case Answered = 1;
    case Reviewd = 2;
    case HaveProtest = 3;
    case ProtestApproved = 4;
    case Confirmed = 5;
}
