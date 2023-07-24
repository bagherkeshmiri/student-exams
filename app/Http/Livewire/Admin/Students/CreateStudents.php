<?php

namespace App\Http\Livewire\Admin\Students;

use App\Enums\Users\UserType;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CreateStudents extends Component
{
    public $name;
    public $family;
    public $mobile;
    public $username;
    public $password;
    public $level;

    public function render()
    {
        $levels = getUserLevels();
        return view('livewire.admin.students.create-students', ['levels' => $levels])->layout('admin.layouts.master');
    }


    public function store()
    {
        $this->validate([
            'name' => 'required',
            'family' => 'required',
            'mobile' => 'required|min:11|max:11|unique:users,mobile',
            'username' => 'required|unique:users,username',
            'password' => 'required',
            'level' => 'required',
        ]);
        $data = [
            'name' => $this->name,
            'family' => $this->family,
            'mobile' => $this->mobile,
            'username' => $this->username,
            'password' => $this->password,
            'level' => $this->level,
            'type' => UserType::User,
        ];
        DB::beginTransaction();
        try {
            User::query()->create($data);
            DB::commit();
            $this->reset(['name', 'family', 'mobile', 'username', 'password', 'level']);
            session()->flash('success', __('errors.successful_operation'));
        } catch (Exception) {
            DB::rollBack();
            session()->flash('error', __('errors.error_in_operation'));
        }
    }
}
