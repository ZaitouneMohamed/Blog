<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
        $this->middleware("role:admin")->except("show");
    }

    public function index()
    {
        $posts = Posts::latest()->paginate(10);
        return view('admin.posts.index')->with([
            "posts" => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.posts.create');
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
        $image->move(public_path('posts'),$image_name);
        $post = Posts::create([
            "title" => $request->title,
            "slug" => Str::slug($request->title),
            "body" => $request->body,
            "published" => 1,
            "prenium" => 0,
            "user_id" => Auth::user()->id,
            "categorie_id" => $request->categorie_id,
            "image" => $image_name,
        ]);
        $post->tags()->sync($request->tags);
        return redirect()->route("admin.posts.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Posts $post)
    {
        $next = Posts::where('id', '>', $post->id )->orderBy('id')->first();
        $previous = Posts::where('id', '<', $post->id )->orderBy('id', 'desc')->first();
        $post->views += 1;
        $post->save();
        return view('landing.post')->with([
            'post' => $post,
            'next' => $next,
            'previous' => $previous
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
