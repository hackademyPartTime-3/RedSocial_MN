@extends('layouts.app')

@section('title','Red Social')

@section('content')
  

<h1 class="text-center">Con la comunicación llegaremos a todos lados</h1>
<br>



<a href="{{route ('wall')}}"> <img src="{{ asset ('/img/Iconos .png')}}" class="img-fluid d-flex justify-content-center text-center" id="imghome" aria-describedat="tooltip"> </a>

     <div id="tooltip" role="tooltip">
      Pincha aquí para acceder al muro
      <div id="arrow" data-popper-arrow></div>
    </div>
     
      @endsection
