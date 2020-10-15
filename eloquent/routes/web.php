<?php

use Illuminate\Support\Facades\Route;

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
use App\Models\Post;

Route::get('/', function () {
    $posts = Post::where('id','>=','20')
        ->get();

    foreach ($posts as $post){
        echo "$post->id $post->title <br>";
    }
});
