<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Role;
use App\Repositories\Admin\AdminRepositoryInterface;
use App\Repositories\Role\RoleRepositoryInterface;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    protected AdminRepositoryInterface $AdminRepository;
    protected RoleRepositoryInterface $RoleRepository;

    public function __construct(
        AdminRepositoryInterface $AdminRepository
        , RoleRepositoryInterface $RoleRepository)
    {
        $this->AdminRepository = $AdminRepository;
        $this->RoleRepository = $RoleRepository;
    }


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $created_admin = $this->AdminRepository->create([
            'name' => 'مدیر',
            'family' => 'کل',
            'username' => 'su',
            'password' => 1234
        ]);
        $manager_role =  $this->RoleRepository->getModel()->where('name','manager')->first();
        $created_admin->roles()->attach($manager_role);
        dump('super manager created');
    }
}
