<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\admin\correction\AdminCorrectionStoreRequest;
use App\Models\Question;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Answer\AnswerRepositoryInterface;

class AdminCorrectionController extends Controller
{
    protected object $AnswerRepository;

    public function __construct(AnswerRepositoryInterface $AnswerRepository)
    {
        $this->AnswerRepository = $AnswerRepository;
    }



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions = Auth::guard('admin')->user()->answeredQuestions();
        return view('admin.pages.correction.list',[ 'questions' => $questions->paginate() ]);
    }



    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        $answer_status = $this->AnswerRepository->getModel()->getStatuses();
        return view('admin.pages.correction.create',compact('question','answer_status'));
    }



    /**
     * Update the specified resource in storage.
     */
    public function store(AdminCorrectionStoreRequest $request, Question $question)
    {
        $data = [
            'incorrect_statement' => $request->input('incorrect_text'),
            'correct_statement' => $request->input('correct_text'),
            'status' => $request->input('answer_status'),
        ];
        DB::beginTransaction();
        try {
            $question->answer->update($data);
            if($data['status'] == $question->answer::CORRECTED ||  $data['status'] == $question->answer::OK_CONFIRM){
                $question->update([
                    'status' => $question::CONFIRMED,
                    'confirmation_time' => now(),
                ]);
            }else{
                $question->update([
                    'status' => $question::REVIEWED,
                ]);
            }
            DB::commit();
            return redirect()->back()->with('success','عملیات موفق');
        } catch (Exception $error){
            DB::rollBack();
            // dd($error);
            return redirect()->back()->with('error','خطا در عملیات ');
        }

    }



}
