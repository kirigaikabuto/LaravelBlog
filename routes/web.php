<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, "welcome"]);

Route::get("/service", [PagesController::class, "service"]);

Route::get("/about", [PagesController::class, "about"]);


Route::resource("posts","\App\Http\Controllers\PostsController");
//Route::get("/about/{id}/{name}", function ($id,$name){
//    //return $id." ".$name;
//    return view("pages.about");
//});
