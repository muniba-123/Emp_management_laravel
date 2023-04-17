<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public $posts=[];
    public function index($name=null)
    {
        // return "Hi from Homecontroller, NAme=".$name;
        echo "<h1>Fluent strings</h1>";
    }
      public function getAllPosts(){
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
          return $response->json();
    }
    public function getPostById($id=null){
        $response = Http::get('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $response->json();
    }
    public function addPost(){
        $response = Http::post('https://jsonplaceholder.typicode.com/posts',[
            "userId"=>56,
            "title"=>"New post title",
            "body"=>"New post"
        ]   
        );
        return $response->json();
    }
    public function updatePost($id){
        $response = Http::put('https://jsonplaceholder.typicode.com/posts/'.$id,[
            "title"=>"Updated post title",
            "body"=>"Updated post"
        ]   
        );
        return $response->json();
    }
}
