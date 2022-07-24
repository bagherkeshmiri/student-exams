<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\question\AdminQuestionStoreRequest;
use App\Models\Question;
use App\Repositories\Admin\AdminRepositoryInterface;
use App\Repositories\Question\QuestionRepositoryInterface;
use App\Repositories\User\UserRepositoryInterface;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminQuestionController extends Controller
{
    protected object $UserRepository;
    protected object $AdminRepository;
    protected object $QuestionRepository;

    public function __construct(
        UserRepositoryInterface $UserRepository,
        AdminRepositoryInterface $AdminRepository,
        QuestionRepositoryInterface $QuestionRepository
    )
    {
        $this->UserRepository = $UserRepository;
        $this->AdminRepository = $AdminRepository;
        $this->QuestionRepository = $QuestionRepository;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions = $this->QuestionRepository->paginate();
        return view('admin.pages.question.list',compact('questions'));
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
    public function store(AdminQuestionStoreRequest $request)
    {
        $data = [
            'link' => $request->input('link'),
            'response_deadline' => $request->input('response_deadline'),
            'admin_id' => $request->input('admin_id'),
            'text' => $request->input('text'),
        ];
        DB::beginTransaction();
        try {
            $question =  $this->QuestionRepository->create($data);
            $question->users()->attach($request->input('user_id'));
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
    public function show(Question $question)
    {
        $admins = $this->AdminRepository->all()->pluck('id','full_name')->toArray();
        $students = $this->UserRepository->all()->pluck('id','full_name')->toArray();
        return view('admin.pages.question.edit',compact('question','admins','students'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question)
    {
        $data = [
            'link' => $request->input('link'),
            'response_deadline' => $request->input('response_deadline'),
            'admin_id' => $request->input('admin_id'),
            'text' => $request->input('text'),
        ];
        DB::beginTransaction();
        try {
            $this->QuestionRepository->update($data,$question->id);
            $question->users()->sync($request->input('user_id'));
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
    public function destroy(Question $question)
    {
        $this->QuestionRepository->delete($question->id);
        return redirect()->route('admin.question.index');
    }
}
