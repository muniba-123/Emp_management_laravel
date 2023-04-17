<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function getAllPosts(){
        $posts = DB::table('posts')->get();
        return view("posts",compact("posts"));
    }
    public function getAllPostsUsingModel(){
        $posts =Post::all();
        return $posts;
    }
}
