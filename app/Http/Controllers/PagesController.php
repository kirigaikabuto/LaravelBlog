<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome(){
        $title = "hello it is page of Welcome";
//        return view("welcome", compact("title"));
        return view("welcome")->with("title_name",$title);
    }

    public function about(){
        $title = "It is about page";
        return view("pages.about")->with("title",$title);
    }

    public function service(){
        $dict = array(
            "title" => "it is service page",
            "services" => ["desc","asc","desc"],
        );
        return view("pages.service")->with($dict);
    }

}
