<?php

namespace Database\Seeders;

use App\Enums\Users\Userlevel;
use App\Enums\Users\UserType;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $admin = User::query()->create([
            'name' => 'مدیر',
            'family' => 'کل',
            'username' => 'su',
            'password' => '12345678',
            'type' => UserType::Admin,
        ]);
        $role = Role::query()->where('en_name', 'manager')->first();
        $admin->roles()->attach($role);


        User::factory()->state(
            new Sequence(
                ['level' => Userlevel::Elementary],
                ['level' => Userlevel::Guidance],
                ['level' => Userlevel::HighSchool],
                ['level' => Userlevel::PreUniversity],
            )
        )->count(10)->create();
    }
}
