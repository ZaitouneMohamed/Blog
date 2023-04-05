<?php

namespace App\Http\Livewire;

use App\Models\Tags;
use Livewire\Component;

class TagsList extends Component
{
    public function render()
    {
        return view('livewire.tags-list');
    }

    public function getTagsProperty()
    {
        return Tags::all();
    }

    public function delete($id)
    {
        Tags::find($id)->delete();
        $this->getTagsProperty();
    }
}
