@extends('layouts.app')

@section('title','Ver Post')

@section('content')


        <h1 class="text-center"> Ver Post</h1>

    <div class="container">
            
        <div class="d-flex justify-content-center"> 
            
            <x-card 
                title="{{ $post  ['title'] }}" 
                content="{{ $post ['content'] }}" 
            />  
        </div> 

        <div class="d-flex justify-content-center">      
            <a href="{{ route ('wall') }}" class="btn btn-success m-4">Volver</a>
        </div>   
    </div>
    
@endsection

