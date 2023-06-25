<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Role;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $admin = new Admin();
        $admin->name = 'مدیر';
        $admin->family = 'کل';
        $admin->username = 'su';
        $admin->password = '12345678';
        $admin->save();
        $role = Role::query()->where('name', 'manager')->first();
        $admin->roles()->attach($role);
    }
}
