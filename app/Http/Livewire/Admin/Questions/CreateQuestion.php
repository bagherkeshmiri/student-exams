<?php

namespace App\Http\Livewire\Admin\Questions;

use App\Models\Question;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CreateQuestion extends Component
{
    public $link;
    public $response_deadline;
    public $admin_id;
    public $user_id;
    public $text;

    public function render()
    {
        $admins = User::isAdmin()->get()->pluck('id', 'full_name')->toArray();
        $students = User::isUser()->get()->pluck('id', 'full_name')->toArray();
        return view('livewire.admin.questions.create-question', ['admins' => $admins, 'students' => $students])->layout('admin.layouts.master');
    }

    public function store()
    {
        $this->validate([
            'link' => 'required|unique:questions,link',
            'response_deadline' => 'required|numeric',
            'admin_id' => 'required|numeric',
            'user_id' => 'required|numeric',
            'text' => 'required',
        ]);
        $data = [
            'link' => $this->link,
            'response_deadline' => $this->response_deadline,
            'admin_id' => $this->admin_id,
            'user_id' => $this->user_id,
            'text' => $this->text,
        ];
        DB::beginTransaction();
        try {
            Question::query()->create($data);
            DB::commit();
            $this->reset(['link', 'response_deadline', 'admin_id', 'user_id', 'text']);
            session()->flash('success', __('errors.successful_operation'));
        } catch (Exception $e) {
            DB::rollBack();
            dd($e);
            session()->flash('error', __('errors.error_in_operation'));
        }
    }
}
