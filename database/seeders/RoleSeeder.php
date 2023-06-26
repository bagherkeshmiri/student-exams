<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::create([
            'name' => 'teacher'
        ]);

        Role::create([
            'name' => 'deputy'
        ]);

        Role::create([
            'name' => 'manager'
        ]);
    }
}
