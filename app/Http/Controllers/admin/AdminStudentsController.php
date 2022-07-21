<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\student\AdminStudentStoreRequest;
use App\Models\User;
use App\Repositories\User\UserRepositoryInterface;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminStudentsController extends Controller
{
    protected object $UserRepository;

    public function __construct(UserRepositoryInterface $UserRepository)
    {
        $this->UserRepository = $UserRepository;
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
        $levels = $this->UserRepository->getModel()->getStatuses();
        return view('admin.pages.student.create',compact('levels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdminStudentStoreRequest $request)
    {
        $data = [
            'name' => $request->input('name'),
            'family' => $request->input('family'),
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'level' => $request->input('level'),
        ];
        DB::beginTransaction();
        try {
            $this->UserRepository->create($data);
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
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
