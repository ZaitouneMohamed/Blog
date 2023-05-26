<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Comments;
use App\Models\Conversation;
use App\Models\Message;
use App\Models\Posts;
use App\Models\Tags;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function addComment(Request $request , $id)
    {
        // dd($request->all());
        Comments::create([
            "body" => $request->comment,
            "user_id" => auth()->user()->id,
            "posts_id" => $id,
        ]);
        return redirect()->back();
    }

    public function CreatePost(Request $request)
    {
        $request->validate([
            "title" => "required",
            "body" => "required",
            "image" => "required",
        ]);
        $image = $request->image;
        $image_name = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('assets/posts'),$image_name);
        $post = Posts::create([
            "title" => $request->title,
            "slug" => Str::slug($request->title),
            "body" => $request->body,
            "published" => 0,
            "prenium" => 0,
            "user_id" => Auth::user()->id,
            "categorie_id" => $request->categorie_id,
            "image" => $image_name,
        ]);
        $post->tags()->sync($request->tags);
        return redirect()->route('index')->with([
            "message" => "wait for validation"
        ]);
    }
    public function deleteComment($id)
    {
        Comments::find($id)->delete();
        return redirect()->back();
    }

    public function user_profile($id)
    {
        $user = User::find($id);
        return view('landing.user.profile', compact('user'));
    }

    public function startConversation($id)
    {
        Conversation::create([
            "sender_id" => Auth::user()->id,
            "receiver_id" => $id
        ]);
        return redirect()->route('chat');
    }

    public function posts_list()
    {
        $posts = Posts::latest()->orderBy('views','DESC')->paginate(10);
        return view('landing.posts',compact('posts'));
    }

    public function posts_of_categorie(Categorie $categorie)
    {
        $posts = $categorie->posts()->paginate(10);
        return view('landing.posts_of_categorie',compact("posts","categorie"));
    }

    public function posts_of_tag(Tags $tag)
    {
        $posts = $tag->posts()->paginate(10);
        return view('landing.posts_of_tag',compact("posts","tag"));
    }

    public function contact(Request $request)
    {
        Message::create([
            "name" => $request->name,
            "email" => $request->email,
            "content" => $request->content,
            "statue" => 0
        ]);
        return redirect()->back();
    }

    public function messages_list()
    {
        $messages = Message::latest()->paginate(5);
        return view('admin.messages.index',compact('messages'));
    }
    public function read_message($id)
    {
        $message = Message::Find($id);
        $message->statue = 1;
        $message->update();
        return view('admin.messages.view',compact('message'));
    }
}
