@extends('layouts.app')
@section('content')
    <div class="container">
      <div class="row">
        <div class="col offset-s3"><h3>{{$titulo}}</h3></div>
        {{-- @php
            dd(session());
        @endphp --}}
    </div>
    <div class="row">
    @foreach ($articulos as $art)
      <div class="col-s3">
        <div class="card">
          <img src="<?= asset('img/'.$art->imagen.''); ?>" class="img-fluid img-thumbnail" width="200">
          <div class="card-body">
              <h5 class="card-title" style="color: black"><b>{{$art->nombre}}</b></h5>
            <p class="card-text">
              <?php if ($art->descuento<=0) { ?>
              <b>Precio: {{$art->precio}}€</b>
              <?php }else{?>
                <b>Precio: {{$art->precio-round($art->precio*$art->descuento/100,2)}}€ <del>{{$art->precio}}</del> <u>{{$art->descuento}}%</u></b>
              <?php } ?>
            </p>
          <a href="<?= url('info_articulo?codigo='.$art->codigo.'')?>" class="btn btn-primary">Mas informacion</a>
          </div>
        </div>
      </div>
    @endforeach
      
    </div>
    <div class="row">
      <div class="col">{{$articulos->links()}}</div>
    </div>
  </div>
@endsection