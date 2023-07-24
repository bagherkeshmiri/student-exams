<?php

namespace App\Http\Livewire\Admin\Students;

use App\Enums\Users\UserType;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ShowStudents extends Component
{
    public User $user;
    public $name;
    public $family;
    public $mobile;
    public $username;
    public $level;

    public function mount(User $user)
    {
        $this->name = $user->name;
        $this->family = $user->family;
        $this->mobile = $user->mobile;
        $this->username = $user->username;
        $this->level = $user->level;
        $this->user = $user;
    }

    public function render()
    {
        $levels = getUserLevels();
        return view('livewire.admin.students.show-students', ['levels' => $levels])->layout('admin.layouts.master');
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'family' => 'required',
            'mobile' => 'required|min:10|max:11|unique:users,mobile,' . $this->user->id,
            'username' => 'required|unique:users,username,' . $this->user->id,
            'level' => 'required',
        ]);
        $data = [
            'name' => $this->name,
            'family' => $this->family,
            'mobile' => $this->mobile,
            'username' => $this->username,
            'level' => $this->level,
        ];
        DB::beginTransaction();
        try {
            $this->user->update($data);
            DB::commit();
            session()->flash('success', __('errors.successful_operation'));
        } catch (Exception) {
            DB::rollBack();
            session()->flash('error', __('errors.error_in_operation'));
        }
    }
}
