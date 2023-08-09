<?php

namespace App\Http\Livewire\Admin\Roles;

use App\Models\Role;
use Illuminate\View\View;
use Livewire\Component;

class ListRoles extends Component
{
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['refreshComponent' => '$refresh'];


    public function render(): View
    {
        $roles = Role::query()->with(['permissions'])->paginate();
        return view('livewire.admin.roles.list-roles', ['roles' => $roles])->layout('admin.layouts.master');
    }
}
