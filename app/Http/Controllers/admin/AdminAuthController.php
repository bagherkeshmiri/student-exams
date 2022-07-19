<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\AdminRepositoryInterface;
use Illuminate\Http\Request;


class AdminAuthController extends Controller
{
    protected object $AdminRepository;

    public function __construct(AdminRepositoryInterface $AdminRepository)
    {
        $this->AdminRepository = $AdminRepository;
    }

    public function showLogin()
    {
        return view('user.auth.login');
    }

    public function login(Request $request)
    {

    }

}
