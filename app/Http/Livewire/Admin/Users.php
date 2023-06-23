<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Users extends Component
{
    public $roles, $name, $email, $password, $role;
    public function render()
    {
        return view('livewire.admin.users');
    }

    public function mount()
    {
        $this->roles = Role::all();
    }

    public function getRolesProperty()
    {
        return $this->roles = Role::all();
    }
    public function AddUser()
    {
        $this->validate();
        $user = User::create([
            "name" => $this->name,
            "email" => $this->email,
            "password" => Hash::make($this->password),
        ]);
        $user->assignRole($this->role);
        $user->givePermissionTo(['crud_posts', 'chat', 'comment']);
        $this->reset();
    }

    public function clear()
    {
        $this->name = "";
        $this->email = "";
        $this->password = "";
    }

    public function getUsersProperty()
    {
        return User::latest()->get();
    }

    public function delete($id)
    {
        User::find($id)->delete();
        $this->getUsersProperty();
    }
    protected $rules = [
        'name' => 'required|max:200',
        'email' => 'required|email|max:200',
        'password' => 'required|min:6|max:200',
    ];
}
