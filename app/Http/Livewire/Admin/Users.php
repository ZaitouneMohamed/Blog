<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public function render()
    {
        return view('livewire.admin.users');
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
}
