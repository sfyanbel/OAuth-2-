<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function allPosts()  {
        $posts=post::all();
        return response()->json(['posts' =>  $posts]);
    }
}
