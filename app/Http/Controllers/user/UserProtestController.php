<?php

namespace App\Http\Controllers\user;

use App\Enums\Questions\QuestionStatus;
use App\Http\Controllers\Controller;
use App\Models\Question;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserProtestController extends Controller
{

    public function store(Request $request, Question $question)
    {
        $data = [
            'text' => $request->input('text'),
            'question_id' => $question->id,
        ];
        DB::beginTransaction();
        try {
            $question->protest()->create($data);
            $question->update([
                'status' => QuestionStatus::HaveProtest,
                'protest_time' => now()
            ]);
            DB::commit();
            return redirect()->back()->with('success', __('errors.successful_operation'));
        } catch (Exception) {
            DB::rollBack();
            return redirect()->back()->with('error', __('errors.error_in_operation'));
        }
    }
}
