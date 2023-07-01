<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::query()->create([
            'name' => 'teacher'
        ]);

        Role::query()->create([
            'name' => 'deputy'
        ]);

        Role::query()->create([
            'name' => 'manager'
        ]);
    }
}
