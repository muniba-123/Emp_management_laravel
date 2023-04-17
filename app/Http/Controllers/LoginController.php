<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view("login");
    }
   public function submit(Request $req)
{
$validatedData=$req->validate([
"email"=>"required|email",
"password"=>"required|min:2|max:4"
]);


    // return $req->all();
    return "Email:".$req->input("email")." Password: ".$req->input("password");
}
}
