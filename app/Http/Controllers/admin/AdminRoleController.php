<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
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
        //
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
            $role->permissions->attach($request->input('permissions'));
            DB::commit();
            return redirect()->back()->with('success','عملیات موفق');
        } catch (Exception $error){
            DB::rollBack();
//            dd($error);
            return redirect()->back()->with('error','خطا در عملیات ');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
