<?php

use App\Http\Controllers\WallController;
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

Route::get('/', function () {
    return view ('home');
})-> name ('home');

Route::get('/home',function () {
    return view('home');
});

Route::get ('/wall',[WallController::class, 'index'])-> name ('wall');

Route::get('/post/{id}',[WallController::class, 'show'])->name ('post');


Route::get ('/people', function () {
    return view ('people',['name'=>'manuel']);
        
})-> name ('people');

Route::get ('/contact', function(){
    return view ('contact');
        
})-> name ('contact');

Route::get ('/about', function(){
    return view ('about');
        
})-> name ('about');