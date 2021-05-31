@extends('plantilla')
@section('cuerpo')
    <div class="row">
        <div class="col offset-s3"><h3>{{$titulo}}</h3></div>
    </div>
    <div class="row">
    @foreach ($articulos as $art)
    <div class="col s4 m4 l4">
        <div class="card small">
          <div class="card-image">
            <img src="<?= asset('img/'.$categoria.'/'.$art->imagen.''); ?>">
            <span class="card-title" style="color: black"><b>{{$art->nombre}}</b></span>
          </div>
          <div class="card-content">
            <p><b>Precio: {{$art->precio}}€</b></p>
          </div>
          <div class="card-action">
            <a href="<?= url('info_articulo?codigo='.$art->codigo.'&categoria='.$categoria.'')?>">Mas informacion</a>
          </div>
        </div>
      </div>
    @endforeach
</div>
@endsection