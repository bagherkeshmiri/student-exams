<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->state(new Sequence(
            ['level' => User::ELEMENTARY],
            ['level' => User::GUIDANCE],
            ['level' => User::HIGH_SCHOOL],
            ['level' => User::PRE_UNIVERSITY],
        ))->count(10)->create();
    }
}
