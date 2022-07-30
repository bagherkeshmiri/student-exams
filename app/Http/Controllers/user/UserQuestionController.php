<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions = Auth::guard('user')->user()->questions;
        return view('user.pages.question.list',compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
    }
}
