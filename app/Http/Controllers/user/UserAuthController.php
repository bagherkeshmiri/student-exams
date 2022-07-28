<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\user\auth\UserRegisterRequest;
use App\Models\User;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    protected object $UserRepository;


    public function __construct(UserRepositoryInterface $UserRepository)
    {
        $this->UserRepository = $UserRepository;
    }


    public function showLogin()
    {
        return view('user.auth.login');
    }


    public function showRegister()
    {
        return view('user.auth.register');
    }


    public function login(Request $request)
    {
        try {
            $user = $this->UserRepository->getModel()->where('username',$request->input('username'))->first();
            if(is_null($user) ) {
                return redirect()->back()->with('error','نام کاربری نادرست است');
            }
            if(!Hash::check($request->input('password'),$user->password)){
                return redirect()->back()->with('error','رمز عبور نادرست است');
            }
            Auth::guard('user')->loginUsingId($user->id);
            return redirect()->route('user.dashboard');
        } catch (\Exception $error){
            return redirect()->back()->with('error','خطا در عملیات');
        }
    }


    public function register(UserRegisterRequest $request)
    {
        dd($request->all()); //FIXME:

        $users_introduced_codes = $this->UserRepository->all(['introduced_code'])->pluck('introduced_code')->toArray();
        DB::beginTransaction();
        try {
            $data = [
                'email' => $request->input('email'),
                'mobile' => $request->input('mobile'),
                'password' => $request->input('password'),
                'introduced_code' => generateRandomNumber($users_introduced_codes),
                'country_id' => 118,
                'state_id' => 11,
                'city_id' => 153,
                'package_id' => 1,
            ];
            $this->UserRepository->create($data);
            DB::commit();
        } catch (\Exception $error){
            DB::rollBack();
            dd($error);
        }
    }


    public function verifyRegister(User $user)
    {
        dd($user);
    }


    public function logout()
    {
        try {
            Auth::guard('user')->logout();
            return redirect()->route('user.login');
        } catch (\Exception $error){
            dd($error->getMessage());
        }

    }

}
