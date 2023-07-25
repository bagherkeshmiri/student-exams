<?php

namespace App\Http\Livewire\Admin\Questions;

use App\Enums\Questions\QuestionStatus;
use App\Models\Question;
use Livewire\Component;
use Livewire\WithPagination;

class ListQuestion extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $questions = Question::orderBy('id', 'desc')->paginate();
        $question_new_status = QuestionStatus::Raw;
        return view('livewire.admin.questions.list-question', ['questions' => $questions, 'question_new_status' => $question_new_status])->layout('admin.layouts.master');
    }
}
