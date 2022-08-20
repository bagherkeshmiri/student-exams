<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Repositories\Permission\PermissionRepositoryInterface;
use App\Repositories\Role\RoleRepositoryInterface;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminPermissionController extends Controller
{
    protected object $PermissionRepository;
    protected object $RoleRepository;

    public function __construct(
        PermissionRepositoryInterface $PermissionRepository,
        RoleRepositoryInterface $RoleRepository,
    )
    {
        $this->PermissionRepository = $PermissionRepository;
        $this->RoleRepository = $RoleRepository;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = $this->RoleRepository->all();
        return view('admin.pages.permission.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->input('permissions');
        DB::beginTransaction();
        try {
            $this->PermissionRepository->createMany($data);
            DB::commit();
            return redirect()->back()->with('success','عملیات موفق');
        } catch(Exception $error){
            DB::rollBack();
            return redirect()->back()->with('error','خطا در عملیات ');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permission $permission)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permission $permission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        //
    }
}
