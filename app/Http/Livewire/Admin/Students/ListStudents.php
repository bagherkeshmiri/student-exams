<?php

namespace App\Http\Livewire\Admin\Students;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ListStudents extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $students = User::isUser()->paginate();
        return view('livewire.admin.students.list-students', ['students' => $students])->layout('admin.layouts.master');
    }
}
