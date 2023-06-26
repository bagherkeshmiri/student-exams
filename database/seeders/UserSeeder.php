<?php

namespace Database\Seeders;

use App\Enums\Users\Userlevel;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::factory()->state(
            new Sequence(
                ['level' => Userlevel::Elementary],
                ['level' => Userlevel::Guidance],
                ['level' => Userlevel::High_school],
                ['level' => Userlevel::Pre_university],
            )
        )->count(10)->create();
    }
}
