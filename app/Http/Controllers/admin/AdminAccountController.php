<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\account\AdminAccountEditRequest;
use App\Http\Requests\admin\account\AdminAccountStoreRequest;
use App\Models\Admin;
use App\Models\Role;
use Exception;
use Illuminate\Support\Facades\DB;

class AdminAccountController extends Controller
{
    public function index()
    {
        $admins = Admin::query()->paginate();
        return view('admin.pages.account.list', compact('admins'));
    }

    public function create()
    {
        $roles = Role::all()->pluck('id', 'name')->toArray();
        return view('admin.pages.account.create', compact('roles'));
    }

    public function store(AdminAccountStoreRequest $request)
    {
        DB::beginTransaction();
        try {
            $admin = new Admin();
            $admin->name = $request->input('name');
            $admin->family = $request->input('family');
            $admin->username = $request->input('username');
            $admin->password = $request->input('password');
            $admin->save();
            $admin->roles()->attach($request->input('role'));
            $admin->phones()->create([
                'number' => $request->input('mobile')
            ]);
            DB::commit();
            return redirect()->back()->with('success', __('errors.successful_operation'));
        } catch (Exception $e) {
            DB::rollBack();
            dd($e);
            return redirect()->back()->with('error', __('errors.error_in_operation'));
        }
    }

    public function show(Admin $admin)
    {
        $roles = Role::all()->pluck('id', 'name')->toArray();
        $admin_mobile = $admin->phones->first();
        if (!is_null($admin_mobile)) {
            $admin_mobile = $admin_mobile->number;
        }
        return view('admin.pages.account.edit', compact('admin', 'roles', 'admin_mobile'));
    }

    public function update(AdminAccountEditRequest $request, Admin $admin)
    {
        DB::beginTransaction();
        try {
            $admin->name = $request->input('name');
            $admin->family = $request->input('family');
            $admin->username = $request->input('username');
            $admin->save();
            $admin->roles()->sync($request->input('role'));
            $admin->phones()->update([
                'number' => $request->input('mobile')
            ]);
            DB::commit();
            return redirect()->back()->with('success', __('errors.successful_operation'));
        } catch (Exception) {
            DB::rollBack();
            return redirect()->back()->with('error', __('errors.error_in_operation'));
        }
    }

    public function destroy(Admin $admin)
    {
        $admin->delete();
        return redirect()->route('admin.admin.index');
    }
}
