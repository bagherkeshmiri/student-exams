<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Repositories\Answer\AnswerRepositoryInterface;
use App\Repositories\Question\QuestionRepositoryInterface;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserAnswerController extends Controller
{
    public function store(Request $request,Question $question)
    {
        $data = [
            'question_id' =>$question->id ,
            'text' => $request->input('text'),
        ];
        DB::beginTransaction();
        try {
            $question->answer()->create($data);
            $question->update([
                'status' => $question::REVIEWED
            ]);
            DB::commit();
            return redirect()->back()->with('success','عملیات موفق');
        } catch (Exception $error){
            DB::rollBack();
            dd($error);
            return redirect()->back()->with('error','خطا در عملیات ');
        }
    }
}
