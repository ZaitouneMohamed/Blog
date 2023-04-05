<?php

namespace App\Http\Livewire;

use App\Models\Posts;
use Livewire\Component;
use Livewire\WithPagination;

class PostsList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $tags;
    public function render()
    {
        return view('livewire.posts-list');
    }
    public function getPostsProperty()
    {
        return Posts::latest()->paginate(10);
    }

    public function TooglePublish($id)
    {
        $post = Posts::find($id);
        $post->published = !$post->published;
        $post->save();
        $this->getPostsProperty();
    }

    public function TooglePrenium($id)
    {
        $post = Posts::find($id);
        $post->prenium = !$post->prenium;
        $post->save();
        $this->getPostsProperty();
    }

}
