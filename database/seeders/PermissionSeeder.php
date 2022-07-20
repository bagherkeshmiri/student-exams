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
            'name' => 'edit-user'
        ]);

        Permission::create([
            'name' => 'delete-user'
        ]);

        Permission::create([
            'name' => 'create-user'
        ]);

        Permission::create([
            'name' => 'create-admin'
        ]);

        Permission::create([
            'name' => 'delete-admin'
        ]);

        Permission::create([
            'name' => 'edit-admin'
        ]);

    }
}
