<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index($name=null)
    {
        //passing a param from controller to view
        $name="User 2345";
        $data=array("age"=>"34","dept"=>"SE");
        // $obj={"age":"34","dept":"SE"};
        return view("user",compact('name','data'));
    }
  
}
