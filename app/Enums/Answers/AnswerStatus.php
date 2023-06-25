<?php

namespace App\Enums\Answers;

enum AnswerStatus: int
{
    case VeryWeak = 0;
    case WeakAndNeedCorrection = 1;
    case Corrected = 2;
    case OkConfirm = 3;
}
