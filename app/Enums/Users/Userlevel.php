<?php

namespace App\Enums\Users;

enum Userlevel: int
{
    case Elementary = 1;
    case Guidance = 2;
    case HighSchool = 3;
    case PreUniversity = 4;
}
