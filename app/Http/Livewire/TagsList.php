<?php

namespace App\Http\Livewire;

use App\Models\Tags;
use Livewire\Component;

class TagsList extends Component
{
    public $name;
    public function render()
    {
        return view('livewire.tags-list');
    }

    public function getTagsProperty()
    {
        return Tags::all();
    }

    public function add()
    {
        $this->validate();
        Tags::create([
            "name" => $this->name
        ]);
        $this->getTagsProperty();
        $this->name = "";
    }

    public function delete($id)
    {
        Tags::find($id)->delete();
        $this->getTagsProperty();
    }

    protected $rules = [
        'name' => 'required',
    ];
}
