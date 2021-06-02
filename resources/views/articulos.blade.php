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
            <img src="<?= asset('img/'.$art->imagen.''); ?>">
            <span class="card-title" style="color: black"><b>{{$art->nombre}}</b></span>
          </div>
          <div class="card-content">
            <p>
              <?php if ($art->descuento<=0) { ?>
              <b>Precio: {{$art->precio}}€</b>
              <?php }else{?>
                <b>Precio: {{$art->precio-round($art->precio*$art->descuento/100,2)}}€ <del>{{$art->precio}}</del> <u>{{$art->descuento}}%</u></b>
              <?php } ?>
            </p>
          </div>
          <div class="card-action">
            <a href="<?= url('info_articulo?codigo='.$art->codigo.'')?>">Mas informacion</a>
          </div>
        </div>
      </div>
    @endforeach
</div>
@endsection