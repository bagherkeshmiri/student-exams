<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'fa_name' => 'ویرایش کاربر',
            'en_name' => 'edit-user',
        ]);

        Permission::create([
            'fa_name' => 'حذف کاربر',
            'en_name' => 'delete-user',
        ]);

        Permission::create([
            'fa_name' => 'ایجاد کاربر',
            'en_name' => 'create-user',
        ]);

        Permission::create([
            'fa_name' => 'ایجاد ادمین',
            'en_name' => 'create-admin',
        ]);

        Permission::create([
            'fa_name' => 'حذف ادمین',
            'en_name' => 'delete-admin',
        ]);

        Permission::create([
            'fa_name' => 'ویرایش ادمین',
            'en_name' => 'edit-admin',
        ]);

    }
}
