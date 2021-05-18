@extends('plantilla-menu')
@section('cuerpo')
<div class="row">
    <div class="col s2 m4 l4">
      <div class="card small">
        <div class="card-image">
          <img src="<?= asset('img/categorias.jpg'); ?>">
          <span class="card-title">Añadir Categorias</span>
        </div>
        <div class="card-content">
          <p>"Añade" "Edita" o "Elimina" una Categoria</p>
        </div>
        <div class="card-action">
          <a href="<?=url('añadir-categoria')?>">Continuar</a>
        </div>
      </div>
    </div>
    <div class="col s2 m4 l4">
        <div class="card small">
          <div class="card-image">
            <img src="<?= asset('img/producto.jpg'); ?>">
            <span class="card-title">Añadir Producto</span>
          </div>
          <div class="card-content">
            <p>"Añade" "Edita" o "Elimina" un Producto</p>
          </div>
          <div class="card-action">
            <a href="#">Continuar</a>
          </div>
        </div>
      </div>
      <div class="col s2 m4 l4">
        <div class="card small">
          <div class="card-image">
            <img src="<?= asset('img/usuarios.jpg'); ?>">
            <span class="card-title">Añadir Usuario</span>
          </div>
          <div class="card-content">
            <p>"Añade" "Edita" o "Elimina" un Usuario</p>
          </div>
          <div class="card-action">
            <a href="#">Continuar</a>
          </div>
        </div>
      </div>
      <a class="waves-effect waves-light btn-large" href="<?= url('inicio'); ?>"><i class="material-icons left">arrow_back</i>Volver a la pagina</a>
@endsection