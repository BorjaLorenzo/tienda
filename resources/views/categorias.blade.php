@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    @foreach ($categorias as $cat)
    <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img src="<?= asset('img/'.$cat->imagen.''); ?>" class="img-fluid img-thumbnail" width="200">
          <div class="card-body">
            <h5 class="card-title">{{$cat->nombre}}</h5>
            <p class="card-text">{{$cat->anuncio}}</p>
            <a href="<?= url($cat->codigo."/".$cat->id."/".$cat->carpeta."/".$cat->anuncio)?>" class="btn btn-primary">{{$cat->nombre}}</a>
          </div>
        </div>
    </div>
    @endforeach
  </div>
</div>
@endsection