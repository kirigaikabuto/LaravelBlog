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

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get("/dashboard",[\App\Http\Controllers\DashboardController::class,"index"]);
