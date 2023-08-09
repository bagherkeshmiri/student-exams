<?php

namespace App\Http\Livewire\Admin\Roles;

use App\Models\Role;
use Exception;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ShowRole extends Component
{
    public Role $role;
    public $fa_name;
    public $en_name;
    public $allPermissions;
    public $selectAll = false;
    public $permissions = [];
    protected object $permissionRepository;

    public function mount(Role $role)
    {
        $this->role = $role;
        $this->fa_name = $role->fa_name;
        $this->en_name = $role->en_name;
        $this->permissions = $this->role->permissions->pluck('id')->toArray();
    }

    public function render()
    {
        return view('livewire.admin.roles.show-role', ['allPermissions' => $this->allPermissions])->layout('admin.layouts.master');
    }

    public function updatedSelectAll($value)
    {
        if ($value) {
            $this->permissions = $this->permissionRepository->all()->pluck('id');
        } else {
            $this->permissions = [];
        }
    }

    public function update(): void
    {
        $data = [
            'fa_name' => $this->fa_name,
            'en_name' => $this->en_name,
        ];
        DB::beginTransaction();
        try {
            $this->role->update($data);
            $this->role->permissions()->sync(array_values($this->permissions));
            $this->reset(['fa_name', 'en_name', 'permissions']);
            DB::commit();
            session()->flash('success', __('errors.successful_operation'));
        } catch (Exception) {
            DB::rollBack();
            session()->flash('error', __('errors.error_in_operation'));
        }
    }
}
