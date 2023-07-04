<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;

class UserQuestionController extends Controller
{
    public function index()
    {
        $questions = Auth::guard('user')->user()->questions;
        return view('user.pages.question.list', compact('questions'));
    }

    public function show(Question $question)
    {
        $answer = $question->answer;
        return view('user.pages.question.answer', compact('question', 'answer'));
    }
}
