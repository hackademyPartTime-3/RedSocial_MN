<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WallController extends Controller
{
    //
    /*
    private $posts = [
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
        ['id' =>17,
        'title' => 'Quinto post',
        'content' =>'Yo opino lo mismo, lo mejor es Bootstrap'],
    ];*/

    private function getPosts (){
     
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
            ['id' =>17,
            'title' => 'Quinto post',
            'content' =>'Yo opino lo mismo, lo mejor es Bootstrap'],
        ];
        return $posts;
    }

    public function index (){
        return view ('wall', ['posts' => $this-> getPosts (), 'code' => 200, 'message' => 'Listado de posts' ]);
    }

    public function show ($id){
        $posts = $this->getPosts();

        $postDetalle = null;
        
        foreach ($posts as $post){
            if ( $post ['id'] == $id ) {
                $postDetalle = $post;
            }
        }
            return view('post',['post' => $postDetalle]);


    }
        

}





