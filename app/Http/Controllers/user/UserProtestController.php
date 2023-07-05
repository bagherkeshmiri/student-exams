<?php

namespace App\Http\Controllers\user;

use App\Enums\Questions\QuestionStatus;
use App\Http\Controllers\Controller;
use App\Models\Protest;
use App\Models\Question;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserProtestController extends Controller
{
    public function store(Request $request, Question $question)
    {
        DB::beginTransaction();
        try {
            $protest = new Protest();
            $protest->text = $request->input('text');
            $question->protest()->save($protest);

            $question->status = QuestionStatus::HaveProtest;
            $question->protest_time = Carbon::now();
            $question->save();

            DB::commit();
            return redirect()->back()->with('success', __('errors.successful_operation'));
        } catch (Exception) {
            DB::rollBack();
            return redirect()->back()->with('error', __('errors.error_in_operation'));
        }
    }
}
