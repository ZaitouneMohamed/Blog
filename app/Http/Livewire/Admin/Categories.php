<?php

namespace App\Http\Livewire\Admin;

use App\Models\Categorie;
use Illuminate\Support\Str;
use Livewire\Component;

class Categories extends Component
{
    public $name , $editing , $categorieid;
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
    
    public function getCategorie($id)
    {
        $categorie = Categorie::Find($id);
        $this->name = $categorie->name;
        $this->categorieid = $categorie->id;
        $this->editing = true;
    }
    
    public function update()
    {
        Categorie::find($this->categorieid)->update([
            "name" => $this->name,
            "slug" => Str::slug($this->name),
        ]);
        $this->editing = false;
        $this->getCategoriesProperty();
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
