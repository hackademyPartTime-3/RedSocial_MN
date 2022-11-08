

<div class="col-md-4 d-flex justify-content-center text-center ">
    <div class="card p-2 m-2 w-100 " >
      @isset($img)
        <img src="{{ $img }}" class="card-img-top" alt="{{ $title }}">
      @endisset
        <div class="card-body">
          <h5 class="card-title"> {{ $title }} </h5>
          <p class="card-text">{{ $content }}</p>
        </div>

        @isset( $link )

        <a href="{{ $link }}" class="btn btn-success m-4">Ver detalle</a>

        @endisset
         
   
    </div>
</div>      