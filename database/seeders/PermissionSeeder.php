<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        Permission::query()->create([
            'fa_name' => 'ویرایش کاربر',
            'en_name' => 'edit-user',
        ]);

        Permission::query()->create([
            'fa_name' => 'حذف کاربر',
            'en_name' => 'delete-user',
        ]);

        Permission::query()->create([
            'fa_name' => 'ایجاد کاربر',
            'en_name' => 'create-user',
        ]);

        Permission::query()->create([
            'fa_name' => 'ایجاد ادمین',
            'en_name' => 'create-admin',
        ]);

        Permission::query()->create([
            'fa_name' => 'حذف ادمین',
            'en_name' => 'delete-admin',
        ]);

        Permission::query()->create([
            'fa_name' => 'ویرایش ادمین',
            'en_name' => 'edit-admin',
        ]);
    }
}
