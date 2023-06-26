<?php

namespace App\Http\Controllers\admin;

use App\Enums\Answers\AnswerStatus;
use App\Enums\Questions\QuestionStatus;
use App\Http\Requests\admin\correction\AdminCorrectionStoreRequest;
use App\Models\Answer;
use App\Models\Question;
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
        $answer_status = getQuestionstatuses();
        return view('admin.pages.correction.create', compact('question', 'answer_status'));
    }

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
            if ($data['status'] == AnswerStatus::Corrected || $data['status'] == AnswerStatus::OkConfirm) {
                $question->update([
                    'status' => QuestionStatus::Confirmed,
                    'confirmation_time' => now(),
                ]);
            } else {
                $question->update([
                    'status' => QuestionStatus::Reviewd,
                ]);
            }
            DB::commit();
            return redirect()->back()->with('success', __('errors.successful_operation'));
        } catch (Exception) {
            DB::rollBack();
            return redirect()->back()->with('error', __('errors.error_in_operation'));
        }
    }
}
