<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController ;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage',[PostsController::class,"posts"] )->name("posts.all");


Route::get("/viewpost/{id}",[PostsController::class,"viewpost"] )->name("posts.view");

Route::get('/addpage',[PostsController::class,"add"] )->name("posts.add");

Route::get('/updatepage/{id}',[PostsController::class,"update"] )->name("posts.update");

Route::post('/addpage',[PostsController::class,"add_DB"] )->name("posts.addDB");
Route::put('/updatepage/{id}',[PostsController::class,"update_DB"] )->name("posts.updateDB");
Route::delete('/deletepage/{id}',[PostsController::class,"delete_DB"] )->name("posts.deleteDB");

