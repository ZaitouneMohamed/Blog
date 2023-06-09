<?php

namespace App\Http\Livewire\User\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class Picture extends Component
{
    use WithFileUploads;

    public $photo;
    public function render()
    {
        return view('livewire.user.profile.picture');
    }
    public function save()
    {
        $this->validate([
            'photo' => 'required',
        ]);

        if (Auth()->user()->image === "avatar.png") {
            $filename = $this->photo->store('profiles', 'public');
            User::find(Auth()->user()->id)->update([
                'image' => $filename,
            ]);
        } else {
            \Storage::delete(Auth()->user()->image);
            $filename = $this->photo->store('profiles', 'public');
            User::find(Auth()->user()->id)->update([
                'image' => $filename,
            ]);
        }


    }
}
