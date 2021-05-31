@extends('plantilla')
@section('cuerpo')
<div class="row">
  @foreach ($categorias as $cat)
  <div class="col s3 m3 l3">
    <div class="card small">
      <div class="card-image">
        <img src="<?= asset('img/'.$cat->imagen.''); ?>">
        <span class="card-title">{{$cat->nombre}}</span>
      </div>
      <div class="card-content">
        <p>{{$cat->anuncio}}</p>
      </div>
      <div class="card-action">
        <a href="<?= url($cat->codigo)?>">{{$cat->nombre}}</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection