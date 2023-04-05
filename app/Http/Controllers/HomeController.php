<?php

namespace App\Http\Controllers;

use App\Models\Comments;
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
}
