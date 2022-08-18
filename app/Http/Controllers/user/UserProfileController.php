<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\user\profile\UserChangePasswordRequest;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserProfileController extends Controller
{

    public function index()
    {
        $user = Auth::guard('user')->user();
        return view('user.pages.profile.index',compact('user'));
    }


    public function changePassword(UserChangePasswordRequest $request)
    {

        $user = Auth::guard('user')->user();
        if(!Hash::check($request->old_pass,$user->password)){
            return redirect()->back()->with('error','رمز عبور قبلی نادرست وارد شده است');
        }
        DB::beginTransaction();
        try {
            $user->password = Hash::make($request->input('password'));
            $user->save();
            DB::commit();
            return redirect()->back()->with('success','عملیات موفق');
        } catch (Exception $error){
            DB::rollBack();
            return redirect()->back()->with('error','خطا در عملیات ');
        }

    }
}
