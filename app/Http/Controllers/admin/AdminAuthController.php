<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\AdminRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AdminAuthController extends Controller
{
    protected object $AdminRepository;

    public function __construct(AdminRepositoryInterface $AdminRepository)
    {
        $this->AdminRepository = $AdminRepository;
    }

    public function showLogin()
    {
        return view('admin.auth.login');
    }


    public function login(Request $request)
    {
        try {
            $admin = $this->AdminRepository->getModel()->where('username',$request->input('username'))->first();
            if(is_null($admin) ) {
                return redirect()->back()->with('error','نام کاربری نادرست است');
            }
            if(!Hash::check($request->input('password'),$admin->password)){
                return redirect()->back()->with('error','رمز عبور نادرست است');
            }
            Auth::guard('admin')->loginUsingId($admin->id);
            return redirect()->route('admin.dashboard');
        } catch (\Exception $error){
            return redirect()->back()->with('error',$error->getMessage());
        }

    }


    public function logout()
    {
        try {
            Auth::guard('admin')->logout();
            return redirect()->route('admin.login');
        } catch (\Exception $error){
            dd($error->getMessage());
        }

    }

}
