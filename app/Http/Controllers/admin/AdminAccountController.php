<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\account\AdminAccountEditRequest;
use App\Http\Requests\admin\account\AdminAccountStoreRequest;
use App\Models\Admin;
use App\Repositories\Admin\AdminRepositoryInterface;
use App\Repositories\Role\RoleRepositoryInterface;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminAccountController extends Controller
{

    protected object $RoleRepository;
    protected object $AdminRepository;

    public function __construct(
        AdminRepositoryInterface $AdminRepository,
        RoleRepositoryInterface $RoleRepository,
    )
    {
        $this->RoleRepository = $RoleRepository;
        $this->AdminRepository = $AdminRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = $this->AdminRepository->paginate();
        return view('admin.pages.account.list',compact('admins'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = $this->RoleRepository->all()->pluck('id','name')->toArray();
        return view('admin.pages.account.create',compact('roles'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(AdminAccountStoreRequest $request)
    {
        $data = [
            'name' => $request->input('name'),
            'family' => $request->input('family'),
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];
        DB::beginTransaction();
        try {
            $admin = $this->AdminRepository->create($data);
            $admin->roles()->attach($request->input('role'));
            $admin->phones()->create([
                'number' => $request->input('mobile')
            ]);
            DB::commit();
            return redirect()->back()->with('success','عملیات موفق');
        } catch (Exception $error){
            DB::rollBack();
            return redirect()->back()->with('error','خطا در عملیات ');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        $roles = $this->RoleRepository->all()->pluck('id','name')->toArray();
        $admin_mobile = $admin->phones->first();
        if(!is_null($admin_mobile))  $admin_mobile = $admin_mobile->number;
        return view('admin.pages.account.edit',compact('admin','roles','admin_mobile'));
    }


    /**
     * Show the form for editing the specified resource.

     */
    public function edit(Admin $admin)
    {
    }


    /**
     * Update the specified resource in storage.
         */
    public function update(AdminAccountEditRequest $request, Admin $admin)
    {
        $data = [
            'name' => $request->input('name'),
            'family' => $request->input('family'),
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];
        DB::beginTransaction();
        try {
            $this->AdminRepository->update($data,$admin->id);
            $admin->roles()->sync($request->input('role'));
            $admin->phones()->update([
                'number' => $request->input('mobile')
            ]);
            DB::commit();
            return redirect()->back()->with('success','عملیات موفق');
        } catch (Exception $error){
            DB::rollBack();
            return redirect()->back()->with('error','خطا در عملیات ');
        }
    }


    /**
     * Remove the specified resource from storage.

     */
    public function destroy(Admin $admin)
    {
        //
    }
}
