<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        $title = "Welcome To Laravel!";
        // return view("pages.index",compact('title'));
        return view("pages.index")->with('title',$title);
    }

    public function about(){
        return view("pages.about");
    }

    public function services(){
        $data = array(
            "title"=>"Services",
            "services"=>["Web Design","Development","Maintainance"]
        );
        return view("pages.services")->with($data);
    }
}
