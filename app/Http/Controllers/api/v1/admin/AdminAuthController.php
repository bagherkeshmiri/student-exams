<?php

namespace App\Http\Controllers\api\v1\admin;

use App\Http\Controllers\Api\Traits\ApiResponder;
use App\Http\Controllers\Controller;
use App\Repositories\Admin\AdminRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AdminAuthController extends Controller
{
    use ApiResponder;

    protected object $AdminRepository;

    public function __construct(AdminRepositoryInterface $AdminRepository)
    {
        $this->AdminRepository = $AdminRepository;
    }

    public function login(Request $request)
    {
        try {
            $admin = $this->AdminRepository->getModel()->where('username',$request->input('username'))->first();
            if(is_null($admin) && Hash::check($request->input('password'),$admin->password)) {
                return $this->successRespond('نام کاربر یا رمز عبور نادرست است');
            }
            Auth::guard('admin')->loginUsingId($admin->id);
            return $this->successRespond('با موفقیت وارد شدید');
        } catch (\Exception $error){
            return $this->errorRespond($error->getMessage());
        }

    }

}
