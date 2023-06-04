<?php

namespace App\Http\Livewire\User\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Links extends Component
{
    public $github , $facebook , $website , $twitter;
    public function render()
    {
        return view('livewire.user.profile.links');
    }
    public function mount()
    {
        $this->getInfo();
    }
    public function getInfo()
    {
        $this->github = Auth::user()->github;
        $this->facebook = Auth::user()->facebook;
        $this->website = Auth::user()->website;
        $this->twitter = Auth::user()->twitter;
    }
    public function update()
    {
        User::find(Auth::user()->id)->update([
            "facebook" => $this->facebook,
            "github" => $this->github,
            "website" => $this->website,
            "twitter" => $this->twitter
        ]);
        session()->flash('message', 'Profile successfully updated.');
        $this->getInfo();
    }
}
