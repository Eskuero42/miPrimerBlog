<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('blog');
});

Route::get("blog", [BlogController::class, "index"]);
//Route::resource('blog', BlogController::class);

Route::get('/bloggrid',function()
{
    return view('estateagency.pages.blog-grid');
});

/*Route::get('/about',function(){
    $nombres = ["Joel","Teresa","Eli];
    return view('estateagency.pages.about', ->with
});*/