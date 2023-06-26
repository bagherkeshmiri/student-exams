<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\student\AdminStudentEditRequest;
use App\Http\Requests\admin\student\AdminStudentStoreRequest;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;


class AdminStudentController extends Controller
{
    public function index()
    {
        $students = User::orderBy('id', 'desc')->paginate();
        return view('admin.pages.student.list', compact('students'));
    }

    public function create()
    {
        $levels = getUserLevels();
        return view('admin.pages.student.create', compact('levels'));
    }

    public function store(AdminStudentStoreRequest $request)
    {
        DB::beginTransaction();
        try {
            $user = new User();
            $user->name = $request->input('name');
            $user->family = $request->input('family');
            $user->username = $request->input('username');
            $user->password = $request->input('password');
            $user->level = $request->input('level');
            $user->mobile = $request->input('mobile');
            $user->save();
            DB::commit();
            return redirect()->back()->with('success', __('errors.successful_operation'));
        } catch (Exception) {
            DB::rollBack();
            return redirect()->back()->with('error', __('errors.error_in_operation'));
        }
    }

    public function show(User $user)
    {
        $levels = getUserLevels();
        return view('admin.pages.student.edit', compact('user', 'levels'));
    }

    public function update(AdminStudentEditRequest $request, User $user)
    {
        DB::beginTransaction();
        try {
            $user->name = $request->input('name');
            $user->family = $request->input('family');
            $user->username = $request->input('username');
            $user->level = $request->input('level');
            $user->mobile = $request->input('mobile');
            $user->save();
            DB::commit();
            return redirect()->back()->with('success', __('errors.successful_operation'));
        } catch (Exception) {
            DB::rollBack();
            return redirect()->back()->with('error', __('errors.error_in_operation'));
        }
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.user.index');
    }
}
