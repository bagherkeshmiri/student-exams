<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'fa_name' => 'معلم',
                'en_name' => 'teacher',
            ],
            [
                'fa_name' => 'ناظم',
                'en_name' => 'deputy',
            ],
            [
                'fa_name' => 'مدیر',
                'en_name' => 'manager',
            ],
        ];

        Role::query()->insert($data);
    }
}
