<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\user\auth\UserRegisterRequest;
use App\Models\User;
use App\Repositories\User\UserRepositoryInterface;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
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
            $user = User::where('username', $request->input('username'))->first();
            if (is_null($user)) {
                return redirect()->back()->with('error', __('errors.username_incorrect'));
            }
            if (!Hash::check($request->input('password'), $user->password)) {
                return redirect()->back()->with('error', __('errors.password_incorrect'));
            }
            Auth::guard('user')->loginUsingId($user->id);
            return redirect()->route('user.dashboard');
        } catch (Exception) {
            return redirect()->back()->with('error', __('errors.error_in_operation'));
        }
    }

    public function register(UserRegisterRequest $request)
    {
        $users_introduced_codes = User::all(['introduced_code'])->pluck('introduced_code')->toArray();
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
            $user = new User();
            $user->email = $request->input('email');
            $user->mobile = $request->input('mobile');
            $user->password = $request->input('password');
            $user->introduced_code = $request->input('introduced_code');
            $user->country_id = $request->input('country_id');
            $user->state_id = $request->input('state_id');
            $user->city_id = $request->input('city_id');
            $user->package_id = $request->input('package_id');
            $user->save();
            DB::commit();
        } catch (Exception $error) {
            DB::rollBack();
            dd($error);
        }
    }

    public function logout()
    {
        try {
            Auth::guard('user')->logout();
            return redirect()->route('user.login');
        } catch (\Exception $error) {
            dd($error->getMessage());
        }
    }
}
