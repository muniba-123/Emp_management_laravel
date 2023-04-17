<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($name=null)
    {
        //passing a param from controller to view
        $fruits=array("p1","p2");
        return view("welcome",compact('fruits'));
    }
}
