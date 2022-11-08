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

Route::get('/', function () {
    return view ('home');
})-> name ('home');

Route::get('/home',function () {
    return view('home');
});

Route::get ('/wall', function () {
    $posts = [
        ['id' =>2,
        'title' => 'Primer post',
        'content' =>'Contenido del primer post que hago con un array asociativo'],
        ['id' =>5,
        'title' => 'Segundo post',
        'content' =>'Que good aprender CSS'],
        ['id' =>8,
        'title' => 'Tercer post',
        'content' =>'Creando páginas con laravel'],
        ['id' =>10,
        'title' => 'Cuarto post',
        'content' =>'Pues lo mejor es Bootstrap'],
    ];
   
    return view ('wall', ['posts' => $posts ]);
        
})-> name ('wall');

Route::get('/post/{id}',function ( $id ) {
    $posts = [
    ['id' =>2,
    'title' => 'Primer post',
    'content' =>'Contenido del primer post que hago con un array asociativo'],
    ['id' =>5,
    'title' => 'Segundo post',
    'content' =>'Que good aprender CSS'],
    ['id' =>8,
    'title' => 'Tercer post',
    'content' =>'Creando páginas con laravel'],
    ['id' =>10,
    'title' => 'Cuarto post',
    'content' =>'Pues lo mejor es Bootstrap'],
];
$postDetalle = null;

foreach ($posts as $post){
    if ( $post ['id'] == $id ) {
        $postDetalle = $post;
    }
}
    return view('post',['post' => $postDetalle]);

})->name ('post');


Route::get ('/people', function () {
    return view ('people',['name'=>'manuel']);
        
})-> name ('people');

Route::get ('/contact', function(){
    return view ('contact');
        
})-> name ('contact');

Route::get ('/about', function(){
    return view ('about');
        
})-> name ('about');