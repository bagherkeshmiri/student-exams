<?php

namespace App\Http\Livewire\Admin\Roles;

use App\Models\Role;
use Livewire\Component;

class ListRoles extends Component
{
    public function render()
    {
        $roles = Role::query()->paginate();
        return view('livewire.admin.roles.list-roles', ['roles' => $roles])->layout('admin.layouts.master');
    }
}
