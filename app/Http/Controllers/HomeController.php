<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Comments;
use App\Models\Posts;
use App\Models\Tags;
use Illuminate\Http\Request;

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
}
