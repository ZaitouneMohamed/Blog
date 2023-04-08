<?php

namespace App\Http\Livewire\Admin;

use App\Models\Categorie;
use Illuminate\Support\Str;
use Livewire\Component;

class Categories extends Component
{
    public $name;
    public function render()
    {
        return view('livewire.admin.categories');
    }
    public function getCategoriesProperty()
    {
        return Categorie::latest()->get();
    }

    public function add()
    {
        $this->validate();
        Categorie::create([
            "name" => $this->name,
            "slug" => Str::slug($this->name),
        ]);
        $this->getCategoriesProperty();
        $this->name = "";
    }

    public function delete($id)
    {
        Categorie::find($id)->delete();
        $this->getCategoriesProperty();
    }

    protected $rules = [
        'name' => 'required',
    ];
}
