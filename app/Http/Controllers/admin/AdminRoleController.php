<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Repositories\Permission\PermissionRepositoryInterface;
use App\Repositories\Role\RoleRepositoryInterface;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminRoleController extends Controller
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
        $roles = $this->RoleRepository->paginate();
        return view('admin.pages.role.list',compact('roles'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = $this->PermissionRepository->all();
        return view('admin.pages.role.create',compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'name' => $request->input('name')
        ];
        DB::beginTransaction();
        try {
            $role = $this->RoleRepository->create($data);
            $role->permissions()->attach($request->input('permissions'));
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
    public function show(Role $role)
    {
        $admin_permissions = $role->permissions->pluck('id')->toArray();
        $permissions = $this->PermissionRepository->all();
        return view('admin.pages.role.edit',compact('role','permissions','admin_permissions'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
    }
}
