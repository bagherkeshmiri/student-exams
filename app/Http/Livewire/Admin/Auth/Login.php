<?php

namespace App\Http\Livewire\Admin\Auth;

use App\Models\User;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{
    public $username;
    public $password;

    public function render(): Factory|View|Application
    {
        return view('livewire.admin.auth.login')->layout('admin.layouts.auth-master');
    }

    public function login(): RedirectResponse
    {
        $this->validate([
            'username' => 'required',
            'password' => 'required|min:8',
        ]);

        try {
            $admin = User::query()->where('username', $this->username)->first();
            if (is_null($admin)) {
                session()->flash('error', __('errors.error_in_operation'));
                return redirect()->back();
            }
            if (!Hash::check($this->password, $admin->password)) {
                session()->flash('error', __('errors.password_incorrect'));
                return redirect()->back();
            }
            auth()->loginUsingId($admin->id);
            return redirect()->route('admin.dashboard');
        } catch (Exception) {
            session()->flash('error', __('errors.error_in_operation'));
            return redirect()->back();
        }
    }
}
