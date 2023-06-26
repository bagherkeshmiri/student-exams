<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\role\AdminRoleEditRequest;
use App\Http\Requests\admin\role\AdminRoleStoreRequest;
use App\Models\Permission;
use App\Models\Role;
use Exception;
use Illuminate\Support\Facades\DB;

class AdminRoleController extends Controller
{
    public function index()
    {
        $roles = Role::paginate();
        return view('admin.pages.role.list', compact('roles'));
    }

    public function create()
    {
        $permissions = Permission::all();
        return view('admin.pages.role.create', compact('permissions'));
    }

    public function store(AdminRoleStoreRequest $request)
    {
        DB::beginTransaction();
        try {
            $role = new Role();
            $role->name = $request->input('name');
            $role->save();
            $role->permissions()->attach($request->input('permissions'));
            DB::commit();
            return redirect()->back()->with('success', __('errors.successful_operation'));
        } catch (Exception) {
            DB::rollBack();
            return redirect()->back()->with('error', __('errors.error_in_operation'));
        }
    }

    public function show(Role $role)
    {
        $admin_permissions = $role->permissions->pluck('id')->toArray();
        $permissions = Permission::all();
        return view('admin.pages.role.edit', compact('role', 'permissions', 'admin_permissions'));
    }

    public function update(AdminRoleEditRequest $request, Role $role)
    {
        DB::beginTransaction();
        try {
            $role->name = $request->input('name');
            $role->save();
            $role->permissions()->sync($request->input('permissions'));
            DB::commit();
            return redirect()->back()->with('success', __('errors.successful_operation'));
        } catch (Exception) {
            DB::rollBack();
            return redirect()->back()->with('error', __('errors.error_in_operation'));
        }
    }
}
