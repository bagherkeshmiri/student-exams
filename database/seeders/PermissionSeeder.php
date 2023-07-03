<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'fa_name' => 'ویرایش کاربر',
                'en_name' => 'edit-user',
            ],
            [
                'fa_name' => 'حذف کاربر',
                'en_name' => 'delete-user',
            ],
            [
                'fa_name' => 'ایجاد کاربر',
                'en_name' => 'create-user',
            ],
            [
                'fa_name' => 'ایجاد ادمین',
                'en_name' => 'create-admin',
            ],
            [
                'fa_name' => 'حذف ادمین',
                'en_name' => 'delete-admin',
            ],
            [
                'fa_name' => 'ویرایش ادمین',
                'en_name' => 'edit-admin',
            ],
        ];

        Permission::query()->insert($data);
    }
}
