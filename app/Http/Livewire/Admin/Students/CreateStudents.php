<?php

namespace App\Http\Livewire\Admin\Students;

use Livewire\Component;

class CreateStudents extends Component
{
    public function render()
    {
        $levels = getUserLevels();
        return view('livewire.admin.students.create-students', ['levels' => $levels])->layout('admin.layouts.master');
    }
}
