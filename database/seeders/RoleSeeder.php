<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::query()->create([
            'fa_name' => 'معلم',
            'en_name' => 'teacher',
        ]);

        Role::query()->create([
            'fa_name' => 'ناظم',
            'en_name' => 'deputy',
        ]);

        Role::query()->create([
            'fa_name' => 'مدیر',
            'en_name' => 'manager',
        ]);
    }
}
