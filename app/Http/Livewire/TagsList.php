<?php

namespace App\Http\Livewire;

use App\Models\Tags;
use Livewire\Component;

class TagsList extends Component
{
    public $name,$tagid,$editing;
    public function render()
    {
        return view('livewire.tags-list');
    }

    public function getTagsProperty()
    {
        return Tags::latest()->get();
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

    public function gettag($id)
    {
        $tag = Tags::find($id);
        $this->name = $tag->name;
        $this->tagid = $tag->id;
        $this->editing = true;
    }
    public function update()
    {
        Tags::find($this->tagid)->update([
            "name" => $this->name
        ]);
        $this->editing = false;
        $this->getTagsProperty();
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
