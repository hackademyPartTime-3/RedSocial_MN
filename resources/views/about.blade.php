@extends('layouts.app')

@section('title','About us')

@section('content')

 <h1 class="text-center"> Acerca de mi red Social</h1>

 <div class="d-flex justify-content-center text-center">

       <x-card title="La nueva red social" 
               img="{{ asset ('/img/social.jpg') }}" >
               <x-slot:content>
                     <p>Esta es la red social hecha con laravel en mi edicion de Bootscamp</p>
                     <p>En el año 2022</p>
              </x-slot>       
       </x-card>     
 </div>     
@endsection       