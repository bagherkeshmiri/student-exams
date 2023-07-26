<?php

namespace App\Http\Controllers\admin;

use App\Enums\Questions\QuestionStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\admin\question\AdminQuestionEditRequest;
use App\Http\Requests\admin\question\AdminQuestionStoreRequest;
use App\Models\Admin;
use App\Models\Question;
use App\Models\User;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class AdminQuestionController extends Controller
{
    public function store(AdminQuestionStoreRequest $request)
    {
        DB::beginTransaction();
        try {
            $question = new Question();
            $question->link = $request->input('link');
            $question->response_deadline = $request->input('response_deadline');
            $question->admin_id = $request->input('admin_id');
            $question->text = $request->input('text');
            $question->save();
            $question->users()->attach($request->input('user_id'));
            DB::commit();
            return redirect()->back()->with('success', __('errors.successful_operation'));
        } catch (Exception) {
            DB::rollBack();
            return redirect()->back()->with('error', __('errors.error_in_operation'));
        }
    }

    public function show(Question $question)
    {
        $admins = $this->getAllAdmins()->pluck('id', 'full_name')->toArray();
        $students = $this->getAllUsers()->pluck('id', 'full_name')->toArray();
        return view('admin.pages.question.edit', compact('question', 'admins', 'students'));
    }

    public function update(AdminQuestionEditRequest $request, Question $question)
    {
        DB::beginTransaction();
        try {
            $question->link = $request->input('link');
            $question->response_deadline = $request->input('response_deadline');
            $question->admin_id = $request->input('admin_id');
            $question->text = $request->input('text');
            $question->save();
            $question->users()->sync($request->input('user_id'));
            DB::commit();
            return redirect()->back()->with('success', __('errors.successful_operation'));
        } catch (Exception) {
            DB::rollBack();
            return redirect()->back()->with('error', __('errors.error_in_operation'));
        }
    }

    public function destroy(Question $question)
    {
        $question->delete();
        return redirect()->route('admin.question.index');
    }
}
