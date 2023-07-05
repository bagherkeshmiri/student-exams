<?php

namespace App\Http\Controllers\admin;

use App\Enums\Answers\AnswerStatus;
use App\Enums\Questions\QuestionStatus;
use App\Http\Requests\admin\correction\AdminCorrectionStoreRequest;
use App\Models\Answer;
use App\Models\Question;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminCorrectionController extends Controller
{
    public function index()
    {
        $questions = Auth::guard('admin')->user()->answeredQuestions();
        return view('admin.pages.correction.list', ['questions' => $questions->paginate()]);
    }

    public function show(Question $question)
    {
        $answer_status = getAnswerStatuses();
        return view('admin.pages.correction.create', compact('question', 'answer_status'));
    }

    public function store(AdminCorrectionStoreRequest $request, Question $question)
    {
        DB::beginTransaction();
        try {
            $answer = new Answer();
            $answer->incorrect_statement = $request->input('incorrect_text');
            $answer->correct_statement = $request->input('correct_statement');
            $answer->status = $request->input('answer_status');
            $answer->text = $question->answer->text;
            $question->answer()->save($answer);
            if ($request->input('answer_status') == AnswerStatus::Corrected || $request->input('answer_status') == AnswerStatus::OkConfirm) {
                $question->status = QuestionStatus::Confirmed;
                $question->confirmation_time = Carbon::now();
            } else {
                $question->status = QuestionStatus::Reviewd;
            }
            $question->save();
            DB::commit();
            return redirect()->back()->with('success', __('errors.successful_operation'));
        } catch (Exception) {
            DB::rollBack();
            return redirect()->back()->with('error', __('errors.error_in_operation'));
        }
    }
}
