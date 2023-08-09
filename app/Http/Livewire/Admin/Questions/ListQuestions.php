<?php

namespace App\Http\Livewire\Admin\Questions;

use App\Enums\Questions\QuestionStatus;
use App\Models\Question;
use App\Models\User;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class ListQuestions extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['refreshComponent' => '$refresh'];

    public function render(): View
    {
        $questions = Question::orderBy('id', 'desc')
            ->with(['admin','users'])
            ->paginate();
        $question_new_status = QuestionStatus::Raw;
        return view('livewire.admin.questions.list-question', ['questions' => $questions, 'question_new_status' => $question_new_status])->layout('admin.layouts.master');
    }
}
