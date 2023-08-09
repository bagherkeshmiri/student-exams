<?php

namespace App\Http\Livewire\Admin\Roles;

use App\Models\Permission;
use App\Models\Role;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CreateRoles extends Component
{
    public $fa_name;
    public $en_name;
    public $permissions = [];
    public $selectAll = false;

    protected $messages = [
        'permissions.required' => 'انتخاب حداقل یک سطح دسترسی الزامی است',
    ];

    private function getAllPermissions(): Collection
    {
        return Permission::all();
    }

    public function render()
    {
        return view('livewire.admin.roles.create-roles', ['allPermissions' => $this->getAllPermissions()])->layout('admin.layouts.master');
    }

    public function updatedSelectAll($value)
    {
        if ($value) {
            $this->permissions = $this->getAllPermissions()->pluck('id');
        } else {
            $this->permissions = [];
        }
    }

    public function store()
    {
        $this->validate([
            'fa_name' => 'required|string',
            'en_name' => 'required|string',
            'permissions' => 'required',
        ]);

        DB::beginTransaction();
        try {
            $role = Role::query()->create([
                'fa_name' => $this->fa_name,
                'en_name' => $this->en_name,
            ]);
            $role->permissions()->attach($this->permissions);
            DB::commit();
            $this->reset(['fa_name', 'en_name', 'permissions']);
            session()->flash('success', __('errors.successful_operation'));
        } catch (Exception) {
            DB::rollBack();
            session()->flash('error', __('errors.error_in_operation'));
        }
    }
}
