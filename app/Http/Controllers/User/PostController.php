<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Posts::where('user_id', Auth::user()->id)->paginate(5);
        return view('landing.user.myposts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('landing.create_post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required",
            "body" => "required",
            "image" => "required",
        ]);
        $image = $request->image;
        $image_name = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('assets/posts'), $image_name);
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
        return redirect()->route('MyPosts.index')->with([
            "message" => "wait for validation"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Posts::find($id);
        return view('landing.update_post', compact("post"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Posts::find($id);
        $request->validate([
            "title" => "required",
            "body" => "required",
        ]);
        if ($request->has('image')) {
            unlink(public_path('assets/posts') . '/' . $post->image);
            $image = $request->image;
            $image_name = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('assets/posts'), $image_name);
            $post->image = $image_name;
            $post->update();
        }
        $post->update([
            "title" => $request->title,
            "slug" => Str::slug($request->title),
            "body" => $request->body,
            "categorie_id" => $request->categorie_id,
        ]);
        $post->tags()->sync($request->tags);
        return redirect()->route("MyPosts.index")->with([
            "success" => "post updated successfly"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Posts::find($id);
        unlink(public_path('assets/posts') . '/' . $post->image);
        $post->delete();
        return redirect()->route("MyPosts.index")->with([
            "success" => "post deleted successfly"
        ]);
    }
}
