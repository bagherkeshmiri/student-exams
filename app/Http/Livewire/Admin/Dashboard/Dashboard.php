<?php

namespace App\Http\Livewire\Admin\Dashboard;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard.dashboard')->layout('admin.layouts.master');
    }
}
