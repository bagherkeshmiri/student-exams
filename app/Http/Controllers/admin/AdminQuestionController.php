<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\AdminRepositoryInterface;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Http\Request;

class AdminQuestionController extends Controller
{
    protected object $UserRepository;
    protected object $AdminRepository;

    public function __construct(
        UserRepositoryInterface $UserRepository,
        AdminRepositoryInterface $AdminRepository
    )
    {
        $this->UserRepository = $UserRepository;
        $this->AdminRepository = $AdminRepository;
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
        $admins = $this->AdminRepository->all()->pluck('id','full_name')->toArray();
        $students = $this->UserRepository->all()->pluck('id','full_name')->toArray();
        return view('admin.pages.question.create',compact('students','admins'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
