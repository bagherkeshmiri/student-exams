<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminPermissionController extends Controller
{
    public function create()
    {
        $roles = Role::all();
        return view('admin.pages.permission.create', compact('roles'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            Permission::createMany($request->input('permissions'));
            DB::commit();
            return redirect()->back()->with('success', __('errors.successful_operation'));
        } catch (Exception) {
            DB::rollBack();
            return redirect()->back()->with('error', __('errors.error_in_operation'));
        }
    }
}
