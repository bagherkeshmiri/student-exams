<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\profile\AdminChangePasswordRequest;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    public function index()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.pages.profile.index', compact('admin'));
    }

    public function changePassword(AdminChangePasswordRequest $request)
    {
        $admin = Auth::guard('admin')->user();
        if (!Hash::check($request->input('old_pass'), $admin->password)) {
            return redirect()->back()->with('error', __('errors.old_password_incorrect'));
        }
        DB::beginTransaction();
        try {
            $admin->password = $request->input('password');
            $admin->save();
            DB::commit();
            return redirect()->back()->with('success', __('errors.successful_operation'));
        } catch (Exception) {
            DB::rollBack();
            return redirect()->back()->with('error', __('errors.error_in_operation'));
        }
    }
}
