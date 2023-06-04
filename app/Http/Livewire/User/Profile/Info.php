<?php

namespace App\Http\Livewire\User\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Info extends Component
{
    public $name , $email , $phone , $adresse;
    public function render()
    {
        return view('livewire.user.profile.info');
    }
    public function mount()
    {
        $this->getInfo();
    }
    public function getInfo()
    {
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
        $this->phone = Auth::user()->phone;
        $this->adresse = Auth::user()->adresse;
    }
    public function update()
    {
        User::find(Auth::user()->id)->update([
            "name" => $this->name,
            "email" => $this->email,
            "phone" => $this->phone,
            "adresse" => $this->adresse
        ]);
        $this->getInfo();
        session()->flash('message', 'Profile successfully updated.');
    }


}
