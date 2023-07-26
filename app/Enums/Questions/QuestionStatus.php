<?php

namespace App\Enums\Questions;

enum QuestionStatus: int
{
    case Raw = 1;
    case Answered = 2;
    case Reviewd = 3;
    case HaveProtest = 4;
    case ProtestApproved = 5;
    case Confirmed = 6;
}
