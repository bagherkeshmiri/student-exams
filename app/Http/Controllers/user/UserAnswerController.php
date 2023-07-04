<?php

namespace App\Http\Controllers\user;

use App\Enums\Questions\QuestionStatus;
use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Question;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserAnswerController extends Controller
{
    public function store(Request $request, Question $question)
    {
        DB::beginTransaction();
        try {
            $answer = new Answer();
            $answer->text = $request->input('text');
            $question->answer()->save($answer);

            $question->status = QuestionStatus::Answered;
            $question->response_time = Carbon::now();
            $question->save();

            DB::commit();
            return redirect()->back()->with('success', __('errors.successful_operation'));
        } catch (Exception) {
            DB::rollBack();
            return redirect()->back()->with('error', __('errors.error_in_operation'));
        }
    }
}
