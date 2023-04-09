<?php

namespace App\Http\Livewire;

use App\Models\Posts;
use App\Models\Tags;
use Livewire\Component;
use Livewire\WithPagination;
use phpDocumentor\Reflection\DocBlock\Tag;

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
        return Posts::latest()->paginate(15);
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
    
    public function removetagfrompost($tagid,$postid)
    {
        $post = Posts::find($postid);
        $tag = Tags::find($tagid);
        $post->tags()->detach($tag);
        $this->getPostsProperty();
    }
    public function delete($id)
    {
        $post = Posts::find($id);
        unlink(public_path('assets/posts').'/'.$post->image);
        $post->delete();
        $this->getPostsProperty();
    }

}
